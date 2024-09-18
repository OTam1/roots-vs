<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContactFormController;


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
    return view('home');
})->name('home');

Route::post('/submit-form', [ContactFormController::class, 'submit'])->name('contact.submit');
Route::get('/news', [FrontController::class, 'newsIndex'])->name('news');
Route::get('/news/{id}', [FrontController::class, 'newsShow'])->name('detailed-news');

Route::get('/blog', [FrontController::class, 'blogIndex'])->name('blog');
Route::get('/blog/{id}', [FrontController::class, 'blogShow'])->name('detailed-blog');


Route::get('/admin-login', [CustomLoginController::class, 'showLoginForm'])->name('login');

Route::post('/admin-login', [CustomLoginController::class, 'login']);

Route::any('/logout', [CustomLoginController::class, 'logout'])->name('logout');


Route::middleware('auth')->prefix('dashboard')->group(function () {
    // Dashboard Routes
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    // News Routes
    Route::get('news', [DashboardController::class, 'indexNews'])->name('dashboard.news.index');
    Route::get('news/create', [DashboardController::class, 'createNews'])->name('dashboard.news.create');
    Route::post('news', [DashboardController::class, 'storeNews'])->name('dashboard.news.store');
    Route::get('news/{id}/edit', [DashboardController::class, 'editNews'])->name('dashboard.news.edit');
    Route::put('news/{id}', [DashboardController::class, 'updateNews'])->name('dashboard.news.update');
    Route::delete('news/{id}', [DashboardController::class, 'destroyNews'])->name('dashboard.news.destroy');
    Route::post('news/{id}/toggle-visibility', [DashboardController::class, 'toggleVisibilityNews'])
    ->name('dashboard.news.toggleVisibility');

    // Blog Routes
    Route::get('blog', [DashboardController::class, 'indexBlog'])->name('dashboard.blog.index');
    Route::get('blog/create', [DashboardController::class, 'createBlog'])->name('dashboard.blog.create');
    Route::post('blog', [DashboardController::class, 'storeBlog'])->name('dashboard.blog.store');
    Route::get('blog/{id}/edit', [DashboardController::class, 'editBlog'])->name('dashboard.blog.edit');
    Route::put('blog/{id}', [DashboardController::class, 'updateBlog'])->name('dashboard.blog.update');
    Route::delete('blog/{id}', [DashboardController::class, 'destroyBlog'])->name('dashboard.blog.destroy');
    Route::post('blog/{id}/toggle-visibility', [DashboardController::class, 'toggleVisibilityBlog'])
    ->name('dashboard.blog.toggleVisibility');

});
