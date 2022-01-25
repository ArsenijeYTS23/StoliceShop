<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
function    test(Request $request){

  $aaaa= $request;
//   $result =collect($aaaa)->chunk(5);
//    foreach($result as $res){
//   foreach ($res as $key => $value) {
//     $rez[]=$value;
//   }
// }
//   return array_chunk($rez,5)[0][0];

     $ar= array_chunk(collect($aaaa)->toArray(),5);
        array_pop($ar);
        return $ar;
         // foreach($ar as $ooo){
         //   $ww[]= $ooo[1];
         // }
         // return $ww;
    }
}
