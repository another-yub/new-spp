<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';

    protected $fillable = [
        'user_id',
        'nis',
        'kelas_id',
        'alamat',
        'no_hp'
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
    public function spp()
    {
      return $this->belongsTo(Spp::class);
    }
    public function siswa()
    {
      return  $this->belongsTo(Siswa::class);
    }

}