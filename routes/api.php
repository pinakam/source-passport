<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->group(function () {
    Route::get('get-profile', [\App\Http\Controllers\API\AuthController::class, 'getProfile']);
});

Route::post('login', [\App\Http\Controllers\API\AuthController::class, 'login'])->name('login');
