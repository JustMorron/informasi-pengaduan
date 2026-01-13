<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Masyarakat;
use App\Models\Complaint;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalPengaduan = Complaint::count();
        $pengaduanTertunda = Complaint::where('status', 'pending')->count();
        $pengaduanSelesai = Complaint::where('status', 'selesai')->count();

        // Untuk chart (opsional)
        $pengaduanPerBulan = Complaint::selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')->whereYear('created_at', date('Y'))->groupBy('bulan')->orderBy('bulan')->get();

        return view('admin.dashboard.index', compact('totalPengaduan', 'pengaduanSelesai', 'pengaduanDiproses', 'pengaduanPerBulan'));
    }

    public function pengaduan()
    {
        $complaints = Complaint::with('masyarakat.user')->get();

        return view('admin.pengaduan.index', compact('complaints'));
    }

    public function show(string $id)
    {
        $complaints = Complaint::with('masyarakat.user')->findOrFail($id);

        return view('admin.pengaduan.show', compact('complaints'));
    }

    public function update(Request $request, $id)
    {
        $complaint = Complaint::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required',
            'tanggapan' => 'required',
        ]);

        $update = $complaint->update($validated);
        return redirect()->route('kelola-pengaduan-admin')->with('success', 'Pengaduan berhasil diupdate.');
    }

    public function destroy(string $id)
    {
        $complaints = Complaint::findOrFail($id);
        $complaints->delete();
        return redirect()->route('kelola-pengaduan-admin')->with('success', 'Pengaduan berhasil dihapus.');
    }

    public function masyarakat()
    {
        // return view('admin.masyarakat.index');
        $masyarakats = Masyarakat::with('user')->get();

        return view('admin.masyarakat.index', compact('masyarakats'));
    }

    public function createmasyarakat()
    {
        return view('admin.masyarakat.create');
    }

    public function storemasyarakat(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|',
                'password' => 'required|min:8',
                'nik' => 'required|string|max:16|',
                'pekerjaan' => 'required|string',
                'status_pernikahan' => 'required|string',
                'tanggal_lahir' => 'required|date',
                'alamat' => 'required|string',
                'no_hp' => 'required|string',
                'jenis_kelamin' => 'required|string',
            ]);

            // Create user
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role' => 'masyarakat',
            ]);

            // Create masyarakat
            Masyarakat::create([
                'user_id' => $user->id,
                'nik' => $validated['nik'],
                'pekerjaan' => $validated['pekerjaan'],
                'status_pernikahan' => $validated['status_pernikahan'],
                'tanggal_lahir' => $validated['tanggal_lahir'],
                'alamat' => $validated['alamat'],
                'no_hp' => $validated['no_hp'],
                'jenis_kelamin' => $validated['jenis_kelamin'],
            ]);

            return redirect()->route('kelola-masyarakat-admin')->with('success', 'Data Masyarakat berhasil ditambahkan.');
        } catch (\Exception $e) {
            // redirect kalau gagal
            return redirect()->back()->with('error', 'Nik atau Email sudah digunakan');
        }
    }

    public function showmasyarakat(string $id)
    {
        $masyarakats = Masyarakat::with('user')->findOrFail($id);

        return view('admin.masyarakat.show', compact('masyarakats'));
    }

    public function updatemasyarakat(Request $request, $id)
    {
        $masyarakat = Masyarakat::findOrFail($id);
        try {
            $validated = $request->validate([
                'name' => 'required|',
                'nik' => 'required|string|max:16',
                'pekerjaan' => 'required|string',
                'status_pernikahan' => 'required|string',
                'tanggal_lahir' => 'required|date',
                'alamat' => 'required|',
                'no_hp' => 'required|',
                'jenis_kelamin' => 'required|',
            ]);

            // Update table users melalui relasi
            if ($masyarakat->user) {
                $masyarakat->user->update([
                    'name' => $validated['name'],
                ]);
            }

            // Update table masyarakat
            $masyarakat->update([
                'nik' => $validated['nik'],
                'pekerjaan' => $validated['pekerjaan'],
                'status_pernikahan' => $validated['status_pernikahan'],
                'tanggal_lahir' => $validated['tanggal_lahir'],
                'alamat' => $validated['alamat'],
                'no_hp' => $validated['no_hp'],
                'jenis_kelamin' => $validated['jenis_kelamin'],
            ]);

            return redirect()->route('kelola-masyarakat-admin')->with('success', 'Data Masyarakat berhasil diupdate.');
        } catch (\Exception $e) {
            // redirect kalau gagal
            return redirect()->back()->with('error', 'Nik atau Email sudah digunakan');
        }
    }

    public function destroymasyarakat(string $id)
    {
        $masyarakats = Masyarakat::findOrFail($id);
        $masyarakats->delete();
        return redirect()->route('kelola-masyarakat-admin')->with('success', 'Data Masyarakat berhasil dihapus.');
    }
}
