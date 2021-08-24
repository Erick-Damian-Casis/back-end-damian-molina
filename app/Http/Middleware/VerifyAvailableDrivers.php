<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyAvailableDrivers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        /*if($request->available == true){
            return response()->json(
                ['msg'=>[
                    'summary'=>'No estas disponible en este momento',
                    'detail'=>'No puedes ingresar',

                ]
                ],401
            );
        }*/

        return $next($request);
    }
}
