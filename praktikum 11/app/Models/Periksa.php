<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;
    // Nama tabel yang digunakan
    protected $table = 'periksa';

    // Kolom yang dapat diisi
    protected $fillable = [
        'id',
        'pasien',
        'dokter',
        'tanggal',
        'berat',
        'tinggi',
        'tensi',
        'keterangan',
        
    ];
    public $timestamps = false;
}
