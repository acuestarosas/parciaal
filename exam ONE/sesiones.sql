-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2017 a las 05:55:37
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sesiones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienes`
--

CREATE TABLE `bienes` (
  `id_bienes` int(50) NOT NULL,
  `desripcion` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bienes`
--

INSERT INTO `bienes` (`id_bienes`, `desripcion`, `tipo`) VALUES
(1, 'ccomputador', 'tecnologia'),
(2, 'disco duro', 'tecnologia'),
(3, 'mouse', 'tecnologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(50) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `jefearea` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `id_cotizacion` int(50) NOT NULL,
  `fecha` datetime(6) NOT NULL,
  `id_responsable` int(50) NOT NULL,
  `id_solicitud` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion-bienes`
--

CREATE TABLE `cotizacion-bienes` (
  `cotizacion_id_cotizacion` int(50) NOT NULL,
  `bienes_id_bienes` int(50) NOT NULL,
  `cantidad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE `ingreso` (
  `id_ingreso` int(50) NOT NULL,
  `fecha_ingreso` varchar(45) NOT NULL,
  `id_Orden-Compra` int(50) NOT NULL,
  `cantidad` varchar(45) NOT NULL,
  `valor_total` varchar(45) NOT NULL,
  `id_bienes` int(50) NOT NULL,
  `id_proveedor` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_inventario` int(50) NOT NULL,
  `codigo_unico` varchar(45) DEFAULT NULL,
  `id_bienes` int(50) DEFAULT NULL,
  `ubicacion` varchar(45) DEFAULT NULL,
  `fecha_ingreso` varchar(45) DEFAULT NULL,
  `id_responsable` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_inventario`, `codigo_unico`, `id_bienes`, `ubicacion`, `fecha_ingreso`, `id_responsable`) VALUES
(1, '1', 1, 'bogota', '12-06-2017', 1),
(3, '4', 464, 'universidad', '2008-08-08', 8888),
(4, '4', 44444444, 'cuatro', '0004-04-04T04:04', 444444),
(5, '898', 89, 'bogota', '2018-07-07', 898);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `Rol_Seleccionado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `name`, `lastname`, `email`, `gender`, `password`, `Rol_Seleccionado`) VALUES
(20, 'nana', 'lopez', 'nana', 'Femenino', 'nana', 'Reading'),
(24, 'ocho', 'ocho', 'ocho', 'Masculino', 'ocho', 'Creation'),
(28, 'JUANA', 'LARA', 'JUANALARA', 'Femenino', 'LARITA', 'LOLO'),
(29, 'juan', 'juan', 'juan', 'Masculino', 'juan', 'juan'),
(30, 'ANA', 'ANA', 'ANA', 'Femenino', 'ANA', 'Elimination'),
(31, '', '', '', '', '', ''),
(32, '', '', '', '', '', ''),
(33, '', '', '', '', '', ''),
(34, 'MARY', 'MARY', 'MARY', 'Femenino', 'MARY', 'Creation');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordencompra`
--

CREATE TABLE `ordencompra` (
  `id_ordencompra` int(50) NOT NULL,
  `id_proveedor` int(50) NOT NULL,
  `id_bienes` int(50) NOT NULL,
  `aprobado` tinyint(1) NOT NULL,
  `id_cotizacion` int(50) NOT NULL,
  `id_responsable` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(50) NOT NULL,
  `nro_orden` varchar(45) NOT NULL,
  `ruc` int(11) NOT NULL,
  `razon_social` varchar(253) NOT NULL,
  `fecha_orden` datetime(6) NOT NULL,
  `monto_total` int(11) NOT NULL,
  `fecha_entrega` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nro_orden`, `ruc`, `razon_social`, `fecha_orden`, `monto_total`, `fecha_entrega`) VALUES
(2, '2', 2, '2', '0000-00-00 00:00:00.000000', 2, '0000-00-00'),
(3, '33', 333, 'universidad', '0009-06-04 18:07:00.000000', 100000000, '0008-05-06'),
(4, '4', 23, 'web', '0000-00-00 00:00:00.000000', 50, '0000-00-00'),
(5, '5', 12345, 'corporacion', '2017-08-12 06:00:00.000000', 100, '2017-08-14'),
(7, '56', 0, 'gigi', '0005-05-05 05:05:00.000000', 555, '0000-00-00'),
(8, '687', 7686, 'blbblbl', '0006-07-06 21:08:00.000000', 69868, '0006-08-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable`
--

CREATE TABLE `responsable` (
  `id_responsable` int(50) NOT NULL,
  `dni` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `id_cargo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` int(50) NOT NULL,
  `fecha` datetime(6) NOT NULL,
  `id_responsable` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud-bienes`
--

CREATE TABLE `solicitud-bienes` (
  `id_solicitud-bienes` int(50) NOT NULL,
  `id_solicitud` int(50) NOT NULL,
  `id_bienes` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bienes`
--
ALTER TABLE `bienes`
  ADD PRIMARY KEY (`id_bienes`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`id_cotizacion`),
  ADD KEY `id_responsable` (`id_responsable`),
  ADD KEY `id_solicitud` (`id_solicitud`);

--
-- Indices de la tabla `cotizacion-bienes`
--
ALTER TABLE `cotizacion-bienes`
  ADD KEY `bienes_id_bienes` (`bienes_id_bienes`),
  ADD KEY `cotizacion_id_cotizacion` (`cotizacion_id_cotizacion`);

--
-- Indices de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD PRIMARY KEY (`id_ingreso`),
  ADD KEY `id_bienes` (`id_bienes`),
  ADD KEY `id_bienes_2` (`id_bienes`),
  ADD KEY `id_proveedor` (`id_proveedor`),
  ADD KEY `id_Orden-Compra` (`id_Orden-Compra`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_inventario`),
  ADD KEY `id_responsable` (`id_responsable`),
  ADD KEY `id_bienes` (`id_bienes`),
  ADD KEY `id_bienes_2` (`id_bienes`),
  ADD KEY `id_bienes_3` (`id_bienes`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `name` (`name`);

--
-- Indices de la tabla `ordencompra`
--
ALTER TABLE `ordencompra`
  ADD PRIMARY KEY (`id_ordencompra`),
  ADD KEY `id_responsable` (`id_responsable`),
  ADD KEY `id_cotizacion` (`id_cotizacion`),
  ADD KEY `id_bienes` (`id_bienes`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`id_responsable`),
  ADD KEY `id_cargo` (`id_cargo`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `id_responsable` (`id_responsable`);

--
-- Indices de la tabla `solicitud-bienes`
--
ALTER TABLE `solicitud-bienes`
  ADD PRIMARY KEY (`id_solicitud-bienes`),
  ADD KEY `id_solicitud` (`id_solicitud`),
  ADD KEY `id_bienes` (`id_bienes`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bienes`
--
ALTER TABLE `bienes`
  MODIFY `id_bienes` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `id_ingreso` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_inventario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `responsable`
--
ALTER TABLE `responsable`
  MODIFY `id_responsable` int(50) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `cotizacion_ibfk_1` FOREIGN KEY (`id_responsable`) REFERENCES `responsable` (`id_responsable`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cotizacion_ibfk_2` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud` (`id_solicitud`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cotizacion-bienes`
--
ALTER TABLE `cotizacion-bienes`
  ADD CONSTRAINT `cotizacion-bienes_ibfk_1` FOREIGN KEY (`cotizacion_id_cotizacion`) REFERENCES `cotizacion` (`id_cotizacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cotizacion-bienes_ibfk_2` FOREIGN KEY (`bienes_id_bienes`) REFERENCES `bienes` (`id_bienes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD CONSTRAINT `ingreso_ibfk_1` FOREIGN KEY (`id_bienes`) REFERENCES `bienes` (`id_bienes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ingreso_ibfk_2` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ingreso_ibfk_3` FOREIGN KEY (`id_Orden-Compra`) REFERENCES `ordencompra` (`id_ordencompra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ordencompra`
--
ALTER TABLE `ordencompra`
  ADD CONSTRAINT `ordencompra_ibfk_1` FOREIGN KEY (`id_responsable`) REFERENCES `responsable` (`id_responsable`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ordencompra_ibfk_2` FOREIGN KEY (`id_cotizacion`) REFERENCES `cotizacion` (`id_cotizacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ordencompra_ibfk_3` FOREIGN KEY (`id_bienes`) REFERENCES `bienes` (`id_bienes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ordencompra_ibfk_4` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `responsable`
--
ALTER TABLE `responsable`
  ADD CONSTRAINT `responsable_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `responsable_ibfk_2` FOREIGN KEY (`id_responsable`) REFERENCES `login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`id_responsable`) REFERENCES `responsable` (`id_responsable`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `solicitud-bienes`
--
ALTER TABLE `solicitud-bienes`
  ADD CONSTRAINT `solicitud-bienes_ibfk_1` FOREIGN KEY (`id_bienes`) REFERENCES `bienes` (`id_bienes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `solicitud-bienes_ibfk_2` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud` (`id_solicitud`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
