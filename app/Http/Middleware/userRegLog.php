<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userRegLog
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
        if( Auth::guard('admin')->user()){
            return redirect()->route('admin.dashboard');
        }

        if( Auth::guard('specialist')->user()){
            return redirect()->route('specialist.dashboard');
        }

        if( Auth::guard('web')->user()){
            return redirect()->route('user.dashboard');
        }


        return $next($request);
    }
}
