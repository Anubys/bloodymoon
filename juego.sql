-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2014 a las 14:34:08
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `juego`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escena`
--

CREATE TABLE IF NOT EXISTS `escena` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `escena`
--

INSERT INTO `escena` (`ID`, `nombre`, `descripcion`) VALUES
(1, 'En el Palacio', 'Un fastuoso palacio de aspecto gotico se levanta ante ti, sus muros negros como la noche y sus fuertes puertas te hacen presentir, que dentro de el se encuentra una persona importante.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sangre_rabia` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `sangre_rabia`) VALUES
(1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomusuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `raza` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `FUE` int(10) NOT NULL,
  `AGI` int(10) NOT NULL,
  `INT` int(10) NOT NULL,
  `CAR` int(10) NOT NULL,
  `RES` int(10) NOT NULL,
  `sangre_rabia` int(10) NOT NULL,
  `vida` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=56 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nomusuario`, `password`, `email`, `raza`, `FUE`, `AGI`, `INT`, `CAR`, `RES`, `sangre_rabia`, `vida`) VALUES
(55, 'bella', 'e7e9ec3723447a642f762b2b6a15cfd7', 'bella', 'Vampiro', 7, 8, 5, 7, 6, 10, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
