<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Laravolt\Avatar\Avatar;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'ktp'=> ['required', 'max:255'],
            'contact' => ['required'],
            'gender'=> ['required', 'max:255'],
            'tempat_lahir'=> ['required'],
            'tanggal_lahir'=> ['required'],
            'provinsi'=> ['required'],
            'kabupaten'=> ['required'],
            'kecamatan'=> ['required'],
            'alamat'=> ['required'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'ktp' => $input['ktp'],
            'contact' =>$input['contact'],
            'gender' => $input['gender'],
            'tempat_lahir' => $input['tempat_lahir'],
            'tanggal_lahir' => $input['tanggal_lahir'],
            'provinsi' => $input['provinsi'],
            'kabupaten' => $input['kabupaten'],
            'kecamatan' => $input['kecamatan'],
            'alamat' => $input['alamat'],
        ]);
    }
}
