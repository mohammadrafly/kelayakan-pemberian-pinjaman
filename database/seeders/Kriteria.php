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

        $data = [
            [
                'nama_kriteria' => 'Pinjaman',
                'bobot' => 20,
            ],
            [
                'nama_kriteria' => 'Lama Kerja',
                'bobot' => 20,
            ],
            [
                'nama_kriteria' => 'Riwayat Pinjaman Sebelumnya',
                'bobot' => 20,
            ],
            [
                'nama_kriteria' => 'Total Tanggungan',
                'bobot' => 20,
            ],
            [
                'nama_kriteria' => 'Gaji Pokok',
                'bobot' => 20,
            ],
        ];

        for ($i = 0; $i < count($data); $i++) {
            ModelKriteria::create([
                'nama_kriteria' => $data[$i]
            ]);
        }
    }
}
