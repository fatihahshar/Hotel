<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getdata', [App\Http\Controllers\HotelController::class, 'getDataApi']);

//route to function untuk request data dari table dengan specifies one benda jk 
Route::get('/datareq', [App\Http\Controllers\HotelController::class, 'specificreq']);

//route to function untuk request data dari table dengan specifies more than sigek benda
Route::get('/reqmore', [App\Http\Controllers\HotelController::class, 'reqmorethanone']);
//or dapat pake gitok juak, pake middleware
//Route::middleware('api')->get('/reqmore', [App\Http\Controllers\HotelController::class, 'reqmorethanone']);
