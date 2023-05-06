-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2023 a las 16:11:11
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
  `id` int(2) NOT NULL,
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
  `id_estado` int(1) NOT NULL,
  `estado` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados_estudiantes`
--

INSERT INTO `estados_estudiantes` (`id_estado`, `estado`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estratos`
--

CREATE TABLE `estratos` (
  `id` int(2) NOT NULL,
  `nombre` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estratos`
--

INSERT INTO `estratos` (`id`, `nombre`) VALUES
(1, 'Estrato 1'),
(2, 'Estrato 2'),
(3, 'Estrato 3'),
(4, 'Estrato 4'),
(5, 'Estrato 5'),
(6, 'Estrato 6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_estudiante` int(11) NOT NULL,
  `nombre_completo_estudiante` varchar(50) NOT NULL,
  `apellido_completo_estudiante` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` int(1) NOT NULL,
  `direccion_residencia` varchar(255) NOT NULL,
  `tipo_documento` int(1) NOT NULL,
  `numero_identificacion` int(10) DEFAULT NULL,
  `grupo` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `t_usuario` int(1) NOT NULL,
  `alergias` varchar(255) DEFAULT NULL,
  `enfermedades` varchar(255) DEFAULT NULL,
  `estado_estudiante` int(1) DEFAULT NULL,
  `eps_id` int(2) NOT NULL,
  `estrato_id` int(2) NOT NULL,
  `telefono` int(10) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `id_padres` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id_estudiante`, `nombre_completo_estudiante`, `apellido_completo_estudiante`, `fecha_nacimiento`, `sexo`, `direccion_residencia`, `tipo_documento`, `numero_identificacion`, `grupo`, `fecha_ingreso`, `t_usuario`, `alergias`, `enfermedades`, `estado_estudiante`, `eps_id`, `estrato_id`, `telefono`, `correo`, `contrasena`, `id_padres`) VALUES
(1, 'jeison Orlando', 'Restrepo Zapata', '2023-05-04', 1, 'Carrera 14', 1, 1042150069, 0, '0000-00-00', 3, 'ninguna', 'ninguna', NULL, 19, 1, 2147483647, 'orlandoyeison1996@gmail.com', '123', 0),
(2, '1', '1', '2023-06-10', 2, '1', 1, 1, 0, '2023-05-05', 3, 'ninguna', 'ninguna', NULL, 14, 3, 1, 'orlandoyeison1996@gmail.com', '1', 0),
(3, '14', '14', '2023-05-25', 2, 'car21', 1, 14, 0, '2023-05-05', 3, 'ninguna', 'ninguna', NULL, 16, 5, 2147483647, 'orlandoyeison1996@gmail.com', '14', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` int(11) NOT NULL,
  `N_grupo` varchar(4) NOT NULL,
  `id_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres_familia`
--

CREATE TABLE `padres_familia` (
  `id_padres` int(11) NOT NULL,
  `nombre_completo_padre` varchar(50) DEFAULT NULL,
  `apellido_completo_padre` varchar(50) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` int(1) NOT NULL,
  `direccion_residencia` varchar(255) NOT NULL,
  `numero_identificacion` int(10) NOT NULL,
  `tipo_documento` varchar(20) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `t_usuario` int(1) NOT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  `eps_id` int(2) NOT NULL,
  `estrato_id` int(2) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `id_estudiante` int(11) NOT NULL
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
  `t_usuario` int(1) NOT NULL,
  `d_grupo` int(11) NOT NULL,
  `t_documento` int(1) DEFAULT NULL,
  `documento` varchar(10) DEFAULT NULL,
  `eps` int(2) NOT NULL,
  `sexo` int(1) NOT NULL,
  `estrato` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id` int(1) NOT NULL,
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
  `id_tipo` int(1) NOT NULL,
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
  `id` int(1) NOT NULL,
  `Nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `Nombre`) VALUES
