<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $existingUser = User::where('email', $request->email)->first();
            
            if ($existingUser) {
                return response()->json([
                    'success' => false,
                    'message' => 'Email already exists. Please use a different email.'
                ]);
            }
    
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'role' => 'admin'
            ]);
    
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menambah User.'
            ], 200);
        }
    
        $title = 'Data Users';
        $data = User::where('id', '!=', Auth::user()->id)->get();
        return view('dashboard.users', compact('title', 'data'));
    }
    

    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            $user = User::find($id);

            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'User not found.'
                ], 404);
            }

            if ($request->isMethod('get')) {
                return response()->json([
                    'success' => true,
                    'data' => $user,
                ], 200);
            }

            $user->update($request->only(['name', 'email', 'nomor_hp', 'alamat']));

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Memperbarui User.'
            ], 200);
        }
    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $user = User::find($id);

            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'User not found.'
                ], 404);
            }

            $user->delete();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Menghapus User.'
            ], 200);
        }
    }
}
