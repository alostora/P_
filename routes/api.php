<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ParkingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login',[AuthController::class,'login']);


Route::group(['middleware'=>'auth_api'],function(){

    Route::get('parked-cars/{garage}',[ParkingController::class,'index']);
    
    Route::post('parked-car',[ParkingController::class,'store']);

    Route::any('logout',[AuthController::class,'logout']);

});
