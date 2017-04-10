<?php

use App\Models\User;
use App\Models\Order;
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

  $User = App\Models\User::all();
  $Order = App\Models\Order::all();


    return view('pages.assembly', ['User' => $User], ['Order' => $Order]);
});

Route::get('/quiz', function() {
    return view('pages.quiz');
});
