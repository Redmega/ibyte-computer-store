<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models as Models;

class Address extends Model
{
    /**
    * Get the user
    *
    * @return User
    */
    public function user() {
        return $this->belongsTo(Models\User::class);
    }

    /**
    * Get the orders
    *
    * @return Order[]
    */
    public function orders() {
        return $this->belongsTo(Models\Order::class);
    }
}
