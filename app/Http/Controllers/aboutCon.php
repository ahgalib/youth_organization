<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutCon extends Controller
{
   public function index(){
       return view('about');
   }
}
