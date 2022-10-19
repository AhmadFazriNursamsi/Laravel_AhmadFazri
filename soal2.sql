-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 20 Okt 2022 pada 00.28
-- Versi server: 8.0.30-0ubuntu0.22.04.1
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soal2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `hobi`
--

CREATE TABLE `hobi` (
  `id` int UNSIGNED NOT NULL,
  `person_id` int DEFAULT NULL,
  `hobi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `hobi`
--

INSERT INTO `hobi` (`id`, `person_id`, `hobi`) VALUES
(1, 1, 'Futsal'),
(2, 1, 'Soccer'),
(3, 1, 'Tenis Meja'),
(4, 2, 'Basket'),
(5, 2, 'Renang'),
(7, 3, 'Membaca'),
(9, 3, 'Game'),
(11, 5, 'Jalan-Jalan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int NOT NULL,
  `nama_pasien` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tlp` varchar(255) DEFAULT NULL,
  `id_rs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nama_pasien`, `alamat`, `tlp`, `id_rs`) VALUES
(5, 'asdasd', 'asdas', '23423', NULL),
(6, 'sdsadsad', 'asdas', '232', NULL),
(7, 'asd', 'asd', '2131', NULL),
(9, 'Ahmad Fazri Nursamsi', 'Kp.Muara', '0895341420108', NULL),
(16, 'Ahmad Fazri Nursamsi', 'Kp.Muara', '0895341420108', '1'),
(17, 'asdas', 'dasdas', '21123', '1'),
(18, 'Ahmad Fazri Nursamsi', 'jjj', '0895341420108', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `person`
--

CREATE TABLE `person` (
  `id` int UNSIGNED NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `person`
--

INSERT INTO `person` (`id`, `nama`, `alamat`) VALUES
(1, 'coba', 'cobafdsfd'),
(2, 'ana 5', 'arab'),
(3, 'Tari', 'Dakota'),
(4, 'Cak Gembul x', 'Surabaya gg gg hhhhhh'),
(5, 'Mc Greg x', 'Ujung Berung y'),
(6, 'SENTOT xx', 'Bandung yhhh'),
(7, 'Ni Made vv ff', 'Ujung Berung'),
(8, 'Nama1 xx g', 'Alamat1 yy fg'),
(9, 'Nama12', 'Alamat14'),
(10, 'ANNAA', 'Jakarta'),
(11, 'ANNA', 'Jakartaaa'),
(12, 'xx', 'zzz'),
(13, 'dika1', 'Bandung'),
(14, 'nama', 'Bandung 123'),
(15, '', 'Bandung'),
(16, 'ANNA 1', 'Jakarta 1'),
(17, 'ANNA 3', 'Jakarta 3'),
(18, 'SENTOT 1234', 'Bandung 123'),
(19, 'ANNAA', 'Jakarta'),
(20, 'Mc Greg 123', 'USA 123'),
(21, 'SENTOT', 'Bandung'),
(22, 'Ni Made 1', 'Bali 1'),
(23, 'Ni Made', 'Bali'),
(24, 'Cak Gembul', 'Surabaya'),
(25, 'Cak Gembul', 'Surabaya'),
(26, 'SENTOT', 'Bandung'),
(27, 'Cak Gembul', 'Surabaya 5'),
(28, 'ANNAA', 'Jakarta xx'),
(29, 'mk', 'mk'),
(30, 'judi', 'bandung'),
(31, 'judi x', 'bandung'),
(32, 'maman', 'cimahi'),
(33, 'ana 5g', 'arab xx vg'),
(34, 'Cak Gembul x', 'Surabaya b'),
(35, 'Muhammad Kemal Ilyasa Margana ', '1'),
(36, 'azx', 'xx'),
(37, 'test 2', 'terdddddddasdasd'),
(38, '', ''),
(39, 'Tari', 'Dakota'),
(40, 'Mc Greg', 'USA'),
(41, 'Ni Made vv', 'Bali'),
(42, 'Ni Made vv', 'Bali'),
(43, 'Ni Made vv', 'Bali'),
(44, 'Ni Made vv', 'Bali'),
(45, 'Ni Made vv', 'Bali'),
(46, 'Mc Greg', 'USA'),
(47, 'Cak Gembul', 'Surabaya'),
(48, 'ana 5', 'arab xx v'),
(49, 'Tari', 'Dakota'),
(50, 'ana 5', 'arab xx v'),
(51, 'ana 5', 'arab xx v'),
(52, 'ana 5', 'arab xx v'),
(53, 'nama yx', 'alamat yx'),
(54, 'Cak Gembul', 'Surabaya'),
(55, 'nama yx', 'alamat yx'),
(56, 'ana 5', 'arab xx v'),
(57, '', ''),
(58, '', ''),
(59, 'ana 5', 'arab xx v'),
(60, 'ana 5', 'arab xx v'),
(61, 'ana 5', 'arab xx v'),
(62, 'Nama1 xx g', 'Alamat1 yy fg'),
(63, 'ana 5', 'arab xx v'),
(64, 'ana 5', 'arab xx v'),
(65, 'Mc Greg', 'USA'),
(66, 'nama yx', 'alamat yx'),
(67, 'Mc Greg', 'USA'),
(68, 'ANNAA', 'Jakarta'),
(69, 'ana 5', 'arab xx v'),
(70, 'YAMAN NUR M', 'BALI'),
(71, 'Fulan', 'Fulan'),
(72, '', ''),
(73, '', ''),
(74, 'Yaman', 'Mnur'),
(75, '', ''),
(76, '', ''),
(77, 'ERWIN', 'BANDUNG'),
(78, 'ERWIN', 'BANDUNG'),
(79, 'SOLEH', 'JAWA'),
(80, 'Siapakah', 'Dimanakah'),
(81, 'Cak Gembul x ydg', 'Surabaya gg'),
(82, 'Test Nama', 'Test Alamat'),
(83, 'New Nama', 'New Alamat'),
(84, 'Levi', 'Paradise'),
(85, 'Eren', 'Paradise'),
(86, 'Mikasa', 'Paradis'),
(87, 'Cak Gembul x yd f', 'Surabaya gg gg'),
(88, 'Mahdy', 'Cimahi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tlp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`id`, `nama`, `alamat`, `email`, `tlp`) VALUES
(1, 'RS MARGONDA', 'jl Margonda depok', 'rsmargon@gmail.com', '0895359470798'),
(2, 'Ahmad Fazri Nursamsi', 'Kp.Muara', 'fazri18052002@gmail.com', '0895341420108'),
(6, 'Ahmad Fazri Nursamsi s sadasdas', 'Kp.Muara', 'fazri18052002@gmail.com', '0895341420108'),
(7, 'Ahmad Fazri Nursamsi', 'Kp.Muara', 'fazri18052002@gmail.com', '895341420111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fazri', 'fazri18052002@gmail.com', NULL, '$2y$10$C426AZkIw7DYkYmEru/uQ.LZ0lFoSHcmv3uXI9q9Qb3M64qcyRhbC', NULL, '2022-10-19 05:34:48', '2022-10-19 05:34:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `hobi`
--
ALTER TABLE `hobi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hobi`
--
ALTER TABLE `hobi`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `person`
--
ALTER TABLE `person`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
