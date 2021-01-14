<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class VerifyAdmin
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
        if(count(Auth::user()->isAdmin)>0 && Auth::check()) 
            return $next($request);
        else return redirect('/login');
        
    }
}
