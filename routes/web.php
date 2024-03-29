<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeCon;
use App\Http\Controllers\aboutCon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('conformation');
});
Route::get('/home',[homeCon::class,'index']);
//Route::post('/homeAjax',[homeCon::class,'indexAjax']);
Route::get('/about',[aboutCon::class,'index']);
Route::post('/aboutNgo',[aboutCon::class,'ngoInfo']);