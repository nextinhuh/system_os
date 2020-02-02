<?php

namespace App\Http\Middleware;

use Closure;

class PrivilegioMiddleware
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
        if(session('fun_privilegio') != 1)
        return back()->with('permissao', 'a');
            

        return $next($request);
    }
}
