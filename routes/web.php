<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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
    return view('index');
});
Route::get('/buku', [BukuController::class,'index']);
Route::post('/buku/store', [BukuController::class,'store'])->name('buku.store');
Route::get('/buku/cari', [BukuController::class,'cari'])->name('buku.cari');
Route::get('/buku/create', [BukuController::class,'create'])->name('buku.create');
Route::get('/buku/delete/{id}', [BukuController::class,'delete'])->name('buku.delete');
Route::post('buku/update', [BukuController::class,'update'])->name('buku.update');
Route::get('/buku/edit/{id}', [BukuController::class,'edit'])->name('buku.edit');

