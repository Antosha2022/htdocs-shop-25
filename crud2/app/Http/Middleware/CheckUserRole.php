<?php

namespace App\Http\Middleware;

use Closure;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role){
      // public function handle($request, Closure $next,$role){
                // if ( auth()->hasRole('admin')) {
                //     abort(404);
                // }
        return $next($request);
    }
}
