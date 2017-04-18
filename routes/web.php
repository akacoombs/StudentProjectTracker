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

Route::get('/', ['uses' => 'checkLogin@check']);

Route::get('/signup', function(){
    return view('SignUp');
});

Route::get('/index', function(){
    return view('Index');
});

Route::get('/login', function(){
    return view('login');
});

Route::post('/create', 'newuser@store');

