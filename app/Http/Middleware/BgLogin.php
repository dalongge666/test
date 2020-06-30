<?php

namespace App\Http\Middleware;

use Closure;

class BgLogin
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
        if( !session()->has('aid') ){
            return redirect()->route('bg');
        }

        return $next($request);
    }
}
