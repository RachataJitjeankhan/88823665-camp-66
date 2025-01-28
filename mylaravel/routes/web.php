<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

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