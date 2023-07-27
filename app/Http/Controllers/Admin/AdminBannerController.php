<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'img_banner' => 'required',
            'introduction' => 'required|max:255',
            'title' => 'required|max:255'
            // 'phone' => 'required|numeric|max:15'
        ], [
            'img_banner.required' => 'Ảnh không được để trống',
            'introduction.required' => 'Nội dung không được để trống',
            'introduction.max' => 'Nội dung không dài quá 255 kí tự',
            'title.required' => 'Tiêu đề không được để trống',
            'title.max' => 'Tiêu đề không dài quá 255 kí tự',

        ]);

        if ($validator->fails()) {
            return back()->with('error', $validator->errors()->first());
        }
        if ($request->img_banner == 'Chưa có ảnh nào được chọn...') {
            return back()->with('error', "Vui lòng chọn ảnh.");
        }
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
     * Diplay the specified resource.
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
        $validator = Validator::make($request->all(), [
            'img_banner' => 'required',
            'introduction' => 'required|max:255',
            'title' => 'required|max:255'
            // 'phone' => 'required|numeric|max:15'
        ], [
            'img_banner.required' => 'Ảnh không được để trống',
            'introduction.required' => 'Nội dung không được để trống',
            'introduction.max' => 'Nội dung không dài quá 255 kí tự',
            'title.required' => 'Tiêu đề không được để trống',
            'title.max' => 'Tiêu đề không dài quá 255 kí tự',

        ]);

        if ($validator->fails()) {
            return back()->with('error', $validator->errors()->first());
        }
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