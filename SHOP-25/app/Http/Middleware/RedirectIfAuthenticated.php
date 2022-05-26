<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
// дозвіл переходу в адмін панель авторизованому користувачу з Id=2
     // public function FunctionAdminEnter()
     // {
     //   if (auth()->chek() || auth()->id(2)){
     //     return redirectTo(route('admin-home'));
     //     }
     // }

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirectTo(route('home'));
        }

        return $next($request);
    }




}
