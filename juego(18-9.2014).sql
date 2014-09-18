-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2014 a las 15:07:26
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
-- Estructura de tabla para la tabla `actores`
--

CREATE TABLE IF NOT EXISTS `actores` (
  `nombre` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `charla` text COLLATE utf8_spanish_ci NOT NULL,
  `FUE` int(10) NOT NULL,
  `RES` int(10) NOT NULL,
  `vida` int(100) NOT NULL,
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `actores`
--

INSERT INTO `actores` (`nombre`, `charla`, `FUE`, `RES`, `vida`) VALUES
('camarero', 'Buenas noches\r\n\r\nDesea una mesa para cenar, tengo una muy buena, al lado de la ventana, desde hay podra disfrutar de unas magnificas vistas de chicago mientras degusta nuestros platos.', 0, 0, 0),
('mujer_punk', 'Vaya vaya asi que el principe ha mandado a otro perrito faldero a hacerle el trabajo sucio, no se que te habra contado de todo esto, pero tu presencia no es bienvenida.\r\n\r\nLARGATE AHORA MISMO, O TE ECHO A LOS PERROS', 5, 5, 25),
('principe', 'Te hemos echo llamar porque necesitamos de tu ayuda, desde hace algunos dias estamos teniendo problemas con un joven vampiro, bastante revelde que cree que las normas estan echas para saltarselas.\r\nEste vampiro nos ha causado ya innumerables problemas por lo que necesitamos que lo traigas hasta nosotros vivo si es posible.\r\nMis espias me han proporcionado un map de los sitios que frecuenta, por lo que puede ser un buen sitio por donde empezar.', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escena`
--

CREATE TABLE IF NOT EXISTS `escena` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `escena`
--

INSERT INTO `escena` (`ID`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 'palacio', 'Un fastuoso palacio de aspecto gotico se levanta ante ti, sus muros negros como la noche y sus fuertes puertas te hacen presentir, que dentro de el se encuentra una persona importante.', 'palacio.jpg'),
(4, 'salon', 'Un salon inmenso se abre ante ti, la majustuosidad del mismo, te nubla la vision.\r\n\r\nDelante de ti, aparecen varias personas, impecablemente vestidas sus palidas pieles reflejan su naturaleza vampirica.\r\n\r\nUna de ellas, se dirije hacia ti.', 'salon.jpg'),
(5, 'bareto', 'El purpple pig, es uno de los mejores restaurantes de chicago, cocina Europea, contemporanea,un lugar ideal, para tomar unas cerverzas y disfrutar de un buen plato de cerdo.\r\n\r\nEn el interior no encuentras muchos rastros de vampiros, seguramente estos prefieron lugares mas elitistas y sofisticados, pero los contactos del principe dijeron que el vampiro que buscas suele frecuentar este sitio.', 'purpple.jpg'),
(6, 'interior_bareto', 'Te convences, que para no levantar sospechas lo mejor que puedes hacer es tomar acomodo en la mesa que te han ofrecido.\r\n\r\nEs una magnifica mesa, con buenas vistas, la comida parece exquisita aunque evidentemente no puedas ni probarla.\r\n\r\nMientras que simulas que comes, te das cuenta que hay una mujer alta de pelo oscuro y vestimenta punk que esta preguntando al camarero y señalando hacia ti.\r\n\r\n', 'purpple_interior.jpg'),
(7, 'salida', 'Todavia eres muy joven para recibir la muerte "definitiva" asi que decides que una retirada a tiempo es una victoria.\r\n</br>\r\no por lo menos eso dicen los cobardes', 'salida.jpg'),
(8, 'combate', 'Decides que a veces es necesario enfrentarse a los problemas por lo que decides, enfrentarte, dejandole ver tus temibles garras y afilados colmillos.', 'combate.jpg');

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
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE IF NOT EXISTS `lugares` (
  `id` int(11) NOT NULL,
  `nombre` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
(55, 'bella', 'e7e9ec3723447a642f762b2b6a15cfd7', 'bella', 'Vampiro', 7, 8, 5, 7, 6, 10, 35);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
