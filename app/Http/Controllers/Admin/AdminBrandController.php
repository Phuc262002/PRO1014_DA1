<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;



class AdminBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('pages.admin.brand_manager', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.form_add_brand');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request)
    {
        $brands = Brand::create($request->all());
        if ($brands) {
            if ($request->save_action == 'save_and_back') {
                return redirect()->route('brands.index')->with('success', "Thêm thương hiệu thành công.");
            } else if ($request->save_action == 'save_and_edit') {
                return redirect()->route('brands.edit', $brands->id)->with('success', "Thêm thương hiệu thành công.");
            } else if ($request->save_action == 'save_and_new') {
                return redirect()->route('brands.create')->with('success', "Thêm thương hiệu thành công.");
            }
        } else {
            return back()->with('error', "Thêm thương hiệu thất bại.");
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('pages.admin.edit_brand', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandRequest $request, Brand $brand)
    {

        $update_brand = Brand::updateOrCreate([
            'id' => $brand->id,
        ], $request->all());

        if ($update_brand) {
            if ($request->save_action == 'save_and_back') {
                return redirect()->route('brands.index')->with('success', "Cập nhật thành công.");
            } else if ($request->save_action == 'save_and_edit') {
                return redirect()->route('brands.edit', $brand->id)->with('success', "Cập nhật thành công.");
            } else if ($request->save_action == 'save_and_new') {
                return redirect()->route('brands.create')->with('success', "Cập nhật thành công.");
            }
        } else {
            return back()->with('error', "Cập nhật thất bại.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    { {
            try {
                $delete_brand = Brand::destroy($brand->id);

                if ($delete_brand) {
                    return back()->with('success', "Xóa thương hiệu thành công.");
                } else {
                    return back()->with('error', "Xóa thương hiệu thất bại.");
                }
            } catch (\Exception $e) {
                return back()->with('error', "Đã xảy ra lỗi: " . $e->getMessage());
            }
        }
    }
}