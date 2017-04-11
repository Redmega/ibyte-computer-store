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


Auth::routes();

Route::get('/', function () {
    return view('pages.home');
});

// Route::get('/', 'HomeController@index');

Route::get('/checkout', function() {
    return view('pages.checkout');
});

Route::get('/assembly', function () {
    $Product = App\Models\Product::all();
    return view('pages.assembly', [ 'Products' => $Product]);
});

Route::get('/quiz', function() {
    return view('pages.quiz');
});

Route::get('user/{id}', 'UserController@show');
