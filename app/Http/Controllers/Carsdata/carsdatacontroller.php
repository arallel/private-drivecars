<?php

namespace App\Http\Controllers\Carsdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cars;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;


class carsdatacontroller extends Controller
{
   public function index()
   {
    $cars = Cars::all();
    return view('livewire.kendaraan.datakendaraan',compact('cars'));
   }  
   //  
    public function store(Request $request)
    {
          $data = $this->validate($request, [
            'platmobil' => 'required',
            'nostnk' => 'required',
            'warna' => 'required',
            'nobpkb' => 'required',
            'merkkendaraan' => 'required',
            'bahanbakar' => 'required',
            'filecar' => 'required',
        ]);   
        $filecar =  $request->filecar->storeAs(
      'filecar', "CARS-".time().'.'.$request->filecar->extension());
        Cars::create([
            'platmobil' => $request->platmobil,
            'nostnk' =>$request->nostnk,
            'warna' =>$request->warna,
            'nobpkb' =>$request->nobpkb,
            'merkkendaraan' =>$request->merkkendaraan,
            'bahanbakar' => $request->bahanbakar,
            'filecar' => $filecar
        ]);

        return redirect()->route('kendaraan');

      }
     public function update(Request $request, $id)
     {
      $this->validate($request, [
            'platmobil' => 'required',
            'nostnk' => 'required',
            'warna' => 'required',
            'nobpkb' => 'required',
            'merkkendaraan' => 'required',
            'bahanbakar' => 'required',
        ]);   
      $cars = Cars::findOrFail($id);
       
      
      $cars->update([
            'platmobil' => $request->platmobil,
            'nostnk' =>$request->nostnk,
            'warna' =>$request->warna,
            'nobpkb' =>$request->nobpkb,
            'merkkendaraan' =>$request->merkkendaraan,
            'bahanbakar' => $request->bahanbakar,

        ]);

        return redirect()->route('kendaraan');

     } 
    public function delete($id)
    {
    $cars = Cars::findOrFail($id);
           Storage::delete($cars->filecar);
           
       Cars::destroy($id);
        return redirect()->route('kendaraan');

    }  
}



