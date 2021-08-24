<?php

namespace App\Http\Controllers\V1;

use App\Http\Resources\V1\Cars\CarResource;
use App\Models\Car;
use App\Models\Driver;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::get();
        return response()->json([
            'data'=>$cars,
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
        $car = new Car();

        $driver = Driver::find($request->driver['id']);
        $car->driver()->associate($driver);

        $car->photo = $request->photo;
        $car->available = $request->available;
        $car->description = $request->description;
        $car->save();

        return response()->json([
            'data'=>$car,
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
    public function show(Car $car)
    {
        return new CarResource($car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $car)
    {
        $car = Car::find($car);

        $car->photo = $request->photo;
        $car->available = $request->available;
        $car->description = $request->description;
        $car->save();

        return response()->json([
            'data'=>$car,
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
    public function destroy(Car $car)
    {
        $car->delete();
        return response()->json([
            'data'=>$car,
            'msg'=>[
                'summary'=>'El coche fue eliminado',
                'detail'=>'Peticion realizada exitosamente',
                'code'=>'201'
            ]
        ],201
        );
    }
}
