<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\KamarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KriteriaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('kriteria', KriteriaController::class);
Route::get('/kamar', [KamarController::class, 'index']);
Route::get('/area',[AreaController::class, 'index']);