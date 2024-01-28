<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\KindleBookListController;
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

Route::get('/', \App\Livewire\Index::class);
Route::get('/library', \App\Livewire\Library::class);
Route::get('/library/{id}', \App\Livewire\BookDetail::class);

Route::get('/upload', \App\Livewire\Upload::class);

Route::get('/kindle', [KindleBookListController::class, 'get']);

Route::post('/file', [FileController::class, 'upload']);
