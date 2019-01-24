<?php

namespace App\Http\Middleware;

use Closure;

class checkUserRole
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
        if(isset(auth()->user()->role) && auth()->user()->role == 'user'){
            return $next($request);
        }
        return redirect('login')->with('error','You have not user access');
    }
}
