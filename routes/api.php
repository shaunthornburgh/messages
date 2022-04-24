<?php

use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\UserController;
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

Route::middleware(['auth:sanctum'])->group(function () {

    // Contacts
    Route::prefix('contacts')->name('contacts.')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('index');
    });

    // Messages
    Route::prefix('messages')->name('messages.')->group(function () {
        Route::get('/{contact}', [MessageController::class, 'index'])->name('index');
        Route::post('/', [MessageController::class, 'store'])->name('store');
    });

    // Users
    Route::prefix('users')->name('users.')->group(function () {
        Route::put('/{user}', [UserController::class, 'update'])->name('update');
    });
});
