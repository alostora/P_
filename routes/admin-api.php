<?php

use App\Http\Controllers\Api\Admins\AreaController;
use App\Http\Controllers\Api\Admins\AssignedGarageKeeperController;
use App\Http\Controllers\Api\Admins\CityController;
use App\Http\Controllers\Api\Admins\CountryController;
use App\Http\Controllers\Api\Admins\GarageController;
use App\Http\Controllers\Api\Admins\GarageKeeperController;
use App\Http\Controllers\Api\Admins\GovernorateController;
use App\Http\Controllers\Api\Admins\ParkingController;
use App\Http\Controllers\Api\Admins\SellerAccountantsController;
use App\Http\Controllers\Api\Admins\StreetController;
use App\Http\Controllers\Api\AuthController;
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


Route::group(['middleware' => 'admin_auth_api', 'prefix' => 'admin'], function () {

    Route::get('garage-keepers', [GarageKeeperController::class, 'index']);
    Route::get('garage-keeper/{user}', [GarageKeeperController::class, 'show']);

    Route::get('countries', [CountryController::class, 'index']);
    Route::get('country/{country}', [CountryController::class, 'show']);

    Route::get('governorates/{country}', [GovernorateController::class, 'index']);
    Route::get('governorate/{country}', [GovernorateController::class, 'show']);

    Route::get('cities/{country}', [CityController::class, 'index']);
    Route::get('city/{country}', [CityController::class, 'show']);

    Route::get('areas/{country}', [AreaController::class, 'index']);
    Route::get('area/{country}', [AreaController::class, 'show']);

    Route::get('streets/{country}', [StreetController::class, 'index']);
    Route::get('street/{country}', [StreetController::class, 'show']);

    Route::get('garages/{country}', [GarageController::class, 'index']);
    Route::get('garage/{garage}', [GarageController::class, 'show']);

    Route::get('assigned-garage-keeper/{garage}', [AssignedGarageKeeperController::class, 'index']);

    Route::get('seller-accountants', [SellerAccountantsController::class, 'index']);

    Route::get('close-parking-cars', [ParkingController::class, 'closeParking']);
    Route::get('open-parking-cars', [ParkingController::class, 'openParking']);

    Route::any('logout', [AuthController::class, 'logout']);
});
