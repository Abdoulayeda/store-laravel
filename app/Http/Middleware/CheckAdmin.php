<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role === "admin"){
       //     return redirect('/');
            return $next($request);
        }
        return redirect('/')->with('message','Vous n\'avez pas le droit d\'accés');
    }
}
