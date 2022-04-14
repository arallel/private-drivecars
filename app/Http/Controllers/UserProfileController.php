<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    /**
     * Show the user profile screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        return view('Homepage.userprofil', [
            'request' => $request,
            'user' => $request->user(),
        ]);
    }
    public function photo(Request $request)
    {
        // @dd($request);
         $request->validate([
            'avatar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        
        $file_name = $request->avatar->hashName();
        $avatar =  $request->avatar->storeAs('avatar' , $file_name);

        
        User::create([
          'avatar' => $avatar,
        ]);
        
        return redirect()->route('profile'); 
    }
}

