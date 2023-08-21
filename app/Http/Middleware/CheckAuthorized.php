<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAuthorized
{

    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/not_auth');
        }


        return $next($request);
    }
}
