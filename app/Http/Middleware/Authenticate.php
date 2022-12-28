<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if (in_array('auth:student', $request->route()->middleware())) {
                return route('home.login');
            } elseif (in_array('auth:executive', $request->route()->middleware())) {
                return route('executive.login');
            }
            return route('login');
        }
    }
}
