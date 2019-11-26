-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2019 a las 08:41:42
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidente`
--

CREATE TABLE `incidente` (
  `id_incidente` int(11) NOT NULL,
  `id_tipo_de_incidente` int(11) NOT NULL,
  `id_sector` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `incidente`
--

INSERT INTO `incidente` (`id_incidente`, `id_tipo_de_incidente`, `id_sector`, `id_usuario`, `fecha`, `estado`) VALUES
(1, 1, 1, 1, '2019-11-25', 'A'),
(2, 2, 1, 1, '2019-11-25', 'A'),
(3, 1, 4, 1, '2019-11-25', 'A'),
(4, 2, 3, 1, '2019-11-25', 'A'),
(5, 2, 3, 1, '2019-11-25', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id_municipio` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id_municipio`, `nombre`, `id_provincia`, `estado`) VALUES
(1, 'Tamboril', 1, 'A'),
(2, 'San Jose de las Matas', 1, 'A'),
(3, 'Concepcion de La Vega', 19, 'A'),
(4, 'Jarabacoa', 19, 'A'),
(5, 'Bonao', 6, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `id_provincia` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id_provincia`, `nombre`, `estado`) VALUES
(1, 'Santiago', 'A'),
(2, 'Santiago Rodriguez', 'A'),
(3, 'ValVerde', 'A'),
(4, 'San Juan', 'A'),
(5, 'Santo Domingo', 'A'),
(6, 'Sanchez Ramirez', 'A'),
(7, 'San Pedro de Macoris', 'A'),
(8, 'Monte Cristi', 'A'),
(9, 'Puerto Plata', 'A'),
(10, 'Dajabon', 'A'),
(11, 'Espaillat', 'A'),
(12, 'Hermanas M.', 'A'),
(13, 'Bahoruco', 'A'),
(14, 'Barahona', 'A'),
(15, 'Independencia', 'A'),
(16, 'Elias Piña', 'A'),
(17, 'Pedernales', 'A'),
(18, 'Azua', 'A'),
(19, 'La Vega', 'A'),
(20, 'Monseñor Nouel', 'A'),
(21, 'Peravia', 'A'),
(22, 'San Jose de Ocoa', 'A'),
(23, 'Duarte', 'A'),
(24, 'Hato Mayor', 'A'),
(25, 'Monte Plata', 'A'),
(26, 'Maria Trinidad S.', 'A'),
(27, 'Samana', 'A'),
(28, 'San Cristobal', 'A'),
(29, 'Distrito Nacional', 'A'),
(30, 'El Seibo', 'A'),
(31, 'La Altagracia', 'A'),
(32, 'Romana', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector`
--

CREATE TABLE `sector` (
  `id_sector` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sector`
--

INSERT INTO `sector` (`id_sector`, `nombre`, `id_municipio`, `estado`) VALUES
(1, 'Haina', 1, 'A'),
(2, 'Boca de Licey', 1, 'A'),
(3, 'La Colonia', 4, 'A'),
(4, 'Villa Rosa', 3, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_incidente`
--

CREATE TABLE `tipos_incidente` (
  `id_tipos_incidente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos_incidente`
--

INSERT INTO `tipos_incidente` (`id_tipos_incidente`, `nombre`, `descripcion`, `estado`) VALUES
(1, 'Intoxicacion etilica', 'Se conoce como intoxicaciÃ³n etÃ­lica al aumento d', 'A'),
(2, 'Infarto cardiaco', 'El infarto de miocardio es una patologÃ­a que se c', 'A'),
(3, 'Hipotermia', 'Hipotermia es el descenso involuntario de la tempe', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `administrador` char(3) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`, `nombre_usuario`, `contrasena`, `administrador`, `estado`) VALUES
(1, 'admin', 'admin', '8095731234', 'La Vega', 'admin@gmail.com', 'admin', 'admin', 'ADM', 'I'),
(2, 'Louis', 'Torres', '8092421122', 'La Vega', 'lou@gmail.com', 'regular', 'regular', 'REG', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `incidente`
--
ALTER TABLE `incidente`
  ADD PRIMARY KEY (`id_incidente`),
  ADD KEY `id_tipo_incidente` (`id_tipo_de_incidente`),
  ADD KEY `id_sector` (`id_sector`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id_municipio`),
  ADD KEY `id_provincia` (`id_provincia`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id_provincia`);

--
-- Indices de la tabla `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id_sector`),
  ADD KEY `id_municipio` (`id_municipio`);

--
-- Indices de la tabla `tipos_incidente`
--
ALTER TABLE `tipos_incidente`
  ADD PRIMARY KEY (`id_tipos_incidente`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `incidente`
--
ALTER TABLE `incidente`
  MODIFY `id_incidente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id_provincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `sector`
--
ALTER TABLE `sector`
  MODIFY `id_sector` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipos_incidente`
--
ALTER TABLE `tipos_incidente`
  MODIFY `id_tipos_incidente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `incidente`
--
ALTER TABLE `incidente`
  ADD CONSTRAINT `incidente_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `incidente_ibfk_2` FOREIGN KEY (`id_tipo_de_incidente`) REFERENCES `tipos_incidente` (`id_tipos_incidente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `incidente_ibfk_3` FOREIGN KEY (`id_sector`) REFERENCES `sector` (`id_sector`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `municipio_ibfk_1` FOREIGN KEY (`id_provincia`) REFERENCES `provincia` (`id_provincia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sector`
--
ALTER TABLE `sector`
  ADD CONSTRAINT `sector_ibfk_1` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id_municipio`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
