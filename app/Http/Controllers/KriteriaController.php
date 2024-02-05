<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;

class KriteriaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            Kriteria::create([
                'nama_kriteria' => $request->nama_kriteria,
                'bobot_kriteria' => $request->bobot_kriteria
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menambah Kriteria.'
            ], 200);
        }

        $title = 'Data Kriteria';
        $data = Kriteria::all();
        return view('dashboard.kriteria', compact('title', 'data'));
    }

    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            $kriteria = Kriteria::find($id);

            if (!$kriteria) {
                return response()->json([
                    'success' => false,
                    'message' => 'Kriteria not found.'
                ], 404);
            }

            if ($request->isMethod('get')) {
                return response()->json([
                    'success' => true,
                    'data' => $kriteria,
                ], 200);
            }

            $kriteria->update($request->only([
                'nama_kriteria',
                'bobot_kriteria'
            ]));

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Memperbarui Kriteria.'
            ], 200);
        }
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $kriteria = Kriteria::find($id);

            if (!$kriteria) {
                return response()->json([
                    'success' => false,
                    'message' => 'Kriteria not found.'
                ], 404);
            }

            $kriteria->delete();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menghapus Kriteria.'
            ], 200);
        }
    }
}
