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
Route::get('redirects','App\Http\Controllers\homecontroller@index')->middleware('auth:sanctum');
Route::get('/', function () {
    return view('auth.login');
});
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('driverdata', function () {
        return view('dashboard.driverdata');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
