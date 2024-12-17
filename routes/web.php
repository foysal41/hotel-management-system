<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\HomeController;





/*
Route::get('/', function () {
    return view('welcome');
});*/


//HOME
Route::get('/' , [HomeController::class, 'index']);




Route::post('storehotel', [HotelController::class, 'store'])->name('hotels.store');
Route::get('allhotels' , [HotelController::class, 'index']);
Route::put('updatehotel/{id}' , [HotelController::class , 'update']);
Route::delete('deletehotel/{id}' , [HotelController::class , 'destroy']);


// Rooms

Route::post('storeroom', [RoomController::class, 'store'])->name('rooms.store');
Route::get('allrooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('editroom/{id}', [RoomController::class, 'edit'])->name('rooms.edit');
Route::put('updateroom/{id}', [RoomController::class, 'update'])->name('rooms.update');
Route::delete('deleteroom/{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');
