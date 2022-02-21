-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-08-2019 a las 02:23:35
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bebe_en_camino`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroc`
--

CREATE TABLE `registroc` (
  `nombre` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `edad` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `aembarazada` varchar(50) NOT NULL,
  `paquete` varchar(50) NOT NULL,
  `bebes` varchar(50) NOT NULL,
  `eparto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registroc`
--

INSERT INTO `registroc` (`nombre`, `tel`, `correo`, `edad`, `direccion`, `aembarazada`, `paquete`, `bebes`, `eparto`) VALUES
('Emmanuel', '013339009606', 'deadbands@hotmail.com', '31', 'Calle 23', 'Nel', 'Parto Cesarea', '1 BebÃ¨', '10000'),
('Emmanuel', '013339009606', 'deadbands@hotmail.com', '30', 'Calle 23', 'Nel', 'Parto Cesarea', '3 BebÃ¨s', '10000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
