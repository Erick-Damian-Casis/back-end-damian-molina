<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class DriverException extends Exception
{
    public function render($request, Throwable $e)
    {
//        return parent::render($request, $e);

        return response()->json([
            'data' => null,
            'msg' => [
                'summary' => 'El conductor no ha sido encontrado',
                'detail' => 'El registro no se encontro',
                'code' => '404',
            ]
        ], 404);
    }
}
