<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return "<h1>Hello World</h1>";
});

Route::get('/mycontroller/{id?}', [MyController::class,'myfunction']);
Route::post('/mycontroller/{id?}', [MyController::class,'myfunction']);
    
Route::get('/login',
[App\Http\Controllers\LoginController::class, 'index']);

Route::get('/home',
[App\Http\Controllers\HomeController::class, 'index']);

Route::get('/register',
[App\Http\Controllers\RegisterController::class, 'index']);

Route::get('/',
[App\Http\Controllers\HomeController::class, 'index']);