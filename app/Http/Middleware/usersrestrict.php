<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usersrestrict
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

        if(Auth::guard('web')->user() || Auth::guard('specialist')->user() || Auth::guard('admin')->user()){


        }else{
            return redirect()->route('/')->with('notlogged','Please Login or Register');
        }
        return $next($request);
    }
}
