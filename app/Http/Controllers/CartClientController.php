<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_detail;
use App\Models\User;
use App\Models\Product;
use App\Models\Payment;
use Illuminate\Http\Request;

class CartClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Pets Care - Đơn hàng của tôi';
        $order = Order::where('user_id', auth()->user()->id)->with('user', 'address', 'payment', 'order_detail', 'coupon');
        $status = request()->input('status');
        if ($status != 'ALL') {
            $order->where('status', $status);
        }
        $order = $order->orderBy('created_at', 'desc')->paginate(10);
        return view('pages.client.cart-detail', compact('title', 'order','status'));
        //dd($order);
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

    public function getBillDetail(){

    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order, $bill_id = null)
    {
        $title ='Pets Care - Chi tiết đơn hàng của bạn';
        //return view('pages.client.bill-details', compact('title'));
        
        $order = Order::where('order_hash_id', $bill_id)->with('user', 'address', 'payment', 'order_detail', 'coupon')->first();

        //dd($order);
        if($order){
            $detail_list = Order_detail::where('order_id', $order->id)->with('product', 'order')->get();
            //dd($order, $detail_list);
            if($order->user_id == auth()->user()->id){
                return view('pages.client.bill-details', compact('title', 'order', 'detail_list'));
            } else {
                return back()->with('error', 'Đơn hàng không tồn tại');
            }
        } else {
                return back()->with('error', 'Đơn hàng không tồn tại');

        }
        
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
