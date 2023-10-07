<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::prefix('api/')->group((function () {

    Route::post('/setContact', [ContactController::class, 'store']);
    // Route::get('/getContact', [ContactController::class, 'index']);

}));
