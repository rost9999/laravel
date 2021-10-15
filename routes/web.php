<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

Auth::routes();

Route::get('/', [BooksController::class, 'index'])->name('home');
Route::get('/author/{author}', [BooksController::class, 'byAuthor']);
Route::get('book/create', [BooksController::class, 'create']);
Route::post('book', [BooksController::class, 'store']);
Route::get('book/{book}/edit', [BooksController::class, 'edit']);
Route::get('book/{book}', [BooksController::class, 'show']);
Route::put('book/{book}', [BooksController::class, 'update']);
Route::delete('book/{book}', [BooksController::class, 'destroy']);
