<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
{
    
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // // Establece las cabeceras CORS
        // $response->header('Access-Control-Allow-Origin', 'http://localhost:5173');
        // $response->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        // $response->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        // // Si la solicitud es de tipo OPTIONS, devolver una respuesta vacía con el código 200
        // if ($request->isMethod('OPTIONS')) {
        //     $response->header('Access-Control-Max-Age', '86400');
        //     return response()->json('OK', 200, $response->headers->all());
        // }

        return $response;    }
}
