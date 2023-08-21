<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GoogleRecaptcha
{

    public function handle(Request $request, Closure $next): Response
    {
        if(!$request->has("r")){
            abort(403);
        }
        return $next($request);
    }
}
