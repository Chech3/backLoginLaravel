<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// route::middleware('auth:sanctum')->get('/user-neider', function (Request $request) {
//     return $request->user();
// });


Route::prefix('auth')->group(function() {
    route::post('register', [AuthController::class, 'register']);
    route::post('login', [AuthController::class, 'login']);
});

Route::get('/user',[UserController::class, 'index'])->middleware();
