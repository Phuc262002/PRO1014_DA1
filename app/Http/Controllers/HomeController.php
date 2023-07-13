<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $title="Pets Care";
        $products = Product::where('status', true)
                        ->orderBy('created_at', 'desc')
                        ->take(8)
                        ->get();
        return view('home', compact('title'));
    }
}
