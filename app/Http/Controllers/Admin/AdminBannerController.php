<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class AdminBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Pets Care - Quản lý thông tin';
        $banner = Banner::paginate(10);
        return view('pages.admin.banner_slider_manager', compact('title', 'banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.form_add_banner');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $banner = Banner::create($request->all());

        if ($banner) {
            // if ($request->save_action == 'save_and_back') {
            //     return redirect()->route('banner.index')->with('success', "Thêm thành công.");
            // } else if ($request->save_action == 'save_and_edit') {
            //     return redirect()->route('banner.edit', $banner->id)->with('success', "Thêm thành công.");
            // } else if ($request->save_action == 'save_and_new') {
            //     return redirect()->route('banner.create')->with('success', "Thêm thành công.");
            // }
            return redirect()->route('banner.index')->with('success', "Thêm thành công.");
        } else {
            return redirect()->route('banner.index')->with('error', "Thêm thất bại.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        $title = 'Pets Care - Chỉnh sửa thông tin';
        return view('pages.admin.edit_banner_slider', compact('title', 'banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $update_banner = Banner::updateOrCreate([
            'id' => $banner->id,
        ], $request->all());

        if ($update_banner) {
            // if($request->save_action == 'save_and_back'){
            //     return redirect()->route('banner.index')->with('success', "Thêm thành công.");
            // } else if ($request->save_action == 'save_and_edit'){
            //     return redirect()->route('banner.edit', $banner->id)->with('success', "Thêm thành công.");
            // } else if ($request->save_action == 'save_and_new'){
            //     return redirect()->route('banner.create')->with('success', "Thêm thành công.");
            // }
            return redirect()->route('banner.index')->with('success', "Thêm thành công.");
        } else {
            return redirect()->route('banner.index')->with('error', "Thêm thất bại.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        try {
            $delete_banner = Banner::destroy($banner->id);

            if ($delete_banner) {
                return back()->with('success', "Xóa thành công.");
            } else {
                return back()->with('error', "Xóa thất bại.");
            }
        } catch (\Exception $e) {
            return back()->with('error', "Đã xảy ra lỗi: " . $e->getMessage());
        }
    }

}