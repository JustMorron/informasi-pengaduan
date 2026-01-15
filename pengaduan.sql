-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2026 at 03:48 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint UNSIGNED NOT NULL,
  `masyarakat_id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_complaint` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_pengaduan` enum('keterlambatan pelayanan','sikap petugas','prosedur pelayanan','sarana prasarana','lainnya') COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('pending','diproses','selesai','ditolak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `tanggapan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `masyarakat_id`, `judul`, `isi_complaint`, `jenis_pengaduan`, `gambar`, `status`, `tanggapan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pelayanan KTP yang Sangat Lama', 'Proses pembuatan KTP memakan waktu lebih dari 1 bulan, padahal janjinya 2 minggu. Petugas sering tidak ada di tempat.', 'keterlambatan pelayanan', '', 'pending', NULL, '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(2, 2, 'Prosedur Pengurusan Izin Mendirikan Bangunan Tidak Jelas', 'Alur dan syarat pengurusan IMB berubah-ubah setiap kali datang ke kantor.', 'prosedur pelayanan', '', 'ditolak', 'Prosedur sudah sesuai dengan peraturan daerah no. 12 tahun 2022', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(3, 3, 'Pengajuan SKCK Sangat Lama', 'Sudah 3 minggu mengajukan SKCK tetapi belum juga keluar.', 'keterlambatan pelayanan', '', 'pending', NULL, '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(4, 4, 'Pelayanan Izin Praktek Dokter Sangat Lambat', 'Pengajuan izin praktek dokter sudah 2 bulan belum ada kelanjutan.', 'keterlambatan pelayanan', '', 'diproses', 'Sedang menunggu verifikasi dari dinas kesehatan provinsi', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(5, 5, 'Perpanjangan SIM Membutuhkan Waktu Sangat Lama', 'Proses perpanjangan SIM menghabiskan waktu seharian penuh.', 'keterlambatan pelayanan', '', 'pending', NULL, '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(6, 6, 'Sikap Petugas yang Kurang Ramah', 'Petugas di kelurahan terlihat kesal saat ditanya tentang prosedur pengurusan surat domisili.', 'sikap petugas', '', 'diproses', 'Sedang dilakukan pembinaan terhadap petugas terkait', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(7, 7, 'Mesin Fotocopy Rusak di Kantor Kelurahan', 'Mesin fotocopy di kantor kelurahan sudah rusak 2 minggu, masyarakat dipaksa cari tempat fotocopy sendiri.', 'sarana prasarana', '', 'selesai', 'Mesin fotocopy telah diperbaiki tanggal 15 November 2023', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(8, 8, 'Antrian yang Tidak Tertib', 'Tidak ada sistem antrian yang jelas, banyak yang menyerobot antrian.', 'lainnya', '', 'selesai', 'Telah diterapkan sistem antrian online dan nomor antrian', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(9, 9, 'AC di Ruang Tunggu Tidak Berfungsi', 'AC di ruang tunggu kantor kelurahan mati sehingga pengunjung kepanasan.', 'sarana prasarana', '', 'selesai', 'AC telah diperbaiki tanggal 20 November 2023', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(10, 10, 'Petugas Tidak Memberikan Informasi yang Lengkap', 'Saat menanyakan syarat pembuatan KK, petugas hanya memberikan informasi setengah-setengah.', 'sikap petugas', '', 'diproses', 'Petugas sedang mengikuti pelatihan customer service', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(11, 11, 'Kursi di Ruang Tunggu Rusak', 'Banyak kursi di ruang tunggu yang sudah rusak dan berbahaya bagi pengunjung.', 'sarana prasarana', '', 'selesai', 'Kursi telah diganti dengan yang baru tanggal 25 November 2023', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(12, 12, 'Petugas Pilih Kasih dalam Melayani', 'Petugas terlihat lebih melayani orang yang dikenal atau memiliki hubungan khusus.', 'sikap petugas', '', 'ditolak', 'Tidak ditemukan bukti yang cukup untuk klaim tersebut', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(13, 13, 'Prosedur Pembuatan Paspor Terlalu Rumit', 'Banyak dokumen yang diminta berulang-ulang padahal sudah diserahkan sebelumnya.', 'prosedur pelayanan', '', 'pending', NULL, '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(14, 14, 'Pembuatan Surat Keterangan Tidak Mampu Berbelit-belit', 'Harus mengumpulkan terlalu banyak dokumen untuk sekedar membuat surat keterangan tidak mampu.', 'prosedur pelayanan', '', 'selesai', 'Prosedur telah disederhanakan sesuai peraturan baru', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(15, 15, 'Toilet di Kantor Pelayanan Kotor', 'Toilet umum di kantor pelayanan sangat kotor dan tidak terawat.', 'sarana prasarana', '', 'diproses', 'Telah ditambah petugas kebersihan khusus untuk toilet', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(16, 16, 'Petugas Terlalu Banyak Bermain HP', 'Petugas lebih sering melihat HP daripada melayani masyarakat.', 'sikap petugas', '', 'selesai', 'Telah diterapkan aturan ketat penggunaan HP saat jam pelayanan', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(17, 17, 'Pelayanan Pembuatan Akta Kelahiran Terlambat', 'Sudah 1 bulan mengurus akta kelahiran anak tapi belum selesai.', 'keterlambatan pelayanan', '', 'diproses', 'Sedang menunggu tanda tangan camat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(18, 18, 'Tidak Ada Tempat Parkir yang Memadai', 'Lahan parkir sangat sempit sehingga sulit untuk parkir.', 'sarana prasarana', '', 'pending', NULL, '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(19, 19, 'Petugas Sering Datang Terlambat', 'Petugas baru datang jam 9 pagi padahal jam kerja dimulai 8 pagi.', 'sikap petugas', '', 'selesai', 'Telah dilakukan pembinaan kedisiplinan terhadap seluruh petugas', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(20, 20, 'Prosedur Perubahan Data di KK Terlalu Birokratis', 'Harus mengisi banyak formulir hanya untuk mengubah alamat di KK.', 'prosedur pelayanan', '', 'ditolak', 'Prosedur sesuai dengan peraturan perundang-undangan yang berlaku', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(21, 21, 'Pengaduan Lain tentang Kebersihan', 'Lingkungan sekitar kantor pelayanan sangat kotor dan banyak sampah.', 'lainnya', '', 'diproses', 'Telah dikontakkan dinas kebersihan untuk penanganan', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(22, 22, 'Pelayanan Pajak Kendaraan Bermotor Lambat', 'Proses pembayaran pajak kendaraan membutuhkan waktu berjam-jam.', 'keterlambatan pelayanan', '', 'selesai', 'Telah ditambah loket pelayanan untuk mempercepat proses', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(23, 23, 'Koneksi Internet di Kantor Sering Putus', 'Internet sering mati saat proses pelayanan berlangsung.', 'sarana prasarana', '', 'diproses', 'Sedang melakukan upgrade koneksi internet', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(24, 24, 'Petugas Tidak Sabar Menjelaskan', 'Petugas terlihat tidak sabar saat menjelaskan prosedur kepada lansia.', 'sikap petugas', '', 'pending', NULL, '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(25, 25, 'Alur Pengurusan Surat Tanah Tidak Jelas', 'Tidak ada informasi jelas tentang pengurusan surat tanah.', 'prosedur pelayanan', '', 'selesai', 'Telah dipasang flowchart alur pengurusan di dinding kantor', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(26, 26, 'Kurangnya Penerangan di Area Parkir', 'Area parkir sangat gelap pada malam hari sehingga rawan kejahatan.', 'sarana prasarana', '', 'selesai', 'Telah dipasang lampu tambahan di area parkir', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(27, 27, 'Pengurusan Izin Usaha Mikro Sangat Lama', 'Proses izin usaha mikro memakan waktu berbulan-bulan.', 'keterlambatan pelayanan', '', 'diproses', 'Sedang proses verifikasi lapangan', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(28, 28, 'Tempat Duduk untuk Lansia Tidak Tersedia', 'Tidak ada kursi khusus untuk lansia dan ibu hamil.', 'sarana prasarana', '', 'selesai', 'Telah disediakan kursi khusus lansia dan ibu hamil', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(29, 29, 'Petugas Menggunakan Bahasa yang Tidak Sopan', 'Petugas menggunakan kata-kata yang tidak pantas saat berbicara.', 'sikap petugas', '', 'ditolak', 'Setelah investigasi, tidak ditemukan bukti penggunaan bahasa tidak sopan', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(30, 30, 'Sistem Online Sering Error', 'Sistem pelayanan online sering down saat digunakan.', 'lainnya', '', 'selesai', 'Sedang melakukan maintenance sistem', '2026-01-14 08:33:31', '2026-01-14 08:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masyarakats`
