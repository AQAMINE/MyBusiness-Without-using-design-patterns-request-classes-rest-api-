<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class invoiceAndClientManagerMiddleware
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

        if(Auth::user()->approvement == 1){
            if((Auth::user()->role == 1) or (Auth::user()->role == 2) ){
                return $next($request);
            }else{
                return abort(404, 'Page not found.');
            }
        }else{
            return redirect(route('login'));
        }


    }
}
