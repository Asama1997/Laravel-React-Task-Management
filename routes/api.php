<?php

use App\Http\Controllers\API\Auth\AuthAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProjectsController;
use App\Http\Controllers\API\TasksController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'projects'=> ProjectsController::class,
    'tasks'=> TasksController::class
]);

Route::get('auth/create-token', [AuthAPIController::class,'createToken']);

Route::post('auth/login', [AuthAPIController::class,'login']);
Route::post('auth/register', [AuthAPIController::class,'register']);
