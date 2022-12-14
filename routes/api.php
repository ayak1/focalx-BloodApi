<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonateScheduleController;
use App\Http\Controllers\TakenRequestController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);
Route::post('logout',[AuthController::class,'logout']);
Route::post('checkDonate/{id}',[DonateScheduleController::class,'checkDonate']);
Route::post('checkTakenRequest/{id}',[TakenRequestController::class,'checkTakenRequest']);
Route::post('/today/donates',[DonateScheduleController::class,'todayDonateScheduale']);
Route::apiResource('donate',DonateScheduleController::class)->middleware('auth');
Route::apiResource('taken',TakenRequestController::class)->middleware('auth');
