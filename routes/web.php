<?php

use App\Http\Controllers\Admin\AdminCourseClassController;
use App\Http\Controllers\Admin\AdminDashboardController;
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
    Route::get('', [CourseClassController::class, 'index'])->name('class-index');
    Route::get('criar', [CourseClassController::class, 'create'])->name('class-create');
    Route::post('criar', [CourseClassController::class, 'store'])->name('class-store');
    Route::get('t/{name?}', [CourseClassController::class, 'show'])->name('class-show');
    Route::get('editar/{slug}', [CourseClassController::class, 'edit'])->name('class-edit');
    Route::put('atualizar/{slug}', [CourseClassController::class, 'update'])->name('class-update');
});

Route::prefix('admin')->name('admin.')->middleware(['role:admin'])->group(function () {
    Route::get('/', AdminDashboardController::class)->name('index');
    Route::get('/dashboard', AdminDashboardController::class)->name('dashboard');

    Route::get('inscritos/', [SubscriptionController::class, 'index'])->name('subscription-index');
    Route::get('inscritos/criar', [SubscriptionController::class, 'create'])->name('subscription-create');
    Route::post('inscritos/criar', [SubscriptionController::class, 'store'])->name('subscription-store');
    Route::get('inscritos/{name}', [SubscriptionController::class, 'show'])->name('subscription-show');
    Route::get('inscritos/editar/{name}', [SubscriptionController::class, 'edit'])->name('subscription-edit');
    Route::put('inscritos/atualizar/{name}', [SubscriptionController::class, 'update'])->name('subscription-update');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\Web\HomeController::class, 'index'])->middleware('auth')->name('home');
