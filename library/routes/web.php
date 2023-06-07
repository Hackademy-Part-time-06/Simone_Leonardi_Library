<?php

use App\Http\Controllers\LibraryController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[LibraryController::class, 'index'])->name('books.index');
Route::get('/create',[LibraryController::class, 'create'])->name('books.create');
Route::post('/salva',[LibraryController::class, 'salva'])->name('books.salva');
Route::get('/libri/{book}/dettagli',[LibraryController::class, 'show'])->name('books.show');
