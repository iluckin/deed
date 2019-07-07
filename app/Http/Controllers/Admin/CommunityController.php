<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreCommunityRequest;
use App\Http\Requests\Admin\UpdateCommunityRequest;
use App\Models\Community;
use App\Models\Region;
use App\Services\CommunityService;
use DemeterChain\C;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class CommunityController
 * @package App\Http\Controllers\Admin
 */
class CommunityController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $queryBuilder = Community::latest();

        if ($name = $request->input('search')) {
            $queryBuilder->where('name', 'like', '%' . $name . '%');
        }

        $items = $queryBuilder->paginate();

        return view('community.index', compact('items'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('community.create');
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request, $id)
    {
        $item = Community::findOrFail($id);

        return view('community.edit', compact('item'));
    }

    /**
     * @param StoreCommunityRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCommunityRequest $request, $id)
    {
        $item = Community::findOrFail($id);

        if ($name = $request->input('name') == $item->name) {
            $result = Community::where(['id' => $id])
                ->update(array_filter($request->except(['_method', '_token', 'status'])));
        }

        else {
            if (Community::where(['name' => $name])->exists()) {
                return back()->withErrors('小区名称已存在了。');
            }
        }

        return back()->withErrors('更新成功');
    }

    /**
     * @param StoreCommunityRequest $request
     * @return array
     */
    public function store(StoreCommunityRequest $request)
    {
        $item = CommunityService::create($request);

        return back()->withErrors('添加成功');
    }
}
