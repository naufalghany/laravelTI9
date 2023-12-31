<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
// use auth:
use illuminate\Support\Facades\Auth;
class role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if(Auth::check()){
            $role = explode('-', $role);
            foreach($role as $r){
                if(Auth::user()->role == $r){
                    return $next($request);
                }
            }
        }
        return redirect('/after_register');
       // return $next($request);
    }
}
