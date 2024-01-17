<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Karyawan;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $user = User::count();
        $karyawan = Karyawan::count();
        return view('dashboard.index', compact('title', 'user', 'karyawan'));
    }

    public function Logout(Request $request)
    {
        Auth::logout();

        if ($request->ajax()) {
            return response()->json([
                'message' => 'Logout successful',
                'redirect' => '/'
            ], 200);
        }
    }

    public function profile(Request $request, $id)
    {
        if ($request->ajax()) {
            $user = User::find($id);

            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'User not found.'
                ], 404);
            }

            $existingUser = User::where('email', $request->email)->first();
            
            if ($existingUser) {
                return response()->json([
                    'success' => false,
                    'message' => 'Email already exists. Please use a different email.'
                ]);
            }
    
            $user->update($request->only(['name', 'email']));

            return response()->json([
                'success' => true,
                'message' => 'Berhasil Memperbarui Profile.'
            ], 200);
        }

        $data = User::find(Auth::user()->id);
        $title = 'Profile';
        return view('dashboard.profile', compact('title', 'data'));
    }

    public function changePassword(Request $request, $id)
    {
        if ($request->ajax()) {
            $user = User::find($id);
    
            if (!$user) {
                return response()->json(['error' => 'User not found'], 404);
            }
    
            $currentPassword = $request->input('old_password');
            $newPassword = $request->input('new_password');
    
            if (Hash::check($currentPassword, $user->password)) {
                $user->password = bcrypt($newPassword);
                $user->save();
    
                return response()->json([
                    'success' => true,
                    'message' => 'Password changed successfully'
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'error' => 'Current password is incorrect'
                ], 400);
            }
        }
    }
}
