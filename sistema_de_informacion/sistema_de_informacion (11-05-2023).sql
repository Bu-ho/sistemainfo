-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-05-2023 a las 02:49:03
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
-- Base de datos: `sistema_de_informacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `numero_identificacion` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `nombre_completo_administrador` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `apellido_completo_administrador` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `direccion_residencia` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `tipo_documento` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `t_usuario` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `eps` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `estrato` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `contrasena` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`numero_identificacion`, `nombre_completo_administrador`, `apellido_completo_administrador`, `fecha_nacimiento`, `sexo`, `direccion_residencia`, `fecha_ingreso`, `tipo_documento`, `telefono`, `t_usuario`, `correo`, `estado`, `eps`, `estrato`, `contrasena`) VALUES
('1042150071', 'administradore', 'administrador', '2023-05-22', 'Masculino', 'carrera 11', '2023-05-01', 'Cédula de ciudadanía', '123456789', 'Administrador', '1@11', 'Activo', 'Convida EPS', 'Estrato 4', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

CREATE TABLE `eps` (
  `id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eps`
--

INSERT INTO `eps` (`id`, `nombre`) VALUES
(7, 'Aliansalud EPS'),
(9, 'Asmet Salud EPS'),
(29, 'Asociación Mutual Barrios Unidos EPS'),
(27, 'Cafam EPS'),
(10, 'Cafesalud EPS'),
(26, 'Cajacopi EPS'),
(13, 'Capresoca EPS'),
(30, 'Colsubsidio EPS'),
(16, 'Comfacor EPS'),
(11, 'Comfenalco Valle EPS'),
(14, 'Comparta EPS'),
(17, 'Comparta EPS-S'),
(5, 'Compensar EPS'),
(24, 'Coninsa Ramal EPS'),
(20, 'Convida EPS'),
(2, 'Coomeva EPS'),
(18, 'Coosalud EPS'),
(31, 'Coosalud EPS-S'),
(12, 'Cruz Blanca EPS'),
(19, 'Ecoopsos EPS'),
(15, 'Emssanar EPS'),
(8, 'EPS Famisanar'),
(22, 'Famisanar EPS'),
(21, 'Medimás EPS'),
(23, 'Nueva E.P.S.'),
(3, 'Nueva EPS'),
(6, 'Salud Total EPS'),
(28, 'Saludvida EPS'),
(4, 'Sanitas EPS'),
(25, 'Savia Salud EPS'),
(32, 'Savia Salud EPS-S'),
(1, 'Sura EPS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int NOT NULL,
  `estado` varchar(11) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `estado`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estratos`
--

