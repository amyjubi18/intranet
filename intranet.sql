-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-01-2023 a las 20:06:39
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
-- Estructura de tabla para la tabla `adquisicion`
--

CREATE TABLE `adquisicion` (
  `IdAdquision` int NOT NULL,
  `Formadeadquisicion` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `adquisicion`
--

INSERT INTO `adquisicion` (`IdAdquision`, `Formadeadquisicion`) VALUES
(1, 'Donación'),
(2, 'Compra'),
(3, 'Custodia del Bien'),
(4, 'Transferencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE `archivo` (
  `IdArchivo` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ruta` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `size` int NOT NULL,
  `fecha` date NOT NULL,
  `IdCategoria` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `archivo`
--

INSERT INTO `archivo` (`IdArchivo`, `name`, `description`, `ruta`, `tipo`, `size`, `fecha`, `IdCategoria`) VALUES
(61, 'ivan', 'gari', 'Kevin-Garcia-...-Esofagograma.pdf', 'application/pdf', 109232, '2022-12-11', 6),
(62, '3214656', 'uno', 'diploma-frontend-developer.pdf', 'application/pdf', 451461, '2022-12-24', 5),
(63, '12345585', 'comida', 'ENCUESTA-DE-SATISFACCIÓN-DEL-SERVICIO-DEL-COMEDOR-DICIEMBRE-2022.pdf', 'application/pdf', 418951, '2023-01-22', 4),
(64, 'amanda', 'cv juan', 'coordenadasBDV.pdf', 'application/pdf', 124322, '2023-01-08', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `IdCategoria` int NOT NULL,
  `Categoria` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`IdCategoria`, `Categoria`) VALUES
(4, 'nomina'),
(5, 'banco de venezuela'),
(6, 'recibos'),
(7, 'contraloria'),
(8, 'pepito'),
(9, 'auditoria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadodelbien`
--

CREATE TABLE `estadodelbien` (
  `IdEstado` int NOT NULL,
  `Estado` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `estadodelbien`
--

INSERT INTO `estadodelbien` (`IdEstado`, `Estado`) VALUES
(1, 'Activo'),
(2, 'Inactivo'),
(3, 'Desincorporado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `IdInventario` int NOT NULL,
  `Codigo` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `IdPermisos` int NOT NULL,
  `NFactura` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `VAdquisicion` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `IdMoneda` int NOT NULL,
  `IdEstado` int NOT NULL,
  `Marca` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `IdCateG` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `IdSede` int NOT NULL,
  `Sede` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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
(6, 'amanda garcia', 'agarcia', 'amygarcia@gmail.com', '12345678', '2022-11-22 16:31:25', 3),
(8, 'garcia', 'codecyt', 'gft8@hexud.com', '123456', '2022-11-24 10:39:40', 2),
(9, 'aaron', 'aaron', 'aaron@gmail.com', '123456', '2022-12-01 09:07:54', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adquisicion`
--
ALTER TABLE `adquisicion`
  ADD PRIMARY KEY (`IdAdquision`);

--
-- Indices de la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD PRIMARY KEY (`IdArchivo`),
  ADD UNIQUE KEY `ruta` (`ruta`),
  ADD KEY `IdCategoria` (`IdCategoria`),
  ADD KEY `name` (`name`),
  ADD KEY `description` (`description`),
  ADD KEY `ruta_2` (`ruta`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`IdCategoria`);

--
-- Indices de la tabla `estadodelbien`
--
ALTER TABLE `estadodelbien`
  ADD PRIMARY KEY (`IdEstado`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`IdInventario`),
  ADD KEY `IdPermisos` (`IdPermisos`),
  ADD KEY `IdMoneda` (`IdMoneda`),
  ADD KEY `IdEstado` (`IdEstado`),
  ADD KEY `IdCateG` (`IdCateG`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`IdPermisos`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`IdSede`);

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
-- AUTO_INCREMENT de la tabla `adquisicion`
--
ALTER TABLE `adquisicion`
  MODIFY `IdAdquision` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `archivo`
--
ALTER TABLE `archivo`
  MODIFY `IdArchivo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `IdCategoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `estadodelbien`
--
ALTER TABLE `estadodelbien`
  MODIFY `IdEstado` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `IdInventario` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `IdPermisos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `IdSede` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuarios` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD CONSTRAINT `archivo_ibfk_1` FOREIGN KEY (`IdCategoria`) REFERENCES `categoria` (`IdCategoria`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_usuario_permisos` FOREIGN KEY (`IdPermisos`) REFERENCES `permisos` (`IdPermisos`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
