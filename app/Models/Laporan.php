<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Laporan extends Model
{
    use HasFactory;
    
    protected $table = 'laporans';

    protected $fillable = [

        'spedometersblm',
        'spedometersudah',
        'keterangan',
        'tanggalpenggunaan',
        'totalkm',
        'liter'
    ];
   
    
    
}
