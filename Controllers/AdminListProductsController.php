<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminListProductsController extends Controller
{
    function home($category=0){

      if($category===0){

       $products= \App\Product::paginate(9);

     }else{
         $cat=    \App\Category::where('title',str_replace('_',' ',$category))->first()->id;
         $products= \App\Product::where('category_id',$cat)->paginate(9);
     }

    $categories= \App\Category::all();
  return view('admin/list_product',compact('products','categories','category'));



    }
}
