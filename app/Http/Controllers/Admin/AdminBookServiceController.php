<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book_service;
use Illuminate\Http\Request;

class AdminBookServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Pets Care - Quản lý dịch vụ';
        $book_service = Book_service::with('service','user');

        $search = request()->input('search');
        if($search != '') {
            $book_service->where('user_id', 'like', "%$search%");
        }

        $status = request()->input('status') ? request()->input('status') : 'ALL';
        if($status != 'ALL') {
            $book_service->where('status', $status);
        }

        $calendar = request()->input('calendar');
        if($calendar != '') {
            $calendar_ = explode(' đến ', $calendar);

            $calendar_start = str_replace(["Tháng ", ",", " "], ["", "", "-"], $calendar_[0]);
            $calendar_start = date("Y-m-d", strtotime($calendar_start));

            $calendar_end = str_replace(["Tháng ", ",", " "], ["", "", "-"], $calendar_[1]);
            $calendar_end = date("Y-m-d", strtotime($calendar_end));
        }
        
        $book_service =  $book_service->paginate(10);
        return view('pages.admin.service_all',compact('book_service','status','search','calendar'));
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
    public function show(Book_service $book_service)
    {
        // $book_service = Book_service::where('id', $book_service->id)->with('user_id', 'service_id', 'pet_name', 'description', 'status')->first();
        // $book_service_detail_list = Order_detail::where('order_id', $order->id)->with('product', 'order')->get();
        // return view('pages.admin.order_details', compact('title','order', 'order_detail_list'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book_service $book_service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book_service $book_service)
    {
        {
            $book_service = Book_service::updateOrCreate([
                'id' => $book_service->id,
            ], $request->all());
            
            if ($book_service) {
                
                return back()->with('success', "Thay đổi thành công.");
     
            } else {
                return back()->with('error', "Thay đổi thất bại.");
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book_service $book_service)
    {
        //
    }
}
