-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2019 a las 18:22:46
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `identct` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `ruta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`identct`, `name`, `description`, `ruta`) VALUES
('Bebidas', 'Bebidas', 'Todos los productos en Gaseosas (Postobon, Coca Cola),Jugos en Agua, Leche, Sodas Saborizadas y Mucho Más...', 'uploads/bebidascategoria.jpg'),
('Carnes', 'Carnes', 'Toda Clase de Deliciosas Carnes y Preparaciones Inigualables...', 'uploads/carnescategoria.jpg'),
('Mariscos', 'Mariscos', 'Toda Clase de Deliciosos Mariscos y Preparaciones Inigualables.', 'uploads/mariscoscategoria.jpg'),
('Pescados', 'Pescados', 'Toda Clase de Deliciosos Pescados y Preparaciones Inigualables.', 'uploads/pescadoscategoria.jpg'),
('Postres', 'Postres', 'Deliciosos Postres', 'uploads/postrescategoria1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `codmenu` varchar(20) NOT NULL,
  `entrada` varchar(200) NOT NULL,
  `platofuerte` varchar(200) NOT NULL,
  `postre` varchar(200) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`codmenu`, `entrada`, `platofuerte`, `postre`, `fecha`) VALUES
('  98012764', 'postre oreo', '', '', '2019-11-06'),
(' 654', 'postre oreo', 'postre oreo', 'postre oreo', '2019-11-05'),
(' 654654', 'postre oreo', '', '', '2019-11-06'),
(' 9801', 'Trucha', 'Tilapia Roja', 'Trucha', '2019-11-05'),
(' 980127', 'postre oreo', '', '', '2019-11-19'),
('12345', 'postre oreo', 'postre oreo', 'postre oreo', '2019-11-06'),
('564564', 'postre oreo', 'postre oreo', 'postre oreo', '2019-11-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `identpr` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `desc` varchar(500) NOT NULL,
  `identtp` varchar(100) NOT NULL,
  `identct` varchar(20) NOT NULL,
  `value` int(11) NOT NULL,
  `ruta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`identpr`, `name`, `desc`, `identtp`, `identct`, `value`, `ruta`) VALUES
(' 768', 'chocorramo', 'delicioso chocorramo', '', 'Postres', 1300, 'uploads/chocorramo_0.jpg'),
('0150', 'Salchipapa', 'Salchipapa con mucha salsa', '', 'Postres', 2500, 'uploads/papa.jpg'),
('1234750', 'Pastas a la boloñesa', 'Pastas a la boñesa', '', 'Bebidas', 20000, 'uploads/descarga11.jfif'),
('980127', 'Gaseosa', 'Coca-cola 200ml', '', 'Bebidas', 2000, 'uploads/cola_cola.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typeproduct`
--

CREATE TABLE `typeproduct` (
  `identtp` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `typeproduct`
--

INSERT INTO `typeproduct` (`identtp`, `name`) VALUES
('Entrada', 'Entrada'),
('Plato Fuerte', 'Plato Fuerte'),
('Postre', 'Postre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ident` varchar(12) NOT NULL,
  `tipeuser` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ident`, `tipeuser`, `email`, `password`) VALUES
('11445566', 'gerente', 'gerente3@prueba.com', 'dc01500c35540a619247ab511ec214e3'),
('123456', 'gerente', 'gerente2@prueba.com', 'e10adc3949ba59abbe56e057f20f883e'),
('23432432', 'qkjdaskldj', 'alskjdlaksjd@gmail.com', '3f671fa18e8f1df3866f4aa776b073d7'),
('2345678', 'gerente', 'gerente1@prueba.com', 'b3275960d68fda9d831facc0426c3bbc'),
('4748548', 'jkdshf', 'kjsdfhskjdfhs@gmail.com', '3f671fa18e8f1df3866f4aa776b073d7'),
('678912', 'mesero', 'sarasv@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`identct`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`codmenu`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`identpr`);

--
-- Indices de la tabla `typeproduct`
--
ALTER TABLE `typeproduct`
  ADD PRIMARY KEY (`identtp`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ident`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
