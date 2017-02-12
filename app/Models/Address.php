<?php

namespace App\Models;

use App\Models as Model;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
    * Get the addresses user.
    *
    * @return User
    */
    public function user() {
        return $this->hasOne('Model\User');
    }
}
