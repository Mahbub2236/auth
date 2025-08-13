<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->cookie('user_id')) {
            return redirect('/dashboard');
        }

        return $next($request);
    }
}
