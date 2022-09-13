<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerLayout;
use App\Http\Controllers\cadastroController;
use App\Http\Controllers\displayController;





Route::get('/index', [displayController::class, 'index']);

Route::get('/sobre', [displayController::class, 'sobre']);

Route::get('/dados', [displayController::class, 'dados']);

Route::get('/cadastro', [cadastroController::class, 'cadastro']);

Route::post('/cadastro', [cadastroController::class, 'store']);

Route::get('/login', [cadastroController::class, 'login']);

Route::post('/login', [cadastroController::class, 'auth']);

Route::get('/layout', [controllerLayout::class, 'layout']);



