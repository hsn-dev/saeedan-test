<?php

use App\Http\Controllers\DealController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('users', UserController::class)->only(['store']);
Route::apiResource('roles', RoleController::class)->only(['store']);
Route::apiResource('deals', DealController::class)->only(['index', 'store']);
Route::apiResource('notes', NoteController::class)->only(['index', 'store']);

