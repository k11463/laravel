<?php

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

Route::get('/title/{tit}', function ($tit) {
    return view('welcome', [
        "title" => $tit
    ]);
});

Route::get('/sizon/{tit}', function($tit){
  return view('index', [
    'title' => $tit
  ]);
});
