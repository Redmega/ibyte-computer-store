<?php

namespace App\Models;

use App\Models as Models;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'admin', 'password', 'banned',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
    * Get the users' addresses
    *
    * @return Address[]
    */
    public function addresses() {
        return $this->hasMany(Models\Address::class);
    }

    /**
    * Get the users' orders
    *
    * @return Order[]
    */
    public function orders() {
        return $this->hasMany(Models\Order::class);
    }
}
