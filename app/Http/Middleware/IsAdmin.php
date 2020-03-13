<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {return redirect()->guest('home');
    //     if(auth()->check() && $request->user()->admin==0){

    //     }
    //     return $next($request);
    // }
}
