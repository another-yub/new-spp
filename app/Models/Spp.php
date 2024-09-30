<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    use HasFactory;

    protected $table = 'spp';

    protected $fillable = [
        'tahun',
        'total',
        'lunas',
        'sisa',
        'siswa_aktif',
        'siswa_keluar',
        'siswa_lulus',
    ];

    public function pembayaran() {
        return $this->belongsTo(Pembayaran::class, 'id');
    }
}