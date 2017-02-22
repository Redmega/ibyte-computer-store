<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
      /**
      * Get the stock.
      *
      * @return User
      */
      public function stock() {
          return $this->hasOne('Model\Stock');
      }
}
