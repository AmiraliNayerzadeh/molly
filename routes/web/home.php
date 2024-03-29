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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/contacts', [App\Http\Controllers\HomeController::class, 'contacts'])->name('contacts');

Route::get('/Counseling', [\App\Http\Controllers\Home\CounselingController::class, 'Counseling'])->name('Counseling');
Route::post('/Counseling/store', [\App\Http\Controllers\Home\CounselingController::class, 'store'])->name('counseling.store');

Route::get('/faqs', [App\Http\Controllers\HomeController::class, 'faqs'])->name('faqs');


//profile Routes
Route::get('profile/{user:name}' , [\App\Http\Controllers\Home\ProfileController::class , 'index'])->name('profile') ;

Route::get('/projects' , [\App\Http\Controllers\Home\ProjectController::class , 'index'])->name('project.index') ;
Route::get('/projects/{project:slug}' , [\App\Http\Controllers\Home\ProjectController::class , 'single'])->name('project.single') ;


Route::get('mag' , [\App\Http\Controllers\Home\BlogController::class , 'archive'])->name('blog.archive') ;
Route::get('mag/category/{blog:slug}' , [\App\Http\Controllers\Home\BlogController::class , 'single'])->name('blog.single') ;


Route::get('service' , [\App\Http\Controllers\Home\ServiceController::class , 'main'])->name('service.main') ;
Route::get('service/{category:slug}' , [\App\Http\Controllers\Home\ServiceController::class , 'index'])->name('service.index') ;




Route::get('site-map.xml' ,[\App\Http\Controllers\SitemapController::class ,'index'])->name('sitemap.index') ;
Route::get('site-map-static.xml' ,[\App\Http\Controllers\SitemapController::class ,'static'])->name('sitemap.static') ;
Route::get('site-map.service.xml' ,[\App\Http\Controllers\SitemapController::class ,'service'])->name('sitemap.service') ;
Route::get('site-map-article.xml' ,[\App\Http\Controllers\SitemapController::class ,'article'])->name('sitemap.article') ;
Route::get('site-map-project.xml' ,[\App\Http\Controllers\SitemapController::class ,'project'])->name('sitemap.project') ;

