<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Admin
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
        if(Auth::check()){
            if(auth()->user()->is_admin==1){
                return $next($request);
            }
            Auth::logout(Auth::user());
        }        
        return redirect('/login')->with('error','you have no admin access');
    }
}
