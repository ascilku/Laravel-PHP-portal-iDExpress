-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2022 pada 08.56
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_idexpress`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `tanggal_absen` date DEFAULT NULL,
  `jam_masuk` time DEFAULT NULL,
  `ket_masuk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam_pulang` time DEFAULT NULL,
  `ket_pulang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_approv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id`, `id_akun`, `tanggal_absen`, `jam_masuk`, `ket_masuk`, `jam_pulang`, `ket_pulang`, `status_approv`, `tanggal`, `created_at`, `updated_at`) VALUES
(343, 2, '2022-04-01', '08:00:00', 'Normal', '17:30:00', 'Normal', 'Annual le', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(344, 2, '2022-04-02', '08:00:00', 'Normal', '17:30:00', 'Normal', 'Pengganti', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(345, 2, '2022-04-03', '08:00:00', 'Normal', '17:30:00', 'Normal', 'Izin Kedu', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(346, 2, '2022-04-04', '08:00:00', 'Normal', '17:30:00', 'Normal', 'Sick leav', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(347, 2, '2022-04-05', '08:00:00', 'Normal', '17:30:00', 'Normal', 'Izin Tida', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(348, 2, '2022-04-06', NULL, NULL, NULL, NULL, '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(349, 2, '2022-04-07', NULL, NULL, NULL, NULL, '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(350, 2, '2022-04-08', '08:00:00', 'Normal', '17:30:00', 'Normal', 'others', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(351, 2, '2022-04-09', '08:00:00', 'Normal', '17:30:00', 'Normal', 'others', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(352, 2, '2022-04-10', '08:00:00', 'Normal', '17:30:00', 'Normal', 'Married L', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(353, 2, '2022-04-11', '08:00:00', 'Normal', '17:30:00', 'Normal', 'Maternity', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(354, 2, '2022-04-12', '08:28:00', 'Normal', '17:55:00', 'Normal', '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(355, 2, '2022-04-13', '08:30:00', 'Normal', '16:31:00', 'Normal', '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(356, 2, '2022-04-14', NULL, NULL, NULL, NULL, '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(357, 2, '2022-04-15', '08:30:00', 'Normal', '16:41:00', 'Normal', '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(358, 2, '2022-04-16', '09:30:00', 'Normal', '12:03:00', 'Normal', '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(359, 2, '2022-04-17', '08:30:00', 'Normal', '16:34:00', 'Normal', '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(360, 2, '2022-04-18', '08:38:00', 'Late3Minutes', '16:43:00', 'Normal', '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(361, 2, '2022-04-19', '08:38:00', 'Normal', '16:34:00', 'Normal', '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(362, 2, '2022-04-20', NULL, NULL, NULL, NULL, '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(363, 2, '2022-04-21', NULL, NULL, NULL, NULL, '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(364, 2, '2022-04-22', '08:30:00', 'Normal', '16:34:00', 'Normal', '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(365, 2, '2022-04-23', '08:30:00', 'Normal', '16:34:00', 'Normal', '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(366, 2, '2022-04-24', '08:30:00', 'Normal', '16:34:00', 'Normal', '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(367, 2, '2022-04-25', '08:30:00', 'Normal', '16:34:00', 'Normal', '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(368, 2, '2022-04-26', '08:30:00', 'Normal', '16:34:00', 'Normal', '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(369, 2, '2022-04-27', '08:30:00', 'Normal', '16:34:00', 'Normal', '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(370, 2, '2022-04-28', NULL, NULL, NULL, NULL, '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(371, 2, '2022-04-29', '08:30:00', 'Normal', '16:34:00', 'Normal', '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40'),
(372, 2, '2022-04-30', '08:30:00', 'Normal', '16:34:00', 'Normal', '', '2022-05-01', '2022-05-06 08:55:40', '2022-05-06 08:55:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses`
--

CREATE TABLE `akses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `akses` enum('IT Admin','IT Support','Admin Super','Admin','Finance','Koordinator','Karyawan','User') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akses`
--

