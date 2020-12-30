<?php

namespace App\Http\Middleware;

use Closure;

class CheckLoginUser
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
         if ($request->session()->has('patient_id')) {
            return $next($request);
        }
        else{
            return redirect()->route('login_patient')->with('error','Please login Frist :3');
        }
    }
}
