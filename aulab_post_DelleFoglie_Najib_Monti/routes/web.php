<?php

use App\Http\Controllers\PubblicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/', [PubblicController::class, 'homepage'])->name('homepage');

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])->name('article.byCategory');

Route::post('/article/store', [ArticleController::class,'store'])->name('article.store'); 