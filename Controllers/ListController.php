<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
  function home($category=0){

    if($category===0){

     $products= \App\Product::orderBy('redosled', 'desc')->paginate(12);
      $number= \App\Product::count();

   }else{
       $cat=    \App\Category::where('title',str_replace('_',' ',$category))->first()->id;
       $products= \App\Product::where('category_id',$cat)->orderBy('redosled', 'desc')->paginate(12);
       $number= \App\Product::where('category_id',$cat)->count();
   }

  $categories= \App\Category::all();
return view('ecommerce',compact('products','categories','category','number'));

  }
}