(1, 'Administrador'),
(2, 'Docente'),
(3, 'Estudiante'),
(4, 'Padre de familia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eps`
--
ALTER TABLE `eps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `estados_estudiantes`
--
ALTER TABLE `estados_estudiantes`
  ADD PRIMARY KEY (`id_estado`),
  ADD KEY `estado` (`estado`);

--
-- Indices de la tabla `estratos`
--
ALTER TABLE `estratos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD KEY `sexo` (`sexo`),
  ADD KEY `estado_estudiante` (`estado_estudiante`),
  ADD KEY `t_usuario` (`t_usuario`),
  ADD KEY `tipo_documento` (`tipo_documento`),
  ADD KEY `grupo` (`grupo`),
  ADD KEY `estrato_id` (`estrato_id`),
  ADD KEY `eps_id` (`eps_id`),
  ADD KEY `id_padres` (`id_padres`),
  ADD KEY `id_padres_2` (`id_padres`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`),
  ADD KEY `FK_estudiantes_grupo` (`id_estudiante`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `padres_familia`
--
ALTER TABLE `padres_familia`
  ADD PRIMARY KEY (`id_padres`),
  ADD KEY `FK_estudiantes_padres` (`id_estudiante`),
  ADD KEY `id_padres` (`id_padres`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t_usuario` (`t_usuario`),
  ADD KEY `d_grupo` (`d_grupo`),
  ADD KEY `d_grupo_2` (`d_grupo`),
  ADD KEY `t_documento` (`t_documento`),
  ADD KEY `t_documento_2` (`t_documento`),
  ADD KEY `t_documento_3` (`t_documento`),
  ADD KEY `t_documento_4` (`t_documento`),
  ADD KEY `eps` (`eps`),
  ADD KEY `sexo` (`sexo`),
  ADD KEY `sexo_2` (`sexo`),
  ADD KEY `estrato` (`estrato`),
  ADD KEY `t_usuario_2` (`t_usuario`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sexo` (`sexo`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indices de la tabla `tipos_documento`
--
ALTER TABLE `tipos_documento`
  ADD PRIMARY KEY (`id_tipo`),
  ADD KEY `tipo` (`tipo`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `tipo_2` (`tipo`),
  ADD KEY `tipo_3` (`tipo`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Nombre` (`Nombre`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipos_documento`
--
ALTER TABLE `tipos_documento`
  MODIFY `id_tipo` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_10` FOREIGN KEY (`tipo_documento`) REFERENCES `tipos_documento` (`id_tipo`),
  ADD CONSTRAINT `estudiantes_ibfk_11` FOREIGN KEY (`t_usuario`) REFERENCES `tipo_usuario` (`id`),
  ADD CONSTRAINT `estudiantes_ibfk_7` FOREIGN KEY (`eps_id`) REFERENCES `eps` (`id`),
  ADD CONSTRAINT `estudiantes_ibfk_8` FOREIGN KEY (`estado_estudiante`) REFERENCES `estados_estudiantes` (`id_estado`),
  ADD CONSTRAINT `fk_eps` FOREIGN KEY (`estrato_id`) REFERENCES `estratos` (`id`);

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`),
  ADD CONSTRAINT `grupo_ibfk_2` FOREIGN KEY (`id_grupo`) REFERENCES `profesores` (`d_grupo`);

--
-- Filtros para la tabla `padres_familia`
--
ALTER TABLE `padres_familia`
  ADD CONSTRAINT `padres_familia_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`),
  ADD CONSTRAINT `padres_familia_ibfk_2` FOREIGN KEY (`id_padres`) REFERENCES `estudiantes` (`id_padres`);

--
-- Filtros para la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD CONSTRAINT `profesores_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tipo_usuario` (`id`),
  ADD CONSTRAINT `profesores_ibfk_2` FOREIGN KEY (`t_documento`) REFERENCES `tipos_documento` (`id_tipo`),
  ADD CONSTRAINT `profesores_ibfk_3` FOREIGN KEY (`eps`) REFERENCES `eps` (`id`),
  ADD CONSTRAINT `profesores_ibfk_4` FOREIGN KEY (`sexo`) REFERENCES `sexo` (`id`),
  ADD CONSTRAINT `profesores_ibfk_5` FOREIGN KEY (`estrato`) REFERENCES `estratos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