INSERT INTO `akses` (`id`, `akses`, `created_at`, `updated_at`) VALUES
(1, 'IT Admin', '2022-03-21 12:27:49', '2022-03-21 12:27:49'),
(2, 'Admin Super', '2022-03-20 23:14:53', '2022-03-20 23:14:53'),
(3, 'IT Support', '2022-03-20 23:29:52', '2022-03-20 23:29:52'),
(4, 'Admin', '2022-03-20 23:35:03', '2022-03-20 23:35:03'),
(5, 'User', '2022-03-21 00:15:04', '2022-03-21 00:15:04'),
(6, 'Karyawan', '2022-03-22 00:30:58', '2022-03-22 00:30:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akses` bigint(20) UNSIGNED NOT NULL,
  `id_tema` bigint(20) UNSIGNED DEFAULT NULL,
  `id_perusahaan` bigint(20) UNSIGNED DEFAULT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('aktif','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `id_akses`, `id_tema`, `id_perusahaan`, `nik`, `password`, `show_pass`, `email`, `no_hp`, `token`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, '00000', '$2y$10$xkz6CwzsFPkMhRe.OlLLmub5JgqUeXkdXVJfrNZOdBh0ELOOfMMFS', '00000', '00000@gmail.com', '00000', NULL, 'aktif', '2022-03-21 12:27:49', '2022-03-20 23:15:37'),
(2, 3, NULL, 1, '2024000022', '$2y$10$W53gOyRygtIRfa8y70t1ZO/DgGRkLJ2lt6ymhzyFshXv0yHcBwAde', 'ITSupport_4806', 'nurkaidir@gmail.com', '089677635194', 'IT Support_$2y$10$ZJ1fdJwwzNQw889NruWyA.MJwWiyRaXKEq1Xyxoti4RFwQ3Z6i4E2', 'aktif', '2022-03-20 23:29:52', '2022-03-24 19:23:47'),
(3, 4, NULL, 1, '2024000055', '$2y$10$pfP7VaGvQtjtg6lMPreeJemKvfMe9Thi3Xm1n0DbX2Jo02Q1dgYJi', 'Admin24_54149', 'diana.theresa@indokaisa.com', '0895806730889', 'Admin_$2y$10$Mf5Jysyo7C97PjRh6Axp0.UG291JmKuRmLWTvGFjQsaNeAOL7qAUO', 'aktif', '2022-03-20 23:35:03', '2022-05-14 10:10:52'),
(4, 4, NULL, 1, '2124000047', '$2y$10$jVLVoXn653oWfAyQ4WVmwOScbcz7VjR2xqn5tA2KSOP4Min0fEfvy', 'Admin24_91978', 'fannylempang@gmail.com', '085241080022', 'Admin_$2y$10$9qGt20TIstOSFXht9klDGuDZezhsxAT4JAFJALLvURXsYh51sPKRe', 'aktif', '2022-03-20 23:51:45', '2022-03-30 23:00:56'),
(5, 5, NULL, NULL, '7371090310990006', '$2y$10$9RDX6tFHi1suSV9WBVWL9uISU.S2v4hlN3Loz7W3E22XQTEUiVoUC', 'User_71296', 'ahmadaliwinandar@gmail.com', '082348377926', 'User_$2y$10$DkLvwXI3KXCxIOIz6u7qfeYHBf4yoE8RJaOIKLbVZFihi1zJOtjxG', 'aktif', '2022-03-21 00:15:04', '2022-03-21 00:15:32'),
(6, 5, NULL, NULL, '7305011508960001', '$2y$10$AVDUsS6pj/3mxe9JKnvjI.ckGmYFj/uog8xPacavKm1uZZzy4dng6', 'User_22924', 'agusnatsir@hotmail.com', '082344773288', 'User_$2y$10$7feznXB17bAYxKixcPlzA.nKmMkvAKDXIE7fyZsJ0qwOFwFMPROU2', 'aktif', '2022-03-21 21:26:23', '2022-03-21 21:27:02'),
(7, 5, NULL, NULL, '7371124308990005', '$2y$10$UQGb6zLhCvtMI1tw/EOLTOs9pM.zA68.nIe3ysAu.n08Db6KV9Kqe', 'User_58589', 'syamsiahn50@gmail.com', '089652752152', 'User_$2y$10$iglYsruAODssyyIHTTjfNeEnkqIyEQ1gU9hCN3tZg6EXcojGEDNGW', 'aktif', '2022-03-21 21:30:01', '2022-03-30 05:54:07'),
(8, 6, NULL, 1, '2024000001', '$2y$10$zPsvG7k8T.Oogd0TMc5GN.Bi09PIALfJQTbgv3kfc63Iubw7kgO22', 'Karyawan_63961', 'indraaditya835@gmail.com', '085241082793', NULL, 'aktif', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(9, 6, NULL, 1, '2024000002', '$2y$10$Vrj9DcLQwpM8p6XlXvriOecQoCbVPS6.SriPnzeep52vjaE33rO.G', 'Karyawan_16530', 'irawatimargareth@gmail.com', '081340638488', NULL, 'aktif', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(10, 6, NULL, 1, '2024000003', '$2y$10$k5eFcJLjBJ1SZYygHH8wXur3sVvQ5UDOOfRM2LRQNoeL4WwO06hjC', 'Karyawan_21104', 'asucihariyatiputri1@gmail.com', '085397277600', NULL, 'aktif', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(11, 6, NULL, 1, '2024000005', '$2y$10$7ENNIWrAsYF.IVdiF1brluJsseVamZGNI/0Cj1Uxl6fWyooM09qzG', 'Karyawan_52462', 'ilhamrmb04@gmail.com', '082348817959', NULL, 'aktif', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(12, 6, NULL, 1, '2024000006', '$2y$10$kkvP/Sd9U.ZDJUZvlBsaK.utQnWqkEnjnL.QdIF0ukp2oi9g7sHcy', 'Karyawan_91282', 'armanbaharuddin1207@gmail.com', '082275604070', NULL, 'aktif', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(13, 6, NULL, 1, '2024000007', '$2y$10$TUfLvqtZ4OaBJzg3ROjAD./3k0.aV.Is3I8x.HMMyi7.TH5KL4h0i', 'Karyawan_4486', 'didipurwanto7667@gmail.com', '082189906883', NULL, 'aktif', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(14, 6, NULL, 1, '2024000008', '$2y$10$/oJSf54u8XDtk95JMu1ZQuF1vEMnCbLzG.C44lhaHekH8OFIpRGhO', 'Karyawan_71454', 'rajabmuh2@gmail.com', '082349513544', NULL, 'aktif', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(15, 6, NULL, 1, '2024000009', '$2y$10$tC8ZzAIuOo9Pyj4mUfQTx.a.hNzaXi1Bhcs0KW4Odfxp0pO/KF1Ee', 'Karyawan_82534', 'zatraperdana20@gmail.com', '085242221694', NULL, 'aktif', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(16, 6, NULL, 1, '2024000010', '$2y$10$RvvIACJjwAaRPguspF01TOIRcOTIf7Q7/qahbeRBzb12fwzULu0eW', 'Karyawan_97329', 'wahyuidexpress@gmail.com', '0895351694433', NULL, 'aktif', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(17, 6, NULL, 1, '2024000011', '$2y$10$ZhprLjR/mandU9QRNWCAGe0gBfDq2uKg7PKMiGfIklPIKdBV14V/a', 'Karyawan_79118', 'ashar.alamsyah@gmail.com', '085394277556', NULL, 'aktif', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(18, 6, NULL, 1, '2024000012', '$2y$10$pIeLpmShLthv4gGRDwWhYu4GzxA2Pi2pddBsHFEkEYUWFvVv8HOYW', 'Karyawan_39699', 'normaminion000@gmail.com', '085342998033', NULL, 'aktif', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(19, 6, NULL, 1, '2024000013', '$2y$10$7CR2fxTmcK09jgZm2kQluO.N7GCUD6Rq0zKN1r0dj5WUbcPB/hjea', 'Karyawan_3856', 'darulhuday03@gmail.com', '085342690986', NULL, 'aktif', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(20, 6, NULL, 1, '2024000014', '$2y$10$.eCbumkOvrXU2LwAUsNU5e52Au9kMPHvaUtpRbEGGLng.ZL3e6kqG', 'Karyawan_79825', 'm.sultan201546@gmail.com', '087811161595', NULL, 'aktif', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(21, 6, NULL, 1, '2024000015', '$2y$10$6/eUPNl1eypkORGTQXoiLeh56UmbhjqwfMcbxTZwwZQsH2.rjdovG', 'Karyawan_86547', 'taufiqnuramanah35@gmail.com', '085399821996', NULL, 'aktif', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(22, 6, NULL, 1, '2024000016', '$2y$10$xYfky7h7PBbyAZ0apEBYPuitVy3vVrTd5a4oOSC642idUOYFbqJ8K', 'Karyawan_12294', 'alam.apangerang@gmail.com', '0895803335018', NULL, 'aktif', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(23, 6, NULL, 1, '2024000017', '$2y$10$1kAp39qd8xaa9UpbqYy7m.Lwptcfhjz7Hvpf3AcEgTe6uPgyoHwTS', 'Karyawan_80462', 'desiranti34@gmail.com', '082292823917', NULL, 'aktif', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(24, 6, NULL, 1, '2024000018', '$2y$10$oyXRBpwS5XeDGR555Yl31uQErYQmhyUAN0jms5k0HA7jY2CaPOxb2', 'Karyawan_41183', 'inyoman.suindra@gmail.com', '085745716917', NULL, 'aktif', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(25, 6, NULL, 1, '2024000019', '$2y$10$5uQG3Luw6VsDco1iscD3zOqzc3WXj6laYb2vn.40kk.Zov5I5yveC', 'Karyawan_54602', 'ervandisaptasuryo@gmail.com', '085398844484', NULL, 'aktif', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(26, 6, NULL, 1, '2024000020', '$2y$10$LWNH8OwieYPEwN9uU9KMPOoDFFIAD9Qk9M8yjtesICi9KzIABa2.2', 'Karyawan_94595', 'arhyhidayat6@gmail.com', '085294539224', NULL, 'aktif', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(27, 6, NULL, 1, '2024000021', '$2y$10$HOT3b/juS.ysbUqJm4/zUO/6bWwoNW7Y3amnVv0hj60L6A1m9gq2m', 'Karyawan_30219', 'muhammadnurilahi97@gmail.com', '082346036992', NULL, 'aktif', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(28, 6, NULL, 1, '2024000023', '$2y$10$vMQC5wVfhrMicdA6ptJD8ekvbn213Hp.PWKnPOLVAQLMPyZB99sk2', 'Karyawan_41148', 'ilo.illank40@gmail.com', '081241731064', NULL, 'aktif', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(29, 6, NULL, 1, '2024000024', '$2y$10$KgoQSGrvAJQVPLgVWDo1e.5JYfFa./8H8/bPDERjfCATxclHbPo5O', 'Karyawan_80038', 'ansyarabdullah92@gmail.com', '085399364334', NULL, 'aktif', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(30, 6, NULL, 1, '2024000025', '$2y$10$xC5ADIC5rudNlTQEO9Ag3O3SryEI8rLhgP/.oLXnJ2CuaaFNjNH0u', 'Karyawan_1827', 'suucialm2121@gmail.com', '082153690027', NULL, 'aktif', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(31, 6, NULL, 1, '2024000026', '$2y$10$OAJVBj3aX9IsriBZygW9q.7bK8wjxxOIBKv4Eq1hBrUqO03nuO7XK', 'Karyawan_50348', 'dariatmorahman123@gmail.com', '085399777415', NULL, 'aktif', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(32, 6, NULL, 1, '2024000028', '$2y$10$N4VoxQVCpUX4cUmOKDZRi..UKmkef3tzkvku3XyJaYFGqiKt4F.3m', 'Karyawan_79390', 'feliciatalumewo0211@gmail.com', '082190605194', NULL, 'aktif', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(33, 6, NULL, 1, '2024000029', '$2y$10$nsGunxxfb7wA.ToByMuFgeZjHmsllm.7k7KIaMMIDfEni4LpaGbLi', 'Karyawan_34466', 'andymuhiwanramadhan@gmail.com', '089627773308', NULL, 'aktif', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(34, 6, NULL, 1, '2024000030', '$2y$10$/jZCcAtRSlRGl59AOiNH8eFS6vL3hw0X1kd6fJ4vbRyuAzBjKWpB.', 'Karyawan_68019', 'alfan15101995@gmail.com', '082293893322', NULL, 'aktif', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(35, 6, NULL, 1, '2024000031', '$2y$10$ofXvTYCmNDQ/DM5dPGbZH.tQrPhBT599oPRgIAt3Cap9RtdOEiGRm', 'Karyawan_91327', 'maulidafatimah11@gmail.com', '082122122673', NULL, 'aktif', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(36, 6, NULL, 1, '2024000032', '$2y$10$adxKmcA3IUTVdIUTwTC0cOK5Ma.KuLrLmx3Oym5SnF2RwZkMplTue', 'Karyawan_6129', 'arievictor21@gmail.com', '087703592780', NULL, 'aktif', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(37, 6, NULL, 1, '2024000033', '$2y$10$2cMLPP2HEor5rmaQns6WH.956arStaWMIcUGcpKdn4Va/vFnn1h5W', 'Karyawan_47115', 'rusdianti1010@gmail.com', '085211115341', NULL, 'aktif', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(38, 6, NULL, 1, '2024000034', '$2y$10$phyGXUp00K4SeRgmD94tEOK7OxBpv/3VF7tQ79tHtGrnLhlc2uv42', 'Karyawan_43574', 'rwyeppe@gmail.com', '085349939779', NULL, 'aktif', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(39, 6, NULL, 1, '2024000035', '$2y$10$QZq7SS.a9EsBgSvOLuvQtuUPMp2njWJwuq0Swm5LIuGbtDaU8rzaS', 'Karyawan_5117', 'jumawanalfadillah00@gmail.com', '082252392259', NULL, 'aktif', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(40, 6, NULL, 1, '2024000036', '$2y$10$g/pFH9xJgSpumpz79/AUwOcfgio3fG0hyfw3oMo0sIeW6kxPUPVpe', 'Karyawan_25263', 'dadangdarmawan163@gmail.com', '085656740293', NULL, 'aktif', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(41, 6, NULL, 1, '2024000037', '$2y$10$VXxfnd0Aug6SDWl4QDVFFOadcf.zzzVc2YzR6ZTaLFZDivcAse7qi', 'Karyawan_72243', 'ryansafutra17@gmail.com', '082259428576', NULL, 'aktif', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(42, 6, NULL, 1, '2024000038', '$2y$10$m8rql9.sUSt61yby5ZUiV.75XDgwjqAastwBj3gqDOB5On5KPASGS', 'Karyawan_56449', 'mamangadvan@gmail.com', '082293233760', NULL, 'aktif', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(43, 6, NULL, 1, '2024000039', '$2y$10$WlWyiIXEnKPklo/bEjD/Oe6Bi9o2/ntQA2ZywE1KswENkMWC5KMzy', 'Karyawan_96361', 'mfadlan009@gmail.com', '081526126921', NULL, 'aktif', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(44, 6, NULL, 1, '2024000040', '$2y$10$VpV7QzItV.1JTwa.5DCS7e3vKIxlZ2A.f9icz1Dt055suZbnMWAhu', 'Karyawan_51025', 'miksanmuis@gmail.com', '085255275149', NULL, 'aktif', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(45, 6, NULL, 1, '2024000042', '$2y$10$N7GVMXlFXym2OLxBX4rj1eM.TZHS4xekLG5QXEq/JYMQlkq6OvLk.', 'Karyawan_63514', 'afdalalias263@gmail.com', '081527947926', NULL, 'aktif', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(46, 6, NULL, 1, '2024000043', '$2y$10$SrHJwbjRI.78i1XLG4cI/uEZZY94Xt7kB2WYKI5LDuELbBlnlRyoW', 'Karyawan_90623', 'takuyauya20@gmail.com', '082191455615', NULL, 'aktif', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(47, 6, NULL, 1, '2024000044', '$2y$10$Oke1khM4H./XZ8gMZD4ym..R2PRd0vz3WFHe1TolfHaJGOYfDGpaK', 'Karyawan_64119', 'rizalpraditya4@gmail.com', '085399889682', NULL, 'aktif', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(48, 6, NULL, 1, '2024000045', '$2y$10$fdyf30HarW0.GWzY6Z0fTebeM8o1VV1Yvo/CwgGM0RD6G92/Al7KO', 'Karyawan_5858', 'rusdinrawa@gmail.com', '085399268152', NULL, 'aktif', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(49, 6, NULL, 1, '2024000046', '$2y$10$V0yatS7k8uEyiB4VF53LJuq.WSAFlZGSPo5ht.2bIQFryFwlQxa46', 'Karyawan_49035', 'luciana1127@gmail.com', '085396990819', NULL, 'tidak', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(50, 6, NULL, 1, '2024000047', '$2y$10$CFpVZD45jjJ.TTwi8U8VWefuMgseDKWCFpvChoQ51U4o9VOMXBJn2', 'Karyawan_52857', 'indrafiraldi17@gmail.com', '085255533662', NULL, 'aktif', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(51, 6, NULL, 1, '2024000048', '$2y$10$ZBSocku5/086NB.iqDuNmeNdrNp23m2CKR9Jp.z0jM/Uuvb573XzC', 'Karyawan_40129', 'fajarrusli925@gmail.com', '082396310233', NULL, 'aktif', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(52, 6, NULL, 1, '2024000049', '$2y$10$QODPAW6lpYf7Ph/WTqdZB.ruOe4JVj0YAaKMFOjYiFwYwMXLdz/Vm', 'Karyawan_66158', 'abdulharis@gmail.com', '081241435250', NULL, 'aktif', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(53, 6, NULL, 1, '2024000050', '$2y$10$r4tBj4hdRANi/DV23R93mesuwRT3/NwgiKzZhAUl0h1eEE9EwAGpi', 'Karyawan_14651', 'riskaxtahir@gmail.com', '082191918755', NULL, 'aktif', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(54, 6, NULL, 1, '2024000051', '$2y$10$y9bsveIykQQlOv5HOJ5IpuIux4fbnSA82rU2O1EfC5e7hNR0cP0Am', 'Karyawan_4752', 'rahimrasidaruhaya.ar@gmail.com', '082349789986', NULL, 'aktif', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(55, 6, NULL, 1, '2024000052', '$2y$10$kKiumtOTFsdZ7wqgaO/A1uXUl49m.4AzgUuT.PntdRUnyQDUs9A4a', 'Karyawan_31909', 'rxbbymxnxxrfx@gmail.com', '085283086969', NULL, 'aktif', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(56, 6, NULL, 1, '2024000053', '$2y$10$EV.eowa5yrTlmeEv/xggM.MVMq6.FY6oMTV/dhfWGJ4aRDW6d0JGu', 'Karyawan_81835', 'syaharuddin002@gmail.com', '082346985982', NULL, 'aktif', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(57, 6, NULL, 1, '2024000054', '$2y$10$EoO7tcDo.6qBZlFu5dU8y.4UNOMUbIj45tZXoHeYlOYQijRBb4uGu', 'Karyawan_12762', 'hasna@gmail.com', '082290738412', NULL, 'aktif', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(58, 6, NULL, 1, '2024000056', '$2y$10$6sN3Kf7IblvNy6o06Gy1ku34M6E7hlsbgreGertJRSAl7mSub6wC.', 'Karyawan_50893', 'shandimulya06@gmail.com', '081343838531', NULL, 'aktif', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(59, 6, NULL, 1, '2024000057', '$2y$10$2O.Sps6GEnBARqItDPHjHealqQJEyaYVxXXtaReNRLveeeY0DTjVu', 'Karyawan_11515', 'mutasan8@gmail.com', '082393046336', NULL, 'aktif', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(60, 6, NULL, 1, '2024000058', '$2y$10$7n1u0SZNNBmYvDpF6G3hm.JjujZF34tnGUZJ4YPSnRHZ1gxBNm21W', 'Karyawan_57768', 'winndiyanni26@gmail.com', '085145455354', NULL, 'aktif', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(61, 6, NULL, 1, '2024000059', '$2y$10$PeWJD40ACWYV1lf3xJHwE.8.lTMqFrGYmVZIr15Z8Q9TIjxzSS0om', 'Karyawan_21728', 'sofyanmelani44@gmail.com', '085340021970', NULL, 'aktif', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(62, 6, NULL, 1, '2024000061', '$2y$10$M5LIRFxiOyHbnsB0noglg.dNwbeKKVxpn.uLl28NPwK78Q6UU7C..', 'Karyawan_27444', 'kasrinramdani@gmail.com', '082293778218', NULL, 'aktif', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(63, 6, NULL, 1, '2024000062', '$2y$10$zI7inN2Ma4OFOiPMqoGxeee/F6fX6vmN24U2j90X8SWX3yxi6zvTm', 'Karyawan_14662', 'yektitriayunita@gmail.com', '082218878715', NULL, 'aktif', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(64, 6, NULL, 1, '2024000063', '$2y$10$ck8ZlN97GKEYyFD89QBcke.DOazV3.eACrcG65RXWp2DysgI9gGQm', 'Karyawan_22209', 'andiwawan151115@gmail.com', '085399288691', NULL, 'aktif', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(65, 6, NULL, 1, '2024000064', '$2y$10$1LW/D0gmEQDPi9oYiV8gIu/QdgSt8PGCJ/2gwryfZztW.hnRgHQga', 'Karyawan_35442', 'Enhotnozt@gmail.com', '081340206670', NULL, 'aktif', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(66, 6, NULL, 1, '2024000065', '$2y$10$IPRnq1fzDMP4dIC3kRjbkOp9npP59HvI3P96R6htT04uLQJT8TFZu', 'Karyawan_24496', 'algazaliahmad1992@gmail.com', '082296361342', NULL, 'tidak', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(67, 6, NULL, 1, '2024000067', '$2y$10$atEiMclqScfoBM9xbOquPO8lq9480NvZovvwkjbmhqVH6e32oFgCy', 'Karyawan_73408', 'andisultan683@gmail.com', '082194364460', NULL, 'aktif', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(68, 6, NULL, 1, '2024000069', '$2y$10$ybd/EtZ80GqJZGLUX9MQveX/nOcb9v.INllZvC3gtSGIe/yJyZ/FS', 'Karyawan_95994', 'renaldink@gmail.com', '085244567318', NULL, 'aktif', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(69, 6, NULL, 1, '2024000070', '$2y$10$lpBknEOcj0a7TP/YzxMusOWLIkpyTiZ1Hx0NjO1sUiuWqG.i8XMra', 'Karyawan_80278', 'fandyji14@gmail.com', '082348800568', NULL, 'tidak', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(70, 6, NULL, 1, '2024000071', '$2y$10$DGmX9PAGWMSeepCfNyzaHOz.8X0.8ndtA1DLfdXIJ2XQVYsx669n2', 'Karyawan_70101', 'gaffarhamdani18@gmail.com', '085398622266', NULL, 'aktif', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(71, 6, NULL, 1, '2024000072', '$2y$10$FLMsJkWa6WHRzRss8mHvPupwBSKnOdYcxhgxcfnBRVavNB7I6q53y', 'Karyawan_45216', 'za5401682@gmail.com', '081354717969', NULL, 'aktif', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(72, 6, NULL, 1, '2024000073', '$2y$10$ck0dLxdBh83xBWmAJdBieuz.QjPmGzVJ2x1HQ/CYlEN37bviM5iXi', 'Karyawan_79467', 'usmansix12@gmail.com', '082219222786', NULL, 'aktif', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(73, 6, NULL, 1, '2024000074', '$2y$10$b/WmPVQMDWnpGd4/AMd1wuhrrFKMQS2PCl.9Z9PIOHhqzNKJ6T08C', 'Karyawan_60495', 'jahidmujahid12@gmail.com', '085299550321', NULL, 'aktif', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(74, 6, NULL, 1, '2024000075', '$2y$10$0lCHxtyE25mThhRBDiCh8uS7qTKn1yVedwFtGCNqevI7YqA9EVidS', 'Karyawan_63631', 'farhanwarhan@gmail.com', '085394599060', NULL, 'aktif', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(75, 6, NULL, 1, '2024000077', '$2y$10$cGPYb5Lm3quhjBK0Iddjku28TAFvu4O6xyrbYTqLSJebyC599VdxK', 'Karyawan_56890', 'Nugrahatri33@gmail.com', '085251782810', NULL, 'aktif', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(76, 6, NULL, 1, '2024000078', '$2y$10$b12E72esfGbWj/LRuPfJDOxbibD6A1tgsDSlhaSzm2RW2xdAy9mrm', 'Karyawan_87833', 'aditiad150198@gmail.com', '082346686652', NULL, 'aktif', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(77, 6, NULL, 1, '2024000079', '$2y$10$UjNfxlM4ZRslp0B07SrNkeKCtKK3pEAP4dAdMuP7c.eWkmYoyCEpS', 'Karyawan_49755', 'firmanilahi20@yahoo.com', '082153717808', NULL, 'aktif', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(78, 6, NULL, 1, '2024000080', '$2y$10$HHNmtl1QUywPFYcKGzlz4OLakcy6D1yCX0CfbTwnEmghGxhfbnKDu', 'Karyawan_50883', 'rina26311@gmail.com', '081390637517', NULL, 'aktif', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(79, 6, NULL, 1, '2024000083', '$2y$10$5C3A96IE./w3wd5jEBJ9tO04HVrFRkKy7.YaBRwPDqiNRWpCiM3se', 'Karyawan_16258', 'lalisalestari@gmail.com', '085241323342', NULL, 'aktif', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(80, 6, NULL, 1, '2024000084', '$2y$10$afzPYELDeJXMxMobEB9Nxud8fUBiAyIsiFDgKYPPJKK./R/tYO.PK', 'Karyawan_9896', 'retnoayupratiwi16@gmail.com', '082344678698', NULL, 'aktif', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(81, 6, NULL, 1, '2024000086', '$2y$10$oMUyCdg.go8s9HxvgJgCn.4U/e30m5q10bbVHmgqAImp57Xayk67e', 'Karyawan_39482', 'hamzahalfatih97@gmail.com', '085348271706', NULL, 'aktif', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(82, 6, NULL, 1, '2024000087', '$2y$10$hzHBMWS5cNOuSodf0YwWwuZ4/9M77Gghvk.8g2fIJ9.nLlHyRManW', 'Karyawan_37086', 'ferryfadly.989@gmail.com', '085397265989', NULL, 'aktif', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(83, 6, NULL, 1, '2024000088', '$2y$10$.jWBnJ5TV6tME2pekSVLhOug2vOQJmV0KJdZblIf/q9bNUL/PI5hW', 'Karyawan_23231', 'Muhammadaksan101@gmail.com', '082191343354', NULL, 'aktif', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(84, 6, NULL, 1, '2024000090', '$2y$10$JqW43rkZD12tUfqsrF11SeqYgBtp7zuN6OntU61To2whpzbKkgB..', 'Karyawan_49320', 'nannisumarni.1@gmail.com', '082343965896', NULL, 'aktif', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(85, 6, NULL, 1, '2024000091', '$2y$10$KdrK9hGaZETMTE3.tOFvtem6VteC1V12RxyXS6AjQ5mt8pSUZyP3a', 'Karyawan_12340', 'hertiknoekapradana@gmail.com', '085216975888', NULL, 'aktif', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(86, 6, NULL, 1, '2024000092', '$2y$10$7AqI7NEp3r3wZRA.0HOAR.T5.JVcInh/QH6fZEZbIRScZJizJNokq', 'Karyawan_45921', 'abdulwahidode@gmail.com', '082383395174', NULL, 'aktif', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(87, 6, NULL, 1, '2024000093', '$2y$10$AwntHXAq5atiPxCpiiPEqeaFc1bfTv3TEkWPsFxSxc/ZXPylTbO4i', 'Karyawan_8768', 'bayularoez17@gmail.com', '085342184090', NULL, 'aktif', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(88, 6, NULL, 1, '2024000094', '$2y$10$G1JyVRdLCdvIASAfZtnWreyNwwAu7.GhWZBgrPA45Q7Aa5nTC2p62', 'Karyawan_40410', 'nurfadlhy713@gmail.com', '082293480292', NULL, 'aktif', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(89, 6, NULL, 1, '2024000095', '$2y$10$ATJIKsuFQItaIthtiYXGPurxbHpa67uAtHM6jaRfo9H/J7f9vMBlq', 'Karyawan_60027', 'ardhy.aja99@gmail.com', '085249614555', NULL, 'aktif', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(90, 6, NULL, 1, '2024000096', '$2y$10$v8B/xRBXFgICoynXjlXqiuVCJd3UiuPMJLuEf2UfAWfvqxHYjoFZC', 'Karyawan_52818', 'lismardianasamsir97@gmail.com', '082293577152', NULL, 'tidak', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(91, 6, NULL, 1, '2024000097', '$2y$10$ilR7a6PcedFzPbE2lUadM.J7bu.9Dhf80KfGnmEkZutR3QSFIs6VO', 'Karyawan_57771', 'ridha.muhammad79@gmail.com', '082291877000', NULL, 'aktif', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(92, 6, NULL, 1, '2024000098', '$2y$10$zr3KucFCGWY3MxLy0yPKLeJojamQIRcrsCapm9lLGBtXGySpRtdxC', 'Karyawan_44803', 'nikomangayuastuti13@gmail.com', '082348049119', NULL, 'tidak', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(93, 6, NULL, 1, '2024000099', '$2y$10$FAi50wheCTTfv5xuts26S.RxA9eBl18rYfw2J3PiYw6dquN2gD.5i', 'Karyawan_53690', 'Bgsdhani@gmail.com', '082292310764', NULL, 'aktif', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(94, 6, NULL, 1, '2024000100', '$2y$10$ML5XAuJdXLzDrVNP0GXdoOOP1HZtfdQI2Rb2d9FYxmlThoK3WqJse', 'Karyawan_13091', 'muhiqbalhafid5@gmail.com', '089676063965', NULL, 'aktif', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(95, 6, NULL, 1, '2024000101', '$2y$10$DYrOd1FQ3CehcHzk6tY5L.k5s7w7gwAmIbSCmgz6lFLw7PB4e5xnK', 'Karyawan_84421', 'fatribaal95@gmail.com', '089517481849', NULL, 'aktif', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(96, 6, NULL, 1, '2024000102', '$2y$10$oEG/4BJm7v.ubYuAEsTWAOM6Ezva9gV/KpYPqJSewk2hMDUIZt.fi', 'Karyawan_41653', 'febyolaaa12@gmail.com', '085242303474', NULL, 'aktif', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(97, 6, NULL, 1, '2024000103', '$2y$10$w5x2nWe5VOZG399gbdmFAO8oPF2HorE49HmLT7uNkt.UWO4IV2gRK', 'Karyawan_58045', 'Rickydarmawan112233@gmail.com', '081317621769', NULL, 'aktif', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(98, 6, NULL, 1, '2024000104', '$2y$10$wN5Hycg2J97EFMeiClPYmOq3zYfp47Bzci5d.l16BKLN.7keQftcG', 'Karyawan_55009', 'Amirfath@gmail.com', '08994444408', NULL, 'aktif', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(99, 6, NULL, 1, '2024000105', '$2y$10$b6dLXRAnxP3YQ2ycaOUYlOi.LO6k8HN/ILyHGFOq7zsaaBCDPAT1.', 'Karyawan_55772', 'anciarcha330@gmail.com', '085340611664', NULL, 'aktif', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(100, 6, NULL, 1, '2024000106', '$2y$10$D27hSuviY0D5dqvwQ1hmXuaVNHjBP2scEAk9uaDkraRJ77XgDPvKy', 'Karyawan_75829', 'sampoerna3393@gmail.com', '082259749303', NULL, 'aktif', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(101, 6, NULL, 1, '2024000107', '$2y$10$osbP/A06YLQ2bK09aMgVXuLaCfOmXY2NPX74y.SvGPq8WfryGvRcS', 'Karyawan_86715', 'Sahrulhs1231@gmail.com', '081527750437', NULL, 'aktif', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(102, 6, NULL, 1, '2024000108', '$2y$10$VM/rXA70OUv9KoXy4VZezuvQn8/w8CcKRx2J3.3gHA6Mjfoan66ba', 'Karyawan_69268', 'haerulnasir010715@gmail.com', '082195488387', NULL, 'aktif', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(103, 6, NULL, 1, '2024000109', '$2y$10$D3foTs3HAf4BQvYxuvEmrOc1kWQD8yIQd2nx.OiWAMBtlfEjdSFs6', 'Karyawan_6165', 'putrariananda93@gmail.com', '081243704123', NULL, 'aktif', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(104, 6, NULL, 1, '2024000110', '$2y$10$OdgRiGM1JuePlWN6Im5zgesRdr1v7y6VHzYAR15aFfHrSoUVPwrya', 'Karyawan_18148', 'arhampunyamau@gmail.com', '085240226550', NULL, 'aktif', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(105, 6, NULL, 1, '2024000111', '$2y$10$7iLefy6rIAqCCICtRPzro.Oc6i6uqzas5QM.YghC5y8xlrSDGoQwC', 'Karyawan_47982', 'arsyasyam@gmail.com', '085212357295', NULL, 'aktif', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(106, 6, NULL, 1, '2024000113', '$2y$10$PIiFjo7MZuzxYczA6p8kXeZ7keqpChX4fQwDZXKfUtGW3qzS20Lb.', 'Karyawan_51773', 'devipermata.s0996@gmail.com', '082343675779', NULL, 'tidak', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(107, 6, NULL, 1, '2024000114', '$2y$10$2ONBRlnXdjGbfl/y.nph6uBmgmPrNSyH2bhrwuRa19Yhl9vvDXCA.', 'Karyawan_77957', 'hardilal97@gmail.com', '081244962811', NULL, 'aktif', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(108, 6, NULL, 1, '2024000115', '$2y$10$T1S3cGUa68aCt872CbobLOAlfBuwvmrfOw2y0MHPeldLNakoqKqBS', 'Karyawan_26600', '26gilangfajar@gmail.com', '085341875511', NULL, 'aktif', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(109, 6, NULL, 1, '2024000116', '$2y$10$oU7PbGAbI3kMpCTxYCHOuuC/5zsmK3jQ5EY/GvPvGsgnvCqIe4GkC', 'Karyawan_6390', 'fajarmaulana.0805@gmail.com', '082348694574', NULL, 'tidak', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(110, 6, NULL, 1, '2024000117', '$2y$10$VpfBXodL1QHVh50PH3uMU.AjhXAxDjCZPjKM2nL2BDM5NRf3m6HpS', 'Karyawan_96746', 'irhampatta25@gmail.com', '085395538431', NULL, 'tidak', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(111, 6, NULL, 1, '2024000118', '$2y$10$GbF.pPR8oCG0NTfgZGxXX.c7RjWAxsALpvDV/HbuK5zXn5N.oFDjG', 'Karyawan_64169', 'Suardim80@gmail.com', '085340495467', NULL, 'aktif', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(112, 6, NULL, 1, '2024000120', '$2y$10$q/n4TvIQSXMULyv5HHGe2OfZf3AKBBSH6JXvOxbScK/Pk8cv2Jg/G', 'Karyawan_1772', 'Irsanmaulanafreedom@gmail.com', '085342846300', NULL, 'aktif', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(113, 6, NULL, 1, '2024000121', '$2y$10$sf1SKaLWL4hLwgjPiIpbleFQqND7W.wK3OAbgPySkFtyZ0TpkaEFm', 'Karyawan_63178', 'ardiantosanpe@gmail.com', '085146100409', NULL, 'aktif', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(114, 6, NULL, 1, '2024000122', '$2y$10$zwHTjtjVhVD0qUHfLCb2H.x0pRWrI3ySiEP0VhnpjFshYxjkyYwKG', 'Karyawan_20067', 'Pardia815@gmail.com', '082250195527', NULL, 'aktif', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(115, 6, NULL, 1, '2024000123', '$2y$10$IgNiHNXn1Yt9p.UbK89lIuzdTj9mPk0lVpafsqlu8P2MBjQVrAMWO', 'Karyawan_27000', '030495syamsul@gmail.com', '089671827219', NULL, 'aktif', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(116, 6, NULL, 1, '2024000124', '$2y$10$4yrB.G7mkntjSLwV8Ylm3OH12sO0vLxnezqDiFgZL7D4QMxKkjH0G', 'Karyawan_81684', 'ridwanedy100@gmail.com', '089623250106', NULL, 'aktif', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(117, 6, NULL, 1, '2024000125', '$2y$10$7qZxuxLx1tpBsukaAB639euQQIPFzoYzAhLOLWZuHen33K2c/7ng6', 'Karyawan_30936', 'wahyurauf447@gmail.com', '089654642515', NULL, 'aktif', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(118, 6, NULL, 1, '2024000126', '$2y$10$2nJUYx6GwHVNJpMVcvbxBukvAuT8F9GADFBBO/0xU0dxl/T0y6.6i', 'Karyawan_46489', 'zmeplimrhisa@gmail.com', '081515085481', NULL, 'aktif', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(119, 6, NULL, 1, '2024000127', '$2y$10$Ne4eNhLcn3gPvqGGuABt3.SuOVlcBRJKLG/5YntRLIl/GFyTtILae', 'Karyawan_15719', 'm.fadhilahramadana@gmail.com', '085240096154', NULL, 'aktif', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(120, 6, NULL, 1, '2024000128', '$2y$10$tjsXj8W5XxvtqVCxHceRrO/EtqpLoae4lc07kylKdAKiYrbk2ini.', 'Karyawan_23287', 'saiful.ahsarms@gmai.com', '085342607773', NULL, 'tidak', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(121, 6, NULL, 1, '2024000129', '$2y$10$7voNvHaP4pzjO0/sM/vkoudm/7vhGeP4pa15y..FLBmfRTNtIxbPm', 'Karyawan_67617', 'muswahad20@gmail.com', '085298593791', NULL, 'aktif', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(122, 6, NULL, 1, '2024000130', '$2y$10$XyMpuKJTZ8KRlv/HIVuEqeiJTPSndabxz2vtEA61m65K0iTczWOxS', 'Karyawan_28327', 'ombor1997@gmail.com', '081998160243', NULL, 'aktif', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(123, 6, NULL, 1, '2024000131', '$2y$10$NhK.NAMg2SYW/vxfcKMLTuek8luoO11GrDqyQ9CUlLD45epyJumi2', 'Karyawan_4692', 'Rianazis4@gmail.com', '085348043858', NULL, 'aktif', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(124, 6, NULL, 1, '2024000132', '$2y$10$jpM8hhct/HHo9h2ncf0rHekwwNBKl61rP2uR.a9WM9HCpdXeVjOnG', 'Karyawan_31354', 'ensichisto@gmail.com', '085242162808', NULL, 'tidak', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(125, 6, NULL, 1, '2024000133', '$2y$10$IOwQnA7DqrRFAy5J94Y/Q.44GR6NYDP1rWvCvcCbphgsCdJow9Sdq', 'Karyawan_34946', 'Agussalim.g.8893@gmail.com', '08975555369', NULL, 'aktif', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(126, 6, NULL, 1, '2024000134', '$2y$10$.SJ4xy43ef6OMPlUt1bLeuUwvXMe.8bhm/6ady82dwllUfDnA0O5q', 'Karyawan_7442', 'Wawa.daus15@gmail.com', '089531475673/082293266153', NULL, 'aktif', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(127, 6, NULL, 1, '2024000135', '$2y$10$RwK9G9s9OJCAIRwiAosb3uAzXfCRXdOiPH/gdm94RmE.FyjSPm5Nm', 'Karyawan_85506', 'triputra799@gmail.com', '082347774538', NULL, 'aktif', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(128, 6, NULL, 1, '2024000136', '$2y$10$qYhjNtTc5q64YNC7.HsKmeZ0KC4v1aIGar8KzLy/ig6ZczHOlmyYO', 'Karyawan_60260', 'agusanggarak16@gmail.com', '081281312360', NULL, 'aktif', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(129, 6, NULL, 1, '2024000137', '$2y$10$vzlANqePXdhi7DOe6p.ixe4xIJz1Og0TTM.s.W/7.7mO/s/oIdsbu', 'Karyawan_91232', 'Lukman.petruchi@gmail.com', '085264889629', NULL, 'aktif', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(130, 6, NULL, 1, '2024000138', '$2y$10$uZfVCprJAUN91.vwDL9LHeNQ2KjMlp4NYA6O6g8zS71GmK4PowQQ2', 'Karyawan_91317', 'Tongskyy183@gmail.com', '089580061235', NULL, 'aktif', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(131, 6, NULL, 1, '2024000139', '$2y$10$riosFevfqG6RJ2fALWC.mepU8SS2eQ06WfXPjQCFciZnVuWKFFMVS', 'Karyawan_41082', 'frando.ramos127@gmail.com', '082346657627', NULL, 'aktif', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(132, 6, NULL, 1, '2024000140', '$2y$10$v1wPXS6NZWxgQbNEjCXfy.dtyUnLIMHjYtGpBM2L9C.ucn8tUC6J6', 'Karyawan_31588', 'muhfajar2607@gmail.com', '082291203201', NULL, 'aktif', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(133, 6, NULL, 1, '2024000142', '$2y$10$xQZ5tzKzGITW2uC1CQ/OXOR5Cfj/Sqbxw9UTapVXLagho5K.OE9Ki', 'Karyawan_64133', 'asrul@gmail.com', '085255121121/085299627020', NULL, 'aktif', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(134, 6, NULL, 1, '2024000143', '$2y$10$BmU5wTSr/3bGYHb7/Ew2Ve3qNLp61nlPJohlwzp25DobEJqbLsWBm', 'Karyawan_88681', 'haidyerali00@gmail.com', '085242903530', NULL, 'aktif', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(135, 6, NULL, 1, '2024000144', '$2y$10$HY.00BVT8mupPprSLPDXie0Ov1JOgwTVmAF3.4IXdAULQFkRQhzRa', 'Karyawan_15233', 'onohary777@gmail.com', '0895342930768', NULL, 'aktif', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(136, 6, NULL, 1, '2024000145', '$2y$10$zaBUqxr1S7/XvXjKM1dnQ.YnY6b6fOcLxvLufvHZvnLjkB1ZHPHCy', 'Karyawan_35334', 'restuk571@gmail.com', '082345542240', NULL, 'aktif', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(137, 6, NULL, 1, '2024000146', '$2y$10$0TfkGyY1vR4HcXtgew1lm.a60wAjI//LACGHdVCJAKhqijImf1Ujy', 'Karyawan_8425', 'haidirali1309@gmail.com', '0887435633778', NULL, 'aktif', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(138, 6, NULL, 1, '2024000147', '$2y$10$d0QZwPZk4WdQv.rPV7E6.OK/McL3Ex/psRJmS0tJKG/ljed9IDXDu', 'Karyawan_46326', 'samsunang12@gmail.com', '082334216806', NULL, 'aktif', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(139, 6, NULL, 1, '2024000148', '$2y$10$6RlV1vgpKoxpvmo7AqyiEu5UPKPFakdXNhApwwCNWntXuF3yUP6Vm', 'Karyawan_96153', 'ijalcep1@gmail.com', '085230772441', NULL, 'aktif', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(140, 6, NULL, 1, '2024000149', '$2y$10$qQSjd80pLOdFBvk9Ih.Jxu0whSXOnrfCGN9xT5NzdVpay1qzu.Sd.', 'Karyawan_45704', 'Linherlin8096@gmail.com', '082219979219', NULL, 'aktif', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(141, 6, NULL, 1, '2024000150', '$2y$10$NQpC5Y2/yr0P1mgIH..B3un1EbmErfNthpauAt4dJpYq7gx0zJn1a', 'Karyawan_81004', 'safrhymuh@gmail.com', '085398963337', NULL, 'aktif', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(142, 6, NULL, 1, '2024000151', '$2y$10$h7kPUhKuZDNHOUhVrWwor.to/Ua6zu6mWxozXtE.wOJAw1BH.NHi6', 'Karyawan_31393', 'Rahmidinia25@gmail.com', '082293451623', NULL, 'aktif', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(143, 6, NULL, 1, '2024000152', '$2y$10$vOW1jok.RZlKtYQXilX.ZutEbnfpTSBEOyrPLCQXZzO9svrbEdfHm', 'Karyawan_20345', 'yoyonsularso412@gmail.com', '081247560566', NULL, 'aktif', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(144, 6, NULL, 1, '2024000153', '$2y$10$yan/aeuMLpYkwPRWbtCw4.OMteeJYr9vRj5KGqzdCY5ULl4Mj3Dw2', 'Karyawan_18144', 'Syahrilarsyad1992@gmail.com', '085825205155', NULL, 'aktif', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(145, 6, NULL, 1, '2024000154', '$2y$10$8JUE4.G1Pkr/1B91u8yq.OCXjEXJibKOr.4MrztRX/IIiCWpec9xK', 'Karyawan_22359', 'samaun53@gmail.com', '082261842852', NULL, 'aktif', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(146, 6, NULL, 1, '2024000155', '$2y$10$sa7ddSOa2Rdxd8kpEzxL3.OzvTwjalH/u0Z.mwVxygoI.eFnPmyqu', 'Karyawan_70902', 'lilissaid309@gmail.com', '081240164191', NULL, 'aktif', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(147, 6, NULL, 1, '2024000156', '$2y$10$yVXyWMtyPc6Vrp0NRX33iOVWuGlCY6htertwLnCWMUqbGFXR7J7wK', 'Karyawan_29139', 'Muhsaifullah005@gmail.com', '082290687825', NULL, 'aktif', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(148, 6, NULL, 1, '2024000157', '$2y$10$Fn0RlSOW2779d7qeUwTatO76K/tpZeGDwkglcKr/JV45Zr4fKtN.e', 'Karyawan_10227', 'elmadayana222@gmail.com', '081254093595', NULL, 'aktif', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(149, 6, NULL, 1, '2024000158', '$2y$10$wl0jiWGzmPq.H9GUB8fc0./DKj2IJNBJdAoweuWa5fKRCPnlnzmE2', 'Karyawan_48011', 'wisnuciptotriprabowo@gmail.com', '082293212344', NULL, 'aktif', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(150, 6, NULL, 1, '2024000159', '$2y$10$WpovJjWB/0UgoXAOQ6ooZun6t5yfvJD2a7D1CACARxk6px5S5bw1K', 'Karyawan_78493', 'cahyadifajrin202@gmail.com', '085362518940', NULL, 'aktif', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(151, 6, NULL, 1, '2024000160', '$2y$10$0tsarwOlvCwnMSkkyihrvOrHS9F0MHoAmpQWxvG.lkEkERdzvuG26', 'Karyawan_59867', 'izheman.perdana@gmail.com', '081347641445', NULL, 'aktif', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(152, 6, NULL, 1, '2024000161', '$2y$10$GxV6GTNkbbX66Thv.wVPq.9n288FqNwhd55996BkGRB.83SvXgn9m', 'Karyawan_71417', 'arfiyaniarbaing@gmail', '085256405988', NULL, 'aktif', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(153, 6, NULL, 1, '2024000162', '$2y$10$/ngb.n9A3DC6M9ZeN78ml.E6jmNxLxuwA9YxIuPr/7WnhtMGXUFFC', 'Karyawan_82102', 'alfianpernando@yahoo.com', '081320530573/085386566883', NULL, 'aktif', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(154, 6, NULL, 1, '2024000163', '$2y$10$1topxhbcXtveWcWojgrfY.6l0ci9PI5rm.4DIvctDfT/U.2JZO6cS', 'Karyawan_64360', 'jurfionoglue@gmail.com', '082259535744', NULL, 'aktif', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(155, 6, NULL, 1, '2024000164', '$2y$10$FJvft0PY2Eq9KBwgaRncxu1rDeEfmj3gZiZkA9Q9PNTz4R0BEWST2', 'Karyawan_75915', 'evi.ponsel009@gmail.com', '082291930975', NULL, 'aktif', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(156, 6, NULL, 1, '2024000165', '$2y$10$sSVWYhE/QSlYJN1WnFQ9EeDvkqiV2fL0OQj/4QX3wVJlZMZXCDKHK', 'Karyawan_57116', 'abdm281095@gmail.com', '085796504758', NULL, 'aktif', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(157, 6, NULL, 1, '2024000166', '$2y$10$1zREj1RV9iMC8SAF6Eo85.zMyg0OqsfmvLNN4Qis/3Wob96FaTIOO', 'Karyawan_28166', 'hermanhs.new@gmail.com', '082193290488', NULL, 'aktif', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(158, 6, NULL, 1, '2024000168', '$2y$10$aFgwTYDgolS5aVwI23hJLeJJK.E7U2XX/a1MTttjcEQAkFaNw0Qzy', 'Karyawan_2746', 'abdrahmama441@gmail.com', '081321561328', NULL, 'aktif', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(159, 6, NULL, 1, '2024000169', '$2y$10$2JAloGOF6EVXO8lqYCKGQuFZDNpoJuqsqcoJ68ySlTPmiDpNllhm6', 'Karyawan_85350', 'anggalgazali@gmail.com', '089652879353', NULL, 'aktif', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(160, 6, NULL, 1, '2024000170', '$2y$10$pLwnAzrALm5SiZ2IZaouPO2uydgErP0CCsuvQS7UM3PGTVRrcI6Y6', 'Karyawan_21035', 'afrisalm7@gmail.com', '085341441390', NULL, 'aktif', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(161, 6, NULL, 1, '2024000171', '$2y$10$5bVVbmZUrTrybU1W6p.fC.4w.uEt1wI5OFek10E2FJR6fnaigJXJq', 'Karyawan_60981', 'Latiflatif2427@gmail.com', '082193158397', NULL, 'aktif', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(162, 6, NULL, 1, '2024000172', '$2y$10$mxMLY7WLdvxaDjzupQyrjOdDe2D514uBMwvR9ui0MAZXdwdNsS8au', 'Karyawan_63891', 'Abridwis@gmail.com', '085340100130', NULL, 'aktif', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(163, 6, NULL, 1, '2124000002', '$2y$10$tPh8fsqnRRWEeVZo2sHIsegEW7yNiVopuHlvqKwrkdQmigQmUPRkW', 'Karyawan_16755', 'jaidinjaseng088@gmail.com', '085330114565', NULL, 'aktif', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(164, 6, NULL, 1, '2124000003', '$2y$10$jJ/diXTDzUBtxySCLWNgQuoEEnhrK.GD7R/mqhJFue4nnEI1JGK4.', 'Karyawan_59992', 'Muammar.muh@gmail.com', '085242814468', NULL, 'aktif', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(165, 6, NULL, 1, '2124000004', '$2y$10$XEbjCZRl5Y/Suc7uYzt/L.eoqDxnASHOl5NKu5B86Bb2QlxhNE5nS', 'Karyawan_5462', 'Muhrisal017@gmail.com', '081234250617', NULL, 'aktif', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(166, 6, NULL, 1, '2124000005', '$2y$10$8ZlLb8kjh5k6jLz0Zc61ve/JJlNOdEh5UKxne7lHareMGpDF9Ak7m', 'Karyawan_11848', 'firmansanjaya599@gmail.com', '085242104788', NULL, 'aktif', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(167, 6, NULL, 1, '2124000008', '$2y$10$ygvVw7ycPI8sbkmAtJDIQuugPO/bJkqT3CCygsHxnCffUbD/xqPe2', 'Karyawan_36481', 'adialfarabii@gmail.com', '085294255332', NULL, 'aktif', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(168, 6, NULL, 1, '2124000009', '$2y$10$9UuM/ojnCYCho1sBhV5GceIbv08FggKsAKoekknYWDi89BgEN4VVu', 'Karyawan_75048', 'Ws08011997@gmail.com', '085348848287', NULL, 'aktif', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(169, 6, NULL, 1, '2124000010', '$2y$10$i0ZKrMkUF3sTduyPcL0g0O50TvYn9Zl.nOzx2qjXVhNHduPBBBmM.', 'Karyawan_1151', 'fpanggau17@gmail.com', '089694630420', NULL, 'aktif', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(170, 6, NULL, 1, '2124000011', '$2y$10$3Yez4ZnG68xpFDwhc3ulzexdgHEsl4x33LQwXvBllWA9Gth8zn2bO', 'Karyawan_72471', 'aditia.rahman1111@gmail.com', '089663288111', NULL, 'aktif', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(171, 6, NULL, 1, '2124000012', '$2y$10$HVZ4UYybtifFR6fKXphDUez6cQlXKlciDvgC3pXkY5ETy.XJQykTi', 'Karyawan_21308', 'Agusatt65@gmail.com', '081210474746', NULL, 'aktif', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(172, 6, NULL, 1, '2124000013', '$2y$10$Q3s4YteIOmQWwInqAF44MO/G6cfrp4eyVtCOWEeo4SqZyqTMpp/fm', 'Karyawan_61997', 'nurhikma2413@gmail.com', '085298522543', NULL, 'aktif', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(173, 6, NULL, 1, '2124000014', '$2y$10$VeiVg0Nvbke9HCs9oYizHO2veuQ16w0NdeNIaiPpWu5rHhU373rRm', 'Karyawan_22807', 'Asrunpratama86@gmail.com', '082292335496', NULL, 'aktif', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(175, 6, NULL, 1, '2124000017', '$2y$10$Hpkm0VrnEc4PTzDIwRSXMe5ST5Z41A2ABMr9JXcMQLgeHUjh3VuEW', 'Karyawan_7478', 'Nurultriwindrati@gmail.com', '085930963397', NULL, 'aktif', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(176, 6, NULL, 1, '2124000018', '$2y$10$JIfqqIzku4ttMWMgxqeKVOiUAhJyUqWkDu5c5UjBpdE30mbyyM8ee', 'Karyawan_32089', 'Andidedinirwans@gmail.com', '085255533646', NULL, 'aktif', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(177, 6, NULL, 1, '2124000019', '$2y$10$IKH0Pxfhr1mhM9cbN6.zeubRQsgJW/H5RmDhGegyahKLAhjNyFyzC', 'Karyawan_53918', 'noviliajao@gmail.com', '082191385468', NULL, 'aktif', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(178, 6, NULL, 1, '2124000020', '$2y$10$EBXmSKUjEorFCOY7EmXVTuL/DKcFUUyXarm6lAJw5.9TfC.9vbbgu', 'Karyawan_70598', 'ardybungko@gmail.com', '085757777742', NULL, 'aktif', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(180, 6, NULL, 1, '2124000022', '$2y$10$ZHmWuzjGBBkDNc.k2GW61ePdSi6fnsiaWfEME8RBYtRfQxtwspFGC', 'Karyawan_98113', 'Vhyredcr@gmail.com', '085342384234', NULL, 'aktif', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(181, 6, NULL, 1, '2124000024', '$2y$10$rUFzr9dz38zquiuWnH7twuXnSzGbctu/Ehqvwer1AJQfv3tiTw.oy', 'Karyawan_80878', 'rivaldi.dragnel@yahoo.com', '082187619873', NULL, 'aktif', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(182, 6, NULL, 1, '2124000025', '$2y$10$0M9/ylB/5PkZUdDZ/B5JautbGdt12P6n2KTGqWyZoQjPeoeRlri/e', 'Karyawan_45232', 'jayadia403@gmail.com', '082259954376', NULL, 'aktif', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(183, 6, NULL, 1, '2124000026', '$2y$10$X2aXHK38kMpp0wsHhdT5Ju9oOsERbqTvhbycB.M8HaUajJRx4rOGy', 'Karyawan_90034', 'BEBYAMBASSADOR@GMAIL.COM', '081144408880', NULL, 'aktif', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(184, 6, NULL, 1, '2124000028', '$2y$10$Cxg8eka5a88mujHyuE3ZZODHy9ag.K687WsKpj8QKETgdiDIpd7mi', 'Karyawan_89346', 'jessylondah@gmail.com', '085397283770', NULL, 'aktif', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(185, 6, NULL, 1, '2124000029', '$2y$10$ROJ1v0DlllMdKmebVkjdP.xB/7XLKK8QcDYvBOt/tkDOL38Nq5gQK', 'Karyawan_99851', 'arifnurqolbi4@gmail.com', '082290519242', NULL, 'aktif', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(186, 6, NULL, 1, '2124000030', '$2y$10$lX74nrT9qh781ZHYuMDUA.Zpg6gF8mg5Tt7UYICL0LdMJ/9vdtd2S', 'Karyawan_12413', 'Achlak25@gmail.com', '089695206462', NULL, 'aktif', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(187, 6, NULL, 1, '2124000031', '$2y$10$1TMl/KyIkTysxsIoEkUXAuTIOFjCw/tkMeN.z.7Iw9250rCQt0.qq', 'Karyawan_4065', 'afdaljati05@gmail.com', '082192518310', NULL, 'aktif', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(188, 6, NULL, 1, '2124000032', '$2y$10$npcFFl4V/OchxhjoM4AhkOExrSa/D77.YoJcnBDrnYDRPsyewtZ0i', 'Karyawan_3931', 'Antonsnookum@gmail.com', '085236873133', NULL, 'aktif', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(189, 6, NULL, 1, '2124000033', '$2y$10$nO8xhQZlANwc0GCI89ERpuDA57VK5Z9rnrQ0DYPwEY3L91firSJ96', 'Karyawan_59988', 'asharihidayat13@gmail.com', '0895806694963', NULL, 'aktif', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(190, 6, NULL, 1, '2124000034', '$2y$10$JrCRnHS0eP6Jn9KGOQTctOzSS55mSIj45apaBC3W/voE87ZfpfLgu', 'Karyawan_41655', 'dauslemah@gmail.com', '081391163934', NULL, 'aktif', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(191, 6, NULL, 1, '2124000035', '$2y$10$84nYMhxy8kEBk5t0mQ2Jru2xq9hEOelZwQ2hhpOo.evO0Grtuejp.', 'Karyawan_18364', 'piantorada28@gmail.com', '082259472108', NULL, 'aktif', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(192, 6, NULL, 1, '2124000036', '$2y$10$aUgFYOeSFlSgzaCvQA54R.TQkb08S1.izKYuJD4Kt0jlYVKGeOXbm', 'Karyawan_30835', 'rezkybudiman666@gmail.com', '082251800395', NULL, 'tidak', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(193, 6, NULL, 1, '2124000037', '$2y$10$64kf.bOuQ1uYNOIkE1K3Ce.3ZAEpoanb3U28vrScvHl1CQxscTQvq', 'Karyawan_74712', 'Haikalklk019@gmail.com', '085241498494', NULL, 'aktif', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(194, 6, NULL, 1, '2124000038', '$2y$10$7zejrOB1VTITOiyC9G5ms.oaQvScVyRDcrox97RLcnS8qw1Reh8m.', 'Karyawan_92400', 'agusdardaud@gmail.com', '082244044347', NULL, 'aktif', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(195, 6, NULL, 1, '2124000041', '$2y$10$0E7BwsNxp9wlJN2LL/aVG.w0MuFe3C20itwcExIJiFBEvkKzi0Dwu', 'Karyawan_98798', 'Wahyudiastira97@gmail.com', '081242854009', NULL, 'aktif', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(196, 6, NULL, 1, '2124000042', '$2y$10$C3Ljy7Y75o8rFdUQiM93XuWYAmJyYBaylgUW1fKD7O92Fd3UzfIC2', 'Karyawan_22126', 'Saparuddin3232@gmail.com', '082395008978', NULL, 'aktif', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(197, 6, NULL, 1, '2124000043', '$2y$10$Q5cAyQrRIDQbGEeBJUktgeJvfEtInDFk83dBPa6RapdPR6HFjcMAO', 'Karyawan_47422', 'kwawank74@gmail.com', '0895336510174', NULL, 'aktif', '2022-03-22 00:31:12', '2022-03-23 19:24:17'),
(198, 6, NULL, 1, '2124000044', '$2y$10$TsQxRjoRMa.aWSBb22NPq.AZL98Ham.jhPnmEgn7d7yXiOfNeFrN6', 'Karyawan_78962', 'ismailusman2911@gmail.com', '085340713613', NULL, 'aktif', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(199, 6, NULL, 1, '2124000045', '$2y$10$PuwM.b4jKJGgWDhW3bjCvubY2ShfhifdjsotTlsPQ4fZ6YAhyT7n.', 'Karyawan_51772', 'andreasdufalphengri03@gmail.com', '08970520280', NULL, 'aktif', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(200, 6, NULL, 1, '2124000046', '$2y$10$7QbhbTky3B0l8UviuBIEye5ty6xi2eRyK9WUZ9EqbJTB417LYCXRy', 'Karyawan_10103', 'Indahsekarsari96@gmail.com', '081340358606', NULL, 'tidak', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(201, 6, NULL, 1, '2124000048', '$2y$10$G8ohq4HeTLK1.uFmo5tt2uSI7LMP2pBuNMii17P496ADFF2C3IfiC', 'Karyawan_98614', 'adifiaofaofficial@gmail.com', '085234950867', NULL, 'aktif', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(202, 6, NULL, 1, '2124000050', '$2y$10$dlAmYvUbgMUBYPwu9KoQ/evIlt8PIlXUKU225SCOhBInIQBBkpbs2', 'Karyawan_94427', 'trianarahayu88@gmail.com', '089671854891', NULL, 'aktif', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(203, 6, NULL, 1, '2124000051', '$2y$10$vTUgX6UETptPsxoK.fchKezfdypTh4i2GPwoDveqTEV32QrUE7.W.', 'Karyawan_34335', 'nuralisahend@gmail.com', '085256846565', NULL, 'aktif', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(204, 6, NULL, 1, '2124000052', '$2y$10$NNyZoPiTsRSKP0aYTqf2EOdZRkS5IzPGRN5DoC1a8Z6YxySX1pIV.', 'Karyawan_26836', 'ekky0598@gmail.com', '0895347489960', NULL, 'aktif', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(205, 6, NULL, 1, '2124000058', '$2y$10$jfMyldJOxOU2IZNP6W1gA.6HOailihq0M7UlRyhPVXoXd4c7hg9fq', 'Karyawan_31034', 'aslidarahbone93@gmail.com', '082292020192', NULL, 'aktif', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(206, 6, NULL, 1, '2124000059', '$2y$10$B9flhjIr1R.wB3L8OFet5.nEprpipuLn64boEXBTer4wRaitDMW4K', 'Karyawan_20594', 'tinorumate18@gmail.com', '08114054611', NULL, 'aktif', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(207, 6, NULL, 1, '2124000060', '$2y$10$XAumSu7ZwurqKsKy/NmIwOOdacf4fkCj2srMvzfhn5TTizkvmk5R2', 'Karyawan_39772', 'suhudibmundin@gmail.com', '085342196057', NULL, 'aktif', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(208, 6, NULL, 1, '2124000061', '$2y$10$sQCu9/jgSSBv8dcAT.Nv.etDb18vQM2sHvng1ds/6dj9giOMvtx2i', 'Karyawan_2451', 'Oktavbirana@gmail.com', '085213788679', NULL, 'aktif', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(209, 6, NULL, 1, '2124000062', '$2y$10$ESgUps8knfmJKoFwvSc9COnHhV68FtTjFGo4LwUEI6OOvyelT0gM.', 'Karyawan_68668', 'Gamalabdulrazakmalu1990@gmail.com', '081342443685', NULL, 'aktif', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(210, 6, NULL, 1, '2124000063', '$2y$10$jfbgZ/8IK/nfeLfTMnF42O6XNQ177i7/jZZst/OnaeZd/zIe3TqrC', 'Karyawan_81979', 'agunghamka79@gmail.com', '082280222127', NULL, 'aktif', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(211, 6, NULL, 1, '2124000064', '$2y$10$PqOiuGXioSum3Wd1locEn.KQC17a7z2e7KgU3rhDdjnGHctWzJejK', 'Karyawan_63632', 'ramadandi@gmail.com', '085852622512', NULL, 'aktif', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(212, 6, NULL, 1, '2124000065', '$2y$10$2e1zI5AwmItDMLbx5KGxLO1qRfn7WP6Vpy/ey84CgDQVWts2KSL1m', 'Karyawan_60032', 'rijaljanuar24@gmail.com', '085298702295', NULL, 'aktif', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(213, 6, NULL, 1, '2124000066', '$2y$10$HSGdYd0RTemkISy1JP5UiODJwH2/xzYvQEvHlpTD9JNXTUypYTk.K', 'Karyawan_71510', 'ilhamtopan816@gmail.com', '085340889182', NULL, 'aktif', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(214, 6, NULL, 1, '2124000068', '$2y$10$t9lQunXXH4MDrzlU330k7.9g2BZ/PUjyzlcUBVb0nnD9P114b4Yhq', 'Karyawan_51256', 'nuralfianingsihraja@gmail.com', '085342675230', NULL, 'aktif', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(215, 6, NULL, 1, '2124000069', '$2y$10$R2pZJJmqLHltukHjo/DJku6fcEzBpNimo.1GEoZJzrNzJ12/AHx1.', 'Karyawan_76970', 'paivhy18@gmail.com', '085394415441', NULL, 'aktif', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(216, 6, NULL, 1, '2124000070', '$2y$10$nt7YcwGcaWxQGkgFPoN/HOAcuVQm4zAdqT6vBZAolTb4RIvwGpEyu', 'Karyawan_41255', 'nuzhul@gmail.com', '0', NULL, 'aktif', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(217, 6, NULL, 1, '2124000071', '$2y$10$HmSDBCeg1FlzOoL6OE9x2e1qx2gnF1q4SexssYhNvjc8li9g4R4fC', 'Karyawan_89695', 'Rikikdi20@gmail.com', '081356762946', NULL, 'aktif', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(218, 6, NULL, 1, '2124000075', '$2y$10$o.3A3HRfhQsim5W.hOOjYuIuGjO79qflwrsn3j.EuyqQBhyOiIaPC', 'Karyawan_31859', 'muhammadhasrullah12@gmail.com', '081242190928', NULL, 'aktif', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(219, 6, NULL, 1, '2124000077', '$2y$10$FuZWNB4M/ERW1mLZgiDGoe7Jl5XGx/NAWGQI1A.N.2f0lEM7QRkZe', 'Karyawan_80215', 'abd699225@gamil.com', '081332011600', NULL, 'aktif', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(220, 6, NULL, 1, '2124000078', '$2y$10$fpf8WsgjP8E7o6EWL47mYutjB6t3xEXIeAIzZI2wnTcwtdhDGDQtO', 'Karyawan_30263', 'hilmannabila143@gmail.com', '082348504788', NULL, 'tidak', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(221, 6, NULL, 1, '2224000001', '$2y$10$qSk/s7XWOxQHhaxNFOfcl.PvKwjxnC5Y1W4IkqvQWOZqCfYh8iYKe', 'Karyawan_62524', 'basoirvan@gmail.com', '082345427767', NULL, 'aktif', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(222, 6, NULL, 1, '2224000003', '$2y$10$AhNH6iXqEvvIkh1Vbn58u.j9.xuMeBgMWZU8NhxJySVR7Nr2XeIh.', 'Karyawan_39274', 'fitrianiahmar64@gmail.com', '082349899127', NULL, 'aktif', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(223, 6, NULL, 1, '2224000004', '$2y$10$73F39cEJjdZHWAxyJO3VyOilmqcPM.9RhzKQwN3/ghKcvmBbM79xq', 'Karyawan_38445', 'indahwahyuni@gmail.com', '082293514891', NULL, 'aktif', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(224, 6, NULL, 1, '2224000010', '$2y$10$VBqjhyVHypygg2oZ.vJHduYGHJqsBgI7K0CgsSCkcsSIGPd9TDMga', 'Karyawan_47304', 'sunarsis@gmail.com', '082261857235', NULL, 'aktif', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(225, 6, NULL, 1, '2224000011', '$2y$10$xagA38EV5oqFG1mXrFQkxu.k9zHzKq4Ykc.Y3jUiWdRt/jcjpJ8XW', 'Karyawan_72827', 'Fahmysungkar55@gmail.com', '085824816341', NULL, 'aktif', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(226, 6, NULL, 1, '2224000013', '$2y$10$f856atgQMFW5UutVNZiwm.H6C8/MBfgyjZme6HqRh209Fi2tkGTx.', 'Karyawan_91908', 'gazaliahmad833@gmail.com', '082349192290', NULL, 'tidak', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(227, 6, NULL, 1, '2224000015', '$2y$10$FY.v4M9uGtc/3rYNsQwp4efkz9H0jXnko2miammwGls072hGYuQzC', 'Karyawan_32513', 'ilhamjaya@gmail.com', '089517193541', NULL, 'aktif', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(228, 6, NULL, 1, '2224000018', '$2y$10$24X43dIJ9JeKp0ROXzvMQO7K3x268xsCGTM.5f0Gsyu2H3ZpPaX5K', 'Karyawan_95856', 'agathalusiana23@gmail.com', '081256335930', NULL, 'aktif', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(229, 6, NULL, 1, '2224000023', '$2y$10$6.FqQq9l5uuoUqX1aCvSfuMQsrZhujcVpdGryfxYWiQre5HJBLPjO', 'Karyawan_32715', 'rusdian228@gmail.com', '0', NULL, 'aktif', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(230, 6, NULL, 1, '2224000027', '$2y$10$gF8bODpcY7LuFi/6Dou3HOCjJyaWk3RTdEu.3P/9P9BT/Z.55O7lS', 'Karyawan_39725', 'wahyudiilham@gmail.com', '081342004449', NULL, 'aktif', '2022-03-22 00:31:15', '2022-03-22 00:31:15');
INSERT INTO `akun` (`id`, `id_akses`, `id_tema`, `id_perusahaan`, `nik`, `password`, `show_pass`, `email`, `no_hp`, `token`, `status`, `created_at`, `updated_at`) VALUES
(231, 6, NULL, 1, '2224000028', '$2y$10$J.5oWhK9EzYPxd8tIuo1GeCGTEl9Z5e/Ek4iD5bKZaWGb67grgdXu', 'Karyawan_45559', 'hasbib@gmail.com', '085256103683/\'085342770599', NULL, 'aktif', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(232, 6, NULL, 1, '2224000029', '$2y$10$BR990DJczG31QV0/.hw/4.EWSQ5sEjPjoaSiOAi1hqEN3ZZTFBvry', 'Karyawan_8770', 'abdrizal@gmail.com', '0', NULL, 'aktif', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(233, 6, NULL, 1, '2224000031', '$2y$10$JGp.o8L8LA2S4Z7fezcNzOZy5d.AxfvlPTxEI902f.8oGvFpu8aqK', 'Karyawan_92851', 'putricyntia@gmail.com', '082317477984/082346717831', NULL, 'aktif', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(234, 6, NULL, 1, '2224000036', '$2y$10$6cjKtGdQf74VVSbMT5pcwOwRpxBWwtJAH1x2.3Uv1t9tA7WxlOG.i', 'Karyawan_52417', 'afrhy080497@gmail.com', '082318393749', NULL, 'aktif', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(235, 6, NULL, 1, '2224000037', '$2y$10$uNxA/VW4FAYEd6eH7ko.yewo3WMSyFn2YTqKO0bKdLViErtB5rmAG', 'Karyawan_4351', 'edwinsyaputra1990@gmail.com', '085340119070', NULL, 'aktif', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(236, 6, NULL, 1, '2224000039', '$2y$10$uQLoRN21wsbW0/QgIQh4e./SCefLu.tY3zR8fbRAGAYHCDVE8gI1K', 'Karyawan_45363', 'nfaida4@gmail.com', '082271029373', NULL, 'aktif', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(237, 6, NULL, 1, '2224000040', '$2y$10$C0lM4DXbuh4aJ2uIJhdabuBBt1i8UCpFFK0QeDkzM1Eryygud7U9q', 'Karyawan_34230', 'eko.oktopianus@gmail.com', '082189467816', NULL, 'aktif', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(238, 6, NULL, 1, '2224000041', '$2y$10$CbuLsieBk0Fz.zH6wwgOxO7BZGm78j62tXrj4UOW4./2Dc3YSUZsC', 'Karyawan_85401', 'alimuddin1508@gmail.com', '082393384034', NULL, 'aktif', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(239, 6, NULL, 1, '2224000043', '$2y$10$8vi3flcaMmS232YBEz9a0OHfPZNzmcOHQWmngmqFIXsq20z.OdVoS', 'Karyawan_47397', 'sholehle244@gmail.com', '085256474329', NULL, 'tidak', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(240, 6, NULL, 1, '2224000044', '$2y$10$OimWhDqkg2oc6Y5pinQR3elunsQUeacH6ELIYnDc0x8R5VYxy9mWy', 'Karyawan_58060', 'yusri123@gmail.com', '0', NULL, 'aktif', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(241, 6, NULL, 1, '2224000046', '$2y$10$JEvrN/D78NWN/.IzesUzYOsWyY6iVMll13AzxSHwM97OcoyF6nhN6', 'Karyawan_69311', 'dirga1226@gmail.com', '082297631163', NULL, 'aktif', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(242, 6, NULL, 1, '2224000047', '$2y$10$X62w6L6BFxXd9JvO88RK7uDabzNfupXhr9Jp9bniOtQul9t0QjT.W', 'Karyawan_22254', 'prima30mei@gmail.com', '082340932655', NULL, 'aktif', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(243, 6, NULL, 1, '2224000048', '$2y$10$CWQK6mE5j8I4eTis8GGbV.m/3RO0IxSPa/zXiS7C9yhX9DL0PBlJK', 'Karyawan_94970', 'cicirindiani@gmail.com', '087869503818', NULL, 'aktif', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(244, 6, NULL, 1, '2224000049', '$2y$10$63XTWSBPBUydy6L8HBAdGuEtS6uTkU6JyG98AVgqUPZYj5b4MG/n.', 'Karyawan_81142', 'nhaim590@email.com', '082195605619', NULL, 'aktif', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(245, 6, NULL, 1, '2224000052', '$2y$10$hp1CxUFHgaBHWh7o9j5fPOFSP6uXZJwGb/FnQDOaBq5G/Ggyf11ly', 'Karyawan_3663', 'kenanyesaya.wowiling@gmail.com', '082145631553', NULL, 'aktif', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(246, 6, NULL, 1, '2224000053', '$2y$10$4a7UzFG0CyRyPAktHChRB.TGBiFAv6GeyMRdTH5DtQ4VMeps9ZYB6', 'Karyawan_54982', 'Faizalshafwan8787@gmail.com', '085210299495', NULL, 'aktif', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(247, 6, NULL, 1, '2224000055', '$2y$10$P9T88Yvu8WgypEuKNolft.Q6OrErEWoYoijvUSgheTZi190pjcjMa', 'Karyawan_96098', 'kamarudin0089@gmail.com', '085222262928', NULL, 'aktif', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(248, 6, NULL, 1, '2224000057', '$2y$10$Y8MetYiRACTm7cBYQb6Yp.XRgOR8zd/G7QLs/KZNVy4QHqmBJGMgW', 'Karyawan_20853', 'Dimas Al farizi CRK KO2 KDI 22057', '082258580559', NULL, 'aktif', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(249, 6, NULL, 1, '2224000058', '$2y$10$vssH3zSx4EVQvqRLITUl0.MboJfQCX0CKoZQCEexmv.oAOflQB9Z2', 'Karyawan_40733', 'muhasrul301@gmail.com', '082292757029', NULL, 'aktif', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(250, 6, NULL, 1, '2224000059', '$2y$10$hzdq8uVhpyJjkfx5HR1lL.ICDnBnL4jF2KYjB.Z0kK4fegdwOX4kW', 'Karyawan_2816', 'satrawan@gmail.com', '0', NULL, 'tidak', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(251, 6, NULL, 1, '2224000060', '$2y$10$cvHk3HUOhQV8Sb6mYSGpz.HsVOvuhO0VbKmKrd0jjiICHOQVU67SS', 'Karyawan_43363', 'angelithapopo@gmail.com', '081341760633', NULL, 'aktif', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(252, 6, NULL, 1, '2224000061', '$2y$10$dhwQ7YaS6Nki.sBOfhDDZeKdlu5h02GABgb/Cm3.ej14nZB2nhxHu', 'Karyawan_2140', 'Sherliana.rosali@gmail.com', '085298591297', NULL, 'aktif', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(253, 6, NULL, 1, '2224000062', '$2y$10$8gpQWo7LjvPCqntYXfZjZuOqW/wOVjbxHLxqlgT/PTBnNmFv/sbfG', 'Karyawan_98718', 'nuradhysalman@gmail.com', '085299334727', NULL, 'aktif', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(254, 6, NULL, 1, '2224000063', '$2y$10$pwEwZs68UtK9FaPkYi7gZOi7J.ayMsdsCYoOhhwZQmzx9XryJWmSu', 'Karyawan_15969', 'carlensarangat@gmail.com', '082291319405', NULL, 'aktif', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(255, 6, NULL, 1, '2224000064', '$2y$10$l6XMapI7MqNHLw0VdAQI9exDw.uTqiapEnTmimw8hNm8g.uc3MMxG', 'Karyawan_20133', 'rustam123@gmail.com', '081292088460', NULL, 'aktif', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(256, 6, NULL, 1, '2224000065', '$2y$10$IaGgxaEs18Vykhdd1tJW3e6Ru8gev8SZbQDHJLiasxCFQExQgiPpe', 'Karyawan_43759', 'andimusmanawir@gmail.com', '0', NULL, 'tidak', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(257, 6, NULL, 1, '2224000066', '$2y$10$3xlb2ABoA/AQDnQlLQ18yOUQpHQQtcz8UJAvPvio1AtYcfXAiZVCi', 'Karyawan_56407', 'Irwanmustaring2903@gmail.com', '085342626956', NULL, 'aktif', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(258, 6, NULL, 1, '2224000067', '$2y$10$cVGvCZfxzOXg3zQvYTKdAej4JQLl3h26O6/kpJ5U3OqIXiy3qEMAi', 'Karyawan_92035', 'febianrinaldi@gmail.com', '0', NULL, 'aktif', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(259, 6, NULL, 1, '2224000068', '$2y$10$diNAOMDcPKHf6gL6TI7rNunqftecFPSZoSLbbOTl2PyqIhCYzECV.', 'Karyawan_24313', 'irfan123@gmail.com', '082192290613', NULL, 'aktif', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(260, 6, NULL, 1, '2224000069', '$2y$10$gLIwzzh/MO4mYAd0sLJCfugKcAaBMeqanMXEEdxQy7979VyfKfA5i', 'Karyawan_62059', 'wahyuddin123@gmail.com', '085298928106', NULL, 'tidak', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(261, 6, NULL, 1, '2224000070', '$2y$10$4gEvqEJgvj.y6Wytg/vCUehpLoA8IQXpYyd7twg94E2G5XlQAkWTq', 'Karyawan_96730', 'mariaangelmangoli@gmail.com', '082196290570', NULL, 'aktif', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(262, 6, NULL, 1, '2224000071', '$2y$10$P7jbknPO.jnkjn44/jGz4uUDB/Es.HJ2SVzxOvC4WPAtRBBAa8yci', 'Karyawan_31747', 'amrinharmanto@gmail.com', '0', NULL, 'aktif', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(263, 6, NULL, 1, '2224000072', '$2y$10$2KkhzBV4vi4N9FfqArsNs.6gKfWEF57yJHACSPR9tPNewT4.fJlVq', 'Karyawan_28591', 'ridwan12345@gmail.com', '081219812204', NULL, 'aktif', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(264, 6, NULL, 1, '2224000073', '$2y$10$hEEfsnxJkahBWpG3W4IH9ediuHV5S/sADemXVljd9e0dgZpShn6.m', 'Karyawan_46902', 'safaruddin@gmail.com', '082238343433', NULL, 'aktif', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(265, 6, NULL, 1, '2224000074', '$2y$10$xUOMLJd.4/3enxkLi4AQTe2/7VVzXMjXHf7TahVhYCiWwB4JpX/hu', 'Karyawan_43559', 'galanghidayat@gmail.com', '0', NULL, 'aktif', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(266, 6, NULL, 1, '2224000075', '$2y$10$5W6HVueXbu2sCOVlkx2Ej.MQhScVuhsnwr2/5gBucQiVqAQ070BVG', 'Karyawan_28994', 'muhalfian@gmail.com', '0', NULL, 'aktif', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(267, 6, NULL, 1, '2224000076', '$2y$10$jETkOKic.wuPsD7XMuBz4egnJDsah8bSUYgEEM2/kD5uF6bM4sYoy', 'Karyawan_82065', 'andirizal@gmail.com', '0', NULL, 'aktif', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(268, 6, NULL, 1, '2224000077', '$2y$10$Yslj581TRw7AkvuuDzceReoJXHutX7ghHC854GHbGmXI.fWP70eP.', 'Karyawan_65735', 'fahrul12345@gmail.com', '0', NULL, 'aktif', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(269, 5, NULL, NULL, '7371021609980002', '$2y$10$Bii564ysabd4Vens/AXj7eeTnHVfw04nYJctFhYEOvRgjdWGfO5Wm', 'User_23933', 'suyuti910@gmail.com', '082248571071', 'User_$2y$10$fCKm9DPK5mSWjAmwJSw0puU2VvCCqhHqYoQKKTsiRCHosA1tn.a6m', 'aktif', '2022-03-23 18:10:53', '2022-03-23 18:12:15'),
(270, 6, NULL, 1, '2124000054', '$2y$10$62LOMfou3bX3uvSMGIPWxOxR4E4SrRLedylIYZmBHc.6r6xPpDbg.', 'Karyawan_49886', 'Mahdiashabul@gmail.com', '085242590918', NULL, 'aktif', '2022-03-23 19:48:37', '2022-03-23 19:48:37'),
(271, 6, NULL, 1, '2124000016', '$2y$10$FX.iguQVeAHMXxAfL3aLDOxIYyjzW38sUjf83EP.55AW6F5U7JReW', 'Karyawan_87743', 'samfaisal7890@gmail.com', '085256486087', NULL, 'aktif', '2022-03-24 01:27:53', '2022-03-24 01:27:53'),
(272, 6, NULL, 1, '2124000021', '$2y$10$GERKQ8/69iKeUUJ7z.jyxeQvZRB4sGf4.yq0YCaLpXPbGfUPrlNdS', 'Karyawan_8858', 'muhammadilhamalnur@gmail.com', '082393218977', NULL, 'aktif', '2022-03-24 01:52:48', '2022-03-24 01:52:48'),
(273, 5, NULL, NULL, '7371070904000008', '$2y$10$P7Hyrwf1wo5n.ANjJFj7cu1FovEinlnb0anW4KnmNrVOIAd/RSziC', 'User_13877', 'nursalammuh@gmail.com', '085656656889', 'User_$2y$10$6dwbUhkpu8Lt7iVkxpopIO5C..7LA/KkJZQWRCgRSQwvetuf/AO4e', 'aktif', '2022-03-24 20:52:06', '2022-03-24 21:02:00'),
(275, 5, NULL, NULL, '7313085502980002', '$2y$10$kZexyKBS6toKwIgKQ.0gxO50b5x30.VFUHGgREcFwSBWrOmJrKQuq', 'User_4631', 'nurhalizah.1598@gmail.com', '082195864898', 'User_$2y$10$N7oTrp3rd4BS8J6TBxF65OdriQpUtUOCGhm8UJHXmiHko5edfWiQ6', 'aktif', '2022-03-30 05:42:57', '2022-03-30 18:29:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aply_lowongan`
--

CREATE TABLE `aply_lowongan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `id_lowongan_kerja` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('Buka','Tidak','Expired') COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aply_lowongan`
--

INSERT INTO `aply_lowongan` (`id`, `id_akun`, `id_perusahaan`, `id_lowongan_kerja`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 275, 1, 1, 'Buka', 'Terimah Kasih Sudah Aply Pekerjaan, Silahkan Pantau Informasi Pemanggilan atau Kelulusan di Website Ini Atau Email Ini.!!', '2022-03-30 19:56:28', '2022-03-30 19:56:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_diri`
--

CREATE TABLE `data_diri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_panggilan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_perkawinan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_bpjs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinggi_badan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berat_badan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golongan_darah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_saudara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_ktp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelurahan_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pos_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_domisili` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi_domisili` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota_domisili` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten_domisili` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan_domisili` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelurahan_domisili` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cerita_diri` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_diri`
--

INSERT INTO `data_diri` (`id`, `id_akun`, `foto`, `nama_lengkap`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `nik`, `email`, `agama`, `jenis_kelamin`, `status_perkawinan`, `no_bpjs`, `tinggi_badan`, `berat_badan`, `golongan_darah`, `suku`, `total_saudara`, `alamat_ktp`, `provinsi_ktp`, `kota_ktp`, `kabupaten_ktp`, `kecamatan_ktp`, `kelurahan_ktp`, `pos_ktp`, `alamat_domisili`, `provinsi_domisili`, `kota_domisili`, `kabupaten_domisili`, `kecamatan_domisili`, `kelurahan_domisili`, `instagram`, `facebook`, `linkedin`, `twitter`, `nomor_whatsapp`, `nomor_hp`, `cerita_diri`, `created_at`, `updated_at`) VALUES
(1, 2, 'profil_file_1647844373.jpg', 'NURKAIDIR.K', 'DIR', 'MAKASSAR', '1994-06-16', '7371071606940010', 'nurkaidir@gmail.com', 'ISLAM', NULL, 'SUDAH KAWIN', NULL, '165', '64', 'AB', 'MAKASSAR', '4', 'JL. SINASSARA NO 44', 'SULAWESI SELATAN', 'MAKASSAR', 'MAKASSAR', 'TALLO', 'KALUKUBODOA', '19215', 'JL SINASSARA', 'SULAWESI SELATAN', 'MAKASSAR', 'MAKASSAR', 'TALLO', 'KALUKUBODOA', 'https://www.instagram.com/chaidyr_machal/?hl=en', 'https://www.facebook.com/nurkaidir', 'https://www.linkedin.com/in/nurkaidir-k-94a762211/', NULL, '089677635194', '089677635194', 'SAYA ADALAH ORANG YANG OPTIMIS DAN PENUH INOVASI', '2022-03-20 23:32:53', '2022-03-20 23:32:53'),
(2, 4, 'profil_file_1647849053.jpg', 'GIOFANNY FILADELFIA LEMPANG', 'FANNY', 'TANA TORAJA', '1998-10-04', '2124000047', 'fannylempang@gmail.com', 'KRISTEN PROTESTAN', 'PEREMPUAN', 'BELUM KAWIN', NULL, '163', '50', 'O', 'TORAJA JAWA', '3', 'TALLUNGLIPU', 'SULAWESI SELATAN', 'TALLUNGLIPU', 'TORAJA UTARA', 'TALLUNGLIPU', 'TALLUNGLIPU', '0', 'LANRAKI PERUMAHAN DPALADA NO 5L', 'SULAWESI SELATAN', 'LANRAKI', 'KOTA MAKASSAR', 'BIRINGKANAYA', 'BERUA', NULL, NULL, NULL, NULL, '085241080022', '085241080022', 'INTROVERT - PASIF - LOW PROFILE', '2022-03-21 18:19:38', '2022-03-21 18:19:38'),
(3, 8, NULL, 'INDERA ADITYA', 'INDERA', 'KOLAKA', '1996-12-01', '7401040112960000', 'indraaditya835@gmail.com', 'KRISTEN PROTESTAN', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085241082793', '085241082793', 'ISI SENDIRI', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(4, 9, NULL, 'IRAWATI', 'IRA', 'BEBO', '1997-06-23', '7318346306970000', 'irawatimargareth@gmail.com', 'KRISTEN KATHOLIK', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081340638488', '081340638488', 'ISI SENDIRI', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(5, 10, NULL, 'A. SUCI HARIYATI PUTRI L', 'SUCI', 'UJUNG PANDANG', '1994-06-20', '7371096006940000', 'asucihariyatiputri1@gmail.com', 'ISLAM', 'PEREMPUAN', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085397277600', '085397277600', 'ISI SENDIRI', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(6, 11, NULL, 'ILHAM SAINUDDIN', 'ILHAM', 'PEKKABATA', '1994-11-05', '7604040509940000', 'ilhamrmb04@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082348817959', '082348817959', 'ISI SENDIRI', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(7, 12, NULL, 'ARMAN BAHARUDDIN', 'ARMAN', 'MAPILLI BARAT', '1995-07-12', '7604101207950000', 'armanbaharuddin1207@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082275604070', '082275604070', 'ISI SENDIRI', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(8, 13, NULL, 'DIDI PURWANTO', 'DIDI', 'CAMPURJO', '1988-08-08', '7604030808880020', 'didipurwanto7667@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082189906883', '082189906883', 'ISI SENDIRI', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(9, 14, NULL, 'MUH. RAJAB', 'RAJAB', 'POLEWALI', '1996-12-09', '7604041912960000', 'rajabmuh2@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082349513544', '082349513544', 'ISI SENDIRI', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(10, 15, NULL, 'ZATRA PERDANA MA', 'ZATRA', 'PEKKABATA', '1994-03-08', '7604040803940000', 'zatraperdana20@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085242221694', '085242221694', 'ISI SENDIRI', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(11, 16, NULL, 'WAHYULLAH', 'WAHYU', 'BATU-BATU', '1993-12-07', '7312050712930000', 'wahyuidexpress@gmail.com', 'ISLAM', 'LAKI-LAKI', 'DUDA', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0895351694433', '0895351694433', 'ISI SENDIRI', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(12, 17, NULL, 'MUH. ASHAR ALAMSYAH', 'ASHAR', 'KENDARI', '1994-06-08', '7471070806940000', 'ashar.alamsyah@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085394277556', '085394277556', 'ISI SENDIRI', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(13, 18, NULL, 'NORMA', 'NORMA', 'MALAYSIA', '1995-12-02', '7401194212950000', 'normaminion000@gmail.com', 'ISLAM', 'PEREMPUAN', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085342998033', '085342998033', 'ISI SENDIRI', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(14, 19, NULL, 'DARUL HUDAY', 'DARUL ', 'UJUNG PANDANG', '1994-07-29', '7471092907940000', 'darulhuday03@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085342690986', '085342690986', 'ISI SENDIRI', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(15, 20, NULL, 'MUHAMMAD SULTAN', 'SULTAN', 'BATANGASE', '1994-09-09', '7306180909940000', 'm.sultan201546@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '087811161595', '087811161595', 'ISI SENDIRI', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(16, 21, NULL, 'TAUFIQ NUR AMANAH', 'TAUFIQ', 'MAKASSAR', '1990-01-02', '7371120201900000', 'taufiqnuramanah35@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085399821996', '085399821996', 'ISI SENDIRI', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(17, 22, NULL, 'MOH ALAMSYAH AP', 'ALAM', 'TOLI-TOLI', '1993-10-12', '7371101210930010', 'alam.apangerang@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0895803335018', '0895803335018', 'ISI SENDIRI', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(18, 23, NULL, 'DESI RANTI', 'DESI', 'JENEPONTO', '1995-03-05', '7304024503950000', 'desiranti34@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082292823917', '082292823917', 'ISI SENDIRI', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(19, 24, NULL, 'I NYOMAN SUINDRA', 'NYOMAN', 'UJUNG PANDANG', '1998-03-14', '7371111403980000', 'inyoman.suindra@gmail.com', 'HINDU', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085745716917', '085745716917', 'ISI SENDIRI', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(20, 25, NULL, 'ERVANDI SAPTA SURYO VALENTINO', 'VANDI', 'UJUNG PANDANG', '1993-02-14', '7371121402930000', 'ervandisaptasuryo@gmail.com', 'KRISTEN PROTESTAN', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085398844484', '085398844484', 'ISI SENDIRI', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(21, 26, NULL, 'SYARIF HIDAYATULLAH', 'SYARIF', 'BANTAENG', '1994-02-04', '7303020402910000', 'arhyhidayat6@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085294539224', '085294539224', 'ISI SENDIRI', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(22, 27, NULL, 'MUH. NUR ILAHI', 'ILAHI', 'BONE', '1997-04-17', '7324081704970000', 'muhammadnurilahi97@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082346036992', '082346036992', 'ISI SENDIRI', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(23, 28, NULL, 'ILHAM RAHMAT ASSAAT', 'ILHAM', 'SUNGGUMINASA', '1989-03-12', '7306081203890000', 'ilo.illank40@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081241731064', '081241731064', 'ISI SENDIRI', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(24, 29, NULL, 'ANSYAR ABDULLAH', 'ANSYAR', 'PANYANGKALANG', '1992-12-05', '7306050512920000', 'ansyarabdullah92@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085399364334', '085399364334', 'ISI SENDIRI', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(25, 30, NULL, 'KHAERATI SUCIALAM', 'SUCI', 'NUNUKAN', '1996-02-21', '7371106702960000', 'suucialm2121@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082153690027', '082153690027', 'ISI SENDIRI', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(26, 31, NULL, 'DARIATMO RAHMAN', 'DARIATMO', 'POLMAS', '1997-01-23', '7604042301970000', 'dariatmorahman123@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085399777415', '085399777415', 'ISI SENDIRI', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(27, 32, NULL, 'FELICIA HANNA TALUMEWO', 'ECI', 'MAKASSAR', '1993-12-02', '7371024212930000', 'feliciatalumewo0211@gmail.com', 'KRISTEN KATHOLIK', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082190605194', '082190605194', 'ISI SENDIRI', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(28, 33, NULL, 'IWAN RAMADHAN', 'IWAN', 'UJUNG PANDANG', '1998-01-12', '7371011201980000', 'andymuhiwanramadhan@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '089627773308', '089627773308', 'ISI SENDIRI', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(29, 34, NULL, 'ALFAN SYAHREZA', 'ALFAN', 'KENDARI', '1995-10-15', '7471041510950000', 'alfan15101995@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082293893322', '082293893322', 'ISI SENDIRI', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(30, 35, NULL, 'FATIMAH MAULIDA', 'FATIMAH', 'BALIKPAPAN', '1993-09-11', '\'7371095109930011', 'maulidafatimah11@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082122122673', '082122122673', 'ISI SENDIRI', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(31, 36, NULL, 'AHMAD NUR KHAIRY', 'AHMAD', 'MAKASSAR', '2002-06-17', '7371131706020010', 'arievictor21@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '087703592780', '087703592780', 'ISI SENDIRI', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(32, 37, NULL, 'RUSDIANTI', 'ANTI', 'LANGKUMBE', '1996-10-10', '7410045010960000', 'rusdianti1010@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085211115341', '085211115341', 'ISI SENDIRI', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(33, 38, NULL, 'RAHMA', 'RAHMA', 'UJUNG PANDANG', '1994-10-17', '7371095701950000', 'rwyeppe@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085349939779', '085349939779', 'ISI SENDIRI', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(34, 39, NULL, 'JUMAWAN ALFADILLAH S', 'JUMAWAN', 'WATAMPONE', '1999-07-23', '7371122307990000', 'jumawanalfadillah00@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082252392259', '082252392259', 'ISI SENDIRI', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(35, 40, NULL, 'DADANG DARMAWAN', 'DADANG', 'UJUNG PANDANG', '1991-01-23', '7371092301910000', 'dadangdarmawan163@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085656740293', '085656740293', 'ISI SENDIRI', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(36, 41, NULL, 'RYAN SAFUTRA', 'RYAN', 'PALEPPONG', '2000-08-14', '7312021408000000', 'ryansafutra17@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082259428576', '082259428576', 'ISI SENDIRI', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(37, 42, NULL, 'MAMANG', 'MAMANG', 'CALIO', '1996-10-18', '7312031810961000', 'mamangadvan@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082293233760', '082293233760', 'ISI SENDIRI', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(38, 43, NULL, 'MUHAMMAD FADLAN AMRULLAH', 'FADLAN', 'MAKASSAR', '2000-09-09', '7371110909000000', 'mfadlan009@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081526126921', '081526126921', 'ISI SENDIRI', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(39, 44, NULL, 'M. IKHSAN MUIS', 'IKHSAN', 'PINRANG', '1997-06-23', '7315012306970000', 'miksanmuis@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085255275149', '085255275149', 'ISI SENDIRI', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(40, 45, NULL, 'AFDAL ALIAS', 'AFDAL', 'MAKASSAR', '2001-02-21', '7371062102010000', 'afdalalias263@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081527947926', '081527947926', 'ISI SENDIRI', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(41, 46, NULL, 'SYARIFUDDIN', 'SYARIF', 'UJUNG PANDANG', '1993-10-18', '7371111810930000', 'takuyauya20@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082191455615', '082191455615', 'ISI SENDIRI', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(42, 47, NULL, 'ANDI MUHAMMAD RIZALDY', 'RIZAL', 'UJUNG PANDANG', '1995-12-10', '7371021012950000', 'rizalpraditya4@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085399889682', '085399889682', 'ISI SENDIRI', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(43, 48, NULL, 'RUSDIN. R', 'RUSDIN', 'BELAJEN', '1993-01-25', '7316052501930000', 'rusdinrawa@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085399268152', '085399268152', 'ISI SENDIRI', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(44, 49, NULL, 'LUCI', 'LUCI', 'UETE', '1995-11-27', '7401134511950000', 'luciana1127@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085396990819', '085396990819', 'ISI SENDIRI', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(45, 50, NULL, 'INDRA FIRALDI', 'INDRA', 'SOPPENG', '1992-10-17', '7312041710920000', 'indrafiraldi17@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085255533662', '085255533662', 'ISI SENDIRI', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(46, 51, NULL, 'FAJAR RUSLI', 'FAJAR', 'BANTAENG', '1991-05-15', '7303021505910000', 'fajarrusli925@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082396310233', '082396310233', 'ISI SENDIRI', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(47, 52, NULL, 'ABDUL HARIS', 'HARIS', 'PANGKAJENE', '1969-12-07', '7371110712690000', 'abdulharis@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081241435250', '081241435250', 'ISI SENDIRI', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(48, 53, NULL, 'RISKA TAHIR', 'RISKA', 'PINRANG', '1995-06-25', '7315056506950000', 'riskaxtahir@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082191918755', '082191918755', 'ISI SENDIRI', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(49, 54, NULL, 'ABD. RAHIM, S.P', 'RAHIM', 'RUMBIA', '1995-01-31', '7372023101950000', 'rahimrasidaruhaya.ar@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082349789986', '082349789986', 'ISI SENDIRI', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(50, 55, NULL, 'ROBBY RAHMAT PERKASA MONOARFA', 'ROBBY', 'MANADO', '1998-10-04', '7371130410980000', 'rxbbymxnxxrfx@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085283086969', '085283086969', 'ISI SENDIRI', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(51, 56, NULL, 'SYAHARUDDIN', 'SYAHAR', 'PEKKABATA', '1993-11-09', '7315060911930000', 'syaharuddin002@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082346985982', '082346985982', 'ISI SENDIRI', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(52, 57, NULL, 'DINO EKO SANTO', 'DINO', 'LAU-LUA', '1997-01-31', '7407053101970000', 'hasna@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082290738412', '082290738412', 'ISI SENDIRI', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(53, 58, NULL, 'SHANDI MULYA', 'SHANDI', 'SUMBERJO', '1997-06-06', '7604030606970010', 'shandimulya06@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081343838531', '081343838531', 'ISI SENDIRI', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(54, 59, NULL, 'MULTASAN', 'MULTASAN', 'MATAKALI', '1998-05-01', '7604140105980000', 'mutasan8@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082393046336', '082393046336', 'ISI SENDIRI', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(55, 60, NULL, 'WINDIANINGSIH', 'WINDI', 'WONOMULYO', '1997-05-26', '7604036605970000', 'winndiyanni26@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085145455354', '085145455354', 'ISI SENDIRI', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(56, 61, NULL, 'SOFYAN', 'SOFYAN', 'MAKASSAR', '1981-04-12', '7371061204810000', 'sofyanmelani44@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085340021970', '085340021970', 'ISI SENDIRI', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(57, 62, NULL, 'MUHAMMAD KASRIN RAMDANI', 'KASRIN', 'WUNDULAKO', '1998-12-30', '7401013112980000', 'kasrinramdani@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082293778218', '082293778218', 'ISI SENDIRI', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(58, 63, NULL, 'YEKTI TRI AYUNITA', 'YEKTI', 'PUTEMATA', '1998-06-08', '7401094806980000', 'yektitriayunita@gmail.com', 'KRISTEN PROTESTAN', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082218878715', '082218878715', 'ISI SENDIRI', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(59, 64, NULL, 'ANDI WAWAN', 'WAWAN', 'MAKASSAR', '1995-05-01', '7308230105950000', 'andiwawan151115@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085399288691', '085399288691', 'ISI SENDIRI', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(60, 65, NULL, 'TRISNO', 'TRISNO', 'JENEPONTO', '1994-06-19', '7304031906940000', 'Enhotnozt@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081340206670', '081340206670', 'ISI SENDIRI', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(61, 66, NULL, 'AHMAD ALGAZALI', 'AHMAD', 'PAREPARE', '1992-02-23', '7315032302920000', 'algazaliahmad1992@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082296361342', '082296361342', 'ISI SENDIRI', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(62, 67, NULL, 'ANDI MOH. SULTAN ADAM', 'ADAM', 'PAREPARE', '1996-06-07', '7372030706960000', 'andisultan683@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082194364460', '082194364460', 'ISI SENDIRI', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(63, 68, NULL, 'RENALDI NOVIAN KURNIAWAN', 'RENALDI', 'UJUNG PANDANG', '1997-11-03', '7471080311970000', 'renaldink@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085244567318', '085244567318', 'ISI SENDIRI', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(64, 69, NULL, 'AGUS FERDIANSYAH', 'AGUS', 'BAU-BAU', '1991-08-31', '7471053108910000', 'fandyji14@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082348800568', '082348800568', 'ISI SENDIRI', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(65, 70, NULL, 'ABD GAFFAR HAMDANI', 'GAFFAR', 'JENEPONTO', '1992-06-18', '7306071806920000', 'gaffarhamdani18@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085398622266', '085398622266', 'ISI SENDIRI', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(66, 71, NULL, 'ZAINAL ABIDIN. AR', 'ZAINAL', 'REA BARAT', '1995-04-12', '7604141204950000', 'za5401682@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081354717969', '081354717969', 'ISI SENDIRI', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(67, 72, NULL, 'USMAN', 'USMAN', 'RUMPA', '1996-02-16', '7604081602960000', 'usmansix12@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082219222786', '082219222786', 'ISI SENDIRI', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(68, 73, NULL, 'MUJAHID.,S.PD', 'MUJAHID', 'UJUNG PANDANG', '1991-06-12', '7371121206910000', 'jahidmujahid12@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085299550321', '085299550321', 'ISI SENDIRI', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(69, 74, NULL, 'FARHAN', 'FARHAN', 'KENDARI', '1998-05-29', '7471072905980000', 'farhanwarhan@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085394599060', '085394599060', 'ISI SENDIRI', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(70, 75, NULL, 'TRI AGUNG BHAKTI NUGRAHA', 'TRI ', 'SELAYAR', '1994-10-16', '7301041610940000', 'Nugrahatri33@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085251782810', '085251782810', 'ISI SENDIRI', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(71, 76, NULL, 'ADITIA D', 'ADIT', 'PEKKABATA', '1998-01-15', '7604041501980000', 'aditiad150198@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082346686652', '082346686652', 'ISI SENDIRI', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(72, 77, NULL, 'FIRMAN ILAHI', 'FIRMAN', 'UGI BARU', '1990-07-25', '7604082507900000', 'firmanilahi20@yahoo.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082153717808', '082153717808', 'ISI SENDIRI', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(73, 78, NULL, 'RINA YANTI PAYANGAN', 'RINA', 'KALUKKU', '1996-07-28', '7602036807960000', 'rina26311@gmail.com', 'KRISTEN PROTESTAN', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081390637517', '081390637517', 'ISI SENDIRI', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(74, 79, NULL, 'LISA AYU LESTARI', 'LISA', 'BULUKUMBA', '1996-05-03', '7302094305960000', 'lalisalestari@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085241323342', '085241323342', 'ISI SENDIRI', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(75, 80, NULL, 'RETNO AYU PRATIWI', 'RETNO', 'KLATEN', '1995-12-16', '7306085612950000', 'retnoayupratiwi16@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082344678698', '082344678698', 'ISI SENDIRI', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(76, 81, NULL, 'HAMZAH', 'HAMZAH', 'SUNGGUMINASA', '1997-05-25', '7306022505970000', 'hamzahalfatih97@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085348271706', '085348271706', 'ISI SENDIRI', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(77, 82, NULL, 'FERRY FADLY', 'FERRY', 'BANTAENG', '1995-10-30', '7303023011950000', 'ferryfadly.989@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085397265989', '085397265989', 'ISI SENDIRI', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(78, 83, NULL, 'MUHAMMAD AKSAN', 'AKSAN', 'UJUNG PANDANG', '1998-08-04', '7371100408980000', 'Muhammadaksan101@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082191343354', '082191343354', 'ISI SENDIRI', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(79, 84, NULL, 'SUMARNI,S.SI', 'SUMARNI', 'ALLA', '1993-08-02', '7604064208930000', 'nannisumarni.1@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082343965896', '082343965896', 'ISI SENDIRI', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(80, 85, NULL, 'HERTIKNO EKA PRADANA', 'HERTIKNO', 'KENDARI', '1993-10-11', '7471071110930000', 'hertiknoekapradana@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085216975888', '085216975888', 'ISI SENDIRI', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(81, 86, NULL, 'ABDUL RAHMAN WAHID, S.BIOTEK', 'RAHMAN', 'LASEHAO', '1995-01-27', '7403190305950200', 'abdulwahidode@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082383395174', '082383395174', 'ISI SENDIRI', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(82, 87, NULL, 'MUH ANGGI SETIAWAN', 'ANGGI', 'MAMUJU', '1999-03-07', '7602010704990000', 'bayularoez17@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085342184090', '085342184090', 'ISI SENDIRI', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(83, 88, NULL, 'NURFADLI', 'FADLI', 'KARALEMBANG', '1997-04-04', '7605040704970000', 'nurfadlhy713@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082293480292', '082293480292', 'ISI SENDIRI', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(84, 89, NULL, 'JUMADI', 'JUMADI', 'PAJALESANG', '1979-07-11', '7312031107790000', 'ardhy.aja99@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085249614555', '085249614555', 'ISI SENDIRI', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(85, 90, NULL, 'LISMARDIANA SAM', 'LISMAR', 'WAWO', '1997-10-31', '7408077110970000', 'lismardianasamsir97@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082293577152', '082293577152', 'ISI SENDIRI', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(86, 91, NULL, 'MUH. RIDHA R.', 'RIDHA', 'UJUNG PANDANG', '1997-02-16', '7324041602970000', 'ridha.muhammad79@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082291877000', '082291877000', 'ISI SENDIRI', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(87, 92, NULL, 'NI KOMANG AYU ASTUTI', 'AYU', 'LUWU TIMUR', '1998-04-13', '7324075304980000', 'nikomangayuastuti13@gmail.com', 'HINDU', 'PEREMPUAN', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082348049119', '082348049119', 'ISI SENDIRI', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(88, 93, NULL, 'MUKHTAR', 'MUKHTAR', 'MAROS', '1992-05-07', '7309140705920000', 'Bgsdhani@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082292310764', '082292310764', 'ISI SENDIRI', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(89, 94, NULL, 'MUH. IQBAL HAFID', 'IQBAL', 'MAKASSAR', '2001-09-09', '7371120909010000', 'muhiqbalhafid5@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '089676063965', '089676063965', 'ISI SENDIRI', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(90, 95, NULL, 'SY FATRI HAMSINAH BAAL', 'FATRI', 'MAROS', '1995-07-26', '7309146607950000', 'fatribaal95@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '089517481849', '089517481849', 'ISI SENDIRI', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(91, 96, NULL, 'FEBY OLA', 'FEBY', 'UJUNG PANDANG', '1997-02-12', '7371094806950000', 'febyolaaa12@gmail.com', 'KRISTEN PROTESTAN', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085242303474', '085242303474', 'ISI SENDIRI', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(92, 97, NULL, 'MUH RICKY DARMAWAN', 'RICKY', 'UJUNG PANDANG', '1994-05-29', '7306082905910010', 'Rickydarmawan112233@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081317621769', '081317621769', 'ISI SENDIRI', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(93, 98, NULL, 'AMIR FATH BURHANUDDIN', 'AMIR', 'UJUNG PANDANG', '1996-09-16', '7371021609960000', 'Amirfath@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '08994444408', '08994444408', 'ISI SENDIRI', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(94, 99, NULL, 'ANCI', 'ANCI', 'MABONTA', '1995-10-10', '7324071010950000', 'anciarcha330@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085340611664', '085340611664', 'ISI SENDIRI', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(95, 100, NULL, 'ZAINAL ABIDIN HASENG', 'ZAINAL', 'JENEPONTO', '1993-03-30', '7305073003930000', 'sampoerna3393@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082259749303', '082259749303', 'ISI SENDIRI', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(96, 101, NULL, 'SYAHRUL', 'SYAHRUL', 'UJUNG PANDANG', '1992-12-10', '7371081012920000', 'Sahrulhs1231@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081527750437', '081527750437', 'ISI SENDIRI', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(97, 102, NULL, 'HAERUL NASIR', 'HAERUL', 'PANGKAJENE', '1994-08-17', '7310041708940000', 'haerulnasir010715@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082195488387', '082195488387', 'ISI SENDIRI', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(98, 103, NULL, 'PUTRA RIA NANDA', 'NANDA', 'UJUNG PANDANG', '1993-08-10', '7371121008930000', 'putrariananda93@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081243704123', '081243704123', 'ISI SENDIRI', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(99, 104, NULL, 'ARHAM', 'ARHAM', 'MUTTIARA', '1992-09-13', '7308131309920000', 'arhampunyamau@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085240226550', '085240226550', 'ISI SENDIRI', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(100, 105, NULL, 'ANDI RACHMAT SYAM', 'RACHMAT', 'SOPPENG', '1993-05-28', '7371112805930000', 'arsyasyam@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085212357295', '085212357295', 'ISI SENDIRI', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(101, 106, NULL, 'DEVI PERMATASARI', 'DEVI', 'BULUKUMBA', '1996-09-23', '7302026309960000', 'devipermata.s0996@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082343675779', '082343675779', 'ISI SENDIRI', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(102, 107, NULL, 'HARDILAL', 'HARDILAL', 'SARAJOKO', '1997-09-27', '7302072709970000', 'hardilal97@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081244962811', '081244962811', 'ISI SENDIRI', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(103, 108, NULL, 'GILANG FAJAR PRATAMA', 'GILANG', 'TANETE', '1994-01-26', '7312052601940000', '26gilangfajar@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085341875511', '085341875511', 'ISI SENDIRI', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(104, 109, NULL, 'FAJAR', 'FAJAR', 'MAKASSAR', '2001-05-08', '7371100805010000', 'fajarmaulana.0805@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082348694574', '082348694574', 'ISI SENDIRI', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(105, 110, NULL, 'MUH IRHAM PATTA', 'PATTA', 'MAKASSAR', '2000-06-06', '7371100606000000', 'irhampatta25@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085395538431', '085395538431', 'ISI SENDIRI', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(106, 111, NULL, 'SUARDI M', 'SUARDI', 'BANTAENG', '1995-12-09', '7303060912950000', 'Suardim80@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085340495467', '085340495467', 'ISI SENDIRI', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(107, 112, NULL, 'IRSAN MAULANA', 'IRSAN', 'UJUNG PANDANG', '2000-04-18', '7371061804000000', 'Irsanmaulanafreedom@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085342846300', '085342846300', 'ISI SENDIRI', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(108, 113, NULL, 'ARDIANTO SAMPEDAUN', 'ARDIANTO', 'KE\'PE', '1994-08-01', '7318120108940000', 'ardiantosanpe@gmail.com', 'KRISTEN KATHOLIK', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085146100409', '085146100409', 'ISI SENDIRI', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(109, 114, NULL, 'PARDIANTO', 'PARDIANTO', 'UJUNG PANDANG', '1999-09-05', '7371100509990010', 'Pardia815@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082250195527', '082250195527', 'ISI SENDIRI', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(110, 115, NULL, 'SYAMSUL RIJAL', 'SYAMSUL', 'SOLONGA', '1995-04-03', '7305070304950000', '030495syamsul@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '089671827219', '089671827219', 'ISI SENDIRI', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(111, 116, NULL, 'RIDWAN EDY', 'RIDWAN', 'UJUNG PANDANG', '1999-07-08', '7371120807990000', 'ridwanedy100@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '089623250106', '089623250106', 'ISI SENDIRI', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(112, 117, NULL, 'WAHYU', 'WAYHU', 'UJUNG PANDANG', '1992-02-13', '7371071302920000', 'wahyurauf447@gmail.com', 'ISLAM', 'LAKI-LAKI', 'DUDA', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '089654642515', '089654642515', 'ISI SENDIRI', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(113, 118, NULL, 'MUH. RISA HARDIYUGA', 'RISA', 'PANGKEP', '1997-10-31', '7310063110970000', 'zmeplimrhisa@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081515085481', '081515085481', 'ISI SENDIRI', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(114, 119, NULL, 'MUH. FADHILAH RAMADANA S', 'FADHILAH', 'UJUNG PANDANG', '1993-03-06', '7371080603930000', 'm.fadhilahramadana@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085240096154', '085240096154', 'ISI SENDIRI', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(115, 120, NULL, 'SAIFUL AHSAR MUH SALEH', 'AHSAR', 'KENDARI', '1988-08-21', '7308212108880000', 'saiful.ahsarms@gmai.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085342607773', '085342607773', 'ISI SENDIRI', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(116, 121, NULL, 'MUSWAHAD', 'MUSWAHAD', 'MALAYSIA', '1997-07-20', '7308192007970000', 'muswahad20@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085298593791', '085298593791', 'ISI SENDIRI', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(117, 122, NULL, 'IBRAHIM', 'IBRAHIM', 'MAKASSAR', '1997-09-14', '7371061409970000', 'ombor1997@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081998160243', '081998160243', 'ISI SENDIRI', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(118, 123, NULL, 'RIAN AZIS', 'RIAN ', 'MAKASSAR', '1992-11-14', '7371131411920000', 'Rianazis4@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085348043858', '085348043858', 'ISI SENDIRI', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(119, 124, NULL, 'CHRISTO MENING ENSI', 'CHRISTO', 'ALOR', '1992-04-10', '7306081004920010', 'ensichisto@gmail.com', 'KRISTEN KATHOLIK', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085242162808', '085242162808', 'ISI SENDIRI', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(120, 125, NULL, 'AGUS SALIM', 'AGUS', 'MAKASSAR', '1993-08-08', '7371130808930000', 'Agussalim.g.8893@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '08975555369', '08975555369', 'ISI SENDIRI', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(121, 126, NULL, 'MUHAMMAD SETIAWAN', 'SETIAWAN', 'UJUNG PANDANG', '1994-09-30', '7371133009940000', 'Wawa.daus15@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '089531475673/082293266153', '089531475673/082293266153', 'ISI SENDIRI', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(122, 127, NULL, 'TRIONO SAPUTRA', 'TRIONO', 'UJUNG PANDANG', '1991-01-18', '7371061801910000', 'triputra799@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082347774538', '082347774538', 'ISI SENDIRI', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(123, 128, NULL, 'AGUS ANGGARA. K', 'AGUS', 'PANGKAJENE', '1996-08-16', '7314071608960000', 'agusanggarak16@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081281312360', '081281312360', 'ISI SENDIRI', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(124, 129, NULL, 'LUKMAN', 'LUKMAN', 'KG. DUNGAN', '1993-03-12', '7314031203930000', 'Lukman.petruchi@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085264889629', '085264889629', 'ISI SENDIRI', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(125, 130, NULL, 'MUH. MIR\'ATUL AD\'DZAM', 'MIR\'ATUL', 'PAREPARE', '2001-05-02', '7371110205010000', 'Tongskyy183@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '089580061235', '089580061235', 'ISI SENDIRI', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(126, 131, NULL, 'FRANDO RAMOS', 'FRANDO', 'BETTELEBOK', '1995-01-27', '7603012701950000', 'frando.ramos127@gmail.com', 'KRISTEN PROTESTAN', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082346657627', '082346657627', 'ISI SENDIRI', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(127, 132, NULL, 'MUH. FAJAR ALAMSYAH', 'FAJAR', 'LAMETUNA', '2001-07-26', '7408052607010000', 'muhfajar2607@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082291203201', '082291203201', 'ISI SENDIRI', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(128, 133, NULL, 'ASRUL', 'ASRUL', 'PAREPARE', '1995-06-30', '7372013006950000', 'asrul@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085255121121/085299627020', '085255121121/085299627020', 'ISI SENDIRI', '2022-03-22 00:31:08', '2022-03-22 00:31:08');
INSERT INTO `data_diri` (`id`, `id_akun`, `foto`, `nama_lengkap`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `nik`, `email`, `agama`, `jenis_kelamin`, `status_perkawinan`, `no_bpjs`, `tinggi_badan`, `berat_badan`, `golongan_darah`, `suku`, `total_saudara`, `alamat_ktp`, `provinsi_ktp`, `kota_ktp`, `kabupaten_ktp`, `kecamatan_ktp`, `kelurahan_ktp`, `pos_ktp`, `alamat_domisili`, `provinsi_domisili`, `kota_domisili`, `kabupaten_domisili`, `kecamatan_domisili`, `kelurahan_domisili`, `instagram`, `facebook`, `linkedin`, `twitter`, `nomor_whatsapp`, `nomor_hp`, `cerita_diri`, `created_at`, `updated_at`) VALUES
(129, 134, NULL, 'HAIDYER ALI', 'ALI', 'MAROS', '1997-09-25', '7309102509970000', 'haidyerali00@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085242903530', '085242903530', 'ISI SENDIRI', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(130, 135, NULL, 'HARYONO H', 'HARYONO', 'MAKASSAR', '1992-09-28', '7371112809920000', 'onohary777@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0895342930768', '0895342930768', 'ISI SENDIRI', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(131, 136, NULL, 'RESTU KURNIAWAN', 'RESTU', 'GOWA', '1996-09-18', '7306111809950000', 'restuk571@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082345542240', '082345542240', 'ISI SENDIRI', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(132, 137, NULL, 'HAIDIR ALI', 'HAIDIR', 'MAKASSAR', '2001-09-12', '7371071209010010', 'haidirali1309@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0887435633778', '0887435633778', 'ISI SENDIRI', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(133, 138, NULL, 'SAMSUNANG SANDI', 'SAMSUNANG', 'AMPARITA', '1995-09-30', '7314023009950000', 'samsunang12@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082334216806', '082334216806', 'ISI SENDIRI', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(134, 139, NULL, 'SAFRIJAL', 'SAFRIJAL', 'KALOSI', '1993-07-18', '7316051807930000', 'ijalcep1@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085230772441', '085230772441', 'ISI SENDIRI', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(135, 140, NULL, 'HERLIN', 'HERLIN', 'LANTAWONUA', '1995-07-30', '7406047007950000', 'Linherlin8096@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082219979219', '082219979219', 'ISI SENDIRI', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(136, 141, NULL, 'MUH SAFRIANTO R', 'SAFRIANTO', 'LANTAWONUA', '1995-01-07', '7406040701950000', 'safrhymuh@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085398963337', '085398963337', 'ISI SENDIRI', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(137, 142, NULL, 'NUR RAHMI DINIA', 'RAHMI', 'EMPAGAE', '1996-08-25', '7313086508960000', 'Rahmidinia25@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082293451623', '082293451623', 'ISI SENDIRI', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(138, 143, NULL, 'YOYON SULARSO', 'YOYON', 'TANGANAPADA', '1994-11-19', '7472061411940000', 'yoyonsularso412@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081247560566', '081247560566', 'ISI SENDIRI', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(139, 144, NULL, 'SYAHRIL ARSYAD', 'SYAHRIL', 'PATTALASSANG', '1992-03-07', '7306130701920000', 'Syahrilarsyad1992@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085825205155', '085825205155', 'ISI SENDIRI', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(140, 145, NULL, 'SAMAUN', 'SAMAUN', 'BAU-BAU', '1970-04-02', '7472020204700000', 'samaun53@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082261842852', '082261842852', 'ISI SENDIRI', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(141, 146, NULL, 'LYLYS SAID', 'LYLYS', 'BONEA', '1997-04-07', '7403144704970000', 'lilissaid309@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081240164191', '081240164191', 'ISI SENDIRI', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(142, 147, NULL, 'MUH. SAIFULLAH', 'SAIFULLAH', 'SALUTETE', '1995-11-10', '7373091011950000', 'Muhsaifullah005@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082290687825', '082290687825', 'ISI SENDIRI', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(143, 148, NULL, 'ELMADAYANA', 'ELMA', 'MEBALI', '1997-09-20', '7318126009970000', 'elmadayana222@gmail.com', 'KRISTEN PROTESTAN', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081254093595', '081254093595', 'ISI SENDIRI', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(144, 149, NULL, 'WISNU CIPTO TRI PRABOWO', 'WISNU', 'PINRANG', '1997-03-25', '7315042503972000', 'wisnuciptotriprabowo@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082293212344', '082293212344', 'ISI SENDIRI', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(145, 150, NULL, 'CAHYADI FAJRIN', 'FAJRIN', 'PANGKEP', '1995-06-04', '7310100406950000', 'cahyadifajrin202@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085362518940', '085362518940', 'ISI SENDIRI', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(146, 151, NULL, 'RIZMAN PERDANA', 'RIZMAN', 'MANATUTO', '1993-09-04', '7371140409930000', 'izheman.perdana@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081347641445', '081347641445', 'ISI SENDIRI', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(147, 152, NULL, 'NUR ARFIYANI. AR.', 'NUR', 'MAKASSAR', '1996-04-24', '7403056404960000', 'arfiyaniarbaing@gmail', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085256405988', '085256405988', 'ISI SENDIRI', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(148, 153, NULL, 'ALFIAN S PERNANDO', 'ALFIAN', 'MAROS', '1996-08-13', '7309071308960000', 'alfianpernando@yahoo.com', 'KRISTEN PROTESTAN', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081320530573/085386566883', '081320530573/085386566883', 'ISI SENDIRI', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(149, 154, NULL, 'JUFRIONO', 'JUFRI', 'SALUTALAWAR', '1997-07-15', '7602011507970000', 'jurfionoglue@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082259535744', '082259535744', 'ISI SENDIRI', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(150, 155, NULL, 'ASRI', 'ASRI', 'JENEPONTO', '1996-02-17', '7302021702960000', 'evi.ponsel009@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082291930975', '082291930975', 'ISI SENDIRI', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(151, 156, NULL, 'ABD MALIK', 'MALIK', 'MAKASSAR', '1995-11-01', '7371010111950000', 'abdm281095@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085796504758', '085796504758', 'ISI SENDIRI', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(152, 157, NULL, 'HERMAN', 'HERMAN', 'UJUNG PANDANG', '1993-05-31', '7371073105920000', 'hermanhs.new@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082193290488', '082193290488', 'ISI SENDIRI', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(153, 158, NULL, 'ABD RAHMAN WAHYUDIN', 'RAHMAN', 'UJUNG PANDANG', '1992-09-02', '7371060209920000', 'abdrahmama441@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081321561328', '081321561328', 'ISI SENDIRI', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(154, 159, NULL, 'ANGGA ALGASALI', 'ANGGA', 'UJUNG PANDANG', '1994-12-03', '7371110312940000', 'anggalgazali@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '089652879353', '089652879353', 'ISI SENDIRI', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(155, 160, NULL, 'APRISAL', 'APRISAL', 'AMONGGEDO', '1997-04-22', '7402282204970000', 'afrisalm7@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085341441390', '085341441390', 'ISI SENDIRI', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(156, 161, NULL, 'ABD LATIF ADNAN', 'LATIF', 'UJUNG PANDANG', '1997-04-03', '7371080304970000', 'Latiflatif2427@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082193158397', '082193158397', 'ISI SENDIRI', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(157, 162, NULL, 'ABRI DWI SAKTI', 'ABRI', 'UJUNG PANDANG', '1990-08-10', '7371135008900000', 'Abridwis@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085340100130', '085340100130', 'ISI SENDIRI', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(158, 163, NULL, 'JAIDIN JASENG', 'JAIDIN', 'BONEA', '1996-01-02', '7403110201960200', 'jaidinjaseng088@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085330114565', '085330114565', 'ISI SENDIRI', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(159, 164, NULL, 'MUAMMAR', 'MUAMMAR', 'WAWOSUNGGU', '1994-05-05', '7402110505940000', 'Muammar.muh@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085242814468', '085242814468', 'ISI SENDIRI', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(160, 165, NULL, 'MUH. RISAL', 'RISAL', 'POLEWALI', '1996-03-17', '7405061703960000', 'Muhrisal017@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081234250617', '081234250617', 'ISI SENDIRI', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(161, 166, NULL, 'FIRMAN', 'FIRMAN', 'RANNAYA', '1996-05-06', '7304080605960000', 'firmansanjaya599@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085242104788', '085242104788', 'ISI SENDIRI', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(162, 167, NULL, 'ADI ALFARABI', 'ADI', 'SOPPENG', '1994-10-05', '7371090510940010', 'adialfarabii@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085294255332', '085294255332', 'ISI SENDIRI', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(163, 168, NULL, 'WAWAN SETIAWAN', 'WAWAN', 'CAMPANIGA', '1997-01-08', '7308050801970000', 'Ws08011997@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085348848287', '085348848287', 'ISI SENDIRI', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(164, 169, NULL, 'FEBRYADE PANGGAU', 'ADE', 'UJUNG PANDANG', '1992-02-17', '7371111702920000', 'fpanggau17@gmail.com', 'KRISTEN PROTESTAN', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '089694630420', '089694630420', 'ISI SENDIRI', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(165, 170, NULL, 'ADITIA RAHMAN', 'ADIT', 'MAKASSAR', '1998-04-27', '7371100404980000', 'aditia.rahman1111@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '089663288111', '089663288111', 'ISI SENDIRI', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(166, 171, NULL, 'AGUSSALIM', 'AGUS', 'PINRANG', '1992-08-13', '7315031308920000', 'Agusatt65@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081210474746', '081210474746', 'ISI SENDIRI', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(167, 172, NULL, 'NURHIKMA', 'NURHIKMA', 'PALLAMEANG', '1998-02-24', '7315016402980000', 'nurhikma2413@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085298522543', '085298522543', 'ISI SENDIRI', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(168, 173, NULL, 'ASRUL PRATAMA', 'ASRUL', 'KOLAKA', '1996-10-29', '7401141010960000', 'Asrunpratama86@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082292335496', '082292335496', 'ISI SENDIRI', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(170, 175, NULL, 'NURUL TRI WINDRATI S', 'NURUL', 'UJUNG PANDANG', '1997-03-12', '7371135703970000', 'Nurultriwindrati@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085930963397', '085930963397', 'ISI SENDIRI', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(171, 176, NULL, 'ANDI DEDI NIRWAN S', 'DEDI', 'WATAMPONE', '1994-09-12', '7306061203940000', 'Andidedinirwans@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085255533646', '085255533646', 'ISI SENDIRI', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(172, 177, NULL, 'NOVILIA JAO', 'NOVILIA', 'MAKASSAR', '1999-12-22', '7371066212990000', 'noviliajao@gmail.com', 'BUDHA', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082191385468', '082191385468', 'ISI SENDIRI', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(173, 178, NULL, 'ARDIANSYA KAMARUDDIN', 'ARDIANSYA', 'JENEPONTO', '1984-10-18', '7304031508840000', 'ardybungko@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085757777742', '085757777742', 'ISI SENDIRI', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(175, 180, NULL, 'FIRMAN', 'FIRMAN', 'JERAE SOPPENG', '1988-09-28', '7312042809880000', 'Vhyredcr@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085342384234', '085342384234', 'ISI SENDIRI', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(176, 181, NULL, 'RIVALDI SULHAM WIJAYA', 'RIVALDI', 'KOLAKA', '1994-06-21', '7471052107940000', 'rivaldi.dragnel@yahoo.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082187619873', '082187619873', 'ISI SENDIRI', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(177, 182, NULL, 'MUHAMMAD DJAYADI DJAFAR', 'MUHAMMAD', 'KENDARI', '1994-01-26', '7471012602940000', 'jayadia403@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082259954376', '082259954376', 'ISI SENDIRI', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(178, 183, NULL, 'PUTRI ZAHRA DWININGTYAS K.', 'PUTRI', 'AMBON', '1996-12-24', '7371116412960000', 'BEBYAMBASSADOR@GMAIL.COM', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081144408880', '081144408880', 'ISI SENDIRI', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(179, 184, NULL, 'JESSICA CLAUDIA LONDAH', 'JESSICA', 'MAKASSAR', '1994-01-03', '7371014301940000', 'jessylondah@gmail.com', 'KRISTEN PROTESTAN', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085397283770', '085397283770', 'ISI SENDIRI', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(180, 185, NULL, 'ARIF NUR QOLBI', 'ARIF', 'MALILI', '2000-01-20', '7324042001000000', 'arifnurqolbi4@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082290519242', '082290519242', 'ISI SENDIRI', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(181, 186, NULL, 'ANDI ACHLAK IBRAHIM TUNDRIBALI', 'ANDI ', 'UJUNG PANDANG', '1996-10-25', '7371042510960000', 'Achlak25@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '089695206462', '089695206462', 'ISI SENDIRI', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(182, 187, NULL, 'MUH. AFDHAL HIDAYAT N.', 'MUH', 'MAKASSAR', '1993-09-05', '7371110509930000', 'afdaljati05@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082192518310', '082192518310', 'ISI SENDIRI', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(183, 188, NULL, 'HEDRIANTO', 'HEDRIANTO', 'KASIPUTE', '1996-06-04', '7406040206960000', 'Antonsnookum@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085236873133', '085236873133', 'ISI SENDIRI', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(184, 189, NULL, 'MUH ASHARI HIDAYAT', 'MUH', 'UJUNG PANDANG', '1998-07-25', '7306082507980000', 'asharihidayat13@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0895806694963', '0895806694963', 'ISI SENDIRI', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(185, 190, NULL, 'FIRDAUS SYAM', 'FIRDAUS', 'MAKASSAR', '2000-02-14', '7371021402000000', 'dauslemah@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081391163934', '081391163934', 'ISI SENDIRI', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(186, 191, NULL, 'HERPIANSYAH T', 'HERPIANSYAH', 'KENDARI', '2001-08-22', '7471072208010000', 'piantorada28@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082259472108', '082259472108', 'ISI SENDIRI', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(187, 192, NULL, 'MUH REZKY BUDIMAN', 'MUH', 'MAKASSAR', '2000-07-13', '7306081307000000', 'rezkybudiman666@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082251800395', '082251800395', 'ISI SENDIRI', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(188, 193, NULL, 'HAIKAL', 'HAIKAL', 'KOLAKA', '1998-10-27', '7401142710980000', 'Haikalklk019@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085241498494', '085241498494', 'ISI SENDIRI', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(189, 194, NULL, 'AGUSDAR', 'AGUSDAR', 'LANTAWONUA', '1996-08-21', '7406042308960000', 'agusdardaud@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082244044347', '082244044347', 'ISI SENDIRI', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(190, 195, NULL, 'WAHYUDI ASTIRA', 'WAHYU', 'UJUNG PANDANG', '1997-11-07', '7371110711990000', 'Wahyudiastira97@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081242854009', '081242854009', 'ISI SENDIRI', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(191, 196, NULL, 'SAPARUDDIN', 'SAPARUDDIN', 'PACCELANG', '1993-06-02', '7310040206940000', 'Saparuddin3232@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082395008978', '082395008978', 'ISI SENDIRI', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(192, 197, NULL, 'KURNIAWAN', 'KURNI', 'MAKASSAR', '1996-08-29', '7306082908960000', 'kwawank74@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0895336510174', '0895336510174', 'ISI SENDIRI', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(193, 198, NULL, 'ISMAIL', 'ISMAIL', 'UJUNG PANDANG', '1996-11-29', '7371142911940000', 'ismailusman2911@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085340713613', '085340713613', 'ISI SENDIRI', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(194, 199, NULL, 'ANDREAS DUFAL PHENGRI', 'ANDREAS', 'MAKASSAR', '2000-08-03', '7371130308000000', 'andreasdufalphengri03@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '08970520280', '08970520280', 'ISI SENDIRI', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(195, 200, NULL, 'INDAH SEKAR SARI', 'INDAH', 'BONE-BONE', '1996-09-11', '7324075109960000', 'Indahsekarsari96@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081340358606', '081340358606', 'ISI SENDIRI', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(196, 201, NULL, 'MUHAMMAD SABRIADI', 'MUHAMMAD', 'KAMPUNG BARU', '1994-08-27', '7308172708940000', 'adifiaofaofficial@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085234950867', '085234950867', 'ISI SENDIRI', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(197, 202, NULL, 'TRIANA RAHAYU', 'TRIAN', 'UJUNG PANDANG', '2000-05-23', '7309026305000000', 'trianarahayu88@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '089671854891', '089671854891', 'ISI SENDIRI', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(198, 203, NULL, 'NURALISA HENDRAH', 'NURALISA', 'PARE-PARE', '1997-04-15', '7315025504970000', 'nuralisahend@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085256846565', '085256846565', 'ISI SENDIRI', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(199, 204, NULL, 'M. REZKY ANDHARESTA', 'REZKY', 'SUNGGUMINASA', '1998-05-23', '7306082305980000', 'ekky0598@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0895347489960', '0895347489960', 'ISI SENDIRI', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(200, 205, NULL, 'ERWIN', 'ERWIN', 'MALAYSIA', '1993-12-13', '7401191312930000', 'aslidarahbone93@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082292020192', '082292020192', 'ISI SENDIRI', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(201, 206, NULL, 'FLORENCIANO SYAM RUMATE', 'FLORENCIANO', 'JAKARTA', '1997-10-18', '7471051810970000', 'tinorumate18@gmail.com', 'KRISTEN KATHOLIK', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '08114054611', '08114054611', 'ISI SENDIRI', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(202, 207, NULL, 'SUHUDI', 'SUHUDI', 'ANREAPI', '1985-12-29', '7601022912850000', 'suhudibmundin@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085342196057', '085342196057', 'ISI SENDIRI', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(203, 208, NULL, 'OKTAVIUS BIRANA', 'OKTAVIUS', 'SURABAYA', '2000-11-20', '7373022011000000', 'Oktavbirana@gmail.com', 'KRISTEN KATHOLIK', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085213788679', '085213788679', 'ISI SENDIRI', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(204, 209, NULL, 'GAMAL ABDUL RAZAK MALU', 'GAMAL', 'PALANGGA', '1990-06-10', '7403121006900000', 'Gamalabdulrazakmalu1990@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081342443685', '081342443685', 'ISI SENDIRI', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(205, 210, NULL, 'AGUNG HAMKA PUTRA', 'AGUNG', 'PALOPO', '1995-09-10', '7373021009950000', 'agunghamka79@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082280222127', '082280222127', 'ISI SENDIRI', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(206, 211, NULL, 'RAMADANDI', 'RAMA', 'MAKASSAR', '1999-01-05', '7371090501990000', 'ramadandi@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085852622512', '085852622512', 'ISI SENDIRI', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(207, 212, NULL, 'RIJAL JANUAR M. BANDANGI', 'JANUAR', 'BAU-BAU', '1994-01-24', '7472062401940000', 'rijaljanuar24@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085298702295', '085298702295', 'ISI SENDIRI', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(208, 213, NULL, 'ILHAM', 'ILHAM', 'MAMUJU', '1998-05-21', '7602081210980000', 'ilhamtopan816@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085340889182', '085340889182', 'ISI SENDIRI', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(209, 214, NULL, 'NUR ALFIANINGSIH RAJA', 'NUR', 'BULUKUMBA', '1998-09-16', '7302025609980000', 'nuralfianingsihraja@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085342675230', '085342675230', 'ISI SENDIRI', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(210, 215, NULL, 'MUH. RIFAI, SP', 'MUH', 'INALAHI', '1989-11-19', '7402031911890000', 'paivhy18@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085394415441', '085394415441', 'ISI SENDIRI', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(211, 216, NULL, 'MUH NUZHUL MUADIY N', 'MUH', 'UJUNG PANDANG', '1996-03-10', '7371061003960000', 'nuzhul@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0', '0', 'ISI SENDIRI', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(212, 217, NULL, 'MUHAMMAD RIKI ESA PUTRA, SKM', 'MUHAMMAD', 'EREKE', '1994-01-01', '7410010101940000', 'Rikikdi20@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081356762946', '081356762946', 'ISI SENDIRI', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(213, 218, NULL, 'MUH. HASRULLAH', 'HASRULLAH', 'LUWU TIMUR', '2001-05-12', '7324071208010000', 'muhammadhasrullah12@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081242190928', '081242190928', 'ISI SENDIRI', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(214, 219, NULL, 'ABD. RAHMAN', 'ABD', 'TORONIPA', '1989-09-06', '7402110609890000', 'abd699225@gamil.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081332011600', '081332011600', 'ISI SENDIRI', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(215, 220, NULL, 'HILMAN GUNAWAN', 'HILMAN', 'KENDARI', '1995-06-28', '7471092806950000', 'hilmannabila143@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082348504788', '082348504788', 'ISI SENDIRI', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(216, 221, NULL, 'BASO IRVAN', 'BASO', 'PEKKAE', '1998-12-27', '7313042712980000', 'basoirvan@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082345427767', '082345427767', 'ISI SENDIRI', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(217, 222, NULL, 'FITRIANI AHMAR', 'FITRIANI', 'TOSIBA', '1997-02-04', '7401204402970000', 'fitrianiahmar64@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082349899127', '082349899127', 'ISI SENDIRI', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(218, 223, NULL, 'INDAH WAHYUNI', 'INDAH', 'ATULA', '1998-06-04', '7401094406970000', 'indahwahyuni@gmail.com', 'HINDU', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082293514891', '082293514891', 'ISI SENDIRI', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(219, 224, NULL, 'SUNARSIS OKTAPIAN', 'SUNARSIS', 'MAMUJU', '1998-10-13', '7601021310980000', 'sunarsis@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082261857235', '082261857235', 'ISI SENDIRI', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(220, 225, NULL, 'FAHMI SLAMET', 'FAHMI', 'UJUNG PANDANG', '1993-01-31', '7371103101930000', 'Fahmysungkar55@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085824816341', '085824816341', 'ISI SENDIRI', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(221, 226, NULL, 'AHMAD GAZALI', 'GAZALI', 'BAU-BAU', '1994-04-04', '7472020404940000', 'gazaliahmad833@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082349192290', '082349192290', 'ISI SENDIRI', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(222, 227, NULL, 'ILHAM JAYA', 'ILHAM', 'BULUKUMBA', '1999-12-18', '7302091812980000', 'ilhamjaya@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '089517193541', '089517193541', 'ISI SENDIRI', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(223, 228, NULL, 'AGATHA LUSIANA RESI', 'LUSIANA', 'KENDARI', '1994-08-23', '7471064308940000', 'agathalusiana23@gmail.com', 'KRISTEN KATHOLIK', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081256335930', '081256335930', 'ISI SENDIRI', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(224, 229, NULL, 'RUSDIAN', 'RUSDIAN', 'MAKASSAR', '1984-08-23', '7371112308840000', 'rusdian228@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0', '0', 'ISI SENDIRI', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(225, 230, NULL, 'WAHYUDI ILHAM', 'WAHYUDI', 'MEDAN', '1985-01-18', '7371121801850000', 'wahyudiilham@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081342004449', '081342004449', 'ISI SENDIRI', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(226, 231, NULL, 'MUHAMMAD HASBI B', 'MUHAM', 'UJUNG PANDANG', '1990-05-05', '7371140505900000', 'hasbib@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085256103683/\'085342770599', '085256103683/\'085342770599', 'ISI SENDIRI', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(227, 232, NULL, 'ABD RIZAL R', 'ABD', 'MAKASSAR', '1997-10-21', '7371112110970000', 'abdrizal@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0', '0', 'ISI SENDIRI', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(228, 233, NULL, 'PUTRI CYNTHIA DEWI', 'PUTRI', 'FALABISAHAYA', '1999-03-19', '7406055903990000', 'putricyntia@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082317477984/082346717831', '082317477984/082346717831', 'ISI SENDIRI', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(229, 234, NULL, 'AFRI TRY ADISAPUTRA', 'AFRI', 'PARIA', '1997-04-08', '7313050804990000', 'afrhy080497@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082318393749', '082318393749', 'ISI SENDIRI', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(230, 235, NULL, 'EDWIN INDRA SAPUTRA', 'EDWIN', 'KENDARI', '1990-07-14', '7401031407900000', 'edwinsyaputra1990@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085340119070', '085340119070', 'ISI SENDIRI', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(231, 236, NULL, 'NURFAIDA', 'NURFAIDA', 'KAMPUNG BARU', '1996-11-22', '7401016211960000', 'nfaida4@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082271029373', '082271029373', 'ISI SENDIRI', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(232, 237, NULL, 'EKO OKTO PIANUS', 'EKO', 'KENDARI', '1993-10-04', '7471010410930000', 'eko.oktopianus@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082189467816', '082189467816', 'ISI SENDIRI', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(233, 238, NULL, 'ALIMUDDIN', 'ALIMUDDIN', 'LUTANG', '1997-08-15', '7605081508970000', 'alimuddin1508@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082393384034', '082393384034', 'ISI SENDIRI', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(234, 239, NULL, 'SALEH FAKOUBUN', 'SALEH', 'LANGGIAR', '1996-07-06', '7313050607960000', 'sholehle244@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085256474329', '085256474329', 'ISI SENDIRI', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(235, 240, NULL, 'YUSRI', 'YUSRI', '0', '1970-01-01', '0', 'yusri123@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0', '0', 'ISI SENDIRI', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(236, 241, NULL, 'DIRGA', 'DIRGA', 'POMBAKKA', '1996-08-12', '7322081208960000', 'dirga1226@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082297631163', '082297631163', 'ISI SENDIRI', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(237, 242, NULL, 'TRI UTAMA', 'UTAMA', 'UJUNG PANDANG', '1990-05-30', '7371093005900000', 'prima30mei@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082340932655', '082340932655', 'ISI SENDIRI', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(238, 243, NULL, 'CICI RINDIANI', 'CICI', 'BAU-BAU', '1999-10-16', '7471045610990000', 'cicirindiani@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '087869503818', '087869503818', 'ISI SENDIRI', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(239, 244, NULL, 'ZULKARNAIN', 'ZULKARNAIN', 'KENDARI', '1995-01-19', '7471071901950000', 'nhaim590@email.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082195605619', '082195605619', 'ISI SENDIRI', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(240, 245, NULL, 'KENAN YESAYA WOWILING', 'YESAYA', 'UJUNG PANDANG', '1991-06-14', '7306081406910000', 'kenanyesaya.wowiling@gmail.com', 'KRISTEN PROTESTAN', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082145631553', '082145631553', 'ISI SENDIRI', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(241, 246, NULL, 'FHAIZAL SHAFWAN', 'SHAFWAN', 'KENDARI', '1987-04-14', '7471071404870000', 'Faizalshafwan8787@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085210299495', '085210299495', 'ISI SENDIRI', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(242, 247, NULL, 'KAMARUDDIN', 'KAMARUDDIN', 'SANGIA', '1990-11-20', '7403232011900000', 'kamarudin0089@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085222262928', '085222262928', 'ISI SENDIRI', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(243, 248, NULL, 'DIMAS AL FARIZI', 'DIMAS', 'KENDARI', '2022-09-08', '7471060909020000', 'Dimas Al farizi CRK KO2 KDI 22057', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082258580559', '082258580559', 'ISI SENDIRI', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(244, 249, NULL, 'MUH. ASRUL', 'MUH', 'PARE-PARE', '1994-02-28', '7204062802940000', 'muhasrul301@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082292757029', '082292757029', 'ISI SENDIRI', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(245, 250, NULL, 'MUH. SATRAWAN', 'MUH', 'KENDARI', '1993-06-23', '7471022306930000', 'satrawan@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0', '0', 'ISI SENDIRI', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(246, 251, NULL, 'ANGELITHA POPO BONIVASIA', 'ANGEL', 'MAKASSAR', '1996-12-04', '7471034412960000', 'angelithapopo@gmail.com', 'KRISTEN KATHOLIK', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081341760633', '081341760633', 'ISI SENDIRI', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(247, 252, NULL, 'SERLIANA ROSALINA', 'ROSALINA', 'TANETE', '1994-08-10', '7318316005940000', 'Sherliana.rosali@gmail.com', 'KRISTEN PROTESTAN', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085298591297', '085298591297', 'ISI SENDIRI', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(248, 253, NULL, 'MULIADI', 'MULIADI', 'LABAWANG', '1990-04-04', '7314023112880020', 'nuradhysalman@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085299334727', '085299334727', 'ISI SENDIRI', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(249, 254, NULL, 'CARLEN BU’TUBULAAN SARANGA’', 'CARLEN', 'RANTEPAO', '1999-11-10', '7326155011990000', 'carlensarangat@gmail.com', 'KRISTEN KATHOLIK', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082291319405', '082291319405', 'ISI SENDIRI', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(250, 255, NULL, 'RUSTAM', 'RUSTAM', 'TOREO', '1997-01-21', '7409052101970000', 'rustam123@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081292088460', '081292088460', 'ISI SENDIRI', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(251, 256, NULL, 'ANDI MUSMANAWIR', 'ANDI', 'BAU-BAU', '1991-05-05', '7406010505910000', 'andimusmanawir@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0', '0', 'ISI SENDIRI', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(252, 257, NULL, 'IRWAN MUSTARING', 'IRWAN', 'SIMBUNE', '1988-12-30', '7401023012880000', 'Irwanmustaring2903@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085342626956', '085342626956', 'ISI SENDIRI', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(253, 258, NULL, 'FEBIAN RINALDI', 'FEBIAN', 'KOLAKA', '1995-03-16', '7401140703950000', 'febianrinaldi@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0', '0', 'ISI SENDIRI', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(254, 259, NULL, 'IRFAN', 'IRFAN', 'UJUNG PANDANG', '1997-11-02', '7371070211970000', 'irfan123@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082192290613', '082192290613', 'ISI SENDIRI', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(255, 260, NULL, 'WAHYUDDIN', 'WAHYUDDIN', 'UJUNG PANDANG', '1996-08-22', '7371062208960000', 'wahyuddin123@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085298928106', '085298928106', 'ISI SENDIRI', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(256, 261, NULL, 'MARIA ANGELICA', 'MARIA', 'POLEWALI', '2000-03-07', '7603064703000000', 'mariaangelmangoli@gmail.com', 'KRISTEN PROTESTAN', 'PEREMPUAN', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082196290570', '082196290570', 'ISI SENDIRI', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(257, 262, NULL, 'AMRIN HARMANTO', 'AMRIN', 'SINJAI', '1991-01-20', '7307022001910000', 'amrinharmanto@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0', '0', 'ISI SENDIRI', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(258, 263, NULL, 'RIDWAN', 'RIDWAN', 'AJJALIRENG', '1995-03-15', '7308171503950000', 'ridwan12345@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '081219812204', '081219812204', 'ISI SENDIRI', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(259, 264, NULL, 'SAFARUDDIN', 'SAFARUDDIN', 'SENGKANG', '1994-04-15', '7313060107940070', 'safaruddin@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082238343433', '082238343433', 'ISI SENDIRI', '2022-03-22 00:31:17', '2022-03-22 00:31:17');
INSERT INTO `data_diri` (`id`, `id_akun`, `foto`, `nama_lengkap`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `nik`, `email`, `agama`, `jenis_kelamin`, `status_perkawinan`, `no_bpjs`, `tinggi_badan`, `berat_badan`, `golongan_darah`, `suku`, `total_saudara`, `alamat_ktp`, `provinsi_ktp`, `kota_ktp`, `kabupaten_ktp`, `kecamatan_ktp`, `kelurahan_ktp`, `pos_ktp`, `alamat_domisili`, `provinsi_domisili`, `kota_domisili`, `kabupaten_domisili`, `kecamatan_domisili`, `kelurahan_domisili`, `instagram`, `facebook`, `linkedin`, `twitter`, `nomor_whatsapp`, `nomor_hp`, `cerita_diri`, `created_at`, `updated_at`) VALUES
(260, 265, NULL, 'GALANG HIDAYAT', 'GALANG', 'WATAMPONE', '2001-12-08', '7308220112010000', 'galanghidayat@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0', '0', 'ISI SENDIRI', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(261, 266, NULL, 'MUH. ALFIAN N.', 'MUH', 'MAKASSAR', '2002-06-08', '7371110806020000', 'muhalfian@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0', '0', 'ISI SENDIRI', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(262, 267, NULL, 'ANDI RIZAL', 'ANDI', 'GOLLEK', '1997-01-14', '7301011401970000', 'andirizal@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0', '0', 'ISI SENDIRI', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(263, 268, NULL, 'FAHRUL', 'FAHRUL', 'BUAKANA', '2001-06-19', '7371131906010000', 'fahrul12345@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '0', '0', 'ISI SENDIRI', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(264, 270, NULL, 'ASHABUL MAHDI', 'ASHABUL', 'UJUNG PANDANG', '1996-12-21', '7371122112960000', 'Mahdiashabul@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085242590918', '085242590918', 'ISI SENDIRI', '2022-03-23 19:48:37', '2022-03-23 19:48:37'),
(265, 271, NULL, 'ZULKIFLI', 'KIFLI', 'BANTAENG', '1994-07-14', '3318101407940004', 'samfaisal7890@gmail.com', 'ISLAM', 'LAKI-LAKI', 'BELUM KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '085256486087', '085256486087', 'ISI SENDIRI', '2022-03-24 01:27:53', '2022-03-24 01:27:53'),
(266, 272, NULL, 'MUHAMMAD IRFAN MUSLIMIN', 'IRFAN', 'BONE', '1992-11-10', '7308211702920002', 'muhammadilhamalnur@gmail.com', 'ISLAM', 'LAKI-LAKI', 'SUDAH KAWIN', NULL, NULL, NULL, NULL, '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, 'ISI SENDIRI', '', '', '', '', '', NULL, NULL, NULL, NULL, '082393218977', '082393218977', 'ISI SENDIRI', '2022-03-24 01:52:48', '2022-03-24 01:52:48'),
(267, 3, 'profil_file_1648186977.jpeg', 'DIANA THERESA KOTA', 'DIANA', 'UJUNG PANDANG', '1997-09-05', '2024000055', 'diana.theresa@indokaisa.com', 'KRISTEN KATHOLIK', 'PEREMPUAN', 'BELUM KAWIN', NULL, '158', '40', 'B', '1', '2', 'JALAN KOPTU HARUN NO. 58', 'SULAWESI SELATAN', 'MAKASSAR', 'MAKASSAR', 'UJUNG TANAH', 'GUSUNG', '90163', 'JALAN KOPTU HARUN NO. 58', 'SULAWESI SELATAN', 'MAKASSAR', 'MAKASSAR', 'UJUNG TANAH', 'GUSUNG', 'https://www.instagram.com/dtk597/', 'https://www.facebook.com/dianatheresa597/', 'https://www.linkedin.com/in/diana-theresa-825791134/', NULL, '0895806730889', '0895806730889', 'HAI,', '2022-03-24 22:42:57', '2022-03-24 22:42:57'),
(269, 275, 'profil_file_1648693604.jpg', 'NURHALIZAH', 'LIZA', 'LAJOKKA', '1998-02-15', '7313085502980002', 'nurhalizah.1598@gmail.com', 'ISLAM', 'PEREMPUAN', 'BELUM KAWIN', NULL, '150', '41', 'A', 'BUGIS', '3', 'LAJOKKA', 'SULAWESI SELATAN', 'LAJOKKA', 'WAJO', 'TANASITOLO', 'TONRALIPUE', '90995', 'PONDOK 3 SAUDARA, PERINTIS KEMERDEKAAN IV, LORONG 1', 'SULAWESI SELATAN', 'MAKASSAR', 'MAKASSAR', 'TAMALANREA', 'TAMALANREA RAYA', 'nrhliizahh_', 'nurhalizah', NULL, NULL, '082195864898', '082195864898', 'saya Liza,saya pernah bekerja di Sicepat Express sbg Adm CS COD kurang lebih 3 bln.terbiasa bekerja dibawah tekanan dan bekerja sama dgn tim/individu.', '2022-03-30 19:26:44', '2022-03-30 19:26:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `dingtalk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `norek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_karyawan`
--

INSERT INTO `data_karyawan` (`id`, `id_akun`, `dingtalk`, `norek`, `bank`, `kode_bank`, `created_at`, `updated_at`) VALUES
(1, 2, 'Chaidyr', '1520018601506', 'MANDIRI', '008', '2022-03-20 23:29:52', '2022-03-20 23:29:52'),
(2, 3, NULL, NULL, 'MANDIRI', '008', '2022-03-20 23:35:03', '2022-03-20 23:35:03'),
(3, 4, NULL, NULL, 'MANDIRI', '008', '2022-03-20 23:51:45', '2022-03-20 23:51:45'),
(4, 8, NULL, '1520018601472', 'MANDIRI', '008', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(5, 9, NULL, '1520018601498', 'MANDIRI', '008', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(6, 10, NULL, '1520018601456', 'MANDIRI', '008', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(7, 11, NULL, '1520018600268', 'MANDIRI', '008', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(8, 12, NULL, '1520018600227', 'MANDIRI', '008', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(9, 13, NULL, '1520018600250', 'MANDIRI', '008', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(10, 14, NULL, '1520018600292', 'MANDIRI', '008', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(11, 15, NULL, '1520018600300', 'MANDIRI', '008', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(12, 16, NULL, '1520018601597', 'MANDIRI', '008', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(13, 17, NULL, '1520018600425', 'MANDIRI', '008', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(14, 18, NULL, '1520018600367', 'MANDIRI', '008', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(15, 19, NULL, '1520018600342', 'MANDIRI', '008', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(16, 20, NULL, '1520018601647', 'MANDIRI', '008', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(17, 21, NULL, '1520018601654', 'MANDIRI', '008', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(18, 22, NULL, '1520018601589', 'MANDIRI', '008', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(19, 23, NULL, '1520018601563', 'MANDIRI', '008', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(20, 24, NULL, '1520018601613', 'MANDIRI', '008', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(21, 25, NULL, '1520018601571', 'MANDIRI', '008', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(22, 26, NULL, '1520018601720', 'MANDIRI', '008', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(23, 27, NULL, '1520018601779', 'MANDIRI', '008', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(24, 28, NULL, '1520018601688', 'MANDIRI', '008', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(25, 29, NULL, '1520018601670', 'MANDIRI', '008', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(26, 30, NULL, '1520018601712', 'MANDIRI', '008', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(27, 31, NULL, '1520018600243', 'MANDIRI', '008', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(28, 32, NULL, '1520018601480', 'MANDIRI', '008', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(29, 33, NULL, '1520018601753', 'MANDIRI', '008', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(30, 34, NULL, '1620003987298', 'MANDIRI', '008', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(31, 35, NULL, '1520018618906', 'MANDIRI', '008', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(32, 36, NULL, '1520018618914', 'MANDIRI', '008', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(33, 37, NULL, '1620003987611', 'MANDIRI', '008', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(34, 38, NULL, '1520018629804', 'MANDIRI', '008', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(35, 39, NULL, '1520018628129', 'MANDIRI', '008', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(36, 40, NULL, '1520018650651', 'MANDIRI', '008', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(37, 41, NULL, '1520018636874', 'MANDIRI', '008', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(38, 42, NULL, '1520018629838', 'MANDIRI', '008', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(39, 43, NULL, '1520018629820', 'MANDIRI', '008', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(40, 44, NULL, '1520018629770', 'MANDIRI', '008', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(41, 45, NULL, '1520018632576', 'MANDIRI', '008', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(42, 46, NULL, '1520018632402', 'MANDIRI', '008', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(43, 47, NULL, '1520018639217', 'MANDIRI', '008', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(44, 48, NULL, '1520018642757', 'MANDIRI', '008', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(45, 49, NULL, '1620004047753', 'MANDIRI', '008', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(46, 50, NULL, '1520018719928', 'MANDIRI', '008', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(47, 51, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(48, 52, NULL, '1520018771960', 'MANDIRI', '008', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(49, 53, NULL, '1520018691796', 'MANDIRI', '008', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(50, 54, NULL, '1700006009694', 'MANDIRI', '008', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(51, 55, NULL, '1740001806892', 'MANDIRI', '008', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(52, 56, NULL, '1700004833277', 'MANDIRI', '008', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(53, 57, NULL, '1620004152942', 'MANDIRI', '008', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(54, 58, NULL, '1520018758538', 'MANDIRI', '008', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(55, 59, NULL, '1520018758546', 'MANDIRI', '008', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(56, 60, NULL, '1520018758553', 'MANDIRI', '008', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(57, 61, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(58, 62, NULL, '1620004451260', 'MANDIRI', '008', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(59, 63, NULL, '1620004202994', 'MANDIRI', '008', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(60, 64, NULL, '1520014864736', 'MANDIRI', '008', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(61, 65, NULL, '1520018719951', 'MANDIRI', '008', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(62, 66, NULL, '1700004580043', 'MANDIRI', '008', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(63, 67, NULL, '1700006049104', 'MANDIRI', '008', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(64, 68, NULL, '1620004202812', 'MANDIRI', '008', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(65, 69, NULL, NULL, 'MANDIRI', '008', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(66, 70, NULL, '1520018745386', 'MANDIRI', '008', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(67, 71, NULL, '1520018758579', 'MANDIRI', '008', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(68, 72, NULL, '1520018758462', 'MANDIRI', '008', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(69, 73, NULL, '1520018738001', 'MANDIRI', '008', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(70, 74, NULL, '1620004202614', 'MANDIRI', '008', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(71, 75, NULL, '1740002955698', 'MANDIRI', '008', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(72, 76, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(73, 77, NULL, '1520018758447', 'MANDIRI', '008', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(74, 78, NULL, '1520018758561', 'MANDIRI', '008', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(75, 79, NULL, '1520018737524', 'MANDIRI', '008', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(76, 80, NULL, '1520018737508', 'MANDIRI', '008', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(77, 81, NULL, '1520054502147', 'MANDIRI', '008', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(78, 82, NULL, '1520025258779', 'MANDIRI', '008', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(79, 83, NULL, '1520025253259', 'MANDIRI', '008', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(80, 84, NULL, '1520018758470', 'MANDIRI', '008', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(81, 85, NULL, '1620004243626', 'MANDIRI', '008', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(82, 86, NULL, '1620004247817', 'MANDIRI', '008', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(83, 87, NULL, '1520018777728', 'MANDIRI', '008', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(84, 88, NULL, '1520018780698', 'MANDIRI', '008', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(85, 89, NULL, '1700006152494', 'MANDIRI', '008', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(86, 90, NULL, '1620004249490', 'MANDIRI', '008', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(87, 91, NULL, '1700006114486', 'MANDIRI', '008', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(88, 92, NULL, '1700005996347', 'MANDIRI', '008', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(89, 93, NULL, '1520018797353', 'MANDIRI', '008', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(90, 94, NULL, '1520018920013', 'MANDIRI', '008', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(91, 95, NULL, '1520018797221', 'MANDIRI', '008', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(92, 96, NULL, '1520018801874', 'MANDIRI', '008', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(93, 97, NULL, '1520018800082', 'MANDIRI', '008', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(94, 98, NULL, '1520018781951', 'MANDIRI', '008', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(95, 99, NULL, '1700006116945', 'MANDIRI', '008', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(96, 100, NULL, '1740003035623', 'MANDIRI', '008', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(97, 101, NULL, '1520018801775', 'MANDIRI', '008', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(98, 102, NULL, '1520018797379', 'MANDIRI', '008', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(99, 103, NULL, '1520018783759', 'MANDIRI', '008', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(100, 104, NULL, '1520018797262', 'MANDIRI', '008', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(101, 105, NULL, '1520018772646', 'MANDIRI', '008', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(102, 106, NULL, '1740002977791', 'MANDIRI', '008', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(103, 107, NULL, '1740002981611', 'MANDIRI', '008', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(104, 108, NULL, '1520018776480', 'MANDIRI', '008', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(105, 109, NULL, '1520018852000', 'MANDIRI', '008', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(106, 110, NULL, '1520018801825', 'MANDIRI', '008', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(107, 111, NULL, '1520018801783', 'MANDIRI', '008', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(108, 112, NULL, '1520018790366', 'MANDIRI', '008', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(109, 113, NULL, '1700006130698', 'MANDIRI', '008', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(110, 114, NULL, '1520018801767', 'MANDIRI', '008', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(111, 115, NULL, '1740001349083', 'MANDIRI', '008', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(112, 116, NULL, '1520018819991', 'MANDIRI', '008', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(113, 117, NULL, '1520018919924', 'MANDIRI', '008', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(114, 118, NULL, '1740002987055', 'MANDIRI', '008', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(115, 119, NULL, '1520018797312', 'MANDIRI', '008', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(116, 120, NULL, '1700006152502', 'MANDIRI', '008', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(117, 121, NULL, '1700006152478', 'MANDIRI', '008', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(118, 122, NULL, '1520018797429', 'MANDIRI', '008', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(119, 123, NULL, '1520018797452', 'MANDIRI', '008', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(120, 124, NULL, '1520018797395', 'MANDIRI', '008', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(121, 125, NULL, '1520018787834', 'MANDIRI', '008', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(122, 126, NULL, '1520018797304', 'MANDIRI', '008', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(123, 127, NULL, '1520018797361', 'MANDIRI', '008', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(124, 128, NULL, '1700001165798', 'MANDIRI', '008', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(125, 129, NULL, '1700006202703', 'MANDIRI', '008', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(126, 130, NULL, '1520018797254', 'MANDIRI', '008', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(127, 131, NULL, '1740001838416', 'MANDIRI', '008', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(128, 132, NULL, '1620004250761', 'MANDIRI', '008', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(129, 133, NULL, '1700002327181', 'MANDIRI', '008', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(130, 134, NULL, '1520018830360', 'MANDIRI', '008', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(131, 135, NULL, '1520018833463', 'MANDIRI', '008', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(132, 136, NULL, '1740003028362', 'MANDIRI', '008', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(133, 137, NULL, '1520018847760', 'MANDIRI', '008', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(134, 138, NULL, '1700006198182', 'MANDIRI', '008', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(135, 139, NULL, '1700006216414', 'MANDIRI', '008', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(136, 140, NULL, '1620004272666', 'MANDIRI', '008', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(137, 141, NULL, '1570006947858', 'MANDIRI', '008', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(138, 142, NULL, '1700006172443', 'MANDIRI', '008', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(139, 143, NULL, '1620004283945', 'MANDIRI', '008', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(140, 144, NULL, NULL, 'MANDIRI', '008', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(141, 145, NULL, '1620004284745', 'MANDIRI', '008', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(142, 146, NULL, '1620004283986', 'MANDIRI', '008', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(143, 147, NULL, '1700006217925', 'MANDIRI', '008', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(144, 148, NULL, '1520018824660', 'MANDIRI', '008', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(145, 149, NULL, '1520019972526', 'MANDIRI', '008', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(146, 150, NULL, '1520018843736', 'MANDIRI', '008', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(147, 151, NULL, '1520018845707', 'MANDIRI', '008', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(148, 152, NULL, '1620004341446', 'MANDIRI', '008', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(149, 153, NULL, '1520018887667', 'MANDIRI', '008', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(150, 154, NULL, '1700006289668', 'MANDIRI', '008', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(151, 155, NULL, '1740003085560', 'MANDIRI', '008', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(152, 156, NULL, '1520019019955', 'MANDIRI', '008', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(153, 157, NULL, '1520019019930', 'MANDIRI', '008', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(154, 158, NULL, '1520024755668', 'MANDIRI', '008', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(155, 159, NULL, '1520025646569', 'MANDIRI', '008', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(156, 160, NULL, '1620004359877', 'MANDIRI', '008', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(157, 161, NULL, '1520055646943', 'MANDIRI', '008', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(158, 162, NULL, '1520018900601', 'MANDIRI', '008', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(159, 163, NULL, '1620004387639', 'MANDIRI', '008', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(160, 164, NULL, '1620004398321', 'MANDIRI', '008', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(161, 165, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(162, 166, NULL, '1520019019690', 'MANDIRI', '008', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(163, 167, NULL, '1520018941605', 'MANDIRI', '008', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(164, 168, NULL, '1520018941845', 'MANDIRI', '008', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(165, 169, NULL, '1520018941779', 'MANDIRI', '008', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(166, 170, NULL, '1520019019187', 'MANDIRI', '008', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(167, 171, NULL, '1020009818458', 'MANDIRI', '008', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(168, 172, NULL, '1700006542785', 'MANDIRI', '008', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(169, 173, NULL, '1620004560961', 'MANDIRI', '008', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(171, 175, NULL, '1740003274958', 'MANDIRI', '008', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(172, 176, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(173, 177, NULL, '1520019051370', 'MANDIRI', '008', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(174, 178, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(176, 180, NULL, '1700006810034', 'MANDIRI', '008', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(177, 181, NULL, '1620004643684', 'MANDIRI', '008', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(178, 182, NULL, '1620004643783', 'MANDIRI', '008', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(179, 183, NULL, '1520018770699', 'MANDIRI', '008', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(180, 184, NULL, '1520019177290', 'MANDIRI', '008', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(181, 185, NULL, '1700006819522', 'MANDIRI', '008', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(182, 186, NULL, '1520019129630', 'MANDIRI', '008', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(183, 187, NULL, '1520019242490', 'MANDIRI', '008', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(184, 188, NULL, '1620004760959', 'MANDIRI', '008', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(185, 189, NULL, '1740003505930', 'MANDIRI', '008', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(186, 190, NULL, '1520019299268', 'MANDIRI', '008', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(187, 191, NULL, '1620004775213', 'MANDIRI', '008', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(188, 192, NULL, '1520019290135', 'MANDIRI', '008', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(189, 193, NULL, '1620003423955', 'MANDIRI', '008', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(190, 194, NULL, '1620004807149', 'MANDIRI', '008', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(191, 195, NULL, '1520031035237', 'MANDIRI', '008', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(192, 196, NULL, '1520018308227', 'MANDIRI', '008', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(193, 197, NULL, '1520031021120', 'MANDIRI', '008', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(194, 198, NULL, '1520031047430', 'MANDIRI', '008', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(195, 199, NULL, '1740003882917', 'MANDIRI', '008', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(196, 200, NULL, '1700010160566', 'MANDIRI', '008', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(197, 201, NULL, '1700010204539', 'MANDIRI', '008', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(198, 202, NULL, '1520031062934', 'MANDIRI', '008', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(199, 203, NULL, '1520031062991', 'MANDIRI', '008', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(200, 204, NULL, '1520031090422', 'MANDIRI', '008', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(201, 205, NULL, '1620005490796', 'MANDIRI', '008', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(202, 206, NULL, '1520031197078', 'MANDIRI', '008', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(203, 207, NULL, '1510014813213', 'MANDIRI', '008', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(204, 208, NULL, '1700010614760', 'MANDIRI', '008', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(205, 209, NULL, '1620005477538', 'MANDIRI', '008', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(206, 210, NULL, '1700010618472', 'MANDIRI', '008', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(207, 211, NULL, '1520031209279', 'MANDIRI', '008', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(208, 212, NULL, '1620004448431', 'MANDIRI', '008', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(209, 213, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(210, 214, NULL, '1520018952289', 'MANDIRI', '008', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(211, 215, NULL, '1620005599240', 'MANDIRI', '008', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(212, 216, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(213, 217, NULL, '1620005568195', 'MANDIRI', '008', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(214, 218, NULL, '1700010770232', 'MANDIRI', '008', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(215, 219, NULL, '1620005615418', 'MANDIRI', '008', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(216, 220, NULL, '1620005371079', 'MANDIRI', '008', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(217, 221, NULL, '1700000540835', 'MANDIRI', '008', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(218, 222, NULL, '1620005631936', 'MANDIRI', '008', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(219, 223, NULL, '1620005652544', 'MANDIRI', '008', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(220, 224, NULL, '1700010813461', 'MANDIRI', '008', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(221, 225, NULL, '1520031052034', 'MANDIRI', '008', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(222, 226, NULL, '1620005651710', 'MANDIRI', '008', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(223, 227, NULL, '1740004209383', 'MANDIRI', '008', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(224, 228, NULL, '1620005652817', 'MANDIRI', '008', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(225, 229, NULL, '1520031333483', 'MANDIRI', '008', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(226, 230, NULL, '1520031341973', 'MANDIRI', '008', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(227, 231, NULL, '1520031334077', 'MANDIRI', '008', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(228, 232, NULL, '1520031334812', 'MANDIRI', '008', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(229, 233, NULL, '1620005684067 \n', 'MANDIRI', '008', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(230, 234, NULL, '1700010874307', 'MANDIRI', '008', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(231, 235, NULL, '1620005729292', 'MANDIRI', '008', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(232, 236, NULL, '1620005744242', 'MANDIRI', '008', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(233, 237, NULL, '1620005741834', 'MANDIRI', '008', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(234, 238, NULL, '1520031197276', 'MANDIRI', '008', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(235, 239, NULL, '1540016432977', 'MANDIRI', '008', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(236, 240, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(237, 241, NULL, '1700010903205', 'MANDIRI', '008', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(238, 242, NULL, '1520031370139', 'MANDIRI', '008', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(239, 243, NULL, '1520031374131', 'MANDIRI', '008', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(240, 244, NULL, '1620005754472', 'MANDIRI', '008', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(241, 245, NULL, '1520031408624', 'MANDIRI', '008', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(242, 246, NULL, '1620005751338', 'MANDIRI', '008', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(243, 247, NULL, '1620005748623', 'MANDIRI', '008', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(244, 248, NULL, '1620005745975', 'MANDIRI', '008', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(245, 249, NULL, '1700010916389', 'MANDIRI', '008', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(246, 250, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(247, 251, NULL, '9000025404501', 'MANDIRI', '008', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(248, 252, NULL, '1860000291761', 'MANDIRI', '008', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(249, 253, NULL, '1520031374263', 'MANDIRI', '008', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(250, 254, NULL, '1520031437029', 'MANDIRI', '008', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(251, 255, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(252, 256, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(253, 257, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(254, 258, NULL, '16200005773498', 'MANDIRI', '008', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(255, 259, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(256, 260, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(257, 261, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(258, 262, NULL, '1520018826061', 'MANDIRI', '008', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(259, 263, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(260, 264, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(261, 265, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(262, 266, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(263, 267, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(264, 268, NULL, '0', 'MANDIRI', '008', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(265, 270, NULL, '1520031091305', 'MANDIRI', '008', '2022-03-23 19:48:37', '2022-03-23 19:48:37'),
(266, 271, NULL, '0', 'MANDIRI', '008', '2022-03-24 01:27:53', '2022-03-24 01:27:53'),
(267, 272, NULL, '0', 'MANDIRI', '008', '2022-03-24 01:52:48', '2022-03-24 01:52:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_perusahaan`
--

CREATE TABLE `data_perusahaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `nama_pemilik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_perusahaan`
--

INSERT INTO `data_perusahaan` (`id`, `id_perusahaan`, `nama_pemilik`, `foto`, `alamat`, `provinsi`, `kota`, `kabupaten`, `kecamatan`, `kelurahan`, `created_at`, `updated_at`) VALUES
(1, 1, 'K Johan Kurnia', 'profil_file_1647844086.jpg', 'RUKO TAMAN PALEM LESTARI BLOK A11 NO15-16', 'DKI JAKARTA', 'JAKARTA BARAT', 'JAKARTA BARAT', 'CENGKARENG', 'CENGKARENG BARAT', '2022-03-20 23:28:06', '2022-03-20 23:28:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pemilikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` enum('SKCK','KTP','KARTU KELUARGA','SIM','STNK','FOTO MOTOR','BPJS KESEHATAN','PBJS KETENAGAKERJAAN') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`id`, `id_akun`, `nama_file`, `status_pemilikan`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 2, 'KTP_file_1648092252.pdf', 'Sendiri', 'KTP', '2022-03-23 20:24:12', '2022-03-23 20:24:12'),
(2, 2, 'SKCK_file_1648092290.pdf', 'Sendiri', 'SKCK', '2022-03-23 20:24:50', '2022-03-23 20:24:50'),
(3, 2, 'KARTU KELUARGA_file_1648092305.pdf', 'Sendiri', 'KARTU KELUARGA', '2022-03-23 20:25:05', '2022-03-23 20:25:05'),
(4, 2, 'SIM_file_1648092489.pdf', 'Sendiri', 'SIM', '2022-03-23 20:28:09', '2022-03-23 20:28:09'),
(5, 2, 'STNK_file_1648094206.pdf', 'Sendiri', 'STNK', '2022-03-23 20:56:46', '2022-03-23 20:56:46'),
(6, 7, 'KTP_file_1648205439.pdf', 'Sendiri', 'KTP', '2022-03-25 03:50:39', '2022-03-25 03:50:39'),
(7, 7, 'SKCK_file_1648205578.pdf', 'Sendiri', 'SKCK', '2022-03-25 03:52:58', '2022-03-25 03:52:58'),
(8, 7, 'KARTU KELUARGA_file_1648205618.pdf', 'Sendiri', 'KARTU KELUARGA', '2022-03-25 03:53:38', '2022-03-25 03:53:38'),
(9, 7, 'BPJS KESEHATAN_file_1648205892.pdf', 'Sendiri', 'BPJS KESEHATAN', '2022-03-25 03:58:12', '2022-03-25 03:58:12'),
(10, 275, 'KTP_file_1648645761.pdf', 'Sendiri', 'KTP', '2022-03-30 06:09:21', '2022-03-30 06:09:21'),
(11, 275, 'SKCK_file_1648645842.pdf', 'Sendiri', 'SKCK', '2022-03-30 06:10:42', '2022-03-30 06:10:42'),
(12, 275, 'KARTU KELUARGA_file_1648645896.pdf', 'Sendiri', 'KARTU KELUARGA', '2022-03-30 06:11:36', '2022-03-30 06:11:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nominal_gaji` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`id`, `nominal_gaji`, `created_at`, `updated_at`) VALUES
(1, 3350000, '2022-03-22 19:10:35', '2022-03-22 19:10:35'),
(2, 1680000, '2022-03-22 19:11:08', '2022-03-22 19:11:08'),
(3, 3255423, '2022-03-22 19:14:30', '2022-03-22 19:39:33'),
(4, 2687133, '2022-03-22 19:18:20', '2022-03-22 19:18:20'),
(5, 2009177, '2022-03-22 19:18:58', '2022-03-22 19:18:58'),
(6, 2823315, '2022-03-22 19:19:25', '2022-03-22 19:19:25'),
(7, 3165876, '2022-03-22 19:23:20', '2022-03-22 19:23:20'),
(8, 2004734, '2022-03-22 20:12:23', '2022-03-22 20:12:23'),
(9, 2710595, '2022-03-22 20:12:54', '2022-03-22 20:12:54'),
(10, 2393679, '2022-03-22 20:14:28', '2022-03-22 20:14:28'),
(11, 2678863, '2022-03-22 20:14:49', '2022-03-22 20:14:49'),
(12, 2500000, '2022-03-22 20:16:33', '2022-03-22 20:16:33'),
(13, 2823315, '2022-03-23 23:49:05', '2022-03-23 23:49:05'),
(14, 0, '2022-03-24 00:57:59', '2022-03-24 00:57:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `insentif_kpi`
--

CREATE TABLE `insentif_kpi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `id_orang_kpi` bigint(20) UNSIGNED DEFAULT NULL,
  `hujau` smallint(6) NOT NULL DEFAULT 0,
  `merah` smallint(6) NOT NULL DEFAULT 0,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `insentif_kpi`
--

INSERT INTO `insentif_kpi` (`id`, `id_akun`, `id_orang_kpi`, `hujau`, `merah`, `tanggal`, `created_at`, `updated_at`) VALUES
(19, 2, NULL, 3, 2, '2022-04-01', '2022-04-07 12:44:34', '2022-04-07 12:44:34'),
(20, 2, NULL, 2, 5, '2022-05-01', '2022-04-07 12:44:34', '2022-04-07 12:44:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `insentif_kurir`
--

CREATE TABLE `insentif_kurir` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `i_delivery` bigint(20) NOT NULL DEFAULT 0,
  `i_pickup` bigint(20) NOT NULL DEFAULT 0,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `insentif_kurir`
--

INSERT INTO `insentif_kurir` (`id`, `id_akun`, `i_delivery`, `i_pickup`, `date`, `created_at`, `updated_at`) VALUES
(12, 2, 1000, 2000, '2022-05-12', '2022-05-06 06:58:36', '2022-05-13 06:58:36'),
(14, 2, 3000, 4000, '2022-05-12', '2022-05-13 06:59:07', '2022-05-13 06:59:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama_jabatan`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN WAREHOUSE', '2022-03-22 18:01:28', '2022-03-22 18:01:28'),
(2, 'CLEANING SERVICE', '2022-03-22 18:13:09', '2022-03-22 18:13:09'),
(3, 'DRIVER OUTSOURCING', '2022-03-22 18:13:42', '2022-03-22 18:13:42'),
(4, 'DRIVER WAREHOUSE', '2022-03-22 18:14:02', '2022-03-22 18:14:02'),
(5, 'COURIER CONTRACT', '2022-03-22 18:18:09', '2022-03-22 18:18:09'),
(6, 'COURIER FREELANCE', '2022-03-22 18:18:27', '2022-03-22 18:18:27'),
(7, 'PROCESSING WAREHOUSE', '2022-03-22 18:18:53', '2022-03-22 18:18:53'),
(8, 'COORDINATOR VIRTUAL TH', '2022-03-22 18:19:56', '2022-03-22 18:19:56'),
(9, 'COORDINATOR WAREHOUSE', '2022-03-22 18:20:40', '2022-03-22 18:20:40'),
(10, 'TRAINER', '2022-03-22 18:21:14', '2022-03-22 18:21:14'),
(11, 'HUMAN RESOURCES', '2022-03-22 18:21:51', '2022-03-22 18:21:51'),
(12, 'GENERAL AFFAIR', '2022-03-22 18:22:19', '2022-03-22 18:22:19'),
(13, 'INFORMATION TECHNOLOGY', '2022-03-22 18:23:09', '2022-03-22 18:23:09'),
(14, 'ACCOUNTING MAKASSAR', '2022-03-22 18:23:26', '2022-03-22 18:48:06'),
(15, 'ACCOUNTING PAPUA', '2022-03-22 18:37:05', '2022-03-22 18:37:05'),
(16, 'CUSTOMER EXPERIENCE', '2022-03-22 18:41:36', '2022-03-22 18:41:36'),
(17, 'REGIONAL MANAGER SULSELBAR', '2022-03-22 18:41:56', '2022-03-22 18:41:56'),
(18, 'REGIONAL MANAGER SULTRA', '2022-03-22 18:42:12', '2022-03-22 18:42:12'),
(19, 'FINANCE STAFF', '2022-03-22 18:42:41', '2022-03-22 18:48:23'),
(20, 'HEAD OF FINANCE ACCOUNTING', '2022-03-22 18:43:17', '2022-03-22 18:52:31'),
(21, 'HEAD OF BUSINESS DEVELOPMENT', '2022-03-22 18:43:54', '2022-03-22 18:43:54'),
(22, 'BUSINESS DEVELOPMENT STAFF', '2022-03-22 18:44:47', '2022-03-22 18:44:47'),
(23, 'ENTRY DATA PROCESSING', '2022-03-22 18:47:33', '2022-03-22 18:47:33'),
(24, 'MARKETING STAFF', '2022-03-22 18:49:11', '2022-03-22 18:49:11'),
(25, 'BUSINESS ANALYST', '2022-03-22 18:49:42', '2022-03-22 18:49:42'),
(26, 'BUSINESS DEV SOCIAL MEDIA & CAMPAIGN', '2022-03-22 18:50:30', '2022-03-22 18:50:30'),
(27, 'HEAD OF QUALITY CONTROL', '2022-03-22 18:50:51', '2022-03-22 18:50:51'),
(28, 'COORDINATOR PICKUP PDB', '2022-03-22 18:51:38', '2022-03-22 18:51:38'),
(29, 'COURIER PICKUP', '2022-03-22 18:51:54', '2022-03-22 18:51:54'),
(30, 'SUPERVISOR WAREHOUSE', '2022-03-22 18:57:46', '2022-03-22 19:03:10'),
(31, 'CARGO OPERATION', '2022-03-22 18:57:46', '2022-03-22 19:00:31'),
(32, 'CARGO TEAM LEADER', '2022-03-22 18:58:21', '2022-03-22 18:58:21'),
(33, 'CARGO ADMIN & PRICING', '2022-03-22 18:58:59', '2022-03-22 18:58:59'),
(34, 'ACCOUNTING KENDARI', '2022-03-22 22:13:36', '2022-03-22 22:13:36'),
(35, 'SECURITY OUTSOURCING', '2022-03-22 23:45:37', '2022-03-22 23:45:37'),
(36, 'COORDINATOR DRIVER', '2022-03-23 00:24:58', '2022-03-23 00:24:58'),
(37, 'COST CONTROL', '2022-03-23 18:15:10', '2022-03-23 18:15:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan_gaji`
--

CREATE TABLE `jabatan_gaji` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `id_jabatan` bigint(20) UNSIGNED NOT NULL,
  `id_gaji` bigint(20) UNSIGNED DEFAULT NULL,
  `tanggal_jabatan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jabatan_gaji`
--

INSERT INTO `jabatan_gaji` (`id`, `id_akun`, `id_jabatan`, `id_gaji`, `tanggal_jabatan`, `created_at`, `updated_at`) VALUES
(3, 9, 20, 1, '2022-03-23', '2022-03-22 19:16:07', '2022-03-22 19:16:07'),
(4, 10, 16, 1, '2022-03-23', '2022-03-22 22:10:17', '2022-03-22 22:10:17'),
(5, 22, 17, 1, '2022-03-23', '2022-03-22 22:10:44', '2022-03-22 22:10:44'),
(6, 30, 22, 1, '2022-03-23', '2022-03-22 22:11:13', '2022-03-22 22:11:13'),
(7, 32, 27, 1, '2022-03-23', '2022-03-22 22:11:38', '2022-03-22 22:11:38'),
(8, 35, 19, 1, '2022-03-23', '2022-03-22 22:12:11', '2022-03-22 22:12:11'),
(9, 48, 28, 1, '2022-03-23', '2022-03-22 22:13:17', '2022-03-22 22:13:17'),
(10, 76, 3, 1, '2022-03-23', '2022-03-22 22:14:38', '2022-03-22 22:14:38'),
(11, 148, 14, 1, '2022-03-23', '2022-03-22 22:15:06', '2022-03-22 22:15:06'),
(12, 149, 21, 1, '2022-03-23', '2022-03-22 22:15:39', '2022-03-22 22:15:39'),
(13, 162, 18, 1, '2022-03-23', '2022-03-22 22:16:01', '2022-03-22 22:16:01'),
(14, 251, 11, 1, '2022-03-23', '2022-03-22 22:17:12', '2022-03-22 22:17:12'),
(15, 252, 16, 1, '2022-03-23', '2022-03-22 22:17:36', '2022-03-22 22:17:36'),
(16, 197, 13, 3, '2022-03-23', '2022-03-22 22:17:56', '2022-03-22 22:17:56'),
(17, 59, 6, 2, '2022-03-23', '2022-03-22 22:19:27', '2022-03-22 22:19:27'),
(18, 103, 6, 2, '2022-03-23', '2022-03-22 22:19:52', '2022-03-22 22:19:52'),
(19, 110, 6, 2, '2022-03-23', '2022-03-22 22:20:19', '2022-03-22 22:20:19'),
(20, 117, 6, 2, '2022-03-23', '2022-03-22 22:20:42', '2022-03-22 22:20:42'),
(21, 122, 6, 2, '2022-03-23', '2022-03-22 22:21:06', '2022-03-22 22:21:06'),
(22, 134, 6, 2, '2022-03-23', '2022-03-22 22:21:37', '2022-03-22 22:21:37'),
(23, 136, 6, 2, '2022-03-23', '2022-03-22 22:22:03', '2022-03-22 22:22:03'),
(24, 153, 6, 2, '2022-03-23', '2022-03-22 22:22:27', '2022-03-22 22:22:27'),
(25, 176, 3, 2, '2022-03-23', '2022-03-22 22:24:20', '2022-03-22 22:24:20'),
(26, 165, 3, 2, '2022-03-23', '2022-03-22 22:24:39', '2022-03-22 22:24:39'),
(27, 195, 6, 2, '2022-03-23', '2022-03-22 22:26:08', '2022-03-22 22:26:08'),
(28, 196, 6, 2, '2022-03-23', '2022-03-22 22:26:30', '2022-03-22 22:26:30'),
(29, 196, 6, 2, '2022-03-23', '2022-03-22 22:26:30', '2022-03-22 22:26:30'),
(30, 198, 6, 2, '2022-03-23', '2022-03-22 22:26:50', '2022-03-22 22:26:50'),
(31, 88, 6, 2, '2022-03-23', '2022-03-22 22:27:14', '2022-03-22 22:27:14'),
(32, 220, 6, 2, '2022-03-23', '2022-03-22 22:27:32', '2022-03-22 22:27:32'),
(33, 201, 6, 2, '2022-03-23', '2022-03-22 22:28:09', '2022-03-22 22:28:09'),
(34, 204, 6, 2, '2022-03-23', '2022-03-22 22:28:45', '2022-03-22 22:28:45'),
(35, 205, 6, 2, '2022-03-23', '2022-03-22 22:29:06', '2022-03-22 22:29:06'),
(36, 208, 6, 2, '2022-03-23', '2022-03-22 22:29:45', '2022-03-22 22:29:45'),
(37, 210, 6, 2, '2022-03-23', '2022-03-22 22:30:09', '2022-03-22 22:30:09'),
(38, 210, 6, 2, '2022-03-23', '2022-03-22 22:30:09', '2022-03-22 22:30:09'),
(39, 211, 6, 2, '2022-03-23', '2022-03-22 22:32:13', '2022-03-22 22:32:13'),
(40, 217, 6, 2, '2022-03-23', '2022-03-22 22:32:39', '2022-03-22 22:32:39'),
(41, 217, 6, 2, '2022-03-23', '2022-03-22 22:32:39', '2022-03-22 22:32:39'),
(42, 217, 6, 2, '2022-03-23', '2022-03-22 22:32:39', '2022-03-22 22:32:39'),
(43, 218, 6, 2, '2022-03-23', '2022-03-22 22:33:06', '2022-03-22 22:33:06'),
(44, 225, 29, 2, '2022-03-23', '2022-03-22 22:45:54', '2022-03-22 22:45:54'),
(45, 226, 6, 2, '2022-03-23', '2022-03-22 22:46:58', '2022-03-22 22:46:58'),
(46, 227, 6, 2, '2022-03-23', '2022-03-22 22:47:22', '2022-03-22 22:47:22'),
(47, 229, 6, 2, '2022-03-23', '2022-03-22 22:47:41', '2022-03-22 22:47:41'),
(48, 230, 6, 2, '2022-03-23', '2022-03-22 22:47:59', '2022-03-22 22:47:59'),
(49, 231, 6, 2, '2022-03-23', '2022-03-22 22:48:28', '2022-03-22 22:48:28'),
(50, 232, 6, 2, '2022-03-23', '2022-03-22 22:48:53', '2022-03-22 22:48:53'),
(51, 233, 6, 2, '2022-03-23', '2022-03-22 22:49:28', '2022-03-22 22:49:28'),
(52, 234, 6, 2, '2022-03-23', '2022-03-22 22:53:40', '2022-03-22 22:53:40'),
(53, 239, 6, 2, '2022-03-23', '2022-03-22 22:54:02', '2022-03-22 22:54:02'),
(54, 240, 3, 2, '2022-03-23', '2022-03-22 22:54:46', '2022-03-22 22:54:46'),
(55, 241, 6, 2, '2022-03-23', '2022-03-22 22:55:14', '2022-03-22 22:55:14'),
(57, 242, 29, 2, '2022-03-23', '2022-03-22 23:02:25', '2022-03-22 23:02:25'),
(58, 245, 29, 2, '2022-03-23', '2022-03-22 23:03:16', '2022-03-22 23:03:16'),
(59, 246, 6, 2, '2022-03-23', '2022-03-22 23:03:47', '2022-03-22 23:03:47'),
(60, 249, 6, 2, '2022-03-23', '2022-03-22 23:04:20', '2022-03-22 23:04:20'),
(61, 250, 6, 2, '2022-03-23', '2022-03-22 23:04:54', '2022-03-22 23:04:54'),
(63, 253, 3, 2, '2022-03-23', '2022-03-22 23:07:08', '2022-03-22 23:07:08'),
(64, 253, 3, 2, '2022-03-23', '2022-03-22 23:07:08', '2022-03-22 23:07:08'),
(65, 253, 3, 2, '2022-03-23', '2022-03-22 23:07:08', '2022-03-22 23:07:08'),
(66, 256, 6, 2, '2022-03-23', '2022-03-22 23:07:38', '2022-03-22 23:07:38'),
(67, 258, 6, 2, '2022-03-23', '2022-03-22 23:07:57', '2022-03-22 23:07:57'),
(68, 258, 6, 2, '2022-03-23', '2022-03-22 23:07:57', '2022-03-22 23:07:57'),
(69, 258, 6, 2, '2022-03-23', '2022-03-22 23:07:57', '2022-03-22 23:07:57'),
(70, 259, 6, 2, '2022-03-23', '2022-03-22 23:08:13', '2022-03-22 23:08:13'),
(71, 260, 6, 2, '2022-03-23', '2022-03-22 23:08:35', '2022-03-22 23:08:35'),
(72, 260, 6, 2, '2022-03-23', '2022-03-22 23:08:36', '2022-03-22 23:08:36'),
(73, 260, 6, 2, '2022-03-23', '2022-03-22 23:08:36', '2022-03-22 23:08:36'),
(74, 262, 6, 2, '2022-03-23', '2022-03-22 23:09:09', '2022-03-22 23:09:09'),
(76, 4, 11, 3, '2022-03-23', '2022-03-22 23:19:00', '2022-03-22 23:19:00'),
(77, 16, 4, 1, '2022-03-23', '2022-03-22 23:47:56', '2022-03-22 23:47:56'),
(79, 20, 9, 3, '2022-03-23', '2022-03-22 23:49:26', '2022-03-22 23:49:26'),
(80, 21, 31, 3, '2022-03-23', '2022-03-22 23:50:21', '2022-03-22 23:50:21'),
(81, 24, 9, 3, '2022-03-23', '2022-03-22 23:51:16', '2022-03-22 23:51:16'),
(82, 25, 9, 3, '2022-03-23', '2022-03-22 23:52:31', '2022-03-22 23:52:31'),
(83, 26, 9, 3, '2022-03-23', '2022-03-22 23:54:50', '2022-03-22 23:54:50'),
(84, 27, 30, 3, '2022-03-23', '2022-03-22 23:55:51', '2022-03-22 23:55:51'),
(85, 28, 9, 3, '2022-03-23', '2022-03-22 23:56:58', '2022-03-22 23:56:58'),
(86, 29, 7, 3, '2022-03-23', '2022-03-22 23:58:08', '2022-03-22 23:58:08'),
(87, 36, 1, 3, '2022-03-23', '2022-03-22 23:58:36', '2022-03-22 23:58:36'),
(88, 36, 1, 3, '2022-03-23', '2022-03-22 23:58:36', '2022-03-22 23:58:36'),
(89, 36, 1, 3, '2022-03-23', '2022-03-22 23:58:37', '2022-03-22 23:58:37'),
(90, 38, 33, 3, '2022-03-23', '2022-03-22 23:59:04', '2022-03-22 23:59:04'),
(91, 54, 9, 3, '2022-03-23', '2022-03-23 00:20:25', '2022-03-23 00:20:25'),
(92, 40, 9, 3, '2022-03-23', '2022-03-23 00:21:29', '2022-03-23 00:21:29'),
(93, 43, 7, 3, '2022-03-23', '2022-03-23 00:22:06', '2022-03-23 00:22:06'),
(94, 44, 7, 3, '2022-03-23', '2022-03-23 00:22:36', '2022-03-23 00:22:36'),
(95, 45, 7, 3, '2022-03-23', '2022-03-23 00:24:18', '2022-03-23 00:24:18'),
(96, 45, 7, 3, '2022-03-23', '2022-03-23 00:24:18', '2022-03-23 00:24:18'),
(97, 45, 7, 3, '2022-03-23', '2022-03-23 00:24:18', '2022-03-23 00:24:18'),
(98, 46, 36, 3, '2022-03-23', '2022-03-23 00:26:22', '2022-03-23 00:26:22'),
(99, 47, 9, 3, '2022-03-23', '2022-03-23 00:26:54', '2022-03-23 00:26:54'),
(100, 47, 9, 3, '2022-03-23', '2022-03-23 00:26:54', '2022-03-23 00:26:54'),
(101, 50, 32, 3, '2022-03-23', '2022-03-23 00:27:23', '2022-03-23 00:27:23'),
(102, 56, 30, 3, '2022-03-23', '2022-03-23 00:34:22', '2022-03-23 00:34:22'),
(103, 65, 1, 3, '2022-03-23', '2022-03-23 00:35:00', '2022-03-23 00:35:00'),
(104, 66, 7, 3, '2022-03-23', '2022-03-23 00:35:25', '2022-03-23 00:35:25'),
(105, 69, 3, 3, '2022-03-23', '2022-03-23 00:35:47', '2022-03-23 00:35:47'),
(106, 70, 7, 3, '2022-03-23', '2022-03-23 00:37:20', '2022-03-23 00:37:20'),
(107, 73, 9, 3, '2022-03-23', '2022-03-23 00:37:56', '2022-03-23 00:37:56'),
(108, 80, 16, 3, '2022-03-23', '2022-03-23 00:38:27', '2022-03-23 00:38:27'),
(109, 81, 19, 3, '2022-03-23', '2022-03-23 00:41:40', '2022-03-23 00:41:40'),
(110, 82, 7, 3, '2022-03-23', '2022-03-23 00:42:26', '2022-03-23 00:42:26'),
(111, 83, 1, 3, '2022-03-23', '2022-03-23 00:43:10', '2022-03-23 00:43:10'),
(112, 39, 7, 3, '2022-03-23', '2022-03-23 00:44:09', '2022-03-23 00:44:09'),
(113, 98, 1, 3, '2022-03-23', '2022-03-23 00:44:30', '2022-03-23 00:44:30'),
(114, 42, 9, 3, '2022-03-23', '2022-03-23 00:44:56', '2022-03-23 00:44:56'),
(115, 101, 7, 3, '2022-03-23', '2022-03-23 00:45:30', '2022-03-23 00:45:30'),
(116, 119, 1, 3, '2022-03-23', '2022-03-23 00:45:57', '2022-03-23 00:45:57'),
(117, 105, 1, 3, '2022-03-23', '2022-03-23 00:46:22', '2022-03-23 00:46:22'),
(118, 118, 1, 3, '2022-03-23', '2022-03-23 00:46:59', '2022-03-23 00:46:59'),
(119, 123, 7, 3, '2022-03-23', '2022-03-23 01:03:45', '2022-03-23 01:03:45'),
(120, 125, 7, 3, '2022-03-23', '2022-03-23 01:04:18', '2022-03-23 01:04:18'),
(121, 41, 7, 3, '2022-03-23', '2022-03-23 01:04:39', '2022-03-23 01:04:39'),
(122, 142, 9, 3, '2022-03-24', '2022-03-23 17:57:16', '2022-03-23 17:57:16'),
(123, 150, 7, 3, '2022-03-24', '2022-03-23 17:58:37', '2022-03-23 17:58:37'),
(124, 151, 7, 3, '2022-03-24', '2022-03-23 17:59:06', '2022-03-23 17:59:06'),
(125, 167, 7, 3, '2022-03-24', '2022-03-23 17:59:27', '2022-03-23 17:59:27'),
(126, 168, 9, 3, '2022-03-24', '2022-03-23 17:59:50', '2022-03-23 17:59:50'),
(127, 169, 1, 3, '2022-03-24', '2022-03-23 18:00:16', '2022-03-23 18:00:16'),
(128, 175, 1, 3, '2022-03-24', '2022-03-23 18:01:44', '2022-03-23 18:01:44'),
(129, 177, 23, 3, '2022-03-24', '2022-03-23 18:02:26', '2022-03-23 18:02:26'),
(131, 182, 13, 3, '2022-03-24', '2022-03-23 18:03:45', '2022-03-23 18:03:45'),
(132, 183, 24, 3, '2022-03-24', '2022-03-23 18:04:25', '2022-03-23 18:04:25'),
(133, 184, 10, 3, '2022-03-24', '2022-03-23 18:04:40', '2022-03-23 18:04:40'),
(134, 186, 26, 3, '2022-03-24', '2022-03-23 18:05:34', '2022-03-23 18:05:34'),
(135, 197, 13, 3, '2022-03-24', '2022-03-23 18:05:55', '2022-03-23 18:05:55'),
(136, 202, 1, 3, '2022-03-24', '2022-03-23 18:06:20', '2022-03-23 18:06:20'),
(137, 203, 1, 3, '2022-03-24', '2022-03-23 18:07:12', '2022-03-23 18:07:12'),
(138, 203, 1, 3, '2022-03-24', '2022-03-23 18:07:12', '2022-03-23 18:07:12'),
(139, 203, 1, 3, '2022-03-24', '2022-03-23 18:07:12', '2022-03-23 18:07:12'),
(140, 214, 23, 3, '2022-03-24', '2022-03-23 18:09:19', '2022-03-23 18:09:19'),
(141, 238, 23, 3, '2022-03-24', '2022-03-23 18:09:42', '2022-03-23 18:09:42'),
(142, 243, 25, 3, '2022-03-24', '2022-03-23 18:12:59', '2022-03-23 18:12:59'),
(143, 261, 15, 3, '2022-03-24', '2022-03-23 18:14:54', '2022-03-23 18:14:54'),
(144, 254, 37, 3, '2022-03-24', '2022-03-23 18:15:24', '2022-03-23 18:15:24'),
(145, 11, 7, 4, '2022-03-24', '2022-03-23 18:16:09', '2022-03-23 18:16:09'),
(146, 12, 7, 4, '2022-03-24', '2022-03-23 18:26:19', '2022-03-23 18:26:19'),
(147, 13, 4, 4, '2022-03-24', '2022-03-23 18:28:31', '2022-03-23 18:28:31'),
(148, 15, 30, 4, '2022-03-24', '2022-03-23 18:29:04', '2022-03-23 18:29:04'),
(149, 31, 9, 4, '2022-03-24', '2022-03-23 18:29:52', '2022-03-23 18:29:52'),
(150, 58, 7, 4, '2022-03-24', '2022-03-23 18:30:26', '2022-03-23 18:30:26'),
(151, 60, 1, 4, '2022-03-24', '2022-03-23 18:31:07', '2022-03-23 18:31:07'),
(152, 84, 1, 4, '2022-03-24', '2022-03-23 18:31:31', '2022-03-23 18:31:31'),
(153, 14, 5, 5, '2022-03-24', '2022-03-23 18:34:55', '2022-03-23 18:34:55'),
(154, 72, 5, 5, '2022-03-24', '2022-03-23 18:35:21', '2022-03-23 18:35:21'),
(155, 77, 5, 5, '2022-03-24', '2022-03-23 18:35:51', '2022-03-23 18:35:51'),
(156, 87, 5, 5, '2022-03-24', '2022-03-23 18:36:07', '2022-03-23 18:36:07'),
(157, 34, 5, 8, '2022-03-24', '2022-03-23 18:38:21', '2022-03-23 18:38:21'),
(158, 132, 5, 8, '2022-03-24', '2022-03-23 18:38:48', '2022-03-23 18:38:48'),
(159, 144, 3, 8, '2022-03-24', '2022-03-23 18:39:16', '2022-03-23 18:39:16'),
(160, 145, 5, 8, '2022-03-24', '2022-03-23 18:39:41', '2022-03-23 18:39:41'),
(161, 187, 5, 8, '2022-03-24', '2022-03-23 18:40:11', '2022-03-23 18:40:11'),
(162, 191, 5, 8, '2022-03-24', '2022-03-23 19:06:27', '2022-03-23 19:06:27'),
(163, 193, 5, 8, '2022-03-24', '2022-03-23 19:07:00', '2022-03-23 19:07:00'),
(164, 209, 5, 8, '2022-03-24', '2022-03-23 19:07:21', '2022-03-23 19:07:21'),
(165, 219, 5, 8, '2022-03-24', '2022-03-23 19:07:57', '2022-03-23 19:07:57'),
(166, 244, 5, 8, '2022-03-24', '2022-03-23 19:08:20', '2022-03-23 19:08:20'),
(167, 247, 5, 8, '2022-03-24', '2022-03-23 19:08:39', '2022-03-23 19:08:39'),
(168, 248, 5, 8, '2022-03-24', '2022-03-23 19:09:00', '2022-03-23 19:09:00'),
(169, 17, 30, 6, '2022-03-24', '2022-03-23 19:11:54', '2022-03-23 19:11:54'),
(170, 18, 9, 6, '2022-03-24', '2022-03-23 19:12:14', '2022-03-23 19:12:14'),
(171, 19, 7, 6, '2022-03-24', '2022-03-23 19:12:37', '2022-03-23 19:12:37'),
(172, 37, 34, 6, '2022-03-24', '2022-03-23 19:13:05', '2022-03-23 19:13:05'),
(173, 49, 1, 6, '2022-03-24', '2022-03-23 19:13:25', '2022-03-23 19:13:25'),
(174, 62, 7, 6, '2022-03-24', '2022-03-23 19:13:44', '2022-03-23 19:13:44'),
(175, 63, 1, 6, '2022-03-24', '2022-03-23 19:14:09', '2022-03-23 19:14:09'),
(176, 68, 7, 6, '2022-03-24', '2022-03-23 19:14:31', '2022-03-23 19:14:31'),
(177, 74, 7, 6, '2022-03-24', '2022-03-23 19:14:50', '2022-03-23 19:14:50'),
(178, 152, 1, 6, '2022-03-24', '2022-03-23 19:15:21', '2022-03-23 19:15:21'),
(179, 160, 9, 6, '2022-03-24', '2022-03-23 19:18:47', '2022-03-23 19:18:47'),
(180, 163, 7, 6, '2022-03-24', '2022-03-23 19:19:09', '2022-03-23 19:19:09'),
(181, 173, 7, 6, '2022-03-24', '2022-03-23 19:19:36', '2022-03-23 19:19:36'),
(182, 181, 7, 6, '2022-03-24', '2022-03-23 19:20:01', '2022-03-23 19:20:01'),
(183, 61, 3, 6, '2022-03-24', '2022-03-23 19:20:29', '2022-03-23 19:20:29'),
(184, 222, 1, 6, '2022-03-24', '2022-03-23 19:20:55', '2022-03-23 19:20:55'),
(185, 223, 1, 6, '2022-03-24', '2022-03-23 19:21:21', '2022-03-23 19:21:21'),
(186, 228, 1, 6, '2022-03-24', '2022-03-23 19:21:36', '2022-03-23 19:21:36'),
(187, 235, 9, 6, '2022-03-24', '2022-03-23 19:21:57', '2022-03-23 19:21:57'),
(188, 237, 7, 6, '2022-03-24', '2022-03-23 19:22:18', '2022-03-23 19:22:18'),
(189, 33, 2, 12, '2022-03-24', '2022-03-23 19:22:56', '2022-03-23 19:22:56'),
(190, 270, 7, 3, '2022-03-24', '2022-03-23 19:53:27', '2022-03-23 19:53:27'),
(191, 23, 8, 7, '2022-03-24', '2022-03-23 19:58:27', '2022-03-23 19:58:27'),
(192, 23, 8, 7, '2022-03-24', '2022-03-23 19:59:22', '2022-03-23 19:59:22'),
(193, 51, 9, 7, '2022-03-24', '2022-03-23 20:00:30', '2022-03-23 20:00:30'),
(194, 53, 1, 7, '2022-03-24', '2022-03-23 20:00:54', '2022-03-23 20:00:54'),
(195, 99, 9, 7, '2022-03-24', '2022-03-23 20:04:44', '2022-03-23 20:04:44'),
(196, 55, 9, 7, '2022-03-24', '2022-03-23 20:05:20', '2022-03-23 20:05:20'),
(197, 67, 7, 7, '2022-03-24', '2022-03-23 20:05:48', '2022-03-23 20:05:48'),
(198, 75, 8, 7, '2022-03-24', '2022-03-23 20:06:50', '2022-03-23 20:06:50'),
(199, 79, 1, 7, '2022-03-24', '2022-03-23 20:07:32', '2022-03-23 20:07:32'),
(200, 106, 1, 7, '2022-03-24', '2022-03-23 20:08:40', '2022-03-23 20:08:40'),
(201, 89, 7, 7, '2022-03-24', '2022-03-23 20:09:51', '2022-03-23 20:09:51'),
(202, 107, 7, 7, '2022-03-24', '2022-03-23 20:10:38', '2022-03-23 20:10:38'),
(203, 91, 7, 7, '2022-03-24', '2022-03-23 20:11:25', '2022-03-23 20:11:25'),
(204, 93, 7, 7, '2022-03-24', '2022-03-23 20:11:48', '2022-03-23 20:11:48'),
(205, 95, 1, 7, '2022-03-24', '2022-03-23 20:12:21', '2022-03-23 20:12:21'),
(206, 97, 7, 7, '2022-03-24', '2022-03-23 20:16:50', '2022-03-23 20:16:50'),
(207, 92, 1, 7, '2022-03-24', '2022-03-23 20:17:14', '2022-03-23 20:17:14'),
(208, 108, 7, 7, '2022-03-24', '2022-03-23 20:17:37', '2022-03-23 20:17:37'),
(209, 113, 8, 7, '2022-03-24', '2022-03-23 20:18:01', '2022-03-23 20:18:01'),
(210, 120, 1, 7, '2022-03-24', '2022-03-23 20:18:46', '2022-03-23 20:18:46'),
(211, 121, 7, 7, '2022-03-24', '2022-03-23 20:19:47', '2022-03-23 20:19:47'),
(212, 139, 8, 7, '2022-03-24', '2022-03-23 20:22:55', '2022-03-23 20:22:55'),
(213, 147, 7, 7, '2022-03-24', '2022-03-23 20:30:27', '2022-03-23 20:30:27'),
(214, 172, 1, 7, '2022-03-24', '2022-03-23 20:30:50', '2022-03-23 20:30:50'),
(215, 180, 8, 7, '2022-03-24', '2022-03-23 20:31:37', '2022-03-23 20:31:37'),
(216, 200, 1, 7, '2022-03-24', '2022-03-23 20:31:57', '2022-03-23 20:31:57'),
(217, 221, 1, 7, '2022-03-24', '2022-03-23 20:32:20', '2022-03-23 20:32:20'),
(218, 221, 1, 7, '2022-03-24', '2022-03-23 20:32:20', '2022-03-23 20:32:20'),
(219, 86, 8, 9, '2022-03-24', '2022-03-23 22:39:27', '2022-03-23 22:39:27'),
(220, 57, 8, 9, '2022-03-24', '2022-03-23 22:40:15', '2022-03-23 22:40:15'),
(221, 90, 9, 9, '2022-03-24', '2022-03-23 22:41:42', '2022-03-23 22:41:42'),
(222, 140, 9, 9, '2022-03-24', '2022-03-23 22:42:36', '2022-03-23 22:42:36'),
(223, 141, 7, 9, '2022-03-24', '2022-03-23 22:43:07', '2022-03-23 22:43:07'),
(224, 143, 7, 9, '2022-03-24', '2022-03-23 22:43:28', '2022-03-23 22:43:28'),
(225, 146, 9, 9, '2022-03-24', '2022-03-23 22:44:07', '2022-03-23 22:44:07'),
(226, 164, 8, 9, '2022-03-24', '2022-03-23 22:44:37', '2022-03-23 22:44:37'),
(227, 194, 1, 9, '2022-03-24', '2022-03-23 22:45:06', '2022-03-23 22:45:06'),
(228, 212, 1, 9, '2022-03-24', '2022-03-23 22:45:32', '2022-03-23 22:45:32'),
(229, 215, 8, 9, '2022-03-24', '2022-03-23 22:50:50', '2022-03-23 22:50:50'),
(230, 236, 1, 9, '2022-03-24', '2022-03-23 22:51:13', '2022-03-23 22:51:13'),
(231, 255, 8, 9, '2022-03-24', '2022-03-23 22:51:35', '2022-03-23 22:51:35'),
(232, 255, 8, 9, '2022-03-24', '2022-03-23 22:51:36', '2022-03-23 22:51:36'),
(233, 257, 9, 7, '2022-03-24', '2022-03-23 22:52:20', '2022-03-23 22:52:20'),
(234, 64, 5, 10, '2022-03-24', '2022-03-23 23:02:25', '2022-03-23 23:02:25'),
(235, 94, 5, 10, '2022-03-24', '2022-03-23 23:02:40', '2022-03-23 23:02:40'),
(236, 100, 5, 10, '2022-03-24', '2022-03-23 23:02:59', '2022-03-23 23:02:59'),
(237, 102, 5, 10, '2022-03-24', '2022-03-23 23:03:21', '2022-03-23 23:03:21'),
(238, 104, 5, 10, '2022-03-24', '2022-03-23 23:03:45', '2022-03-23 23:03:45'),
(239, 109, 5, 10, '2022-03-24', '2022-03-23 23:05:21', '2022-03-23 23:05:21'),
(240, 111, 5, 10, '2022-03-24', '2022-03-23 23:05:45', '2022-03-23 23:05:45'),
(241, 112, 5, 10, '2022-03-24', '2022-03-23 23:06:04', '2022-03-23 23:06:04'),
(242, 114, 5, 10, '2022-03-24', '2022-03-23 23:06:26', '2022-03-23 23:06:26'),
(243, 115, 5, 10, '2022-03-24', '2022-03-23 23:07:12', '2022-03-23 23:07:12'),
(244, 116, 5, 10, '2022-03-24', '2022-03-23 23:07:47', '2022-03-23 23:07:47'),
(245, 124, 5, 10, '2022-03-24', '2022-03-23 23:08:11', '2022-03-23 23:08:11'),
(246, 126, 5, 10, '2022-03-24', '2022-03-23 23:08:37', '2022-03-23 23:08:37'),
(247, 126, 5, 10, '2022-03-24', '2022-03-23 23:08:37', '2022-03-23 23:08:37'),
(248, 127, 5, 10, '2022-03-24', '2022-03-23 23:08:55', '2022-03-23 23:08:55'),
(249, 128, 5, 10, '2022-03-24', '2022-03-23 23:09:23', '2022-03-23 23:09:23'),
(250, 129, 5, 9, '2022-03-24', '2022-03-23 23:09:59', '2022-03-23 23:09:59'),
(251, 133, 5, 10, '2022-03-24', '2022-03-23 23:10:35', '2022-03-23 23:10:35'),
(252, 135, 5, 10, '2022-03-24', '2022-03-23 23:10:53', '2022-03-23 23:10:53'),
(253, 137, 5, 10, '2022-03-24', '2022-03-23 23:11:25', '2022-03-23 23:11:25'),
(254, 138, 5, 10, '2022-03-24', '2022-03-23 23:11:45', '2022-03-23 23:11:45'),
(255, 155, 5, 10, '2022-03-24', '2022-03-23 23:12:27', '2022-03-23 23:12:27'),
(256, 156, 5, 10, '2022-03-24', '2022-03-23 23:13:16', '2022-03-23 23:13:16'),
(257, 157, 5, 10, '2022-03-24', '2022-03-23 23:13:41', '2022-03-23 23:13:41'),
(258, 158, 5, 10, '2022-03-24', '2022-03-23 23:20:15', '2022-03-23 23:20:15'),
(259, 159, 5, 10, '2022-03-24', '2022-03-23 23:20:31', '2022-03-23 23:20:31'),
(260, 161, 5, 10, '2022-03-24', '2022-03-23 23:20:48', '2022-03-23 23:20:48'),
(261, 166, 5, 10, '2022-03-24', '2022-03-23 23:21:10', '2022-03-23 23:21:10'),
(262, 170, 5, 10, '2022-03-24', '2022-03-23 23:21:40', '2022-03-23 23:21:40'),
(263, 171, 5, 10, '2022-03-24', '2022-03-23 23:22:05', '2022-03-23 23:22:05'),
(264, 185, 5, 10, '2022-03-24', '2022-03-23 23:22:24', '2022-03-23 23:22:24'),
(265, 130, 5, 10, '2022-03-24', '2022-03-23 23:23:34', '2022-03-23 23:23:34'),
(266, 189, 5, 10, '2022-03-24', '2022-03-23 23:23:55', '2022-03-23 23:23:55'),
(267, 190, 5, 10, '2022-03-24', '2022-03-23 23:24:11', '2022-03-23 23:24:11'),
(268, 192, 5, 10, '2022-03-24', '2022-03-23 23:24:33', '2022-03-23 23:24:33'),
(269, 199, 5, 10, '2022-03-24', '2022-03-23 23:24:50', '2022-03-23 23:24:50'),
(270, 71, 8, 11, '2022-03-24', '2022-03-23 23:27:49', '2022-03-23 23:27:49'),
(271, 78, 1, 11, '2022-03-24', '2022-03-23 23:28:28', '2022-03-23 23:28:28'),
(272, 131, 8, 11, '2022-03-24', '2022-03-23 23:34:03', '2022-03-23 23:34:03'),
(273, 154, 9, 11, '2022-03-24', '2022-03-23 23:34:26', '2022-03-23 23:34:26'),
(274, 207, 8, 11, '2022-03-24', '2022-03-23 23:36:00', '2022-03-23 23:36:00'),
(275, 224, 8, 11, '2022-03-24', '2022-03-23 23:37:05', '2022-03-23 23:37:05'),
(276, 8, 12, 1, '2022-03-24', '2022-03-23 23:38:32', '2022-03-23 23:38:32'),
(277, 206, 10, 3, '2022-03-24', '2022-03-23 23:39:00', '2022-03-23 23:39:00'),
(278, 85, 30, 6, '2022-03-24', '2022-03-23 23:49:30', '2022-03-23 23:49:30'),
(279, 188, 5, 8, '2022-03-24', '2022-03-24 00:30:07', '2022-03-24 00:30:07'),
(280, 178, 35, 14, '2022-03-24', '2022-03-24 00:59:16', '2022-03-24 00:59:16'),
(281, 271, 35, 14, '2022-03-24', '2022-03-24 01:28:36', '2022-03-24 01:28:36'),
(282, 272, 35, 14, '2022-03-24', '2022-03-24 01:53:50', '2022-03-24 01:53:50'),
(283, 76, 3, 14, '2022-03-24', '2022-03-24 02:01:28', '2022-03-24 02:01:28'),
(284, 69, 3, 14, '2022-03-24', '2022-03-24 02:01:53', '2022-03-24 02:01:53'),
(285, 176, 3, 14, '2022-03-24', '2022-03-24 02:02:17', '2022-03-24 02:02:17'),
(286, 165, 3, 14, '2022-03-24', '2022-03-24 02:02:36', '2022-03-24 02:02:36'),
(287, 253, 3, 14, '2022-03-24', '2022-03-24 02:02:49', '2022-03-24 02:02:49'),
(288, 61, 3, 14, '2022-03-24', '2022-03-24 02:03:05', '2022-03-24 02:03:05'),
(289, 144, 3, 14, '2022-03-24', '2022-03-24 02:03:47', '2022-03-24 02:03:47'),
(290, 240, 3, 14, '2022-03-24', '2022-03-24 02:04:16', '2022-03-24 02:04:16'),
(291, 216, 3, 14, '2022-03-24', '2022-03-24 02:05:19', '2022-03-24 02:05:19'),
(292, 213, 3, 14, '2022-03-24', '2022-03-24 02:06:21', '2022-03-24 02:06:21'),
(293, 3, 11, 1, '2022-03-25', '2022-03-24 22:56:43', '2022-03-24 22:56:43'),
(295, 2, 12, 1, '2022-05-06', '2022-05-06 07:24:03', '2022-05-06 07:24:03'),
(296, 2, 13, 5, '2022-03-23', '2022-03-22 19:15:10', '2022-03-22 19:15:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `status_data` enum('Aktif','Tidak Aktif','Resign') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_join` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `id_akun`, `status_data`, `tanggal_join`, `created_at`, `updated_at`) VALUES
(1, 2, 'Aktif', '2020-05-12', '2022-03-20 23:29:52', '2022-03-20 23:29:52'),
(2, 3, 'Aktif', '2020-08-26', '2022-03-20 23:35:03', '2022-03-20 23:35:03'),
(3, 4, 'Aktif', '2021-09-22', '2022-03-20 23:51:45', '2022-03-20 23:51:45'),
(4, 8, 'Aktif', '2020-04-01', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(5, 9, 'Aktif', '2020-04-01', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(6, 10, 'Aktif', '2020-04-01', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(7, 11, 'Aktif', '2020-04-20', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(8, 12, 'Aktif', '2020-04-20', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(9, 13, 'Aktif', '2020-04-20', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(10, 14, 'Aktif', '2020-04-20', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(11, 15, 'Aktif', '2020-04-20', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(12, 16, 'Aktif', '2020-04-27', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(13, 17, 'Aktif', '2020-04-27', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(14, 18, 'Aktif', '2020-04-27', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(15, 19, 'Aktif', '2020-04-27', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(16, 20, 'Aktif', '2020-04-27', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(17, 21, 'Aktif', '2020-04-27', '2022-03-22 00:30:59', '2022-03-22 00:30:59'),
(18, 22, 'Aktif', '2020-04-29', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(19, 23, 'Aktif', '2020-05-04', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(20, 24, 'Aktif', '2020-05-04', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(21, 25, 'Aktif', '2020-05-05', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(22, 26, 'Aktif', '2020-05-05', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(23, 27, 'Aktif', '2020-05-12', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(24, 28, 'Aktif', '2020-05-12', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(25, 29, 'Aktif', '2020-05-13', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(26, 30, 'Aktif', '2020-06-01', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(27, 31, 'Aktif', '2020-06-01', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(28, 32, 'Aktif', '2020-06-08', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(29, 33, 'Aktif', '2020-06-16', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(30, 34, 'Aktif', '2020-06-26', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(31, 35, 'Aktif', '2020-06-27', '2022-03-22 00:31:00', '2022-03-22 00:31:00'),
(32, 36, 'Aktif', '2020-06-11', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(33, 37, 'Aktif', '2020-07-03', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(34, 38, 'Aktif', '2020-07-10', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(35, 39, 'Aktif', '2020-07-10', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(36, 40, 'Aktif', '2020-07-10', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(37, 41, 'Aktif', '2020-07-10', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(38, 42, 'Aktif', '2020-07-10', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(39, 43, 'Aktif', '2020-07-10', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(40, 44, 'Aktif', '2020-07-10', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(41, 45, 'Aktif', '2020-07-15', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(42, 46, 'Aktif', '2020-07-15', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(43, 47, 'Aktif', '2020-07-20', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(44, 48, 'Aktif', '2020-07-22', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(45, 49, 'Resign', '2020-08-04', '2022-03-22 00:31:01', '2022-03-22 00:31:01'),
(46, 50, 'Aktif', '2020-08-03', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(47, 51, 'Aktif', '2020-08-05', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(48, 52, 'Aktif', '2020-08-10', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(49, 53, 'Aktif', '2020-08-21', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(50, 54, 'Aktif', '2020-08-21', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(51, 55, 'Aktif', '2020-08-21', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(52, 56, 'Aktif', '2020-08-22', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(53, 57, 'Aktif', '2020-08-21', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(54, 58, 'Aktif', '2020-09-01', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(55, 59, 'Aktif', '2020-09-01', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(56, 60, 'Aktif', '2020-09-01', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(57, 61, 'Aktif', '2020-09-01', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(58, 62, 'Aktif', '2020-09-01', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(59, 63, 'Aktif', '2020-09-01', '2022-03-22 00:31:02', '2022-03-22 00:31:02'),
(60, 64, 'Aktif', '2020-09-02', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(61, 65, 'Aktif', '2020-09-02', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(62, 66, 'Resign', '2020-09-02', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(63, 67, 'Aktif', '2020-09-02', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(64, 68, 'Aktif', '2020-09-02', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(65, 69, 'Resign', '2020-09-04', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(66, 70, 'Aktif', '2020-09-05', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(67, 71, 'Aktif', '2020-09-07', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(68, 72, 'Aktif', '2020-09-07', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(69, 73, 'Aktif', '2020-12-05', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(70, 74, 'Aktif', '2020-09-08', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(71, 75, 'Aktif', '2020-09-01', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(72, 76, 'Aktif', '2020-09-08', '2022-03-22 00:31:03', '2022-03-22 00:31:03'),
(73, 77, 'Aktif', '2020-09-12', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(74, 78, 'Aktif', '2020-09-14', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(75, 79, 'Aktif', '2020-09-17', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(76, 80, 'Aktif', '2020-09-17', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(77, 81, 'Aktif', '2020-09-17', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(78, 82, 'Aktif', '2020-09-17', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(79, 83, 'Aktif', '2020-09-17', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(80, 84, 'Aktif', '2020-09-25', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(81, 85, 'Aktif', '2020-10-01', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(82, 86, 'Aktif', '2020-10-01', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(83, 87, 'Aktif', '2020-10-01', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(84, 88, 'Aktif', '2020-10-01', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(85, 89, 'Aktif', '2020-10-03', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(86, 90, 'Resign', '2020-10-03', '2022-03-22 00:31:04', '2022-03-22 00:31:04'),
(87, 91, 'Aktif', '2020-10-05', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(88, 92, 'Resign', '2020-10-05', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(89, 93, 'Aktif', '2020-10-06', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(90, 94, 'Aktif', '2020-10-06', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(91, 95, 'Aktif', '2020-10-06', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(92, 96, 'Aktif', '2020-10-06', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(93, 97, 'Aktif', '2020-10-06', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(94, 98, 'Aktif', '2020-10-01', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(95, 99, 'Aktif', '2020-10-06', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(96, 100, 'Aktif', '2020-10-07', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(97, 101, 'Aktif', '2020-10-01', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(98, 102, 'Aktif', '2020-10-07', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(99, 103, 'Aktif', '2020-10-08', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(100, 104, 'Aktif', '2020-10-08', '2022-03-22 00:31:05', '2022-03-22 00:31:05'),
(101, 105, 'Aktif', '2020-10-08', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(102, 106, 'Resign', '2020-10-12', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(103, 107, 'Aktif', '2020-10-12', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(104, 108, 'Aktif', '2020-10-09', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(105, 109, 'Resign', '2020-10-09', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(106, 110, 'Resign', '2020-10-09', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(107, 111, 'Aktif', '2020-10-09', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(108, 112, 'Aktif', '2020-10-10', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(109, 113, 'Aktif', '2020-10-10', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(110, 114, 'Aktif', '2020-10-12', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(111, 115, 'Aktif', '2020-10-12', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(112, 116, 'Aktif', '2020-10-12', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(113, 117, 'Aktif', '2020-10-12', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(114, 118, 'Aktif', '2020-10-12', '2022-03-22 00:31:06', '2022-03-22 00:31:06'),
(115, 119, 'Aktif', '2020-10-12', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(116, 120, 'Resign', '2020-10-12', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(117, 121, 'Aktif', '2020-10-12', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(118, 122, 'Aktif', '2020-10-13', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(119, 123, 'Aktif', '2020-10-13', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(120, 124, 'Resign', '2020-10-13', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(121, 125, 'Aktif', '2020-10-13', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(122, 126, 'Aktif', '2020-10-13', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(123, 127, 'Aktif', '2020-10-13', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(124, 128, 'Aktif', '2020-10-13', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(125, 129, 'Aktif', '2020-10-13', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(126, 130, 'Aktif', '2020-10-14', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(127, 131, 'Aktif', '2020-10-13', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(128, 132, 'Aktif', '2020-10-21', '2022-03-22 00:31:07', '2022-03-22 00:31:07'),
(129, 133, 'Aktif', '2020-11-01', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(130, 134, 'Aktif', '2020-11-01', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(131, 135, 'Aktif', '2020-11-01', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(132, 136, 'Aktif', '2020-11-01', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(133, 137, 'Aktif', '2020-11-01', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(134, 138, 'Aktif', '2020-11-01', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(135, 139, 'Aktif', '2020-11-05', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(136, 140, 'Aktif', '2020-11-07', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(137, 141, 'Aktif', '2020-11-07', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(138, 142, 'Aktif', '2020-11-08', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(139, 143, 'Aktif', '2020-11-08', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(140, 144, 'Aktif', '2020-11-11', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(141, 145, 'Aktif', '2020-11-09', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(142, 146, 'Aktif', '2020-11-13', '2022-03-22 00:31:08', '2022-03-22 00:31:08'),
(143, 147, 'Aktif', '2020-11-16', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(144, 148, 'Aktif', '2020-11-17', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(145, 149, 'Aktif', '2020-11-19', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(146, 150, 'Aktif', '2020-11-21', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(147, 151, 'Aktif', '2020-11-20', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(148, 152, 'Aktif', '2020-12-09', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(149, 153, 'Aktif', '2020-12-11', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(150, 154, 'Aktif', '2020-12-11', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(151, 155, 'Aktif', '2020-12-11', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(152, 156, 'Aktif', '2020-12-14', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(153, 157, 'Aktif', '2020-12-14', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(154, 158, 'Aktif', '2020-12-19', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(155, 159, 'Aktif', '2020-12-23', '2022-03-22 00:31:09', '2022-03-22 00:31:09'),
(156, 160, 'Aktif', '2020-12-26', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(157, 161, 'Aktif', '2020-12-26', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(158, 162, 'Aktif', '2020-12-26', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(159, 163, 'Aktif', '2021-01-02', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(160, 164, 'Aktif', '2021-01-03', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(161, 165, 'Aktif', '2021-01-01', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(162, 166, 'Aktif', '2021-01-09', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(163, 167, 'Aktif', '2021-01-19', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(164, 168, 'Aktif', '2021-01-20', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(165, 169, 'Aktif', '2021-01-20', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(166, 170, 'Aktif', '2021-01-21', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(167, 171, 'Aktif', '2021-03-01', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(168, 172, 'Aktif', '2021-03-01', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(169, 173, 'Aktif', '2021-04-05', '2022-03-22 00:31:10', '2022-03-22 00:31:10'),
(171, 175, 'Aktif', '2021-04-01', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(172, 176, 'Aktif', '2021-04-01', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(173, 177, 'Aktif', '2021-04-01', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(174, 178, 'Aktif', '2021-04-01', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(176, 180, 'Aktif', '2021-05-01', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(177, 181, 'Aktif', '2021-05-11', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(178, 182, 'Aktif', '2021-05-11', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(179, 183, 'Aktif', '2021-05-18', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(180, 184, 'Aktif', '2021-05-20', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(181, 185, 'Aktif', '2021-05-24', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(182, 186, 'Aktif', '2021-06-01', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(183, 187, 'Aktif', '2021-06-01', '2022-03-22 00:31:11', '2022-03-22 00:31:11'),
(184, 188, 'Aktif', '2021-07-02', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(185, 189, 'Aktif', '2021-07-03', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(186, 190, 'Aktif', '2021-07-02', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(187, 191, 'Aktif', '2021-07-14', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(188, 192, 'Resign', '2021-07-15', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(189, 193, 'Aktif', '2021-07-29', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(190, 194, 'Aktif', '2021-08-01', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(191, 195, 'Aktif', '2021-09-06', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(192, 196, 'Aktif', '2021-09-06', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(193, 197, 'Aktif', '2021-09-09', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(194, 198, 'Aktif', '2021-09-10', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(195, 199, 'Aktif', '2021-09-11', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(196, 200, 'Resign', '2021-09-27', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(197, 201, 'Aktif', '2021-10-01', '2022-03-22 00:31:12', '2022-03-22 00:31:12'),
(198, 202, 'Aktif', '2021-10-06', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(199, 203, 'Aktif', '2021-10-06', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(200, 204, 'Aktif', '2021-10-07', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(201, 205, 'Aktif', '2021-11-01', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(202, 206, 'Aktif', '2021-11-01', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(203, 207, 'Aktif', '2021-11-01', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(204, 208, 'Aktif', '2021-11-01', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(205, 209, 'Aktif', '2021-11-01', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(206, 210, 'Aktif', '2021-11-03', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(207, 211, 'Aktif', '2021-11-09', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(208, 212, 'Aktif', '2021-11-08', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(209, 213, 'Aktif', '2021-11-10', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(210, 214, 'Aktif', '2021-12-01', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(211, 215, 'Aktif', '2021-12-01', '2022-03-22 00:31:13', '2022-03-22 00:31:13'),
(212, 216, 'Aktif', '2021-12-01', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(213, 217, 'Aktif', '2021-12-06', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(214, 218, 'Aktif', '2021-12-09', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(215, 219, 'Aktif', '2021-12-14', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(216, 220, 'Resign', '2021-10-01', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(217, 221, 'Aktif', '2022-01-01', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(218, 222, 'Aktif', '2022-01-01', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(219, 223, 'Aktif', '2022-01-01', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(220, 224, 'Aktif', '2022-01-03', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(221, 225, 'Aktif', '2022-01-01', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(222, 226, 'Resign', '2022-01-05', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(223, 227, 'Aktif', '2022-01-07', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(224, 228, 'Aktif', '2022-01-10', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(225, 229, 'Aktif', '2022-01-10', '2022-03-22 00:31:14', '2022-03-22 00:31:14'),
(226, 230, 'Aktif', '2022-01-15', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(227, 231, 'Aktif', '2022-01-17', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(228, 232, 'Aktif', '2022-01-19', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(229, 233, 'Aktif', '2022-01-25', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(230, 234, 'Aktif', '2022-02-01', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(231, 235, 'Aktif', '2022-02-01', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(232, 236, 'Aktif', '2022-02-01', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(233, 237, 'Aktif', '2022-02-01', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(234, 238, 'Aktif', '2021-11-02', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(235, 239, 'Resign', '2022-02-03', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(236, 240, 'Aktif', '2022-02-03', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(237, 241, 'Aktif', '2022-02-07', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(238, 242, 'Aktif', '2022-02-08', '2022-03-22 00:31:15', '2022-03-22 00:31:15'),
(239, 243, 'Aktif', '2022-02-09', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(240, 244, 'Aktif', '2022-02-10', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(241, 245, 'Aktif', '2022-02-16', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(242, 246, 'Aktif', '2022-02-17', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(243, 247, 'Aktif', '2022-02-21', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(244, 248, 'Aktif', '2022-02-19', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(245, 249, 'Aktif', '2022-02-23', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(246, 250, 'Resign', '2022-02-24', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(247, 251, 'Aktif', '2022-03-01', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(248, 252, 'Aktif', '2020-01-05', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(249, 253, 'Aktif', '2022-03-01', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(250, 254, 'Aktif', '2022-03-01', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(251, 255, 'Aktif', '2022-03-01', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(252, 256, 'Resign', '2022-03-02', '2022-03-22 00:31:16', '2022-03-22 00:31:16'),
(253, 257, 'Aktif', '2022-03-01', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(254, 258, 'Aktif', '2022-03-02', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(255, 259, 'Aktif', '2022-03-03', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(256, 260, 'Resign', '2022-03-03', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(257, 261, 'Aktif', '2022-03-04', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(258, 262, 'Aktif', '2022-03-05', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(259, 263, 'Aktif', '2022-03-05', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(260, 264, 'Aktif', '2022-03-06', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(261, 265, 'Aktif', '2022-03-08', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(262, 266, 'Aktif', '2022-03-12', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(263, 267, 'Aktif', '2022-03-14', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(264, 268, 'Aktif', '2022-03-14', '2022-03-22 00:31:17', '2022-03-22 00:31:17'),
(265, 270, 'Aktif', '2021-10-08', '2022-03-23 19:48:37', '2022-03-23 19:48:37'),
(266, 271, 'Aktif', '2021-04-05', '2022-03-24 01:27:53', '2022-03-24 01:27:53'),
(267, 272, 'Aktif', '2021-04-01', '2022-03-24 01:52:48', '2022-03-24 01:52:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontrak`
--

CREATE TABLE `kontrak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `ttd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` enum('PKWT I','PKWT II','PKWT III','PKKF') COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kontrak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_login`
--

CREATE TABLE `log_login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `status` enum('online','offline') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_tindakan`
--

CREATE TABLE `log_tindakan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_logLogin` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `log` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan_kerja`
--

CREATE TABLE `lowongan_kerja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `id_lowongan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_buka` date NOT NULL,
  `tgl_tutup` date NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Buka','Tidak','Expired') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lowongan_kerja`
--

INSERT INTO `lowongan_kerja` (`id`, `id_akun`, `id_perusahaan`, `id_lowongan`, `judul`, `deskripsi`, `tgl_buka`, `tgl_tutup`, `nama_file`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'L0001', 'EDP STAFF', 'Kualifikasi :\r\n- Pria/Wanita, usia max. 28 Tahun\r\n- Pendidkan S1 Jurusan Statistika (diutamakan), Matematika, Fisika, Teknik Informatika, Sistem Informasi\r\n- Fresh Graduate are welcome\r\n- Mampu menganalisis dan mengolah data\r\n- Memiliki kepribadian yang komunikatif, proaktif dan teliti\r\n- Dapat bekerja dalam team\r\n- Penempatan Makassar\r\n\r\n\r\nHanya kandidat yang memenuhi kualifikasi yang akan diproses', '2022-03-24', '2022-04-05', 'lowongan_1648187204.jpg', 'Buka', '2022-03-24 22:46:44', '2022-03-24 22:46:44'),
(2, 3, 1, 'L0002', 'TRAINER STAFF', 'Posisi : Trainer \r\n\r\nPenempatan Kendari\r\n\r\nTugas & Tanggungjawab : \r\n•  Pelatihan karyawan dan calon karyawan terkait dengan SOP dan budaya perusahaan\r\n•  Siap bekerja mobile\r\n\r\nKualifikasi : \r\n- Pria, Usia maksimal 28 Tahun  \r\n- Pendidikan minimal S1 Semua Jurusan (Diutamakan Psikologi) \r\n- Fresh Graduate are welcome\r\n- Memilki SIM A\r\n- Komunikatif, Problem Solving, Leadership\r\n\r\nApply CV and resume in email hr.recruitment@indokaisa.com\r\nSubject : TRAINER KDI_Nama Lengkap\r\n\r\nNoted: Proses perekrutan dilakukan secara tatap muka (offline) dan online\r\n\r\nDeadline 28 Maret 2022', '2022-03-01', '2022-03-28', 'lowongan_1648195748.png', 'Buka', '2022-03-25 01:09:08', '2022-03-25 01:09:08');

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
(241, '2014_10_12_000000_create_users_table', 1),
(242, '2014_10_12_100000_create_password_resets_table', 1),
(243, '2019_08_19_000000_create_failed_jobs_table', 1),
(244, '2021_10_14_031214_create_akses_table', 1),
(245, '2021_10_14_031225_create_tema_table', 1),
(246, '2021_10_14_031244_create_perusahaan_table', 1),
(247, '2021_10_14_031258_create_akun_table', 1),
(248, '2021_10_15_085408_create_log_login_table', 1),
(249, '2021_10_15_085526_create_log_tindakan_table', 1),
(250, '2021_11_09_104006_create_data_diri_table', 1),
(251, '2021_11_15_071440_create_pendidikan_formal_table', 1),
(252, '2021_11_16_060141_create_pendidikan_non_formal_table', 1),
(253, '2021_11_16_073545_create_dokumen_table', 1),
(254, '2021_11_17_032144_create_lowongan_kerja_table', 1),
(255, '2021_11_17_032926_create_aply_lowongan_table', 1),
(256, '2021_11_17_055145_create_orang_tua_table', 1),
(257, '2021_11_29_050738_create_karyawan_table', 1),
(258, '2021_11_30_054148_create_gaji_table', 1),
(259, '2021_12_01_062302_create_jabatan_table', 1),
(260, '2021_12_02_053654_create_jabatan_gaji_table', 1),
(261, '2021_12_06_024027_create_penempatan_table', 1),
(262, '2021_12_10_061237_create_data_karyawan_table', 1),
(263, '2021_12_12_041715_create_tunjangan_table', 1),
(264, '2021_12_15_022128_create_kontrak_table', 1),
(265, '2021_12_15_054701_create_riw_penempatan_wilayah_table', 1),
(266, '2021_12_24_080959_create_data_perusahaan_table', 1),
(267, '2022_01_19_072743_create_pkwt_table', 1),
(269, '2022_03_09_014829_create_insentif_kurir_table', 1),
(271, '2022_04_01_074454_create_rp_kpi_table', 2),
(272, '2022_04_01_074455_create_orang_kpi_table', 2),
(273, '2022_04_01_074456_create_insentif_kpi_table', 3),
(274, '2022_02_08_072441_create_absensi_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orang_kpi`
--

CREATE TABLE `orang_kpi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `id_rp_kpi` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orang_kpi`
--

INSERT INTO `orang_kpi` (`id`, `id_akun`, `id_rp_kpi`, `created_at`, `updated_at`) VALUES
(5, 2, 5, '2022-04-07 12:43:44', '2022-04-07 12:43:44'),
(6, 4, 7, '2022-04-07 12:43:51', '2022-04-07 12:43:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orang_tua`
--

CREATE TABLE `orang_tua` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `hubungan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orang_tua`
--

INSERT INTO `orang_tua` (`id`, `id_akun`, `hubungan`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat_ktp`, `provinsi_ktp`, `kota_ktp`, `kabupaten_ktp`, `kecamatan_ktp`, `kelurahan_ktp`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 2, 'IBU', 'NURMIATI', 'MAKASSAR', '1969-12-31', 'ISLAM', 'JL SINASSARA NO 44B', 'SULAWESI SELATAN', 'MAKASSAR', 'MAKASSAR', 'TALLO', 'KALUKUBODOA', '082393091013', '2022-03-21 00:02:20', '2022-03-21 00:02:20'),
(2, 2, 'AYAH', 'SYARIFUDDIN DG. ICAL', 'MAKASSAR', '2021-03-02', 'ISLAM', 'JL. SINASSARA NO 44B', 'SULAWESI SELATAN', 'MAKASSAR', 'MAKASSAR', 'TALLO', 'KALUKUBODOA', '082291221152', '2022-03-21 00:07:03', '2022-03-21 00:07:03'),
(3, 2, 'WALI', 'NURKA INDAH', 'MAKASSAR', '1992-09-11', 'ISLAM', 'BTP', 'SULAWESI SELATAN', 'MAKASSAR', 'MAKASSAR', 'TAMALANREA', 'TAMALANREA', '082346160842', '2022-03-21 00:13:08', '2022-03-21 00:13:08'),
(4, 197, 'AYAH', 'SYARIFUDDIN', 'MAKASSAR', '1966-06-13', 'ISLAM', 'JL DR WAHIDIN SUDIRO HUSODO', 'SULAWESI SELATAN', 'MAKASSAR', 'GOWA', 'SOMBAOPU', 'BATANGKALUKU', '085298628811', '2022-03-23 19:18:14', '2022-03-23 19:18:14'),
(5, 7, 'AYAH', 'USMAN DG TALLI', 'MAKASSAR', '1965-12-07', 'ISLAM', 'JL. BORONG RAYA II LR 4 DLM NO 4', 'SULAWESI SELATAN', 'KOTA MAKASSAR', 'KOTA MAKASSAR', 'MANGGALA', 'BORONG', '089652752152', '2022-03-25 04:07:42', '2022-03-25 04:07:42'),
(6, 7, 'IBU', 'NURBAYA', 'MAKASSAR', '1967-08-10', 'ISLAM', 'JL. BORONG RAYA II LR 4 DLM NO 4', 'SULAWESI SELATAN', 'KOTA MAKASSAR', 'KOTA MAKASSAR', 'MANGGALA', 'BORONG', '089652752152', '2022-03-25 04:08:44', '2022-03-25 04:08:44'),
(7, 7, 'WALI', 'FITRIA NENSI USMAN', 'MAKASSAR', '1995-03-11', 'ISLAM', 'JL. BORONG RAYA II LR 4 DLM NO 4', 'SULAWESI SELATAN', 'KOTA MAKASSAR', 'KOTA MAKASSAR', 'MANGGALA', 'BORONG', '089660865442', '2022-03-25 04:10:13', '2022-03-25 04:10:13'),
(8, 275, 'AYAH', 'MUHTAR', 'LAJOKKA', '1974-12-31', 'ISLAM', 'LAJOKKA', 'SULAWESI SELATAN', 'LAJOKKA', 'WAJO', 'TANASITOLO', 'TONRALIPUE', '6282333853349', '2022-03-30 05:56:48', '2022-03-30 05:56:48'),
(9, 275, 'IBU', 'WARNI', 'LAJOKKA', '1977-10-11', 'ISLAM', 'LAJOKKA', 'SULAWESI SELATAN', 'LAJOKKA', 'WAJO', 'TONASITOLO', 'TONRALIPUE', '6282333853349', '2022-03-30 05:59:17', '2022-03-30 05:59:17'),
(10, 275, 'WALI', 'MUTRIANI DEWI', 'LAJOKKA', '1994-09-04', 'ISLAM', 'LAJOKKA', 'SULAWESI SELATAN', 'LAJOKKA', 'WAJO', 'TANASITOLO', 'TONRALIPUE', '6285398219029', '2022-03-30 06:01:51', '2022-03-30 06:01:51');

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
-- Struktur dari tabel `pendidikan_formal`
--

CREATE TABLE `pendidikan_formal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `pendidikan` enum('MI','MTS','SD','SMP','SMA','SMK','D1','D2','D3','D4','S1','S2','S3') COLLATE utf8mb4_unicode_ci NOT NULL,
  `gelar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_univ` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akredi_univ` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akredi_jur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai_studi` date NOT NULL,
  `akhir_studi` date NOT NULL,
  `nilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ijazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transkrip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendidikan_formal`
--

INSERT INTO `pendidikan_formal` (`id`, `id_akun`, `pendidikan`, `gelar`, `nama_univ`, `akredi_univ`, `jurusan`, `akredi_jur`, `mulai_studi`, `akhir_studi`, `nilai`, `no_ijazah`, `ijazah`, `transkrip`, `created_at`, `updated_at`) VALUES
(3, 2, 'S1', 'S.KOM', 'SEKOLAH TINGGI INFORMATIKA DAN MULTIMEDIA NUSA PALAPA', 'C', 'TEKNIK INFORMATIKA', 'C', '2012-07-01', '2016-12-22', '3.56', '00080/55-201/s1/093-129', 'file_pendidikan_formal_ijazah_1648092097.pdf', 'file_pendidikan_formal_transkrip_1648092097.pdf', '2022-03-23 20:21:37', '2022-03-23 20:21:37'),
(4, 275, 'S1', 'S.M', 'UNIVERSITAS MUSLIM INDONESIA', 'A', 'MANAJEMEN', 'A', '2016-09-09', '2020-07-28', '3.8', '612012020000101', 'file_pendidikan_formal_ijazah_1648645685.pdf', 'file_pendidikan_formal_transkrip_1648645685.pdf', '2022-03-30 06:08:05', '2022-03-30 06:08:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan_non_formal`
--

CREATE TABLE `pendidikan_non_formal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `pelaksana` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_pelaksana` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_pemimpin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_terbit` date NOT NULL,
  `tahun_akhir_terbit` date NOT NULL,
  `sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penempatan`
--

CREATE TABLE `penempatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alokasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_alokasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_th` enum('TH','VTH','FB','HO') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penempatan`
--

INSERT INTO `penempatan` (`id`, `alamat`, `provinsi`, `kota`, `kabupaten`, `kelurahan`, `kecamatan`, `alokasi`, `kode_alokasi`, `status_th`, `created_at`, `updated_at`) VALUES
(1, 'JL. GUNUNG LATIMOJONG NO.78 A', 'SULAWESI SELATAN', 'KOTA MAKASSAR', 'KOTA MAKASSAR', 'LARIANG BANGI', 'MAKASSAR', 'BACK OFFICE', 'IDE 24', 'HO', '2022-03-22 23:25:27', '2022-03-30 23:03:38'),
(2, 'JL. DI PANJAITAN NO.21, WUNDUDOPI, BARUGA, KOTA KENDARI, SULAWESI TENGGARA 93117, INDONESIA', 'SULAWESI TENGGARA', 'KENDARI', 'KENDARI', 'WUNDUDOPI', 'BARUGA', 'BARUGA', 'TH_KDI02', 'TH', '2022-03-25 00:57:01', '2022-03-25 00:57:01'),
(3, 'JL.MAYJEND SUTOYO NO. 75 E KEL. WATU WATU KEC. KENDARI BARAT KOTA KENDARI 93873', 'SULAWESI TENGGARA', 'KENDARI', 'KENDARI', 'WATU-WATU', 'KENDARI BARAT', 'KENDARI BARAT', 'TH_KDI01', 'TH', '2022-03-25 00:58:52', '2022-03-25 00:58:52'),
(4, 'JL. MALAKA NO 13 KEC. POASIA KEL. ANDOUNOHU KOTA KENDARI', 'SULAWESI TENGGARA', 'KENDARI', 'KENDARI', 'ANDOUNOHU', 'POASIA', 'POASIA', 'TH_KDI03', 'TH', '2022-03-25 01:00:06', '2022-03-25 01:00:06'),
(6, 'JL. H. A. DEPU NO.15 KEC. POLEWALI KAB. POLEWALI MANDAR 91311', 'SULAWESI SELATAN', 'POLEWALI', 'POLEWALI', 'POLEWALI MANDAR', 'POLEWALI', 'POLEWALI', 'TH_PWX01', 'TH', '2022-03-27 19:06:44', '2022-03-27 19:06:44'),
(7, 'JL. GUNUNG LATIMOJONG NO.78 A', 'SULAWESI SELATAN', 'MAKASSAR', 'MAKASSAR', 'LARIANG BANGI', 'MAKASSAR', 'MAKASSAR', 'TH_UPG18', 'TH', '2022-03-27 20:33:07', '2022-03-27 20:33:07'),
(8, 'JALAN ANDI MAKKASAU, KEL. KAREMA, KEC. MAMUJU, KAB. MAMUJU', 'SULAWESI BARAT', 'MAMUJU', 'MAMUJU', 'KAREMA', 'MAMUJU', 'MAMUJU', 'TH_PWX02', 'TH', '2022-03-27 23:15:53', '2022-03-27 23:15:53'),
(10, 'JL. USMAN SALENGKE NO.10, SUNGGUMINASA, KEC. SOMBA OPU, KABUPATEN GOWA, SULAWESI SELATAN 92113', 'SULAWESI SELATAN', 'GOWA', 'GOWA', 'SUNGGUMINASA', 'SOMBA OPU', 'SOMBA OPU', 'TH_UPG08', 'TH', '2022-03-28 00:35:18', '2022-03-28 00:35:18'),
(11, 'JL. H.A.M ARSYAD KEL. BUKIT INDAH KEC.SOREANG', 'SULAWESI SELATAN', 'PARE-PARE', 'PARE-PARE', 'BUKIT INDAH', 'SOREANG', 'SOREANG', 'TH_UPG04', 'TH', '2022-03-28 00:44:22', '2022-03-28 00:44:22'),
(12, 'JL. WR. SUPRATMAN, WATALLIPUE, KEC. TEMPE, KABUPATEN WAJO, SULAWESI SELATAN 90911', 'SULAWESI SELATAN', 'WAJO', 'WAJO', 'WATALLIPUE', 'TEMPE', 'TEMPE', 'TH_UPG14', 'TH', '2022-03-28 01:37:36', '2022-03-28 01:37:36'),
(13, 'JL.SAM RATULANGI KEL. CAILE, KEC. UJUNG BULU, KAB. BULUKUMBA', 'SULAWESI SELATAN', 'BULUKUMBA', 'BULUKUMBA', 'CAILE', 'UJUNG BULU', 'GANTARANG', 'TH_UPG13', 'TH', '2022-03-29 19:44:39', '2022-03-29 19:44:39'),
(14, 'JL.DR. WAHIDIN S. HUSODO KEC. TANETE RIATTANG BARAT , KAB. BONE', 'SULAWESI SELATAN', 'BONE', 'BONE', 'MACANANG', 'TANETE RIATTANG', 'BONE', 'TH_UPG15', 'TH', '2022-03-29 19:50:00', '2022-03-29 19:50:00'),
(15, 'JL.DR. WAHIDIN S. HUSODO KEC. TANETE RIATTANG BARAT , KAB. BONE', 'SULAWESI SELATAN', 'BONE', 'BONE', 'MACANANG', 'TANETE RIATTANG', 'TANETE RIATTANG', 'TH_UPG15', 'TH', '2022-03-29 19:51:24', '2022-03-29 19:51:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akses` bigint(20) UNSIGNED NOT NULL,
  `id_tema` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('aktif','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `id_akses`, `id_tema`, `nama`, `nik`, `password`, `show_pass`, `email`, `no_hp`, `token`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 'Heroisme Indokaisa Triasa', '945748168034000', '$2y$10$.iq4VfaMMzus.AR/Z/ZADurFZmoUzAKl8AhXbL4FGyVc4oG8sMsqy', 'Perusahaan_98931', 'admin@indokaisa.com', '0818698648', NULL, 'aktif', '2022-03-20 23:14:53', '2022-03-23 01:26:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pkwt`
--

CREATE TABLE `pkwt` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kontrak` bigint(20) UNSIGNED NOT NULL,
  `id_tunjangan` bigint(20) UNSIGNED DEFAULT NULL,
  `id_jabatan_gaji` bigint(20) UNSIGNED DEFAULT NULL,
  `id_riw_penempatan_wilayah` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riw_penempatan_wilayah`
--

CREATE TABLE `riw_penempatan_wilayah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `id_penempatan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `riw_penempatan_wilayah`
--

INSERT INTO `riw_penempatan_wilayah` (`id`, `id_akun`, `id_penempatan`, `created_at`, `updated_at`) VALUES
(2, 17, 2, '2022-03-25 01:01:20', '2022-03-25 01:01:20'),
(3, 18, 2, '2022-03-25 01:02:05', '2022-03-25 01:02:05'),
(4, 62, 2, '2022-03-25 01:02:21', '2022-03-25 01:02:21'),
(5, 63, 2, '2022-03-25 01:02:34', '2022-03-25 01:02:34'),
(6, 68, 2, '2022-03-25 01:03:02', '2022-03-25 01:03:02'),
(7, 74, 2, '2022-03-25 01:03:26', '2022-03-25 01:03:26'),
(8, 222, 2, '2022-03-25 01:03:55', '2022-03-25 01:03:55'),
(9, 247, 2, '2022-03-25 01:04:18', '2022-03-25 01:04:18'),
(10, 248, 2, '2022-03-25 01:04:42', '2022-03-25 01:04:42'),
(11, 220, 2, '2022-03-25 01:04:52', '2022-03-25 01:04:52'),
(12, 250, 2, '2022-03-25 01:05:11', '2022-03-25 01:05:11'),
(13, 34, 3, '2022-03-25 01:06:21', '2022-03-25 01:06:21'),
(14, 152, 3, '2022-03-25 01:06:38', '2022-03-25 01:06:38'),
(15, 181, 3, '2022-03-25 01:06:51', '2022-03-25 01:06:51'),
(16, 209, 3, '2022-03-25 01:07:06', '2022-03-25 01:07:06'),
(17, 228, 3, '2022-03-25 01:07:20', '2022-03-25 01:07:20'),
(18, 235, 3, '2022-03-25 01:07:36', '2022-03-25 01:07:36'),
(19, 237, 3, '2022-03-25 01:07:55', '2022-03-25 01:07:55'),
(20, 246, 3, '2022-03-25 01:08:06', '2022-03-25 01:08:06'),
(21, 19, 4, '2022-03-25 01:10:55', '2022-03-25 01:10:55'),
(22, 49, 4, '2022-03-25 01:11:10', '2022-03-25 01:11:10'),
(23, 160, 4, '2022-03-25 01:11:23', '2022-03-25 01:11:23'),
(24, 163, 4, '2022-03-25 01:11:37', '2022-03-25 01:11:37'),
(25, 191, 4, '2022-03-25 01:11:50', '2022-03-25 01:11:50'),
(26, 219, 4, '2022-03-25 01:12:11', '2022-03-25 01:12:11'),
(27, 244, 4, '2022-03-25 01:12:24', '2022-03-25 01:12:24'),
(36, 21, 7, '2022-03-27 20:34:34', '2022-03-27 20:34:34'),
(37, 24, 7, '2022-03-27 20:34:49', '2022-03-27 20:34:49'),
(38, 38, 7, '2022-03-27 20:35:03', '2022-03-27 20:35:03'),
(39, 41, 7, '2022-03-27 20:35:17', '2022-03-27 20:35:17'),
(40, 45, 7, '2022-03-27 20:35:32', '2022-03-27 20:35:32'),
(41, 101, 7, '2022-03-27 20:35:47', '2022-03-27 20:35:47'),
(42, 112, 7, '2022-03-27 20:36:04', '2022-03-27 20:36:04'),
(43, 127, 7, '2022-03-27 20:36:57', '2022-03-27 20:36:57'),
(44, 137, 7, '2022-03-27 20:37:16', '2022-03-27 20:37:16'),
(45, 157, 7, '2022-03-27 20:50:11', '2022-03-27 20:50:11'),
(47, 175, 7, '2022-03-27 20:55:12', '2022-03-27 20:55:12'),
(48, 203, 7, '2022-03-27 20:55:32', '2022-03-27 20:55:32'),
(49, 78, 8, '2022-03-27 23:17:28', '2022-03-27 23:17:28'),
(50, 87, 8, '2022-03-27 23:17:52', '2022-03-27 23:17:52'),
(51, 88, 8, '2022-03-27 23:18:18', '2022-03-27 23:18:18'),
(52, 154, 8, '2022-03-27 23:18:45', '2022-03-27 23:18:45'),
(53, 249, 8, '2022-03-27 23:19:08', '2022-03-27 23:19:08'),
(54, 28, 10, '2022-03-28 00:35:58', '2022-03-28 00:35:58'),
(55, 29, 10, '2022-03-28 00:36:14', '2022-03-28 00:36:14'),
(56, 79, 10, '2022-03-28 00:36:27', '2022-03-28 00:36:27'),
(57, 97, 10, '2022-03-28 00:36:40', '2022-03-28 00:36:40'),
(58, 136, 10, '2022-03-28 00:36:55', '2022-03-28 00:36:55'),
(59, 189, 10, '2022-03-28 00:37:19', '2022-03-28 00:37:19'),
(60, 192, 10, '2022-03-28 00:37:33', '2022-03-28 00:37:33'),
(61, 199, 10, '2022-03-28 00:37:45', '2022-03-28 00:37:45'),
(62, 204, 10, '2022-03-28 00:38:23', '2022-03-28 00:38:23'),
(64, 56, 11, '2022-03-28 00:49:27', '2022-03-28 00:49:27'),
(65, 67, 11, '2022-03-28 00:49:48', '2022-03-28 00:49:48'),
(66, 133, 11, '2022-03-28 00:50:35', '2022-03-28 00:50:35'),
(67, 172, 11, '2022-03-28 00:50:51', '2022-03-28 00:50:51'),
(68, 89, 12, '2022-03-28 01:37:53', '2022-03-28 01:37:53'),
(69, 142, 12, '2022-03-28 01:38:07', '2022-03-28 01:38:07'),
(70, 201, 12, '2022-03-28 01:38:20', '2022-03-28 01:38:20'),
(71, 221, 12, '2022-03-28 01:38:35', '2022-03-28 01:38:35'),
(72, 234, 12, '2022-03-28 01:38:53', '2022-03-28 01:38:53'),
(73, 239, 12, '2022-03-28 01:39:05', '2022-03-28 01:39:05'),
(74, 264, 12, '2022-03-28 01:39:17', '2022-03-28 01:39:17'),
(75, 51, 13, '2022-03-29 19:45:56', '2022-03-29 19:45:56'),
(76, 106, 13, '2022-03-29 19:46:08', '2022-03-29 19:46:08'),
(77, 107, 13, '2022-03-29 19:46:34', '2022-03-29 19:46:34'),
(78, 155, 13, '2022-03-29 19:46:46', '2022-03-29 19:46:46'),
(79, 227, 13, '2022-03-29 19:47:11', '2022-03-29 19:47:11'),
(80, 42, 15, '2022-03-29 19:51:35', '2022-03-29 19:51:35'),
(81, 120, 15, '2022-03-29 19:51:53', '2022-03-29 19:51:53'),
(82, 121, 15, '2022-03-29 19:52:07', '2022-03-29 19:52:07'),
(83, 263, 15, '2022-03-29 19:52:23', '2022-03-29 19:52:23'),
(84, 265, 15, '2022-03-29 19:52:36', '2022-03-29 19:52:36'),
(85, 223, 4, '2022-03-30 23:48:46', '2022-03-30 23:48:46'),
(86, 161, 7, '2022-03-30 23:53:30', '2022-03-30 23:53:30'),
(87, 54, 11, '2022-03-31 00:02:37', '2022-03-31 00:02:37'),
(88, 12, 6, '2022-03-31 00:10:33', '2022-03-31 00:10:33'),
(89, 13, 6, '2022-03-31 00:10:58', '2022-03-31 00:10:58'),
(90, 14, 6, '2022-03-31 00:11:33', '2022-03-31 00:11:33'),
(91, 15, 6, '2022-03-31 00:12:06', '2022-03-31 00:12:06'),
(92, 31, 6, '2022-03-31 00:12:30', '2022-03-31 00:12:30'),
(93, 76, 6, '2022-03-31 00:12:59', '2022-03-31 00:12:59'),
(94, 77, 6, '2022-03-31 00:13:21', '2022-03-31 00:13:21'),
(95, 84, 6, '2022-03-31 00:13:45', '2022-03-31 00:13:45'),
(96, 9, 1, '2022-03-31 00:19:49', '2022-03-31 00:19:49'),
(97, 8, 1, '2022-03-31 00:20:05', '2022-03-31 00:20:05'),
(98, 2, 1, '2022-03-31 00:20:23', '2022-03-31 00:20:23'),
(99, 3, 1, '2022-03-31 00:21:23', '2022-03-31 00:21:23'),
(100, 4, 1, '2022-03-31 00:21:39', '2022-03-31 00:21:39'),
(101, 10, 1, '2022-03-31 00:21:55', '2022-03-31 00:21:55'),
(102, 30, 1, '2022-03-31 00:22:17', '2022-03-31 00:22:17'),
(103, 16, 1, '2022-03-31 00:23:15', '2022-03-31 00:23:15'),
(104, 22, 1, '2022-03-31 00:23:56', '2022-03-31 00:23:56'),
(105, 32, 1, '2022-03-31 00:26:54', '2022-03-31 00:26:54'),
(106, 33, 1, '2022-03-31 00:27:18', '2022-03-31 00:27:18'),
(107, 35, 1, '2022-03-31 00:28:02', '2022-03-31 00:28:02'),
(108, 37, 1, '2022-03-31 00:28:24', '2022-03-31 00:28:24'),
(109, 48, 1, '2022-03-31 00:28:53', '2022-03-31 00:28:53'),
(110, 52, 1, '2022-03-31 00:29:19', '2022-03-31 00:29:19'),
(111, 80, 1, '2022-03-31 00:34:01', '2022-03-31 00:34:01'),
(112, 80, 1, '2022-03-31 00:44:15', '2022-03-31 00:44:15'),
(113, 81, 1, '2022-03-31 00:44:36', '2022-03-31 00:44:36'),
(114, 96, 1, '2022-03-31 00:45:00', '2022-03-31 00:45:00'),
(115, 148, 1, '2022-03-31 00:45:21', '2022-03-31 00:45:21'),
(116, 149, 1, '2022-03-31 00:45:42', '2022-03-31 00:45:42'),
(117, 162, 1, '2022-03-31 00:46:54', '2022-03-31 00:46:54'),
(118, 271, 1, '2022-03-31 00:47:14', '2022-03-31 00:47:14'),
(119, 177, 1, '2022-03-31 00:47:37', '2022-03-31 00:47:37'),
(120, 178, 1, '2022-03-31 00:48:18', '2022-03-31 00:48:18'),
(121, 272, 1, '2022-03-31 00:48:39', '2022-03-31 00:48:39'),
(122, 182, 1, '2022-03-31 00:49:00', '2022-03-31 00:49:00'),
(123, 183, 1, '2022-03-31 00:49:26', '2022-03-31 00:49:26'),
(124, 184, 1, '2022-03-31 00:49:44', '2022-03-31 00:49:44'),
(125, 186, 1, '2022-03-31 00:51:18', '2022-03-31 00:51:18'),
(126, 197, 1, '2022-03-31 00:51:43', '2022-03-31 00:51:43'),
(127, 206, 1, '2022-03-31 00:52:04', '2022-03-31 00:52:04'),
(128, 214, 1, '2022-03-31 00:52:43', '2022-03-31 00:52:43'),
(129, 238, 1, '2022-03-31 00:53:10', '2022-03-31 00:53:10'),
(130, 243, 1, '2022-03-31 00:53:28', '2022-03-31 00:53:28'),
(131, 251, 1, '2022-03-31 00:53:48', '2022-03-31 00:53:48'),
(132, 252, 1, '2022-03-31 00:54:33', '2022-03-31 00:54:33'),
(133, 254, 1, '2022-03-31 00:54:56', '2022-03-31 00:54:56'),
(134, 261, 1, '2022-03-31 00:55:15', '2022-03-31 00:55:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rp_kpi`
--

CREATE TABLE `rp_kpi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rp_hujau` bigint(20) NOT NULL DEFAULT 0,
  `rp_merah` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rp_kpi`
--

INSERT INTO `rp_kpi` (`id`, `rp_hujau`, `rp_merah`, `created_at`, `updated_at`) VALUES
(5, 750000, 500000, '2022-04-07 12:32:47', '2022-04-07 12:32:47'),
(6, 600000, 400000, '2022-04-07 12:33:04', '2022-04-07 12:33:04'),
(7, 450000, 300000, '2022-04-07 12:41:10', '2022-04-07 12:41:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tema`
--

CREATE TABLE `tema` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('aktif','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tunjangan`
--

CREATE TABLE `tunjangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_akun` bigint(20) UNSIGNED NOT NULL,
  `tunj_jabatan` bigint(20) NOT NULL DEFAULT 0,
  `tunj_kendaraan` bigint(20) NOT NULL DEFAULT 0,
  `pendapatan_lain` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tunjangan`
--

INSERT INTO `tunjangan` (`id`, `id_akun`, `tunj_jabatan`, `tunj_kendaraan`, `pendapatan_lain`, `created_at`, `updated_at`) VALUES
(2, 2, 1000, 2000, 3000, '2022-05-13 06:36:10', '2022-05-13 06:36:10'),
(5, 2, 2, 3, 4, '2022-05-13 06:38:25', '2022-05-13 06:38:25'),
(6, 1, 9000, 8000, 7000, '2022-05-12 07:03:31', '2022-05-12 07:03:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensi_id_akun_foreign` (`id_akun`);

--
-- Indeks untuk tabel `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `akun_id_akses_foreign` (`id_akses`),
  ADD KEY `akun_id_tema_foreign` (`id_tema`),
  ADD KEY `akun_id_perusahaan_foreign` (`id_perusahaan`);

--
-- Indeks untuk tabel `aply_lowongan`
--
ALTER TABLE `aply_lowongan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aply_lowongan_id_akun_foreign` (`id_akun`),
  ADD KEY `aply_lowongan_id_perusahaan_foreign` (`id_perusahaan`),
  ADD KEY `aply_lowongan_id_lowongan_kerja_foreign` (`id_lowongan_kerja`);

--
-- Indeks untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_diri_id_akun_foreign` (`id_akun`);

--
-- Indeks untuk tabel `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_karyawan_id_akun_foreign` (`id_akun`);

--
-- Indeks untuk tabel `data_perusahaan`
--
ALTER TABLE `data_perusahaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_perusahaan_id_perusahaan_foreign` (`id_perusahaan`);

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokumen_id_akun_foreign` (`id_akun`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `insentif_kpi`
--
ALTER TABLE `insentif_kpi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `insentif_kpi_id_akun_foreign` (`id_akun`),
  ADD KEY `insentif_kpi_id_orang_kpi_foreign` (`id_orang_kpi`);

--
-- Indeks untuk tabel `insentif_kurir`
--
ALTER TABLE `insentif_kurir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `insentif_kurir_id_akun_foreign` (`id_akun`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jabatan_gaji`
--
ALTER TABLE `jabatan_gaji`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jabatan_gaji_id_akun_foreign` (`id_akun`),
  ADD KEY `jabatan_gaji_id_jabatan_foreign` (`id_jabatan`),
  ADD KEY `jabatan_gaji_id_gaji_foreign` (`id_gaji`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `karyawan_id_akun_foreign` (`id_akun`);

--
-- Indeks untuk tabel `kontrak`
--
ALTER TABLE `kontrak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kontrak_id_akun_foreign` (`id_akun`);

--
-- Indeks untuk tabel `log_login`
--
ALTER TABLE `log_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_login_id_akun_foreign` (`id_akun`);

--
-- Indeks untuk tabel `log_tindakan`
--
ALTER TABLE `log_tindakan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_tindakan_id_loglogin_foreign` (`id_logLogin`),
  ADD KEY `log_tindakan_id_akun_foreign` (`id_akun`);

--
-- Indeks untuk tabel `lowongan_kerja`
--
ALTER TABLE `lowongan_kerja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lowongan_kerja_id_akun_foreign` (`id_akun`),
  ADD KEY `lowongan_kerja_id_perusahaan_foreign` (`id_perusahaan`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orang_kpi`
--
ALTER TABLE `orang_kpi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orang_kpi_id_akun_foreign` (`id_akun`),
  ADD KEY `orang_kpi_id_rp_kpi_foreign` (`id_rp_kpi`);

--
-- Indeks untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orang_tua_id_akun_foreign` (`id_akun`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pendidikan_formal`
--
ALTER TABLE `pendidikan_formal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendidikan_formal_id_akun_foreign` (`id_akun`);

--
-- Indeks untuk tabel `pendidikan_non_formal`
--
ALTER TABLE `pendidikan_non_formal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendidikan_non_formal_id_akun_foreign` (`id_akun`);

--
-- Indeks untuk tabel `penempatan`
--
ALTER TABLE `penempatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perusahaan_id_akses_foreign` (`id_akses`),
  ADD KEY `perusahaan_id_tema_foreign` (`id_tema`);

--
-- Indeks untuk tabel `pkwt`
--
ALTER TABLE `pkwt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pkwt_id_kontrak_foreign` (`id_kontrak`),
  ADD KEY `pkwt_id_tunjangan_foreign` (`id_tunjangan`),
  ADD KEY `pkwt_id_jabatan_gaji_foreign` (`id_jabatan_gaji`),
  ADD KEY `pkwt_id_riw_penempatan_wilayah_foreign` (`id_riw_penempatan_wilayah`);

--
-- Indeks untuk tabel `riw_penempatan_wilayah`
--
ALTER TABLE `riw_penempatan_wilayah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `riw_penempatan_wilayah_id_akun_foreign` (`id_akun`),
  ADD KEY `riw_penempatan_wilayah_id_penempatan_foreign` (`id_penempatan`);

--
-- Indeks untuk tabel `rp_kpi`
--
ALTER TABLE `rp_kpi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tunjangan`
--
ALTER TABLE `tunjangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tunjangan_id_akun_foreign` (`id_akun`);

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
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=373;

--
-- AUTO_INCREMENT untuk tabel `akses`
--
ALTER TABLE `akses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;

--
-- AUTO_INCREMENT untuk tabel `aply_lowongan`
--
ALTER TABLE `aply_lowongan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

--
-- AUTO_INCREMENT untuk tabel `data_karyawan`
--
ALTER TABLE `data_karyawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT untuk tabel `data_perusahaan`
--
ALTER TABLE `data_perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `insentif_kpi`
--
ALTER TABLE `insentif_kpi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `insentif_kurir`
--
ALTER TABLE `insentif_kurir`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `jabatan_gaji`
--
ALTER TABLE `jabatan_gaji`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT untuk tabel `kontrak`
--
ALTER TABLE `kontrak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `log_login`
--
ALTER TABLE `log_login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `log_tindakan`
--
ALTER TABLE `log_tindakan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lowongan_kerja`
--
ALTER TABLE `lowongan_kerja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;

--
-- AUTO_INCREMENT untuk tabel `orang_kpi`
--
ALTER TABLE `orang_kpi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pendidikan_formal`
--
ALTER TABLE `pendidikan_formal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pendidikan_non_formal`
--
ALTER TABLE `pendidikan_non_formal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penempatan`
--
ALTER TABLE `penempatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pkwt`
--
ALTER TABLE `pkwt`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `riw_penempatan_wilayah`
--
ALTER TABLE `riw_penempatan_wilayah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT untuk tabel `rp_kpi`
--
ALTER TABLE `rp_kpi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tema`
--
ALTER TABLE `tema`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tunjangan`
--
ALTER TABLE `tunjangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_id_akses_foreign` FOREIGN KEY (`id_akses`) REFERENCES `akses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `akun_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `akun_id_tema_foreign` FOREIGN KEY (`id_tema`) REFERENCES `tema` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `aply_lowongan`
--
ALTER TABLE `aply_lowongan`
  ADD CONSTRAINT `aply_lowongan_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aply_lowongan_id_lowongan_kerja_foreign` FOREIGN KEY (`id_lowongan_kerja`) REFERENCES `lowongan_kerja` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `aply_lowongan_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  ADD CONSTRAINT `data_diri_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD CONSTRAINT `data_karyawan_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_perusahaan`
--
ALTER TABLE `data_perusahaan`
  ADD CONSTRAINT `data_perusahaan_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `dokumen_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `insentif_kpi`
--
ALTER TABLE `insentif_kpi`
  ADD CONSTRAINT `insentif_kpi_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `insentif_kpi_id_orang_kpi_foreign` FOREIGN KEY (`id_orang_kpi`) REFERENCES `orang_kpi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `insentif_kurir`
--
ALTER TABLE `insentif_kurir`
  ADD CONSTRAINT `insentif_kurir_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jabatan_gaji`
--
ALTER TABLE `jabatan_gaji`
  ADD CONSTRAINT `jabatan_gaji_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jabatan_gaji_id_gaji_foreign` FOREIGN KEY (`id_gaji`) REFERENCES `gaji` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `jabatan_gaji_id_jabatan_foreign` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kontrak`
--
ALTER TABLE `kontrak`
  ADD CONSTRAINT `kontrak_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `log_login`
--
ALTER TABLE `log_login`
  ADD CONSTRAINT `log_login_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `log_tindakan`
--
ALTER TABLE `log_tindakan`
  ADD CONSTRAINT `log_tindakan_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `log_tindakan_id_loglogin_foreign` FOREIGN KEY (`id_logLogin`) REFERENCES `log_login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `lowongan_kerja`
--
ALTER TABLE `lowongan_kerja`
  ADD CONSTRAINT `lowongan_kerja_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lowongan_kerja_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orang_kpi`
--
ALTER TABLE `orang_kpi`
  ADD CONSTRAINT `orang_kpi_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orang_kpi_id_rp_kpi_foreign` FOREIGN KEY (`id_rp_kpi`) REFERENCES `rp_kpi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD CONSTRAINT `orang_tua_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendidikan_formal`
--
ALTER TABLE `pendidikan_formal`
  ADD CONSTRAINT `pendidikan_formal_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendidikan_non_formal`
--
ALTER TABLE `pendidikan_non_formal`
  ADD CONSTRAINT `pendidikan_non_formal_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `perusahaan_id_akses_foreign` FOREIGN KEY (`id_akses`) REFERENCES `akses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `perusahaan_id_tema_foreign` FOREIGN KEY (`id_tema`) REFERENCES `tema` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pkwt`
--
ALTER TABLE `pkwt`
  ADD CONSTRAINT `pkwt_id_jabatan_gaji_foreign` FOREIGN KEY (`id_jabatan_gaji`) REFERENCES `jabatan_gaji` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `pkwt_id_kontrak_foreign` FOREIGN KEY (`id_kontrak`) REFERENCES `kontrak` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pkwt_id_riw_penempatan_wilayah_foreign` FOREIGN KEY (`id_riw_penempatan_wilayah`) REFERENCES `riw_penempatan_wilayah` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `pkwt_id_tunjangan_foreign` FOREIGN KEY (`id_tunjangan`) REFERENCES `tunjangan` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `riw_penempatan_wilayah`
--
ALTER TABLE `riw_penempatan_wilayah`
  ADD CONSTRAINT `riw_penempatan_wilayah_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `riw_penempatan_wilayah_id_penempatan_foreign` FOREIGN KEY (`id_penempatan`) REFERENCES `penempatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tunjangan`
--
ALTER TABLE `tunjangan`
  ADD CONSTRAINT `tunjangan_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
