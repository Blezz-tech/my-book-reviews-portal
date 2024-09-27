<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/books', [BooksController::class, 'index'])->name('users.books');
