<?php
use Illuminate\Support\Facades\Route;


Route::get('/' , [\App\Http\Controllers\Admin\dashboardController::class , 'view' ])->name('dashboard') ;

Route::resource('users' , \App\Http\Controllers\Admin\UserController::class) ;

Route::resource('blogs' , \App\Http\Controllers\Admin\BlogController::class) ;


Route::resource('categories' , \App\Http\Controllers\Admin\CategoryController::class) ;


Route::resource('projects' , \App\Http\Controllers\Admin\ProjectController::class) ;


Route::resource('customers' , \App\Http\Controllers\Admin\CustomerController::class) ;

Route::resource('Ui' , \App\Http\Controllers\Admin\UiController::class) ;

Route::resource('counseling' , \App\Http\Controllers\Admin\CounselingController::class)->except('create' , 'show' , 'edit' , 'store' , 'edit') ;

Route::post('ckeditor/upload', [\App\Http\Controllers\Admin\CkeditorController::class , 'upload'])->name('ckeditor.upload');


