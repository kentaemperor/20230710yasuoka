<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);

Route::post('/todos/create', [TodoController::class, 'create']);

Route::post('/todos/create', [TodoController::class, 'update']);