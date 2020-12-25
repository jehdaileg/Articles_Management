<?php

use App\Http\Controllers\ArticleController;
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



Route::get('/', [ArticleController::class, 'index']);

Route::get('articles', [ArticleController::class, 'index']);

Route::resource('articles', ArticleController::class);

Route::get('like/{id}', [ArticleController::class, 'add_like'])->name('add_like');

Route::get('unlike/{id}', [ArticleController::class, 'add_dislike'])->name('add_dislike');

//Route::get('search/{titre}', [ArticleController::class, 'search_by_titre'])->name('search_by_titre');


