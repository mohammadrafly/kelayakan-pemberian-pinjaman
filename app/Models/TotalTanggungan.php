<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TotalTanggungan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'total_tanggungan';

    protected $fillable = [
        'id_karyawan',
        'total_tanggungan',
        'bobot',
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'id_karyawan');
    }
}
