<?php

namespace App\Http\Controllers;

use App\Models\Service;
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

}
