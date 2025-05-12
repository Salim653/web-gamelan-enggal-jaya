<?php

use App\Http\Controllers\GamelanController;

Route::get('/gamelan', [GamelanController::class, 'index']);