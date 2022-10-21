<?php

use App\Http\Controllers\Admins\AdminController;
use App\Http\Controllers\Admins\AreaController;
use App\Http\Controllers\Admins\AuthController;
use App\Http\Controllers\Admins\CityController;
use App\Http\Controllers\Admins\CountryController;
use App\Http\Controllers\Admins\DashboardController;
use App\Http\Controllers\Admins\GovernorateController;
use App\Http\Controllers\Admins\StreetController;
use App\Http\Controllers\Admins\GarageController;
use App\Http\Controllers\Admins\GarageKeeperController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'admin'],function(){
    
    Route::get('login',[AuthController::class,'loginView']);
    Route::post('login',[AuthController::class,'login']);
   
    Route::group(['middleware'=>'admin'],function(){

        Route::get('/',[DashboardController::class,'index']);
        
        Route::get('admins',[AdminController::class,'index']);
        Route::get('admin/show/{user}', [AdminController::class,'show']);
        Route::get('admin/create', [AdminController::class,'create']);
        Route::get('admin/edit/{user}', [AdminController::class,'edit']);
        Route::post('admin', [AdminController::class,'store']);
        Route::patch('admin/{user}', [AdminController::class,'update']);
        Route::get('admin/delete/{user}', [AdminController::class,'destroy']);
        
        Route::get('garage-keepers',[GarageKeeperController::class,'index']);
        Route::get('garage-keeper/show/{user}', [GarageKeeperController::class,'show']);
        Route::get('garage-keeper/create', [GarageKeeperController::class,'create']);
        Route::get('garage-keeper/edit/{user}', [GarageKeeperController::class,'edit']);
        Route::post('garage-keeper', [GarageKeeperController::class,'store']);
        Route::patch('garage-keeper/{user}', [GarageKeeperController::class,'update']);
        Route::get('garage-keeper/delete/{user}', [GarageKeeperController::class,'destroy']);


        Route::get('countries',[CountryController::class,'index']);
        Route::get('country/show/{country}', [CountryController::class,'show']);
        Route::get('country/create', [CountryController::class,'create']);
        Route::get('country/edit/{country}', [CountryController::class,'edit']);
        Route::post('country', [CountryController::class,'store']);
        Route::patch('country/{country}', [CountryController::class,'update']);
        Route::get('country/delete/{country}', [CountryController::class,'destroy']);


        Route::get('governorates',[GovernorateController::class,'index']);
        Route::get('governorate/show/{country}', [GovernorateController::class,'show']);
        Route::get('governorate/create', [GovernorateController::class,'create']);
        Route::get('governorate/edit/{country}', [GovernorateController::class,'edit']);
        Route::post('governorate', [GovernorateController::class,'store']);
        Route::patch('governorate/{country}', [GovernorateController::class,'update']);
        Route::get('governorate/delete/{country}', [GovernorateController::class,'destroy']);

        Route::get('cities',[CityController::class,'index']);
        Route::get('city/show/{country}', [CityController::class,'show']);
        Route::get('city/create', [CityController::class,'create']);
        Route::get('city/edit/{country}', [CityController::class,'edit']);
        Route::post('city', [CityController::class,'store']);
        Route::patch('city/{country}', [CityController::class,'update']);
        Route::get('city/delete/{country}', [CityController::class,'destroy']);

        Route::get('areas',[AreaController::class,'index']);
        Route::get('area/show/{country}', [AreaController::class,'show']);
        Route::get('area/create', [AreaController::class,'create']);
        Route::get('area/edit/{country}', [AreaController::class,'edit']);
        Route::post('area', [AreaController::class,'store']);
        Route::patch('area/{country}', [AreaController::class,'update']);
        Route::get('area/delete/{country}', [AreaController::class,'destroy']);
        
        Route::get('streets',[StreetController::class,'index']);
        Route::get('street/show/{country}', [StreetController::class,'show']);
        Route::get('street/create', [StreetController::class,'create']);
        Route::get('street/edit/{country}', [StreetController::class,'edit']);
        Route::post('street', [StreetController::class,'store']);
        Route::patch('street/{country}', [StreetController::class,'update']);
        Route::get('street/delete/{country}', [StreetController::class,'destroy']);
        
        Route::get('garages',[GarageController::class,'index']);
        Route::get('garage/show/{garage}', [GarageController::class,'show']);
        Route::get('garage/create', [GarageController::class,'create']);
        Route::get('garage/edit/{garage}', [GarageController::class,'edit']);
        Route::post('garage', [GarageController::class,'store']);
        Route::patch('garage/{garage}', [GarageController::class,'update']);
        Route::get('garage/delete/{garage}', [GarageController::class,'destroy']);
        
        Route::any('logOut',[AuthController::class,'logOut']);
    });
    
    
});

