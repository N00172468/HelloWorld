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

Route::get('helloworld', function () {
    return '<h1>Hello World</h1>';
});

Route::get('ramos', function () {
    return '<h1>John Carlo M. Ramos</h1>';
});

Route::get('john', function () {
    return view('ramos');
});

Route::get('john', function () {
    return view('ramos');
});
