-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2023 a las 08:11:56
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*use juventud_bd;*/

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `juventud_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `numeroAgenda` varchar(15) NOT NULL,
  `solicitante` varchar(30) NOT NULL,
  `lugar` varchar(30) NOT NULL,
  `fechaSolicitud` date NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id`, `numeroAgenda`, `solicitante`, `lugar`, `fechaSolicitud`, `estado`) VALUES
(4, 'CHARLAS-BRG-000', 'Director DGI', 'Chinandega', '2023-07-14', 'Aprobado'),
(6, 'VRN-0002', 'Colegio Buen Pastor', 'Managua', '2023-07-06', 'Aprobado'),
(7, '005-REC', 'Mario Martinez', 'Unan Managua', '2023-07-29', 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brigada`
--

CREATE TABLE `brigada` (
  `idBrigada` int(11) NOT NULL,
  `numeroBrigada` varchar(15) NOT NULL,
  `nombreB` varchar(50) NOT NULL,
  `encargado` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `tipoBrigadda` varchar(50) NOT NULL,
  `agendaId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `brigada`
--

INSERT INTO `brigada` (`idBrigada`, `numeroBrigada`, `nombreB`, `encargado`, `fecha`, `tipoBrigadda`, `agendaId`) VALUES
(15, '0002-ESCOLAR', 'Escuela Sana', 'John Martinez', '2023-07-06', 'ESCOLAR', 4),
(16, '0001-VERANO', 'Verano 2023', 'Josue Solano', '2023-07-22', 'Plan verano', 6),
(17, '007-RECOLECTA', 'Recolecta para discapacitados', 'Jorge Matamoros', '2023-07-31', 'Recolecta', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `rolId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `rol`, `rolId`) VALUES
(1, 'Administrador', 1),
(2, 'Voluntario', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` int(11) NOT NULL,
  `voluntarioId` int(11) NOT NULL,
  `brigadaId` int(11) NOT NULL,
  `horas` int(11) NOT NULL CHECK (`horas` > 0),
  `fechaServicio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `voluntarioId`, `brigadaId`, `horas`, `fechaServicio`) VALUES
(19, 1, 15, 3, '2023-07-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `rolId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `userName`, `nombre`, `contraseña`, `correo`, `rolId`) VALUES
(1, 'Kmembreño', 'Karen Membreño', 'kml%2023', 'kmembreño@gmail.com', 1),
(2, 'EvelingM', 'Eveling Martinez', 'em$#2023', 'emartinez@gmail.com', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntario`
--

CREATE TABLE `voluntario` (
  `idVoluntario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `cedula` varchar(16) NOT NULL,
  `genero` char(1) NOT NULL,
  `dirreccion` varchar(100) NOT NULL,
  `telefono` int(8) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `fechaIngreso` date NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `voluntario`
--

INSERT INTO `voluntario` (`idVoluntario`, `nombre`, `cedula`, `genero`, `dirreccion`, `telefono`, `correo`, `fechaIngreso`, `estado`) VALUES
(1, 'Dominick Romero', '121-040415-1548S', 'M', 'villa canada anden 9', 74897456, 'Ddavila@hormail.com', '2023-07-14', 'Activo'),
(8, 'Romero Flores', '001-050900-1083P', 'M', 'Vista xolotlan', 84896816, 'Romflores@gmail.com', '2022-09-05', 'Activo'),
(15, 'Johan', 'FGFDG', 'F', 'fgf', 65465464, 'asdafdsf@htoml.com', '2023-07-05', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `brigada`
--
ALTER TABLE `brigada`
  ADD PRIMARY KEY (`idBrigada`),
  ADD KEY `fk_agendaId` (`agendaId`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_voluntarioId` (`voluntarioId`),
  ADD KEY `fk_idBrigada` (`brigadaId`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD UNIQUE KEY `contraseña` (`contraseña`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `fk_rolId` (`rolId`);

--
-- Indices de la tabla `voluntario`
--
ALTER TABLE `voluntario`
  ADD PRIMARY KEY (`idVoluntario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `brigada`
--
ALTER TABLE `brigada`
  MODIFY `idBrigada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `voluntario`
--
ALTER TABLE `voluntario`
  MODIFY `idVoluntario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `brigada`
--
ALTER TABLE `brigada`
  ADD CONSTRAINT `fk_agendaId` FOREIGN KEY (`agendaId`) REFERENCES `agenda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `fk_brigadaId` FOREIGN KEY (`brigadaId`) REFERENCES `brigada` (`idBrigada`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idBrigada` FOREIGN KEY (`brigadaId`) REFERENCES `brigada` (`idBrigada`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_voluntarioId` FOREIGN KEY (`voluntarioId`) REFERENCES `voluntario` (`idVoluntario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_rolId` FOREIGN KEY (`rolId`) REFERENCES `rol` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
