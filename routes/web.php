<?php

use Illuminate\Http\Request;

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

Route::group(['prefix' => 'admin'], function() {
  Route::get('/', ['as' => 'admin/index', 'uses' => 'AdminController@index']);
  Route::get('orders', ['as' => 'admin/orders', 'uses' => 'AdminController@orders']);
  Route::get('inventory/{type?}', ['as' => 'admin/inventory', 'uses' => 'AdminController@inventory']);
  Route::get('users', ['as' => 'admin/users', 'uses' => 'AdminController@users']);
  Route::get('finance', ['as' => 'admin/finance', 'uses' => 'AdminController@finance']);
});

Route::resource('products','ProductController');

Route::get('checkout', function() {
    $products = App\Models\Product::all();
    return view('pages.checkout',
      [ 'products' => $products]
    );
});

Route::get('assembly', function (Request $request) {
    $products = App\Models\Product::all();
    return view('pages.assembly',
    [ 'products' => $products,
      'readonly' => $request->input('readonly') or false,
      'build_id' => $request->input('build_id') or null,
    ]
  );
})->name('assembly');

Route::get('/quiz', function() {
    return view('pages.quiz');
});

Route::get('user/{id}', 'UserController@show');
