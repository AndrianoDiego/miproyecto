-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2020 a las 13:42:42
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(24, '2020_10_15_023714_create_servicios_table', 1),
(25, '2020_10_30_032826_create_sesiones_table', 1),
(26, '2020_10_30_061726_create_productos_table', 1),
(27, '2020_11_12_165740_create_sessions_table', 1),
(28, '2020_11_12_220506_create_registrar_prods_table', 1),
(29, '2020_11_13_002640_create_registrar_cod_table', 1),
(30, '2020_11_13_044252_create_registrar_clis_table', 1),
(31, '2020_11_30_072203_create_products_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dirección` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrar_clis`
--

CREATE TABLE `registrar_clis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombrecli` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `registrar_clis`
--

INSERT INTO `registrar_clis` (`id`, `nombrecli`, `apellidos`, `direccion`, `producto`, `cantidad`, `created_at`, `updated_at`) VALUES
(1, 'Jose', 'Lopez Hernandez', 'Calle Guadalupe', 'Album', '2', NULL, NULL),
(2, 'Jose', 'Gutierrez', 'Calle Guadalupe', 'Album', '2', NULL, NULL),
(3, 'Miguel', 'Arroyo', 'Av Juarez', 'Camara', '1', NULL, NULL),
(4, 'Raul', 'Ortiz Solano', 'Calle Octubre', 'Album', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrar_cod`
--

CREATE TABLE `registrar_cod` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrar_prods`
--

CREATE TABLE `registrar_prods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombreprod` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proveedor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `registrar_prods`
--

INSERT INTO `registrar_prods` (`id`, `nombreprod`, `marca`, `proveedor`, `precio`, `cantidad`, `created_at`, `updated_at`) VALUES
(1, 'Camara', 'Canon', 'Mexico', '$1500', '2', NULL, NULL),
(2, 'Camara', 'Bridge', 'Akademus', '$3000', '4', NULL, NULL),
(3, 'Camara', 'Nikon', 'Mexico', '$2500', '1', NULL, NULL),
(4, 'Camara', 'Sony', 'Amazon', '$3490', '2', NULL, '2020-11-14 06:04:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paterno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `dia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evento` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre1`, `paterno`, `materno`, `edad`, `dia`, `evento`, `created_at`, `updated_at`) VALUES
(1, 'Micaela', 'Perez', 'Luna', 34, 'Sabado', 'Salida', NULL, '2020-11-14 10:32:23'),
(2, 'Luis', 'Lopez', 'Ruiz', 18, 'Sabado', 'Boda', NULL, '2020-11-30 18:29:42'),
(3, 'Maria', 'Baez', 'Hernandez', 14, 'Domingo', 'Salida', NULL, NULL),
(4, 'Jacqueline', 'San Luis', 'Hernandez', 20, 'Sabado', 'Boda', NULL, NULL),
(5, 'Angel', 'Carmona', 'Diaz', 45, 'Lunes', 'Salida', NULL, NULL),
(6, 'Aislinn', 'Baez', 'Lopez', 18, 'Jueves', 'Xv', NULL, NULL),
(7, 'Luis', 'Baez', 'Ruiz', 45, 'Viernes', 'Salida', NULL, NULL),
(8, 'Aislinn', 'San Luis', 'Ruiz', 18, 'Domingo', 'Bautizo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paterno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `albunes` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sesiones`
--

INSERT INTO `sesiones` (`id`, `nombre2`, `paterno`, `materno`, `email`, `edad`, `fecha`, `albunes`, `created_at`, `updated_at`) VALUES
(1, 'Veronica', 'Juarez', 'Lira', 'lunaw5671@gmail.com', 23, '2020-11-14', '3', NULL, '2020-11-30 18:28:30'),
(2, 'Karla', 'San Luis', 'Ruiz', 'lunaw5674@gmail.com', 20, '2020-11-16', '2', NULL, NULL),
(3, 'Luis', 'Baez', 'Hernandez', 'yoss_perez7@hotmail.com', 14, '2020-11-21', '1', NULL, NULL),
(4, 'Carmen', 'Perez', 'Diaz', 'yoss_perez5@hotmail.com', 45, '2020-11-19', '6', NULL, NULL),
(5, 'Karla', 'San Luis', 'Lopez', 'yoss_perez7@hotmail.com', 18, '2020-11-19', '3', NULL, NULL),
(6, 'Josue', 'San Luis', 'Ruiz', 'yoss_perez5@hotmail.com', 18, '2020-11-26', '4', NULL, NULL),
(7, 'Carmen', 'Baez', 'Ruiz', 'yoss_perez5@hotmail.com', 20, '2020-12-02', '3', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('AZXvMjzhETusxiCMXKx1ZWbq0Rbv0pzTSB4ltrvX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.66 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSFNydHk1NTR5dm45aUFlaFEzbmlhWHVHUjZJSGxkU0pCMDVHVnVHZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1606739458);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Joselin', 'lunaw5671@gmail.com', '0000-00-00 00:00:00', 'albertogil', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Joselin', 'lunaw5674@gmail.com', NULL, '$2y$10$gg4vhj5Txu2XWMuCCZFwPOUJxNbB8NUT5Y.40g2tlpLpOuO0OIA06', NULL, NULL, NULL, NULL, NULL, '2020-11-13 11:16:35', '2020-11-13 11:16:35');

--
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registrar_clis`
--
ALTER TABLE `registrar_clis`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registrar_cod`
--
ALTER TABLE `registrar_cod`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registrar_prods`
--
ALTER TABLE `registrar_prods`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registrar_clis`
--
ALTER TABLE `registrar_clis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `registrar_cod`
--
ALTER TABLE `registrar_cod`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registrar_prods`
--
ALTER TABLE `registrar_prods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
