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
        return $this->hasOne(Models\Status::class);
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
        return $this->hasOne(Models\User::class);
    }
}