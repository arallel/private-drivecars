<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use DB;

class Datalaporanpengguna extends Controller
{
     public function index()
    {
        $data = DB::table('laporans')
            ->crossjoin('konfirmasis')
            ->get();
     // $laporans = Laporan::all();
     // dd($data);
      return view ('livewire.datalaporan.laporan', 
        ['data' => $data]);

    }
}
