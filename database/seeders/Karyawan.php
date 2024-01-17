<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Karyawan as ModelKaryawan;
use Faker\Factory as FakerFactory;

class Karyawan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();

        for ($i = 1; $i <= 100; $i++) {
            ModelKaryawan::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'nomor_hp' => $faker->phoneNumber,
                'alamat' => $faker->address,
            ]);
        }
    }
}
