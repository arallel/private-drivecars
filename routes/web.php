<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\showcontroller;
use App\Http\Livewire\Dashboard\Main;
use App\Http\Livewire\User\Pengguna;
use App\Http\Livewire\Kendaraan\Datakendaraan;
use App\Http\Controllers\Datalaporanpengguna;
use App\Http\Controllers\lapor;
use App\Http\Controllers\Laporanuser;
use App\Http\Controllers\konfirmasicontroller;
use App\Http\Controllers\UserProfileController;
use App\Http\Livewire\LaporanTable;
use App\Http\Livewire\User\Userprofile;
use App\Http\Controllers\test;



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
    return view('test');
});

Route::resource('Peminjaman',konfirmasicontroller::class);

//
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Route::get('homepage',function(){
    // }); 
    Route::view('Dashboard','home');
    Route::resource('laporanuser',Laporanuser::class);
        Route::get('Laporanuser', function () {
        return view('homepage.lapor');
    });
        Route::get('datalaporan',[Datalaporanpengguna::class,'index'])->name('Datalaporan');
    Route::get('dashboard',Main::class)->name('Dashboard');
    Route::get('Role','App\Http\Controllers\homecontroller@index');
    Route::get('Datakendaraan',Datakendaraan::class)->name('kendaraan');
    Route::get('Userdata',Pengguna::class)->name('pengguna');
    Route::get('Userprofile',Userprofile::class)->name('userprofile');
});


require_once __DIR__ . '/jetstream.php';
