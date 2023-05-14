<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LectuereController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/users', [UserController::class,'index'])->name('all.users');
Route::group(['prefix' => 'user'], function () {

    Route::delete('/{id}/destroy', [UserController::class,'destroy'])->name('user.destroy');
    Route::get('/{id}/show', [UserController::class,'show'])->name('user.show');
    Route::get('/{id}/create/course', [UserController::class,'create'])->name('user.create.course');
    Route::post('/{id}/store/course', [UserController::class,'store'])->name('user.store.course');
    Route::delete('/{id}/destroy/course', [UserController::class,'destroyCourse'])->name('user.destroy.course');

});

//subject route
Route::resource('subjects',SubjectController::class)->except('show');

//course route
Route::resource('courses',CourseController::class);

//lecture route
// Route::resource('lectures',LectuereController::class);
Route::group(['prefix' => 'lectures'], function () {
    Route::get('/{id}', [LectuereController::class, 'index'])->name('lectures.index');
    Route::get('/{id}/create', [LectuereController::class, 'create'])->name('lectures.create');
    Route::post('/{id}/store', [LectuereController::class, 'store'])->name('lectures.store');

    Route::get('/{id}/edit', [LectuereController::class, 'edit'])->name('lectures.edit');
    Route::put('/{id}/update', [LectuereController::class, 'update'])->name('lectures.update');
    Route::delete('/{id}/destroy', [LectuereController::class, 'destroy'])->name('lectures.destroy');
});

