<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\APIController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/position', [APIController::class, 'getPosition']);

Route::post('/upload', [APIController::class, 'uploadFingerprint']);
