<?php

use App\Http\Controllers\ApiControler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/concert', [ApiControler::class, 'listApi']);
Route::get('/concert', [ApiControler::class, 'findApi']);
Route::post('/concert', [ApiControler::class, 'createApi']);
Route::delete('/concert/{id}', [ApiControler::class, 'deleteApi']);
Route::put('/concert', [ApiControler::class, 'editApi']);