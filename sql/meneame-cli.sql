-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2019 a las 07:06:42
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `meneame-cli`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mnm_pendientes`
--

CREATE TABLE `mnm_pendientes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `karma` int(11) NOT NULL,
  `votos` int(11) NOT NULL,
  `comentarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mnm_portada`
--

CREATE TABLE `mnm_portada` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `karma` int(11) NOT NULL,
  `votos` int(11) NOT NULL,
  `comentarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mnm_pendientes`
--
ALTER TABLE `mnm_pendientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mnm_portada`
--
ALTER TABLE `mnm_portada`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mnm_pendientes`
--
ALTER TABLE `mnm_pendientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mnm_portada`
--
ALTER TABLE `mnm_portada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
