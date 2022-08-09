-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 12:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(4, '2021_10_09_230555_create_penggunas_table', 1),
(5, '2021_10_13_023748_create_table_kategori', 2),
(6, '2021_10_14_150030_create_table_bukus', 3),
(8, '2021_10_13_025249_create_penggunas_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `m_buku`
--

CREATE TABLE `m_buku` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori` int(11) NOT NULL,
  `judul` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `penulis` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(115) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_terbit` date DEFAULT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_buku`
--

INSERT INTO `m_buku` (`id`, `kategori`, `judul`, `stock`, `penulis`, `penerbit`, `tahun_terbit`, `gambar`, `status`, `created_at`, `updated_at`) VALUES
(1, 52, 'pemegrograman dasar', 0, 'budi', 'pt sentosa', '2021-03-29', 'prog2.jpg', 1, '2021-10-17 16:08:28', '2021-11-29 06:42:33'),
(2, 2, 'Desain Grafis', 17, 'salu', 'PT samba', '2021-08-02', 'download (5).jpg', 1, '2021-10-18 23:00:36', '2021-12-04 20:00:09'),
(3, 3, 'PJOK kls 12', 0, 'budiman', 'pt sentosa', '2021-08-03', 'download (2).jpg', 0, '2021-10-18 23:26:34', '2021-11-14 20:52:53'),
(4, 4, 'Petualangan Sang Azis', 3, 'M. Abdul Azis', 'Erlangga', '2021-10-20', 'Sccess.jpg', 1, '2021-10-20 20:47:35', '2021-11-14 20:50:38'),
(5, 2, 'Desain 3D', 7, 'Abdul', 'PT samba', '2021-09-01', 'rainbow-circles-on-black-background-bi2falcffjsi5p4c.jpg', 1, '2021-10-25 02:49:02', '2021-11-04 02:13:49'),
(18, 43, 'indonesia  kelas XII', 9, 'Abdul', 'pt sandika', '2021-05-03', 'bukulogo.png', 1, '2021-10-26 00:36:07', '2021-11-10 22:44:35'),
(19, 44, 'Peristiwa 212', 16, 'salu', 'Pt. Ceria', '2021-07-05', 'a.jfif', 1, '2021-10-26 00:46:05', '2021-11-10 22:51:52'),
(20, 45, 'Ragam adat suku baduy', 3, 'budiman', 'Erlangga', '2021-04-26', 'download.jpg', 1, '2021-10-26 01:29:17', '2021-11-10 23:01:40'),
(22, 47, 'sukses finansial', 5, 'budi', 'pt sandika', '2021-05-02', 'Poster CORONA1.jpg', 1, '2021-10-26 01:37:35', '2021-11-29 06:40:45'),
(23, 48, 'Perkembangan Teknologi', 4, 'budiman', 'Erlangga', '2021-04-26', 'images.jpg', 1, '2021-10-26 01:39:25', '2021-11-20 19:01:26'),
(24, 49, 'Bahaya Pandemi covid', 6, 'Abdul', 'pt sehat', '2021-02-26', 'spider-man-on-black-background-trfi8pwebvc9anp0.jpg', 1, '2021-10-26 01:41:07', '2021-11-10 01:49:18'),
(25, 46, 'Manusia Peradaban', 7, 'budi', 'cv eko utama', '2021-05-28', 'watchdogs-4k-9gapztrp261t4war.jpg', 1, '2021-10-27 21:14:58', '2021-10-28 20:45:13'),
(26, 45, 'Desain Grafis', 1222, 'salu', 'pt sandika', '2021-11-04', 'wp4897261-dark-aesthetic-pc-wallpapers.jpg', 1, '2021-11-10 01:48:10', '2021-11-22 06:10:06'),
(27, 43, 'Desain Grafis 2020', 3, 'salu', 'pt sandika', '2021-11-11', 'wp3774906-dark-aesthetic-pc-wallpapers.jpg', 1, '2021-11-10 01:48:50', '2021-11-10 01:48:50'),
(29, 45, 'pemegrograman php5', 2, 'budi', 'PT samba', '2021-11-02', 'watchdogs-4k-9gapztrp261t4war.jpg', 1, '2021-11-10 07:33:39', '2021-11-10 07:33:39'),
(32, 2, 'Desain Grafis', 0, 'Abdul', 'PT budi sentosa', '2021-12-14', 'rainbow-circles-on-black-background-bi2falcffjsi5p4c.jpg', 1, '2021-11-30 19:44:21', '2021-11-30 19:44:21');

-- --------------------------------------------------------

--
-- Table structure for table `m_kategori`
--

CREATE TABLE `m_kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_kategori`
--

INSERT INTO `m_kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(2, 'Desain', '2021-10-17 15:39:13', '2021-10-17 15:39:13'),
(3, 'Olahraga', '2021-10-18 22:55:37', '2021-10-18 22:55:49'),
(4, 'Cerita', '2021-10-20 20:48:32', '2021-10-20 20:48:48'),
(43, 'Pelajaran', '2021-10-26 00:36:43', '2021-10-26 00:36:43'),
(44, 'Politik', '2021-10-26 00:37:05', '2021-10-26 00:37:05'),
(45, 'Budaya', '2021-10-26 00:37:17', '2021-10-26 00:37:17'),
(46, 'Sosial', '2021-10-26 00:43:15', '2021-10-26 00:43:15'),
(47, 'Ekonomi', '2021-10-26 01:32:59', '2021-10-26 01:32:59'),
(48, 'Teknologi', '2021-10-26 01:33:21', '2021-10-26 01:33:21'),
(49, 'Kesehatan', '2021-10-26 01:34:45', '2021-10-26 01:34:45'),
(52, 'budi', '2021-11-10 05:49:28', '2021-11-10 05:49:28'),
(54, 'Agama', '2021-11-10 18:42:08', '2021-11-10 18:42:36');

-- --------------------------------------------------------

--
-- Table structure for table `m_status`
--

CREATE TABLE `m_status` (
  `id` int(11) NOT NULL,
  `kode` int(11) DEFAULT NULL,
  `nama` varchar(115) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_status`
--

INSERT INTO `m_status` (`id`, `kode`, `nama`) VALUES
(1, NULL, 'Menunggu Verifikasi'),
(2, 1, 'Disetujui'),
(3, 2, 'Ditolak'),
(4, 3, 'Dikembalikan'),
(5, 4, 'Denda');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `buku` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `cek` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `tgl_kembali` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `buku`, `user`, `status`, `cek`, `created_at`, `updated_at`, `tgl_kembali`) VALUES
(99, 2, 17, 3, 0, '2021-12-04 23:25:22', '2021-12-05 01:53:30', '2021-12-07 23:25:22'),
(100, 2, 17, 3, 0, '2021-12-05 00:51:02', '2021-12-05 01:06:04', '2021-12-08 00:51:02'),
(101, 2, 17, 3, 0, '2021-12-05 00:57:56', '2021-12-05 01:29:26', '2021-12-08 00:57:56'),
(102, 2, 17, 1, 0, '2021-12-05 00:58:00', '2022-01-03 00:31:42', '2021-12-08 00:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(115) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `kelas` varchar(26) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `kelas`, `jurusan`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin Perpus', 'admin', 'Guru', '', 'admin@gmail.com', NULL, '$2y$10$ePN/Ek1386wZhc6hoo2RtedisAJdYy.MchB6ClcNTpjcTxz6Etjfi', 'kiVNkAUebOiNtVimphCJiUDOi43oFpBKaOogF3Lfb6JaIxH2iSNBGlEM4Pnm', '2021-11-04 19:04:07', '2021-11-16 20:36:11'),
(3, 'andri', 'user', '12 A', 'RPL', 'andri@gmail.com', NULL, '$2y$10$WUNOq2.BSHQkojmzd0PUZu45KYYe7Gg.bxoTMr7NbbLZBalWEfeQK', NULL, '2021-10-22 08:35:38', '2021-12-07 07:29:38'),
(4, 'axl', 'user', '12 B', 'TKJ', 'axl@gmail.com', NULL, '$2y$10$1n458ms.6EEceSPDOmqUlu.c7GB9FtIKooQcgq2EDWoyDwQ2.BXLe', NULL, '2021-10-22 08:36:03', '2021-11-16 20:18:51'),
(5, 'azis', 'user', '11 A', 'TKJ', 'azis@gmail.com', NULL, '$2y$10$fvXWhl1r6IRxsStv8YOMru.ItR23ylEOEN8YHYdT1GTQ33FQX3BpC', NULL, '2021-10-22 08:36:32', '2021-11-16 20:28:39'),
(6, 'igit', 'user', '11 B', 'RPL', 'igitindrayana764@gmail.com', NULL, '$2y$10$6FnNBTVod3ip43JEu6dtQeXdp.X/p09rgSvrF9E5XSFhiRsFx3Rl6', NULL, '2021-10-22 08:36:48', '2021-11-16 20:56:15'),
(14, 'adi w', 'user', '12 A', 'KI', 'adi@gmail.com', NULL, '$2y$10$xreZOQE8ZnKm5ooZzsM2FuLnfCBp6e/NcCbI6XAowmZwPpINIJt9q', NULL, '2021-10-31 21:26:59', '2021-11-10 08:10:12'),
(15, 'udin', 'user', '10 A', 'ATPH', 'udin@gmail.com', NULL, '$2y$10$5VZ8PefNUBZVIG98NFhs5uqAoOv8JVV67NCOFpQnlE9U8LHjbREti', NULL, '2021-10-31 21:30:37', '2021-10-31 21:30:37'),
(16, 'putra', 'user', '12 D', 'TEI', 'putra@gmail.com', NULL, '$2y$10$xwRnW4fEm1eCqaNdJ6oJtO6weT6x1ti1DMoxzv4wMFlZ9HWPO5hkC', NULL, '2021-11-04 10:47:49', '2021-11-04 10:47:49'),
(17, 'ali', 'user', '12 A', 'RPL', 'ali@gmail.com', NULL, '$2y$10$x21ZhikEtl5d7EZH0IvpnusvOg1EsSQ3IS5doDJ68fKUlZRIbMqgC', NULL, '2021-11-04 10:50:23', '2021-11-04 10:50:23'),
(19, 'aldo', 'user', '12 B', 'ATPH', 'aldo@gmail.com', NULL, '$2y$10$4NIaCtt88qWgpyLWcbkqq.Di8wOk3S2YzzwiIv/O1nBHPqrr3Cfqu', NULL, '2021-11-04 10:54:07', '2021-11-04 10:54:07'),
(22, 'ernes', 'user', '12 B', 'BDP', 'ernes@gmail.com', NULL, '$2y$10$fysnE0SVABe0G8d.0VmLGO/ilAG.Fc1DdSgRFgRY73odj150HdPTu', NULL, '2021-11-04 11:09:09', '2021-11-04 11:09:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_buku`
--
ALTER TABLE `m_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_kategori`
--
ALTER TABLE `m_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_status`
--
ALTER TABLE `m_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `m_buku`
--
ALTER TABLE `m_buku`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `m_kategori`
--
ALTER TABLE `m_kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `m_status`
--
ALTER TABLE `m_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
