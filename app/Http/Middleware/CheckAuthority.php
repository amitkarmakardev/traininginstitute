<?php

namespace App\Http\Middleware;

use Closure;

class CheckAuthority
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param $ability
     * @param $module
     * @return mixed
     */
    public function handle($request, Closure $next, $ability, $module)
    {
        if ($request->user()->can($ability, $module)) {
            return $next($request);
        }
        else{
            return redirect(url('error/403'));
        }
    }
}
