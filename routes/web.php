<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\StatsController;
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

Route::get('/', [Controller::class, 'index'])->name('main');

Route::get('articles', [ArticlesController::class, 'index'])->name('articles');

Route::get('articles/{slug}', [ArticlesController::class, 'get']);
