<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArgonauteController;

Route::get('/argonaute',[ArgonauteController::class, 'getAll']);
Route::post('/argonaute',[ArgonauteController::class, 'create']);
