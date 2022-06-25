<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('users')->insert([
            'name' => 'driver',
            'email' => 'driver@gmail.com',
            'password' => Hash::make('123456'),
            'ktp' => '1234567',
            'contact'=> '09876567',
            'gender'=> 'Laki Laki',
            'tanggal_lahir'=> '2004-08-27',
            'provinsi'=> 'jatim',
            'kabupaten'=> 'jatim',
            'kecamatan'=> 'alala',
            'alamat'=> 'aaaa',
        ]);
    }
}
