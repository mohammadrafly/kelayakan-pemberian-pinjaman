<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Normalisasi as ModelNormalisasi;
use App\Models\Kriteria;

class Normalisasi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kriteriaRecords = Kriteria::all();

        $data = [
            [
                'nama_kriteria' => 'Pinjaman',
                'nilai' => [50000, 100000, 150000, 200000, 250000],
                'bobot' => [10, 9, 8, 7, 6],
            ],
            [
                'nama_kriteria' => 'Lama Kerja',
                'nilai' => [1, 2, 3, 4, 5],
                'bobot' => [1, 2, 3, 4, 5],
            ],
            [
                'nama_kriteria' => 'Riwayat Pinjaman Sebelumnya',
                'nilai' => [1, 0],
                'bobot' => ['10', '0'],
            ],
            [
                'nama_kriteria' => 'Total Tanggungan',
                'nilai' => [1000000, 2000000, 3000000, 4000000, 5000000],
                'bobot' => [1, 2, 3, 4, 5],
            ],
        ];

        foreach ($data as $item) {
            $kriteriaName = $item['nama_kriteria'];
            $kriteria = $kriteriaRecords->where('nama_kriteria', $kriteriaName)->first();

            if ($kriteria) {
                foreach ($item['nilai'] as $key => $nilai) {
                    ModelNormalisasi::create([
                        'id_kriteria' => $kriteria->id,
                        'nilai' => $nilai,
                        'bobot' => $item['bobot'][$key],
                    ]);
                }
            } else {
                // Handle case where the criteria is not found in the database.
                // You can log an error, throw an exception, or handle it based on your application logic.
            }
        }
    }
}
