<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Masyarakat;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userMasyarakat = User::where('role', 'masyarakat')->first();

        Masyarakat::create([
            'user_id' => $userMasyarakat->id,
            'nik' => '3201010101010001',
            'pekerjaan' => 'Karyawan Swasta',
            'status_pernikahan' => 'Belum Menikah',
            'tanggal_lahir' => '2000-01-01',
            'alamat' => 'Pandeglang, Banten',
            'no_hp' => '081234567890',
            'jenis_kelamin' => 'Laki-Laki',
        ]);
    }
}
