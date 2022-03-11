<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Cars;
use SimpleSoftwareIO\QrCode\Generator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Kendaraan extends Component
{
    public $cars ,$platmobil,$nostnk,$warna,$nobpkb,$merkkendaraan,$bahanbakar,$cars_id,$filecar,$carsqr;
    public $ModalOpen = 0;
    public $bukacreate = 0;
    public $bukaedit = 0;
    use WithFileUploads;
    public function render()
    {
        $this->cars = Cars::all();
        return view('livewire.kendaraan');
    }
    //modal 
    public function openModalPopover()
    {
        $this->ModalOpen = true;
    }
    public function closeModalPopover()
    {
        $this->ModalOpen = false;
    }
    public function bukacreate()
    {
        $this->bukacreate = true;
    }
    public function tutupcreate()
    {
        $this->bukacreate = false;
    }
    public function bukaedit()
    {
        $this->bukaedit = true;
    }
    public function tutupedit()
    {
        $this->bukaedit = false;
    }
    //crud
    public function create()
    {
        $this->resetCreateForm();
        $this->bukacreate();
    }
    public function show($id)
    {
        $cars = Cars::findOrFail($id);
        $this->id = $id;
        $this->platmobil = $cars->platmobil;
        $this->nostnk = $cars->nostnk;
        $this->warna = $cars->warna;
        $this->nobpkb = $cars->nobpkb;
        $this->merkkendaraan = $cars->merkkendaraan;
        $this->bahanbakar = $cars->bahanbakar;
        $this->filecar = $cars->filecar;
// @dd($cars);
        $this->openModalPopover();
    }
    private function resetCreateForm(){
        $this->id = '';
        $this->filecar = '';
        $this->platmobil = '';
        $this->nostnk = '';
        $this->warna = '';
        $this->nobpkb = '';
        $this->merkkendaraan = '';
        $this->bahanbakar = '';
    }
    
    public function store()
    {
        $this->validate([
            'platmobil' => 'required',
            'nostnk' => 'required',
            'warna' => 'required',
            'nobpkb' => 'required',
            'merkkendaraan' => 'required',
            'bahanbakar' => 'required',
            'filecar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        Cars::updateOrCreate(['id' => $this->cars_id], [
            'platmobil' => $this->platmobil,
            'nostnk' =>$this->nostnk,
            'warna' =>$this->warna,
            'nobpkb' =>$this->nobpkb,
            'merkkendaraan' =>$this->merkkendaraan,
            'bahanbakar' => $this->bahanbakar,
            'filecar' =>$this->filecar->store('cars-image'),
        ]);
        
        session()->flash('message', $this->cars_id ? 'Data updated successfully.' : 'Data added successfully.');

        
        $this->resetCreateForm();
        $this->tutupcreate();
    }

    public function generate($id)
    {
        $cars = Cars::findOrFail($id);


        QrCode::size(400)->format('png')->generate('hai');
        $this->bukaqr();
    }

    public function edit($id)
    {
        $cars = Cars::findOrFail($id);
        $this->cars_id = $id;
         $this->platmobil = $cars->platmobil;
         $this->nostnk = $cars->nostnk;
         $this->warna = $cars->warna;
         $this->nobpkb = $cars->nobpkb;
         $this->merkkendaraan = $cars->merkkendaraan;
         $this->bahanbakar = $cars->bahanbakar;
         $this->filecar = $cars->filecar;

         $this->bukaedit();
    }
    public function delete($id)
    {
        Cars::find($id)->delete();
        session()->flash('message', 'Data deleted successfully.');
    }
}
