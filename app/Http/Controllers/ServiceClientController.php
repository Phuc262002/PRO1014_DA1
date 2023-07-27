<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Book_service;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\BookServiceRequest;



class ServiceClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title="Pets Care - Luôn đồng hành cùng thú cưng của bạn";
        $data_services = Service::all();
        return view('pages.client.services', compact('title','data_services'));
        
    }
    public function create()
    {
        $service_id = request()->input('service_id');
        $name_services = Service::all();
        return view('pages.client.book-services',compact('name_services', 'service_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookServiceRequest $request)
    {
        $currentDateTime = date('Y.m.d H:i');
        if ($request->start_at < $currentDateTime) {
            return back()->with('error', "Vui lòng nhập thời gian hiện tại.");
        } else{
            redirect()->route('dich-vu-ca-nhan.index')->with('success', 'Đặt lịch dịch vụ thành công');
        }
        
        if(auth()->check()){
            $user_id = auth()->user()->id;
            $service = Service::where('id', $request->service_id)->first();
            $book_service = Book_service::create([
                'user_id' => $user_id,
                'book_service_hash_id' => 'DV'.time().rand(1000,9999),
                'service_id' => $request->service_id,
                'pet_name' => $request->pet_name,
                'book_date' => $request->book_date,
                'book_time' => $request->book_time,
                'description' => $request->description,
                'total_price' => $service->discount_price != 0 ? $service->discount_price : $service->price,
            ]);

            if($book_service){
                return redirect()->route('dich-vu-ca-nhan.index')->with('success', 'Đặt lịch dịch vụ thành công');
            }else{
                return back()->with('error', 'Đặt lịch dịch vụ thất bại');
            }
        }else{
            return back()->with('error', 'Bạn cần đăng nhập để đặt lịch dịch vụ');
        }

        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $product)
    {
        //
    }
}
