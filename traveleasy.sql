-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-05-2026 a las 01:27:14
-- Versión del servidor: 9.1.0
-- Versión de PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `traveleasy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

DROP TABLE IF EXISTS `compras`;
CREATE TABLE IF NOT EXISTS `compras` (
  `id` int NOT NULL AUTO_INCREMENT,
  `origen` varchar(100) DEFAULT NULL,
  `destino` varchar(100) DEFAULT NULL,
  `fecha_partida` date DEFAULT NULL,
  `fecha_regreso` date DEFAULT NULL,
  `pasajeros` int DEFAULT NULL,
  `precio` int DEFAULT NULL,
  `fecha_compra` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `origen`, `destino`, `fecha_partida`, `fecha_regreso`, `pasajeros`, `precio`, `fecha_compra`) VALUES
(4, 'Córdoba', 'Chaco', '2025-12-23', '2025-11-27', 2, 0, '2025-11-05 19:22:24'),
(5, 'Salta', 'Córdoba', '2025-11-20', '2025-11-23', 2, 0, '2025-11-05 20:00:05'),
(6, 'Salta', 'Jujuy', '2025-11-19', '2025-11-29', 31, 0, '2025-11-14 12:37:44'),
(7, 'Salta', 'Jujuy', '2025-11-19', '2025-11-29', 31, 0, '2025-11-14 12:40:06'),
(8, 'Buenos Aires', 'Santa Cruz', '2025-11-13', '2025-11-04', 1, 0, '2025-11-14 12:45:55'),
(9, 'Salta', 'Santa Fe', '2025-11-19', '2025-12-26', 4, 0, '2025-11-14 12:48:33'),
(10, 'Salta', 'Santa Fe', '2025-11-19', '2025-12-26', 4, 0, '2025-11-14 12:59:08'),
(11, 'Salta', 'Buenos Aires', '2025-11-14', '2025-11-14', 1, 0, '2025-11-14 13:07:11'),
(12, 'Salta', 'Buenos Aires', '2025-11-14', '2025-11-14', 1, 0, '2025-11-14 13:07:39'),
(13, 'Salta', 'Buenos Aires', '2025-11-14', '2025-11-14', 1, 0, '2025-11-14 13:08:01'),
(14, 'Salta', 'Jujuy', '2025-11-19', '2025-12-05', 3, 0, '2025-11-14 13:19:00'),
(15, 'Salta', 'Buenos Aires', '2025-11-15', '2025-11-23', 1, 0, '2025-11-14 13:22:28'),
(16, 'Salta', 'Buenos Aires', '2025-11-15', '2025-11-23', 1, 0, '2025-11-14 13:22:29'),
(17, 'Jujuy', 'Córdoba', '2025-11-18', '2025-11-20', 4, 0, '2025-11-14 13:33:31'),
(18, 'Salta', 'Santa Cruz', '2025-11-15', '2025-11-30', 1, 0, '2025-11-14 14:32:14'),
(19, 'Salta', 'Santa Cruz', '2025-11-27', '2025-11-21', 4, 0, '2025-11-14 14:35:56'),
(20, 'Salta', 'Chaco', '2025-11-15', '2025-11-29', 2, 0, '2025-11-14 14:46:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

DROP TABLE IF EXISTS `reservas`;
CREATE TABLE IF NOT EXISTS `reservas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `origen` varchar(100) NOT NULL,
  `destino` varchar(100) NOT NULL,
  `fecha_partida` date NOT NULL,
  `fecha_regreso` date DEFAULT NULL,
  `pasajeros` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `origen`, `destino`, `fecha_partida`, `fecha_regreso`, `pasajeros`, `created_at`) VALUES
