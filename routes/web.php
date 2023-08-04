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
})->name('home');

Route::get('/php-guide', function () {
    return view('php');
})->name('php-guide');

Route::get('/nginx-guide', function () {
    return view('nginx');
})->name('nginx-guide');

Route::get('/virtual-guide', function () {
    return view('virtual');
})->name('virtual-guide');

Route::get('/rest-api-guide', function () {
    return view('rest-api');
})->name('rest-api-guide');

Route::get('/about', function () {
    return view('about');
})->name('about');
