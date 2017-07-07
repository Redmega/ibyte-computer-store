<?php

namespace App\Http\Controllers;


use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Status;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the admin home page.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $orders = Order::all();
    $users = User::all();

    $revenue = $orders->where('payment_status', 1)->reduce(function($c, $o) {
      return $c + $o->subtotal();
    }, 0);

    return view('admin.home',
      [
        'numOrders' => $orders->count(),
        'numUsers' => $users->count(),
        'numRevenue' => $revenue,
      ]
    );
  }

  public function orders()
  {
    $orders = Order::all();
    $statuses = Status::orderBy('order','asc')->get();

    return view('admin.orders', [
        'orders' => $orders,
        'statuses' => $statuses,
    ]);
  }

  public function inventory($type = null)
  {
      $products = Product::all()->where('type', $type);
      return view('admin.inventory',
        ['products' => $products,
         'type' => $type]);
  }

  public function users()
  {
      $users = User::all()->where('admin', 0);
      return view('admin.users', [ 'users' => $users ]);
  }

  public function finance()
  {
      $orders = Order::all();
      $revenue = $orders->where('payment_status', 1)->reduce(function($c, $o) {
        return $c + $o->subtotal();
      }, 0);
      $possibleRevenue = $orders->reduce(function($c, $o) {
        return $c + $o->subtotal();
      }, 0);

      return view('admin.finance',
        ['revenue' => $revenue,
         'possibleRevenue' => $possibleRevenue,
         'orders' => $orders]);
  }
}
