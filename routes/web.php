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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/DTC', function () {
    return view('DTC');
})->name('DTC');
Route::middleware(['auth:sanctum', 'verified'])->get('/DM', function () {
    return view('DM');
})->name('DM');
Route::middleware(['auth:sanctum', 'verified'])->get('/DCAP', function () {
    return view('DCAP');
})->name('DCAP');
Route::middleware(['auth:sanctum', 'verified'])->get('/SIE', function () {
    return view('SIE');
})->name('SIE');
