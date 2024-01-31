<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\KindleBookListController;
use \App\Http\Controllers\ReaderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// livewire views
Route::get('/', \App\Livewire\Home::class);
Route::get('/library', \App\Livewire\Library::class)->name('library');
Route::get('/library/{id}', \App\Livewire\BookDetail::class);
Route::get('/library/edit/{id}', \App\Livewire\EditBook::class);
Route::get('/upload', \App\Livewire\Upload::class);

// controllers
Route::get('/reader/{id}', [ReaderController::class, 'readBook']);
Route::get('/kindle', [KindleBookListController::class, 'get']);
Route::get('/download/{id}', [FileController::class, 'download']);
