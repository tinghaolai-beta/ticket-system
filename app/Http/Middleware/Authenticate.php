<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, \Closure $next)
    {
        if (auth()->guest()) {
            return redirect('/login/' . config('constants.userType.QA.value'));
        }

        return $next($request);
    }
}
