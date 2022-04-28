<?php

use App\Http\Controllers\Web\CoursesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\SubscriptionController;

Route::get('/', [CoursesController::class, 'index'] )->middleware(['auth'])->name('home');

Route::get('cursos', [CoursesController::class, 'index'] )->middleware(['auth'])->name('courses');
Route::get('criar-curso', [CoursesController::class, 'create'] )->middleware(['auth'])->name('course-create');
Route::get('curso/{$course?}', [CoursesController::class, 'show'] )->middleware(['auth'])->name('course-show');

Route::get('inscritos', [SubscriptionController::class, 'index'])->middleware(['auth'])->name('registered');
Route::get('inscrito/{name}', [SubscriptionController::class, 'show'])->middleware(['auth'])->name('registered-show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\Web\HomeController::class, 'index'])->name('home');
