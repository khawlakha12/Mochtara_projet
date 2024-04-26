<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserLogin
{
    public function handle(Request $request, Closure $next)
    {
        $request->attributes->set('is_user_logged_in', Auth::check());
        return $next($request);
    }
}