<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
      /**
      * Get the product.
      *
      * @return User
      */
      public function product() {
          return $this->hasOne('Model\Product');
      }
}
