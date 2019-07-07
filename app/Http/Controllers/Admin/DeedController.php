<?php

namespace App\Http\Controllers\Admin;

use App\Models\Community;
use App\Models\Deed;
use App\Services\CommunityService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class DeedController
 * @package App\Http\Controllers\Admin
 */
class DeedController extends Controller
{
    /**
     * @param Request $request
     */
    public function index(Request $request)
    {
        $quryBuilder = Deed::with('community')->latest()->oldest('status');

        if ($search = $request->input('search')) {
            if (is_numeric($search) && strlen($search) == 11) {
                $quryBuilder->where(['mobile' => $search]);
            }
            else {
                $quryBuilder->where('client_name', 'like', '%' . $search . '%');
            }
        }

        if ($status = $request->input('status')) {
            if ($status != '-1') {
                $quryBuilder->where('status', $status);
            }
        }

        $items = $quryBuilder->paginate(16)->appends($request->all());

        return view('deed.index', compact('items'));
    }

    /**
     * @param Request $request
     * @param $id
     */
    public function show(Request $request, $id)
    {
        return view('deed.show');
    }

    /**
     * @param Request $request
     */
    public function create(Request $request)
    {
        $communities = CommunityService::selectItems();

        return view('deed.create', compact('communities'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request, $id)
    {
        $item = Deed::with('community')->findOrFail($id);

        return view('deed.edit', compact('item'));
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
                'client_name' => 'required',
                'mobile' => 'required',
            ]);

            $item = Deed::create($request->except(['_toekn', '_method']));
            return back()->withErrors('添加成功');
        }

        // 导入

        return $request->all();
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
            'client_name' => 'required',
            'mobile' => 'required',
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

        return view('deed.import', compact('communities'));
    }
}
