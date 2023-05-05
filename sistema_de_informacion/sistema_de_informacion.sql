-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2023 a las 03:25:40
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_de_informacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

CREATE TABLE `eps` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eps`
--

INSERT INTO `eps` (`id`, `nombre`) VALUES
(1, 'Sura EPS'),
(2, 'Coomeva EPS'),
(3, 'Nueva EPS'),
(4, 'Sanitas EPS'),
(5, 'Compensar EPS'),
(6, 'Salud Total EPS'),
(7, 'Aliansalud EPS'),
(8, 'EPS Famisanar'),
(9, 'Asmet Salud EPS'),
(10, 'Cafesalud EPS'),
(11, 'Comfenalco Valle EPS'),
(12, 'Cruz Blanca EPS'),
(13, 'Capresoca EPS'),
(14, 'Comparta EPS'),
(15, 'Emssanar EPS'),
(16, 'Comfacor EPS'),
(17, 'Comparta EPS-S'),
(18, 'Coosalud EPS'),
(19, 'Ecoopsos EPS'),
(20, 'Convida EPS'),
(21, 'Medimás EPS'),
(22, 'Famisanar EPS'),
(23, 'Nueva E.P.S.'),
(24, 'Coninsa Ramal EPS'),
(25, 'Savia Salud EPS'),
(26, 'Cajacopi EPS'),
(27, 'Cafam EPS'),
(28, 'Saludvida EPS'),
(29, 'Asociación Mutual Barrios Unidos EPS'),
(30, 'Colsubsidio EPS'),
(31, 'Coosalud EPS-S'),
(32, 'Savia Salud EPS-S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_estudiantes`
--

CREATE TABLE `estados_estudiantes` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados_estudiantes`
--

INSERT INTO `estados_estudiantes` (`id_estado`, `estado`) VALUES
(1, 'Activo'),
(6, 'Ausente'),
(4, 'Expulsado'),
(5, 'Graduado'),
(2, 'Inactivo'),
(3, 'Retirado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_estudiante` int(11) NOT NULL,
  `nombre_completo_estudiante` varchar(255) NOT NULL,
  `apellido_completo_estudiante` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `direccion_residencia` varchar(255) NOT NULL,
  `tipo_documento` varchar(20) NOT NULL,
  `numero_identificacion` int(10) NOT NULL,
  `grupo` varchar(4) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `t_usuario` varchar(10) NOT NULL,
  `id_padres` int(11) NOT NULL,
  `alergias` varchar(255) DEFAULT NULL,
  `enfermedades` varchar(255) DEFAULT NULL,
  `estado_estudiante` varchar(11) NOT NULL,
  `eps_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` int(11) NOT NULL,
  `N_grupo` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`, `N_grupo`) VALUES
(1, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres_familia`
--

CREATE TABLE `padres_familia` (
  `id_padres` int(11) NOT NULL,
  `numero_identificacion` int(10) NOT NULL,
  `tipo_documento` varchar(20) DEFAULT NULL,
  `nombre_padre` varchar(50) DEFAULT NULL,
  `apellido_padre` varchar(50) DEFAULT NULL,
  `telefono_padre` varchar(20) DEFAULT NULL,
  `correo_padre` varchar(50) DEFAULT NULL,
  `ocupacion_padre` varchar(255) NOT NULL,
  `nombre_madre` varchar(255) NOT NULL,
  `apellido_madre` varchar(255) NOT NULL,
  `telefono_madre` varchar(20) NOT NULL,
  `correo_madre` varchar(255) NOT NULL,
  `ocupacion_madre` varchar(255) NOT NULL,
  `tipo_usuario` varchar(10) NOT NULL,
  `id_estudiante` int(11) DEFAULT NULL,
  `nombre_grupo_estudiante` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `asignatura` varchar(50) NOT NULL,
  `t_usuario` varchar(10) NOT NULL,
  `grupo` varchar(4) NOT NULL,
  `t_documento` varchar(20) DEFAULT NULL,
  `documento` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id`, `sexo`) VALUES
(2, 'Femenino'),
(1, 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_documento`
--

CREATE TABLE `tipos_documento` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipos_documento`
--

INSERT INTO `tipos_documento` (`id_tipo`, `tipo`) VALUES
(1, 'Cédula de ciudadanía'),
(2, 'Cédula de extranjerí'),
(6, 'NUIP'),
(5, 'Pasaporte'),
(4, 'Registro civil'),
(3, 'Tarjeta de identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `Nombre`) VALUES
(1, 'Administra'),
(2, 'Docente'),
(3, 'Estudiante'),
(4, 'Padre de f');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eps`
--
ALTER TABLE `eps`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados_estudiantes`
--
ALTER TABLE `estados_estudiantes`
  ADD PRIMARY KEY (`id_estado`),
  ADD KEY `estado` (`estado`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD KEY `sexo` (`sexo`),
  ADD KEY `estado_estudiante` (`estado_estudiante`),
  ADD KEY `t_usuario` (`t_usuario`),
  ADD KEY `tipo_documento` (`tipo_documento`),
  ADD KEY `id_padres` (`id_padres`),
  ADD KEY `grupo` (`grupo`),
  ADD KEY `fk_eps` (`eps_id`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`),
  ADD KEY `N_grupo` (`N_grupo`);

--
-- Indices de la tabla `padres_familia`
--
ALTER TABLE `padres_familia`
  ADD PRIMARY KEY (`id_padres`),
  ADD KEY `id_estudiante` (`id_estudiante`),
  ADD KEY `id_grupo_estudiante` (`nombre_grupo_estudiante`),
  ADD KEY `tipo_usuario` (`tipo_usuario`),
  ADD KEY `tipo_documento` (`tipo_documento`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sexo` (`sexo`);

--
-- Indices de la tabla `tipos_documento`
--
ALTER TABLE `tipos_documento`
  ADD PRIMARY KEY (`id_tipo`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Nombre` (`Nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tipos_documento`
--
ALTER TABLE `tipos_documento`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`sexo`) REFERENCES `sexo` (`sexo`),
  ADD CONSTRAINT `estudiantes_ibfk_2` FOREIGN KEY (`estado_estudiante`) REFERENCES `estados_estudiantes` (`estado`),
  ADD CONSTRAINT `estudiantes_ibfk_4` FOREIGN KEY (`t_usuario`) REFERENCES `tipo_usuario` (`Nombre`),
  ADD CONSTRAINT `estudiantes_ibfk_5` FOREIGN KEY (`tipo_documento`) REFERENCES `tipos_documento` (`tipo`),
  ADD CONSTRAINT `estudiantes_ibfk_6` FOREIGN KEY (`grupo`) REFERENCES `grupo` (`N_grupo`),
  ADD CONSTRAINT `fk_eps` FOREIGN KEY (`eps_id`) REFERENCES `eps` (`id`);

--
-- Filtros para la tabla `padres_familia`
--
ALTER TABLE `padres_familia`
  ADD CONSTRAINT `padres_familia_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`),
  ADD CONSTRAINT `padres_familia_ibfk_2` FOREIGN KEY (`tipo_documento`) REFERENCES `tipos_documento` (`tipo`),
  ADD CONSTRAINT `padres_familia_ibfk_3` FOREIGN KEY (`id_padres`) REFERENCES `estudiantes` (`id_padres`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
