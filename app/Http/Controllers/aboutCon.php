<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutCon extends Controller
{
   public function index(){
       return view('about');
   }

   public function ngoInfo(Request $request){
    return $request->all();
   }
}
