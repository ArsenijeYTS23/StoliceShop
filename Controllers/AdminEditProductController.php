<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use File;

class AdminEditProductController extends Controller
{
  function home($category, $product){
     $cat=\App\Category::where('title',str_replace('_',' ',$category))->first();
     $product= \App\Product::where('category_id', $cat->id)->where('title',str_replace('_',' ',$product))->first();
     $categories= \App\Category::get();
     $related= \App\Product::where('category_id',$cat->id)->get()->take(4);
   return view('admin/edit_product',compact('product','categories','related'));
  }
  function update(Request $request){
    $request->all();
   $product= \App\Product::where('id',$request->id)->first();
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




  }
  function delete_product($id){

     \App\ImageProduct::where('product_id',$id)->get();
     $images=   \App\ImageProduct::where('product_id',$id)->get();
         foreach ($images as $image){
           File::delete('./'.$image->image);
         }


     \App\ImageProduct::where('product_id',$id)->delete();
      \App\Product::where('id',$id)->delete();

      return redirect('/admin/list_product');


  }

function images_update(Request $request){

  // return  $request->id;
  if($request->hasFile('images')){
      //    \File::makeDirectory('images/city/'.$city->id, $mode = 0777, true, true);
        $images      = $request->file('images');
        foreach($images as $image){

      $slika= new \App\ImageProduct;
      $slika->product_id= $request->id;
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
   return back();


}

function delete_image($id){
    $image=   \App\ImageProduct::where('id',$id)->first();
    File::delete('./'.$image->image);
    \App\ImageProduct::where('id',$id)->delete();

    return back();

}



}
