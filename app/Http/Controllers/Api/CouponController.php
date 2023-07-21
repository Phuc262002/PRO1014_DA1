<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupon_code = request()->input('coupon_code');
        $coupon = Coupon::where('coupon_hash_id', $coupon_code)->first();

        if(!$coupon) {
            return [
                'status' => 'error',
                'message' => 'Mã giảm giá không tồn tại'
            ];
        } else {
            if(Carbon::now()->between($coupon->start_at, $coupon->end_at)) {
                return [
                    'status' => 'success',
                    'message' => 'Mã giảm giá hợp lệ',
                    'data' => $coupon
                ];
            } else {
                return [
                    'status' => 'error',
                    'message' => 'Mã giảm giá đã hết hạn'
                ];
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Coupon $coupon)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coupon $coupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coupon $coupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coupon $coupon)
    {
        //
    }
}
