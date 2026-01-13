<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Complaint;
use App\Models\Masyarakat;

class ComplaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $masyarakat = Masyarakat::first();

        Complaint::create([
            'masyarakat_id' => $masyarakat->id,
            'judul' => 'Pelayanan Terlambat',
            'isi_complaint' => 'Pelayanan di loket sangat lama dan tidak sesuai jadwal.',
            'jenis_pengaduan' => 'keterlambatan pelayanan',
            'gambar' => 'contoh.jpg',
            'status' => 'pending',
            'tanggapan' => '',
        ]);

        Complaint::create([
            'masyarakat_id' => $masyarakat->id,
            'judul' => 'Sikap Petugas Kurang Ramah',
            'isi_complaint' => 'Petugas kurang sopan saat melayani masyarakat.',
            'jenis_pengaduan' => 'sikap petugas',
            'gambar' => null,
            'status' => 'diproses',
            'tanggapan' => '',
        ]);
    }
}
