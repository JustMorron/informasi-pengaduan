<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Masyarakat;
use App\Models\Complaint;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $masyarakats = Masyarakat::where('user_id', $user->id)->with('user')->first();

        $complaints = Complaint::where('masyarakat_id', $masyarakats->id)->latest()->take(5)->get();

        return view('masyarakat.dashboard.index', compact('masyarakats', 'user', 'complaints'));
    }

    public function complainIndex()
    {
        $user = Auth::user();

        $masyarakats = Masyarakat::where('user_id', $user->id)->with('user')->first();

        $complaints = Complaint::where('masyarakat_id', $masyarakats->id)->get();
        return view('masyarakat.pengaduan.index', compact('masyarakats', 'user', 'complaints'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();

        $masyarakats = Masyarakat::where('user_id', $user->id)->with('user')->first();

        $complaints = Complaint::where('masyarakat_id', $masyarakats->id)->get();

        return view('masyarakat.pengaduan.create', compact('masyarakats', 'user', 'complaints'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|',
            'isi_complaint' => 'required|',
            'jenis_pengaduan' => 'required',
            'gambar' => 'nullable',
        ]);

        $imagePath = null;
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('complaints', 'public');
        }

        Complaint::create([
            'masyarakat_id' => auth()->user()->masyarakat->id,
            'judul' => $request->judul,
            'isi_complaint' => $request->isi_complaint,
            'jenis_pengaduan' => $request->jenis_pengaduan,
            'gambar' => $imagePath,
            'status' => 'pending',
        ]);

        return redirect()->route('dashboard-masyarakat')->with('success', 'Pengaduan berhasil dikirim.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
