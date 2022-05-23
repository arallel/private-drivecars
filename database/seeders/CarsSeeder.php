<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
use App\Models\User;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         
        $faker = Faker::create('id_ID');
 
        for($i = 1; $i <= 10; $i++){
 
              // insert data ke table pegawai menggunakan Faker
            DB::table('cars')->insert([
            'platmobil' => $faker->randomNumber(4, true),
            'nostnk' =>$faker->randomNumber(5, true),
            'warna' =>$faker->randomLetter(),
            'nobpkb' =>$faker->randomNumber(5, true),
            'merkkendaraan' =>$faker->randomLetter(),
            'bahanbakar' => $faker->randomNumber(5, true),
            'filecar' => 'cars-image/HjlBId6keef6WV1K14i6zRjze1BV8akZWnAGOb0A.jpg',
            
           ]);
 
        }
    }
}
