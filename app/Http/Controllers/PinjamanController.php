<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Models\Pinjaman;

class PinjamanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            Pinjaman::create([
                'id_karyawan' => $request->id_karyawan,
                'pinjaman' => $request->pinjaman,
                'bobot' => $request->bobot,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menambah Pinjaman.'
            ], 200);
        }

        $title = 'Data Pinjaman';
        $data = Pinjaman::with('karyawan')->get();
        $karyawan = Karyawan::all();
        return view('dashboard.pinjaman', compact('title', 'data', 'karyawan'));
    }

    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            $lamaKePinjaman = Pinjaman::find($id);

            if (!$lamaKePinjaman) {
                return response()->json([
                    'success' => false,
                    'message' => 'Pinjaman not found.'
                ], 404);
            }

            if ($request->isMethod('get')) {
                return response()->json([
                    'success' => true,
                    'data' => $lamaKePinjaman,
                ], 200);
            }

            $lamaKePinjaman->update($request->only(['pinjaman', 'bobot']));

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Memperbarui Pinjaman.'
            ], 200);
        }
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $lamaKePinjaman = Pinjaman::find($id);

            if (!$lamaKePinjaman) {
                return response()->json([
                    'success' => false,
                    'message' => 'Pinjaman not found.'
                ], 404);
            }

            $lamaKePinjaman->delete();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menghapus Pinjaman.'
            ], 200);
        }
    }
}
