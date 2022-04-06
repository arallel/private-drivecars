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
            'spedometersblm' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'spedometersudah' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'keterangan' => 'required',
            'tglberangkat' => 'required',
            'tglkembali' => 'required',
            'totalkm' => 'required',
            'liter' => 'required',
        ]);
        
        $file_name = $request->spedometersblm->hashName();
        $spedometersblm =  $request->spedometersblm->storeAs('spedometersblm' , $file_name);
        $file_name = $request->spedometersudah->hashName();
        $spedometersudah =  $request->spedometersudah->storeAs('spedometersudah' , $file_name);

        
        Laporan::create([
          'spedometersblm' => $spedometersblm,
          'spedometersudah' => $spedometersudah,
          'keterangan' => $request->keterangan,
          'tglberangkat' => $request->tglberangkat,
          'tglkembali' => $request->tglkembali,
          'totalkm' => $request->totalkm,
          'liter' => $request->liter,
        ]);
        
        return redirect()->route('laporanuser.index');
    }
}
