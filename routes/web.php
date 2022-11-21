<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

Route::get('/{path?}', function ($path=null) {
    return view('layout.app');
});
Route::get('/{path?}/{path2?}', function ($path=null,$path2=null) {
    return view('layout.app');
});
Route::get('/{path?}/{path2?}/{path3?}', function ($path=null,$path2=null,$path3=null) {
    return view('layout.app');
});

Auth::routes();
Route::get('/home', [HomeController::class,'index'])->name('home');
