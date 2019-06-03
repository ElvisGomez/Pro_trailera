-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2019 a las 22:23:59
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `latrailera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_Cliente` int(11) NOT NULL,
  `nombre_Cliente` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_Cliente` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_Cliente` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_Cliente` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat_Cliente` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Long_Cliente` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_Cliente`, `nombre_Cliente`, `telefono_Cliente`, `email_Cliente`, `direccion_Cliente`, `lat_Cliente`, `Long_Cliente`) VALUES
(1, 'Exporsalva', '2563-8965', 'exporsalvasv@gmail.com', 'Lourdes Colon ', '13.72377', '-89.36942'),
(2, 'Pizza Hut ', '2541-8596', 'mejorpizza@gmail,com', 'Lourdes Colon,Villa Lourdes', '20.29393', '-103.20252'),
(3, 'Hilasal', '2145-8596', 'hilasal.textiles@gmail.com', 'San Juan Opico', '13.87356', '-89.35918');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `id_detalle_Factura` int(11) NOT NULL,
  `id_ruta` int(11) NOT NULL,
  `id_factura` int(11) NOT NULL,
  `subtotal` float NOT NULL,
  `iva` float NOT NULL,
  `totalP` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_Factura` int(11) NOT NULL,
  `id_Cliente` int(11) NOT NULL,
  `fecha_factura` date NOT NULL,
  `num_factura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motorista`
--

CREATE TABLE `motorista` (
  `id_Motorista` int(11) NOT NULL,
  `nombre_motorista` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_motorista` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dui_motorista` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_motorista` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_motorista` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero_motorista` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo_motorista` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `motorista`
--

INSERT INTO `motorista` (`id_Motorista`, `nombre_motorista`, `apellido_motorista`, `dui_motorista`, `telefono_motorista`, `direccion_motorista`, `genero_motorista`, `correo_motorista`) VALUES
(1, 'Carlos Isaac', 'Dominguez Flores', '74859632-8', '7485-9685', 'Dubai', 'Masculino', 'carlosisaacdomi@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_Rol` int(11) NOT NULL,
  `nombre_Rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_Rol`, `nombre_Rol`) VALUES
(1, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta`
--

CREATE TABLE `ruta` (
  `id_Ruta` int(11) NOT NULL,
  `id_Vehiculo` int(11) NOT NULL,
  `id_Cliente` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` float NOT NULL,
  `my_lat` float NOT NULL,
  `my_longi` float NOT NULL,
  `l_salida` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_llegada` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kilometraje` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrasena` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `usuario`, `contrasena`, `correo`, `id_rol`) VALUES
(1, 'Cristian Arturo', 'Hernandez Flores', 'admin', '8cb2237d0679ca88db6464eac60da96345513964', 'arturo.hernandez.hilasal@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id_Vehiculo` int(11) NOT NULL,
  `marca` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap_carga` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_motorista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id_Vehiculo`, `marca`, `modelo`, `placa`, `cap_carga`, `id_motorista`) VALUES
(1, 'Toyota', 'Deu23', 'P345-349', '31000', 1),
(3, 'Kenworth', 'T680', 'P354-456', '33000', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_Cliente`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`id_detalle_Factura`),
  ADD KEY `fk_id_detalle_id_factura` (`id_factura`),
  ADD KEY `fk_id_detalle_id_ruta` (`id_ruta`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_Factura`),
  ADD KEY `fk_id_factura_id_cliente` (`id_Cliente`);

--
-- Indices de la tabla `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`id_Motorista`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_Rol`);

--
-- Indices de la tabla `ruta`
--
ALTER TABLE `ruta`
  ADD PRIMARY KEY (`id_Ruta`),
  ADD KEY `fk_id_ruta_id_vehiculo` (`id_Vehiculo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_usuario_rol` (`id_rol`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id_Vehiculo`),
  ADD KEY `fk_morista_auto` (`id_motorista`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  MODIFY `id_detalle_Factura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_Factura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `motorista`
--
ALTER TABLE `motorista`
  MODIFY `id_Motorista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_Rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ruta`
--
ALTER TABLE `ruta`
  MODIFY `id_Ruta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id_Vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `fk_id_detalle_id_factura` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_Factura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_detalle_id_ruta` FOREIGN KEY (`id_ruta`) REFERENCES `ruta` (`id_Ruta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `fk_id_factura_id_cliente` FOREIGN KEY (`id_Cliente`) REFERENCES `cliente` (`id_Cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ruta`
--
ALTER TABLE `ruta`
  ADD CONSTRAINT `fk_id_ruta_id_vehiculo` FOREIGN KEY (`id_Vehiculo`) REFERENCES `vehiculo` (`id_Vehiculo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_Rol`);

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `fk_morista_auto` FOREIGN KEY (`id_motorista`) REFERENCES `motorista` (`id_Motorista`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
