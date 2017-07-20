<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function update(Request $request) {
      $product = Product::where('id',$request->id)->first();
      $product->price = $request->price;
      $product->salePrice = $request->salePrice;
      $product->stock->quantity = $request->quantity;
      $product->stock->save();
      $product->save();
      return back();
    }
}
