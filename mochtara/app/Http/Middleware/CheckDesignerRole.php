<?php 

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckDesignerRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check() || Auth::user()->role !== $role) {

            return redirect('/');
        }

        return $next($request);
    }
}
