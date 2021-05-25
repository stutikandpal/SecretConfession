<?php

use Illuminate\Support\Facades\Route;

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

Route::get('welcome', function () {
    return view('welcome');
});

//Route::get('home/{id}', function ($id) { // for cases where backend is to be performed
    //echo $id;
    //return view('Home');
//});

Route::view('/','Home');

Route::view('index','index'); // for cases where no backend to be performed

Route::redirect('youtube','index');

Route::get('user','App\Http\Controllers\User@users');

Route::get('user/{id}','App\Http\Controllers\User@message');

//Route::view('confess','Confess');

//Route::view('feel','Feel');

Route::get('confess','App\Http\Controllers\Message@confess');

Route::post('postconfess','App\Http\Controllers\Message@postconfess');

Route::get('feel','App\Http\Controllers\Message@feel');