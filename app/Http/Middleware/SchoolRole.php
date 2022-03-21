<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class SchoolRole
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
        if(Auth::check() && auth()->user()->user_type_id == 2){
            return $next($request);
        }
        return redirect()->route('index');
    }
}
