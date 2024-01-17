<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Models\LamaKerja;

class LamaKerjaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            LamaKerja::create([
                'id_karyawan' => $request->id_karyawan,
                'lama_kerja' => $request->lama_kerja,
                'bobot' => $request->bobot,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menambah Lama Kerja.'
            ], 200);
        }

        $title = 'Data Lama Kerja';
        $data = LamaKerja::with('karyawan')->get();
        $karyawan = Karyawan::all();
        return view('dashboard.lamakerja', compact('title', 'data', 'karyawan'));
    }

    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            $lamaKeLamaKerja = LamaKerja::find($id);

            if (!$lamaKeLamaKerja) {
                return response()->json([
                    'success' => false,
                    'message' => 'Lama Kerja not found.'
                ], 404);
            }

            if ($request->isMethod('get')) {
                return response()->json([
                    'success' => true,
                    'data' => $lamaKeLamaKerja,
                ], 200);
            }

            $lamaKeLamaKerja->update($request->only(['lama_kerja', 'bobot']));

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Memperbarui Lama Kerja.'
            ], 200);
        }
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $lamaKeLamaKerja = LamaKerja::find($id);

            if (!$lamaKeLamaKerja) {
                return response()->json([
                    'success' => false,
                    'message' => 'Lama Kerja not found.'
                ], 404);
            }

            $lamaKeLamaKerja->delete();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menghapus Lama Kerja.'
            ], 200);
        }
    }
}
