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
    return view('home');
})->name('home');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/detailed-news', function () {
    return view('detailed-news');
})->name('detailed-news');



Route::get('/admin-login', function () {
    return view('dashboard.login');
})->name('login');


Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

