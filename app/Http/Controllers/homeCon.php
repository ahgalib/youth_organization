<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeCon extends Controller
{
    public function index(){
        return view('home');
    }
}
