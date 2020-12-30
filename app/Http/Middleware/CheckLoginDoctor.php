<?php

namespace App\Http\Middleware;

use Closure;

class CheckLoginDoctor
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
         if ($request->session()->has('doctor_id')) {
            return $next($request);
        }
        else{
            return redirect()->route('login_doctor')->with('error','Please login Frist :3');
        }
        
    }
}
