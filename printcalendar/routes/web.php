<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;

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

 
// Route::get('/{slug?}', function () {
//     return view('calendar');
// });

Route::get("/",[CalendarController::class,'show']);
Route::get("/{slug?}",[CalendarController::class,'withSlug']);
Route::get("/printable-calendars/{year}",[CalendarController::class,'withYearSlug']);


