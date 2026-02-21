<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Masyarakat;
use App\Models\Complaint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ComplaintSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        $data = [
            ['2025-12-22', 'Dinda', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-22', 'Asiyah', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-07', 'Ade', 'BAPENDA', 'Pendaftaran Pajak', 'Antrian lama karena petugas pilih nomor manual'],
            ['2025-11-07', 'Agus Ruyani', 'Dinas Sosial', 'Konsultasi Sosial', 'Ruangan tidak dingin dan tidak wangi'],
            ['2025-12-22', 'Wawat', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-22', 'Hanan', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-10-01', 'Aimuhtadi', 'BPJS Kesehatan', 'Pendaftaran Peserta', 'Petugas BPJS judes'],
            ['2025-12-22', 'Lilis', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-19', 'Aminah', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-19', 'Lirgi', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-19', 'Erna', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-19', 'Nurul', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-18', 'M Miftahul', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-17', 'Marsanah', 'DISDUKCAPIL', 'Akta Kelahiran', 'beuh'],
            ['2025-12-16', 'St Sifaira', 'DISNAKER', 'Pelayanan AK-I', 'baik'],
            ['2025-12-16', 'Inka', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-16', 'Eha', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-05-05', 'PESA', 'DPMPTSP', 'NIB', 'baik'],
            ['2025-12-11', 'Ica', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-10', 'Zaki', 'DISDUKCAPIL', 'Cetak KTP', 'Baik'],
            ['2025-12-10', 'Rifki', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-10', 'Suryaman', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-10', 'Esa', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-09', 'Fajar', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-09', 'Fauzi', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-09', 'Reva', 'Perpustakaan', 'Baca Buku Digital', 'gk ada'],
            ['2025-12-09', 'Rangga', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-09', 'Elmatian', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-09', 'Rizal', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-09', 'Fenny', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-08', 'Maulana', 'DISDUKCAPIL', 'Cetak KTP', 'mantap'],
            ['2025-12-08', 'Rizki', 'DISDUKCAPIL', 'Rekam KTP', 'mantap'],
            ['2025-12-08', 'Hj Dedeh', 'DISDUKCAPIL', 'Kartu Keluarga', 'Sangat memuaskan'],
            ['2025-12-08', 'Novitasari', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-08', 'St Suirot', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-11', 'Gita', 'DISDUKCAPIL', 'KK', 'Toilet berkerak'],
            ['2025-12-08', 'Ardi', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-08', 'Oktalia', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-08', 'Saepul', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-08', 'Mia', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-11', 'Hayati', 'DISDUKCAPIL', 'Akta Kelahiran', 'Dinding lumut'],
            ['2025-12-05', 'Siti Maemunah', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-05', 'Desi', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-05', 'Nia', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-05', 'Dede', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-05', 'Erin', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-04', 'Rini', 'PT POS', 'Materai', 'Sangat bijak'],
            ['2025-12-04', 'Widya', 'Bank BRI', 'Layanan Bank', 'sangat baik'],
            ['2025-12-03', 'Siska', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-03', 'Titin', 'DISDUKCAPIL', 'KK', 'Cetakan burem'],
            ['2025-12-03', 'Dina', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-03', 'Beri', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-12-02', 'Dian', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-28', 'Nurohman', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-28', 'M Khalif', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-27', 'Aninda', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-27', 'Azis', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-26', 'Emah', 'Dinas Sosial', 'Konsultasi Sosial', 'Sangat memuaskan'],
            ['2025-11-26', 'Wulan', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-26', 'Riska', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-11', 'Maruf', 'Samsat', 'Pajak Kendaraan', 'Antrian lama manual'],
            ['2025-11-26', 'Ihsan', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-26', 'Kiki', 'BPJS Kesehatan', 'Pendaftaran Peserta', 'pelayanan sangat baik'],
            ['2025-11-25', 'Farhan', 'DISDUKCAPIL', 'Cetak KTP', 'tingkatkan lagi'],
            ['2025-11-25', 'Icih', 'BPJS Kesehatan', 'Pendaftaran Peserta', 'Sangat bagus'],
            ['2025-11-25', 'Empik Tauik', 'DISDUKCAPIL', 'KK', 'mantap'],
            ['2025-11-25', 'Rian', 'Bank BJB', 'Pembayaran Pajak', 'Tingkatkan'],
            ['2025-11-25', 'Fitri', 'DISDUKCAPIL', 'KK', 'baik ramah'],
            ['2025-11-24', 'Ridwah', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-24', 'Iim', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-24', 'Nada', 'DISDUKCAPIL', 'KK', 'lebih baik lagi'],
            ['2025-10-13', 'UUM', 'PT TASPEN', 'Tabungan Hari Tua', 'Tingkatkan pelayanan'],
            ['2025-11-24', 'Mira', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-24', 'Neng Sri', 'DISDUKCAPIL', 'Cetak KTP', 'sangat baik'],
            ['2025-11-24', 'Rena', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-24', 'Alif', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-24', 'Novi', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-24', 'Syifa', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-24', 'Aep', 'Dinas Sosial', 'SKM', 'sangat baik'],
            ['2025-11-24', 'Sulis', 'Dinas Sosial', 'SKM', 'pegawai pulang cepat'],
            ['2025-11-21', 'Nisa', 'DISDUKCAPIL', 'Cetak KTP', 'sangat memuaskan'],
            ['2025-11-20', 'Fera', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-19', 'Rama', 'DISDUKCAPIL', 'Cetak KTP', 'memuaskan'],
            ['2025-11-19', 'Wahyu', 'BPJS', 'Perubahan Identitas', 'sesuai sop'],
            ['2025-11-19', 'Ami', 'DISDUKCAPIL', 'Akta Kelahiran', 'okee'],
            ['2025-11-18', 'Hidayat', 'PT POS', 'Materai', 'Sangat baik'],
            ['2025-11-18', 'Yati', 'DISDUKCAPIL', 'KK', 'Sangat baik'],
            ['2025-11-18', 'Meli', 'DISDUKCAPIL', 'Cetak KTP', 'baik'],
            ['2025-11-18', 'Nita', 'DISDUKCAPIL', 'Cetak KTP', 'baik'],
            ['2025-11-18', 'Yoga', 'DISDUKCAPIL', 'Cetak KTP', 'baik'],
            ['2025-11-18', 'Andre', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-18', 'M Topal', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-18', 'Meyla', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-18', 'Hesti', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-18', 'Tarmidi', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
            ['2025-11-18', 'Ani', 'Dinas Sosial', 'SKM', 'sangat baik'],
            ['2025-11-18', 'M Imanudin', 'DISDUKCAPIL', 'Cetak KTP', 'sangat baik'],
            ['2025-11-18', 'Nana', 'Dinas Sosial', 'Konsultasi', 'sangat baik'],
            ['2025-11-18', 'Dedi', 'DISDUKCAPIL', 'Cetak KTP', 'selesaikan satu dulu'],
            ['2025-12-22', 'Dinda', 'DISNAKER', 'Pelayanan AK-I', 'BAIK'],
        ];

        foreach ($data as $row) {
            [$tanggal, $nama, $instansi, $layanan, $saran] = $row;

            $email = Str::slug($nama) . rand(100, 9999) . '@mail.com';

            $user = User::create([
                'name' => $nama,
                'email' => $email,
                'password' => Hash::make('password123'),
                'role' => 'masyarakat',
            ]);

            $masyarakat = Masyarakat::create([
                'user_id' => $user->id,
                'nik' => rand(3201000000000000, 3299999999999999),
                'pekerjaan' => $faker->jobTitle,
                'status_pernikahan' => $faker->randomElement(['Menikah', 'Belum Menikah']),
                'tanggal_lahir' => $faker->date(),
                'alamat' => $faker->address,
                'no_hp' => $faker->phoneNumber,
                'jenis_kelamin' => $faker->randomElement(['Laki-Laki', 'Perempuan']),
            ]);

            $lower = strtolower($saran);
            $jenis = 'informasi pelayanan';

            if (str_contains($lower, 'antrian') || str_contains($lower, 'lama')) {
                $jenis = 'keterlambatan pelayanan';
            }
            if (str_contains($lower, 'petugas') || str_contains($lower, 'judes')) {
                $jenis = 'sikap petugas';
            }
            if (str_contains($lower, 'toilet') || str_contains($lower, 'ruangan') || str_contains($lower, 'lumut')) {
                $jenis = 'sarana prasarana';
            }

            Complaint::create([
                'masyarakat_id' => $masyarakat->id,
                'judul' => $layanan,
                'isi_complaint' => $saran,
                'jenis_pengaduan' => $jenis,
                'instansi' => $instansi,
                'status' => 'pending',
                'created_at' => $tanggal,
            ]);
        }
    }
}