--

CREATE TABLE `masyarakats` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pernikahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masyarakats`
--

INSERT INTO `masyarakats` (`id`, `user_id`, `nik`, `pekerjaan`, `status_pernikahan`, `tanggal_lahir`, `alamat`, `no_hp`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(1, 1, '3301123456789001', 'Wiraswasta', 'menikah', '1985-03-16', 'Jl. Merdeka No. 12, Jakarta', '081234567890', 'Laki-Laki', '2026-01-14 08:33:30', '2026-01-14 08:44:54'),
(2, 2, '3301123456789002', 'Guru', 'menikah', '1988-07-22', 'Jl. Sudirman No. 45, Bandung', '081234567891', 'Perempuan', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(3, 3, '3301123456789003', 'PNS', 'belum menikah', '1992-11-10', 'Jl. Asia Afrika No. 78, Surabaya', '081234567892', 'Laki-Laki', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(4, 4, '3301123456789004', 'Perawat', 'menikah', '1990-05-18', 'Jl. Diponegoro No. 33, Semarang', '081234567893', 'Perempuan', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(5, 5, '3301123456789005', 'Supir', 'menikah', '1983-09-30', 'Jl. Gatot Subroto No. 56, Yogyakarta', '081234567894', 'Laki-Laki', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(6, 6, '3301123456789006', 'Ibu Rumah Tangga', 'menikah', '1987-04-12', 'Jl. Pahlawan No. 89, Malang', '081234567895', 'Perempuan', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(7, 7, '3301123456789007', 'Pedagang', 'menikah', '1979-12-05', 'Jl. Hayam Wuruk No. 23, Medan', '081234567896', 'Laki-Laki', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(8, 8, '3301123456789008', 'Akuntan', 'belum menikah', '1993-08-19', 'Jl. Thamrin No. 67, Bekasi', '081234567897', 'Perempuan', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(9, 9, '3301123456789009', 'Teknisi', 'menikah', '1986-06-25', 'Jl. Surya Sumantri No. 44, Bogor', '081234567898', 'Laki-Laki', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(10, 10, '3301123456789010', 'Bidan', 'menikah', '1984-02-14', 'Jl. Ahmad Yani No. 99, Tangerang', '081234567899', 'Perempuan', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(11, 11, '3301123456789011', 'Programmer', 'belum menikah', '1995-10-08', 'Jl. Soekarno Hatta No. 11, Depok', '081234567800', 'Laki-Laki', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(12, 12, '3301123456789012', 'Pegawai Bank', 'menikah', '1989-11-30', 'Jl. Gajah Mada No. 77, Solo', '081234567801', 'Perempuan', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(13, 13, '3301123456789013', 'Karyawan Swasta', 'menikah', '1982-07-17', 'Jl. Panglima Sudirman No. 34, Palembang', '081234567802', 'Laki-Laki', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(14, 14, '3301123456789014', 'Dosen', 'menikah', '1980-01-25', 'Jl. Dr. Wahidin No. 55, Makassar', '081234567803', 'Perempuan', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(15, 15, '3301123456789015', 'Wartawan', 'belum menikah', '1994-03-08', 'Jl. Veteran No. 22, Balikpapan', '081234567804', 'Laki-Laki', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(16, 16, '3301123456789016', 'Apoteker', 'menikah', '1987-09-14', 'Jl. Kapten Pattimura No. 88, Manado', '081234567805', 'Perempuan', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(17, 17, '3301123456789017', 'Montir', 'menikah', '1981-12-03', 'Jl. Yos Sudarso No. 66, Pekanbaru', '081234567806', 'Laki-Laki', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(18, 18, '3301123456789018', 'Desainer', 'belum menikah', '1996-05-22', 'Jl. Prof. Moh. Yamin No. 33, Padang', '081234567807', 'Perempuan', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(19, 19, '3301123456789019', 'Sales', 'menikah', '1984-08-11', 'Jl. Teuku Umar No. 19, Denpasar', '081234567808', 'Laki-Laki', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(20, 20, '3301123456789020', 'Pramugari', 'belum menikah', '1991-06-29', 'Jl. Jenderal Sudirman No. 100, Samarinda', '081234567809', 'Perempuan', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(21, 21, '3301123456789021', 'Nelayan', 'menikah', '1978-04-17', 'Jl. Pantai Kuta No. 5, Mataram', '081234567810', 'Laki-Laki', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(22, 22, '3301123456789022', 'Kasir', 'menikah', '1986-10-07', 'Jl. Raya Bogor No. 123, Cibinong', '081234567811', 'Perempuan', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(23, 23, '3301123456789023', 'Satpam', 'menikah', '1979-11-21', 'Jl. Merapi No. 8, Magelang', '081234567812', 'Laki-Laki', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(24, 24, '3301123456789024', 'Penjahit', 'menikah', '1983-02-28', 'Jl. Kenanga No. 14, Purwokerto', '081234567813', 'Perempuan', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(25, 25, '3301123456789025', 'Petani', 'menikah', '1976-09-09', 'Jl. Raya Solo No. 200, Klaten', '081234567814', 'Laki-Laki', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(26, 26, '3301123456789026', 'Penjaga Toko', 'menikah', '1985-12-16', 'Jl. Raya Cirebon No. 77, Indramayu', '081234567815', 'Perempuan', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(27, 27, '3301123456789027', 'Mahasiswa', 'belum menikah', '2000-03-04', 'Jl. Ganesha No. 10, Bandung', '081234567816', 'Laki-Laki', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(28, 28, '3301123456789028', 'Marketing', 'belum menikah', '1997-07-23', 'Jl. Taman Bunga No. 25, Surakarta', '081234567817', 'Perempuan', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(29, 29, '3301123456789029', 'Koki', 'menikah', '1988-01-31', 'Jl. Kuliner No. 18, Semarang', '081234567818', 'Laki-Laki', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(30, 30, '3301123456789030', 'Dokter', 'menikah', '1982-04-09', 'Jl. Dr. Sutomo No. 3, Malang', '081234567819', 'Perempuan', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(31, 33, '1234567890', 'Karyawan', 'Belum Menikah', '1990-01-02', 'Jl. Contoh No.1', '0812345678902', 'Perempuan', '2026-01-14 08:33:37', '2026-01-14 08:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_01_12_083809_create_masyarakats_table', 1),
(5, '2026_01_12_083816_create_complaints_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('q9lgBcTOZYc4HvJjWa2Cz4sOd0zCDv0RwbPd1hux', 32, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOVhjTmhWc0FGU1hsVFhUTHptdmdSWmgxWFJvNHI0eG1sQ1N1MUJWTSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wZXR1Z2FzL2Rhc2hib2FyZCI7czo1OiJyb3V0ZSI7czoxNzoiZGFzaGJvYXJkLXBldHVnYXMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozMjt9', 1768405545);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','petugas','masyarakat') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'masyarakat',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Ahmad Santoso', 'ahmad.santoso@gmail.com', '$2y$12$9EAtFXlyYO7FaPbVu8wgJem2gcmzHEv6PZ.AU8YyHv3PWvrDTRfbK', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(2, 'Sari Dewi', 'sari.dewi@gmail.com', '$2y$12$e5GzQ3AMYxjjrej9zbuR2eGmQ2k5xqcGsJjS3u118/0WH6pzhHomK', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(3, 'Budi Setiawan', 'budi.setiawan@gmail.com', '$2y$12$x68w.g9uGyIVI5s7yp292uquzSsmuKpsoi21BNZuD7jhPcaBhOtC2', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(4, 'Rina Melati', 'rina.melati@gmail.com', '$2y$12$GobOksw3ST.spaQV9LojlO7bXfFSo1uwD.D/7/IoM/nkJJlxc3YM2', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(5, 'Joko Prasetyo', 'joko.prasetyo@gmail.com', '$2y$12$9I/PB9KKDLogiBXKOFqiee66UK3HBF9JVme6YJaPauLVdZh6YHgz6', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(6, 'Dewi Sartika', 'dewi.sartika@gmail.com', '$2y$12$JDs5cHkY2TYPnJAl4kWgQeCS5cpKNId6NFT.RIQh1hqzLWHDq48EC', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(7, 'Agus Wijaya', 'agus.wijaya@gmail.com', '$2y$12$o4heuCVwAzhQD7mAeK.jf.rSy6nro7VhxFrAOhvSw8OPaWWOVJbT2', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(8, 'Maya Indah', 'maya.indah@gmail.com', '$2y$12$D6Oklr7aG8bopC5mdD5dK.uk3oM4AzaaLreY4vsmiPKrL5Swov4B6', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(9, 'Hendra Kurniawan', 'hendra.kurniawan@gmail.com', '$2y$12$NTtLnoPcsxNaNSQpZT1i9enywwohstC6AcPugy/os5NpgGlKzt/dC', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(10, 'Lina Marlina', 'lina.marlina@gmail.com', '$2y$12$F0bW.PHIcN/C/p57u9HT.e3uFi0ZcOFv9LJjsUxEiLZheNARILNv2', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(11, 'Fajar Nugroho', 'fajar.nugroho@gmail.com', '$2y$12$kwC1W8pwpIYULOQzhjJanOINJKXYmSA8k5tcWs3uZ7.Y54qdVTv.q', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(12, 'Nurhayati', 'nurhayati@gmail.com', '$2y$12$6X7ile3bCnIr1nF7uXeL0e4sjxAlxClN.IX/G0QciXqP6G2Vbph9W', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(13, 'Rudi Hartono', 'rudi.hartono@gmail.com', '$2y$12$nG4Nl.c/l4pC/Dx508Dkfuq7xHX7bJgG/iiHluG.fKlEWALTo.2uW', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(14, 'Siti Aisyah', 'siti.aisyah@gmail.com', '$2y$12$lYpYH0g/JTIUVv2R2lzk/OkgSq.H3Tu1gf1UV76hDQ9DCUdQNvUEW', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(15, 'Arif Rahman', 'arif.rahman@gmail.com', '$2y$12$YcSRpeqGPd2ChWC5Co6J4O2EOcDhE02oj5p4UdpMxMDrMLk7PSaWW', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(16, 'Ratna Dewi', 'ratna.dewi@gmail.com', '$2y$12$rKSW8zwYhCA7Nm6Jzly6MOSBlw3gNv.862PXi2GDntpjTQgsfMyWS', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(17, 'Eko Prasetyo', 'eko.prasetyo@gmail.com', '$2y$12$YcZ7GRAmFtvgABLb1cHnUeKlQJkG9sITCv9Rj.yRtwXNZ4taMEz6.', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(18, 'Wulan Sari', 'wulan.sari@gmail.com', '$2y$12$na/gB/4OuZbBoSFc7fN2kO1gXUpKE2hNlcBfa1VyQe4oCwXvzwzSC', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(19, 'Adi Saputra', 'adi.saputra@gmail.com', '$2y$12$.ZjouKDbKZ1RQ7eX.s94RugyZ32mr3.dz2IoCtSC/2ErVZzgNZMpW', 'masyarakat', '2026-01-14 08:33:30', '2026-01-14 08:33:30'),
(20, 'Mira Agustina', 'mira.agustina@gmail.com', '$2y$12$IYrBO03uHt2f6z5tLQPjEO42OWB8jDlP7M/qHT7btvDK.QOQOFsOK', 'masyarakat', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(21, 'Hadi Susanto', 'hadi.susanto@gmail.com', '$2y$12$FSK2/TUOUeFNCdpJ863u/Orc92ZYdfARM0iaUNJHkxFVfFN0TErJa', 'masyarakat', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(22, 'Yuni Astuti', 'yuni.astuti@gmail.com', '$2y$12$kZj8h2brADs22qC5nMinJOj9WbhzshxM49XncK6KX5/TKh85/yntC', 'masyarakat', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(23, 'Dedi Kusuma', 'dedi.kusuma@gmail.com', '$2y$12$ZN8PFxWqBZPct6YESz1vjeBRvSub8oJX0zdmZ0vBDyPTJ5qI6QHku', 'masyarakat', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(24, 'Lestari Wati', 'lestari.wati@gmail.com', '$2y$12$3WEFtshS9k4lex4cicjbhuZUxexlfHCljj5fs5w4fApB2rqJkNFM6', 'masyarakat', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(25, 'Slamet Riyadi', 'slamet.riyadi@gmail.com', '$2y$12$8SbTefI92DQhUJ1oD01z4u3ZUK3HVpkw6QYcOfgZP/YDOLF5WFfLK', 'masyarakat', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(26, 'Ani Purwanti', 'ani.purwanti@gmail.com', '$2y$12$vIMWvhOPx5SwRR7q14RRGe/jthgAkKncGTQhDc40I2hi8JfjeF3QW', 'masyarakat', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(27, 'Bayu Aditya', 'bayu.aditya@gmail.com', '$2y$12$eB3M3WAzHdbMoQBfBjhcYO2Nuk93TTgXAwU27hfZeXj1h739wQ0rm', 'masyarakat', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(28, 'Cindy Paramita', 'cindy.paramita@gmail.com', '$2y$12$.s0B7ealOMywPZ7Q6jYXYeHg2lMKrxIon2KXix9gxtttMxEItq7Hq', 'masyarakat', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(29, 'Feri Irawan', 'feri.irawan@gmail.com', '$2y$12$3gprje7LE/Os9ezqRykFROg4fHupJcfwdG.ga32qKAnaPiJk5yihq', 'masyarakat', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(30, 'Gita Maharani', 'gita.maharani@gmail.com', '$2y$12$V1ZbD9Aiw8ewbQCpiO5UeODXAts//1K43uRQZovM6Zkt6jKy0peAW', 'masyarakat', '2026-01-14 08:33:31', '2026-01-14 08:33:31'),
(31, 'admin', 'admin@gmail.com', '$2y$12$4xI/6LqXJdYypKIIF2DHtOHCBi/BLxjOIPuPNE8NQkOu84lDoDwNK', 'admin', '2026-01-14 08:33:36', '2026-01-14 08:33:36'),
(32, 'Kepala MPP', 'kepalampp@gmail.com', '$2y$12$sQ/2GhJTKoC5C.GIxZL/NOhiO3ywrzE4pJtQk08djhonOWu8zjvw6', 'petugas', '2026-01-14 08:33:36', '2026-01-14 08:33:36'),
(33, 'ahmad', 'ahmad@gmail.com', '$2y$12$T8ziregCNSCa3O7F5ozgmeAjPMaKNb812C2c75lW3XWIQMrfJ6Awi', 'masyarakat', '2026-01-14 08:33:36', '2026-01-14 08:42:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complaints_masyarakat_id_foreign` (`masyarakat_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masyarakats`
--
ALTER TABLE `masyarakats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `masyarakats_nik_unique` (`nik`),
  ADD KEY `masyarakats_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masyarakats`
--
ALTER TABLE `masyarakats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_masyarakat_id_foreign` FOREIGN KEY (`masyarakat_id`) REFERENCES `masyarakats` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `masyarakats`
--
ALTER TABLE `masyarakats`
  ADD CONSTRAINT `masyarakats_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
