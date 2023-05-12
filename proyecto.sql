-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 23-04-2023 a las 04:38:58
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `codigo` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`codigo`, `nombre`, `descripcion`, `precio`) VALUES
(11500902, 'DESARROLLO DE SOFTWARE', 'Este curso esta encargado del desarrollo y estructura de herramientas que ayudan a solucionar problemas de la sociedad', 2500000),
(11500903, 'MODELO Y GESTION DE BASES DE DATOS', 'en este curso se efectuara un analisis de datos y como gestionarlos en los distintos medios que hay', 2500000),
(11500905, 'DESARROLLO DE APLICACIONES MOVILES', 'Este curso esta encargado del desarrollo y estructura de herramientas que ayudan a solucionar problemas de la sociedad', 2500000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `codigo` int(11) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `ustipo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`codigo`, `documento`, `nombre`, `apellido`, `celular`, `titulo`, `email`, `ustipo`) VALUES
(0, '', '', '', '', '', '', 4),
(323, '', '', '', '', '', '', 4),
(123323, '12312323', 'sadasdasdas', 'dasdasdasd', '23123', 'dasdsadsad', 'asdasdas', 4),
(1005115, '', 'Jairo Alberto', 'Fuentes', '', '', '', 0),
(1005116, '', 'Jose Julian ', 'Forero', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `codigo` int(11) NOT NULL,
  `comprobante` longblob NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idcurso` int(11) NOT NULL,
  `evaluacionDocente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`codigo`, `comprobante`, `idusuario`, `idcurso`, `evaluacionDocente`) VALUES
(1151965, 0x204c494e45414d49454e544f53205052494d455220494e464f524d45202053572020323032332d312e646f63782e706466, 1004805235, 11500903, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `id` int(11) NOT NULL,
  `archivo` longblob NOT NULL,
  `tipoentrega` int(11) NOT NULL,
  `idcurso` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciondocente`
--

CREATE TABLE `evaluaciondocente` (
  `id` int(11) NOT NULL,
  `iddocente` int(11) NOT NULL,
  `notadesempeño` float NOT NULL,
  `notahabilidad` float NOT NULL,
  `notacomportamiento` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacionestudiante`
--

CREATE TABLE `evaluacionestudiante` (
  `id` int(11) NOT NULL,
  `nota` float NOT NULL,
  `archivosolucion` longblob NOT NULL,
  `idestudiante` int(11) NOT NULL,
  `idevaluacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `horarioid` int(11) NOT NULL,
  `cursoid` int(11) NOT NULL,
  `semana` int(50) NOT NULL,
  `dia_semana` text NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `idmodulo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `idcurso` int(11) NOT NULL,
  `iddocente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`idmodulo`, `nombre`, `idcurso`, `iddocente`) VALUES
(1, 'modulo1', 11500902, 1005115),
(2, 'modulo1', 11500905, 1005116);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `documento` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `ustipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`documento`, `nombre`, `correo`, `celular`, `contraseña`, `direccion`, `ustipo`) VALUES
(1575, 'luis', 'oso@gmail.com', '3143001705', '123456', '123454', 3),
(1151955, 'alberto', 'jose@usps.com', '23213231', '12345', 'calle', 3),
(13480553, 'Administrador', 'osfecasusama@gmail.com', '3143374223', 'admin', 'calle 12°2-11', 1),
(1004805235, 'kevin', 'kevincito@ufps.edu.co', '315678870', '12345', 'puente', 3),
(1005035136, 'oscar felipe', 'oscarfelipecsua@ufps.edu.co', '3222938508', '1234', 'calle 29°1-20', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `validardatos`
--

CREATE TABLE `validardatos` (
  `id` int(11) NOT NULL,
  `reporte` longblob NOT NULL,
  `pago` longblob NOT NULL,
  `cedula` longblob NOT NULL,
  `certificado` longblob NOT NULL,
  `idusuario` int(11) NOT NULL,
  `verificar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `validardatos`
--

INSERT INTO `validardatos` (`id`, `reporte`, `pago`, `cedula`, `certificado`, `idusuario`, `verificar`) VALUES
(456, 0x757365722e706e67, 0x757365722e706e67, 0x757365722e706e67, 0x757365722e706e67, 1575, 1),
(12432, 0x576861747341707020496d61676520323032322d30332d323920617420362e33392e323020504d202831292e6a706567, 0x576861747341707020496d61676520323032322d30332d323920617420362e33392e323020504d202832292e6a706567, 0x436f757273657261204843564b59334d3546524e502e706466, 0x434552544946494341444f2d3334352e706466, 1005035136, 1),
(2147483647, 0x437265616369c3b36e206c61204544545742532831292e706466, 0x437265616369c3b36e206c61204544545742532e2e706466, 0x437265616369c3b36e206c61204544545742532e706466, 0x437265616369c3b36e206c61204544545742532831292e706466, 1004805235, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idcurso` (`idcurso`);

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcurso` (`idcurso`);

--
-- Indices de la tabla `evaluaciondocente`
--
ALTER TABLE `evaluaciondocente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddocente` (`iddocente`);

--
-- Indices de la tabla `evaluacionestudiante`
--
ALTER TABLE `evaluacionestudiante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idestudiante` (`idestudiante`,`idevaluacion`),
  ADD KEY `idevaluacion` (`idevaluacion`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`horarioid`),
  ADD KEY `cursoid` (`cursoid`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`idmodulo`),
  ADD UNIQUE KEY `idcurso` (`idcurso`),
  ADD KEY `iddocente` (`iddocente`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `validardatos`
--
ALTER TABLE `validardatos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`documento`) ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiante_ibfk_2` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD CONSTRAINT `evaluacion_ibfk_1` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `evaluaciondocente`
--
ALTER TABLE `evaluaciondocente`
  ADD CONSTRAINT `evaluaciondocente_ibfk_1` FOREIGN KEY (`iddocente`) REFERENCES `docente` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `evaluacionestudiante`
--
ALTER TABLE `evaluacionestudiante`
  ADD CONSTRAINT `evaluacionestudiante_ibfk_1` FOREIGN KEY (`idestudiante`) REFERENCES `estudiante` (`codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluacionestudiante_ibfk_2` FOREIGN KEY (`idevaluacion`) REFERENCES `evaluacion` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`cursoid`) REFERENCES `curso` (`codigo`);

--
-- Filtros para la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD CONSTRAINT `modulos_ibfk_1` FOREIGN KEY (`iddocente`) REFERENCES `docente` (`codigo`),
  ADD CONSTRAINT `modulos_ibfk_2` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`codigo`);

--
-- Filtros para la tabla `validardatos`
--
ALTER TABLE `validardatos`
  ADD CONSTRAINT `validardatos_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`documento`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
