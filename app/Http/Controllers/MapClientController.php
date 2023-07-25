<?php

namespace App\Http\Controllers;

use App\Models\Information_user;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MapClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return view('pages.client.maps');
        $title = 'Pets Care - Chỉnh sửa địa chỉ';
        //$inforUser = Information_user::where('user_id',Client()->user()->id)->with('id','name','address','phone');
        return view('pages.client.edit-maps', compact('title','inforUser'));

        //$infor_user = Information_user::where('id', '=', Client::Information_user()->id);
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
