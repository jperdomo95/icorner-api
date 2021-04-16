<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UsersController, LessonController};

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

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('login', [UsersController::class, 'login']);
    Route::post('register', [UsersController::class, 'register']);
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/user/{teacher}/lessons', [UsersController::class, 'getLessons'])->name('users.lessons');
    Route::post('/lessons', [LessonController::class, 'store']);
    // Route::resource('user/lessons', UsersController::class);
});
