<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models as Models;

class Product extends Model
{
    /**
    * Get the stock.
    *
    * @return Stock
    */
    public function stock() {
        return $this->hasOne(Models\Stock::class);
    }

    /**
    * Get the builds.
    *
    * @return Build[]
    */
    public function builds() {
        return $this->hasMany(Models\Build::class);
    }
}
