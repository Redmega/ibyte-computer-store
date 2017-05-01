<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models as Models;

class Stock extends Model
{
    /**
    * Get the product.
    *
    * @return Product
    */
    public function product() {
        return $this->belongsTo(Models\Product::class);
    }
}
