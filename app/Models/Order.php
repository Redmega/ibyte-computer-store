<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models as Models;

class Order extends Model
{
    /**
    * Get the status
    *
    * @return Status
    */
    public function status() {
        return $this->belongsTo(Models\Status::class);
    }

    /**
    * Get the build
    *
    * @return Build
    */
    public function build() {
        return $this->hasOne(Models\Build::class);
    }

    /**
    * Get the user
    *
    * @return User
    */
    public function user() {
        return $this->belongsTo(Models\User::class);
    }

    /**
    * Get the address
    *
    * @return Address
    */
    public function address() {
        return $this->hasOne(Models\Address::class);
    }

    public function subtotal() {
      $subtotal = $this->build->products()->reduce(function($c, $p) {
        return $c + $p->salePrice;
      }, 0);
      return $subtotal;
    }
}
