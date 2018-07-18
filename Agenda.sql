-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-07-2018 a las 21:54:18
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Agenda`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_contact` (IN `_nombre` VARCHAR(100), IN `_telefono` VARCHAR(20), IN `_descripcion` VARCHAR(100), IN `_direccion` VARCHAR(100))  NO SQL
BEGIN


INSERT INTO `contactos`(`Nombre`, `Telefono`, `descripcion`, `direccion`) VALUES (_nombre,_telefono,_descripcion,_direccion);

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `descripcion` text NOT NULL,
  `direccion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `Nombre`, `Telefono`, `descripcion`, `direccion`) VALUES
(1, 'escarlet mejia valerio', '8095597657', 'Mi Verdadera Reina', 'KM 28 AUTOPISTA DUARTE'),
(2, 'Miguel Angel Hernandez Cruz', '8095597657', 'Mi Amigo y Hermano', 'KM 25 AUTOPISTA DUARTE'),
(3, 'Alejandro ramirez peralta', '8297898479', 'Soy yo mismo', 'KM 25 AUTOPISTA DUARTE'),
(6, 'Emilio', '8297898479', ' Amigo', 'Alcarrizos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
