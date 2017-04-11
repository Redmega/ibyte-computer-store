<?php

<<<<<<< HEAD
use App\Models\Product;

=======
use App\Models\User;
use App\Models\Order;
>>>>>>> 2da0c100053c46b1b464465f244bff3d013b89e4
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
