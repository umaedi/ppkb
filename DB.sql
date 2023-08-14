-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2023 pada 04.49
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppkb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `log_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_created_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_updated_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'event',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `log_description`, `log_created_at`, `log_updated_at`, `log_type`, `created_at`, `updated_at`) VALUES
(1, 3, 'Ardi Andra edit User TPK Berhasil login', '2023-06-28 06:49:22', '2023-06-28 06:49:22', 'event', NULL, NULL),
(2, 3, 'Ardi Andra edit user tpk berhasil login', '2023-06-28 06:52:45', '2023-06-28 06:52:45', 'aktivitas', NULL, NULL),
(3, 3, 'Ardi Andra edit', '2023-06-28 06:54:42', '2023-06-28 06:54:42', 'aktivitas', NULL, NULL),
(4, 3, 'Ardi Andra edit berhasil login', '2023-06-28 06:58:09', '2023-06-28 06:58:09', 'aktivitas', NULL, NULL),
(5, 3, 'Ardi Andra edit', '2023-06-28 07:10:30', '2023-06-28 07:10:30', 'aktivitas', NULL, NULL),
(6, 7, 'daniel berhasil login', '2023-06-28 07:10:39', '2023-06-28 07:10:39', 'aktivitas', NULL, NULL),
(7, 7, 'daniel', '2023-06-28 07:11:16', '2023-06-28 07:11:16', 'aktivitas', NULL, NULL),
(8, 3, 'Ardi Andra edit berhasil login', '2023-06-28 07:11:27', '2023-06-28 07:11:27', 'aktivitas', NULL, NULL),
(9, 3, 'Ardi Andra edit berhasil login', '2023-06-28 10:19:46', '2023-06-28 10:19:46', 'aktivitas', NULL, NULL),
(10, 3, 'Ardi Andra edit berhasil login', '2023-06-28 17:29:55', '2023-06-28 17:29:55', 'aktivitas', NULL, NULL),
(11, 3, 'Ardi Andra edit berhasil login', '2023-06-29 13:43:19', '2023-06-29 13:43:19', 'aktivitas', NULL, NULL),
(12, 3, 'Ardi Andra edit berhasil login', '2023-06-29 17:38:16', '2023-06-29 17:38:16', 'aktivitas', NULL, NULL),
(13, 3, 'Ardi Andra edit berhasil login', '2023-06-29 18:03:28', '2023-06-29 18:03:28', 'aktivitas', NULL, NULL),
(14, 3, 'Ardi Andra edit berhasil login', '2023-06-29 21:53:25', '2023-06-29 21:53:25', 'aktivitas', NULL, NULL),
(15, 3, 'Ardi Andra edit berhasil login', '2023-06-30 09:04:01', '2023-06-30 09:04:01', 'aktivitas', NULL, NULL),
(16, 3, 'Ardi Andra edit berhasil login', '2023-06-30 17:08:14', '2023-06-30 17:08:14', 'aktivitas', NULL, NULL),
(17, 3, 'Ardi Andra edit berhasil login', '2023-07-01 15:34:17', '2023-07-01 15:34:17', 'aktivitas', NULL, NULL),
(18, 3, 'Ardi Andra edit berhasil login', '2023-07-02 06:36:10', '2023-07-02 06:36:10', 'aktivitas', NULL, NULL),
(19, 3, 'Ardi Andra edit berhasil login', '2023-07-02 15:55:38', '2023-07-02 15:55:38', 'aktivitas', NULL, NULL),
(20, 3, 'Ardi Andra edit berhasil login', '2023-07-02 21:50:58', '2023-07-02 21:50:58', 'aktivitas', NULL, NULL),
(21, 3, 'Ardi Andra edit berhasil login', '2023-07-04 07:48:34', '2023-07-04 07:48:34', 'aktivitas', NULL, NULL),
(22, 3, 'Ardi Andra edit', '2023-07-04 15:06:18', '2023-07-04 15:06:18', 'aktivitas', NULL, NULL),
(23, 3, 'Ardi Andra edit berhasil login', '2023-07-04 15:06:32', '2023-07-04 15:06:32', 'aktivitas', NULL, NULL),
(24, 3, 'Ardi Andra', '2023-07-04 15:30:09', '2023-07-04 15:30:09', 'aktivitas', NULL, NULL),
(25, 3, 'Ardi Andra berhasil login', '2023-07-04 15:32:08', '2023-07-04 15:32:08', 'aktivitas', NULL, NULL),
(26, 3, 'Ardi Andra', '2023-07-04 15:32:22', '2023-07-04 15:32:22', 'aktivitas', NULL, NULL),
(27, 3, 'Ardi Andra berhasil login', '2023-07-04 15:49:01', '2023-07-04 15:49:01', 'aktivitas', NULL, NULL),
(28, 3, 'Ardi Andra berhasil login', '2023-07-04 16:05:34', '2023-07-04 16:05:34', 'aktivitas', NULL, NULL),
(29, 3, 'Ardi Andra', '2023-07-04 16:13:06', '2023-07-04 16:13:06', 'aktivitas', NULL, NULL),
(30, 3, 'Ardi Andra berhasil login', '2023-07-04 16:13:16', '2023-07-04 16:13:16', 'aktivitas', NULL, NULL),
(31, 3, 'Ardi Andra berhasil login', '2023-07-04 16:18:05', '2023-07-04 16:18:05', 'aktivitas', NULL, NULL),
(32, 3, 'Ardi Andra berhasil login', '2023-07-05 07:39:14', '2023-07-05 07:39:14', 'aktivitas', NULL, NULL),
(33, 3, 'Ardi Andra', '2023-07-05 08:12:38', '2023-07-05 08:12:38', 'aktivitas', NULL, NULL),
(34, 3, 'Ardi Andra berhasil login', '2023-07-05 08:24:57', '2023-07-05 08:24:57', 'aktivitas', NULL, NULL),
(35, 3, 'Ardi Andra', '2023-07-05 08:38:05', '2023-07-05 08:38:05', 'aktivitas', NULL, NULL),
(36, 3, 'Ardi Andra berhasil login', '2023-07-05 08:38:36', '2023-07-05 08:38:36', 'aktivitas', NULL, NULL),
(37, 3, 'Ardi Andra', '2023-07-05 08:43:37', '2023-07-05 08:43:37', 'aktivitas', NULL, NULL),
(38, 3, 'Ardi Andra berhasil login', '2023-07-05 08:44:10', '2023-07-05 08:44:10', 'aktivitas', NULL, NULL),
(39, 3, 'Ardi Andra', '2023-07-05 08:56:41', '2023-07-05 08:56:41', 'aktivitas', NULL, NULL),
(40, 3, 'Ardi Andra berhasil login', '2023-07-05 08:56:51', '2023-07-05 08:56:51', 'aktivitas', NULL, NULL),
(41, 3, 'Ardi Andra berhasil login', '2023-07-05 09:24:13', '2023-07-05 09:24:13', 'aktivitas', NULL, NULL),
(42, 3, 'Ardi Andra', '2023-07-05 09:30:05', '2023-07-05 09:30:05', 'aktivitas', NULL, NULL),
(43, 7, 'daniel berhasil login', '2023-07-05 09:30:16', '2023-07-05 09:30:16', 'aktivitas', NULL, NULL),
(44, 7, 'daniel', '2023-07-05 09:30:26', '2023-07-05 09:30:26', 'aktivitas', NULL, NULL),
(45, 3, 'Ardi Andra berhasil login', '2023-07-05 09:32:04', '2023-07-05 09:32:04', 'aktivitas', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_05_09_142726_create_permission_tables', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(7, '2023_06_27_221758_create_logs_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '0f67075a60927bafe15015b5919829152a64295f39790bf39efdb283afed1b20', '[\"tpk\"]', NULL, '2023-05-28 11:44:01', '2023-05-28 11:44:01'),
(4, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '342c8bc4693d396d571242be0bc0ae7cd48b586389682f6f7c2182b0a68b06ac', '[\"tpk\"]', '2023-05-28 16:25:54', '2023-05-28 12:38:08', '2023-05-28 16:25:54'),
(42, 'App\\Models\\User', 1, 'authToken', 'b11367480687cccdba66ef727f39b605d802eeff8f2d46c99342db2113713d1c', '[\"*\"]', NULL, '2023-06-05 07:55:54', '2023-06-05 07:55:54'),
(43, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', 'a7d49f50f277a2be8391618fc2b829cf8e749a567b1bc1ddb2ecd73587e5c1db', '[\"tpk\"]', '2023-06-05 16:18:19', '2023-06-05 16:05:25', '2023-06-05 16:18:19'),
(44, 'App\\Models\\User', 1, 'authToken', '9e7b3daabd27a742ef70c935a7b486cb211aec1cb0deceb9066255c82b8efa9f', '[\"*\"]', NULL, '2023-06-05 17:46:41', '2023-06-05 17:46:41'),
(58, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', 'dc8cc34fb7bf9163e558c9106de183ac9f7ed91d26d599940014d417b3776691', '[\"tpk\"]', '2023-06-06 06:18:22', '2023-06-06 06:05:54', '2023-06-06 06:18:22'),
(60, 'App\\Models\\Tbl_user_tpk', 7, 'auth_token', '298a0c7b65fa8693930feb3c239487dfa0f1b73464ae2b2f0362f58cefaa1d8e', '[\"tpk\"]', '2023-06-06 23:46:09', '2023-06-06 23:41:06', '2023-06-06 23:46:09'),
(61, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '8802cdaee1895c004add062c4730d65e6e51434d092bede3f385220c70c94737', '[\"tpk\"]', NULL, '2023-06-10 10:28:27', '2023-06-10 10:28:27'),
(62, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '5647e15d0f2c2a862df846cc386d02d17a3e674773f9e279ebd00152f2608977', '[\"tpk\"]', NULL, '2023-06-10 10:31:17', '2023-06-10 10:31:17'),
(63, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', 'a6029ce65097e0d038038574900c0c5e8e8baa64b9e0a2bd61fe0a022cb8582b', '[\"tpk\"]', '2023-06-10 12:36:29', '2023-06-10 10:32:17', '2023-06-10 12:36:29'),
(64, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '049dd8f736667410a0b470fd154fca2566c74f1b379826373abf353867dee4cc', '[\"tpk\"]', '2023-06-11 04:00:24', '2023-06-11 02:14:04', '2023-06-11 04:00:24'),
(65, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '3a7d0cecaafab21fd5e0c5dc7b0ae7ec448ae6e2f9e057ab3056d5abf05efabd', '[\"tpk\"]', '2023-06-12 04:12:19', '2023-06-12 04:12:13', '2023-06-12 04:12:19'),
(66, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', 'af3aa2115ceecfb383bd71c9d98c2c0602ec1121247098344a66bad377044ce1', '[\"tpk\"]', NULL, '2023-06-12 04:12:14', '2023-06-12 04:12:14'),
(67, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '3067c0b82d34f1231d88feead1f36d3016d54a0924dce97669f58213a1cc2a48', '[\"tpk\"]', '2023-06-12 04:13:01', '2023-06-12 04:12:57', '2023-06-12 04:13:01'),
(69, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '102bac53432e6a8cb0d71a7e1e4206c90979a65fa9f53c5fc74b01a0493c5a2e', '[\"tpk\"]', '2023-06-12 06:01:21', '2023-06-12 06:01:17', '2023-06-12 06:01:21'),
(70, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '9d7afdae0679cb4e4656708c9fcfc75557b35111e8fd0bfdb2015b728d0a34e8', '[\"tpk\"]', '2023-06-18 23:48:12', '2023-06-18 23:46:39', '2023-06-18 23:48:12'),
(76, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', 'd9b0c4548e9e47e6f1d0a81494788735e28ae6719a1ef54ac80181e8c9f6c921', '[\"tpk\"]', '2023-06-28 03:15:56', '2023-06-28 00:11:27', '2023-06-28 03:15:56'),
(77, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '86783b132e05645aa124dc533ad6d376df6202a996f2c03fa03d9ca64b3ee56b', '[\"tpk\"]', '2023-06-28 06:23:16', '2023-06-28 03:19:47', '2023-06-28 06:23:16'),
(78, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', 'b6d994190b3cbd50772667fc8e00f98f4802ada94ecdc482bba2b6c34751a4f0', '[\"tpk\"]', '2023-06-28 16:00:14', '2023-06-28 10:29:55', '2023-06-28 16:00:14'),
(79, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '451e3e1be8647f009e4aaa1e6440fe4afd32c7c7d69bb47619b1072670662659', '[\"tpk\"]', '2023-06-29 07:28:29', '2023-06-29 06:43:19', '2023-06-29 07:28:29'),
(80, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '2c4d26c9efaa414f47e62b9f7c027bfa382238bff89bbc596b5d5a40d159f881', '[\"tpk\"]', '2023-06-29 11:02:44', '2023-06-29 10:38:17', '2023-06-29 11:02:44'),
(81, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', 'e5930e1b67d5b041a6c84470f6a90d2fc46899d923861063a093ef1ddea0c087', '[\"tpk\"]', '2023-06-29 14:52:39', '2023-06-29 11:03:28', '2023-06-29 14:52:39'),
(82, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '7468d05ee9da6467106a203d1c5bd707e8185f59b8a7b04316c9c263599bb04a', '[\"tpk\"]', '2023-06-29 17:27:39', '2023-06-29 14:53:25', '2023-06-29 17:27:39'),
(83, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '8a17af1f9d3180e29742cd3368674b553f140987b0fedf07172957f16496d2b7', '[\"tpk\"]', '2023-06-30 04:25:10', '2023-06-30 02:04:02', '2023-06-30 04:25:10'),
(84, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', 'ac982d272b2a7baacd7c6219fe6b1dc2df3d1998440dd46037749f87e5434a4e', '[\"tpk\"]', '2023-06-30 15:00:45', '2023-06-30 10:08:14', '2023-06-30 15:00:45'),
(85, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '837dd42027c07a4a02d8af4de293694dbcf137cc2eb0f8b52f1bb846118c9327', '[\"tpk\"]', '2023-07-01 15:27:06', '2023-07-01 08:34:17', '2023-07-01 15:27:06'),
(86, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', 'e933d2704a40c2b8b88d20c82281031c04b7017cd2e7e5f137e917ce342fc400', '[\"tpk\"]', '2023-07-02 04:51:41', '2023-07-01 23:36:10', '2023-07-02 04:51:41'),
(87, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', 'd3b0115282f0b049d4e7eecaebc165c6d1e9926275b46e3dbf8589497c92c9c7', '[\"tpk\"]', '2023-07-02 14:50:25', '2023-07-02 08:55:38', '2023-07-02 14:50:25'),
(88, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', 'cc8fd69083b4f4a36fbc0cb1cbf4749e457243e01535398b6bba9a0e9ba50e72', '[\"tpk\"]', '2023-07-02 14:51:03', '2023-07-02 14:50:58', '2023-07-02 14:51:03'),
(92, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', 'b62b5b1be9ac88bd78be2e063b83d68383147a4647c32ce5984b6eb5ba60c062', '[\"tpk\"]', NULL, '2023-07-04 08:49:01', '2023-07-04 08:49:01'),
(94, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '56e7e9427ea0724782e6e3926aef6040c7cc2941d484f37746141d49ad83ec66', '[\"tpk\"]', '2023-07-04 09:13:42', '2023-07-04 09:13:16', '2023-07-04 09:13:42'),
(95, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '221e0c74d7cfea6c22804e3e995092e2da95c556b3e3b52ed8ccae8da54216f9', '[\"tpk\"]', '2023-07-04 09:18:19', '2023-07-04 09:18:05', '2023-07-04 09:18:19'),
(100, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '7876c007dba06545ac9de531ab6f50d8cf852c0cf7ba8805455e45f2ed75800a', '[\"tpk\"]', '2023-07-05 02:23:39', '2023-07-05 01:56:51', '2023-07-05 02:23:39'),
(103, 'App\\Models\\Tbl_user_tpk', 3, 'auth_token', '140ad0418b6c838a14486605c648112998c203ae25216bbee60b616a9dca4d7e', '[\"tpk\"]', '2023-07-05 02:32:08', '2023-07-05 02:32:04', '2023-07-05 02:32:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_baduta`
--

