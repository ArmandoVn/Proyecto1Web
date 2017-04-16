-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2017 a las 01:43:24
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
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id_prod` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(7) NOT NULL,
  `description` varchar(150) NOT NULL,
  `cant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id_prod`, `name`, `price`, `description`, `cant`) VALUES
(2, 'Asus GeForce GTX 1080 TI', '12499', 'Rendimiento único Ultra HD, soló con la nueva tarjeta gráfica de Asus.', 20),
(3, 'Asus Zenfone 3 Max', '4599', 'Máxima batería, Belleza metálica con el nuevo celular de Asus.', 10),
(4, 'Hola', '123', 'Prueba', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_prod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
