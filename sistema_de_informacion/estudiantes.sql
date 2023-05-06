-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2023 a las 02:58:32
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

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
