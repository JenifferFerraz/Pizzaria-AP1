<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/cadastrar', [UserController::class, 'store']);
Route::put('/atualizar/{id}', [UserController::class, 'update']);

// Poderia usar um patch no lugar?
Route::delete('/deletar/{id}', [UserController::class, 'destroy']);

Route::prefix('/user')->group(function (){
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'show']);
});
