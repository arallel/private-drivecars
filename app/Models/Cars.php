<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class Cars extends Model
{
    use HasFactory;
    protected $fillable = [
        'platmobil',
        'nostnk',
        'warna',
        'nobpkb',
        'merkkendaraan',
        'bahanbakar',
        'filecar',
        'carsqr',
    ];
    public $incrementing = false;

   
}
