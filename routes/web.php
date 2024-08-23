<?php
// routes/web.php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/projetos/create', [ProjetoController::class, 'create'])->name('projetos.create');
Route::get('/projetos', [ProjetoController::class, 'index'])->name('projetos.index');
Route::resource('projetos', ProjetoController::class);

Route::get('register', [UserController::class, 'create'])->name('register');
Route::post('register', [UserController::class, 'store']);


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'managerDashboard'])->name('dashboard'); // Dashboard do gerente
    Route::get('/member/dashboard', [DashboardController::class, 'memberDashboard'])->name('member.dashboard'); // Dashboard do membro
});
require __DIR__.'/auth.php';
