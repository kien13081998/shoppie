<?php

namespace shoppie\Http\Middleware;

use Closure;
use Auth;

class MyMiddleeware
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
           if(Auth::check()) {
               return $next($request);
           } else {
               return redirect('user/login');
           }

       }
}
