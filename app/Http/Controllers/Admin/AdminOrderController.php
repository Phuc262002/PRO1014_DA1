<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_detail;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Pets Care - Quản lý đơn hàng';
        $order = Order::with('user', 'address', 'payment', 'order_detail','coupon');
        

        $status = request()->input('status') ? request()->input('status') : 'ALL';
        $search = request()->input('search');
        $calendar = request()->input('calendar');

        if($search != '') {
            $order->where('order_hash_id', 'like', "%$search%");
        }

        if($calendar != '') {
            $calendar_ = explode(' đến ', $calendar);

            $calendar_start = str_replace(["Tháng ", ",", " "], ["", "", "-"], $calendar_[0]);
            $calendar_start = date("Y-m-d", strtotime($calendar_start));

            $calendar_end = str_replace(["Tháng ", ",", " "], ["", "", "-"], $calendar_[1]);
            $calendar_end = date("Y-m-d", strtotime($calendar_end));

        $order = Order::with('user', 'address', 'payment', 'order_detail');
            $order->whereBetween('created_at', [$calendar_start, $calendar_end]);
        }

        if($status != 'ALL') {
            $order->where('status', $status);
        }

        $order = $order->paginate(10);

        return view('pages.admin.order_all', compact('title', 'order', 'status', 'search', 'calendar'));
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
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $title = 'Pets Care - Thông tin đơn hàng';
        $order = Order::where('id', $order->id)->with('user', 'address', 'payment', 'order_detail', 'coupon')->first();
        $order_detail_list = Order_detail::where('order_id', $order->id)->with('product', 'order')->get();
        return view('pages.admin.order_details', compact('title','order', 'order_detail_list'));
       
    }

    /**
     * Show the form for editing the specified resource.
     * ->with('brand', 'category', 'image_list')->paginate(10)
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
        $order = Order::updateOrCreate([
            'id' => $order->id,
        ], $request->all());
        
        if ($order) {
            
            return back()->with('success', "Thay đổi thành công.");
 
        } else {
            return back()->with('error', "Thay đổi thất bại.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
