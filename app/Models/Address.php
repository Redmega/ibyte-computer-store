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
        return $this->hasOne(Models\User::class);
    }
}
