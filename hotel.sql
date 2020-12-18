-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2020 a las 06:44:56
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `genero` char(1) DEFAULT NULL,
  `domicilio` varchar(20) DEFAULT NULL,
  `telefono` varchar(11) DEFAULT NULL,
  `foto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `dni`, `nombres`, `genero`, `domicilio`, `telefono`, `foto`) VALUES
(1, '1087203359', 'Jose Solis', 'M', 'Puente El Progreso', '3113268838', '1.jpg'),
(2, '1087201202', 'Stiven Enriquez', 'M', 'barranco', '3155038566', '2.jpg'),
(3, '1087201194', 'Menuel Eduardo', 'M', 'Puente las Flores', '312420678', '3.jpg'),
(4, '1087202142', 'Diana Carolina', 'F', 'Av.Los Estudiates', '3106140965', '4.jpg'),
(5, '1087205444', 'Maria Del mar', 'F', 'El Morro', '3156661223', '5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `codigof` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `formapago` varchar(11) NOT NULL,
  `entrada` datetime NOT NULL,
  `salida` datetime NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`codigof`, `Numero`, `cliente`, `formapago`, `entrada`, `salida`, `total`) VALUES
(101, 1, 1, '333', '2020-01-01 00:00:00', '2020-01-10 00:00:00', 500000),
(102, 2, 2, '333', '2020-01-01 00:00:00', '2020-01-20 00:00:00', 500000),
(103, 3, 3, '333', '2020-01-01 00:00:00', '2020-01-15 00:00:00', 500000),
(104, 4, 4, '333', '2020-01-01 00:00:00', '2020-01-18 00:00:00', 500000),
(105, 5, 5, '333', '2020-01-01 00:00:00', '2020-01-17 00:00:00', 500000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formapago`
--

CREATE TABLE `formapago` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `Numero` int(11) NOT NULL,
  `descripcion` varchar(225) NOT NULL,
  `Numcamas` int(11) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `precio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`Numero`, `descripcion`, `Numcamas`, `foto`, `precio_id`) VALUES
(1, 'sencilla', 2, '6.jpg', 50000),
(2, 'sencilla', 3, '7.jpg', 60000),
(3, 'sencilla', 4, '8.jpg', 70000),
(4, 'sencilla', 5, '9.jpg', 80000),
(5, 'sencilla', 6, '10.jpg', 90000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precio`
--

CREATE TABLE `precio` (
  `id` int(11) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `precio`
--

INSERT INTO `precio` (`id`, `Tipo`, `precio`) VALUES
(511, 'sencilla', 50000),
(512, 'doble', 60000),
(513, 'matrimonial', 70000),
(514, 'suite', 80000),
(515, 'sencilla', 90000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `entrada` datetime NOT NULL,
  `salida` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`codigof`),
  ADD UNIQUE KEY `cliente` (`cliente`),
  ADD KEY `numero` (`Numero`) USING BTREE,
  ADD KEY `formapago` (`formapago`) USING BTREE;

--
-- Indices de la tabla `formapago`
--
ALTER TABLE `formapago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`Numero`),
  ADD KEY `precio_id` (`precio_id`) USING BTREE;

--
-- Indices de la tabla `precio`
--
ALTER TABLE `precio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `precio` (`precio`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente` (`cliente`),
  ADD KEY `numero` (`numero`) USING BTREE;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`numero`) REFERENCES `habitacion` (`numero`) ON DELETE CASCADE;

--
-- Filtros para la tabla `formapago`
--
ALTER TABLE `formapago`
  ADD CONSTRAINT `formapago_ibfk_1` FOREIGN KEY (`id`) REFERENCES `factura` (`codigof`) ON DELETE CASCADE;

--
-- Filtros para la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD CONSTRAINT `habitacion_ibfk_1` FOREIGN KEY (`Numero`) REFERENCES `factura` (`numero`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `precio`
--
ALTER TABLE `precio`
  ADD CONSTRAINT `precio_ibfk_1` FOREIGN KEY (`precio`) REFERENCES `habitacion` (`precio_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`numero`) REFERENCES `habitacion` (`numero`) ON DELETE CASCADE,
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
