<?php

namespace App\Http\Middleware;

use Closure;

class ChekSession
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
        // if($request->session()->has('email')){
        //     // return redirect('/loginPage');
        //     return "session tidak ada";
        // }
        // }else{
        //     // return $next($request);
        //     return "session ada";
        // }

    }
}