(1, 'Salta', 'Buenos Aires', '2025-11-11', '2025-11-12', 1, '2025-11-03 13:42:57'),
(2, 'Córdoba', 'Chaco', '2025-12-23', '2025-11-27', 2, '2025-11-03 14:14:31'),
(3, 'Córdoba', 'Buenos Aires', '2025-11-13', '2025-11-27', 2, '2025-11-05 19:23:44'),
(4, 'Salta', 'Buenos Aires', '2025-11-06', '2025-11-09', 2, '2025-11-05 19:57:30'),
(5, 'Salta', 'Córdoba', '2025-11-20', '2025-11-23', 2, '2025-11-05 19:59:36'),
(6, 'Salta', 'Jujuy', '2025-11-19', '2025-11-29', 31, '2025-11-14 12:30:11'),
(7, 'Buenos Aires', 'Santa Cruz', '2025-11-13', '2025-11-04', 1, '2025-11-14 12:45:40'),
(8, 'Salta', 'Santa Fe', '2025-11-19', '2025-12-26', 4, '2025-11-14 12:48:12'),
(9, 'Salta', 'Buenos Aires', '2025-11-14', '2025-11-14', 1, '2025-11-14 13:06:50'),
(10, 'Salta', 'Jujuy', '2025-11-19', '2025-12-05', 3, '2025-11-14 13:18:38'),
(11, 'Salta', 'Buenos Aires', '2025-11-15', '2025-11-23', 1, '2025-11-14 13:22:07'),
(12, 'Jujuy', 'Córdoba', '2025-11-18', '2025-11-20', 4, '2025-11-14 13:33:20'),
(13, 'Salta', 'Santa Cruz', '2025-11-15', '2025-11-30', 1, '2025-11-14 14:31:51'),
(14, 'Salta', 'Santa Cruz', '2025-11-27', '2025-11-21', 4, '2025-11-14 14:35:43'),
(15, 'Salta', 'Chaco', '2025-11-15', '2025-11-29', 2, '2025-11-14 14:46:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas_paquetes`
--

DROP TABLE IF EXISTS `reservas_paquetes`;
CREATE TABLE IF NOT EXISTS `reservas_paquetes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `paquete_id` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `fecha_reserva` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `reservas_paquetes`
--

INSERT INTO `reservas_paquetes` (`id`, `paquete_id`, `nombre`, `precio`, `fecha_reserva`) VALUES
(1, 1, 'Bariloche', 109990.00, '2025-11-03 14:52:15'),
(2, 1, 'Bariloche', 109990.00, '2025-11-05 18:46:47'),
(3, 2, 'Peru', 89150.00, '2025-11-05 18:46:53'),
(4, 1, 'Bariloche', 109990.00, '2025-11-05 20:01:18'),
(5, 1, 'Bariloche', 109990.00, '2025-11-14 12:37:21'),
(6, 1, 'Bariloche', 109990.00, '2025-11-14 12:39:56'),
(7, 4, 'Brasil', 59760.00, '2025-11-14 12:50:42'),
(8, 4, 'Brasil', 59760.00, '2025-11-14 12:58:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`, `email`) VALUES
(1, 'admin', '12345', ''),
(2, 'user1', '$2y$10$8AY5pwSRA4KIb66THvH3F.AhNHwpP1JO.ptP9cTKSQ1wH5Ddtzkt2', 'correo@correo.com'),
(3, 'Francisca', '$2y$10$dbdYrDzIjIhE./W7rcKIou0LCnluzbtwer9yLH9ib0I6BUfqgUsWa', 'ariasleonel14@gmail.com'),
(4, 'Kai', '$2y$10$RYHoknWHTD/Mb5UaZ8c5x.WSVoc5nQ9OmO8nQ.wyvQBhHZceXEyom', 'btorres17988@gmail.com'),
(5, 'berenjena', '$2y$10$1GW1AWH0H89CuktOBiO8YuH5GXQsBBrM5k2Lye8T5d5D2ZgxgR35e', 'esteban110308@gmail.com'),
(6, 'benjamin', '$2y$10$/9e.vf.Cx4cLhBQLpm/ZUuaij/Rh2ItEx6qim.4R0gRpoZokFqZ7.', 'benjamin@gmail.com'),
(7, 'esteban', '$2y$10$JNQYpcnz8qfjOQ.1WNKS2eTAwR9L8.MtyJer7Jr8cvMJ2ZT6tiPta', 'correo@correo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
