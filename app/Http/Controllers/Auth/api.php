<?php

// ROUTE FILES ARE NOT REQUIRED TO IMPORT ANYWHRE.. ITS ADDED AUTOMATICALLY...

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;


Route::prefix('auth')->group(function () {
    Route::post('/createUser',  [AuthController::class, 'createUser']);
});
