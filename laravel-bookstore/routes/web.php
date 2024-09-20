<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::resource('books', BookController::class);

Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get('/create', [BookController::class, 'create'])->name('books.create');
Route::post('/create', [BookController::class, 'store'])->name('books.store');
Route::get('/edit/{id}', [BookController::class, 'edit'])->name('books.edit');
Route::post('/edit/{id}', [BookController::class, 'update'])->name('books.update');
Route::post('/delete/{id}', [BookController::class, 'destroy'])->name('books.destroy');
