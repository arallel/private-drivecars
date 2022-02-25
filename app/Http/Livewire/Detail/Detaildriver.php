<?php

namespace App\Http\Livewire\Detail;

use Livewire\Component;
use App\Models\User;

class Detaildriver extends Component
{
    public function render()
    {
        
        return view('livewire.detail.detaildriver', [
            'user' => $this->user,
        ]);
    }
 
    public function mount($id)
    {
        $this->user = User::find($id);
     }

}
