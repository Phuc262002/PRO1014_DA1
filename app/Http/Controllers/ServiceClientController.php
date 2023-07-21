<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

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
        $user = User::where('id', auth()->user()->id)->with('address_list')->first();
        $user_address = $user->address_list->where('is_default', 1)->first();
        return view('pages.client.book-services',compact('name_services', 'service_id', 'user', 'user_address'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        // return view('pages.client.book-services');
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
