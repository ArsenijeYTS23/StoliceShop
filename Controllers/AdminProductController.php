<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class AdminProductController extends Controller
{
    function store(Request $request)
    {

      $validator = Validator::make($request->all(), [
                      'product'       =>'required',


                      'category'    =>'required'
                  ]);

            //      return $request->all();
      if ($validator->fails()) {
       return "eroro";
      //    $request->session()->flash('message', 'error! please try again');
      } else {
      $request->all();
      $product= new \App\Product;
      $product->title=$request->product;
      $product->category_id=$request->category;
      if(is_numeric($request->redosled)){
      $product->redosled=$request->redosled;
    }else{
      $product->redosled=0;
    }
      if(is_numeric($request->sifra)){
      $product->sifra=$request->sifra;
    }else{
      $product->sifra=0;
    }

      $product->text=$request->text;
      $product->materijal=$request->materijal;
      $product->dimenzije=$request->dimenzije;
      $product->popust=1;
      if(is_numeric($request->cena)){
      $product->cena=$request->cena;
    }else{
      $product->cena=0;
    }
    if(is_numeric($request->dostava)){
    $product->dostava=$request->dostava;
  }else{
    $product->dostava=0;
  }


      $product->save();


      if($request->hasFile('images')){
          //    \File::makeDirectory('images/city/'.$city->id, $mode = 0777, true, true);
            $images      = $request->file('images');
            foreach($images as $image){

          $slika= new \App\ImageProduct;
          $slika->product_id=$product->id;
          $slika->image=1;
          $slika->number=1;
          $slika->text2=1;
          $slika->save();

          //  $filename    = $image->getClientOriginalName();
          $filename=$slika->id.'.jpg';
             Image::make($image)->resize(500, 600)->save('./assets/images/products/'.$filename);
            $slika->image='assets/images/products/'.$filename;
            $slika->save();
             }
           }
           }
    }
}
