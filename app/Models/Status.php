<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models as Models;

class Status extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'code';

    /**
    * Get the orders which have this Status
    * Used in the Admin panel to look at orders.
    * @return Order[]
    */
    public function orders() {
        return $this->hasMany(Models\Order::class);
    }

}
