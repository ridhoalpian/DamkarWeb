<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_kebakaran',
        'lokasi',
        'lat',
        'lng',
        'nama_pelapor',
        'no_hp_pelapor',
        'status',
    ];
}
