<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontaktController extends Controller
{
  function  home(){
    $categories= \App\Category::get();

      return view('kontakt',compact('categories'));
    }
}
