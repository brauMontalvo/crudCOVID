-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2021 a las 06:15:21
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `covid19`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `sCveUsuario` varchar(255) NOT NULL,
  `sNombre` varchar(255) NOT NULL,
  `sApePat` varchar(255) NOT NULL,
  `sApeMat` varchar(255) NOT NULL,
  `sContrasenia` varchar(255) NOT NULL,
  `Sexo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`sCveUsuario`, `sNombre`, `sApePat`, `sApeMat`, `sContrasenia`, `Sexo`) VALUES
('1', 'Braulio', 'Montalvo', 'Ronzón', '12345', 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(255) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `puntaje` varchar(255) NOT NULL,
  `resultado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombres`, `apellidos`, `puntaje`, `resultado`) VALUES
(1, 'Rosen Buen Rostro', 'Pecas', '20', 'NEGATIVO'),
(2, 'Juana ', 'De Arco', '35', 'POSIBLE POSITIVO'),
(3, 'Keanu', 'Reeves', '0', 'NEGATIVO'),
(4, 'Paquita', 'La Del Barrio', '10', 'NEGATIVO'),
(5, 'Edward', 'Elric', '35', 'POSIBLE POSITIVO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
