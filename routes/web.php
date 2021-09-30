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

Route::get('/pemasukan', function () {
    return view('Pemasukan');
});

Route::get('/pengeluaran', function () {
    return view('Pengeluaran');
});

// Auth::routes();

// Route::login($user);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');