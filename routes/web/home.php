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
    return view('home.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




//profile Routes
Route::get('profile/{user:name}' , [\App\Http\Controllers\Home\ProfileController::class , 'index'])->name('profile') ;

Route::get('/projects' , [\App\Http\Controllers\Home\ProjectController::class , 'index'])->name('project.index') ;


Route::get('mag' , [\App\Http\Controllers\Home\BlogController::class , 'archive'])->name('blog.archive') ;
Route::get('mag/category/{blog:title}' , [\App\Http\Controllers\Home\BlogController::class , 'single'])->name('blog.single') ;


Route::get('service/{category:name}' , [\App\Http\Controllers\Home\ServiceController::class , 'index'])->name('service.index') ;

