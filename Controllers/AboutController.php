<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function about(){
   $about= \App\About::first();
   $categories= \App\Category::get();

return view('about',compact('about','categories'));

    }
}
