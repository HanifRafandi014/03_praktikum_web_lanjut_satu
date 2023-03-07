<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;

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

// Praktikum 3
// Route::get('/', function () {
// 	return view('home');
// });
// Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::prefix('/product')->group(function () {
	Route::get('/seooptimizer', [App\Http\Controllers\ProductController::class,'seooptimizer'])->name('seooptimizer');
	Route::get('/webdesign', [App\Http\Controllers\ProductController::class,'webdesign'])->name('webdesign');
	Route::get('/socialmediamarketing', [App\Http\Controllers\ProductController::class,'socialmediamarketing'])->name('socialmediamarketing');
	Route::get('/emailmarketing', [App\Http\Controllers\ProductController::class,'emailmarketing'])->name('emailmarketing');
	Route::get('/ppcadvertising', [App\Http\Controllers\ProductController::class,'ppcadvertising'])->name('ppcadvertising');
	Route::get('/appdevelopment', [App\Http\Controllers\ProductController::class,'appdevelopment'])->name('appdevelopment');
});
Route::get('/news/{links?}', [App\Http\Controllers\NewsController::class,'news'])->name('news');
Route::prefix('program')->group(function () {
	Route::get('/course', [App\Http\Controllers\ProgramController::class,'course'])->name('course');
	Route::get('/testimonial', [App\Http\Controllers\ProgramController::class,'testimonial'])->name('testimonial');
});
Route::get('/about-us', [App\Http\Controllers\AboutUsController::class,'aboutus'])->name('aboutus');
Route::resource('/contact-us', ContactController::class)->only(['index', 'show', 'store']);
