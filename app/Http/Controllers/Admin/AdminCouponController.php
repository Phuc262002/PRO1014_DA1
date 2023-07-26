<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Requests\CouponRequest;


class AdminCouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Pets Care - Quản lý mã giảm giá';
        $counpon = Coupon::paginate(10);
        return view('pages.admin.discount_manager', compact('title', 'counpon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.form_add_discount');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CouponRequest $request, Coupon $coupon)
    {
        // Lấy ngày và giờ hiện tại
        $currentDateTime = date('Y.m.d H:i');


        // dd($currentDateTime, $request->start_at, $request->end_at);

        // So sánh ngày bắt đầu giảm giá với ngày hiện tại
        if ($request->start_at < $currentDateTime) {
            return back()->with('error', "Ngày bắt đầu giảm giá không được nhỏ hơn ngày hiện tại.");
        }

        // So sánh ngày kết thúc giảm giá với ngày bắt đầu giảm giá
        if ($request->end_at <= $request->start_at) {
            return back()->with('error', "Ngày kết thúc giảm giá không được nhỏ hơn hoặc bằng ngày bắt đầu giảm giá.");
        }


        $coupon = Coupon::create($request->all());

        if ($coupon) {

            // return back()->with('success', "Thêm thành công.");

            if ($request->save_action == 'save_and_back') {
                return redirect()->route('coupon.index')->with('success', "Thêm thành công.");
            } else if ($request->save_action == 'save_and_edit') {
                return redirect()->route('coupon.edit', $coupon->id)->with('success', "Thêm thành công.");
            } else if ($request->save_action == 'save_and_new') {
                return redirect()->route('coupon.create')->with('success', "Thêm thành công.");
            }

        } else {
            return back()->with('error', "Thêm thất bại.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coupon $coupon)
    {
        $title = 'Pets Care - Chỉnh sửa mã giảm giá';
        return view('pages.admin.edit_discount', compact('title', 'coupon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CouponRequest $request, Coupon $coupon)
    {
        $update_coupon = Coupon::updateOrCreate([
            'id' => $coupon->id,
        ], $request->all());

        if ($update_coupon) {
            if ($request->save_action == 'save_and_back') {
                return redirect()->route('coupon.index')->with('success', "Cập nhập thành công.");
            } else if ($request->save_action == 'save_and_edit') {
                return redirect()->route('coupon.edit', $coupon->id)->with('success', "Cập nhập thành công.");
            } else if ($request->save_action == 'save_and_new') {
                return redirect()->route('coupon.create')->with('success', "Cập nhập thành công.");
            }
        } else {
            return back()->with('error', "Cập nhập thất bại.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coupon $coupon)
    {
        try {
            $delete_coupon = Coupon::destroy($coupon->id);

            if ($delete_coupon) {
                return back()->with('success', "Xóa thành công.");
            } else {
                return back()->with('error', "Xóa thất bại.");
            }
        } catch (\Exception $e) {
            return back()->with('error', "Đã xảy ra lỗi: " . $e->getMessage());
        }
    }
}