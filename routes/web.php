<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;


Route::get('/', function () {
    return view('welcome');
});


Route::post('storehotel', [HotelController::class, 'store'])->name('hotels.store');
Route::get('allhotels' , [HotelController::class, 'index']);
Route::put('updatehotel/{id}' , [HotelController::class , 'update']);
Route::delete('deletehotel/{id}' , [HotelController::class , 'destroy']);


// Rooms

Route::post('storeroom', [RoomController::class, 'store'])->name('rooms.store');
Route::get('allrooms' , [RoomController::class, 'index']);
Route::put('updateroom/{id}' , [RoomController::class , 'update']);
Route::delete('deleteroom/{id}' , [RoomController::class , 'destroy']);
