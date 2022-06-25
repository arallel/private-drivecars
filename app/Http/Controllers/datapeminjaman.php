<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konfirmasi;
use DB;

class datapeminjaman extends Controller
{
    public function index()
    {
        $konfirmasis = DB::table('konfirmasis')
            ->join('cars', 'konfirmasis.kendaraan', '=', 'cars.id')
            ->select('konfirmasis.*', 'cars.merkkendaraan')
            ->get();

        return view('livewire.datapeminjaman.datapeminjaman',compact('konfirmasis'));
    }
}
