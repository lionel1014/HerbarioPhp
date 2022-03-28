-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-03-2022 a las 23:32:04
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `herbario`
--
DROP DATABASE IF EXISTS `herbario`;
CREATE DATABASE IF NOT EXISTS `herbario` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `herbario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

DROP TABLE IF EXISTS `cuenta`;
CREATE TABLE IF NOT EXISTS `cuenta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `condicion` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `matricula` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `matricula` (`matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`id`, `nombre`, `apellido`, `condicion`, `matricula`) VALUES
(6, 'marco', 'polo', '1', 4444);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

DROP TABLE IF EXISTS `familia`;
CREATE TABLE IF NOT EXISTS `familia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

DROP TABLE IF EXISTS `ingreso`;
CREATE TABLE IF NOT EXISTS `ingreso` (
  `id` int NOT NULL AUTO_INCREMENT,
  `familia` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `reino` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `especie` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `genero` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `clase` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `orden` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `division` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_vulgar` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fruto` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `foto_fruto` longblob NOT NULL,
  `foto` longblob NOT NULL,
  `tipo` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `condicion` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `matricula` int NOT NULL,
  `tipo` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `condicion`, `matricula`, `tipo`) VALUES
(1, 'itati', 'jaimez', '1', 1111, 1),
(2, 'yohana', 'soria', '1', 2222, 2),
(6, 'marta', 'lopez', '2', 3333, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
