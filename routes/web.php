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
Route::get('/test', function () {
    return view('beranda/home');
});


Route::get('/', function () {
    return view('lomba/ctf');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/appinov', function(){
    return view('app_inovation');
});

Route::get('/news', function(){
    return view('artikel_berita');
});

Route::get('/bizzit', function(){
    return view('business_it_case');
});

Route::get('/bplan', function(){
    return view('business plan');
});

Route::get('/ctf', function(){
    return view('capture the flag');
});

Route::get('faq', function(){
    return view('faq');
});

Route::get('games', function(){
    return view('games');
});

Route::get('cp', function(){
    return view('programming');
});

Route::get('smartdev', function(){
    return view('smart device');
});


