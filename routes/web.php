<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\MapController;

Route::get('/', function () {
    return view('welcome');
});
Route::get("north-america",[MapController::class,'northAmerica']);
Route::get("south-america",[MapController::class,'southAmerica']);

Route::group(['prefix'=>'africa'], function(){
    Route::get("/",[MapController::class,'Africa']);
    // Route::get("/{country}/physical",[MapController::class,'africaPhysicalCountry']);
    Route::get("/{country}/map",[MapController::class,'africaCountryMap']);
});

// Route::get("europe",[MapController::class,'euRope']);
Route::group(['prefix'=>'europe'], function(){
    Route::get("/",[MapController::class,'Europe']);
    // Route::get("/{country}/physical",[MapController::class,'africaPhysicalCountry']);
    Route::get("/{country}/map",[MapController::class,'europeCountryMap']);
});

// Route::get("asia",[MapController::class,'Asia']);
Route::group(['prefix'=>'asia'], function(){
    Route::get("/",[MapController::class,'Asia']);
    // Route::get("/{country}/physical",[MapController::class,'africaPhysicalCountry']);
    Route::get("/{country}/map",[MapController::class,'asiaCountryMap']);
});

Route::get("australia",[MapController::class,'Australia']);
Route::get("contact",[MapController::class,'Contact']);
Route::get("page",[MapController::class,'Page']);

