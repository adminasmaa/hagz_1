<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class invest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!empty(auth()->user())) {
            if (auth()->user()->account_type = 'invest') {
                return $next($request);

            }
        } else {
            return redirect(route('sitelogin'));

        }
    }
}