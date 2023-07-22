<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Banner;
use App\Models\Post;   



class HomeController extends Controller
{
    public function index()
    {

        $products_all = Product::all();

        foreach ($products_all as $product) {
            if($product->discount_end < date('Y-m-d')){
                $product->discount_price = 0;
                $product->save();
            }
        }

        $title="Pets Care - Luôn đồng hành cùng thú cưng của bạn";
        $topnew = Product::where('status', true)
                        // ->where('discount_price', '=', 0)
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
                        ->take(5)
                        ->get();
        
        $banner_sale = Banner::where([
                            'status' => true,
                            'banner_type' => 'BANNER_SALE'
                        ])
                                                
                        ->orderBy('created_at', 'desc')
                        ->take(2)
                        ->get();
            
        $blog = Post::orderBy('created_at', 'desc')
                    ->with('category','user_post')
                    ->take(3)
                    ->get();
                   
        return view('home', compact('title', 'topnew', 'topsale', 'slider','banner_sale','blog'));
        
    }
}
