<?php

namespace App\Http\Middleware;

use Closure;

class CORS
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
        header('Access-Control-Allow-Methods: OPTIONS, GET, POST, PUT, DELETE');
        header('Access-Control-Allow-Origin: *'); // * means any domain
        header('Access-Control-Allow-Headers: Accept, Content-Length, Accept-Encoding, X-CSRF-Token, Content-type, X-Auth-Token, Authorization, Origin');
        header("Access-Control-Allow-Credentials: true");

        return $next($request);
        
    }
}
