<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Masyarakat;
use App\Models\Complaint;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalPengaduan = Complaint::count();
        $pengaduanTertunda = Complaint::where('status', 'pending')->count();
        $pengaduanSelesai = Complaint::where('status', 'selesai')->count();

        // Untuk chart (opsional)
        // $pengaduanPerBulan = Complaint::selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')->whereYear('created_at', date('Y'))->groupBy('bulan')->orderBy('bulan')->get();

        return view('petugas.dashboard.index', compact('totalPengaduan', 'pengaduanTertunda', 'pengaduanSelesai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function indexlaporan()
    {
        // $complaints = Complaint::with('masyarakat.user')->get();
        $complaints = Complaint::with('masyarakat.user')->orderBy('id', 'desc')->get();

        return view('petugas.pengaduan.index', compact('complaints'));
    }

    public function show(string $id)
    {
        $complaints = Complaint::with('masyarakat.user')->findOrFail($id);

        return view('petugas.pengaduan.show', compact('complaints'));
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
