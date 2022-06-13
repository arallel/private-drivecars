<?php

namespace App\Http\Livewire\Kendaraan;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Cars;
use SimpleSoftwareIO\QrCode\Generator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class Datakendaraan extends Component
{
    // public $ModalOpen = 0;
    // public $bukacreate = 0;
    // public $bukaedit = 0;
    public $merkkendaraan,$warna,$nobpkb,$nostnk,$platmobil,$bahanbakar,$filecar,$selected_id;
    public $view_id,$view_merkkendaraan,$view_warna,$view_nobpkb,$view_nostnk,$view_platmobil,$view_bahanbakar,$view_filecar;
     protected $paginationTheme = 'bootstrap';
    use WithFileUploads;
    use LivewireAlert;
    use WithPagination;
    
    public function render()
    {
        return view('livewire.kendaraan.datakendaraan', [
            'cars' => Cars::paginate(3),
        ]);
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
         $this->view_id = $cars->id;
        $this->view_platmobil = $cars->platmobil;
        $this->view_nostnk = $cars->nostnk;
        $this->view_warna = $cars->warna;
        $this->view_nobpkb = $cars->nobpkb;
        $this->view_merkkendaraan = $cars->merkkendaraan;
        $this->view_bahanbakar = $cars->bahanbakar;
        $this->view_filecar = $cars->filecar;
        $this->dispatchBrowserEvent('view-car');
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
            'bahanbakar' => 'required|min:1',
            'filecar' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);
        Cars::Create(['id' => $this->id], [
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
    public function update()
    {
        $this->validate([
            'platmobil' => 'required|max:4',
            'nostnk' => 'required',
            'warna' => 'required',
            'nobpkb' => 'required',
            'merkkendaraan' => 'required',
            'bahanbakar' => 'required|min:1'
        ]);
        if ($this->selected_id) {
            $cars = Cars::findOrFail($this->selected_id);
            $cars->update([
                'platmobil' => $this->platmobil,
            'nostnk' =>$this->nostnk,
            'warna' =>$this->warna,
            'nobpkb' =>$this->nobpkb,
            'merkkendaraan' =>$this->merkkendaraan,
            'bahanbakar' => $this->bahanbakar

            ]);
             $this->alert('success',  $this->selected_id ? 'Data updated successfully.' : 'Data added successfully.', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
           ]);
             $this->resetCreateForm();
        $this->dispatchBrowserEvent('close-modal');
        }
    }   

    public function edit($id)
    {
         $cars = Cars::findOrFail($id);
         $this->selected_id = $id;
         $this->platmobil = $cars->platmobil;
         $this->nostnk = $cars->nostnk;
         $this->warna = $cars->warna;
         $this->nobpkb = $cars->nobpkb;
         $this->merkkendaraan = $cars->merkkendaraan;
         $this->bahanbakar = $cars->bahanbakar;

        $this->dispatchBrowserEvent('edit-car');

    }
    //Delete Confirmation
    public function deleteConfirmation($id)
    {
        $this->id = $id; //student id

        $this->dispatchBrowserEvent('delete-car');
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
