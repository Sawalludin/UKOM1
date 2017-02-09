-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 02:06 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infoinven`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_27_063421_create_produk_masuks_table', 1),
('2016_04_27_063430_create_produk_keluars_table', 1),
('2017_01_17_063101_create_produk_pinjamen_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk_keluars`
--

CREATE TABLE `produk_keluars` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info_produk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `username_pengeluar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `produk_keluars`
--

INSERT INTO `produk_keluars` (`id`, `kode`, `nama_produk`, `info_produk`, `jumlah_keluar`, `username_pengeluar`, `created_at`, `updated_at`) VALUES
(1, '2332112', 'Pensil', 'Baru', 1, 'admin', '2017-02-06 17:37:06', '2017-02-06 17:37:06'),
(2, 'asd', 'sdaa', 'dasas', 1, 'admin', '2017-02-06 17:37:48', '2017-02-06 17:37:48');

-- --------------------------------------------------------

--
-- Table structure for table `produk_masuks`
--

CREATE TABLE `produk_masuks` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info_produk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `username_pemasuk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `produk_masuks`
--

INSERT INTO `produk_masuks` (`id`, `kode`, `nama_produk`, `info_produk`, `stok`, `harga_beli`, `harga_jual`, `username_pemasuk`, `created_at`, `updated_at`) VALUES
(1, '2332112', 'Pensil', 'Baru', 17, 100000, 110000, 'admin', '2017-02-06 16:58:59', '2017-02-06 18:04:22'),
(2, 'asd', 'sdaa', 'dasas', 11, 213132, 232333, 'admin', '2017-02-06 17:37:35', '2017-02-06 17:37:48'),
(3, '2332111', 'Pengaris', 'Baru', 12, 120000, 130000, 'admin', '2017-02-06 18:00:29', '2017-02-06 18:00:29'),
(4, '2332113', 'Pulpen', 'Baru', 32, 25000, 26000, 'admin', '2017-02-06 18:01:08', '2017-02-06 18:01:08'),
(5, '33246', 'Bolt 4G LTE', 'Baru', 4, 1500000, 2500000, 'admin', '2017-02-06 18:02:50', '2017-02-06 18:05:12'),
(6, '31247', 'Pawer Bank', 'Bekas', 3, 30000, 45000, 'admin', '2017-02-06 18:03:57', '2017-02-06 18:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `produk_pinjamen`
--

CREATE TABLE `produk_pinjamen` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info_produk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_peminjam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_pinjaman` int(11) NOT NULL,
  `tanggal_pengembalian` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_pengeluar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `produk_pinjamen`
--

INSERT INTO `produk_pinjamen` (`id`, `kode`, `nama_produk`, `info_produk`, `nama_peminjam`, `jumlah_pinjaman`, `tanggal_pengembalian`, `username_pengeluar`, `created_at`, `updated_at`) VALUES
(1, '2332112', 'Pensil', 'Baru', 'Sawalludin', 2, '', 'admin', '2017-02-06 18:04:21', '2017-02-06 18:04:21'),
(2, '33246', 'Bolt 4G LTE', 'Baru', 'Sawalludin1', 1, '', 'admin', '2017-02-06 18:05:12', '2017-02-06 18:05:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('user','admin') COLLATE utf8_unicode_ci NOT NULL,
  `jeniskelamin` enum('Laki-laki','Perempuan') COLLATE utf8_unicode_ci NOT NULL,
  `ttl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_tlp` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`, `jeniskelamin`, `ttl`, `alamat`, `no_tlp`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '$2y$10$9wJ5lqoJ6f3anZKm7f5Qc.zl4lRCAAywn4xGQF5odAWOvGeFl5i2i', 'admin', 'Laki-laki', 'Jakarta, 17 Agustus 1945', 'Jl. Raya No.13', '0895700316027', 'nD23tVyoQs6rpuiWISMiZLwf5Jgbdyfi5Nk6qijiFzLh4riISVhxIcBHU7Cq', '2017-02-06 14:21:14', '2017-02-06 18:05:41'),
(2, 'User', 'user', '$2y$10$Z2pBQhZLeFBS6wv0JUQonumRCvQ4KM9fPC8MfHST4xFQSGRk7Ic4W', 'user', 'Laki-laki', 'Jakarta, 17 Agustus 1945', 'Jl. Raya No.13', '082311019328', NULL, '2017-02-06 14:21:14', '2017-02-06 14:21:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `produk_keluars`
--
ALTER TABLE `produk_keluars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_masuks`
--
ALTER TABLE `produk_masuks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_pinjamen`
--
ALTER TABLE `produk_pinjamen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk_keluars`
--
ALTER TABLE `produk_keluars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `produk_masuks`
--
ALTER TABLE `produk_masuks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `produk_pinjamen`
--
ALTER TABLE `produk_pinjamen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
