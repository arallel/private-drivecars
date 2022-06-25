<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class Laporanuser extends Controller
{
    public function index()
    {
    return view('home');
    }
    public function create()
    {
      return view('Homepage.lapor');
    }
    public function store(Request $request)
    {
           $this->validate($request,[
            'spedometersudah' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'keterangan' => 'required',
            'totalkm' => 'required',
            'liter' => 'required',
        ]);
        
        
        $file_name = $request->spedometersudah->hashName();
        $spedometersudah =  $request->spedometersudah->storeAs('Laporan' , $file_name);

        
        Laporan::create([
          'spedometersudah' => $spedometersudah,
          'keterangan' => $request->keterangan,
          'totalkm' => $request->totalkm,
          'liter' => $request->liter,
        ]);

        return redirect()->route('Homescreen');
      }


      public function konfirmasi(Request $request)
    {
           $this->validate($request,[
            'spedometersblm' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'tanggalkeberangkatan' => 'required',
            'kendaraan' => 'required',
            'pengguna' => 'required',
            
        ]);
        
        $file_name = $request->spedometersblm->hashName();
        $spedometersblm =  $request->spedometersblm->storeAs('spedometersblm' , $file_name);

        
        Laporan::update ([
          'spedometersblm' => $spedometersblm,
          'tanggalkeberangkatan' => $request->tanggalkeberangkatan,
          'kendaraan' => $request->kendaraan,

        ]);
        
        return redirect()->route('Dashboard'); 
    }
}
