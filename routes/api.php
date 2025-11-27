<?php

use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('/register', [\App\Http\Controllers\Api\v1\Registration\RegistrationController::class, 'registerUser']);
    Route::get('/profile/{user?}', [\App\Http\Controllers\Api\v1\ProfileController::class, 'getProfile']);
});
