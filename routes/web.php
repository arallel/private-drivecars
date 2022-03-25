<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\showcontroller;
// use App\Http\Livewire\Datadriver;
use App\Http\Livewire\detail\Kendaraan;
use App\Http\Livewire\Datadriver\Driver;
use App\Http\Livewire\laporan\Datalaporan;
use App\Http\Controllers\Lapor;
// use App\Http\Livewire\laporuser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('Dashboard','App\Http\Controllers\homecontroller@index');
// Route::get('lapor', function () {
//     return view('homepage.lapor');
// });
Route::get('home',function(){
    return view('home');
});
Route::resource('lapor',Datalapor::class);
// Route::get('lapor', laporuser::class);
Route::get('/', function () {
    return view('auth.login');
});
// Route::get('test', Test::class);

Route::get('laporan', Datalaporan::class);
//route ketika sudah fix
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('cars', Kendaraan::class);
    Route::get('datadriver', Driver::class);

    });

    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');