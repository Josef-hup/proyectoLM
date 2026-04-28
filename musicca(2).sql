-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-04-2026 a las 12:19:54
-- Versión del servidor: 8.0.45-0ubuntu0.24.04.1
-- Versión de PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `musicca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembros`
--

CREATE TABLE `miembros` (
  `id` int UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instrumento` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `ciudad` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `miembros`
--

INSERT INTO `miembros` (`id`, `nombre`, `instrumento`, `fecha`, `ciudad`) VALUES
(1, '1111', '1111', '1111-11-11', '1111'),
(2, 'koli', 'bum bom ', '2000-12-12', 'calimotxo'),
(3, 'kola kao', 'kuku', '3000-12-12', 'dod com '),
(4, 'lol', 'trt', '0020-12-09', 'sas'),
(5, 'q', 'q', '2026-01-28', 'q');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `lorem` varchar(2000) NOT NULL,
  `compleat_text` varchar(5000) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `news`
--

INSERT INTO `news` (`id`, `title`, `lorem`, `compleat_text`, `image`, `created_at`) VALUES
(1, 'RAMMSTEIN XXXIII - Limited Edition Collector\'s Vinyl Box', 'El 14 de noviembre de 2025 se publicara por primera vez la coleccion completa de los 33 singles oficiales de Rammstein en vinilo negro de 7\".', 'El 14 de noviembre de 2025 se publicara por primera vez la coleccion completa de los 33 singles oficiales de Rammstein en vinilo negro de 7\". El 14 de noviembre de 2025 se publicara por primera vez la coleccion completa de los 33 singles oficiales de Rammstein en vinilo negro de 7\".', 'image 1.webp', '2026-04-28 12:02:26'),
(2, 'Rammstein.Charity is back', 'A partir de hoy, varios premios de la carrera de la banda se subastaran gradualmente en las proximas semanas para apoyar a organizaciones beneficas seleccionadas.', 'A partir de hoy, varios premios de la carrera de la banda se subastaran gradualmente en las proximas semanas para apoyar a organizaciones beneficas seleccionadas. A partir de hoy, varios premios de la carrera de la banda se subastaran gradualmente en las proximas semanas para apoyar a organizaciones beneficas seleccionadas.', 'image.webp', '2026-04-28 12:02:26'),
(3, 'Behind The Scenes of the World Stadium Tour 2019-2024', '2024 marca el final de la gira de estadios mundial de Rammstein. Un viaje que duro cinco anos, incluyo 135 conciertos y emociono a la increible cifra de seis millones de fans.', '2024 marca el final de la gira de estadios mundial de Rammstein. Un viaje que duro cinco anos, incluyo 135 conciertos y emociono a la increible cifra de seis millones de fans. 2024 marca el final de la gira de estadios mundial de Rammstein. Un viaje que duro cinco anos, incluyo 135 conciertos y emociono a la increible cifra de seis millones de fans.', 'behind-the-scenes-of-the-world-stadium-tour-2019-2024.webp', '2026-04-28 12:02:26'),
(4, 'Rammstein.Charity is back', 'A partir de hoy, varios premios de la carrera de la banda se subastaran gradualmente en las proximas semanas para apoyar a organizaciones beneficas seleccionadas.', 'A partir de hoy, varios premios de la carrera de la banda se subastaran gradualmente en las proximas semanas para apoyar a organizaciones beneficas seleccionadas. A partir de hoy, varios premios de la carrera de la banda se subastaran gradualmente en las proximas semanas para apoyar a organizaciones beneficas seleccionadas.', 'merch1.avif', '2026-04-28 12:02:26'),
(5, 'Behind The Scenes of the World Stadium Tour 2019-2024', '2024 marca el final de la gira de estadios mundial de Rammstein. Un viaje que duro cinco anos, incluyo 135 conciertos y emociono a la increible cifra de seis millones de fans.', '2024 marca el final de la gira de estadios mundial de Rammstein. Un viaje que duro cinco anos, incluyo 135 conciertos y emociono a la increible cifra de seis millones de fans. 2024 marca el final de la gira de estadios mundial de Rammstein. Un viaje que duro cinco anos, incluyo 135 conciertos y emociono a la increible cifra de seis millones de fans.', 'image (1).webp', '2026-04-28 12:02:26'),
(10, '11111111', 'ххууууууууууййййййй', '111111', 'Sin título.png', '2026-04-28 12:05:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `login`, `nombre`, `email`, `password`) VALUES
(2, 'sara', 'saragoza', 'sara@gmail.com', 'cd817537fcf34a75f9574fcc1399b0eb'),
(3, 'admin', 'as', 'aa@aaa', 'e9b9f1f9fecbb8d669de3882a72a7d4b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `miembros`
--
ALTER TABLE `miembros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `miembros`
--
ALTER TABLE `miembros`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
