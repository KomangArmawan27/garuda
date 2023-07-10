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
    return view('welcome');
});

// auth
Route::get('/login', function () {
    return view('auth/login');
});

// dashboard
Route::get('/sales', function () {
    return view('dashboard/sales');
});
Route::get('/admin', function () {
    return view('dashboard/admin');
});

// Route::view('login','auth/login');
