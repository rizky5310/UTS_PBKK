<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check()) {
            return redirect('login');
        }

        return $next($request);
    }
}
