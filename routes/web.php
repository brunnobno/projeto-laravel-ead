<?php

use App\Http\Controllers\Web\CoursesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\SubscriptionController;

Route::get('/', [CoursesController::class, 'index'] )->middleware(['auth'])->name('index');

Route::prefix('cursos')->group(function () {
    Route::get('/', [CoursesController::class, 'index'])->middleware(['auth'])->name('courses-index');
    Route::get('curso/{slug}', [CoursesController::class, 'show'] )->name('course-show');
    Route::get('criar', [CoursesController::class, 'create'])->middleware(['role:admin'])->name('course-create');
    Route::post('criar', [CoursesController::class, 'store'])->middleware(['role:admin'])->name('course-create-post');
    Route::get('editar/{slug}', [CoursesController::class, 'edit'])->middleware(['role:admin'])->name('course-edit');
    Route::put('atualizar/{slug}', [CoursesController::class, 'update'])->name('course-update');
});

Route::prefix('inscritos')->group(function () {
Route::get('', [SubscriptionController::class, 'index'])->middleware(['role:admin'])->name('registered');
Route::get('{name}', [SubscriptionController::class, 'show'])->middleware(['role:admin'])->name('registered-show');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\Web\HomeController::class, 'index'])->name('home');
