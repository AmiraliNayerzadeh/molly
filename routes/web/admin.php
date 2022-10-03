<?php
use Illuminate\Support\Facades\Route;


Route::get('/' , [\App\Http\Controllers\Admin\dashboardController::class , 'view' ])->name('dashboard') ;

Route::resource('users' , \App\Http\Controllers\Admin\UserController::class) ;

