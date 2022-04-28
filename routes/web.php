<?php

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
    return view('courses.course');
})->middleware(['auth'])->name('home');

Route::get('inscricoes', function () {
    return view('courses.registrations');
})->middleware(['auth'])->name('registrations');

Route::get('inscricoes/{name}', function ($name) {
    return view('courses.registration-show');
})->middleware(['auth'])->name('registration-show');

Route::get('cursos', function () {
    return view('courses.course');
})->middleware(['auth'])->name('courses');

Route::get('novo-curso', function () {
    return view('courses.course-create');
})->middleware(['auth'])->name('course-create');

Route::get('curso/v', function () {
    return view('courses.course-show');
})->name('course-show');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
