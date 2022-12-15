<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BookController::class, 'index']);

// Auth
Route::middleware(['guest'])->group(function () {
    Route::get('/auth/register', [AuthController::class, 'create']);
    Route::post('/auth/register', [AuthController::class, 'register']);
    Route::get('/auth/login', [AuthController::class, 'loginPage'])->name('login');
    Route::post('/auth/login', [AuthController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/books/create', [BookController::class, 'create']);
    Route::post('/books/store', [BookController::class, 'store']);
    Route::get('/books/{book}', [BookController::class, 'show']);
    Route::get('/books/{book}/edit', [BookController::class, 'edit']);
    Route::put('/books/{book}', [BookController::class, 'update']);
    Route::delete('/books/{book}', [BookController::class, 'destroy']);
    Route::post('/auth/logout', [AuthController::class, 'logout']);
});