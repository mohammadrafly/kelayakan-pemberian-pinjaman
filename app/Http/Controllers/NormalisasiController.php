<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Models\Normalisasi;

class NormalisasiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            Normalisasi::create([
                'id_kriteria' => $request->id_kriteria,
                'nilai' => $request->nilai,
                'bobot' => $request->bobot
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menambah Normalisasi.'
            ], 200);
        }

        $title = 'Data Normalisasi';
        $data = Normalisasi::with('kriteria')->get();
        $kriteria = Kriteria::all();
        return view('dashboard.normalisasi', compact('title', 'data', 'kriteria'));
    }

    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            $normalisasi = Normalisasi::find($id);

            if (!$normalisasi) {
                return response()->json([
                    'success' => false,
                    'message' => 'Normalisasi not found.'
                ], 404);
            }

            if ($request->isMethod('get')) {
                return response()->json([
                    'success' => true,
                    'data' => $normalisasi,
                ], 200);
            }

            $normalisasi->update($request->only(['id_kriteria', 'nilai', 'bobot']));

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Memperbarui Normalisasi.'
            ], 200);
        }
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $normalisasi = Normalisasi::find($id);

            if (!$normalisasi) {
                return response()->json([
                    'success' => false,
                    'message' => 'Normalisasi not found.'
                ], 404);
            }

            $normalisasi->delete();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menghapus Normalisasi.'
            ], 200);
        }
    }
}
