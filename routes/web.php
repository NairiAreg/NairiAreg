<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Route::post('/reg', function (Request $req) {
//     dd($req->all());
//     // return view('welcome');
// })->name('reg');




Route::get('/reg', function () {
    return view('reg');
});
Route::post('/reg-post', 'AuthController@register')->name('reg');

Route::get('/login', function () {
    return view('login');
});
Route::post('/login-post', 'AuthController@login')->name('login');
