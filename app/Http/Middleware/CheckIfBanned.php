<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIfBanned
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if($user = Auth::user())
      {
        if($user->banned)
        {
          return redirect('/banned');
        }
      }

      return $next($request);
    }

    protected $except = [
     '/banned'
    ];
}
