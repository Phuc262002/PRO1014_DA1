<?php

namespace App\Http\Controllers;

use App\Models\Service;
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
        // $name_services = Service::all();
        // return view('pages.client.book-services',compact('name_services'));
        dd($request->all());
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
