<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactanoscontroller;

Route::get('/', function () {
    return view('contactanos');
});

Route::get('contactanos', [contactanoscontroller::class , 'index']);
Route::post('guardar-formulario', [contactanoscontroller::class, 'store']);
 


