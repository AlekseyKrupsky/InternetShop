<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class TestMiddleware
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
        if(Auth::user()!== null && Auth::user()->name ==='admin'){
            return $next($request);
        }

        Log::error('test error');
        Log::info('Someone try to get access');

     return redirect('/');
    }
}
