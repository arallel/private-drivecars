<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public $users, $email, $name, $gender, $status;
    // public function render()
    // {
    //     $this->users = User::all();
    //     return view('dashboard');
    // }
    public function render()
    {
        $this->users = User::all();
        return view('dashboard');
        // return <<<'blade'
        //     <div>
           
        //    return view('dashboard');

        //     </div>
        // blade;
    }
}
