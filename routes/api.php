<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProjectsController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('projects', 'API\ProjectsController');
Route::apiResource('tasks', 'API\TasksController');

Route::get('auth/create-token', [ProjectsController::class,'createToken']);

Route::post('auth/login', [ProjectsController::class,'login']);
Route::post('auth/register', [ProjectsController::class,'register']);
