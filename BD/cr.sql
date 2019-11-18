-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2019 a las 13:42:41
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
  `id_incidente` int(11) NOT NULL COMMENT 'Clave unica de registro de  incidente',
  `id_tipo_de_incidente` int(11) NOT NULL COMMENT 'Especificacion del incidente',
  `id_sector` int(11) NOT NULL COMMENT 'Localidad del incidente',
  `id_usuario` int(11) NOT NULL COMMENT 'Usuario que registro el incidente',
  `fecha` date NOT NULL COMMENT 'Fecha en que ocurrio el incidente',
  `estado` char(1) NOT NULL COMMENT 'Control de actividad o inactividad'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id_municipio` int(11) NOT NULL COMMENT 'Clave unica de registro de municipio',
  `nombre` varchar(50) NOT NULL COMMENT 'Nombre del municipio',
  `id_provincia` int(11) NOT NULL COMMENT 'provincia a la que pertenece',
  `estado` char(1) NOT NULL COMMENT 'Control de actividad o inactividad'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id_municipio`, `nombre`, `id_provincia`, `estado`) VALUES
(1, 'Tamboril', 2, 'A'),
(2, 'Jarabacoa', 1, 'A'),
(3, 'El Valle', 4, 'A'),
(4, 'Concepcion de La Vega', 1, 'A'),
(5, 'Bonao', 7, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `id_provincia` int(11) NOT NULL COMMENT 'Clave unica de registro de provincia',
  `nombre` varchar(50) NOT NULL COMMENT 'Nombre de la provincia',
  `estado` char(1) NOT NULL COMMENT 'Control de actividad o inactividad'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id_provincia`, `nombre`, `estado`) VALUES
(1, 'La Vega', 'I'),
(2, 'Santiago', 'A'),
(3, 'Puerto Plata', 'A'),
(4, 'Hato Mayor', 'A'),
(5, 'San juan', 'A'),
(6, 'La Romana', 'A'),
(7, 'MonseÃ±or Nouel', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector`
--

CREATE TABLE `sector` (
  `id_sector` int(11) NOT NULL COMMENT 'Clave unica de registro de sector',
  `nombre` varchar(50) NOT NULL COMMENT 'Nombre del sector',
  `id_municipio` int(11) NOT NULL COMMENT 'Municipio al que pertenece',
  `estado` char(1) NOT NULL COMMENT 'Control de actividad o inactividad'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sector`
--

INSERT INTO `sector` (`id_sector`, `nombre`, `id_municipio`, `estado`) VALUES
(1, 'La Coloniaa', 2, 'A'),
(3, 'Villa Rosa', 4, 'A'),
(4, 'La Loteria', 4, 'A'),
(5, 'La Mercedes', 5, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_incidente`
--

CREATE TABLE `tipos_incidente` (
  `id_tipos_incidente` int(11) NOT NULL COMMENT 'Clave unica de registro de tipo de incidente',
  `nombre` varchar(100) NOT NULL COMMENT 'Nombre del incidente',
  `descripcion` longtext NOT NULL COMMENT 'Descripcion general del incidente',
  `estado` char(1) NOT NULL COMMENT 'Control de actividad o inactividad'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos_incidente`
--

INSERT INTO `tipos_incidente` (`id_tipos_incidente`, `nombre`, `descripcion`, `estado`) VALUES
(1, 'Infarto cardiaco', 'El infarto de miocardio es una patologï¿½a que se caracteriza por la muerte de una porciï¿½n del mï¿½sculo cardï¿½aco que se produce cuando se obstruye completamente una arteria coronaria.', 'A'),
(2, 'Intoxicacion etilica', 'La intoxicacion etilica es el aumento del contenido de etanol en sangre por encima de los niveles tolerados por el organismo, y puede causar la muerte.', 'I'),
(3, 'Convulsiones', 'Las convulsiones son sÃ­ntomas de un problema cerebral. Ocurren por la apariciÃ³n sÃºbita de una actividad elÃ©ctrica anormal en el cerebro. Cuando las personas piensan en convulsiones, suelen imaginarse el cuerpo de una persona que se sacude rÃ¡pida y sin control.', 'A'),
(4, 'Accidente de trÃ¡nsito', 'El accidente de trÃ¡nsito es un suceso imprevisto y ajeno al factor humano que altera la marcha normal o prevista del desplazamiento en las vialidades. Especialmente es aquel suceso en el que se causan daÃ±os a una persona o cosa, de manera repentina ocasionada por un agente externo involuntario.', 'A'),
(5, 'Hipotermia', 'La hipotermia es el descenso involuntario de la temperatura corporal por debajo de 35 Â°C.', 'A'),
(6, 'Paro Respiratorio', 'impide respitar', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL COMMENT 'Clave unica de registro de usuario',
  `nombre` varchar(50) NOT NULL COMMENT 'Primer nombre del usuario',
  `apellido` varchar(50) NOT NULL COMMENT 'Primer apellido del usuario',
  `telefono` varchar(20) NOT NULL COMMENT 'Numero de telefono o celular del usuario',
  `direccion` varchar(100) NOT NULL COMMENT 'Direccion fisica del hogar del usuario',
  `correo` varchar(50) NOT NULL COMMENT 'Correo electronico del usuario',
  `nombre_usuario` varchar(50) NOT NULL COMMENT 'nombre de usuario o NickName del usuario para ingresar al sistema',
  `contrasena` varchar(50) NOT NULL COMMENT 'Contraseña de usuario para ingresar al sistema',
  `administrador` char(3) NOT NULL COMMENT 'Cargo que desempeña el usuario dentro del sistema',
  `estado` char(1) NOT NULL COMMENT 'Control de actividad o inactividad del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`, `nombre_usuario`, `contrasena`, `administrador`, `estado`) VALUES
(1, 'adrian', 'vinas', '8091234567', 'La loteria', 'adrianvinas@gmail.com', 'adrian12', 'adrian', 'ADM', 'A'),
(2, 'Manuel ', 'Torres', '8098671209', 'Santiago', 'manuel@gmail.com', 'manuel12', '12334', 'ADM', 'A'),
(3, 'Luis', 'Torres', '8098671209', 'La Romana', 'manuel@gmail.com', 'jose12', '12345', 'REG', 'A'),
(4, 'Marcos', 'Castillo', '8098671209', 'La Romana', 'llasl@gmail.com', 'jose12', '1234', 'REG', 'A'),
(5, 'sasa', 'Torres', '8098671209', 'Puerto Plata', 'llasl@gmail.com', 'manuel123', '12334', 'ADM', 'A'),
(6, 'Luis', 'Cristo', '8092421452', 'Gamundy', 'aklaksla@gmail.com', 'manuel123', '1234', 'ADM', 'I'),
(7, 'Jose', 'Castillo', '8092421452', 'Puerto Plata', 'llasl@gmail.com', 'manuel123', '12334', 'ADM', 'A'),
(8, 'adrian', 'Manuel', '8098671', 'Gamundy', 'manuellasl@gmail.com', 'jose12', '12334', 'ADM', 'A'),
(9, 'Manuel ', 'Manuel', '8091214562', 'La Romana', 'manuellasl@gmail.com', 'manuel12', 'abcd', 'ADM', 'I'),
(10, 'scda', 'Manuel', '8098671209', 'La Romana', 'llasl@gmail.com', 'manuel123', 'abcd', 'REG', 'A'),
(11, 'Luis', 'Castillo', '8091214562', 'Santiago', 'manuellasl@gmail.com', 'jose12', '12345', 'REG', 'A'),
(12, 'Manuel ', 'Manuel', '8098671209', 'Santiago', 'manuellasl@gmail.com', 'manuel12', '1234', 'ADM', 'A'),
(13, 'randy', 'Torres', '8098671209', 'Puerto Plata', 'manuellasl@gmail.com', 'jose12', '12345', 'ADM', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `incidente`
--
ALTER TABLE `incidente`
  ADD PRIMARY KEY (`id_incidente`),
  ADD UNIQUE KEY `id_tipo_de_incidente` (`id_tipo_de_incidente`),
  ADD UNIQUE KEY `id_sector` (`id_sector`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id_municipio`),
  ADD KEY `id_provincia` (`id_provincia`) USING BTREE;

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
  ADD KEY `id_municipio` (`id_municipio`) USING BTREE;

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
  MODIFY `id_incidente` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave unica de registro de  incidente';

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave unica de registro de municipio', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id_provincia` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave unica de registro de provincia', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sector`
--
ALTER TABLE `sector`
  MODIFY `id_sector` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave unica de registro de sector', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipos_incidente`
--
ALTER TABLE `tipos_incidente`
  MODIFY `id_tipos_incidente` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave unica de registro de tipo de incidente', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave unica de registro de usuario', AUTO_INCREMENT=14;

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
