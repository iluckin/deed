<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreCommunityRequest;
use App\Http\Requests\Admin\UpdateCommunityRequest;
use App\Models\Community;
use App\Models\Region;
use App\Services\CommunityService;
use App\Services\RegionService;
use DemeterChain\C;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
        $queryBuilder = Community::latest()->leftJoin('deeds', 'deeds.community_id', '=',  'communities.id')
            ->select(['communities.*', DB::raw('count(deeds.id) as deeds')])
            ->groupBy('communities.id');

        // select a.*, count(b.id) as item from `communities` a left join `deeds` b on b.`community_id` = a.id group by a.id
        if ($name = $request->input('search')) {
            $queryBuilder->where('name', 'like', '%' . $name . '%');
        }

        $items = $queryBuilder->paginate(16);

        return view('community.index', compact('items'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        $cities = RegionService::cities(1);

        return view('community.create', compact('cities'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request, $id)
    {
        $item = Community::findOrFail($id);
        $cities = RegionService::cities(1);
        $towns = RegionService::towns($item->city_id);

        return view('community.edit', compact('item', 'cities', 'towns'));
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
