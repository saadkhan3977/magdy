<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class RoleRedirection
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
        if(Auth::user()->phone_verified == 0 || Auth::user()->email_verified == 0 )
        {
            return redirect("/verification");
        }
        else if(Auth::user()->hasAnyRole(['Admin']))
        {
            return $next($request);
        }
        else if(Auth::user()->hasAnyRole(['Shopper']))
        {
            return redirect("/shopper/dashboard");
        }
        else if(Auth::user()->hasAnyRole(['Travelar']))
        {
            return redirect("/travelar/dashboard");
        }
        else
        {
            return redirect("/");
        } 
       return $next($request);
    }
}
