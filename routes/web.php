<?php

use App\Http\Controllers\HighlightController;
use App\Http\Controllers\TechStackController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('tech-stack')->group(function () {
    Route::get('/', [TechStackController::class, 'index']);
    Route::get('/{id}', [TechStackController::class, 'show']);
});

Route::prefix('highlights')->group(function () {
    Route::get('/', [HighlightController::class, 'index']);
    Route::get('/{id}', [HighlightController::class, 'show']);
});
