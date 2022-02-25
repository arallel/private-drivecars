<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Datadriver extends Component
{
    public $users, $email, $name, $gender, $status;
    public $isModalOpen = 0;
    public function render()
    {
        $this->users = User::all();
        return view('livewire.datadriver');
    }
    public function show()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }
    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }
    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }
}
