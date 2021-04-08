<?php

use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\InputAspirasiController;
use App\Models\InputAspirasi;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Admin
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/aspirasi',[AspirasiController::class,'view'])->name('adminaspirasi.view');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/aspirasi/{id_pelaporan}',[AspirasiController::class,'create'])->name('adminaspirasi.create');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/aspirasi/{id_pelaporan}',[AspirasiController::class,'store'])->name('adminaspirasi.store');



Route::get('/aspirasi',[InputAspirasiController::class,'index']);
Route::post('/aspirasi',[InputAspirasiController::class,'view'])->name('inputaspirasi.view');

Route::get('/aspirasi/create',[InputAspirasiController::class,'create']);
Route::post('/aspirasi/create',[InputAspirasiController::class,'store'])->name('aspirasi.store');


