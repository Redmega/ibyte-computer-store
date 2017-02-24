<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models as Models;

class Build extends Model
{
    /**
    * Get the build's products
    *
    * @return Product[]
    */
    public function products() {
        return $this->hasMany(Models\Product::class);
    }

    /**
    * Get the build's order
    *
    * @return Order;
    */
    public function order() {
        return $this->belongsTo(Models\Order::class);
    }
}
