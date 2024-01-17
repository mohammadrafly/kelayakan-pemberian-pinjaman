<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Normalisasi extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'normalisasi';

    protected $fillable = [
        'id_kriteria',
        'nilai',
        'bobot'
    ];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria');
    }
}
