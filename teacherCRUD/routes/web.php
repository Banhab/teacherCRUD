<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

Route::get('/teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('/teachers', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('/teachers/{id}', [TeacherController::class, 'show'])->name('teacher.show');
Route::get('/teachers/{id}/edit', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::put('/teachers/{id}', [TeacherController::class, 'update'])->name('teacher.update');
Route::delete('/teachers/{id}', [TeacherController::class, 'destroy'])->name('teacher.destroy');
