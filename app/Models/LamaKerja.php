<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LamaKerja extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'lama_kerja';

    protected $fillable = [
        'id_karyawan',
        'lama_kerja',
        'bobot',
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'id_karyawan');
    }
}
