<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::prefix('api/')->group((function () {

    Route::get('/', function (){
        echo '2ojkfodj';
    });

    Route::post('/setContact', [ContactController::class, 'store']);
    Route::get('/getContact', [ContactController::class, 'index']);

}));
