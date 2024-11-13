<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;

Route::controller(UserController::class)->group(function (){
    Route::post('/create/user', 'store');
    Route::get('/users', 'show');
    Route::delete('/delete/{id}', 'destroy');
    Route::put('/edit/{id}', 'edit');
});


Route::controller(LoginController::class)->group(function (){
    Route::post('/auth', 'login');
});

Route::controller(ClientController::class)->group(function() {
    Route::post('/create/client', 'store');
    Route::get('/clients', 'show');
    Route::put('client/edit/{id}', 'edit');
    Route::get('/client/{id}', 'getClient');
});