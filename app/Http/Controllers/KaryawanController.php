<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            Karyawan::create([
                'name' => $request->name,
                'email' => $request->email,
                'nomor_hp' => $request->nomor_hp,
                'alamat' => $request->alamat
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menambah Karyawan.'
            ], 200);
        }

        $title = 'Data Karyawan';
        $data = Karyawan::all();
        return view('dashboard.karyawan', compact('title', 'data'));
    }

    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            $karyawan = Karyawan::find($id);

            if (!$karyawan) {
                return response()->json([
                    'success' => false,
                    'message' => 'Karyawan not found.'
                ], 404);
            }

            if ($request->isMethod('get')) {
                return response()->json([
                    'success' => true,
                    'data' => $karyawan,
                ], 200);
            }

            $karyawan->update($request->only(['name', 'email', 'nomor_hp', 'alamat']));

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Memperbarui Karyawan.'
            ], 200);
        }
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $karyawan = Karyawan::find($id);

            if (!$karyawan) {
                return response()->json([
                    'success' => false,
                    'message' => 'Karyawan not found.'
                ], 404);
            }

            $karyawan->delete();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menghapus Karyawan.'
            ], 200);
        }
    }
}
