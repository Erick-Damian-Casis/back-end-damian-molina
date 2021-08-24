<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\AddressesController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\TravelsController;


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

Route::apiResource('drivers', DriversController::class);
Route::apiResource('drivers.cars', CarsController::class);
Route::apiResource('drivers.cars.travels', TravelsController::class);
Route::apiResource('drivers.cars.travels.addresses', AddressesController::class);



