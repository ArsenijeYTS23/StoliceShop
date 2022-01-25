<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function home($category, $product){
       $cat=\App\Category::where('title',str_replace('_',' ',$category))->first();
       $product= \App\Product::where('category_id', $cat->id)->where('title',str_replace('_',' ',$product))->first();
       $categories= \App\Category::get();
       $related= \App\Product::where('category_id',$cat->id)->get()->take(4);
     return view('ecommerce_single',compact('product','categories','related'));
    }
}
