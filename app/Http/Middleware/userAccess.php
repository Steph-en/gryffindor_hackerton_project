<?php

namespace App\Http\Middleware;

use App\Enums\accessLevel;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class userAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if($role === accessLevel::ADMIN->value){
            return $next($request);
        }else{
            return $next($request);      
        }
    }
}