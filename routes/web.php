<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\showcontroller;
use App\Http\Livewire\detail\Kendaraan;
use App\Http\Livewire\Datadriver\Driver;
use App\Http\Livewire\laporan\Datalaporan;
use App\Http\Controllers\lapor;
use App\Http\Controllers\Laporanuser;
use App\Http\Controllers\konfirmasicontroller;
use App\Http\Controllers\UserProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('auth.login');
});
<<<<<<< Updated upstream
Route::resource('cars', Kendaraan::class);
=======
Route::resource('peminjaman',konfirmasicontroller::class);
Route::get('cars', Kendaraan::class);
>>>>>>> Stashed changes
//route ketika sudah fix
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('homepage',function(){
        return view('home');
    }); 
    // Route::get('test',function(){
    // return view('test');
    // });
    Route::resource('laporanuser',Laporanuser::class);   
<<<<<<< Updated upstream
    
        Route::resource('datadriver', Driver::class);
        Route::resource('laporan', Datalaporan::class);
=======
        Route::get('datadriver', Driver::class);
        Route::get('laporan', Datalaporan::class);
>>>>>>> Stashed changes
        Route::get('Laporanuser', function () {
        return view('homepage.lapor');
    });
    Route::get('Dashboard','App\Http\Controllers\homecontroller@index');
});
// Route::get('/profile/photo', UserProfileController::class,'photo');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     return view('dashboard');
})->name('dashboard');

require_once __DIR__ . '/jetstream.php';
