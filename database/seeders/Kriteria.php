<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kriteria as ModelKriteria;

class Kriteria extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['Pinjaman', 'Lama Kerja', 'Riwayat Pinjaman Sebelumnya', 'Total Tanggungan'];

        for ($i = 0; $i < count($data); $i++) {
            ModelKriteria::create([
                'nama_kriteria' => $data[$i]
            ]);
        }
    }
}
