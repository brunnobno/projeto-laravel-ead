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
    return view('form');
})->name('home');

Route::get('inscricoes', function () {
    return view('registrations');
})->name('registrations');

Route::get('inscricoes/{name}', function ($name) {
    return view('registration-show');
})->name('registration-show');

Route::get('form', function () {
    return view('form');
})->name('form');

Route::get('novo-form', function () {
    return view('form-create');
})->name('form-create');

Route::get('form/show', function () {
    return view('form-show');
})->name('form-show');


