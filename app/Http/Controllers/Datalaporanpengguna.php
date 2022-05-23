<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use DB;

class Datalaporanpengguna extends Controller
{
     public function index()
    {
        $data = DB::table('users')
            ->join('laporans', 'users.id', '=', 'laporans.user_id')
            ->select('laporans.*','users.name')
            ->get();
     // $laporans = Laporan::all();
     // dd($data);
      return view ('livewire.datalaporan.laporan', 
        ['data' => $data]);
    }
}
