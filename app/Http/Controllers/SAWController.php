<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KriteriaKaryawan;
use App\Models\Normalisasi;
use App\Models\Karyawan;
use App\Models\Kriteria;

class SAWController extends Controller
{
    public function index()
    {
        $karyawanData = Karyawan::all();
        $kritirea = Kriteria::all();

        $totalKriteria = Kriteria::count();
        $totalBobotKriteria = Kriteria::sum('bobot_kriteria');
        if ($totalKriteria === 0) {
            return redirect('/dashboard')->with('error', 'Tidak ada kriteria yang tersedia.');
        }

        $bobotKriteria = $totalBobotKriteria / $totalKriteria; 
        $sawValues = [];

        foreach ($karyawanData as $karyawan) {
            $kriteriaKaryawanData = KriteriaKaryawan::where('id_karyawan', $karyawan->id)->get();

            $commonIds = $kriteriaKaryawanData->pluck('id_kriteria')->toArray();

            if (empty($commonIds)) {
                continue;
            }

            $saw = 0;

            foreach ($kriteriaKaryawanData as $kriteriaKaryawan) {
                $kriteriaNormalisasi = Normalisasi::where('id_kriteria', $kriteriaKaryawan->id_kriteria)
                    ->where('nilai', $kriteriaKaryawan->nilai)
                    ->first();

                $findKriteriaMax = intval(Normalisasi::where('id_kriteria', $kriteriaKaryawan->id_kriteria)->max('bobot'));
                
                if ($kriteriaNormalisasi) {
                    $bobotNormalisasi = intval($kriteriaNormalisasi->bobot);
                } else {
                    $bobotNormalisasi = 0;
                }

                if ($bobotNormalisasi != 0) {
                    $normalisation = $bobotNormalisasi / $findKriteriaMax;
                } else {
                    $normalisation = 0;
                }
                
                $saw += $normalisation * $bobotKriteria;
                
            }

            $sawValues[] = [
                'karyawan_name' => $karyawan->name,
                'saw_value' => $saw,
                'loan_eligibility' => $this->getLoanEligibility($saw),
            ];
        }

        $title = 'Data SAW';
        return view('dashboard.saw', compact('title', 'sawValues'));
    }

    private function getLoanEligibility($saw)
    {
        return $saw !== null && $saw >= 50 ? 'Layak' : 'Tidak Layak';
    }
}
