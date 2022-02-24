<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\showcontroller;
use App\Http\Livewire\Datadriver;

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
Route::get('datadriver', Datadriver::class);
Route::get('dashboard','App\Http\Controllers\homecontroller@index')->middleware('web');
Route::get('/', function () {
    return view('auth.login');
});
Route::middleware(['web', 'verified'])->group(function () {
        return view('dashboard.driverdata');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
