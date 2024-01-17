<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Models\KriteriaKaryawan;

class KriteriaKaryawanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $existingCriterion = KriteriaKaryawan::where('id_karyawan', $request->id_karyawan)
                ->where('id_kriteria', $request->id_kriteria)
                ->first();

            if ($existingCriterion) {
                return response()->json([
                    'success' => false,
                    'message' => 'User already has this criterion.'
                ]);
            }

            KriteriaKaryawan::create([
                'id_karyawan' => $request->id_karyawan,
                'id_kriteria' => $request->id_kriteria,
                'nilai' => $request->nilai,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menambah Kriteria Karyawan.'
            ], 200);
        }

        $title = 'Data Kriteria Karyawan';
        $data = KriteriaKaryawan::with('kriteria', 'karyawan')->get();
        $karyawan = Karyawan::all();
        $kriteria = Kriteria::all();
        return view('dashboard.kriteriakaryawan', compact('title', 'data', 'karyawan', 'kriteria'));
    }

    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            $kriteriaKaryawan = KriteriaKaryawan::find($id);

            if (!$kriteriaKaryawan) {
                return response()->json([
                    'success' => false,
                    'message' => 'Kriteria Karyawan not found.'
                ], 404);
            }

            if ($request->isMethod('get')) {
                return response()->json([
                    'success' => true,
                    'data' => $kriteriaKaryawan,
                ], 200);
            }

            $kriteriaKaryawan->update($request->only(['id_karyawan', 'id_kriteria', 'nilai']));

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Memperbarui Kriteria Karyawan.'
            ], 200);
        }
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $kriteriaKaryawan = KriteriaKaryawan::find($id);

            if (!$kriteriaKaryawan) {
                return response()->json([
                    'success' => false,
                    'message' => 'Kriteria not found.'
                ], 404);
            }

            $kriteriaKaryawan->delete();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menghapus Kriteria Karyawan.'
            ], 200);
        }
    }
}
