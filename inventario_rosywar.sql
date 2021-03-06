-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2014 a las 18:19:13
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inventario_rosywar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `codigo_interno` varchar(255) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cantidad` varchar(255) NOT NULL,
  `talla` varchar(5) NOT NULL,
  `color` varchar(255) NOT NULL,
  `precio1` double NOT NULL,
  `precio2` double NOT NULL,
  PRIMARY KEY (`codigo_interno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigo_interno`, `codigo`, `nombre`, `cantidad`, `talla`, `color`, `precio1`, `precio2`) VALUES
('121577-1l', '21577-1', 'Faja espalda alta a la rodilla color negro T= L', '11', 'L', 'Negro', 90000, 110000),
('121577-1m', '21577-1', 'Faja espalda alta a la rodilla color negro T= M', '5', 'M', 'Negro', 90000, 110000),
('121577-1s', '21577-1', 'Faja espalda alta a la rodilla color negro T= S', '11', 'S', 'Negro', 80000, 100000),
('121577-1xl', '21577-1', 'Faja espalda alta a la rodilla color negro T= XL', '5', 'XL', 'Negro', 90000, 110000),
('121577-1xs', '21577-1', 'Faja espalda alta a la rodilla color negro T= XS', '6', 'XS', 'Negro', 80000, 100000),
('121577-1xxs', '21577-1', 'Faja espalda alta a la rodilla color negro T= XXS', '11', 'XXS', 'Negro', 80000, 100000),
('121577-2l', '21577-2', 'Faja camiseta a la rodilla color negro T= L', '7', 'L', 'Negro', 90000, 110000),
('121577-2m', '21577-2', 'Faja camiseta a la rodilla color negro T= M', '9', 'M', 'Negro', 90000, 110000),
('121577-2s', '21577-2', 'Faja camiseta a la rodilla color negro T= S', '6', 'S', 'Negro', 80000, 100000),
('121577-2xl', '21577-2', 'Faja camiseta a la rodilla color negro T= XL', '6', 'XL', 'Negro', 90000, 110000),
('121577-2xs', '21577-2', 'Faja camiseta a la rodilla color negro T= XS', '7', 'XS', 'Negro', 80000, 100000),
('121577-3l', '21577-3', 'Faja con manga a la rodilla color negro T= L', '7', 'L', 'Negro', 100000, 120000),
('121577-3m', '21577-3', 'Faja con manga a la rodilla color negro T= M', '0', 'M', 'Negro', 100000, 120000),
('121577-3s', '21577-3', 'Faja con manga a la rodilla color negro T= S', '8', 'S', 'Negro', 90000, 110000),
('121577-3xl', '21577-3', 'Faja con manga a la rodilla color negro T= XL', '5', 'XL', 'Negro', 100000, 120000),
('121577-3xs', '21577-3', 'Faja con manga a la rodilla color negro T= XS', '6', 'XS', 'Negro', 90000, 110000),
('121577-4m', '21577-4', 'Faja estraple a la rodilla color negro T= M', '15', 'M', 'Negro', 90000, 110000),
('121577-4s', '21577-4', 'Faja estraple a la rodilla color negro T= S', '8', 'S', 'Negro', 80000, 100000),
('121577-4xs', '21577-4', 'Faja estraple a la rodilla color negro T= XS', '8', 'XS', 'Negro', 80000, 100000),
('121577-4xxs', '21577-4', 'Faja estraple a la rodilla color negro T= XXS', '13', 'XXS', 'Negro', 80000, 100000),
('15496-1l', '5496-1', 'Faja short espalda alta color negro T= L', '7', 'L', 'Negro', 70000, 90000),
('15496-1m', '5496-1', 'Faja short espalda alta color negro T= M', '5', 'M', 'Negro', 70000, 90000),
('15496-1s', '5496-1', 'Faja short espalda alta color negro T= S', '5', 'S', 'Negro', 60000, 80000),
('15496-1xl', '5496-1', 'Faja short espalda alta color negro T= XL', '5', 'XL', 'Negro', 70000, 90000),
('15496-1xs', '5496-1', 'Faja short espalda alta color negro T= XS', '10', 'XS', 'Negro', 60000, 80000),
('15496-1xxs', '5496-1', 'Faja short espalda alta color negro T= XXS', '9', 'XXS', 'Negro', 60000, 80000),
('15496-2l', '5496-2', 'Faja short camiseta color negro T= L', '6', 'L', 'Negro', 70000, 90000),
('15496-2m', '5496-2', 'Faja short camiseta color negro T= M', '8', 'M', 'Negro', 70000, 90000),
('15496-2s', '5496-2', 'Faja short camiseta color negro T= S', '9', 'S', 'Negro', 60000, 80000),
('15496-2xl', '5496-2', 'Faja short camiseta color negro T= XL', '10', 'XL', 'Negro', 70000, 90000),
('15496-2xs', '5496-2', 'Faja short camiseta color negro T= XS', '9', 'XS', 'Negro', 60000, 80000),
('15496-3l', '5496-3', 'Faja short con manga color negro T= L', '7', 'L', 'Negro', 80000, 100000),
('15496-3m', '5496-3', 'Faja short con manga color negro T= M', '11', 'M', 'Negro', 80000, 100000),
('15496-3s', '5496-3', 'Faja short con manga color negro T= S', '7', 'S', 'Negro', 70000, 90000),
('15496-3xl', '5496-3', 'Faja short con manga color negro T= XL', '0', 'XL', 'Negro', 80000, 100000),
('15496-3xs', '5496-3', 'Faja short con manga color negro T= XS', '8', 'XS', 'Negro', 70000, 90000),
('15496-4m', '5496-4', 'Faja short estraple color negro T= M', '13', 'M', 'Negro', 70000, 90000),
('15496-4s', '5496-4', 'Faja short estraple color negro T= S', '6', 'S', 'Negro', 60000, 80000),
('15496-4xs', '5496-4', 'Faja short estraple color negro T= XS', '9', 'XS', 'Negro', 60000, 80000),
('15496-4xxs', '5496-4', 'Faja short estraple color negro T= XXS', '11', 'XXS', 'Negro', 60000, 80000),
('221577-1l', '21577-1', 'Faja espalda alta a la rodilla color caoba T= L', '9', 'L', 'Caoba', 90000, 110000),
('221577-1m', '21577-1', 'Faja espalda alta a la rodilla color caoba T= M', '8', 'M', 'Caoba', 90000, 110000),
('221577-1s', '21577-1', 'Faja espalda alta a la rodilla color caoba T= S', '5', 'S', 'Caoba', 80000, 100000),
('221577-1xl', '21577-1', 'Faja espalda alta a la rodilla color caoba  T= XL', '6', 'XL', 'Caoba', 90000, 110000),
('221577-1xs', '21577-1', 'Faja espalda alta a la rodilla color caoba T= XS', '10', 'XS', 'Caoba', 80000, 100000),
('221577-1xxs', '21577-1', 'Faja espalda alta a la rodilla color caoba T= XXS', '11', 'XXS', 'Caoba', 80000, 100000),
('221577-2l', '21577-2', 'Faja camiseta a la rodilla color caoba T= L', '8', 'L', 'Caoba', 90000, 110000),
('221577-2m', '21577-2', 'Faja camiseta a la rodilla color caoba T= M', '5', 'M', 'Caoba', 90000, 110000),
('221577-2s', '21577-2', 'Faja camiseta a la rodilla color caoba T= S', '4', 'S', 'Caoba', 80000, 100000),
('221577-2xl', '21577-2', 'Faja camiseta a la rodilla color caoba T= XL', '6', 'XL', 'Caoba', 90000, 110000),
('221577-2xs', '21577-2', 'Faja camiseta a la rodilla color caoba T= XS', '4', 'XS', 'Caoba', 80000, 100000),
('221577-3l', '21577-3', 'Faja con manga a la rodilla color caoba T= L', '6', 'L', 'Caoba', 100000, 120000),
('221577-3m', '21577-3', 'Faja con manga a la rodilla color caoba T= M', '9', 'M', 'Caoba', 100000, 120000),
('221577-3s', '21577-3', 'Faja con manga a la rodilla color caoba T= S', '4', 'S', 'Caoba', 90000, 110000),
('221577-3xl', '21577-3', 'Faja con manga a la rodilla color caoba T= XL', '5', 'XL', 'Caoba', 100000, 120000),
('221577-3xs', '21577-3', 'Faja con manga a la rodilla color caoba T= XS', '6', 'XS', 'Caoba', 90000, 110000),
('221577-4m', '21577-4', 'Faja estraple a la rodilla color caoba T= M', '8', 'M', 'Caoba', 90000, 110000),
('221577-4s', '21577-4', 'Faja estraple a la rodilla color caoba T= S', '7', 'S', 'Caoba', 80000, 100000),
('221577-4xs', '21577-4', 'Faja estraple a la rodilla color caoba T= XS', '5', 'XS', 'Caoba', 80000, 100000),
('221577-4xxs', '21577-4', 'Faja estraple a la rodilla color caoba T= XXS', '8', 'XXS', 'Caoba', 80000, 100000),
('25496-1l', '5496-1', 'Faja short espalda alta color caoba T= L', '8', 'L', 'Caoba', 70000, 90000),
('25496-1m', '5496-1', 'Faja short espalda alta color caoba T= M', '5', 'M', 'Caoba', 70000, 90000),
('25496-1s', '5496-1', 'Faja short espalda alta color caoba T= S', '6', 'S', 'Caoba', 60000, 80000),
('25496-1xl', '5496-1', 'Faja short espalda alta color caoba T= XL', '3', 'XL', 'Caoba', 70000, 90000),
('25496-1xs', '5496-1', 'Faja short espalda alta color caoba T= XS', '13', 'XS', 'Caoba', 60000, 80000),
('25496-1xxs', '5496-1', 'Faja short espalda alta color Caoba T= XXS', '8', 'XXS', 'Caoba', 60000, 80000),
('25496-2l', '5496-2', 'Faja short camiseta color caoba T= L', '8', 'L', 'Caoba', 70000, 90000),
('25496-2m', '5496-2', 'Faja short camiseta color caoba T= M', '6', 'M', 'Caoba', 70000, 90000),
('25496-2s', '5496-2', 'Faja short camiseta color caoba T= S', '9', 'S', 'Caoba', 60000, 80000),
('25496-2xl', '5496-2', 'Faja short camiseta color caoba T= XL', '3', 'XL', 'Caoba', 70000, 90000),
('25496-2xs', '5496-2', 'Faja short camiseta color caoba T= XS', '5', 'XS', 'Caoba', 60000, 80000),
('25496-3l', '5496-3', 'Faja short con manga color caoba T= L', '11', 'L', 'Caoba', 80000, 100000),
('25496-3m', '5496-3', 'Faja short con manga color caoba T= M', '5', 'M', 'Caoba', 80000, 100000),
('25496-3s', '5496-3', 'Faja short con manga color caoba T= S', '7', 'S', 'Caoba', 70000, 90000),
('25496-3xl', '5496-3', 'Faja short con manga color caoba T= XL', '0', 'XL', 'Caoba', 80000, 100000),
('25496-3xs', '5496-3', 'Faja short con manga color caoba T= XS', '6', 'XS', 'Caoba', 70000, 90000),
('25496-4m', '5496-4', 'Faja short estraple color caoba T= M', '11', 'M', 'Caoba', 70000, 90000),
('25496-4s', '5496-4', 'Faja short estraple color caoba T= S', '7', 'S', 'Caoba', 60000, 80000),
('25496-4xs', '5496-4', 'Faja short estraple color caoba T= XS', '15', 'XS', 'Caoba', 60000, 80000),
('25496-4xxs', '5496-4', 'Faja short estraple color caoba T= XXS', '11', 'XXS', 'Caoba', 60000, 80000),
('321577-1l', '21577-1', 'Faja espalda alta a la rodilla color piel T= L', '6', 'L', 'Piel', 90000, 110000),
('321577-1m', '21577-1', 'Faja espalda alta a la rodilla color piel T= M', '5', 'M', 'Piel', 90000, 110000),
('321577-1s', '21577-1', 'Faja espalda alta a la rodilla color piel T= S', '11', 'S', 'Piel', 80000, 100000),
('321577-1xl', '21577-1', 'Faja espalda alta a la rodilla color piel T= XL', '2', 'XL', 'Piel', 90000, 110000),
('321577-1xs', '21577-1', 'Faja espalda alta a la rodilla color piel T= XS', '3', 'XS', 'Piel', 80000, 100000),
('321577-1xxs', '21577-1', 'Faja espalda alta a la rodilla color piel T= XXS', '9', 'XXS', 'Piel', 80000, 100000),
('321577-2l', '21577-2', 'Faja camiseta a la rodilla color piel T= L', '3', 'L', 'Piel', 90000, 110000),
('321577-2m', '21577-2', 'Faja camiseta a la rodilla color piel T= M', '5', 'M', 'Piel', 90000, 110000),
('321577-2s', '21577-2', 'Faja camiseta a la rodilla color piel T= S', '8', 'S', 'Piel', 80000, 100000),
('321577-2xl', '21577-2', 'Faja camiseta a la rodilla color piel T= XL', '8', 'XL', 'Piel', 90000, 110000),
('321577-2xs', '21577-2', 'Faja camiseta a la rodilla color piel T= XS', '8', 'XS', 'Piel', 80000, 100000),
('321577-3l', '21577-3', 'Faja con manga a la rodilla color piel T= L', '8', 'L', 'Piel', 100000, 120000),
('321577-3m', '21577-3', 'Faja con manga a la rodilla color piel T= M', '4', 'M', 'Piel', 100000, 120000),
('321577-3s', '21577-3', 'Faja con manga a la rodilla color piel T= S', '6', 'S', 'Piel', 90000, 110000),
('321577-3xl', '21577-3', 'Faja con manga a la rodilla color piel T= XL', '8', 'XL', 'Piel', 100000, 120000),
('321577-3xs', '21577-3', 'Faja con manga a la rodilla color piel T= XS', '6', 'XS', 'Piel', 90000, 110000),
('321577-4m', '21577-4', 'Faja estraple a la rodilla color piel T= M', '8', 'M', 'Piel', 90000, 110000),
('321577-4s', '21577-4', 'Faja estraple a la rodilla color piel T= S', '11', 'S', 'Piel', 80000, 100000),
('321577-4xs', '21577-4', 'Faja estraple a la rodilla color piel T= XS', '8', 'XS', 'Piel', 80000, 100000),
('321577-4xxs', '21577-4', 'Faja estraple a la rodilla color piel T= XXS', '11', 'XXS', 'Piel', 80000, 100000),
('35496-1l', '5496-1', 'Faja short espalda alta color piel T= L', '7', 'L', 'Piel', 70000, 90000),
('35496-1m', '5496-1', 'Faja short espalda alta color piel T= M', '8', 'M', 'Piel', 70000, 90000),
('35496-1s', '5496-1', 'Faja short espalda alta color piel T= S', '7', 'S', 'Piel', 60000, 80000),
('35496-1xl', '5496-1', 'Faja short espalda alta color piel T= XL', '9', 'XL', 'Piel', 70000, 90000),
('35496-1xs', '5496-1', 'Faja short espalda alta color piel T= XS', '6', 'XS', 'Piel', 60000, 80000),
('35496-1xxs', '5496-1', 'Faja short espalda alta color piel T= XXS', '11', 'XXS', 'Piel', 60000, 80000),
('35496-2l', '5496-2', 'Faja short camiseta color piel T= L', '14', 'L', 'Piel', 70000, 90000),
('35496-2m', '5496-2', 'Faja short camiseta color piel T= M', '8', 'M', 'Piel', 70000, 90000),
('35496-2s', '5496-2', 'Faja short camiseta color piel T= S', '8', 'S', 'Piel', 60000, 80000),
('35496-2xl', '5496-2', 'Faja short camiseta color piel T= XL', '6', 'XL', 'Piel', 70000, 90000),
('35496-2xs', '5496-2', 'Faja short camiseta color piel T= XS', '4', 'XS', 'Piel', 60000, 80000),
('35496-3l', '5496-3', 'Faja short con manga color piel T= L', '3', 'L', 'Piel', 80000, 100000),
('35496-3m', '5496-3', 'Faja short con manga color piel T= M', '5', 'M', 'Piel', 80000, 100000),
('35496-3s', '5496-3', 'Faja short con manga color piel T= S', '7', 'S', 'Piel', 70000, 90000),
('35496-3xl', '5496-3', 'Faja short con manga color caoba T= XL', '1', 'XL', 'Piel', 80000, 100000),
('35496-3xs', '5496-3', 'Faja short con manga color piel T= XS', '10', 'XS', 'Piel', 70000, 90000),
('35496-4m', '5496-4', 'Faja short estraple color piel T= M', '14', 'M', 'Piel', 70000, 90000),
('35496-4s', '5496-4', 'Faja short estraple color piel T= S', '9', 'S', 'Piel', 60000, 80000),
('35496-4xs', '5496-4', 'Faja short estraple color piel T= XS', '6', 'XS', 'Piel', 60000, 80000),
('35496-4xxs', '5496-4', 'Faja short estraple color piel T= XXS', '12', 'XXS', 'Piel', 60000, 80000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Cedula` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Apellido1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Ciudad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Contrasena` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Cedula`, `Nombre`, `Apellido1`, `Apellido2`, `Email`, `Telefono`, `Direccion`, `Ciudad`, `Usuario`, `Contrasena`, `Tipo`, `salt`) VALUES
('10239201123', 'usuario', 'usuario', 'usuario', 'usuario@server.com', '3333333', 'calle x n x-xx', 'Fusagasuga', 'usuario', 'd9e94fd2b4c5522e5bb7996aa4df48a3f6b8f1b0c3e7fadb5fcc724e3ab6d85dc401b0a2789fe56c209b80e86102b218ff74ff8614f315599a180691846138b6bff9dbd31ee092db2fb0c659eaba629e', 'Usuario', 'bff9dbd31ee092db2fb0c659eaba629e'),
('1069750096', 'Administrador', 'administrador', '', 'administrador@server.com', '3333333', 'calle x n x - x', 'Fusagasuga', 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec9b2cdaa30b8b51bd6cf43d5c5c8d566d', 'Administrador', '9b2cdaa30b8b51bd6cf43d5c5c8d566d'),
('12345', 'Javier Andres', 'Valencia', 'Muñoz', 'javierandres222@gmail.com', '3134605663', 'Calle 23 # 1 este 19 Santa Barbara', 'Fusagasuga', 'jvalencia', '5c65d57cc7ea960024f887d67d664aabc3ed0774009f8060168c918071b35aed1016e09ff35edf948248d46ef3c91c46eec36acd801a578c3459d093b7edc92008056324f0ed2380a2a307002ef7fc5e', 'Administrador', '08056324f0ed2380a2a307002ef7fc5e'),
('2039102939', 'Mayerly', 'Muñoz', '', 'maye@h.com', '2330293884', 'Calle 2', 'Fusa', 'maye', '9737b2842b9004cd98568490f96eb5beb81206ace9b8bc6a227c9f7042b1474f89bf4753bde92b8a6d28c9f2638239fa38379c60e1801e0fe56fc1bebf9a30f4da8f6b90a7b0999407cdbb21c50bf177', 'Usuario', 'da8f6b90a7b0999407cdbb21c50bf177');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
