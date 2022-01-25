<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use File;

class AdminHomePageController extends Controller
{
  function home(){

    $slide_banners= \App\HomeBanner::get();
    $right_banner=\App\RightBanner::first();

  return view('admin/home_page',compact('slide_banners','right_banner'));

  }

  function update_slide_banner(Request $request){

    $baner= \App\HomeBanner::where('id',$request->id)->first();
      $baner->title=$request->title;
      $baner->text1=$request->text1;
      $baner->link=$request->link;
      $baner->save();

   return    back();


  }
  function delete_slide_banner_image($image){

    File::delete('./assets/images/home_banners/'.$image.'.jpg');
    $banner= \App\HomeBanner::where('id',$image)->first();
    $banner->image='';
     $banner->save();

   return    back();


  }

  function add_slide_banner_image(Request $request){
if($request->hasFile('image')){
     $filename=$request->id.'.jpg';
       Image::make($request->file('image'))->resize(1680, 1000)->save('./assets/images/home_banners/'.$filename);

       $banner= \App\HomeBanner::where('id',$request->id)->first();
       $banner->image='./assets/images/home_banners/'.$request->id.'.jpg';
        $banner->save();
}
return back();

  }
  function update_top_right_banner(Request $request){

    $baner= \App\RightBanner::first();
      $baner->top_right_banner_title=$request->title;
      $baner->top_right_banner_txt=$request->text1;
      $baner->top_right_banner_link=$request->link;
      $baner->save();

   return    back();


  }






  function delete_top_right_banner_image(){

    File::delete('./assets/images/right_banner/top_right_banner_image.jpg');
    $banner= \App\RightBanner::first();
    $banner->top_right_banner_image='';
     $banner->save();

   return    back();



  }

  function add_top_right_banner_image(Request $request){

    if($request->hasFile('image')){
         $filename='top_right_banner_image.jpg';
           Image::make($request->file('image'))->resize(640, 840)->save('./assets/images/right_banner/'.$filename);

           $banner= \App\RightBanner::first();
           $banner->top_right_banner_image='/assets/images/right_banner/'.$filename;
            $banner->save();
    }
    return back();



  }

  function update_second_right_banner(Request $request){

    $baner= \App\RightBanner::first();
      $baner->second_right_banner_title=$request->title;
      $baner->second_right_banner_txt=$request->text1;
      $baner->second_right_banner_link=$request->link;
      $baner->save();

   return    back();


  }






  function delete_second_right_banner_image(){

    File::delete('./assets/images/right_banner/second_right_banner_image.jpg');
    $banner= \App\RightBanner::first();
    $banner->second_right_banner_image='';
     $banner->save();

   return    back();



  }

  function add_second_right_banner_image(Request $request){

    if($request->hasFile('image')){
         $filename='second_right_banner_image.jpg';
           Image::make($request->file('image'))->resize(1680, 900)->save('./assets/images/right_banner/'.$filename);

           $banner= \App\RightBanner::first();
           $banner->second_right_banner_image='/assets/images/right_banner/'.$filename;
            $banner->save();
    }
    return back();



  }


  function update_video_banner(Request $request){

    $baner= \App\RightBanner::first();
      $baner->video_banner_title=$request->title;
      $baner->video_banner_txt=$request->text1;
      $baner->video_banner_source=$request->link;
      $baner->save();

   return    back();


  }






  function delete_video_banner_image(){

    File::delete('./assets/images/right_banner/video_banner_image.jpg');
    $banner= \App\RightBanner::first();
    $banner->video_banner_image='';
     $banner->save();

   return    back();



  }

  function add_video_banner_image(Request $request){

    if($request->hasFile('image')){
         $filename='video_banner_image.jpg';
           Image::make($request->file('image'))->resize(1680, 800)->save('./assets/images/right_banner/'.$filename);

           $banner= \App\RightBanner::first();
           $banner->video_banner_image='/assets/images/right_banner/'.$filename;
            $banner->save();
    }
    return back();



  }





}
