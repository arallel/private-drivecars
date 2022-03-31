<?php

namespace App\Http\Livewire\Laporan;

use Livewire\Component;
use App\Models\Laporan;

class Datalaporan extends Component
{
    public $laporans,$spedometersblm,$spedometersudah,$keterangan,$tglberangkat,$tglkembali,$totalkm,$liter ;
    public $isModalOpen = 0;
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
}
