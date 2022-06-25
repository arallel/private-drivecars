<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\Datalaporanpengguna;
use App\Http\Controllers\Laporanuser;
use App\Http\Controllers\konfirmasicontroller;
use App\Http\Controllers\UserProfileController;
use App\Http\Livewire\User\Userprofile;
use App\Http\Controllers\datapeminjaman;
use App\Http\Controllers\Carsdata\carsdatacontroller;
use App\Http\Controllers\Usersdata\userdatacontroller;
use App\Http\Livewire\Dashboard\Main;
//tester




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

// Route::get('/', function () {
//     return view('auth.login');   
// });
//tester route
Route::get('/', function () {
    return view('home');
})->name('Homescreen');
Route::controller(userdatacontroller::class)->group(function () {
       Route::get('Userdata', 'index')->name('Users');
     });

Route::controller(datapeminjaman::class)->group(function () {
    Route::get('datapeminjaman', 'index')->name('Datapeminjaman');
});
Route::resource('Peminjaman',konfirmasicontroller::class);
//
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('Dashboard','home');
    Route::resource('laporanuser',Laporanuser::class);
        Route::get('Laporanuser', function () {
        return view('homepage.lapor');
    });
        Route::get('datalaporan',[Datalaporanpengguna::class,'index'])->name('Datalaporan');
    Route::get('dashboard',Main::class)->name('Dashboard');
    Route::get('Role','App\Http\Controllers\homecontroller@index');
    Route::get('Userprofile',Userprofile::class)->name('userprofile');

    Route::controller(carsdatacontroller::class)->group(function () {
    Route::get('Datakendaraan', 'index')->name('kendaraan');
    Route::post('Datakendaraan','store')->name('input.datakendaraan');
    Route::delete('Datakendaraan/{id}','delete')->name('delete.kendaraan');
    Route::put('Datakendaraan/{id}','update')->name('update.kendaraan');
     });
});


require_once __DIR__ . '/jetstream.php';
