<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::controller(UserController::class)->group(function (){
    Route::post('/create', 'store');
    Route::get('/users', 'show');
    Route::delete('/delete/{id}', 'destroy');
    Route::put('/edit/{id}', 'edit');
});