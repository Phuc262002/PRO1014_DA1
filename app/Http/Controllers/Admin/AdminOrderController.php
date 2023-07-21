<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Pets Care - Quản lý đơn hàng';
        $order = Order::with('user', 'address', 'payment', 'order_detail')->paginate(10);
        

        $status = request()->input('status');

        if($status == '') {
            return view('pages.admin.order_all', compact('title', 'order'));


        } else if($status == "PENDING") {
            $order = Order::where('status', 'PENDING')->with('user', 'address', 'payment', 'order_detail')->paginate(10);
            return view('pages.admin.order_all', compact('title', 'order'));


        } else if($status == "HOLDING") {
            $order = Order::where('status', 'HOLDING')->with('user', 'address', 'payment', 'order_detail')->paginate(10);
            return view('pages.admin.order_all', compact('title', 'order'));

        } else if($status == "ACCEPTED") {
            $order = Order::where('status', 'ACCEPTED')->with('user', 'address', 'payment', 'order_detail')->paginate(10);
            return view('pages.admin.order_all', compact('title', 'order'));

        } else if($status == "COMPLETED") {
            $order = Order::where('status', 'COMPLETED')->with('user', 'address', 'payment', 'order_detail')->paginate(10);
            return view('pages.admin.order_all', compact('title', 'order'));

        } else if($status == "CANCELED") {
        $order = Order::where('status', 'CANCELED')->with('user', 'address', 'payment', 'order_detail')->paginate(10);
        return view('pages.admin.order_all', compact('title', 'order'));

        }else{
            $order = Order::with('user', 'address', 'payment', 'order_detail')->paginate(10);
        return view('pages.admin.order_all', compact('title', 'order'));
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
