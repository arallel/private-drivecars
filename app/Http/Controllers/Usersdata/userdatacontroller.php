<?php

namespace App\Http\Controllers\Usersdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class userdatacontroller extends Controller
{
    public function index()
    {
      $users = User::all();
      return view('livewire.user.users',compact('users'));
    }
}
