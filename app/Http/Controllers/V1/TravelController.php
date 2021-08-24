<?php

namespace App\Http\Controllers\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return response()->json([
               'data'=>'info',
                'msg'=>[
                    'summary'=>'Peticion realizada exitosamente',
                    'detail'=>'Peticion realizada exitosamente',
                    'code'=>'201'
                ]
            ],201
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json([
            'data'=>'info',
            'msg'=>[
                'summary'=>'Peticion realizada exitosamente',
                'detail'=>'Peticion realizada exitosamente',
                'code'=>'201'
            ]
        ],201
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            'data'=>'info',
            'msg'=>[
                'summary'=>'Peticion realizada exitosamente',
                'detail'=>'Peticion realizada exitosamente',
                'code'=>'201'
            ]
        ],201
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return response()->json([
            'data'=>'info',
            'msg'=>[
                'summary'=>'Peticion realizada exitosamente',
                'detail'=>'Peticion realizada exitosamente',
                'code'=>'201'
            ]
        ],201
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json([
            'data'=>'info',
            'msg'=>[
                'summary'=>'Peticion realizada exitosamente',
                'detail'=>'Peticion realizada exitosamente',
                'code'=>'201'
            ]
        ],201
        );
    }
}
