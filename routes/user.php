<?php

use App\Http\Controllers\website\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::group(['as'=>'welcome.'],function(){
    Route::get('/',[WelcomeController::class ,'index'])->name('index');
    Route::get('courses',[WelcomeController::class ,'allCourses'])->name('courses');
    Route::get('course/{id}',[WelcomeController::class ,'singleCourse'])->name('singleCourse');
    Route::get('enroll/{id}',[WelcomeController::class ,'enroll'])->middleware('enrollment')->name('enroll');
    Route::get('profile/{id}',[WelcomeController::class ,'profile'])->middleware('auth')->name('profile');
    Route::get('login',[WelcomeController::class ,'loginForm'])->name('login.form');
    Route::get('register',[WelcomeController::class ,'registerForm'])->name('register.form');
    Route::get('search',[WelcomeController::class ,'search'])->name('search');
    Route::delete('destroy',[WelcomeController::class ,'destroy'])->middleware('auth')->name('destroy');
});




