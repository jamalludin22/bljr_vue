<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\coba_vue;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [coba_vue::class, 'index']);
Route::post('/users', [coba_vue::class, 'store']);
Route::get('/users/{id}', [coba_vue::class, 'show']);
Route::delete('/users/{id}', [coba_vue::class, 'destroy']);
Route::put('/users/{id}', [coba_vue::class, 'update']);
