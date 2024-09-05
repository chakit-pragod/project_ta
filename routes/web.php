<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TaController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\RequestsController;
use App\Http\Controllers\DisbursementsController;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Route::resource('ta',RequestController::class);
// Route::resource('admin',AdminController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [TaController::class, 'showAnnounces'])->name('home');


// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('admin.home');

//Ta Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [TaController::class, 'showAnnounces'])->name('home');
    Route::get('/request', [TaController::class, 'request'])->name('layout.ta.request');
    Route::post('/request', [TaController::class, 'apply'])->name('ta.apply');
    Route::get('/taSubject', [TaController::class, 'showCourseTas'])->name('layouts.ta.taSubject');
    Route::get('/statusrequest', [RequestsController::class, 'showCourseTas'])->name('layout.ta.statusRequest');

    // Route::get('/disbursements', [TaController::class, 'disbursements'])->name('layout.ta.disbursements');
    Route::get('/disbursements', [DisbursementsController::class, 'disbursements'])->name('layout.ta.disbursements');
    Route::post('/disbursements', [DisbursementsController::class, 'uploads'])->name('layout.ta.disbursements');

    // Route::post('/apply-courseta', [TaController::class, 'applyCourseTa'])->name('apply.ta');
    Route::get('/tasubject', [TaController::class, 'taSubject'])->name('layout.ta.taSubject');
    Route::get('/attendances', [TaController::class, 'attendances'])->name('layout.ta.attendances');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin', [RequestsController::class, 'showCourseTas'])->name('admin.home');
    // Route::get('/statusrequest', [RequestsController::class, 'showCourseTas'])->name('layout.ta.statusRequest');

    Route::resource('announces', AdminController::class);
    // Route::get('/admin/announce', [AdminController::class, 'announce'])->name('layout.admin.announce');
    Route::get('/admin/tausers', [AdminController::class, 'taUsers'])->name('layout.admin.taUsers');
    Route::get('/admin/detailsta', [AdminController::class, 'detailsTa'])->name('layout.admin.detailsTa');
    Route::get('/admin/detailsta/id', [AdminController::class, 'detailsByid'])->name('layout.admin.detailsByid');
    Route::get('/fetchdata', [ApiController::class, 'fetchData']);

    

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