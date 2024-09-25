<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/token', [ApiController::class, 'token']);
Route::post('/encodeData', [ApiController::class, 'encodeData']);
Route::post('/decodeData', [ApiController::class, 'decodeData']);
