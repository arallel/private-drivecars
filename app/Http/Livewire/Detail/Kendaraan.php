<?php

namespace App\Http\Livewire\Detail;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Cars;
use SimpleSoftwareIO\QrCode\Generator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class Kendaraan extends Component
{
    public $cars ,$platmobil,$nostnk,$warna,$nobpkb,$merkkendaraan,$bahanbakar,$filecar;
    public $ModalOpen = 0;
    public $bukacreate = 0;
    public $bukaedit = 0;
    public $count = 0;
    use WithFileUploads;
    use LivewireAlert;
    public function render()
    {
        $this->cars = Cars::all();
        return view('livewire.detail.kendaraan');
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
         $this->id = $cars->id;
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
            'platmobil' => 'required|max:4',
            'nostnk' => 'required',
            'warna' => 'required',
            'nobpkb' => 'required',
            'merkkendaraan' => 'required',
            'bahanbakar' => 'required|min:4',
            'filecar' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);
        Cars::updateOrCreate(['id' => $this->id], [
            'platmobil' => $this->platmobil,
            'nostnk' =>$this->nostnk,
            'warna' =>$this->warna,
            'nobpkb' =>$this->nobpkb,
            'merkkendaraan' =>$this->merkkendaraan,
            'bahanbakar' => $this->bahanbakar,
            'filecar' =>$this->filecar->store('cars-image'),
        ]);
        $this->alert('success',  $this->id ? 'Data updated successfully.' : 'Data added successfully.', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
           ]);
            
        $this->resetCreateForm();
        $this->tutupedit();
        $this->tutupcreate();
    }

    // public function update()
    // {
    //      // $this->bukaedit();
    //    $this->validate([
    //         'platmobil' => 'required|max:4',
    //         'nostnk' => 'required',
    //         'warna' => 'required',
    //         'nobpkb' => 'required',
    //         'merkkendaraan' => 'required',
    //         'bahanbakar' => 'required|min:4',
    //         // 'filecar' => 'image|mimes:jpg,jpeg,png|max:2048',
    //     ]);
       
    //      if($this->id) {
          
    //         $car = Cars::find($this->id);
    //         if($car) {
    //             $car->update([
    //                 'platmobil' => $this->platmobil,
    //                 'nostnk' =>$this->nostnk,
    //                 'warna' =>$this->warna,
    //                 'nobpkb' =>$this->nobpkb,
    //                 'merkkendaraan' =>$this->merkkendaraan,
    //                 'bahanbakar' => $this->bahanbakar
    //             ]);
    //         }
    //     }
    //  // $update = Cars::update(['id' => $this->id], [
    //  //        'platmobil' => $this->platmobil,
    //  //        'nostnk' =>$this->nostnk,
    //  //        'warna' =>$this->warna,
    //  //        'nobpkb' =>$this->nobpkb,
    //  //        'merkkendaraan' =>$this->merkkendaraan,
    //  //        'bahanbakar' => $this->bahanbakar,
    //  //        // 'filecar' =>$this->filecar->store('cars-image'),
    //  //    ]);
    //  //  $update->save();
    //     $this->alert('success',  $this->id ? 'Data updated successfully.' : 'Data added successfully.', [
    //         'position' => 'center',
    //         'timer' => 3000,
    //         'toast' => true,
    //         'timerProgressBar' => true,
    //    ]);
      
    //     $this->tutupedit();
    // }

    public function edit($id)
    {
         $cars = Cars::findOrFail($id);
         $this->id = $id;
         $this->platmobil = $cars->platmobil;
         $this->nostnk = $cars->nostnk;
         $this->warna = $cars->warna;
         $this->nobpkb = $cars->nobpkb;
         $this->merkkendaraan = $cars->merkkendaraan;
         $this->bahanbakar = $cars->bahanbakar;
         // $this->filecar = $cars->filecar;

         $this->bukaedit();
    }
    public function delete($id)
    {
        Cars::find($id)->delete();
        $this->alert('success', 'Data berhasil di hapus', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
           ]);
        
    }

}