CREATE TABLE `tbl_baduta` (
  `id` int(12) NOT NULL,
  `kode_baduta` varchar(16) NOT NULL,
  `wilayah_id` varchar(20) NOT NULL,
  `pendamping_id` int(12) NOT NULL,
  `nik` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` varchar(11) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `usia` int(2) NOT NULL,
  `status_usia` varchar(50) NOT NULL,
  `tgl_lahir_anak_sebelum` varchar(11) NOT NULL,
  `status_jarak_kehamilan` varchar(50) DEFAULT NULL,
  `penggunaan_kontrasepsi` tinyint(1) NOT NULL,
  `air_minum_layak` tinyint(1) NOT NULL,
  `tempat_bab_layak` tinyint(1) NOT NULL,
  `nik_baduta` int(18) NOT NULL,
  `nama_bayi` varchar(225) NOT NULL,
  `tgl_lahir_bayi` varchar(11) NOT NULL,
  `usia_bayi` int(2) NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `urutan_anak_ke` int(2) NOT NULL,
  `status_urutan_anak` int(2) NOT NULL,
  `umur_kehamilan` varchar(50) DEFAULT NULL,
  `pb_lahir` varchar(50) NOT NULL,
  `bb_kehamilan` varchar(50) NOT NULL,
  `asi_ekslusif` tinyint(1) DEFAULT NULL,
  `tgl_pengukuran_saat_ini` varchar(50) NOT NULL,
  `bb_saat_ini` varchar(50) DEFAULT NULL,
  `status_bb_saat_ini` varchar(50) NOT NULL,
  `pb_saat_ini` varchar(50) NOT NULL,
  `status_pb` varchar(50) NOT NULL,
  `status_bb_pb` varchar(50) NOT NULL,
  `pengisian_kka` tinyint(1) DEFAULT NULL,
  `kehadiran_posyandu` tinyint(1) NOT NULL,
  `penyuluhan_kie` tinyint(1) NOT NULL,
  `pemberian_fasilitas_rujukan` varchar(50) NOT NULL,
  `bansos` varchar(50) NOT NULL,
  `kunjungan` int(1) NOT NULL,
  `tgl_kunjungan` varchar(11) NOT NULL,
  `tgl_kunjungan_berikutnya` varchar(20) NOT NULL,
  `catatan_baduta` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_baduta`
--

INSERT INTO `tbl_baduta` (`id`, `kode_baduta`, `wilayah_id`, `pendamping_id`, `nik`, `nama`, `alamat`, `tgl_lahir`, `no_tlp`, `usia`, `status_usia`, `tgl_lahir_anak_sebelum`, `status_jarak_kehamilan`, `penggunaan_kontrasepsi`, `air_minum_layak`, `tempat_bab_layak`, `nik_baduta`, `nama_bayi`, `tgl_lahir_bayi`, `usia_bayi`, `jenis_kelamin`, `urutan_anak_ke`, `status_urutan_anak`, `umur_kehamilan`, `pb_lahir`, `bb_kehamilan`, `asi_ekslusif`, `tgl_pengukuran_saat_ini`, `bb_saat_ini`, `status_bb_saat_ini`, `pb_saat_ini`, `status_pb`, `status_bb_pb`, `pengisian_kka`, `kehadiran_posyandu`, `penyuluhan_kie`, `pemberian_fasilitas_rujukan`, `bansos`, `kunjungan`, `tgl_kunjungan`, `tgl_kunjungan_berikutnya`, `catatan_baduta`, `created_at`, `updated_at`) VALUES
(1, 'qwd223', '18.05.02', 3, '132213131', 'donita', '', '2000-06-02', '', 0, 'jj', '2022-06-02', 'qwe', 1, 1, 1, 0, 'bujunkey', '2023-06-02', 1, 1, 1, 1, '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', 1, 1, 2, '1', '1', 1, '2023-06-04', '', '', NULL, NULL),
(2, 'L5UG6FTJDE7RDOIJ', '18.05.02', 3, '1871010701653563467', 'Umi RH', 'Pesawaran edit', '2023-07-05', '085741492045', 25, '1', '2023-06-04', NULL, 1, 1, 1, 43536456, 'Fiqi', '2023-07-15', 3, 2, 3, 1, NULL, '10', '1', NULL, '2023-07-04 09:56:34', NULL, '2', '10', '1', '1', NULL, 1, 1, 'Ya, Sedang Dalam Proses', 'Ya, Sedang Dalam Proses', 1, '2023-07-04', '2023-07-29', 'Baik', '2023-07-04 02:56:34', '2023-07-04 04:43:26'),
(4, 'L5UG6FTJDE7RDOIJ', '18.05.02', 3, '1871010701653563467', 'Umi RH', 'Pesawaran edit', '2023-07-05', '085741492045', 0, '2', '2023-06-04', NULL, 1, 1, 1, 43536456, 'Fiqi', '2023-07-15', 10, 2, 3, 0, NULL, '10', '1', NULL, '2023-07-04 14:40:38', NULL, '2', '10', '1', '1', NULL, 1, 1, 'Ya, Sedang Dalam Proses', 'Ya, Sedang Dalam Proses', 2, '2023-07-04', '2023-07-31', 'Baik', '2023-07-04 07:40:38', '2023-07-04 07:44:33'),
(5, 'L5UG6FTJDE7RDOIJ', '18.05.02', 3, '1871010701653563467', 'Umi RH', 'Pesawaran edit', '2023-07-05', '085741492045', 0, '2', '2023-06-04', NULL, 1, 1, 1, 43536456, 'Fiqi', '2023-07-15', 10, 2, 3, 0, NULL, '10', '1', NULL, '2023-07-04 14:45:00', NULL, '2', '10', '1', '1', NULL, 1, 1, 'Ya, Sedang Dalam Proses', 'Ya, Sedang Dalam Proses', 2, '2023-07-04', '2023-08-17', 'Baik', '2023-07-04 07:45:00', '2023-07-04 07:45:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bumil`
--

CREATE TABLE `tbl_bumil` (
  `id` int(12) NOT NULL,
  `kode_bumil` varchar(20) NOT NULL,
  `wilayah_id` varchar(20) NOT NULL,
  `pendamping_id` int(12) NOT NULL,
  `nik` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `jumlah_anak` int(2) NOT NULL,
  `status_jumlah_anak` tinyint(1) NOT NULL,
  `usia_hamil` int(2) NOT NULL,
  `tfu` varchar(5) NOT NULL,
  `status_tfu` tinyint(1) NOT NULL,
  `bb` int(5) NOT NULL,
  `tb` int(5) NOT NULL,
  `imt` int(5) NOT NULL,
  `status_imt` tinyint(1) NOT NULL,
  `riwayat_penyakit` varchar(225) NOT NULL,
  `status_riwayat_penyakit` tinyint(1) NOT NULL,
  `kadar_hb` varchar(10) NOT NULL,
  `status_hb` tinyint(1) NOT NULL,
  `lila` varchar(10) NOT NULL,
  `status_lila` tinyint(1) NOT NULL,
  `tbj` int(2) NOT NULL,
  `status_tbj` varchar(50) NOT NULL,
  `terpapar_rokok` tinyint(1) NOT NULL,
  `penyuluhan_kie` tinyint(2) NOT NULL,
  `suplement_darah` tinyint(1) NOT NULL,
  `rujukan_pelayanan` tinyint(1) NOT NULL,
  `bansos` tinyint(1) NOT NULL,
  `tgl_kunjungan` varchar(255) NOT NULL,
  `tgl_kunjungan_berikutnya` varchar(11) NOT NULL,
  `kunjungan` tinyint(2) NOT NULL,
  `catatan_kunjungan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_bumil`
--

INSERT INTO `tbl_bumil` (`id`, `kode_bumil`, `wilayah_id`, `pendamping_id`, `nik`, `nama`, `tgl_lahir`, `telp`, `alamat`, `jumlah_anak`, `status_jumlah_anak`, `usia_hamil`, `tfu`, `status_tfu`, `bb`, `tb`, `imt`, `status_imt`, `riwayat_penyakit`, `status_riwayat_penyakit`, `kadar_hb`, `status_hb`, `lila`, `status_lila`, `tbj`, `status_tbj`, `terpapar_rokok`, `penyuluhan_kie`, `suplement_darah`, `rujukan_pelayanan`, `bansos`, `tgl_kunjungan`, `tgl_kunjungan_berikutnya`, `kunjungan`, `catatan_kunjungan`, `created_at`, `updated_at`) VALUES
(1, '12wesw', '18.05.02.1008', 3, '1231231231', 'andini hapsari edit', '2000-01-01', '12312313', 'menggala', 1, 1, 6, '1', 1, 23, 165, 1, 1, 'asdadsasda', 1, '1', 1, '1', 1, 1, '1', 2, 0, 1, 1, 1, '2023-06-23', '2023-06-02', 1, 'wqeqwe', NULL, '2023-06-28 06:21:03'),
(2, '12wesw', '18.05.02', 3, '1231231231', 'andini hapsari', '2000-01-01', '12312313', 'menggala', 1, 1, 6, '1', 1, 23, 165, 1, 1, 'asdadsasda', 1, '1', 1, '1', 1, 1, '1', 2, 0, 1, 1, 1, '', '2023-05-30', 2, 'wqeqwe', NULL, NULL),
(3, 'CCK1SHPLRBJ3L9ZH', '18.05.02', 3, '18710107016500000', 'Retna', '2023-07-02', '085741492046', 'Menggala', 2, 1, 4, '5', 2, 7, 6, 8, 2, 'Hipertensi', 2, '6', 2, '8', 2, 9, '2', 2, 1, 1, 1, 1, '2023-06-29', '2023-06-30', 1, 'Data baru x', '2023-06-28 03:40:29', '2023-07-02 00:32:44'),
(7, 'CCK1SHPLRBJ3L9ZH', '18.05.02', 3, '18710107016500000', 'Retna', '2023-07-02', '085741492046', 'Menggala', 2, 1, 4, '5', 2, 7, 6, 8, 2, 'Hipertensi', 2, '6', 2, '8', 2, 9, '2', 2, 1, 1, 1, 1, '2023-06-29', '2023-06-30', 2, 'Data baru x', '2023-07-02 00:36:16', '2023-07-02 00:36:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_catin`
--

CREATE TABLE `tbl_catin` (
  `id` int(12) NOT NULL,
  `kode_catin` varchar(20) NOT NULL,
  `wilayah_id` varchar(10) NOT NULL,
  `pendamping_id` int(12) NOT NULL,
  `nama_catin_pria` varchar(225) NOT NULL,
  `nik_catin_pria` varchar(100) NOT NULL,
  `tgl_lahir_catin_pria` varchar(20) DEFAULT NULL,
  `usia_catin_pria` varchar(5) DEFAULT NULL,
  `status_usia_catin_pria` tinyint(1) DEFAULT NULL,
  `alamat_catin_pria` text NOT NULL,
  `nama_catin_wanita` varchar(225) NOT NULL,
  `telp_catin_wanita` varchar(13) NOT NULL,
  `telp_catin_pria` varchar(13) NOT NULL,
  `nik_catin_wanita` varchar(100) NOT NULL,
  `tgl_lahir_catin_wanita` varchar(20) NOT NULL,
  `usia_catin_wanita` varchar(5) DEFAULT NULL,
  `status_usia_catin_wanita` int(1) DEFAULT NULL,
  `alamat_catin_wanita` text NOT NULL,
  `tempat_lahir_catin_wanita` varchar(255) NOT NULL,
  `tgl_pernikahan` varchar(20) NOT NULL,
  `tb_catin_wanita` int(5) NOT NULL,
  `bb_catin_wanita` int(5) NOT NULL,
  `imt` int(2) NOT NULL,
  `status_imt` tinyint(1) DEFAULT NULL,
  `kadar_hb` varchar(20) NOT NULL,
  `status_hb` varchar(20) DEFAULT NULL,
  `terpapar_rokok` tinyint(1) NOT NULL,
  `lila` varchar(10) NOT NULL,
  `merokok_pria` tinyint(1) NOT NULL,
  `kie_pria` tinyint(4) NOT NULL,
  `kie_wanita` tinyint(2) NOT NULL,
  `supelmen_wanita` tinyint(2) NOT NULL,
  `rujukan_wanita` tinyint(2) NOT NULL,
  `status_resiko` tinyint(1) DEFAULT NULL,
  `status_ideal` tinyint(1) DEFAULT NULL,
  `tgl_pendampingan` varchar(20) NOT NULL,
  `kunjungan` int(11) NOT NULL,
  `catatan_pendampingan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_catin`
--

INSERT INTO `tbl_catin` (`id`, `kode_catin`, `wilayah_id`, `pendamping_id`, `nama_catin_pria`, `nik_catin_pria`, `tgl_lahir_catin_pria`, `usia_catin_pria`, `status_usia_catin_pria`, `alamat_catin_pria`, `nama_catin_wanita`, `telp_catin_wanita`, `telp_catin_pria`, `nik_catin_wanita`, `tgl_lahir_catin_wanita`, `usia_catin_wanita`, `status_usia_catin_wanita`, `alamat_catin_wanita`, `tempat_lahir_catin_wanita`, `tgl_pernikahan`, `tb_catin_wanita`, `bb_catin_wanita`, `imt`, `status_imt`, `kadar_hb`, `status_hb`, `terpapar_rokok`, `lila`, `merokok_pria`, `kie_pria`, `kie_wanita`, `supelmen_wanita`, `rujukan_wanita`, `status_resiko`, `status_ideal`, `tgl_pendampingan`, `kunjungan`, `catatan_pendampingan`, `created_at`, `updated_at`) VALUES
(6, 'I6IZVKTPQOQWVWY7', '18.05.02', 3, 'Umaedi KH', '354354310', '2023-06-03', '25', 1, 'Way Kanan edit x', 'Umi RH', '085741492035', '085741492045', '24534664510', '2023-06-28', '24', 2, 'Pesawaran edit', 'Pesawaran', '3 Juni 2023', 5, 400, 2, NULL, '2', NULL, 2, '2', 2, 1, 1, 1, 1, 2, 1, '2023-06-29', 1, 'Cukup baik', '2023-06-30 12:10:01', '2023-06-30 11:53:08'),
(7, 'I6IZVKTPQOQWVWY7', '18.05.02', 3, 'Umaedi KH', '354354310', '2023-06-03', '25', 1, 'Way Kanan edit x', 'Umi RH', '085741492035', '085741492045', '24534664510', '2023-06-28', '24', 2, 'Pesawaran edit', 'Pesawaran', '3 Juni 2023', 5, 4, 2, NULL, '2', NULL, 2, '2', 2, 1, 1, 1, 1, 2, 1, '11 Juni 2023', 4, 'Cukup baik', '2023-06-30 11:51:46', '2023-06-30 11:51:46'),
(8, '2LPV1JEQZDNT2EUH', '18.05.02', 3, 'Dev kh', '325463654654645', '2023-06-25', '0', 2, 'Way Kanan', 'Retna', '0967437124', '086751624956', '465537687586', '2023-06-28', '0', 2, 'Menggala', 'Menggala', '2023-06-30', 59, 56, 5, NULL, '3', NULL, 2, '8', 2, 2, 2, 2, 2, 2, 2, '2023-06-29', 1, 'Sangat baik', '2023-06-30 04:25:06', '2023-06-30 04:25:06'),
(12, '2LPV1JEQZDNT2EUH', '18.05.02', 3, 'Dev kh', '325463654654645', '2023-06-25', '0', 2, 'Way Kanan', 'Retna', '0967437124', '086751624956', '465537687586', '2023-06-28', '0', 2, 'Menggala', 'Menggala', '2023-06-30', 59, 56, 5, NULL, '3', NULL, 2, '8', 2, 2, 2, 2, 2, 2, 2, '30 Juni 2023', 2, 'Sangat baik', '2023-06-30 04:23:52', '2023-06-30 04:23:52'),
(13, 'I6IZVKTPQOQWVWY7', '18.05.02', 3, 'Umaedi KH', '354354310', '2023-06-03', '0', 2, 'Way Kanan edit x', 'Umi RH', '085741492035', '085741492045', '24534664510', '2023-06-28', '0', 2, 'Pesawaran edit', 'Pesawaran', '3 Juni 2023', 5, 400, 2, NULL, '2', NULL, 2, '2', 2, 1, 1, 1, 1, 2, 2, '2023-06-01', 4, 'Cukup baik', '2023-06-30 11:54:07', '2023-06-30 11:54:07'),
(15, 'VYX04CYDRTKAPWQD', '18.05.02', 3, 'Sandika', '11325326434635', '1998-06-30', '25', 1, 'Tanggamus', 'Lela', '08574256345', '08574191045', '4654575687686787', '1999-02-22', '24', 2, 'Tanggamus', 'Tanggamus', '2023-06-30', 56, 45, 4, NULL, '5', NULL, 2, '5', 2, 1, 1, 1, 1, 2, 1, '2023-06-29', 1, 'BAIK', '2023-06-30 14:15:23', '2023-06-30 14:15:23'),
(16, 'VYX04CYDRTKAPWQD', '18.05.02', 3, 'Sandika', '11325326434635', '1998-06-30', '25', 1, 'Tanggamus', 'Lela', '08574256345', '08574191045', '4654575687686787', '1999-02-22', '24', 2, 'Tanggamus', 'Tanggamus', '2023-06-30', 56, 45, 4, NULL, '5', NULL, 2, '5', 2, 1, 1, 1, 1, 2, 1, '29 Juni 2023', 2, 'BAIK SEKALI', '2023-07-05 00:44:00', '2023-07-05 00:44:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ket_variabel`
--

CREATE TABLE `tbl_ket_variabel` (
  `id` int(12) NOT NULL,
  `tbl_variabel` varchar(100) NOT NULL,
  `nama_variabel` varchar(100) NOT NULL,
  `ket_variabel` varchar(100) NOT NULL,
  `kode` int(11) DEFAULT NULL,
  `ket_kode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_ket_variabel`
--

INSERT INTO `tbl_ket_variabel` (`id`, `tbl_variabel`, `nama_variabel`, `ket_variabel`, `kode`, `ket_kode`) VALUES
(1, 'tbl_bumil', 'terpapar_rokok', 'Terpapar Rokok', 1, 'Tidak'),
(2, 'tbl_bumil', 'terpapar_rokok', 'Terpapar Rokok', 2, 'Ya'),
(3, 'tbl_bumil', 'suplement_darah', 'Suplemen darah', 1, 'Tidak'),
(4, 'tbl_bumil', 'suplement_darah', 'Suplemen darah', 2, 'Ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasca_persalinan`
--

CREATE TABLE `tbl_pasca_persalinan` (
  `id` int(12) NOT NULL,
  `kode_pasca_persalinan` varchar(255) NOT NULL,
  `wilayah_id` varchar(20) NOT NULL,
  `pendamping_id` int(12) NOT NULL,
  `nik` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tgl_lahir` varchar(11) NOT NULL,
  `telp` varchar(13) DEFAULT NULL,
  `alamat` text NOT NULL,
  `tgl_melahirkan` varchar(11) NOT NULL,
  `tempat_persalinan` varchar(255) NOT NULL,
  `cara_persalinan` varchar(255) DEFAULT NULL,
  `penolong_persalinan` varchar(255) NOT NULL,
  `komplikasi_nifas` tinyint(1) NOT NULL,
  `jenis_komplikasi` varchar(25) NOT NULL,
  `keadaan_bayi` varchar(255) DEFAULT NULL,
  `kb_pasca_persalinan` tinyint(1) NOT NULL,
  `jenis_kb` varchar(255) NOT NULL,
  `alasan_kb` varchar(20) NOT NULL,
  `alasan_tidak_kb` varchar(20) DEFAULT NULL,
  `status_ibu` tinyint(1) NOT NULL,
  `rujukan_pelayanan` tinyint(1) NOT NULL,
  `bansos` tinyint(1) NOT NULL,
  `jenis_bansos` varchar(255) DEFAULT NULL,
  `penyuluhan_kie` tinyint(4) DEFAULT NULL,
  `tgl_kunjungan_berikut` varchar(11) NOT NULL,
  `tgl_kunjungan` varchar(11) NOT NULL,
  `kunjungan` int(2) NOT NULL,
  `catatan_kunjungan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pasca_persalinan`
--

INSERT INTO `tbl_pasca_persalinan` (`id`, `kode_pasca_persalinan`, `wilayah_id`, `pendamping_id`, `nik`, `nama`, `tgl_lahir`, `telp`, `alamat`, `tgl_melahirkan`, `tempat_persalinan`, `cara_persalinan`, `penolong_persalinan`, `komplikasi_nifas`, `jenis_komplikasi`, `keadaan_bayi`, `kb_pasca_persalinan`, `jenis_kb`, `alasan_kb`, `alasan_tidak_kb`, `status_ibu`, `rujukan_pelayanan`, `bansos`, `jenis_bansos`, `penyuluhan_kie`, `tgl_kunjungan_berikut`, `tgl_kunjungan`, `kunjungan`, `catatan_kunjungan`, `created_at`, `updated_at`) VALUES
(1, 'qweqww2', '18.05.06', 3, '114343242', 'Anggraini', '2000-01-01', '08273622', 'Kampung Tua', '2023-06-01', '1', NULL, '1', 1, 'diabetes', NULL, 2, '2', 'suami dirumah', '', 1, 2, 3, NULL, 1, '2023-06-14', '2023-05-31', 1, '', NULL, NULL),
(2, 'IDTOJP7DO4YE0RDP', '18.05.02', 3, '1871010701650003', 'Umi Rohiyatuh Hidayah', '2023-07-02', '85741492046', 'Pesawaran', '2023-06-30', 'Puskesmas', 'Normal', 'Dokter Spesialis Kandungan', 1, 'Pendarahan', 'Sehat', 1, 'MAL(Metode Amenore Laktasi)', 'Ingin Anak di Tunda', NULL, 1, 1, 1, NULL, 1, '2023-06-30', '2023-06-29', 1, 'gbvbvbvbv', '2023-06-28 14:25:54', '2023-07-02 04:49:25'),
(3, 'IDTOJP7DO4YE0RDP', '18.05.02', 3, '1871010701650003', 'Umi Rohiyatuh Hidayah', '2023-07-02', '85741492046', 'Pesawaran', '2023-06-30', 'Puskesmas', 'Normal', 'Dokter Spesialis Kandungan', 1, 'Pendarahan', 'Sehat', 1, 'MAL(Metode Amenore Laktasi)', 'Ingin Anak di Tunda', NULL, 1, 1, 2, NULL, 1, '2023-06-30', '2023-06-29', 2, 'gbvbvbvbv', '2023-07-02 09:03:50', '2023-07-02 10:47:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `idset` int(8) NOT NULL,
  `idadm` int(8) NOT NULL,
  `googlecode` text NOT NULL,
  `judul` varchar(75) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `telp2` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `metatag` text NOT NULL,
  `footer` text NOT NULL,
  `fb` text NOT NULL,
  `twitter` text NOT NULL,
  `google` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `linked` text NOT NULL,
  `metadesc` text NOT NULL,
  `metakey` text NOT NULL,
  `maps` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_setting`
--

INSERT INTO `tbl_setting` (`idset`, `idadm`, `googlecode`, `judul`, `deskripsi`, `logo`, `alamat`, `telp`, `telp2`, `email`, `metatag`, `footer`, `fb`, `twitter`, `google`, `youtube`, `linked`, `metadesc`, `metakey`, `maps`) VALUES
(1, 2, '', 'Sistem Informasi PP KB', 'Sebuah inovasi untuk menekan angka stunting yang ditujukan kepada calon pengantin, pasangan usia subur, ibu hamil, ibu pasca persalinan, dan balita.', 'logo.png', 'Jalan Cemara Komplek Perkantoran Pemda Tulang Bawang, Menggala.', '08120000000', '0721 000 222', 'ppkb@gmail.com', '', 'Copyright © 2023. All Rights Reserved.', '', '', '', '', '', '', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127101.55546063841!2d105.20069698136186!3d-5.428575518058512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40da46f3aa6fbf%3A0x3039d80b220cc40!2sBandar+Lampung%2C+Kota+Bandar+Lampung%2C+Lampung!5e0!3m2!1sid!2sid!4v1485576407886\" width=\"100%\" height=\"350\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_tpk`
--

CREATE TABLE `tbl_user_tpk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wilayah_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_user_tpk`
--

INSERT INTO `tbl_user_tpk` (`id`, `wilayah_id`, `nip`, `nama`, `jabatan`, `alamat`, `avatar`, `no_telp`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, '18.05.02', '2323232', 'Ardi Andra', NULL, 'Bandar Lampung', NULL, '085769306099', 'testing@gmail.com', NULL, '$2y$10$uMTECjdLypD1Wfp29aSgf.MYxq6OK6m.jSNzSLol72kYiptVYANG.', 'Ta0oVn4KDqxv0Dm123ceVljZdovkvxWvgHnNtUUggC5e4j3ofW8zIbH8Ml0z', '2022-08-14 12:50:22', '2023-07-04 08:29:30'),
(7, '18.05.02.1008', '12322', 'daniel', NULL, 'asas', NULL, '085769306099', 'ppkb@gmail.com', NULL, '$2y$10$uMTECjdLypD1Wfp29aSgf.MYxq6OK6m.jSNzSLol72kYiptVYANG.', NULL, '2023-06-04 14:49:58', '2023-06-04 14:49:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_wilayah`
--

CREATE TABLE `tbl_wilayah` (
  `id` int(12) NOT NULL,
  `kode` varchar(39) DEFAULT NULL,
  `nama` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_wilayah`
--

INSERT INTO `tbl_wilayah` (`id`, `kode`, `nama`) VALUES
(31, '18.05.02', 'Menggala'),
(32, '18.05.02.1008', 'Menggala Selatan'),
(33, '18.05.02.1009', 'Ujung Gunung Ilir'),
(34, '18.05.02.1010', 'Menggala Tengah'),
(35, '18.05.02.1011', 'Menggala Kota'),
(36, '18.05.02.2001', 'Bujung Tenuk'),
(37, '18.05.02.2002', 'Ujung Gunung Ilir'),
(38, '18.05.02.2007', 'Astra Ksetra'),
(39, '18.05.02.2013', 'Kagungan Rahayu'),
(40, '18.05.02.2014', 'Tiuh Tohou'),
(41, '18.05.06', 'Gedung Aji'),
(42, '18.05.06.2001', 'Aji Jaya KNPI'),
(43, '18.05.06.2002', 'Kecubung Jaya'),
(44, '18.05.06.2008', 'Kecubung Mulya'),
(45, '18.05.06.2015', 'Gedung Aji'),
(46, '18.05.06.2016', 'Penawar'),
(47, '18.05.06.2022', 'Penawar Baru'),
(48, '18.05.06.2023', 'Aji Murni Jaya'),
(49, '18.05.06.2024', 'Aji Mesir'),
(50, '18.05.06.2025', 'Aji Permai Talang Buah'),
(51, '18.05.06.2026', 'Bandar Aji Jaya'),
(52, '18.05.08', 'Banjar Agung'),
(53, '18.05.08.2001', 'Banjar Agung'),
(54, '18.05.08.2007', 'Tri Dharma Wira Jaya'),
(55, '18.05.08.2009', 'Moris Jaya'),
(56, '18.05.08.2010', 'Tunggal Warga'),
(57, '18.05.08.2011', 'Dwi Warga Tunggal Jaya'),
(58, '18.05.08.2019', 'Tri Mulya Jaya'),
(59, '18.05.08.2020', 'Tri Mukti Jaya'),
(60, '18.05.08.2021', 'Tri Tunggal Jaya'),
(61, '18.05.08.2022', 'Warga Makmur Jaya'),
(62, '18.05.08.2023', 'Warga Indah Jaya'),
(63, '18.05.08.2024', 'Banjar Dewa'),
(64, '18.05.11', 'Gedung Meneng'),
(65, '18.05.11.2001', 'Gunung Tapa'),
(66, '18.05.11.2002', 'Gedung Meneng'),
(67, '18.05.11.2006', 'Bakung Udik'),
(68, '18.05.11.2007', 'Bakung Ilir'),
(69, '18.05.11.2008', 'Gedung Bandar Rahayu'),
(70, '18.05.11.2014', 'Gunung Tapa Ilir'),
(71, '18.05.11.2015', 'Gunung Tapa Tengah'),
(72, '18.05.11.2016', 'Gunung Tapa Udik'),
(73, '18.05.11.2017', 'Gedung Bandar Rejo'),
(74, '18.05.11.2018', 'Bakung Rahayu'),
(75, '18.05.11.2019', 'Gedung Meneng Baru'),
(76, '18.05.12', 'Rawa Jitu Selatan'),
(77, '18.05.12.2003', 'Yudha Karya Jitu'),
(78, '18.05.12.2004', 'Gedung Karya Jitu'),
(79, '18.05.12.2005', 'Hargo Rejo'),
(80, '18.05.12.2006', 'Wono Agung'),
(81, '18.05.12.2008', 'Karya Jitu Mukti'),
(82, '18.05.12.2009', 'Bumi Ratu'),
(83, '18.05.12.2010', 'Medasari'),
(84, '18.05.12.2013', 'Hargo Mulyo'),
(85, '18.05.12.2014', 'Karya Cipta Abadi'),
(86, '18.05.13', 'Penawar Tama'),
(87, '18.05.13.2001', 'Tri Rejo Mulyo'),
(88, '18.05.13.2002', 'Tri Jaya'),
(89, '18.05.13.2005', 'Sidoharjo'),
(90, '18.05.13.2006', 'Sidomulyo'),
(91, '18.05.13.2010', 'Bogatama'),
(92, '18.05.13.2011', 'Wiratama'),
(93, '18.05.13.2013', 'Tri Tunggal Jaya'),
(94, '18.05.13.2019', 'Pulo Gadung'),
(95, '18.05.13.2020', 'Sidodadi'),
(96, '18.05.13.2021', 'Dwimulyo'),
(97, '18.05.13.2022', 'Rejo Sari'),
(98, '18.05.13.2023', 'Wira Agung Sari'),
(99, '18.05.13.2024', 'Sidomakmur'),
(100, '18.05.13.2025', 'Trikarya'),
(101, '18.05.18', 'Rawa Jitu Timur'),
(102, '18.05.18.2001', 'Bumi Dipasena Utama'),
(103, '18.05.18.2002', 'Bumi Dipasena Agung'),
(104, '18.05.18.2003', 'Bumi Dipasena Jaya'),
(105, '18.05.18.2004', 'Bumi Dipasena Abadi'),
(106, '18.05.18.2005', 'Bumi Dipasena Makmur'),
(107, '18.05.18.2006', 'Bumi Sentosa'),
(108, '18.05.18.2007', 'Bumi Dipasena Mulya'),
(109, '18.05.18.2008', 'Bumi Dipasena Sjahtera'),
(110, '18.05.20', 'Banjar Margo'),
(111, '18.05.20.2001', 'Bujuk Agung'),
(112, '18.05.20.2002', 'Ringin Sari'),
(113, '18.05.20.2003', 'Sukamaju'),
(114, '18.05.20.2004', 'Catur Karya Buana'),
(115, '18.05.20.2005', 'Purwa Jaya'),
(116, '18.05.20.2006', 'Penawar Jaya'),
(117, '18.05.20.2007', 'Agung Dalem'),
(118, '18.05.20.2008', 'Sumber Makmur'),
(119, '18.05.20.2009', 'Tri Tunggal Jaya'),
(120, '18.05.20.2010', 'Agung Jaya'),
(121, '18.05.20.2011', 'Penawar Rejo'),
(122, '18.05.20.2012', 'Mekar Jaya'),
(123, '18.05.22', 'Rawa Pitu'),
(124, '18.05.22.2001', 'Sumber Agung'),
(125, '18.05.22.2002', 'Batang Hari'),
(126, '18.05.22.2003', 'Panggung Mulyo'),
(127, '18.05.22.2004', 'Duto Yoso Mulyo'),
(128, '18.05.22.2005', 'Andalas Cermin'),
(129, '18.05.22.2006', 'Rawa Ragil'),
(130, '18.05.22.2007', 'Gedung Jaya'),
(131, '18.05.22.2008', 'Bumi Sari'),
(132, '18.05.22.2009', 'Mulyo Dadi'),
(133, '18.05.23', 'Penawar Aji'),
(134, '18.05.23.2001', 'Gedung Harapan'),
(135, '18.05.23.2002', 'Gedung Asri'),
(136, '18.05.23.2003', 'Gedung Rejo Sakti'),
(137, '18.05.23.2004', 'Pasar Batang'),
(138, '18.05.23.2005', 'Suka Makmur'),
(139, '18.05.23.2006', 'Karya Makmur'),
(140, '18.05.23.2007', 'Wono Rejo'),
(141, '18.05.23.2008', 'Panca Tunggal Jaya'),
(142, '18.05.23.2009', 'Sumber Sari'),
(143, '18.05.25', 'Dente Teladas'),
(144, '18.05.25.2001', 'Teladas'),
(145, '18.05.25.2002', 'Kekatung'),
(146, '18.05.25.2003', 'Kuala Teladas'),
(147, '18.05.25.2004', 'Mahabang'),
(148, '18.05.25.2005', 'Sungai Nibung'),
(149, '18.05.25.2006', 'Pasiran Jaya'),
(150, '18.05.25.2007', 'Bratasena Adiwarna'),
(151, '18.05.25.2008', 'Bratasena Mandiri'),
(152, '18.05.25.2009', 'Way Dente'),
(153, '18.05.25.2010', 'Dente Makmur'),
(154, '18.05.25.2011', 'Pendowo Asri'),
(155, '18.05.25.2012', 'Sungai Burung'),
(156, '18.05.26', 'Meraksa Aji'),
(157, '18.05.26.2001', 'Bangun Rejo'),
(158, '18.05.26.2002', 'Paduan Rajawali'),
(159, '18.05.26.2003', 'Karya Bhakti'),
(160, '18.05.26.2004', 'Sukarame'),
(161, '18.05.26.2005', 'Bina Bumi'),
(162, '18.05.26.2006', 'Mulyo Aji'),
(163, '18.05.26.2007', 'Kecubung Raya'),
(164, '18.05.26.2008', 'Marga Jaya'),
(165, '18.05.27', 'Gedung Aji Baru'),
(166, '18.05.27.2001', 'Sidomukti'),
(167, '18.05.27.2002', 'Mesir Dwi Jaya'),
(168, '18.05.27.2003', 'Makartitama'),
(169, '18.05.27.2004', 'Suka Bhakti'),
(170, '18.05.27.2005', 'Batu Ampar'),
(171, '18.05.27.2006', 'Setia Tama'),
(172, '18.05.27.2007', 'Sumber Jaya'),
(173, '18.05.27.2008', 'Mekar Asri'),
(174, '18.05.27.2009', 'Sidomekar'),
(175, '18.05.29', 'Banjar Baru'),
(176, '18.05.29.2001', 'Panca Mulia'),
(177, '18.05.29.2002', 'Panca Karsa Purna Jaya'),
(178, '18.05.29.2003', 'Kahuripan Jaya'),
(179, '18.05.29.2004', 'Bawang Sakti Jaya'),
(180, '18.05.29.2005', 'Mekar Jaya'),
(181, '18.05.29.2006', 'Balai Murni Jaya'),
(182, '18.05.29.2007', 'Mekar Indah Jaya'),
(183, '18.05.29.2008', 'Jaya Makmur'),
(184, '18.05.29.2009', 'Bawang Tirto Mulyo'),
(185, '18.05.29.2010', 'Karya Murni Jaya'),
(186, '18.05.30', 'Menggala Timur'),
(187, '18.05.30.2001', 'Lebuh Dalam'),
(188, '18.05.30.2002', 'Menggala'),
(189, '18.05.30.2003', 'Lingai'),
(190, '18.05.30.2004', 'Kibang Pacing'),
(191, '18.05.30.2005', 'Sungai Luar'),
(192, '18.05.30.2006', 'Kahuripan Dalam'),
(193, '18.05.30.2007', 'Cempaka Dalem'),
(194, '18.05.30.2008', 'Bedarou Indah'),
(195, '18.05.30.2009', 'Tri Makmur Jaya'),
(196, '18.05.30.2010', 'Cempaka Jaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `nama`, `alamat`, `telp`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ardi mahendra', 'bandar lampung', '85769306099', 'ardiandra45@gmail.com', NULL, '$2y$10$uMTECjdLypD1Wfp29aSgf.MYxq6OK6m.jSNzSLol72kYiptVYANG.', NULL, '2023-06-01 09:43:57', '2023-06-04 11:12:15');

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
-- Indeks untuk tabel `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `tbl_baduta`
--
ALTER TABLE `tbl_baduta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_bumil`
--
ALTER TABLE `tbl_bumil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_catin`
--
ALTER TABLE `tbl_catin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_ket_variabel`
--
ALTER TABLE `tbl_ket_variabel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pasca_persalinan`
--
ALTER TABLE `tbl_pasca_persalinan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`idset`);

--
-- Indeks untuk tabel `tbl_user_tpk`
--
ALTER TABLE `tbl_user_tpk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_user_mitra_email_unique` (`email`);

--
-- Indeks untuk tabel `tbl_wilayah`
--
ALTER TABLE `tbl_wilayah`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_baduta`
--
ALTER TABLE `tbl_baduta`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_bumil`
--
ALTER TABLE `tbl_bumil`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_catin`
--
ALTER TABLE `tbl_catin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_ket_variabel`
--
ALTER TABLE `tbl_ket_variabel`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_pasca_persalinan`
--
ALTER TABLE `tbl_pasca_persalinan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `idset` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_tpk`
--
ALTER TABLE `tbl_user_tpk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_wilayah`
--
ALTER TABLE `tbl_wilayah`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
