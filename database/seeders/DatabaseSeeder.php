<?php

namespace Database\Seeders;

use App\Models\Masyarakat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([ComplaintSeeder::class]);

        // Akun utama
        // $this->call(UserSeeder::class);

        // 28 masyarakat
        // Masyarakat::factory()
        //     ->count(28)
        //     ->create()
        //     ->each(function ($masyarakat) {
        //         // Tiap masyarakat punya 1–5 complaint
        //         $masyarakat->complaints()->createMany(\App\Models\Complaint::factory()->count(rand(1, 5))->make()->toArray());
        //     });
    }
}
