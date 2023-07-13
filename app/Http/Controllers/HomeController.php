<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Banner;


class HomeController extends Controller
{
    public function index()
    {
        $title="Pets Care";
        $topnew = Product::where('status', true)
                        ->orderBy('created_at', 'desc')
                        ->take(8)
                        ->get();
        // dd($products);
        

        $topsale = Product::where('status', true)
                        ->where('discount_price', '>', 0)
                        ->orderBy('created_at', 'desc')
                        ->take(8)
                        ->get();
        // dd($products);
        

        $banner = Banner::where([
                                    'status' => true,
                                    'banner_type' => 'SLIDER'
                                ])
                                                
                        ->orderBy('created_at', 'desc')
                        ->get();

        return view('home', compact('title', 'topnew', 'topsale', 'banner'));
    }
}
