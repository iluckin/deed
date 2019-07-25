<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $queryBuilder = Banner::latest('published_at');
        $status = $request->input('publish', -1);
        if ($status != -1 && $status == 0)
            $queryBuilder->whereNull('published_at');
        else if ($status != -1 && $status == 1)
            $queryBuilder->whereNotNull('published_at');

        if ($title = $request->input('search', ''))
            $queryBuilder->where('title', 'lick', '%' . trim($title) . '%');

        $items = $queryBuilder->paginate(16)->appends($request->all());

        return view('banner.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'link' => 'required|url',
            'file' => 'required|image'
        ]);

        $name = uniqid('B') . '.' . $request->file('file')->getClientOriginalExtension();
        $imagePath = 'images/banners/' . date('Ymd') . '/' . $name;

        $disk = Storage::disk('qiniu');

        if (! $disk->put($imagePath, file_get_contents($request->file('file')))) {
            return back()->withErrors('上传文件失败.');
        }

        $imageUrl =  $disk->getUrl($imagePath);

        $newBanner = array_merge(['admin_id' => Auth::id(), 'image' => $imageUrl], $request->only(
            'title', 'link'
        ));

        Banner::create(array_merge($newBanner, [
            'published_at' => $request->input('publish') == 1 ? date('Y-m-d H:i:s') : null
        ]));

        return back()->withErrors('添加成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Banner::findOrFail($id);

        return view('banner.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Banner::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'link' => 'required|url',
            'file' => 'required|image'
        ]);

        $banner = array_merge(['admin_id' => Auth::id()], $request->only(
            'title', 'link'
        ));

        if ($request->hasFile('file')) {
            $name = uniqid('B') . '.' . $request->file('file')->getClientOriginalExtension();
            $imagePath = 'images/banners/' . date('Ymd') . '/' . $name;

            $disk = Storage::disk('qiniu');

            if (! $disk->put($imagePath, file_get_contents($request->file('file')))) {
                return back()->withErrors('上传文件失败.');
            }

            $banner['image'] =  $disk->getUrl($imagePath);
        }

        $item->update(array_merge($banner, [
            'published_at' => $request->input('publish') == 1 && (! $item->published_at) ? date('Y-m-d H:i:s') : null
        ]));

        return back()->withErrors('添加成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
