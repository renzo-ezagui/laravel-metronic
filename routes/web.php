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

Route::get('/', function () {
    return view('landing');
});
Route::get('/metronic', function () {
    return view('metronic');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/scrapping-bot','ScrappingBot@index');