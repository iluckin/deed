<?php

namespace App\Http\Controllers\Api;

use App\Models\Banner;
use App\Models\Deed;
use App\Services\CarouselImageService;
use App\Services\CommunityService;
use App\Services\NavBarService;
use App\Services\NotificationService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

/**
 * Class DefaultController
 * @package App\Http\Controllers\Api
 */
class DefaultController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function init(Request $request)
    {
        return success([
            'navBars' => NavBarService::bars(),
            'carouselImages' => CarouselImageService::items(),
            'notifications' => NotificationService::titles()
        ]);
    }

    /**
     * @param Request $request
     * @return array
     */
    public function deedQuery(Request $request)
    {
        $rule = [
            'community' => 'required|numeric|min:1',
            'floor' => 'required|numeric|min:1',
            'unit' => 'required|numeric|min:1',
            'room' => 'required|min:1|max:6',
            'identity_no' => 'required|min:15|max:18',
        ];

        $messages = [
            'community.*' => '请选择您产权所在小区',
            'floor.*' => '请正确输入楼号',
            'unit.*' => '请正确输入单元号',
            'room.*' => '请正确输入房间号',
            'identity_no.*' => '请输入正确身份证号',
        ];

        $validate = Validator::make($request->all(), $rule, $messages);

        if ($validate->fails()) {
            return fail($validate->errors()->first());
        }

        $where = $request->only('floor', 'unit', 'room', 'mobile');

        $where = array_merge($where, [
            'community_id' => $request->input('community'),
            'batch' => $request->input('batch', 1),
            'type' => $request->input('type', 0)
        ]);

        $result = Deed::where($where)
            ->with('community')
            ->select([
                'type', 'community_id', 'floor', 'batch', 'unit', 'room', 'address', 'client_name', 'owner_name',
                'identity_no', 'contract_no', 'mobile', 'status', 'sub_status', 'updated_at'
            ])
            ->first();

        if (! $result) {
            return fail('抱歉！未查询到记录.', 5001);
        }
        $address = $result->community->name . implode('-', [
            $result->floor, $result->unit, $result->room
        ]);

        $notice = sprintf(
            "您位于[%s]的%s办理进度为[%s], 如有疑问请拨打%s咨询详情。",
            $address, ['住宅产权', '商业产权', '车位产权'][$request->input('type', 0)],
            $status = Deed::status()[$result->status],
            config('services.yuantang.tel', '4006008899')
        );

        return success([
            'step' => $result->status ? $result->status -1 : -1,
            'status' => $status,
            'notice' => $notice,
            'client' => $result->client_name
        ]);
    }

    /**
     * 小区选择
     *
     * @param Request $request
     * @return array
     */
    public function communities(Request $request)
    {
        return success(CommunityService::selectItems());
    }
}
