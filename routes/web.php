<?php

use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/login', [Auth::class, 'loginPage']);
Route::get('/loginSubmit', [Auth::class, 'loginSubmit'])->name('loginSubmit');