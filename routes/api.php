<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/teste',[TestController::class,'envia_teste']);

Route::get('/soma',[TestController::class,'soma']);

Route::post('/salva_time',[TestController::class,'salva_times']);

Route::get('/exibe_time/{id}',[TestController::class,'exibe_times']);
 
Route::get('/todos_time',[TestController::class,'todos_times']);

Route::post('/register',[AuthController::class,'register']);

Route::post('/login',[AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){

    Route::post('/logout',[AuthController::class,'logout']);

});
