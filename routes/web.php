<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PingPongControleur;
use App\Http\Controllers\TodoControleur;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['titre' => 'Mon premier exemple.']);
});

Route::get('/ping', [PingPongControleur::class, 'ping']);
Route::get('/pong', [PingPongControleur::class, 'pong']);

Route::get('/todo', [TodoControleur::class, 'todo']);
Route::get('/todo', [TodoControleur::class, 'listTodo']);
Route::get('/todoForm', [TodoControleur::class, 'addTodo']);
