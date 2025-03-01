<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('todo')->group(function (){
        Route::get('/',[TodoController::class, 'index']);
        Route::get('/ativos',[TodoController::class, 'listarAtivos']);
        Route::get('/completos',[TodoController::class, 'listarCompletos']);
        Route::post('/',[TodoController::class, 'store']);
        Route::get('/ativo/{id}',[TodoController::class, 'ativo']);
        Route::delete('/deletar/{id}',[TodoController::class, 'destroy']);
        Route::put('/atualizar/{id}',[TodoController::class, 'update']);
});