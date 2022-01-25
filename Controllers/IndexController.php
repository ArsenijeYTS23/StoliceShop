<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function home(){
   $banner_slide= \App\HomeBanner::get();
   $products= \App\Product::orderBy('redosled', 'desc')->get();
   $right_banner= \App\RightBanner::first();
   $categories= \App\Category::get();


return view('index',compact('banner_slide','products','right_banner','categories'));

    }
}
