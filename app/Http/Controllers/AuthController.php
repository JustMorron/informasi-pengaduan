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
                return redirect()->route('dashboard.admin')->with('success', 'Berhasil login sebagai Admin!');
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

    //perintah logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
