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
    return view('welcome');
});

Route::get('/home', function () {
    return view('layout.home');
});

Route::get('/master', function () {
    return view('layout.Admin');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/subpage', function () {
    return view('subpage');
});

Route::get('/books2', function () {
    return view('books2');
});

Route::get('/books', function () {
    return view('books');
});

Route::get('/newrelease', function () {
    return view('newrelease');
});

Route::get('/asyastory', function () {
    return view('asyastory');
});

Route::get('/alaska', function () {
    return view('alaska');
});

Route::get('/septihan', function () {
    return view('septihan');
});

Route::get('/telukalaska', function () {
    return view('telukalaska');
});
