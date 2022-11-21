<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

Route::get('/{path?}', function () {
    return view('layouts.app');
});
Route::get('/{path?}/{path2?}', function () {
    return view('layouts.app');
});
Route::get('/{path?}/{path2?}/{path3?}', function () {
    return view('layouts.app');
});

Auth::routes();
Route::get('/home', [HomeController::class,'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