CREATE TABLE `estratos` (
  `id` int NOT NULL,
  `nombre` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL
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
  `numero_identificacion` int NOT NULL,
  `nombre_completo_estudiante` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `apellido_completo_estudiante` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo_e` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `direccion_residencia` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `grupo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipo_documento` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `t_usuario` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `alergias` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `enfermedades` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `estado_estudiante` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `eps` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `estrato` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contrasena` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cc_padre` varchar(10) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`numero_identificacion`, `nombre_completo_estudiante`, `apellido_completo_estudiante`, `fecha_nacimiento`, `sexo_e`, `direccion_residencia`, `grupo`, `tipo_documento`, `fecha_ingreso`, `t_usuario`, `alergias`, `enfermedades`, `estado_estudiante`, `eps`, `estrato`, `telefono`, `correo`, `contrasena`, `cc_padre`) VALUES
(1, 'hola', 'comoee', '2023-05-09', 'Femenino', '12e', '', '10-1', '2023-05-09', 'Estudiante', 'todass', 'ni ses', 'activo', 'Aliansalud EPS', 'Estrato 1', '3107241182', 'hola@hooela', '12', '1'),
(1042150069, 'jeison Orlando', 'Restrepo Zapata', '2023-05-19', 'Masculino', 'Carrera 14e', NULL, 'Cédula de ciudadanía', '2023-05-12', 'Estudiante', 'ningunae', 'ninguna', 'Activo', 'Coosalud EPS', 'Estrato 5', '3107241189', 'jeisonOrlando@121', '1', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` int NOT NULL,
  `N_grupo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_director` int NOT NULL,
  `id_estudiante` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`, `N_grupo`, `id_director`, `id_estudiante`) VALUES
(1, '10-1', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres_familia`
--

CREATE TABLE `padres_familia` (
  `numero_identificacion` int NOT NULL,
  `nombre_completo_padre` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `apellido_completo_padre` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `direccion_residencia` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `tipo_documento` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `t_usuario` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `alergias` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `enfermedades` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `eps` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `estado` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `estrato` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `contrasena` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nroid_estudiante` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `padres_familia`
--

INSERT INTO `padres_familia` (`numero_identificacion`, `nombre_completo_padre`, `apellido_completo_padre`, `fecha_nacimiento`, `sexo`, `direccion_residencia`, `fecha_ingreso`, `tipo_documento`, `telefono`, `t_usuario`, `alergias`, `enfermedades`, `correo`, `eps`, `estado`, `estrato`, `contrasena`, `nroid_estudiante`) VALUES
(1, '1', '1', '2023-05-17', '1', '1', '2023-05-08', '1', '1', '4', '1', '1', '1@1', '16', '', '4', '1', ''),
(1042150069, '1', '1', '2023-05-18', 'Masculino', 'Carrera 14e', '2023-05-09', 'Cédula de extranjerí', '3108219107', 'Padre de familia', 'ninguna', 'ninguna', 'orlando@gmail.com', 'Ecoopsos EPS', '1', 'Estrato 3', '1', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `tipo_documento` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `numero_identificacion` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nombre_completo_profesor` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `apellido_completo_profesor` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `sexo` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `direccion_residencia` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `t_usuario` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `alergias` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `enfermedades` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `estado` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `eps` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `estrato` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `d_grupo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contrasena` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`tipo_documento`, `numero_identificacion`, `nombre_completo_profesor`, `apellido_completo_profesor`, `fecha_nacimiento`, `fecha_ingreso`, `sexo`, `direccion_residencia`, `telefono`, `t_usuario`, `alergias`, `enfermedades`, `correo`, `estado`, `eps`, `estrato`, `d_grupo`, `contrasena`) VALUES
('Cédula de extranjerí', '1', 'e', 'r', '2023-05-19', '2023-05-12', 'Masculino', 'car21', '3108219107', 'Profesor', 'ninguna', 'ningunae', 'orlandoyeison1996@gmail.com', 'Activo', 'Ecoopsos EPS', 'Estrato 2', NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id` int NOT NULL,
  `N_sexo` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id`, `N_sexo`) VALUES
(2, 'Femenino'),
(1, 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_documento`
--

CREATE TABLE `tipos_documento` (
  `id_tipo` int NOT NULL,
  `tipo` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
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
  `id` int NOT NULL,
  `Nombre` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `Nombre`) VALUES
(1, 'Administrador'),
(3, 'Estudiante'),
(4, 'Padre de familia'),
(2, 'Profesor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD UNIQUE KEY `numero_identificacion_2` (`numero_identificacion`),
  ADD KEY `sexo` (`sexo`),
  ADD KEY `tipo_documento` (`tipo_documento`),
  ADD KEY `t_usuario` (`t_usuario`),
  ADD KEY `estado` (`estado`),
  ADD KEY `eps_id` (`eps`),
  ADD KEY `estrato_id` (`estrato`),
  ADD KEY `numero_identificacion` (`numero_identificacion`);

--
-- Indices de la tabla `eps`
--
ALTER TABLE `eps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`),
  ADD KEY `estado` (`estado`);

--
-- Indices de la tabla `estratos`
--
ALTER TABLE `estratos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD UNIQUE KEY `numero_identificacion` (`numero_identificacion`),
  ADD KEY `sexo` (`sexo_e`),
  ADD KEY `estado_estudiante` (`estado_estudiante`),
  ADD KEY `t_usuario` (`t_usuario`),
  ADD KEY `tipo_documento` (`tipo_documento`),
  ADD KEY `estrato_id` (`estrato`),
  ADD KEY `eps_id` (`eps`),
  ADD KEY `id_padres` (`cc_padre`),
  ADD KEY `cc_padre` (`cc_padre`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`),
  ADD KEY `FK_estudiantes_grupo` (`id_estudiante`),
  ADD KEY `id_grupo` (`id_grupo`),
  ADD KEY `id_director` (`id_director`),
  ADD KEY `N_grupo` (`N_grupo`);

--
-- Indices de la tabla `padres_familia`
--
ALTER TABLE `padres_familia`
  ADD UNIQUE KEY `tipo_documento` (`tipo_documento`),
  ADD KEY `FK_estudiantes_padres` (`nroid_estudiante`),
  ADD KEY `sexo` (`sexo`),
  ADD KEY `t_usuario` (`t_usuario`),
  ADD KEY `eps_id` (`eps`),
  ADD KEY `estrato_id` (`estrato`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD KEY `t_usuario` (`t_usuario`),
  ADD KEY `d_grupo` (`d_grupo`),
  ADD KEY `t_documento` (`tipo_documento`),
  ADD KEY `eps` (`eps`),
  ADD KEY `sexo` (`sexo`),
  ADD KEY `estrato` (`estrato`),
  ADD KEY `estado` (`estado`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `N_sexo` (`N_sexo`);

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
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipos_documento`
--
ALTER TABLE `tipos_documento`
  MODIFY `id_tipo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_3` FOREIGN KEY (`tipo_documento`) REFERENCES `tipos_documento` (`tipo`),
  ADD CONSTRAINT `administrador_ibfk_4` FOREIGN KEY (`estado`) REFERENCES `estados` (`estado`),
  ADD CONSTRAINT `administrador_ibfk_5` FOREIGN KEY (`t_usuario`) REFERENCES `tipo_usuario` (`Nombre`),
  ADD CONSTRAINT `administrador_ibfk_6` FOREIGN KEY (`estrato`) REFERENCES `estratos` (`nombre`),
  ADD CONSTRAINT `administrador_ibfk_7` FOREIGN KEY (`eps`) REFERENCES `eps` (`nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
