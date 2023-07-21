<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_detail;
use App\Models\User;
use App\Models\Product;
use App\Models\Payment;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Pets Care - Thanh toán';
        $user = User::where('id', auth()->user()->id)->with('address_list')->first();
        $address_default = $user->address_list->where('is_default', 1)->first();
        $payment_list = Payment::all();
        if ($address_default) {
            return view('pages.client.checkout', compact('title', 'user', 'address_default', 'payment_list'));
        } else {
            return redirect()->route('cart')->with('error', 'Vui lòng thêm địa chỉ giao hàng');
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
        $cart = json_decode($request->cart);

        $checkQuantity = true;

        foreach ($cart as $item) {
            $product = Product::find($item->id);
            if ($product->quantity < $item->quantity) {
                $checkQuantity = false;
                break;
            }
        }

        if ($checkQuantity) {
            $order = new Order();
            $order->order_hash_id = 'DH' . time().rand(1000, 9999);
            $order->user_id = auth()->user()->id;
            $order->address_id = $request->address_id;
            $order->payment_id = $request->payment_id;
            $order->pre_total = $request->pre_total;
            $order->total = $request->total;
            if ($request->coupon_id) {
                $order->coupon_id = $request->coupon_id;
            }
            $order->save();

            foreach ($cart as $item) {
                $order_detail = new Order_detail();
                $order_detail->order_id = $order->id;
                $order_detail->product_id = $item->id;
                $order_detail->quantity = $item->quantity;
                $order_detail->price = $item->price;
                $order_detail->save();
            }

            foreach ($cart as $item) {
                $product = Product::find($item->id);
                $product->quantity = $product->quantity - $item->quantity;
                $product->save();
            }

            return back()->with([
                'success' => 'Đặt hàng thành công',
                'bill_link' => '/hoa-don?bill_id=' . $order->order_hash_id,
            ]);
        } else {
            return back()->with('error', 'Số lượng sản phẩm không đủ');
        }
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
