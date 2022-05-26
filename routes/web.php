<?php

use App\Http\Controllers\Web\CourseClassController;
use App\Http\Controllers\Web\CoursesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\SubscriptionController;
use App\Models\CourseClass;

Route::get('/', [CoursesController::class, 'index'] )->middleware(['auth'])->name('index');

Route::prefix('cursos')->group(function () {
    Route::get('/', [CoursesController::class, 'index'])->middleware(['auth'])->name('courses-index');
    Route::get('c/{course}', [CoursesController::class, 'show'] )->name('course-show');
    Route::get('criar', [CoursesController::class, 'create'])->middleware(['role:admin'])->name('course-create');
    Route::post('criar', [CoursesController::class, 'store'])->middleware(['role:admin'])->name('course-store');
    Route::get('editar/{slug}', [CoursesController::class, 'edit'])->middleware(['role:admin'])->name('course-edit');
    Route::put('atualizar/{slug}', [CoursesController::class, 'update'])->name('course-update');
});

Route::prefix('turmas')->group(function () {
    Route::get('', [CourseClassController::class, 'index'])->middleware(['role:admin'])->name('class-index');
    Route::get('criar', [CourseClassController::class, 'create'])->middleware(['role:admin'])->name('class-create');
    Route::post('criar', [CourseClassController::class, 'store'])->middleware(['role:admin'])->name('class-store');
    Route::get('t/{name?}', [CourseClassController::class, 'show'])->middleware(['role:admin'])->name('class-show');
    Route::get('editar/{slug?}', [CourseClassController::class, 'edit'])->middleware(['role:admin'])
        ->name('class-edit');

    Route::put('atualizar/{slug?}', [CourseClassController::class, 'update'])->middleware(['role:admin'])
        ->name('class-update');
});

Route::prefix('admin')->group(function () {
    Route::get('inscritos/', [SubscriptionController::class, 'index'])->middleware(['role:admin'])
        ->name('subscription-index');

    Route::get('inscritos/criar', [SubscriptionController::class, 'create'])->middleware(['role:admin'])
        ->name('subscription-create');

    Route::post('inscritos/criar', [SubscriptionController::class, 'store'])->middleware(['role:admin'])
        ->name('subscription-store');

    Route::get('inscritos/{name}', [SubscriptionController::class, 'show'])->middleware(['role:admin'])
        ->name('subscription-show');

    Route::get('inscritos/editar/{name}', [SubscriptionController::class, 'edit'])->middleware(['role:admin'])
        ->name('subscription-edit');

    Route::put('inscritos/atualizar/{name}', [SubscriptionController::class, 'update'])->middleware(['role:admin'])
        ->name('subscription-update');

    Route::get('', function() { return 'config';})->name('admin-index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\Web\HomeController::class, 'index'])->name('home');
