<?php

use App\Http\Controllers\TipController;
use Illuminate\Support\Facades\Route;

Route::post('/tips', [TipController::class, 'store'])->middleware('throttle:10,1');
