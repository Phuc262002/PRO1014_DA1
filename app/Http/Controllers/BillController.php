<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_detail;
use App\Models\User;
use App\Models\Product;
use App\Models\Payment;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Pets Care - Chi tiết đơn hàng';
        $bill_id = request()->input('bill_id');
        $order = Order::where('order_hash_id', $bill_id)->with('user', 'address', 'payment', 'order_detail', 'coupon')->first();
        
        if($order){
            $order_detail_list = Order_detail::where('order_id', $order->id)->with('product', 'order')->get();
            // dd($order, $order_detail_list);
            if($order->user_id == auth()->user()->id){
                return view('pages.client.invoicedetails', compact('title', 'order', 'order_detail_list'));
            } else {
                return redirect()->route('home')->with('error', 'Bạn không có quyền truy cập');
            }
        } else {
            return redirect()->route('home')->with('error', 'Đơn hàng không tồn tại');
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
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
