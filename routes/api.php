<?php

use App\Http\Controllers\ConsultAndServicesController;
use App\Models\ConsultAndService;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;

Route::middleware('jwt.auth')->controller(UserController::class)->group(function (){
    Route::get('/users', 'show');
    Route::post('/create/user', 'store');
    Route::put('/edit/{id}', 'edit');
    Route::delete('/delete/{id}', 'destroy');
});

Route::controller(LoginController::class)->group(function (){
    Route::post('/auth', 'login');
});

Route::middleware('jwt.auth')->controller(ClientController::class)->group(function() {
    Route::get('/clients', 'show');
    Route::get('/client/{id}', 'getClient');
    Route::post('/create/client', 'store');
    Route::put('client/edit/{id}', 'edit');
});

Route::controller(ConsultAndServicesController::class)->group(function (){
    Route::post('create/consultAndService', 'store' );
});