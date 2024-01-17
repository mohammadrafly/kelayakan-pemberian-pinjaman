<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KriteriaKaryawan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'kriteria_karyawan';

    protected $fillable = [
        'id_karyawan',
        'id_kriteria',
        'nilai'
    ];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria');
    }

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'id_karyawan');
    }
}
