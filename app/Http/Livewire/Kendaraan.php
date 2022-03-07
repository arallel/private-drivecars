<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cars;

class Kendaraan extends Component
{
    public $cars ,$platmobil,$nostnk,$warna,$nobpkb,$merkkendaraan,$bahanbakar,$cars_id;
    public $ModalOpen = 0;
    public $bukacreate = 0;
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

        $this->openModalPopover();
    }
    private function resetCreateForm(){
        $this->id = '';
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
            'platmobil' => 'required','integer',
            'nostnk' => 'required','integer',
            'warna' => 'required',
            'nobpkb' => 'required','integer',
            'merkkendaraan' => 'required',
            'bahanbakar' => 'required','integer',
        ]);
    
        Cars::updateOrCreate(['id' => $this->cars_id], [
            'platmobil' => $this->platmobil,
            'nostnk' =>$this->nostnk,
            'warna' =>$this->warna,
            'nobpkb' =>$this->nobpkb,
            'merkkendaraan' =>$this->merkkendaraan,
            'bahanbakar' => $this->bahanbakar,
        ]);

        session()->flash('message', $this->cars_id ? 'Data updated successfully.' : 'Data added successfully.');

        
        $this->resetCreateForm();
        $this->tutupcreate();
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

         $this->bukacreate();
    }
    public function delete($id)
    {
        Cars::find($id)->delete();
        session()->flash('message', 'Data deleted successfully.');
    }
}
