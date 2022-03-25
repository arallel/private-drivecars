<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class lapor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
       

    }
    public function create()
    {
        return view('homepage.lapor');
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
            'spedometersblm' => 'required',
            'spedometersudah' => 'required',
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
        
        return redirect()->route('lapor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
