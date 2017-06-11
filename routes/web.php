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

Route::get('hello','Hello@index');

Route::get('/hello/{name}', 'Hello@show');

Route::get('blade', function () {
    $drinks = array('Vodka','Gin','Brandy','Rum');
    return view('page', array(
        'name' => 'TheRaven',
        'day' => 'Friday',
        'drinks' => $drinks
    ));
});

Route::get('products', function () {
    return view('products');
});