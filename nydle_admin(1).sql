-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2018 a las 22:49:19
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nydle_admin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` char(36) NOT NULL,
  `name` varchar(200) NOT NULL,
  `empresa` varchar(200) NOT NULL,
  `numero` varchar(200) NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` char(36) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cliente_id` varchar(36) NOT NULL,
  `observaciones` longtext,
  `fecha_inicio` datetime NOT NULL,
  `fecha_vencimiento` datetime NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `renovado` tinyint(1) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_historico`
--

CREATE TABLE `proyectos_historico` (
  `id` char(36) NOT NULL,
  `proyecto_original_id` varchar(36) NOT NULL,
  `name` varchar(200) NOT NULL,
  `observaciones` longtext,
  `cliente_id` varchar(36) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_vencimiento` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_correos`
--

CREATE TABLE `proyecto_correos` (
  `id` char(36) NOT NULL,
  `proyecto_id` varchar(36) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `contrasenia` varchar(200) NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_cpanel`
--

CREATE TABLE `proyecto_cpanel` (
  `id` char(36) NOT NULL,
  `proyecto_id` varchar(36) NOT NULL,
  `usuario_cpanel` varchar(200) NOT NULL,
  `contrasenia_cpanel` varchar(200) NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_cuentas_extra`
--

CREATE TABLE `proyecto_cuentas_extra` (
  `id` char(36) NOT NULL,
  `proyecto_id` varchar(36) NOT NULL,
  `name` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `contrasenia` varchar(200) NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_dns`
--

CREATE TABLE `proyecto_dns` (
  `id` char(36) NOT NULL,
  `proyecto_id` varchar(36) NOT NULL,
  `name` varchar(200) NOT NULL,
  `ip_servidor` varchar(200) NOT NULL,
  `nameserver` varchar(200) NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_users_asignados`
--

CREATE TABLE `proyecto_users_asignados` (
  `id` char(36) NOT NULL,
  `proyecto_id` varchar(36) NOT NULL,
  `user_id` varchar(36) NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` char(36) CHARACTER SET latin1 NOT NULL,
  `name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(256) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `created`, `modified`) VALUES
('59e43dce-b922-11e8-a210-f8cab83708e4', 'JOSE CARLOS ROMERO VERA', 'cromero', '$2y$10$vL7WoBfBjpp9zwXD9U.v5euxGzVZlB1t0rf1j5dE7O.EwSTBuNtNi', '2018-09-15 15:03:02', '2018-09-15 15:03:02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- Indices de la tabla `proyectos_historico`
--
ALTER TABLE `proyectos_historico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `proyecto_original_id` (`proyecto_original_id`);

--
-- Indices de la tabla `proyecto_correos`
--
ALTER TABLE `proyecto_correos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proyecto_id` (`proyecto_id`);

--
-- Indices de la tabla `proyecto_cpanel`
--
ALTER TABLE `proyecto_cpanel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proyecto_id` (`proyecto_id`);

--
-- Indices de la tabla `proyecto_cuentas_extra`
--
ALTER TABLE `proyecto_cuentas_extra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proyecto_id` (`proyecto_id`);

--
-- Indices de la tabla `proyecto_dns`
--
ALTER TABLE `proyecto_dns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proyecto_id` (`proyecto_id`);

--
-- Indices de la tabla `proyecto_users_asignados`
--
ALTER TABLE `proyecto_users_asignados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proyecto_id` (`proyecto_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyectos_historico`
--
ALTER TABLE `proyectos_historico`
  ADD CONSTRAINT `proyectos_historico_ibfk_1` FOREIGN KEY (`proyecto_original_id`) REFERENCES `proyectos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyecto_correos`
--
ALTER TABLE `proyecto_correos`
  ADD CONSTRAINT `proyecto_correos_ibfk_1` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyecto_cpanel`
--
ALTER TABLE `proyecto_cpanel`
  ADD CONSTRAINT `proyecto_cpanel_ibfk_1` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyecto_cuentas_extra`
--
ALTER TABLE `proyecto_cuentas_extra`
  ADD CONSTRAINT `proyecto_cuentas_extra_ibfk_1` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyecto_dns`
--
ALTER TABLE `proyecto_dns`
  ADD CONSTRAINT `proyecto_dns_ibfk_1` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyecto_users_asignados`
--
ALTER TABLE `proyecto_users_asignados`
  ADD CONSTRAINT `proyecto_users_asignados_ibfk_1` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `proyecto_users_asignados_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
