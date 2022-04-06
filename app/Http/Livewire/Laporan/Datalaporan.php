<?php

namespace App\Http\Livewire\Laporan;

use Livewire\Component;
use App\Models\Laporan;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Datalaporan extends Component
{
    public $laporans,$spedometersblm,$spedometersudah,$keterangan,$tglberangkat,
    $tglkembali,$totalkm,$liter ;
    public $isModalOpen = 0;
     use LivewireAlert;
    public function render()
    {
        $this->laporans = Laporan::all();
        return view('livewire.laporan.datalaporan');
    }
    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }
    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }
    public function show($id)
    {
        $laporans = Laporan::findOrFail($id);
        $this->id = $id;
        $this->spedometersblm = $laporans->spedometersblm;
        $this->spedometersudah = $laporans->spedometersudah;
        $this->keterangan = $laporans->keterangan;
        $this->tglberangkat = $laporans->tglberangkat;
        $this->tglkembali = $laporans->tglkembali;
        $this->totalkm = $laporans->totalkm;
        $this->liter = $laporans->liter;

        $this->openModalPopover();
    }
      public function delete($id)
    {
        Laporan::find($id)->delete();
        $this->alert('success', 'Data berhasil di hapus', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
           ]);
        
    }
}
