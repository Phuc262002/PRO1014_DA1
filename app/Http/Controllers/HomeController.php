<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Banner;


class HomeController extends Controller
{
    public function index()
    {
        $title="Pets Care - Luôn đồng hành cùng thú cưng của bạn";
        $topnew = Product::where('status', true)
                        ->orderBy('created_at', 'desc')
                        ->take(8)
                        ->with('image_list', 'brand', 'category')
                        ->get();

        $topsale = Product::where('status', true)
                        ->where('discount_price', '>', 0)
                        ->orderBy('created_at', 'desc')
                        ->take(8)
                        ->with('image_list', 'brand', 'category')
                        ->get();
    
        

        $slider = Banner::where([
                            'status' => true,
                            'banner_type' => 'SLIDER'
                        ])
                                                
                        ->orderBy('created_at', 'desc')
                        ->get();
        
        $banner_sale = Banner::where([
                            'status' => true,
                            'banner_type' => 'BANNER_SALE'
                        ])
                                                
                        ->orderBy('created_at', 'desc')
                        ->get();
            

        return view('home', compact('title', 'topnew', 'topsale', 'slider','banner_sale'));
        
    }
}
