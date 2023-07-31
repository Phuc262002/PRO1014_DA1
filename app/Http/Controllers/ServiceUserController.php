<?php

namespace App\Http\Controllers;

use App\Models\Book_service;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Pets Care - Quản lý dịch vụ';
        $service_book = Book_service::where('user_id', auth()->user()->id)->with('user', 'service')->paginate(10);
        return view('pages.client.service-detail', compact('title', 'service_book'));
        //dd($service_book);
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
    public function show(Book_service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book_service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book_service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book_service $service)
    {
        //
    }
}
