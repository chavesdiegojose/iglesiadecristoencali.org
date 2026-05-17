-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-05-2026 a las 21:09:59
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `idccali`
--
CREATE DATABASE IF NOT EXISTS `idccali` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `idccali`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `archivo` varchar(255) DEFAULT NULL,
  `link` text,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_item`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `item`
--

INSERT INTO `item` (`id_item`, `id_post`, `titulo`, `archivo`, `link`, `fecha`) VALUES
(65, 27, 'dddfghfghfgh', 'uploads/40 - Préparate Para Venir Al Encuentro De Tu Dios.mp3', NULL, '2022-11-03'),
(64, 27, 'Lección 3 - La Confesión', NULL, 'https://drive.google.com/file/d/1UuQUSfllPTQVaSkejWVpu0qVrBgsWJx2/view?usp=share_link', '2022-10-31'),
(61, 26, 'Programa de Radio - La Actitud', NULL, 'https://drive.google.com/file/d/12WhUQ2BdjFm69mr9abEGpnyUDOqC1C9q/view?usp=share_link', '2022-10-31'),
(57, 25, 'El Don de Lenguas', 'uploads/EL DON DE LENGUAS 09-2022.mp3', NULL, '2022-10-31'),
(63, 27, 'Lección 2 - El Arrepentimiento', 'uploads/Fase I - Lecciones Estudiantes.pdf', NULL, '2022-10-31'),
(59, 25, 'Material en sitio web del Ancla del Evangelio sobre el hablar en lenguas', NULL, 'https://www.facebook.com/elancladelevangelio', '2022-10-31'),
(62, 27, 'Lección 1 - La fe', 'uploads/ORACION - CARTILLA PARA NIÑOS.pdf', NULL, '2022-10-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `type_post` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id_post`, `titulo`, `descr`, `imagen`, `type_post`, `fecha`) VALUES
(27, 'La falsa doctrina del rapto y el premilenialismo', 'Importante conocer el apocalipsis y el antiguo testamento para no dejarse engañar.', 'uploads/img/4c6c8b5a2d15de99cac00f3e9104f46cCaptura de pantalla 2022-09-30 204604.png', '', '2022-10-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuarios` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id_usuarios`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `name_user`, `pass`) VALUES
(1, 'iglesiadecristoencali.info@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
