<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        $check_role = [
            'superadmin' => 'usperadmin/home',
            'pendaftar' => 'pendaftar/home',
        ];

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                 return $check_role(Auth::user()->role);
            }
        }

        return $next($request);
    }
}
