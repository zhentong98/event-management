<?php

use App\Http\Controllers\Api\AttendeeController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [Authcontroller::class, 'login']);
Route::post('/logout', [Authcontroller::class, 'logout'])
    ->middleware('auth:sanctum');

Route::apiResource('events', EventController::class)->only(['index', 'show']);
Route::apiResource('events', EventController::class)
    ->except(['index', 'show'])
    ->middleware('auth:sanctum');

Route::apiResource('events.attendees', EventController::class)->only(['index', 'show', 'update']);
Route::apiResource('events.attendees', AttendeeController::class)
    ->scoped()
    ->except(['index', 'show', 'update'])
    ->middleware('auth:sanctum');
