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
                    'nik' => '3301123456789001',
                    'pekerjaan' => 'Wiraswasta',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1985-03-15',
                    'alamat' => 'Jl. Merdeka No. 12, Jakarta',
                    'no_hp' => '081234567890',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Pelayanan KTP yang Sangat Lama',
                    'isi_complaint' => 'Proses pembuatan KTP memakan waktu lebih dari 1 bulan, padahal janjinya 2 minggu. Petugas sering tidak ada di tempat.',
                    'jenis_pengaduan' => 'keterlambatan pelayanan',
                    'gambar' => '',
                    'status' => 'pending',
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
                    'nik' => '3301123456789002',
                    'pekerjaan' => 'Guru',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1988-07-22',
                    'alamat' => 'Jl. Sudirman No. 45, Bandung',
                    'no_hp' => '081234567891',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Prosedur Pengurusan Izin Mendirikan Bangunan Tidak Jelas',
                    'isi_complaint' => 'Alur dan syarat pengurusan IMB berubah-ubah setiap kali datang ke kantor.',
                    'jenis_pengaduan' => 'prosedur pelayanan',
                    'gambar' => '',
                    'status' => 'ditolak',
                    'tanggapan' => 'Prosedur sudah sesuai dengan peraturan daerah no. 12 tahun 2022',
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
                    'nik' => '3301123456789003',
                    'pekerjaan' => 'PNS',
                    'status_pernikahan' => 'belum menikah',
                    'tanggal_lahir' => '1992-11-10',
                    'alamat' => 'Jl. Asia Afrika No. 78, Surabaya',
                    'no_hp' => '081234567892',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Pengajuan SKCK Sangat Lama',
                    'isi_complaint' => 'Sudah 3 minggu mengajukan SKCK tetapi belum juga keluar.',
                    'jenis_pengaduan' => 'keterlambatan pelayanan',
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
                    'nik' => '3301123456789004',
                    'pekerjaan' => 'Perawat',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1990-05-18',
                    'alamat' => 'Jl. Diponegoro No. 33, Semarang',
                    'no_hp' => '081234567893',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Pelayanan Izin Praktek Dokter Sangat Lambat',
                    'isi_complaint' => 'Pengajuan izin praktek dokter sudah 2 bulan belum ada kelanjutan.',
                    'jenis_pengaduan' => 'keterlambatan pelayanan',
                    'gambar' => '',
                    'status' => 'diproses',
                    'tanggapan' => 'Sedang menunggu verifikasi dari dinas kesehatan provinsi',
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
                    'nik' => '3301123456789005',
                    'pekerjaan' => 'Supir',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1983-09-30',
                    'alamat' => 'Jl. Gatot Subroto No. 56, Yogyakarta',
                    'no_hp' => '081234567894',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Perpanjangan SIM Membutuhkan Waktu Sangat Lama',
                    'isi_complaint' => 'Proses perpanjangan SIM menghabiskan waktu seharian penuh.',
                    'jenis_pengaduan' => 'keterlambatan pelayanan',
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
                    'nik' => '3301123456789006',
                    'pekerjaan' => 'Ibu Rumah Tangga',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1987-04-12',
                    'alamat' => 'Jl. Pahlawan No. 89, Malang',
                    'no_hp' => '081234567895',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Sikap Petugas yang Kurang Ramah',
                    'isi_complaint' => 'Petugas di kelurahan terlihat kesal saat ditanya tentang prosedur pengurusan surat domisili.',
                    'jenis_pengaduan' => 'sikap petugas',
                    'gambar' => '',
                    'status' => 'diproses',
                    'tanggapan' => 'Sedang dilakukan pembinaan terhadap petugas terkait',
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
                    'nik' => '3301123456789007',
                    'pekerjaan' => 'Pedagang',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1979-12-05',
                    'alamat' => 'Jl. Hayam Wuruk No. 23, Medan',
                    'no_hp' => '081234567896',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Mesin Fotocopy Rusak di Kantor Kelurahan',
                    'isi_complaint' => 'Mesin fotocopy di kantor kelurahan sudah rusak 2 minggu, masyarakat dipaksa cari tempat fotocopy sendiri.',
                    'jenis_pengaduan' => 'sarana prasarana',
                    'gambar' => '',
                    'status' => 'selesai',
                    'tanggapan' => 'Mesin fotocopy telah diperbaiki tanggal 15 November 2023',
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
                    'nik' => '3301123456789008',
                    'pekerjaan' => 'Akuntan',
                    'status_pernikahan' => 'belum menikah',
                    'tanggal_lahir' => '1993-08-19',
                    'alamat' => 'Jl. Thamrin No. 67, Bekasi',
                    'no_hp' => '081234567897',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Antrian yang Tidak Tertib',
                    'isi_complaint' => 'Tidak ada sistem antrian yang jelas, banyak yang menyerobot antrian.',
                    'jenis_pengaduan' => 'lainnya',
                    'gambar' => '',
                    'status' => 'selesai',
                    'tanggapan' => 'Telah diterapkan sistem antrian online dan nomor antrian',
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
                    'nik' => '3301123456789009',
                    'pekerjaan' => 'Teknisi',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1986-06-25',
                    'alamat' => 'Jl. Surya Sumantri No. 44, Bogor',
                    'no_hp' => '081234567898',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'AC di Ruang Tunggu Tidak Berfungsi',
                    'isi_complaint' => 'AC di ruang tunggu kantor kelurahan mati sehingga pengunjung kepanasan.',
                    'jenis_pengaduan' => 'sarana prasarana',
                    'gambar' => '',
                    'status' => 'selesai',
                    'tanggapan' => 'AC telah diperbaiki tanggal 20 November 2023',
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
                    'nik' => '3301123456789010',
                    'pekerjaan' => 'Bidan',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1984-02-14',
                    'alamat' => 'Jl. Ahmad Yani No. 99, Tangerang',
                    'no_hp' => '081234567899',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Petugas Tidak Memberikan Informasi yang Lengkap',
                    'isi_complaint' => 'Saat menanyakan syarat pembuatan KK, petugas hanya memberikan informasi setengah-setengah.',
                    'jenis_pengaduan' => 'sikap petugas',
                    'gambar' => '',
                    'status' => 'diproses',
                    'tanggapan' => 'Petugas sedang mengikuti pelatihan customer service',
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
                    'nik' => '3301123456789011',
                    'pekerjaan' => 'Programmer',
                    'status_pernikahan' => 'belum menikah',
                    'tanggal_lahir' => '1995-10-08',
                    'alamat' => 'Jl. Soekarno Hatta No. 11, Depok',
                    'no_hp' => '081234567800',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Kursi di Ruang Tunggu Rusak',
                    'isi_complaint' => 'Banyak kursi di ruang tunggu yang sudah rusak dan berbahaya bagi pengunjung.',
                    'jenis_pengaduan' => 'sarana prasarana',
                    'gambar' => '',
                    'status' => 'selesai',
                    'tanggapan' => 'Kursi telah diganti dengan yang baru tanggal 25 November 2023',
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
                    'nik' => '3301123456789012',
                    'pekerjaan' => 'Pegawai Bank',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1989-11-30',
                    'alamat' => 'Jl. Gajah Mada No. 77, Solo',
                    'no_hp' => '081234567801',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Petugas Pilih Kasih dalam Melayani',
                    'isi_complaint' => 'Petugas terlihat lebih melayani orang yang dikenal atau memiliki hubungan khusus.',
                    'jenis_pengaduan' => 'sikap petugas',
                    'gambar' => '',
                    'status' => 'ditolak',
                    'tanggapan' => 'Tidak ditemukan bukti yang cukup untuk klaim tersebut',
                ],
            ],
            [
                'user' => [
                    'name' => 'Rudi Hartono',
                    'email' => 'rudi.hartono@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3301123456789013',
                    'pekerjaan' => 'Karyawan Swasta',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1982-07-17',
                    'alamat' => 'Jl. Panglima Sudirman No. 34, Palembang',
                    'no_hp' => '081234567802',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Prosedur Pembuatan Paspor Terlalu Rumit',
                    'isi_complaint' => 'Banyak dokumen yang diminta berulang-ulang padahal sudah diserahkan sebelumnya.',
                    'jenis_pengaduan' => 'prosedur pelayanan',
                    'gambar' => '',
                    'status' => 'pending',
                    'tanggapan' => null,
                ],
            ],
            [
                'user' => [
                    'name' => 'Siti Aisyah',
                    'email' => 'siti.aisyah@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3301123456789014',
                    'pekerjaan' => 'Dosen',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1980-01-25',
                    'alamat' => 'Jl. Dr. Wahidin No. 55, Makassar',
                    'no_hp' => '081234567803',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Pembuatan Surat Keterangan Tidak Mampu Berbelit-belit',
                    'isi_complaint' => 'Harus mengumpulkan terlalu banyak dokumen untuk sekedar membuat surat keterangan tidak mampu.',
                    'jenis_pengaduan' => 'prosedur pelayanan',
                    'gambar' => '',
                    'status' => 'selesai',
                    'tanggapan' => 'Prosedur telah disederhanakan sesuai peraturan baru',
                ],
            ],
            [
                'user' => [
                    'name' => 'Arif Rahman',
                    'email' => 'arif.rahman@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3301123456789015',
                    'pekerjaan' => 'Wartawan',
                    'status_pernikahan' => 'belum menikah',
                    'tanggal_lahir' => '1994-03-08',
                    'alamat' => 'Jl. Veteran No. 22, Balikpapan',
                    'no_hp' => '081234567804',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Toilet di Kantor Pelayanan Kotor',
                    'isi_complaint' => 'Toilet umum di kantor pelayanan sangat kotor dan tidak terawat.',
                    'jenis_pengaduan' => 'sarana prasarana',
                    'gambar' => '',
                    'status' => 'diproses',
                    'tanggapan' => 'Telah ditambah petugas kebersihan khusus untuk toilet',
                ],
            ],
            [
                'user' => [
                    'name' => 'Ratna Dewi',
                    'email' => 'ratna.dewi@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3301123456789016',
                    'pekerjaan' => 'Apoteker',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1987-09-14',
                    'alamat' => 'Jl. Kapten Pattimura No. 88, Manado',
                    'no_hp' => '081234567805',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Petugas Terlalu Banyak Bermain HP',
                    'isi_complaint' => 'Petugas lebih sering melihat HP daripada melayani masyarakat.',
                    'jenis_pengaduan' => 'sikap petugas',
                    'gambar' => '',
                    'status' => 'selesai',
                    'tanggapan' => 'Telah diterapkan aturan ketat penggunaan HP saat jam pelayanan',
                ],
            ],
            [
                'user' => [
                    'name' => 'Eko Prasetyo',
                    'email' => 'eko.prasetyo@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3301123456789017',
                    'pekerjaan' => 'Montir',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1981-12-03',
                    'alamat' => 'Jl. Yos Sudarso No. 66, Pekanbaru',
                    'no_hp' => '081234567806',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Pelayanan Pembuatan Akta Kelahiran Terlambat',
                    'isi_complaint' => 'Sudah 1 bulan mengurus akta kelahiran anak tapi belum selesai.',
                    'jenis_pengaduan' => 'keterlambatan pelayanan',
                    'gambar' => '',
                    'status' => 'diproses',
                    'tanggapan' => 'Sedang menunggu tanda tangan camat',
                ],
            ],
            [
                'user' => [
                    'name' => 'Wulan Sari',
                    'email' => 'wulan.sari@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3301123456789018',
                    'pekerjaan' => 'Desainer',
                    'status_pernikahan' => 'belum menikah',
                    'tanggal_lahir' => '1996-05-22',
                    'alamat' => 'Jl. Prof. Moh. Yamin No. 33, Padang',
                    'no_hp' => '081234567807',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Tidak Ada Tempat Parkir yang Memadai',
                    'isi_complaint' => 'Lahan parkir sangat sempit sehingga sulit untuk parkir.',
                    'jenis_pengaduan' => 'sarana prasarana',
                    'gambar' => '',
                    'status' => 'pending',
                    'tanggapan' => null,
                ],
            ],
            [
                'user' => [
                    'name' => 'Adi Saputra',
                    'email' => 'adi.saputra@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3301123456789019',
                    'pekerjaan' => 'Sales',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1984-08-11',
                    'alamat' => 'Jl. Teuku Umar No. 19, Denpasar',
                    'no_hp' => '081234567808',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Petugas Sering Datang Terlambat',
                    'isi_complaint' => 'Petugas baru datang jam 9 pagi padahal jam kerja dimulai 8 pagi.',
                    'jenis_pengaduan' => 'sikap petugas',
                    'gambar' => '',
                    'status' => 'selesai',
                    'tanggapan' => 'Telah dilakukan pembinaan kedisiplinan terhadap seluruh petugas',
                ],
            ],
            [
                'user' => [
                    'name' => 'Mira Agustina',
                    'email' => 'mira.agustina@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3301123456789020',
                    'pekerjaan' => 'Pramugari',
                    'status_pernikahan' => 'belum menikah',
                    'tanggal_lahir' => '1991-06-29',
                    'alamat' => 'Jl. Jenderal Sudirman No. 100, Samarinda',
                    'no_hp' => '081234567809',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Prosedur Perubahan Data di KK Terlalu Birokratis',
                    'isi_complaint' => 'Harus mengisi banyak formulir hanya untuk mengubah alamat di KK.',
                    'jenis_pengaduan' => 'prosedur pelayanan',
                    'gambar' => '',
                    'status' => 'ditolak',
                    'tanggapan' => 'Prosedur sesuai dengan peraturan perundang-undangan yang berlaku',
                ],
            ],
            [
                'user' => [
                    'name' => 'Hadi Susanto',
                    'email' => 'hadi.susanto@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3301123456789021',
                    'pekerjaan' => 'Nelayan',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1978-04-17',
                    'alamat' => 'Jl. Pantai Kuta No. 5, Mataram',
                    'no_hp' => '081234567810',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Pengaduan Lain tentang Kebersihan',
                    'isi_complaint' => 'Lingkungan sekitar kantor pelayanan sangat kotor dan banyak sampah.',
                    'jenis_pengaduan' => 'lainnya',
                    'gambar' => '',
                    'status' => 'diproses',
                    'tanggapan' => 'Telah dikontakkan dinas kebersihan untuk penanganan',
                ],
            ],
            [
                'user' => [
                    'name' => 'Yuni Astuti',
                    'email' => 'yuni.astuti@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3301123456789022',
                    'pekerjaan' => 'Kasir',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1986-10-07',
                    'alamat' => 'Jl. Raya Bogor No. 123, Cibinong',
                    'no_hp' => '081234567811',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Pelayanan Pajak Kendaraan Bermotor Lambat',
                    'isi_complaint' => 'Proses pembayaran pajak kendaraan membutuhkan waktu berjam-jam.',
                    'jenis_pengaduan' => 'keterlambatan pelayanan',
                    'gambar' => '',
                    'status' => 'selesai',
                    'tanggapan' => 'Telah ditambah loket pelayanan untuk mempercepat proses',
                ],
            ],
            [
                'user' => [
                    'name' => 'Dedi Kusuma',
                    'email' => 'dedi.kusuma@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3301123456789023',
                    'pekerjaan' => 'Satpam',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1979-11-21',
                    'alamat' => 'Jl. Merapi No. 8, Magelang',
                    'no_hp' => '081234567812',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Koneksi Internet di Kantor Sering Putus',
                    'isi_complaint' => 'Internet sering mati saat proses pelayanan berlangsung.',
                    'jenis_pengaduan' => 'sarana prasarana',
                    'gambar' => '',
                    'status' => 'diproses',
                    'tanggapan' => 'Sedang melakukan upgrade koneksi internet',
                ],
            ],
            [
                'user' => [
                    'name' => 'Lestari Wati',
                    'email' => 'lestari.wati@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3301123456789024',
                    'pekerjaan' => 'Penjahit',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1983-02-28',
                    'alamat' => 'Jl. Kenanga No. 14, Purwokerto',
                    'no_hp' => '081234567813',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Petugas Tidak Sabar Menjelaskan',
                    'isi_complaint' => 'Petugas terlihat tidak sabar saat menjelaskan prosedur kepada lansia.',
                    'jenis_pengaduan' => 'sikap petugas',
                    'gambar' => '',
                    'status' => 'pending',
                    'tanggapan' => null,
                ],
            ],
            [
                'user' => [
                    'name' => 'Slamet Riyadi',
                    'email' => 'slamet.riyadi@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3301123456789025',
                    'pekerjaan' => 'Petani',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1976-09-09',
                    'alamat' => 'Jl. Raya Solo No. 200, Klaten',
                    'no_hp' => '081234567814',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Alur Pengurusan Surat Tanah Tidak Jelas',
                    'isi_complaint' => 'Tidak ada informasi jelas tentang pengurusan surat tanah.',
                    'jenis_pengaduan' => 'prosedur pelayanan',
                    'gambar' => '',
                    'status' => 'selesai',
                    'tanggapan' => 'Telah dipasang flowchart alur pengurusan di dinding kantor',
                ],
            ],
            [
                'user' => [
                    'name' => 'Ani Purwanti',
                    'email' => 'ani.purwanti@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3301123456789026',
                    'pekerjaan' => 'Penjaga Toko',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1985-12-16',
                    'alamat' => 'Jl. Raya Cirebon No. 77, Indramayu',
                    'no_hp' => '081234567815',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Kurangnya Penerangan di Area Parkir',
                    'isi_complaint' => 'Area parkir sangat gelap pada malam hari sehingga rawan kejahatan.',
                    'jenis_pengaduan' => 'sarana prasarana',
                    'gambar' => '',
                    'status' => 'selesai',
                    'tanggapan' => 'Telah dipasang lampu tambahan di area parkir',
                ],
            ],
            [
                'user' => [
                    'name' => 'Bayu Aditya',
                    'email' => 'bayu.aditya@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3301123456789027',
                    'pekerjaan' => 'Mahasiswa',
                    'status_pernikahan' => 'belum menikah',
                    'tanggal_lahir' => '2000-03-04',
                    'alamat' => 'Jl. Ganesha No. 10, Bandung',
                    'no_hp' => '081234567816',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Pengurusan Izin Usaha Mikro Sangat Lama',
                    'isi_complaint' => 'Proses izin usaha mikro memakan waktu berbulan-bulan.',
                    'jenis_pengaduan' => 'keterlambatan pelayanan',
                    'gambar' => '',
                    'status' => 'diproses',
                    'tanggapan' => 'Sedang proses verifikasi lapangan',
                ],
            ],
            [
                'user' => [
                    'name' => 'Cindy Paramita',
                    'email' => 'cindy.paramita@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3301123456789028',
                    'pekerjaan' => 'Marketing',
                    'status_pernikahan' => 'belum menikah',
                    'tanggal_lahir' => '1997-07-23',
                    'alamat' => 'Jl. Taman Bunga No. 25, Surakarta',
                    'no_hp' => '081234567817',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Tempat Duduk untuk Lansia Tidak Tersedia',
                    'isi_complaint' => 'Tidak ada kursi khusus untuk lansia dan ibu hamil.',
                    'jenis_pengaduan' => 'sarana prasarana',
                    'gambar' => '',
                    'status' => 'selesai',
                    'tanggapan' => 'Telah disediakan kursi khusus lansia dan ibu hamil',
                ],
            ],
            [
                'user' => [
                    'name' => 'Feri Irawan',
                    'email' => 'feri.irawan@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3301123456789029',
                    'pekerjaan' => 'Koki',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1988-01-31',
                    'alamat' => 'Jl. Kuliner No. 18, Semarang',
                    'no_hp' => '081234567818',
                    'jenis_kelamin' => 'Laki-Laki',
                ],
                'complaint' => [
                    'judul' => 'Petugas Menggunakan Bahasa yang Tidak Sopan',
                    'isi_complaint' => 'Petugas menggunakan kata-kata yang tidak pantas saat berbicara.',
                    'jenis_pengaduan' => 'sikap petugas',
                    'gambar' => '',
                    'status' => 'ditolak',
                    'tanggapan' => 'Setelah investigasi, tidak ditemukan bukti penggunaan bahasa tidak sopan',
                ],
            ],
            [
                'user' => [
                    'name' => 'Gita Maharani',
                    'email' => 'gita.maharani@gmail.com',
                    'password' => bcrypt('password123'),
                    'role' => 'masyarakat',
                ],
                'masyarakat' => [
                    'nik' => '3301123456789030',
                    'pekerjaan' => 'Dokter',
                    'status_pernikahan' => 'menikah',
                    'tanggal_lahir' => '1982-04-09',
                    'alamat' => 'Jl. Dr. Sutomo No. 3, Malang',
                    'no_hp' => '081234567819',
                    'jenis_kelamin' => 'Perempuan',
                ],
                'complaint' => [
                    'judul' => 'Sistem Online Sering Error',
                    'isi_complaint' => 'Sistem pelayanan online sering down saat digunakan.',
                    'jenis_pengaduan' => 'lainnya',
                    'gambar' => '',
                    'status' => 'diproses',
                    'tanggapan' => 'Sedang melakukan maintenance sistem',
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
