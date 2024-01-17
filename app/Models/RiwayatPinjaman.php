<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RiwayatPinjaman extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'riwayat_pinjaman_sebelumnya';

    protected $fillable = [
        'id_karyawan',
        'riwayat_pinjaman_sebelumnya',
        'bobot',
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'id_karyawan');
    }
}
