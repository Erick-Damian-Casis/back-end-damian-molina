<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\DriverController;
use App\Http\Controllers\V1\AddressController;
use App\Http\Controllers\V1\CarController;
use App\Http\Controllers\V1\TravelController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|driver/car/travel/address
*/

Route::apiResource('drivers', DriverController::class);
Route::prefix('driver')->group(function(){
    Route::patch('destroys',[DriverController::class,'destroys']);
});

Route::apiResource('drivers.cars', CarController::class);
Route::apiResource('addresses', AddressController::class);
Route::apiResource('addresses.travels', TravelController::class);

Route::middleware('verify_available_drivers')->get('available',function (){
    return "pude ingresar";
});




