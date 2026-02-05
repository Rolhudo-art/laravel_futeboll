<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/teste',[TestController::class,'envia_teste']);

Route::get('/soma',[TestController::class,'soma']);

Route::post('/salva_time',[TestController::class,'salva_time']);

Route::get('/exibe_times/{id}',[TestController::class,'exibe_time']);
 
Route::get('/todos_time',[TestController::class,'todos_times']);
