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

Route::get('/libri',[LibraryController::class,'index'])->name('books.index');
Route::get('/libri/crea',[LibraryController::class,'create'])->name('books.create');
Route::post('/libri/salva',[LibraryController::class,'store'])->name('books.store');
Route::get('/libri/{book}/dettagli',[LibraryController::class,'show'])->name('books.show');
