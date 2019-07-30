<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;
use Illuminate\Http\Request;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
     * @var array
     */
    protected $except = [
        'password',
        'password_confirmation',
    ];

    /**
     * @param Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, $next)
    {
        $response = $next($request);
        $response->header('Access-Control-Allow-Origin', '*');
        $response->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Cookie, Accept, X-Auth-Id');
        $response->header('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT, DELETE, OPTIONS');
        $response->header('Access-Control-Allow-Credentials', 'true');
        return $response;
    }
}
