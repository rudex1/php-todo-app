-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-09-2016 a las 06:52:19
-- Versión del servidor: 5.5.50-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Listas`
--
CREATE DATABASE `LISTAS` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `LISTAS`;
-- --------------------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `dni` varchar(9) DEFAULT NULL,
  `e-mail` varchar(30) NOT NULL,
  `contrasena` varchar(10) DEFAULT NULL,
  `tipousuario` varchar(10) DEFAULT NULL,
  `fec_alta` date NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `dni`, `e-mail`, `contrasena`, `tipousuario`, `fec_alta`) VALUES
(1, 'zubiri', 'z1111112i', 'zubiri@zubiri.com', 'zubiri', 'admin', '2015-02-01'),
(2, 'rudy', '123232312', 'rudy@rudy.com', 'sejas', 'Usuario', '2015-02-10'),
(3, 'sara', '12431487h', 'sara@sara.com', 'zubiri', 'Usuario', '2015-02-11'),
(6, 'miren', '111111111', 'miren@miren.com', 'miren', 'Usuario', '2015-02-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista`
--

CREATE TABLE IF NOT EXISTS `lista` (
  `id_usuario` int(10) NOT NULL DEFAULT '0',
  `id_lista` int(10) NOT NULL DEFAULT '0',
  `fecha` datetime DEFAULT NULL,
  `tarea` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`,`id_lista`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tareas`
--

CREATE TABLE IF NOT EXISTS `Tareas` (
  `id_tareas` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tareas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
