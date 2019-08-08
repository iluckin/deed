<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Deed;
use Illuminate\Http\Request;
use App\Services\CommunityService;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

/**
 * Class DeedController
 * @package App\Http\Controllers\Admin
 */
class CarController extends Controller
{
    /**
     * @param Request $request
     */
    public function index(Request $request)
    {
        $queryBuilder = Deed::with('community')
            ->car()
            ->latest()->oldest('status');

        if ($search = $request->input('search')) {
            if (is_numeric($search) && strlen($search) == 11) {
                $queryBuilder->where(['mobile' => $search]);
            }
            else {
                $queryBuilder->where('client_name', 'like', '%' . $search . '%');
            }
        }
        $status = $request->input('status', null);
        if (is_numeric($status) && $status >= 0) {
            if ($status != '-1') {
                $queryBuilder->where('status', $status);
            }
        }

        $community = $request->input('community_id', -1);
        if ($community != -1 && $community > 0) {
            $queryBuilder->where('community_id', $community);
        }

        $items = $queryBuilder->paginate(16)->appends($request->all());

        return view('car.index', compact('items'));
    }

    /**
     * @param Request $request
     * @param $id
     */
    public function show(Request $request, $id)
    {
        return view('car.show');
    }

    /**
     * @param Request $request
     */
    public function create(Request $request)
    {
        $communities = CommunityService::selectItems();

        return view('car.create', compact('communities'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request, $id)
    {
        $item = Deed::with('community')->findOrFail($id);
        $communities = CommunityService::selectItems();

        return view('car.edit', compact('item', 'communities'));
    }

    /**
     * @param Request $request
     * @return array
     */
    public function store(Request $request)
    {
        if (! $request->input('import')) {
            $this->validate($request, [
                'floor' => 'required',
                'unit' => 'required',
                'room' => 'required',
                'batch' => 'required',
                'community_id' => 'required|numeric|min:1'
            ]);

            $item = Deed::create($request->except(['_toekn', '_method']));
            return back()->withErrors('添加成功');
        }

        $this->validate($request, [
            'community_id' => 'required|numeric|min:1',
            'file' => 'required|mimes:xls,xlsx,xlsm,xltx,xltm'
        ]);

        $file = $request->file('file');
        if (! $file->isValid()) {
            return back()->withInput($request->all())->withErrors('上传文件不合法!');
        }
        // 导入
        $load = Excel::toCollection(null, $file);
        if (! $load->count()) {
            return back()->withErrors('导入失败！请检查导入模板是否正确。');
        }

        try {
            $deeds = [];
            $communityId = $request->input('community_id', 0);
            foreach ($load->first() as $index => $item) {
                if ($index <= 1) {
                    continue;
                }

                list($floor, $unit, $room) = explode('-', $item[0], 3);
                $deliverDate = trim($item[4] ?? '') ? Carbon::createFromFormat('Y-m-d', $item[4], 'PRC')->format('Y-m-d') : null; // $item[8]
                $deeds[] = [
                    'community_id' => $communityId, 'floor' => $floor, 'unit' => $unit, 'batch' => $request->input('batch', 1),
                    'room' => $room, 'client_name' => $item[1] ?? null, 'identity_no' => $item[2] ?? null, 'type' => $request->input('type', 2),
                    'deliver_date' => $deliverDate, 'status' => $request->input('status', 0),
                    'mobile' => $item[3] ?? null, 'change_owner' => $item[5] ?? null, 'dispute' => $item[6] ?? null,
                    'created_at' => $now = Carbon::now('PRC')->toDateTimeString(), 'updated_at' => $now,
                ];
            }

            Deed::insert($deeds);
            return back()->withErrors('操作成功！共导入' . count($deeds) . '条记录.');
        } catch (\Exception $exception) {
            info(__METHOD__, [$exception->getCode() => $exception->getMessage()]);
        }

        return back()->withErrors('导入失败， 请检导入模板或数据格式！');
    }

    /**
     * @param Request $request
     * @param $id
     */
    public function destory(Request $request, $id)
    {

    }

    /**
     * @param Request $request
     * @param $id
     * @return array
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'floor' => 'required',
            'unit' => 'required',
            'room' => 'required',
        ]);

        $item = Deed::findOrFail($id);
        $item->update($request->except(['_toekn', '_method']));

        return back()->withErrors('更新成功');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function import(Request $request)
    {
        $communities = CommunityService::selectItems();

        return view('car.import', compact('communities'));
    }

    /**
     * @return file
     */
    public function template()
    {
        $file = storage_path('app/car.xls');

        return response()->download($file, 'car.xls');
    }
}
