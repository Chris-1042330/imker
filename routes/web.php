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
});

Route::get('/artiekelen', function () {
    return view('articles');
});

Route::get('/dashboard', function () {
    return view('adm.dashboard');
})->middleware(['auth'])->name('adm/dashboard');

Route::get('/dashboard/users', function () {
    return view('adm.users');
})->middleware(['auth'])->name('adm/users');

require __DIR__.'/auth.php';
