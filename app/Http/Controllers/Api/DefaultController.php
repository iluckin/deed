<?php

namespace App\Http\Controllers\Api;

use App\Models\Deed;
use App\Services\CommunityService;
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
     * @return array
     */
    public function deedQuery(Request $request)
    {
        $rule = [
            'community' => 'required|numeric|min:1',
            'floor' => 'required|numeric|min:1',
            'unit' => 'required|numeric|min:1',
            'room' => 'required',
        ];
        $messages = [
            'community.*' => '请选择您产权所在小区',
            'floor.*' => '请正确输入楼号',
            'unit.*' => '请正确输入单元号',
            'room.*' => '请正确输入房间号',
        ];

        $validate = Validator::make($request->all(), $rule, $messages);

        if ($validate->fails()) {
            return fail($validate->errors()->first());
        }

        $where = $request->only('floor', 'unit', 'room');

        $result = Deed::where(array_merge($where, ['community_id' => $request->input('community')]))
            ->with('community')
            ->first();

        if (! $result) {
            return fail('抱歉！未查询到记录.');
        }

        $phone = 18101333903;
        $address = "北京市生命科技园地铁站";
        $home = implode('-', [$result->community->name, $result->floor, $result->unit, $result->room]);
        $message = "";
        switch ($result->status)
        {
            case 0:
            case 1:
                $message = sprintf("您位于%s的房屋产权办理事宜尚未与我们联系，请尽快赴%s，或拨打%s电话与我们沟通，谢谢。", $home, $address, $phone);
                break;
            case 2:
                $message = sprintf("您位于%s的房屋产权办理事宜已与我们取得联系，恭喜您，您已被列入近期办理产权的业主范畴，请耐心等待。",
                    $home
                );
                break;
            case 3:
                $message = sprintf("您位于%s的房屋产权办理已顺利完成，请尽快赴%s或拨打%s电话联系我们，办理产权证书领取，谢谢。",
                    $home, $address, $phone
                );
                break;
            case 4:
                $message = sprintf("您位于%s的房屋产权书已于%s完成领取，祝您生活愉快。", $home, $result->updated_at->format('Y年m月d日'));
                break;
            default:
                $message = sprintf("您到产权办理信息存在信息不完整。请尽快拨打电话%s进行进一步补全信息!");
        }

        return success([
            'result' => $message
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

    /**
     * @param Request $request
     * @return array
     */
    public function banner(Request $request)
    {
        return $request->all();
    }
}
