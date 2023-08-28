-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 27-08-2023 a las 00:19:37
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `diningrooms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comedores`
--

CREATE TABLE `comedores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `fecha` date NOT NULL DEFAULT '2023-08-26',
  `platos_diarios` int(10) UNSIGNED NOT NULL,
  `platos_acumulados` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comedores`
--

INSERT INTO `comedores` (`id`, `name`, `fecha`, `platos_diarios`, `platos_acumulados`, `created_at`, `updated_at`) VALUES
(1, 'bramon', '2023-08-26', 0, 0, '2023-08-27 01:04:59', '2023-08-27 01:04:59'),
(2, 'palmita', '2023-08-26', 0, 0, '2023-08-27 01:05:00', '2023-08-27 01:05:00'),
(3, '5patio', '2023-08-26', 0, 0, '2023-08-27 01:05:00', '2023-08-27 01:05:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_15_011146_create_personas_table', 1),
(7, '2023_08_15_011221_create_comedores_table', 1),
(8, '2023_08_15_011246_create_viveres_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` enum('M','F') NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `ubicacion` enum('bramon','palmita','5patio') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ubicacion` enum('bramon','palmita','5patio') NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `ubicacion`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jose valduz', 'jose.valduz@unet.edu.ve', 'bramon', NULL, '$2y$10$7AX9pBZGBccTz24e.sH7JOcW/wr5olJp6tpR7mIq2Oi1D60UPbv6u', NULL, '2023-08-27 01:05:41', '2023-08-27 01:05:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viveres`
--

CREATE TABLE `viveres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `cantidad` int(10) UNSIGNED NOT NULL,
  `unidad_medida` enum('Kilos','Litros','Unidades') NOT NULL,
  `ubicacion` enum('bramon','palmita','5patio') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `viveres`
--

INSERT INTO `viveres` (`id`, `name`, `cantidad`, `unidad_medida`, `ubicacion`, `created_at`, `updated_at`) VALUES
(1, 'arroz', 10, 'Kilos', '5patio', '2023-08-27 01:04:51', '2023-08-27 01:04:51'),
(2, 'pasta', 12, 'Kilos', '5patio', '2023-08-27 01:04:51', '2023-08-27 01:04:51'),
(3, 'harina pan', 6, 'Kilos', '5patio', '2023-08-27 01:04:51', '2023-08-27 01:04:51'),
(4, 'sal', 4, 'Kilos', '5patio', '2023-08-27 01:04:51', '2023-08-27 01:04:51'),
(5, 'aceite', 4, 'Litros', '5patio', '2023-08-27 01:04:52', '2023-08-27 01:04:52'),
(6, 'huevos', 240, 'Unidades', '5patio', '2023-08-27 01:04:52', '2023-08-27 01:04:52'),
(7, 'queso', 10, 'Kilos', '5patio', '2023-08-27 01:04:52', '2023-08-27 01:04:52'),
(8, 'carne molida', 6, 'Kilos', '5patio', '2023-08-27 01:04:52', '2023-08-27 01:04:52'),
(9, 'costilla', 0, 'Kilos', '5patio', '2023-08-27 01:04:52', '2023-08-27 01:04:52'),
(10, 'pollo', 11, 'Kilos', '5patio', '2023-08-27 01:04:52', '2023-08-27 01:04:52'),
(11, 'jabon', 0, 'Litros', '5patio', '2023-08-27 01:04:52', '2023-08-27 01:04:52'),
(12, 'cloro', 0, 'Litros', '5patio', '2023-08-27 01:04:52', '2023-08-27 01:04:52'),
(13, 'papa', 27, 'Kilos', '5patio', '2023-08-27 01:04:52', '2023-08-27 01:04:52'),
(14, 'vainita', 0, 'Kilos', '5patio', '2023-08-27 01:04:52', '2023-08-27 01:04:52'),
(15, 'apio', 0, 'Kilos', '5patio', '2023-08-27 01:04:52', '2023-08-27 01:04:52'),
(16, 'platano', 16, 'Kilos', '5patio', '2023-08-27 01:04:52', '2023-08-27 01:04:52'),
(17, 'remolacha', 6, 'Kilos', '5patio', '2023-08-27 01:04:52', '2023-08-27 01:04:52'),
(18, 'cebolla', 5, 'Kilos', '5patio', '2023-08-27 01:04:52', '2023-08-27 01:04:52'),
(19, 'pimenton', 2, 'Kilos', '5patio', '2023-08-27 01:04:52', '2023-08-27 01:04:52'),
(20, 'tomate', 5, 'Kilos', '5patio', '2023-08-27 01:04:53', '2023-08-27 01:04:53'),
(21, 'ajo porro', 2, 'Kilos', '5patio', '2023-08-27 01:04:53', '2023-08-27 01:04:53'),
(22, 'celery', 1, 'Kilos', '5patio', '2023-08-27 01:04:54', '2023-08-27 01:04:54'),
(23, 'aji dulce', 2, 'Kilos', '5patio', '2023-08-27 01:04:54', '2023-08-27 01:04:54'),
(24, 'zanahoria', 23, 'Kilos', '5patio', '2023-08-27 01:04:54', '2023-08-27 01:04:54'),
(25, 'cebollin', 22, 'Kilos', '5patio', '2023-08-27 01:04:54', '2023-08-27 01:04:54'),
(26, 'auyama', 20, 'Kilos', '5patio', '2023-08-27 01:04:54', '2023-08-27 01:04:54'),
(27, 'calabacin', 15, 'Kilos', '5patio', '2023-08-27 01:04:54', '2023-08-27 01:04:54'),
(28, 'yuca', 0, 'Kilos', '5patio', '2023-08-27 01:04:54', '2023-08-27 01:04:54'),
(29, 'granos', 10, 'Kilos', '5patio', '2023-08-27 01:04:54', '2023-08-27 01:04:54'),
(30, 'repollo', 7, 'Kilos', '5patio', '2023-08-27 01:04:54', '2023-08-27 01:04:54'),
(31, 'azucar', 0, 'Kilos', '5patio', '2023-08-27 01:04:55', '2023-08-27 01:04:55'),
(32, 'cilantro', 0, 'Kilos', '5patio', '2023-08-27 01:04:55', '2023-08-27 01:04:55'),
(33, 'jojoto', 1, 'Kilos', '5patio', '2023-08-27 01:04:55', '2023-08-27 01:04:55'),
(34, 'naranja', 0, 'Kilos', '5patio', '2023-08-27 01:04:55', '2023-08-27 01:04:55'),
(35, 'ajo', 0, 'Kilos', '5patio', '2023-08-27 01:04:55', '2023-08-27 01:04:55'),
(36, 'lactovisoy', 10, 'Kilos', '5patio', '2023-08-27 01:04:55', '2023-08-27 01:04:55'),
(37, 'arroz', 10, 'Kilos', 'bramon', '2023-08-27 01:04:55', '2023-08-27 01:04:55'),
(38, 'pasta', 12, 'Kilos', 'bramon', '2023-08-27 01:04:55', '2023-08-27 01:04:55'),
(39, 'harina pan', 6, 'Kilos', 'bramon', '2023-08-27 01:04:55', '2023-08-27 01:04:55'),
(40, 'sal', 4, 'Kilos', 'bramon', '2023-08-27 01:04:55', '2023-08-27 01:04:55'),
(41, 'aceite', 4, 'Litros', 'bramon', '2023-08-27 01:04:55', '2023-08-27 01:04:55'),
(42, 'huevos', 240, 'Unidades', 'bramon', '2023-08-27 01:04:56', '2023-08-27 01:04:56'),
(43, 'queso', 10, 'Kilos', 'bramon', '2023-08-27 01:04:56', '2023-08-27 01:04:56'),
(44, 'carne molida', 6, 'Kilos', 'bramon', '2023-08-27 01:04:56', '2023-08-27 01:04:56'),
(45, 'costilla', 0, 'Kilos', 'bramon', '2023-08-27 01:04:56', '2023-08-27 01:04:56'),
(46, 'pollo', 11, 'Kilos', 'bramon', '2023-08-27 01:04:56', '2023-08-27 01:04:56'),
(47, 'jabon', 0, 'Litros', 'bramon', '2023-08-27 01:04:56', '2023-08-27 01:04:56'),
(48, 'cloro', 0, 'Litros', 'bramon', '2023-08-27 01:04:56', '2023-08-27 01:04:56'),
(49, 'papa', 27, 'Kilos', 'bramon', '2023-08-27 01:04:56', '2023-08-27 01:04:56'),
(50, 'vainita', 0, 'Kilos', 'bramon', '2023-08-27 01:04:56', '2023-08-27 01:04:56'),
(51, 'apio', 0, 'Kilos', 'bramon', '2023-08-27 01:04:56', '2023-08-27 01:04:56'),
(52, 'platano', 16, 'Kilos', 'bramon', '2023-08-27 01:04:56', '2023-08-27 01:04:56'),
(53, 'remolacha', 6, 'Kilos', 'bramon', '2023-08-27 01:04:56', '2023-08-27 01:04:56'),
(54, 'cebolla', 5, 'Kilos', 'bramon', '2023-08-27 01:04:56', '2023-08-27 01:04:56'),
(55, 'pimenton', 2, 'Kilos', 'bramon', '2023-08-27 01:04:56', '2023-08-27 01:04:56'),
(56, 'tomate', 5, 'Kilos', 'bramon', '2023-08-27 01:04:56', '2023-08-27 01:04:56'),
(57, 'ajo porro', 2, 'Kilos', 'bramon', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(58, 'celery', 1, 'Kilos', 'bramon', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(59, 'aji dulce', 2, 'Kilos', 'bramon', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(60, 'zanahoria', 23, 'Kilos', 'bramon', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(61, 'cebollin', 22, 'Kilos', 'bramon', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(62, 'auyama', 20, 'Kilos', 'bramon', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(63, 'calabacin', 15, 'Kilos', 'bramon', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(64, 'yuca', 0, 'Kilos', 'bramon', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(65, 'granos', 10, 'Kilos', 'bramon', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(66, 'repollo', 7, 'Kilos', 'bramon', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(67, 'azucar', 0, 'Kilos', 'bramon', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(68, 'cilantro', 0, 'Kilos', 'bramon', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(69, 'jojoto', 1, 'Kilos', 'bramon', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(70, 'naranja', 0, 'Kilos', 'bramon', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(71, 'ajo', 0, 'Kilos', 'bramon', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(72, 'lactovisoy', 10, 'Kilos', 'bramon', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(73, 'arroz', 10, 'Kilos', 'palmita', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(74, 'pasta', 12, 'Kilos', 'palmita', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(75, 'harina pan', 6, 'Kilos', 'palmita', '2023-08-27 01:04:57', '2023-08-27 01:04:57'),
(76, 'sal', 4, 'Kilos', 'palmita', '2023-08-27 01:04:58', '2023-08-27 01:04:58'),
(77, 'aceite', 4, 'Litros', 'palmita', '2023-08-27 01:04:58', '2023-08-27 01:04:58'),
(78, 'huevos', 240, 'Unidades', 'palmita', '2023-08-27 01:04:58', '2023-08-27 01:04:58'),
(79, 'queso', 10, 'Kilos', 'palmita', '2023-08-27 01:04:58', '2023-08-27 01:04:58'),
(80, 'carne molida', 6, 'Kilos', 'palmita', '2023-08-27 01:04:58', '2023-08-27 01:04:58'),
(81, 'costilla', 0, 'Kilos', 'palmita', '2023-08-27 01:04:58', '2023-08-27 01:04:58'),
(82, 'pollo', 11, 'Kilos', 'palmita', '2023-08-27 01:04:58', '2023-08-27 01:04:58'),
(83, 'jabon', 0, 'Litros', 'palmita', '2023-08-27 01:04:58', '2023-08-27 01:04:58'),
(84, 'cloro', 0, 'Litros', 'palmita', '2023-08-27 01:04:58', '2023-08-27 01:04:58'),
(85, 'papa', 27, 'Kilos', 'palmita', '2023-08-27 01:04:58', '2023-08-27 01:04:58'),
(86, 'vainita', 0, 'Kilos', 'palmita', '2023-08-27 01:04:58', '2023-08-27 01:04:58'),
(87, 'apio', 0, 'Kilos', 'palmita', '2023-08-27 01:04:58', '2023-08-27 01:04:58'),
(88, 'platano', 16, 'Kilos', 'palmita', '2023-08-27 01:04:58', '2023-08-27 01:04:58'),
(89, 'remolacha', 6, 'Kilos', 'palmita', '2023-08-27 01:04:58', '2023-08-27 01:04:58'),
(90, 'cebolla', 5, 'Kilos', 'palmita', '2023-08-27 01:04:58', '2023-08-27 01:04:58'),
(91, 'pimenton', 2, 'Kilos', 'palmita', '2023-08-27 01:04:58', '2023-08-27 01:04:58'),
(92, 'tomate', 5, 'Kilos', 'palmita', '2023-08-27 01:04:58', '2023-08-27 01:04:58'),
(93, 'ajo porro', 2, 'Kilos', 'palmita', '2023-08-27 01:04:58', '2023-08-27 01:04:58'),
(94, 'celery', 1, 'Kilos', 'palmita', '2023-08-27 01:04:59', '2023-08-27 01:04:59'),
(95, 'aji dulce', 2, 'Kilos', 'palmita', '2023-08-27 01:04:59', '2023-08-27 01:04:59'),
(96, 'zanahoria', 23, 'Kilos', 'palmita', '2023-08-27 01:04:59', '2023-08-27 01:04:59'),
(97, 'cebollin', 22, 'Kilos', 'palmita', '2023-08-27 01:04:59', '2023-08-27 01:04:59'),
(98, 'auyama', 20, 'Kilos', 'palmita', '2023-08-27 01:04:59', '2023-08-27 01:04:59'),
(99, 'calabacin', 15, 'Kilos', 'palmita', '2023-08-27 01:04:59', '2023-08-27 01:04:59'),
(100, 'yuca', 0, 'Kilos', 'palmita', '2023-08-27 01:04:59', '2023-08-27 01:04:59'),
(101, 'granos', 10, 'Kilos', 'palmita', '2023-08-27 01:04:59', '2023-08-27 01:04:59'),
(102, 'repollo', 7, 'Kilos', 'palmita', '2023-08-27 01:04:59', '2023-08-27 01:04:59'),
(103, 'azucar', 0, 'Kilos', 'palmita', '2023-08-27 01:04:59', '2023-08-27 01:04:59'),
(104, 'cilantro', 0, 'Kilos', 'palmita', '2023-08-27 01:04:59', '2023-08-27 01:04:59'),
(105, 'jojoto', 1, 'Kilos', 'palmita', '2023-08-27 01:04:59', '2023-08-27 01:04:59'),
(106, 'naranja', 0, 'Kilos', 'palmita', '2023-08-27 01:04:59', '2023-08-27 01:04:59'),
(107, 'ajo', 0, 'Kilos', 'palmita', '2023-08-27 01:04:59', '2023-08-27 01:04:59'),
(108, 'lactovisoy', 10, 'Kilos', 'palmita', '2023-08-27 01:04:59', '2023-08-27 01:04:59');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comedores`
--
ALTER TABLE `comedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `viveres`
--
ALTER TABLE `viveres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comedores`
--
ALTER TABLE `comedores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `viveres`
--
ALTER TABLE `viveres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
