<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Masyarakat;
use App\Models\Complaint;

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
                return redirect()->route('dashboard-petugas')->with('success', 'Berhasil login sebagai petugas!');
            } elseif ($user->role === 'masyarakat') {
                return redirect()->route('dashboard-masyarakat')->with('success', 'Berhasil login sebagai masyarakat!');
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

        return view('admin.profile.index', compact('user'));
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
    public function profilepetugas()
    {
        $user = Auth::user();

        return view('petugas.profile.index', compact('user'));
    }

    public function profileupdatepetugas(Request $request)
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

            return redirect()->route('profile-petugas')->with('success', 'Profil berhasil diperbarui.');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui profil: ' . $e->getMessage());
        }
    }

    public function storeprofile(Request $request)
    {
        $user = Auth::user();
        $masyarakat = $user->masyarakat;

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|required_with:password_baru',
            'password_baru' => 'nullable|min:8|confirmed',
            'nik' => 'required|string|unique:masyarakats,nik,' . $masyarakat->id,
            'pekerjaan' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:500',
            'tgl_lahir' => 'nullable|date',
            'status_pernikahan' => 'nullable|string|max:100',
        ]);

        try {
            $user->name = $validated['name'];
            $user->email = $validated['email'];

            if (!empty($validated['password']) && !empty($validated['password_baru'])) {
                if (Hash::check($validated['password'], $user->password)) {
                    $user->password = Hash::make($validated['password_baru']);
                } else {
                    return back()->with('error', 'Password saat ini salah.');
                }
            }

            $user->save();

            return redirect()->route('profile-masyarakat')->with('success', 'Profil berhasil diperbarui.');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui profil: ' . $e->getMessage());
        }
    }

    public function indexprofile()
    {
        $user = Auth::user();
        $masyarakats = Masyarakat::where('user_id', $user->id)->with('user')->first();

        $complaints = Complaint::where('masyarakat_id', $masyarakats->id)->get();

        return view('masyarakat.profile.index', compact('masyarakats', 'user', 'complaints'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
