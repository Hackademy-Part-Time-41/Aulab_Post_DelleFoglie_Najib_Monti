<?php

use App\Http\Controllers\PubblicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get ('/', [PubblicController::class, 'homepage'])->name('homepage');

Route::post ('register', [PubblicController::class, 'registerForm'])->name('register');

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');


