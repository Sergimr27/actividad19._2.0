-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2022 a las 23:13:55
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_actividades`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_actividad`
--

CREATE TABLE `tbl_actividad` (
  `descripcion` text DEFAULT NULL,
  `imagen` varchar(30) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `topics` text DEFAULT NULL,
  `id_act` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `usuario_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_actividad`
--

INSERT INTO `tbl_actividad` (`descripcion`, `imagen`, `autor`, `topics`, `id_act`, `titulo`, `usuario_fk`) VALUES
('hola', '5029cc19b1b0b10a3a545485a0289.', 'LPD', 'Furbol', 10, 'LPD', 0),
('eeeeeeee', '5029cc19b1b0b10a3a545485a0289.', 'LPD', 'Furbol', 11, 'LPD2', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_usuario`, `nombre_usuario`, `password`, `email`) VALUES
(1, 'LPD', '12345', 'lpd@gmail.com'),
(2, 'Sergi', '12345', 'sergi@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_actividad`
--
ALTER TABLE `tbl_actividad`
  ADD PRIMARY KEY (`id_act`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_actividad`
--
ALTER TABLE `tbl_actividad`
  MODIFY `id_act` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
