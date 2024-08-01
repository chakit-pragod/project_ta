<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('admin.home');

//Ta Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/announce', [HomeController::class, 'announce'])->name('layout.admin.announce');
});

//Teacher Routes List
Route::middleware(['auth', 'user-access:teacher'])->group(function () {

    Route::get('/teacher/home', [HomeController::class, 'teacherHome'])->name('teacher.home');
});

Route::fallback(function () {
    return view('error\404');
});