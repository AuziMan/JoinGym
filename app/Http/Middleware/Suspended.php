<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class Suspended
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
        if(Auth::check() && Auth::user()->role =='suspended')
        {
            return $next($request);
        }
        elseif(Auth::check() && Auth::user()->role =='admin')
        {
            return redirect('/admin');
        }
        else
        {
            return redirect('/customer');
        }
    }
}
