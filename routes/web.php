<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/store', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/edit/{id_cliente}', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('/update/{id_cliente}', [ClienteController::class, 'update'])->name('cliente.update');
Route::delete('/destroy/{id_cliente}', [ClienteController::class, 'destroy'])->name('cliente.destroy');
require __DIR__.'/auth.php';
