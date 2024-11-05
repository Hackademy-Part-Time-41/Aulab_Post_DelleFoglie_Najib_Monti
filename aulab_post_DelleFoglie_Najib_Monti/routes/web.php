<?php

use App\Http\Controllers\PubblicController;
use Illuminate\Support\Facades\Route;


Route::get ('/', [PubblicController::class, 'homepage'])->name('homepage');


