<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alunos', [AlunoController::class , 'index'])->name('alunos-index');
Route::get('/alunos/create', [AlunoController::class , 'create'])->name('alunos-create');
Route::post('/alunos', [AlunoController::class, 'store'])->name('alunos-store');