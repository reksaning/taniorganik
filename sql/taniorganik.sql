-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Nov 2017 pada 15.17
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taniorganik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahans`
--

CREATE TABLE `bahans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bahans`
--

INSERT INTO `bahans` (`id`, `nama`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Sterofoam', 5000, '2017-09-05 08:32:59', '2017-09-05 08:32:59'),
(2, 'karton', 1000, '2017-10-19 23:49:51', '2017-10-19 23:49:51'),
(3, 'barcode', 500, '2017-10-19 23:50:04', '2017-10-19 23:50:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komoditas`
--

CREATE TABLE `komoditas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `komoditas`
--

INSERT INTO `komoditas` (`id`, `nama`, `waktu`, `kapasitas`, `created_at`, `updated_at`) VALUES
(1, 'Bayam', 21, 15, '2017-09-05 08:36:03', '2017-09-05 08:36:03'),
(2, 'Brokoli', 32, 12, '2017-09-05 08:45:04', '2017-09-05 08:45:04'),
(3, 'kecambah', 21, 12, '2017-10-30 03:49:11', '2017-10-30 03:49:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lahans`
--

CREATE TABLE `lahans` (
  `id` int(10) UNSIGNED NOT NULL,
  `petani_id` int(11) NOT NULL,
  `komoditas_id` int(11) NOT NULL,
  `luas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lahans`
--

INSERT INTO `lahans` (`id`, `petani_id`, `komoditas_id`, `luas`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 200, '2017-09-10 09:51:59', '2017-09-10 09:51:59'),
(2, 3, 2, 200, '2017-09-10 09:55:25', '2017-09-10 09:55:25'),
(3, 2, 1, 200, '2017-09-10 09:59:00', '2017-09-10 09:59:00'),
(4, 2, 2, 1000, '2017-09-10 21:42:52', '2017-09-10 21:42:52'),
(5, 4, 1, 100, '2017-09-10 21:50:39', '2017-09-10 21:50:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2017_08_29_135639_create_komoditas_table', 1),
(11, '2017_08_29_152730_create_transaksis_table', 1),
(12, '2017_08_31_031316_create_produksis_table', 1),
(13, '2017_09_04_040802_create_bahans_table', 1),
(14, '2017_09_04_043003_create_stock_bahans_table', 1),
(15, '2017_09_05_154648_create_petanis_table', 2),
(16, '2017_09_10_162058_create_lahans_table', 3),
(17, '2017_11_04_041017_create_suppliers_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petanis`
--

CREATE TABLE `petanis` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `petanis`
--

INSERT INTO `petanis` (`id`, `nama`, `alamat`, `luas`, `created_at`, `updated_at`) VALUES
(2, 'Tukijan', 'Pakem', 1000, '2017-09-10 09:13:23', '2017-09-10 09:13:39'),
(3, 'Bambang', 'Sleman', 2500, '2017-09-10 09:18:18', '2017-09-10 09:18:18'),
(4, 'Suparman', 'Turi', 3500, '2017-09-10 09:18:37', '2017-09-10 09:18:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksis`
--

CREATE TABLE `produksis` (
  `id` int(10) UNSIGNED NOT NULL,
  `komoditas_id` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produksis`
--

INSERT INTO `produksis` (`id`, `komoditas_id`, `supplier_id`, `tanggal`, `jumlah`, `created_at`, `updated_at`) VALUES
(2, 1, 1, '2017-01-01', 20, '2017-10-30 08:01:20', '2017-10-30 08:01:20'),
(3, 1, 1, '2017-02-01', 24, '2017-10-30 08:01:34', '2017-10-30 08:01:34'),
(4, 1, 1, '2017-03-01', 75, '2017-10-30 08:03:00', '2017-10-30 08:03:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock_bahans`
--

CREATE TABLE `stock_bahans` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `bahan_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stock_bahans`
--

INSERT INTO `stock_bahans` (`id`, `tanggal`, `bahan_id`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, '2017-09-06', 1, 100, '2017-09-05 08:32:16', '2017-09-05 08:32:16'),
(2, '2017-10-29', 52, 100, '2017-10-28 17:00:00', '2017-10-29 15:23:59'),
(3, '2017-10-29', 21, 111, '2017-10-28 17:00:00', '2017-10-29 15:24:25'),
(9, '2017-10-29', 9, 100, '2017-10-28 17:00:00', '2017-10-29 16:45:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `alamat`, `created_at`, `updated_at`) VALUES
(2, 'Indomaret', 'Jalan Kaliurang km 20', '2017-11-03 21:47:39', '2017-11-03 21:47:39'),
(5, 'Alma Midi', 'Jalan Monjali', '2017-11-03 21:52:24', '2017-11-03 21:52:24'),
(6, 'Giant', 'Jalan Godean', '2017-11-03 21:52:37', '2017-11-03 21:52:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` int(10) UNSIGNED NOT NULL,
  `komoditas_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id`, `komoditas_id`, `tanggal`, `jumlah`, `created_at`, `updated_at`) VALUES
(25, 1, '2017-01-01', 20, '2017-10-07 18:21:51', '2017-10-07 18:21:51'),
(26, 1, '2017-02-06', 32, '2017-10-07 18:22:02', '2017-10-07 18:22:02'),
(27, 1, '2017-03-16', 62, '2017-10-07 18:22:16', '2017-10-07 18:22:16'),
(28, 1, '2017-04-11', 29, '2017-10-07 18:22:34', '2017-10-07 18:23:00'),
(29, 1, '2017-05-16', 21, '2017-10-07 18:24:04', '2017-10-07 18:24:04'),
(30, 1, '2017-06-12', 42, '2017-10-07 18:24:20', '2017-10-07 18:24:20'),
(31, 1, '2017-07-11', 75, '2017-10-07 18:24:35', '2017-10-07 18:24:35'),
(32, 1, '2017-08-21', 31, '2017-10-07 18:24:49', '2017-10-07 18:24:49'),
(33, 1, '2017-09-06', 23, '2017-10-07 18:25:15', '2017-10-07 18:25:15'),
(34, 1, '2017-10-04', 39, '2017-10-07 18:25:28', '2017-10-07 18:25:28'),
(35, 1, '2017-11-08', 77, '2017-10-07 18:25:48', '2017-10-07 18:25:48'),
(36, 1, '2017-12-01', 48, '2017-10-07 18:26:06', '2017-10-07 18:26:06'),
(37, 1, '2018-01-01', 29, '2017-11-03 07:52:13', '2017-11-03 07:52:13'),
(38, 1, '2018-02-01', 27, '2017-11-03 07:52:37', '2017-11-03 07:52:37'),
(39, 1, '2018-03-01', 77, '2017-11-03 07:53:05', '2017-11-03 07:53:05'),
(40, 1, '2018-04-01', 32, '2017-11-03 07:53:28', '2017-11-03 07:53:28'),
(41, 1, '2018-05-01', 39, '2017-11-03 07:54:13', '2017-11-03 07:54:13'),
(42, 1, '2018-06-01', 40, '2017-11-03 07:54:45', '2017-11-03 07:54:45'),
(43, 1, '2018-07-01', 62, '2017-11-03 07:55:06', '2017-11-03 07:55:06'),
(44, 1, '2018-08-09', 40, '2017-11-03 07:55:27', '2017-11-03 07:55:27'),
(45, 1, '2018-09-04', 25, '2017-11-03 07:55:50', '2017-11-03 07:55:50'),
(46, 1, '2018-10-10', 40, '2017-11-03 07:56:11', '2017-11-03 07:56:11'),
(47, 1, '2018-11-07', 75, '2017-11-03 07:56:31', '2017-11-03 07:56:31'),
(48, 1, '2018-12-04', 40, '2017-11-03 07:56:52', '2017-11-03 07:56:52'),
(49, 1, '2019-01-01', 24, '2017-11-03 08:23:17', '2017-11-03 08:23:17'),
(50, 1, '2019-02-01', 40, '2017-11-03 08:23:33', '2017-11-03 08:23:33'),
(51, 1, '2019-03-01', 62, '2017-11-03 08:23:57', '2017-11-03 08:23:57'),
(52, 1, '2019-04-01', 42, '2017-11-03 08:24:30', '2017-11-03 08:24:30'),
(53, 1, '2019-05-01', 62, '2017-11-03 08:24:51', '2017-11-03 08:24:51'),
(54, 1, '2019-06-01', 48, '2017-11-03 08:25:49', '2017-11-03 08:25:49'),
(55, 1, '2019-07-01', 70, '2017-11-03 08:26:19', '2017-11-03 08:26:19'),
(56, 1, '2019-08-01', 44, '2017-11-03 08:26:49', '2017-11-03 08:26:49'),
(57, 1, '2019-09-01', 40, '2017-11-03 08:27:07', '2017-11-03 08:27:07'),
(58, 1, '2019-10-01', 48, '2017-11-03 08:27:31', '2017-11-03 08:27:31'),
(59, 1, '2019-11-01', 72, '2017-11-03 08:27:53', '2017-11-03 08:27:53'),
(60, 1, '2019-12-01', 41, '2017-11-03 08:28:13', '2017-11-03 08:28:13'),
(63, 2, '2017-11-05', 40, '2017-11-03 21:00:15', '2017-11-03 21:00:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahans`
--
ALTER TABLE `bahans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komoditas`
--
ALTER TABLE `komoditas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lahans`
--
ALTER TABLE `lahans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `petanis`
--
ALTER TABLE `petanis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produksis`
--
ALTER TABLE `produksis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_bahans`
--
ALTER TABLE `stock_bahans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
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
-- AUTO_INCREMENT for table `bahans`
--
ALTER TABLE `bahans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `komoditas`
--
ALTER TABLE `komoditas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lahans`
--
ALTER TABLE `lahans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `petanis`
--
ALTER TABLE `petanis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `produksis`
--
ALTER TABLE `produksis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `stock_bahans`
--
ALTER TABLE `stock_bahans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
