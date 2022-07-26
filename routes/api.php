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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/wabot', [App\Http\Controllers\apiWaController::class, 'bot']);
Route::post('/wabot/{id}', [App\Http\Controllers\apiWaController::class, 'lokasi_bus']);

Route::post('/wabot2', [App\Http\Controllers\apiwa2Controller::class, 'bot']);


