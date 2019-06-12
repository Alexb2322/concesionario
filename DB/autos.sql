-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2019 a las 04:45:35
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `concesionario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `id` int(30) NOT NULL,
  `modelo` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `marca` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `precio` double DEFAULT NULL,
  `color` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `imagen` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`id`, `modelo`, `marca`, `precio`, `color`, `imagen`) VALUES
(0, '', '', 0, '', 'images/car.png'),
(1, '2020', 'bmw', 125000000, 'N', 'images/car.png'),
(0, '', '', 0, '', 'images/car.png'),
(0, '', '', 0, '', 'images/car.png'),
(4, '2020', 'bmw z', 80000000, 'R', 'images/car.png'),
(5, '2019', 'bmw x', 150000000, 'G', 'images/car.png'),
(0, '', '', 0, '', 'images/car.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
