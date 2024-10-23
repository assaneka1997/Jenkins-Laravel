<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::redirect('/','/users/liste');

Route::get('/users/liste',[UserController::class, 'index']);
Route::get('/users/create',[UserController::class, 'create']);
Route::post('/users/create',[UserController::class, 'store']);
Route::get('/users/edit/{id}',[UserController::class, 'edit']);
Route::post('/users/edit/{id}',[UserController::class, 'update']);
Route::get('/users/{id}',[UserController::class, 'show']);
Route::get('/users/delete/{id}',[UserController::class, 'delete']);
