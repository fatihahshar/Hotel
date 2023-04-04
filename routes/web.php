<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route to index for hotels
Route::get('/hotels',[App\Http\Controllers\HotelController::class,'index'])->name('hotels.index');

//to create page
Route::get('/hotels/create',[App\Http\Controllers\HotelController::class,'create'])->name('hotels.create');

//to store 
Route::post('/hotels/create',[App\Http\Controllers\HotelController::class, 'store'])->name('hotels.store');

//to show 
Route::get('/hotels/{hotel}',[App\Http\Controllers\HotelController::class,'show'])->name('hotels.show');

//to edit 
Route::get('/hotels/{hotel}/edit',[App\Http\Controllers\HotelController::class,'edit'])->name('hotels.edit');

//to update
Route::post('/hotels/{hotel}/edit',[App\Http\Controllers\HotelController::class,'update'])->name('hotels.update');

//to delete
Route::get('/hotels/{hotel}/delete',[App\Http\Controllers\HotelController::class, 'delete'])->name('hotels.delete');