<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');;

Route::get('/faq', function () {
    return view('faq');
})->name('faq');;

Route::get('/artist', function () {
    return view('artist');
})->name('artist');

Route::get('/listener', function () {
    return view('listener');
})->name('listener');

Route::get('/reward', function () {
    return view('reward');
})->name('reward');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

