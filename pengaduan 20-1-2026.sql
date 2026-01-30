-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 20, 2026 at 08:06 PM
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
  `jenis_pengaduan` enum('keterlambatan pelayanan','sikap petugas','prosedur pelayanan','sarana prasarana','kesalahan administrasi','pungutan liar','sistem pelayanan','informasi pelayanan','keamanan kenyamanan','lainnya') COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('pending','diproses','selesai','ditolak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `tanggapan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `masyarakat_id`, `judul`, `isi_complaint`, `jenis_pengaduan`, `instansi`, `gambar`, `status`, `tanggapan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sistem Antrian Tidak Jelas', 'Banyak warga menyerobot antrian karena tidak ada nomor antrian.', 'sikap petugas', 'DPMPTSP', '', 'diproses', NULL, '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(2, 2, 'Petugas Kurang Ramah', 'Petugas terlihat kesal saat menanggapi warga yang bertanya.', 'sikap petugas', 'Disdukcapil', '', 'pending', NULL, '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(3, 3, 'Pengurusan KTP Terlalu Lama', 'Proses pembuatan KTP memakan waktu lebih dari 1 bulan.', 'keterlambatan pelayanan', 'Disdukcapil', '', 'pending', NULL, '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(4, 4, 'Pelayanan BPJS Kesehatan Lambat', 'Proses pendaftaran BPJS Kesehatan memakan waktu terlalu lama.', 'keterlambatan pelayanan', 'BPJS Kesehatan', '', 'diproses', NULL, '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(5, 5, 'Petugas Disdukcapil Tidak Memberikan Informasi Lengkap', 'Petugas tidak menjelaskan prosedur pengurusan KK dengan jelas.', 'sikap petugas', 'Disdukcapil', '', 'pending', NULL, '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(6, 6, 'Mesin Fotocopy Kantor Kelurahan Rusak', 'Mesin fotocopy tidak berfungsi sehingga warga harus mencari tempat lain.', 'sarana prasarana', 'Disdukcapil', '', 'diproses', NULL, '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(7, 7, 'Pungutan Tidak Resmi Saat Mengurus IMB', 'Beberapa warga dimintai biaya tambahan yang tidak resmi.', 'pungutan liar', 'DPMPTSP', '', 'pending', NULL, '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(8, 8, 'Alat Tulis Kantor Kurang Lengkap', 'Beberapa dokumen tidak bisa diproses karena kekurangan alat tulis.', 'sarana prasarana', 'Disdukcapil', '', 'diproses', NULL, '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(9, 9, 'Sistem Online Sering Error', 'Website pendaftaran sering down saat digunakan.', 'sistem pelayanan', 'BPJS Kesehatan', '', 'pending', NULL, '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(10, 10, 'Petugas Tidak Memberikan Informasi Lengkap', 'Saat menanyakan syarat pembuatan KK, petugas hanya memberi informasi sebagian.', 'informasi pelayanan', 'Disdukcapil', '', 'pending', NULL, '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(11, 11, 'Toilet Kantor Kotor', 'Toilet umum tidak terawat dan kotor.', 'keamanan kenyamanan', 'Disdukcapil', '', 'diproses', NULL, '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(12, 12, 'Petugas Pilih Kasih', 'Petugas lebih melayani orang tertentu.', 'sikap petugas', 'Disdukcapil', '', 'pending', NULL, '2026-01-20 12:39:19', '2026-01-20 12:39:19');

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
(1, 1, '3601012345678001', 'Karyawan Swasta', 'Belum Menikah', '1994-05-12', 'Jl. Raya Labuan KM 3, Pandeglang, Banten', '081234560001', 'Laki-Laki', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(2, 2, '3601012345678002', 'Pedagang', 'Menikah', '1987-07-22', 'Jl. Pandeglang Raya No. 12, Pandeglang, Banten', '081234560002', 'Perempuan', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(3, 3, '3601012345678003', 'Guru', 'Belum Menikah', '1992-11-10', 'Jl. Pemuda No. 5, Pandeglang, Banten', '081234560003', 'Laki-Laki', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(4, 4, '3601012345678004', 'Perawat', 'Menikah', '1990-05-18', 'Jl. Diponegoro No. 12, Pandeglang, Banten', '081234560004', 'Perempuan', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(5, 5, '3601012345678005', 'Supir', 'Menikah', '1983-09-30', 'Jl. Gatot Subroto No. 15, Pandeglang, Banten', '081234560005', 'Laki-Laki', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(6, 6, '3601012345678006', 'Ibu Rumah Tangga', 'Menikah', '1987-04-12', 'Jl. Pahlawan No. 8, Pandeglang, Banten', '081234560006', 'Perempuan', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(7, 7, '3601012345678007', 'Pedagang', 'Menikah', '1979-12-05', 'Jl. Hayam Wuruk No. 21, Pandeglang, Banten', '081234560007', 'Laki-Laki', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(8, 8, '3601012345678008', 'Akuntan', 'Belum Menikah', '1993-08-19', 'Jl. Thamrin No. 7, Pandeglang, Banten', '081234560008', 'Perempuan', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(9, 9, '3601012345678009', 'Teknisi', 'Menikah', '1986-06-25', 'Jl. Surya Sumantri No. 10, Pandeglang, Banten', '081234560009', 'Laki-Laki', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(10, 10, '3601012345678010', 'Bidan', 'Menikah', '1984-02-14', 'Jl. Ahmad Yani No. 6, Pandeglang, Banten', '081234560010', 'Perempuan', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(11, 11, '3601012345678011', 'Programmer', 'Belum Menikah', '1995-10-08', 'Jl. Soekarno Hatta No. 3, Pandeglang, Banten', '081234560011', 'Laki-Laki', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(12, 12, '3601012345678012', 'Pegawai Bank', 'Menikah', '1989-11-30', 'Jl. Gajah Mada No. 8, Pandeglang, Banten', '081234560012', 'Perempuan', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(13, 15, '1234567890', 'Karyawan', 'Belum Menikah', '1990-01-01', 'Jl. Contoh No.1', NULL, 'Laki-Laki', '2026-01-20 12:39:23', '2026-01-20 12:39:23');

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
('fTYmakHj9VrhFwgS5y0Ms0r3u9mAAR2LODiA1kwz', 13, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiT3V2V3AwRW1RVVEyemJWZWhRaVJrZ0hINzdKaG5nZWlxYktaU2RtaiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO3M6NToicm91dGUiO3M6MTU6ImRhc2hib2FyZC1hZG1pbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEzO30=', 1768939572);

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
(1, 'Ahmad Santoso', 'ahmad.santoso@gmail.com', '$2y$12$el9rvQoJPSb/WudgxoB1VeKDoTgqEU6WtyMmn7JNqHxp0wvChjoJy', 'masyarakat', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(2, 'Sari Dewi', 'sari.dewi@gmail.com', '$2y$12$7c/Qs.FkjY6Qrcbn5.eZM.1113Jyz6h.DTKLN/2bTH605s.6q3liu', 'masyarakat', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(3, 'Budi Setiawan', 'budi.setiawan@gmail.com', '$2y$12$U4UDeyCK3Rr3mjPPcATJq.t3dUZjpF3rGq3b9HJkFBkk0G.E/Zv/S', 'masyarakat', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(4, 'Rina Melati', 'rina.melati@gmail.com', '$2y$12$xTdH0724.YQy0WAXu4VJO.F4V5J9ymfrWymAuzy9xw/WkL01IYwJi', 'masyarakat', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(5, 'Joko Prasetyo', 'joko.prasetyo@gmail.com', '$2y$12$Olm59OwFz63RjTbvEPr57ORMckQbTyEPDBOFlvGf9zFFYucm.tEFK', 'masyarakat', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(6, 'Dewi Sartika', 'dewi.sartika@gmail.com', '$2y$12$lhb/VKq6Ks0Ey9krayJtG.x.Uw1l1HLzX3WbXGi7awzowzf1CaTPi', 'masyarakat', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(7, 'Agus Wijaya', 'agus.wijaya@gmail.com', '$2y$12$ni2pyNpgdOWTaJdZ4aDNV.SVC2eUVKZD8AL5BV/jwKuSw4kpsb/JS', 'masyarakat', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(8, 'Maya Indah', 'maya.indah@gmail.com', '$2y$12$HnjanHmysWqocFdmAxTeBuXwhSUcn7jFy9bM4IbaNLE.9Qx0aR2ni', 'masyarakat', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(9, 'Hendra Kurniawan', 'hendra.kurniawan@gmail.com', '$2y$12$uNfWvG6ymsFPSsGUuRU2TuHStlRFhfCHeGJaxnylhVqJpwx5RBOiq', 'masyarakat', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(10, 'Lina Marlina', 'lina.marlina@gmail.com', '$2y$12$zKkZ8LGJSLOg6y.meX21J.ju7AQEZZ8ncBGBGuD4FthLYA99GvpK6', 'masyarakat', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(11, 'Fajar Nugroho', 'fajar.nugroho@gmail.com', '$2y$12$nl7ftqBIqswFdnJkdg.ydOBP4/iXH6OnPFT9c2YAo8qxLXFI11x1C', 'masyarakat', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(12, 'Nurhayati', 'nurhayati@gmail.com', '$2y$12$evKiOHCV0v4DM.4JMksPbuYcwjgcBMQYTukwTre6XdEcsJKXLLleu', 'masyarakat', '2026-01-20 12:39:19', '2026-01-20 12:39:19'),
(13, 'admin', 'admin@gmail.com', '$2y$12$mA6M.ac123/rJm3N9TiGjedJSbXTBXN13Qwl8OSUrlFa2um/RbsJ.', 'admin', '2026-01-20 12:39:23', '2026-01-20 12:39:23'),
(14, 'Kepala MPP', 'kepalampp@gmail.com', '$2y$12$4DaEtb5oJ74seFahnNjpzewGtBaj2GLwnHt7C7.Y.qUzYEAUp7DpC', 'petugas', '2026-01-20 12:39:23', '2026-01-20 12:39:23'),
(15, 'ahmad', 'ahmad@gmail.com', '$2y$12$7JsNyU8Il7ETElEw2KhIrOlVRR.xY.rBv1vhPqCzXfN1qBo4fgHd2', 'masyarakat', '2026-01-20 12:39:23', '2026-01-20 12:39:23');

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
