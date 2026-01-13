<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Masyarakat;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Coba login
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Arahkan sesuai role
            if ($user->role === 'admin') {
                return redirect()->route('dashboard-admin')->with('success', 'Berhasil login sebagai Admin!');
            } elseif ($user->role === 'petugas') {
                return redirect()->route('petugas.index')->with('success', 'Berhasil login sebagai petugas!');
            } elseif ($user->role === 'masyarakat') {
                return redirect()->route('masyarakat.index')->with('success', 'Berhasil login sebagai masyarakat!');
            }
        }

        // Kalau gagal login
        return back()
            ->withErrors([
                'loginError' => 'Email atau password salah!',
            ])
            ->onlyInput('email');
    }

    public function profile()
    {
        $user = Auth::user();

        return view('auth.edit', compact('user'));
    }

    public function profileupdate(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|required_with:new_password',
            'new_password' => 'nullable|min:8|confirmed',
        ]);

        try {
            $user->name = $validated['name'];
            $user->email = $validated['email'];

            if (!empty($validated['password']) && !empty($validated['new_password'])) {
                if (Hash::check($validated['password'], $user->password)) {
                    $user->password = Hash::make($validated['new_password']);
                } else {
                    return back()->with('error', 'Password saat ini salah.');
                }
            }

            $user->save();

            return redirect()->route('profile-admin')->with('success', 'Profil berhasil diperbarui.');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui profil: ' . $e->getMessage());
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
