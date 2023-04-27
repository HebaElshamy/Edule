<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LectuereController;
use Illuminate\Support\Facades\Route;

Route::get('/',function()
{
    return view('admin.home');

})->name('index');

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

