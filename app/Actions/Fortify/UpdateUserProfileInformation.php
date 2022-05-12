<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'ktp' => ['required','string'],
            'contact' =>['required'],
            'gender' => ['required','string'],	
            'tanggal_lahir' => ['required','date'],
            'provinsi'	=> ['required','string'],
            'kabupaten'	=> ['required','string'],
            'kecamatan'	=> ['required','string'],
            'alamat' => ['required','string'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'ktp' => $input['ktp'],
                'email' => $input['email'],
                'contact' => $input['contact'],
                'gender' =>  $input['gender'],	
                'tanggal_lahir' =>  $input['tanggal_lahir'],
                'provinsi'	=>  $input['provinsi'],
                'kabupaten'	=>  $input['kabupaten'],
                'kecamatan'	=>  $input['kecamatan'],
                'alamat' =>  $input['alamat'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'ktp' => $input['ktp'],
            'contact'=> $input['contact'],
            'gender' => $input['gender'],
            'tempat_lahir' => $input['tempat_lahir'],
            'tanggal_lahir' => $input['tanggal_lahir'],
            'provinsi'	=> $input['provinsi'],
            'kabupaten'	=> $input['kabupaten'],
            'kecamatan'	=> $input['kecamatan'],
            'alamat' => $input['alamat'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
	