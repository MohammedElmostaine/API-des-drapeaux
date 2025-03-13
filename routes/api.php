<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;


// Routes d'authentification
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Routes protégées
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
    
    // Routes des pays
    Route::apiResource('countries', CountryController::class);
    
    // Routes des drapeaux
    Route::post('/countries/{country}/flag', [CountryController::class, 'uploadFlag']);
    Route::get('/countries/{country}/flag', [CountryController::class, 'getFlag']);

    Route::get('users', [AuthController::class, 'getAllUsers']);

});