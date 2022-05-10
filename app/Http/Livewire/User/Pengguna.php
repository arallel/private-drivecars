<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;

class Pengguna extends Component
{
    public $users, $email, $name, $gender, $status,$ktp, $tempat_lahir, $tanggal_lahir, $provinsi, $kabupaten, $kecamatan, $alamat,$contatct;
    public $isModalOpen = 0;
    public function render()
    {
         $this->users = User::all();
        return view('livewire.user.users');
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
        $users = User::findOrFail($id);
        $this->id = $id;
        $this->name = $users->name;
        $this->email = $users->email;
        $this->gender = $users->gender;
        $this->contact = $users->contact;
        $this->tempat_lahir = $users->tempat_lahir;
        $this->tanggal_lahir = $users->tanggal_lahir;
        $this->provinsi = $users->provinsi;
        $this->kabupaten = $users->kabupaten;
        $this->kecamatan = $users->kecamatan;
        $this->alamat = $users->alamat;
        $this->status = $users->status;

        $this->openModalPopover();
    }
}
