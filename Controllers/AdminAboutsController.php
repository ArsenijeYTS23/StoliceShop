<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use File;

class AdminAboutsController extends Controller
{

  function home(){

    $abouts= \App\About::first();
//    $right_banner=\App\RightBanner::first();

  return view('admin/abouts',compact('abouts'));

  }


  function update_abouts(Request $request){

    $baner= \App\About::first();
      $baner->right_banner_title=$request->title;
      $baner->right_banner_text=$request->text1;

      $baner->save();

   return    back();


  }






  function delete_about_top_banner_image(){

    File::delete('./assets/images/right_banner/about_top.jpg');
    $banner= \App\About::first();
    $banner->top_banner_image='';
     $banner->save();

   return    back();



  }

  function add_about_top_banner_image(Request $request){

    if($request->hasFile('image')){
         $filename='about_top.jpg';
           Image::make($request->file('image'))->resize(1680, 900)->save('./assets/images/right_banner/'.$filename);

           $banner= \App\About::first();
           $banner->top_banner_image='/assets/images/right_banner/'.$filename;
            $banner->save();
    }
    return back();



  }


  function delete_about_right_banner_image(){

    File::delete('./assets/images/right_banner/about_right.jpg');
    $banner= \App\About::first();
    $banner->right_banner_image='';
     $banner->save();

   return    back();



  }

  function add_about_right_banner_image(Request $request){

    if($request->hasFile('image')){
         $filename='about_right.jpg';
           Image::make($request->file('image'))->resize(640, 420)->save('./assets/images/right_banner/'.$filename);

           $banner= \App\About::first();
           $banner->right_banner_image='/assets/images/right_banner/'.$filename;
            $banner->save();
    }
    return back();



  }
}
