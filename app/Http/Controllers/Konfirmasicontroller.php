<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;
use App\Models\Konfirmasi;

class Konfirmasicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $cars = Cars::all(); 
        return view ('Homepage.peminjaman',['cars' => $cars]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $this->validate($request,[
            'spedometersblm' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'tanggalpenggunaan' => 'required',
            'kendaraan' => 'required',
            'pengguna' => 'required',
            
        ]);
        
        $file_name = $request->spedometersblm->hashName();
        $spedometersblm =  $request->spedometersblm->storeAs('spedometersblm' , $file_name);

        
        Konfirmasi::create([
          'spedometersblm' => $spedometersblm,
          'tanggalpenggunaan' => $request->tanggalpenggunaan,
          'kendaraan' => $request->kendaraan,
          'pengguna' => $request->pengguna,

        ]);
        
        return redirect()->route('laporanuser.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
