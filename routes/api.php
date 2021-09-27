<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmesController;
use App\Http\Controllers\AuthController;

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

// Rotas protegidas por auth.
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::put('/filmes/{id}', [FilmesController::class, 'update']);
    Route::delete('/filmes/{id}', [FilmesController::class, 'destroy']);
    Route::post('/filmes', [FilmesController::class, 'store']);

    Route::post('/logout', [AuthController::class, 'logout']);
});


// Rotas publicas do CRUD
Route::get('/filmes', [FilmesController::class, 'index']);
Route::get('/filmes/{nome}', [FilmesController::class, 'search']);
Route::get('/filmes/{id}', [FilmesController::class, 'show']);

// Rotas publicas do auth
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);