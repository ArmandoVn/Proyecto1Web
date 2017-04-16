-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2017 a las 01:44:11
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoweb1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `ls_name` varchar(30) NOT NULL,
  `ls_name2` varchar(30) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `user_Name` varchar(30) NOT NULL,
  `passw` varchar(30) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `name`, `ls_name`, `ls_name2`, `age`, `user_Name`, `passw`, `admin`) VALUES
(1, 'Armando', 'Valderrama', 'Navarro', 19, 'ArmandoVn', '123', 0),
(2, 'Pedro', 'Herrera', 'Renteria', 35, 'ElPedro', '890', 1),
(3, 'Roberto', 'Valderrama', 'Perez', 17, 'ElRobert', '321', 1),
(4, 'Armando', 'Valderrama', 'Herrera', 52, 'ElPadre', '678', 1),
(6, 'Karla Ivette', 'Valderrama', 'Navaro', 17, 'Karlis', '456', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
