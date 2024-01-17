<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\RiwayatPinjaman;

class RiwayatPinjamanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            RiwayatPinjaman::create([
                'id_karyawan' => $request->id_karyawan,
                'riwayat_pinjaman_sebelumnya' => $request->riwayat_pinjaman_sebelumnya,
                'bobot' => $request->bobot,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menambah Riwayat Pinjaman.'
            ], 200);
        }

        $title = 'Data Riwayat Pinjaman';
        $data = RiwayatPinjaman::with('karyawan')->get();
        $karyawan = Karyawan::all();
        return view('dashboard.riwayatpinjaman', compact('title', 'data', 'karyawan'));
    }

    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            $lamaKeRiwayatPinjaman = RiwayatPinjaman::find($id);

            if (!$lamaKeRiwayatPinjaman) {
                return response()->json([
                    'success' => false,
                    'message' => 'Riwayat Pinjaman not found.'
                ], 404);
            }

            if ($request->isMethod('get')) {
                return response()->json([
                    'success' => true,
                    'data' => $lamaKeRiwayatPinjaman,
                ], 200);
            }

            $lamaKeRiwayatPinjaman->update($request->only(['riwayat_pinjaman_sebelumnya', 'bobot']));

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Memperbarui Riwayat Pinjaman.'
            ], 200);
        }
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $lamaKeRiwayatPinjaman = RiwayatPinjaman::find($id);

            if (!$lamaKeRiwayatPinjaman) {
                return response()->json([
                    'success' => false,
                    'message' => 'Riwayat Pinjaman not found.'
                ], 404);
            }

            $lamaKeRiwayatPinjaman->delete();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menghapus Riwayat Pinjaman.'
            ], 200);
        }
    }
}
