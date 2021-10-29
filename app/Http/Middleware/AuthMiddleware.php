<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if($request->session()->has('user')){
            $user = $request->session()->get('user');
            switch($user->type){
                case 'customer':
                    return redirect()->route('home');
                case 'admin':
                    return redirect()->route('admin.get');
                case 'staff':
                    echo "Agent";
                    break;
                default:
                    return redirect()->route('login.get');
            }
        }
        return $next($request);
    }
}
