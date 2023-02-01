-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-11-2022 a las 19:53:29
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `intranet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `IdPermisos` int NOT NULL,
  `Gerencias` varchar(500) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`IdPermisos`, `Gerencias`) VALUES
(1, 'GTIC'),
(2, 'Administración'),
(3, 'Presupuesto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuarios` int NOT NULL,
  `NombreCompleto` varchar(500) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Usuarios` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Clave` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Fecha` datetime NOT NULL,
  `IdPermisos` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuarios`, `NombreCompleto`, `Usuarios`, `email`, `Clave`, `Fecha`, `IdPermisos`) VALUES
(2, 'Amanda Garcia', 'agarcia', 'agarcia@gmail.com', '123456', '2022-11-14 18:20:28', 1),
(3, 'codecyt', 'codecyt', 'codecyt@codecyt.gob.ve', '123456', '2022-11-14 16:01:43', 2),
(4, 'yorly verenzuela', 'yorly', 'yverenzuela@codecyt.gob.ve', '123456', '2022-11-17 12:42:43', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`IdPermisos`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuarios`,`IdPermisos`),
  ADD UNIQUE KEY `Usuario` (`Usuarios`,`email`),
  ADD KEY `IXFK_usuario_permisos` (`IdPermisos`),
  ADD KEY `IXFK_usuario_permisos_02` (`IdPermisos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `IdPermisos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuarios` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_usuario_permisos` FOREIGN KEY (`IdPermisos`) REFERENCES `permisos` (`IdPermisos`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
