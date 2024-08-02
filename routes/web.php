<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TaController;
use App\Http\Controllers\TeacherController;
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
    Route::get('/request', [TaController::class, 'request'])->name('layout.ta.request');
    Route::get('/statusrequest', [TaController::class, 'statusRequest'])->name('layout.ta.statusRequest');
    Route::get('/tasubject', [TaController::class, 'taSubject'])->name('layout.ta.taSubject');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home');
    // Route::get('/admin/announce', [AdminController::class, 'announce'])->name('layout.admin.announce');
    Route::get('/admin/tausers', [AdminController::class, 'taUsers'])->name('layout.admin.taUsers');
});

//Teacher Routes List
Route::middleware(['auth', 'user-access:teacher'])->group(function () {

    Route::get('/teacherreq', [HomeController::class, 'teacherHome'])->name('teacher.home');
    Route::get('/subject', [TeacherController::class, 'subject'])->name('layout.teacher.subject');
});

Route::fallback(function () {
    return view('error\404');
});