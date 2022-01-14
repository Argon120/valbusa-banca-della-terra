<?php

use App\Http\Controllers\TerrenosController;
use App\Http\Controllers\ProprietariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/proprietarios', [ProprietariosController::class, 'list']);
Route::get('/proprietarios/{id}', [ProprietariosController::class, 'detail']);
Route::post('/proprietarios', [ProprietariosController::class, 'create']);
Route::delete('/proprietarios', [ProprietariosController::class, 'delete']);

Route::get('/terrenos', [TerrenosController::class, 'list']);
Route::get('/terrenos/{id}', [TerrenosController::class, 'detail']);
Route::post('/terrenos', [TerrenosController::class, 'create']);
Route::delete('/terrenos', [TerrenosController::class, 'delete']);
