<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\TotalTanggungan;

class TotalTanggunganController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            TotalTanggungan::create([
                'id_karyawan' => $request->id_karyawan,
                'total_tanggungan' => $request->total_tanggungan,
                'bobot' => $request->bobot,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menambah Total Tanggungan.'
            ], 200);
        }

        $title = 'Data Total Tanggungan';
        $data = TotalTanggungan::with('karyawan')->get();
        $karyawan = Karyawan::all();
        return view('dashboard.totaltanggungan', compact('title', 'data', 'karyawan'));
    }

    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            $lamaKeTotalTanggungan = TotalTanggungan::find($id);

            if (!$lamaKeTotalTanggungan) {
                return response()->json([
                    'success' => false,
                    'message' => 'Total Tanggungan not found.'
                ], 404);
            }

            if ($request->isMethod('get')) {
                return response()->json([
                    'success' => true,
                    'data' => $lamaKeTotalTanggungan,
                ], 200);
            }

            $lamaKeTotalTanggungan->update($request->only(['total_tanggungan', 'bobot']));

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Memperbarui Total Tanggungan.'
            ], 200);
        }
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $lamaKeTotalTanggungan = TotalTanggungan::find($id);

            if (!$lamaKeTotalTanggungan) {
                return response()->json([
                    'success' => false,
                    'message' => 'Total Tanggungan not found.'
                ], 404);
            }

            $lamaKeTotalTanggungan->delete();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menghapus Total Tanggungan.'
            ], 200);
        }
    }
}
