<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RoleMiddleware
{
    /**
     * @param $request
     * @param Closure $next
     * @param $role1
     * @param $role2
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function handle($request, Closure $next, $role1, $role2 = '')
    {
        if (Auth::guest()) {
            return redirect(route('auth.login'));
        }

        if (!$request->user()->hasRole($role1) && !$request->user()->hasRole($role2)) {
            abort(403);
        }

        return $next($request);
    }
}
