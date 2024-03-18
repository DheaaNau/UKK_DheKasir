<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class admin
{
   
    public function handle(Request $request, Closure $next,)
    {
        if (Auth::check()&& Auth::user()->status == 'admin'){
            return $next($request);
        }else{
            return redirect()->back();
    }
    return redirect('/login');
}
}