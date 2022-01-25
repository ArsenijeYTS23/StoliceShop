<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
  function    cart(Request $request){
   $categories= \App\Category::get();
    $cart= $request;

       $ar= array_chunk(collect($cart)->toArray(),5);
          array_pop($ar);
           $ar;

          [ \App\Product::where('title',$ar[0][1])->first(),$ar[0][0]];

            foreach($ar as $ara){

            $product_amount[]=[\App\Product::where('title',$ara[1])->first(),$ara[0]];



            }
             $product_amount;

           return view('korpa',compact('product_amount','categories'));
      }
      function poruci(Request $request){
        $cart= $request;
        $ar= collect($cart)->toArray();
      $araaa=  array_splice($ar, -3);
       $araaa;
       $ar;
  return     [array_chunk(collect($ar)->toArray(),2),$araaa];
      }
}
