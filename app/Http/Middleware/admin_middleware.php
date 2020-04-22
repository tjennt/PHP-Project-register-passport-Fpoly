<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;
use App\admin;

class admin_middleware
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
        if(Auth::guard('admin')->check()){
            return $next($request);
        }else{
            return redirect('home/login');
        }
    }
}
