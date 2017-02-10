<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Status extends Model
{
    public $timestamps = false;
    
    /**
    * Get the orders which have this Status
    * Used in the Admin panel to look at orders.
    * TODO: Make Order model
    * @return Order[]
    */
    /*
    public function orders() {
        return $this->belongsTo('App\Models\Order');
    }
    */
}
