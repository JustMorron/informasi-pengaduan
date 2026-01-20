<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Complaint;
use App\Models\Masyarakat;
use App\Models\User;

class ComplaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $masyarakat = Masyarakat::first();

        // Complaint::create([
        //     'masyarakat_id' => $masyarakat->id,
        //     'judul' => 'Pelayanan Terlambat',
        //     'isi_complaint' => 'Pelayanan di loket sangat lama dan tidak sesuai jadwal.',
        //     'jenis_pengaduan' => 'keterlambatan pelayanan',
        //     'gambar' => 'contoh.jpg',
        //     'status' => 'pending',
        //     'tanggapan' => '',
        // ]);

        // Complaint::create([
        //     'masyarakat_id' => $masyarakat->id,
        //     'judul' => 'Sikap Petugas Kurang Ramah',
        //     'isi_complaint' => 'Petugas kurang sopan saat melayani masyarakat.',
        //     'jenis_pengaduan' => 'sikap petugas',
        //     'gambar' => null,
        //     'status' => 'diproses',
        //     'tanggapan' => '',
        // ]);

        // 30 Data User Masyarakat (1 user = 1 pengaduan)
        $users = [
            [
                'user' => [
                    'name' => 'Ahmad Santoso',
                    'email' => 'ahmad.santoso@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3601012345678001',
                    'pekerjaan' => 'Karyawan Swasta',
                    'status_pernikahan' => 'Belum Menikah',
                    'tanggal_lahir' => '1994-05-12',
                    'alamat' => 'Jl. Raya Labuan KM 3, Pandeglang, Banten',
                    'no_hp' => '081234560001',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Sistem Antrian Tidak Jelas',
                    'isi_complaint' => 'Banyak warga menyerobot antrian karena tidak ada nomor antrian.',
                    'jenis_pengaduan' => 'sikap petugas',
                    'instansi' => 'DPMPTSP',
                    'gambar' => '',
                    'status' => 'diproses',
                    'tanggapan' => null,
                ],
            ],
            [
                'user' => [
                    'name' => 'Sari Dewi',
                    'email' => 'sari.dewi@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3601012345678002',
                    'pekerjaan' => 'Pedagang',
                    'status_pernikahan' => 'Menikah',
                    'tanggal_lahir' => '1987-07-22',
                    'alamat' => 'Jl. Pandeglang Raya No. 12, Pandeglang, Banten',
                    'no_hp' => '081234560002',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Petugas Kurang Ramah',
                    'isi_complaint' => 'Petugas terlihat kesal saat menanggapi warga yang bertanya.',
                    'jenis_pengaduan' => 'sikap petugas',
                    'instansi' => 'Disdukcapil',
                    'gambar' => '',
                    'status' => 'pending',
                    'tanggapan' => null,
                ],
            ],
            [
                'user' => [
                    'name' => 'Budi Setiawan',
                    'email' => 'budi.setiawan@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3601012345678003',
                    'pekerjaan' => 'Guru',
                    'status_pernikahan' => 'Belum Menikah',
                    'tanggal_lahir' => '1992-11-10',
                    'alamat' => 'Jl. Pemuda No. 5, Pandeglang, Banten',
                    'no_hp' => '081234560003',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Pengurusan KTP Terlalu Lama',
                    'isi_complaint' => 'Proses pembuatan KTP memakan waktu lebih dari 1 bulan.',
                    'jenis_pengaduan' => 'keterlambatan pelayanan',
                    'instansi' => 'Disdukcapil',
                    'gambar' => '',
                    'status' => 'pending',
                    'tanggapan' => null,
                ],
            ],
            [
                'user' => [
                    'name' => 'Rina Melati',
                    'email' => 'rina.melati@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3601012345678004',
                    'pekerjaan' => 'Perawat',
                    'status_pernikahan' => 'Menikah',
                    'tanggal_lahir' => '1990-05-18',
                    'alamat' => 'Jl. Diponegoro No. 12, Pandeglang, Banten',
                    'no_hp' => '081234560004',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Pelayanan BPJS Kesehatan Lambat',
                    'isi_complaint' => 'Proses pendaftaran BPJS Kesehatan memakan waktu terlalu lama.',
                    'jenis_pengaduan' => 'keterlambatan pelayanan',
                    'instansi' => 'BPJS Kesehatan',
                    'gambar' => '',
                    'status' => 'diproses',
                    'tanggapan' => null,
                ],
            ],
            [
                'user' => [
                    'name' => 'Joko Prasetyo',
                    'email' => 'joko.prasetyo@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3601012345678005',
                    'pekerjaan' => 'Supir',
                    'status_pernikahan' => 'Menikah',
                    'tanggal_lahir' => '1983-09-30',
                    'alamat' => 'Jl. Gatot Subroto No. 15, Pandeglang, Banten',
                    'no_hp' => '081234560005',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Petugas Disdukcapil Tidak Memberikan Informasi Lengkap',
                    'isi_complaint' => 'Petugas tidak menjelaskan prosedur pengurusan KK dengan jelas.',
                    'jenis_pengaduan' => 'sikap petugas',
                    'instansi' => 'Disdukcapil',
                    'gambar' => '',
                    'status' => 'pending',
                    'tanggapan' => null,
                ],
            ],
            [
                'user' => [
                    'name' => 'Dewi Sartika',
                    'email' => 'dewi.sartika@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3601012345678006',
                    'pekerjaan' => 'Ibu Rumah Tangga',
                    'status_pernikahan' => 'Menikah',
                    'tanggal_lahir' => '1987-04-12',
                    'alamat' => 'Jl. Pahlawan No. 8, Pandeglang, Banten',
                    'no_hp' => '081234560006',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Mesin Fotocopy Kantor Kelurahan Rusak',
                    'isi_complaint' => 'Mesin fotocopy tidak berfungsi sehingga warga harus mencari tempat lain.',
                    'jenis_pengaduan' => 'sarana prasarana',
                    'instansi' => 'Disdukcapil',
                    'gambar' => '',
                    'status' => 'diproses',
                    'tanggapan' => null,
                ],
            ],
            [
                'user' => [
                    'name' => 'Agus Wijaya',
                    'email' => 'agus.wijaya@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3601012345678007',
                    'pekerjaan' => 'Pedagang',
                    'status_pernikahan' => 'Menikah',
                    'tanggal_lahir' => '1979-12-05',
                    'alamat' => 'Jl. Hayam Wuruk No. 21, Pandeglang, Banten',
                    'no_hp' => '081234560007',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Pungutan Tidak Resmi Saat Mengurus IMB',
                    'isi_complaint' => 'Beberapa warga dimintai biaya tambahan yang tidak resmi.',
                    'jenis_pengaduan' => 'pungutan liar',
                    'instansi' => 'DPMPTSP',
                    'gambar' => '',
                    'status' => 'pending',
                    'tanggapan' => null,
                ],
            ],
            [
                'user' => [
                    'name' => 'Maya Indah',
                    'email' => 'maya.indah@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3601012345678008',
                    'pekerjaan' => 'Akuntan',
                    'status_pernikahan' => 'Belum Menikah',
                    'tanggal_lahir' => '1993-08-19',
                    'alamat' => 'Jl. Thamrin No. 7, Pandeglang, Banten',
                    'no_hp' => '081234560008',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Alat Tulis Kantor Kurang Lengkap',
                    'isi_complaint' => 'Beberapa dokumen tidak bisa diproses karena kekurangan alat tulis.',
                    'jenis_pengaduan' => 'sarana prasarana',
                    'instansi' => 'Disdukcapil',
                    'gambar' => '',
                    'status' => 'diproses',
                    'tanggapan' => null,
                ],
            ],
            [
                'user' => [
                    'name' => 'Hendra Kurniawan',
                    'email' => 'hendra.kurniawan@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3601012345678009',
                    'pekerjaan' => 'Teknisi',
                    'status_pernikahan' => 'Menikah',
                    'tanggal_lahir' => '1986-06-25',
                    'alamat' => 'Jl. Surya Sumantri No. 10, Pandeglang, Banten',
                    'no_hp' => '081234560009',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Sistem Online Sering Error',
                    'isi_complaint' => 'Website pendaftaran sering down saat digunakan.',
                    'jenis_pengaduan' => 'sistem pelayanan',
                    'instansi' => 'BPJS Kesehatan',
                    'gambar' => '',
                    'status' => 'pending',
                    'tanggapan' => null,
                ],
            ],
            [
                'user' => [
                    'name' => 'Lina Marlina',
                    'email' => 'lina.marlina@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3601012345678010',
                    'pekerjaan' => 'Bidan',
                    'status_pernikahan' => 'Menikah',
                    'tanggal_lahir' => '1984-02-14',
                    'alamat' => 'Jl. Ahmad Yani No. 6, Pandeglang, Banten',
                    'no_hp' => '081234560010',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Petugas Tidak Memberikan Informasi Lengkap',
                    'isi_complaint' => 'Saat menanyakan syarat pembuatan KK, petugas hanya memberi informasi sebagian.',
                    'jenis_pengaduan' => 'informasi pelayanan',
                    'instansi' => 'Disdukcapil',
                    'gambar' => '',
                    'status' => 'pending',
                    'tanggapan' => null,
                ],
            ],
            [
                'user' => [
                    'name' => 'Fajar Nugroho',
                    'email' => 'fajar.nugroho@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3601012345678011',
                    'pekerjaan' => 'Programmer',
                    'status_pernikahan' => 'Belum Menikah',
                    'tanggal_lahir' => '1995-10-08',
                    'alamat' => 'Jl. Soekarno Hatta No. 3, Pandeglang, Banten',
                    'no_hp' => '081234560011',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Toilet Kantor Kotor',
                    'isi_complaint' => 'Toilet umum tidak terawat dan kotor.',
                    'jenis_pengaduan' => 'keamanan kenyamanan',
                    'instansi' => 'Disdukcapil',
                    'gambar' => '',
                    'status' => 'diproses',
                    'tanggapan' => null,
                ],
            ],
            [
                'user' => [
                    'name' => 'Nurhayati',
                    'email' => 'nurhayati@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3601012345678012',
                    'pekerjaan' => 'Pegawai Bank',
                    'status_pernikahan' => 'Menikah',
                    'tanggal_lahir' => '1989-11-30',
                    'alamat' => 'Jl. Gajah Mada No. 8, Pandeglang, Banten',
                    'no_hp' => '081234560012',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Petugas Pilih Kasih',
                    'isi_complaint' => 'Petugas lebih melayani orang tertentu.',
                    'jenis_pengaduan' => 'sikap petugas',
                    'instansi' => 'Disdukcapil',
                    'gambar' => '',
                    'status' => 'pending',
                    'tanggapan' => null,
                ],
            ],
        ];

        // Untuk digunakan dalam seeder Laravel:

        // public function run()
        // {
        foreach ($users as $userData) {
            // Buat user
            $user = User::create($userData['user']);

            // Buat masyarakat user
            $user->masyarakat()->create($userData['masyarakat']);

            // Buat pengaduan dengan masyarakat_id dari user yang baru dibuat
            Complaint::create(array_merge(['masyarakat_id' => $user->id], $userData['complaint']));
        }
        // }
    }
}
