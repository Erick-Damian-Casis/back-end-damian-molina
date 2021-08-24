<?php

namespace App\Http\Controllers\V1;

use App\Exceptions\DriverException;
use App\Http\Requests\V1\Drivers\DestroysDriverRequest;
use App\Http\Requests\V1\Drivers\StoreDriverRequest;
use App\Http\Requests\V1\Drivers\UpdateDriverRequest;
use App\Http\Resources\V1\Drivers\DriverResource;
use App\Models\Driver;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverController extends Controller
{

    public function __construct()
    {
        $this->middleware('verify_available_drivers');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //------------> Consultar todos
    public function index()
    {
        $drivers = Driver::get();
        return response()->json([
            'data'=>$drivers,
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
    //------------------>crear un elemento
    public function store(StoreDriverRequest $request)
    {
            $driver = new Driver();

            $user = User::find($request->user['id']);
            $driver->user()->associate($user);

            $driver->photo = $request->photo;
            $driver->license = $request->license;
            $driver->save();


        return response()->json([
            'data'=>$driver,
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
    //--------------> Consultar 1
    public function show(Driver $driver)
    {
        return new DriverResource($driver);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDriverRequest $request, Driver $driver)
    {
        $driver->photo = $request->photo;
        $driver->license = $request->license;
        $driver->save();

        return new DriverResource($driver);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Driver $driver){

        $driver->delete();
        return response()->json([
            'data'=>$driver,
            'msg'=>[
                'summary'=>'El conductor a sido eliminado',
                'detail'=>'Conductor eliminado',
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
    public function destroys(DestroysDriverRequest $request)
    {
        Driver::destroy($request->input('ids'));
        return response()->json([
            'data'=>$request,
            'msg'=>[
                'summary'=>'Peticion realizada exitosamente',
                'detail'=>'Peticion realizada exitosamente',
                'code'=>'201'
            ]
        ],201
        );
    }
}
