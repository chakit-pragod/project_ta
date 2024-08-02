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
    Route::get('/home', [HomeController::class, 'showAnnouncements'])->name('home');
    Route::get('/attendances', [TaController::class, 'attendances'])->name('layout.ta.attendances');


});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::post('/admin/add-announce', [HomeController::class, 'addAnnounce'])->name('admin.addAnnounce');
    // Route::get('/admin/announce', [AdminController::class, 'announce'])->name('layout.admin.announce');
    Route::get('/admin/tausers', [AdminController::class, 'taUsers'])->name('layout.admin.taUsers');
    Route::get('/admin/detailsta', [AdminController::class, 'detailsTa'])->name('layout.admin.detailsTa');
    Route::get('/admin/detailsta/id', [AdminController::class, 'detailsByid'])->name('layout.admin.detailsByid');


});

//Teacher Routes List
Route::middleware(['auth', 'user-access:teacher'])->group(function () {

    Route::get('/teacherreq', [HomeController::class, 'teacherHome'])->name('teacher.home');
    Route::get('/subject', [TeacherController::class, 'subject'])->name('layout.teacher.subject');
    Route::get('/subject/subjectDetail', [TeacherController::class, 'subjectDetail'])->name('subjectDetail');
    Route::get('/subject/subjectDetail/taDetail', [TeacherController::class, 'taDetail'])->name('taDetail');
});

Route::fallback(function () {
    return view('error\404');
});