-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Nov 2017 pada 09.00
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
-- Struktur dari tabel `boms`
--

CREATE TABLE `boms` (
  `id` int(10) UNSIGNED NOT NULL,
  `commodity_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `packaging_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `boms`
--

INSERT INTO `boms` (`id`, `commodity_id`, `supplier_id`, `packaging_id`, `quantity`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 2, 1, '2017-11-16 23:43:35', '2017-11-16 23:43:35'),
(3, 1, 10, 2, 2, '2017-11-16 23:43:58', '2017-11-16 23:43:58'),
(4, 2, 1, 2, 1, '2017-11-16 23:44:08', '2017-11-16 23:44:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `commodities`
--

CREATE TABLE `commodities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `commodities`
--

INSERT INTO `commodities` (`id`, `name`, `time`, `created_at`, `updated_at`) VALUES
(1, 'bayam hijau', 30, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(2, 'bayam merah', 30, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(3, 'biet', 60, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(4, 'brokoli', 60, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(5, 'buncis  ', 45, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(6, 'cabe rawit', 60, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(7, 'caisim  ', 30, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(8, 'daun bawang', 60, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(9, 'daun ginseng', 30, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(10, 'kacang panjang', 45, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(11, 'kangkung  ', 30, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(12, 'kol putih', 60, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(13, 'labu siam', 30, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(14, 'okra', 60, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(15, 'oyong', 45, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(16, 'pakchoy  ', 30, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(17, 'pare', 45, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(18, 'parsley', 30, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(19, 'sawi putih', 60, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(20, 'selada hijau', 30, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(21, 'selada merah', 30, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(22, 'seledri', 45, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(23, 'serai', 30, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(24, 'terong ungu', 45, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(25, 'tomat  ', 60, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(26, 'tomat cherry', 45, '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(27, 'wortel', 60, '2017-11-10 17:00:00', '2017-11-10 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `demands`
--

CREATE TABLE `demands` (
  `id` int(10) UNSIGNED NOT NULL,
  `commodity_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `demands`
--

INSERT INTO `demands` (`id`, `commodity_id`, `supplier_id`, `date`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(2, 2, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(3, 3, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(4, 4, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(5, 5, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(6, 6, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(7, 7, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(8, 8, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(9, 9, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(10, 10, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(11, 11, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(12, 12, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(13, 13, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(14, 14, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(15, 15, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(16, 16, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(17, 17, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(18, 18, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(19, 19, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(20, 20, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(21, 21, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(22, 22, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(23, 23, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(24, 24, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(25, 25, 1, '2017-11-13', 0, '2017-11-13 00:47:21', '2017-11-13 00:47:21'),
(26, 26, 1, '2017-11-13', 0, '2017-11-13 00:47:22', '2017-11-13 00:47:22'),
(27, 27, 1, '2017-11-13', 0, '2017-11-13 00:47:22', '2017-11-13 00:47:22');

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
(3, 'kecambah', 21, 12, '2017-10-30 03:49:11', '2017-10-30 03:49:11'),
(4, 'pakcoy', 32, 15, '2017-11-10 22:34:27', '2017-11-10 22:34:27');

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
(17, '2017_11_04_041017_create_suppliers_table', 4),
(18, '2017_11_12_151735_create_demands_table', 5),
(19, '2017_11_12_151942_create_commodities_table', 5),
(20, '2017_11_16_142209_create_packagings_table', 6),
(21, '2017_11_16_142822_create_stocks_table', 6),
(22, '2017_11_16_143511_create_boms_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `packagings`
--

CREATE TABLE `packagings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `packagings`
--

INSERT INTO `packagings` (`id`, `name`, `time`, `created_at`, `updated_at`) VALUES
(2, 'plastik', 7, '2017-11-16 08:59:08', '2017-11-16 08:59:08');

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
(4, 'Suparman', 'Turi', 3500, '2017-09-10 09:18:37', '2017-09-10 09:18:37'),
(5, 'nama', 'alamat', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'satu', 'satu', 100, '2017-09-10 17:00:00', '2017-09-10 17:00:00'),
(7, 'dua', 'dua', 200, '2017-09-10 17:00:00', '2017-09-10 17:00:00'),
(8, 'tiga', 'tiga', 133, '2017-09-10 17:00:00', '2017-09-10 17:00:00');

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
(16, 1, 5, '2017-11-11', 9, '2017-11-10 19:34:47', '2017-11-10 19:34:47'),
(17, 2, 5, '2017-11-11', 10, '2017-11-10 19:34:47', '2017-11-10 19:34:47'),
(18, 3, 5, '2017-11-11', 10000, '2017-11-10 19:34:48', '2017-11-10 22:30:35'),
(19, 1, 6, '2017-11-11', 7, '2017-11-10 19:35:02', '2017-11-10 19:35:02'),
(20, 2, 6, '2017-11-11', 8, '2017-11-10 19:35:02', '2017-11-10 19:35:02'),
(21, 3, 6, '2017-11-11', 9, '2017-11-10 19:35:02', '2017-11-10 19:35:02'),
(25, 1, 2, '2017-11-11', 10, '2017-11-10 21:55:00', '2017-11-10 21:55:00'),
(26, 2, 2, '2017-11-11', 8, '2017-11-10 21:55:00', '2017-11-10 21:55:00'),
(27, 3, 2, '2017-11-11', 12, '2017-11-10 21:55:00', '2017-11-10 21:55:00'),
(28, 1, 2, '2017-11-13', 10, '2017-11-10 22:48:23', '2017-11-10 22:48:23'),
(29, 2, 2, '2017-11-13', 12, '2017-11-10 22:48:23', '2017-11-10 22:48:23'),
(30, 3, 2, '2017-11-13', 13, '2017-11-10 22:48:23', '2017-11-10 22:48:23'),
(31, 4, 2, '2017-11-13', 15, '2017-11-10 22:48:23', '2017-11-10 22:48:23'),
(32, 1, 5, '2017-11-13', 7, '2017-11-10 22:48:49', '2017-11-10 22:48:49'),
(33, 2, 5, '2017-11-13', 8, '2017-11-10 22:48:49', '2017-11-10 22:48:49'),
(34, 3, 5, '2017-11-13', 9, '2017-11-10 22:48:49', '2017-11-10 22:48:49'),
(35, 4, 5, '2017-11-13', 10, '2017-11-10 22:48:49', '2017-11-10 22:48:49'),
(36, 1, 6, '2017-11-13', 12, '2017-11-10 22:49:00', '2017-11-10 22:49:00'),
(37, 2, 6, '2017-11-13', 14, '2017-11-10 22:49:00', '2017-11-10 22:49:00'),
(38, 3, 6, '2017-11-13', 16, '2017-11-10 22:49:01', '2017-11-10 22:49:01'),
(39, 4, 6, '2017-11-13', 19, '2017-11-10 22:49:01', '2017-11-10 22:49:01'),
(40, 1, 2, '2017-11-20', 1, '2017-11-10 22:49:58', '2017-11-10 22:49:58'),
(41, 2, 2, '2017-11-20', 2, '2017-11-10 22:49:58', '2017-11-10 22:49:58'),
(42, 3, 2, '2017-11-20', 3, '2017-11-10 22:49:58', '2017-11-10 22:49:58'),
(43, 1, 2, '2017-11-20', 1, '2017-11-10 22:50:10', '2017-11-10 22:50:10'),
(44, 2, 2, '2017-11-20', 2, '2017-11-10 22:50:10', '2017-11-10 22:50:10'),
(45, 3, 2, '2017-11-20', 3, '2017-11-10 22:50:10', '2017-11-10 22:50:10'),
(46, 4, 2, '2017-11-20', 0, '2017-11-10 22:50:11', '2017-11-10 22:50:11'),
(47, 1, 2, '2017-11-22', 0, '2017-11-10 22:58:01', '2017-11-10 22:58:01'),
(48, 2, 2, '2017-11-22', 0, '2017-11-10 22:58:01', '2017-11-10 22:58:01'),
(49, 3, 2, '2017-11-22', 0, '2017-11-10 22:58:01', '2017-11-10 22:58:01'),
(50, 4, 2, '2017-11-22', 0, '2017-11-10 22:58:01', '2017-11-10 22:58:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stocks`
--

CREATE TABLE `stocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `packaging_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stocks`
--

INSERT INTO `stocks` (`id`, `date`, `packaging_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, '2017-11-05', 2, 1000, '2017-11-16 08:59:41', '2017-11-16 09:12:14');

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
  `pusat_id` int(4) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initial` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `suppliers`
--

INSERT INTO `suppliers` (`id`, `pusat_id`, `name`, `initial`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 'SUPERINDO JAKAL', 'SPI JAKAL', 'Jalan Kaliurang', '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(2, 1, 'SUPERINDO SULTAN AGUNG', 'SPI SAG', 'Jalan Sultan Agung', '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(3, 1, 'SUPERINDO SETURAN', 'SPI STN', 'Jalan Seturan', '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(4, 1, 'SUPERINDO PARIS', 'SPI PARIS', 'Jalan Parangtritis', '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(5, 1, 'SUPERINDO JL SOLO', 'SPI JL SOL', 'Jalan Solo', '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(6, 1, 'SUPERINDO GODEAN', 'SPI GDN', 'Jalan Godean', '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(7, 1, 'SUPERINDO KOTA GEDE', 'SPI KTGD', 'Kota Gede', '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(8, 1, 'SUPERINDO BCA', 'DKN', 'BCA', '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(9, 2, 'INDOGROSIR', 'INGROS', 'Jalan Kaliurang', '2017-11-10 17:00:00', '2017-11-10 17:00:00'),
(10, 3, 'PROGO', 'PROGO', 'Jalan Mataram', '2017-11-10 17:00:00', '2017-11-10 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` int(10) UNSIGNED NOT NULL,
  `komoditas_id` int(11) NOT NULL,
  `supplier_id` int(10) UNSIGNED DEFAULT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id`, `komoditas_id`, `supplier_id`, `tanggal`, `jumlah`, `created_at`, `updated_at`) VALUES
(25, 1, 1, '2017-01-01', 20, '2017-10-07 18:21:51', '2017-10-07 18:21:51'),
(26, 1, 2, '2017-02-06', 32, '2017-10-07 18:22:02', '2017-10-07 18:22:02'),
(27, 1, 3, '2017-03-16', 62, '2017-10-07 18:22:16', '2017-10-07 18:22:16'),
(28, 1, 4, '2017-04-11', 29, '2017-10-07 18:22:34', '2017-10-07 18:23:00'),
(29, 1, 5, '2017-05-16', 21, '2017-10-07 18:24:04', '2017-10-07 18:24:04'),
(30, 1, 6, '2017-06-12', 42, '2017-10-07 18:24:20', '2017-10-07 18:24:20'),
(31, 1, 7, '2017-07-11', 75, '2017-10-07 18:24:35', '2017-10-07 18:24:35'),
(32, 1, 8, '2017-08-21', 31, '2017-10-07 18:24:49', '2017-10-07 18:24:49'),
(33, 1, 9, '2017-09-06', 23, '2017-10-07 18:25:15', '2017-10-07 18:25:15'),
(34, 1, 9, '2017-10-04', 39, '2017-10-07 18:25:28', '2017-10-07 18:25:28'),
(35, 1, 9, '2017-11-08', 77, '2017-10-07 18:25:48', '2017-10-07 18:25:48'),
(36, 1, 9, '2017-12-01', 48, '2017-10-07 18:26:06', '2017-10-07 18:26:06'),
(37, 1, 9, '2018-01-01', 29, '2017-11-03 07:52:13', '2017-11-03 07:52:13'),
(38, 1, 9, '2018-02-01', 27, '2017-11-03 07:52:37', '2017-11-03 07:52:37'),
(39, 1, 9, '2018-03-01', 77, '2017-11-03 07:53:05', '2017-11-03 07:53:05'),
(40, 1, 9, '2018-04-01', 32, '2017-11-03 07:53:28', '2017-11-03 07:53:28'),
(41, 1, 9, '2018-05-01', 39, '2017-11-03 07:54:13', '2017-11-03 07:54:13'),
(42, 1, 9, '2018-06-01', 40, '2017-11-03 07:54:45', '2017-11-03 07:54:45'),
(43, 1, 9, '2018-07-01', 62, '2017-11-03 07:55:06', '2017-11-03 07:55:06'),
(44, 1, 9, '2018-08-09', 40, '2017-11-03 07:55:27', '2017-11-03 07:55:27'),
(45, 1, 9, '2018-09-04', 25, '2017-11-03 07:55:50', '2017-11-03 07:55:50'),
(46, 1, 9, '2018-10-10', 40, '2017-11-03 07:56:11', '2017-11-03 07:56:11'),
(47, 1, 9, '2018-11-07', 75, '2017-11-03 07:56:31', '2017-11-03 07:56:31'),
(48, 1, 9, '2018-12-04', 40, '2017-11-03 07:56:52', '2017-11-03 07:56:52'),
(49, 1, 10, '2019-01-01', 24, '2017-11-03 08:23:17', '2017-11-03 08:23:17'),
(50, 1, 10, '2019-02-01', 40, '2017-11-03 08:23:33', '2017-11-03 08:23:33'),
(51, 1, 10, '2019-03-01', 62, '2017-11-03 08:23:57', '2017-11-03 08:23:57'),
(52, 1, 10, '2019-04-01', 42, '2017-11-03 08:24:30', '2017-11-03 08:24:30'),
(53, 1, 10, '2019-05-01', 62, '2017-11-03 08:24:51', '2017-11-03 08:24:51'),
(54, 1, 10, '2019-06-01', 48, '2017-11-03 08:25:49', '2017-11-03 08:25:49'),
(55, 1, 10, '2019-07-01', 70, '2017-11-03 08:26:19', '2017-11-03 08:26:19'),
(56, 1, 10, '2019-08-01', 44, '2017-11-03 08:26:49', '2017-11-03 08:26:49'),
(57, 1, 10, '2019-09-01', 40, '2017-11-03 08:27:07', '2017-11-03 08:27:07'),
(58, 1, 10, '2019-10-01', 48, '2017-11-03 08:27:31', '2017-11-03 08:27:31'),
(59, 1, 10, '2019-11-01', 72, '2017-11-03 08:27:53', '2017-11-03 08:27:53'),
(60, 1, 10, '2019-12-01', 41, '2017-11-03 08:28:13', '2017-11-03 08:28:13'),
(63, 2, 9, '2017-11-05', 40, '2017-11-03 21:00:15', '2017-11-03 21:00:15');

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
-- Indexes for table `boms`
--
ALTER TABLE `boms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commodities`
--
ALTER TABLE `commodities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demands`
--
ALTER TABLE `demands`
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
-- Indexes for table `packagings`
--
ALTER TABLE `packagings`
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
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
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
-- AUTO_INCREMENT for table `boms`
--
ALTER TABLE `boms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `commodities`
--
ALTER TABLE `commodities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `demands`
--
ALTER TABLE `demands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `komoditas`
--
ALTER TABLE `komoditas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lahans`
--
ALTER TABLE `lahans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `packagings`
--
ALTER TABLE `packagings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `petanis`
--
ALTER TABLE `petanis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `produksis`
--
ALTER TABLE `produksis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stock_bahans`
--
ALTER TABLE `stock_bahans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
