<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Masyarakat;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Kepala MPP',
            'email' => 'kepalampp@gmail.com',
            'password' => Hash::make('kepalampp123'),
            'role' => 'petugas',
        ]);

        // User masyarakat
        $masyarakatUser = User::create([
            'name' => 'ahmad',
            'email' => 'ahmad@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'masyarakat',
        ]);

        // Buat data Masyarakat terkait user
        Masyarakat::create([
            'user_id' => $masyarakatUser->id,
            'nik' => '1234567890',
            'pekerjaan' => 'Karyawan',
            'status_pernikahan' => 'Belum Menikah',
            'tanggal_lahir' => '1990-01-01',
            'alamat' => 'Jl. Contoh No.1',
        ]);
    }
}
