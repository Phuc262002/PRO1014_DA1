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
        $book_service = Book_service::paginate(10);
        $search = request()->input('search');
        if($search != '') {
            $book_service->where('user_id', 'like', "%$search%");
        }
        $status = request()->input('status') ? request()->input('status') : 'ALL';
        if($status != 'ALL') {
            $book_service->where('status', $status);
        }
        return view('pages.admin.service_all',compact('book_service','status','search'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book_service $book_service)
    {
        //
    }
}
