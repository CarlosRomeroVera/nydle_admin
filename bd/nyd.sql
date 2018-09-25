-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2018 a las 01:32:23
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nyd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_grupos`
--

CREATE TABLE `cat_grupos` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_permisos`
--

CREATE TABLE `cat_permisos` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `controlador` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `accion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `empresa` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `numero` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `id_menu_padre` varchar(36) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `controller` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `action` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `orden` int(3) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cliente_id` varchar(36) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` longtext COLLATE utf8_spanish_ci,
  `fecha_inicio` datetime NOT NULL,
  `fecha_vencimiento` datetime DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `renovado` tinyint(1) DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_cuentas_extra`
--

CREATE TABLE `proyectos_cuentas_extra` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `proyecto_id` varchar(36) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_historico`
--

CREATE TABLE `proyectos_historico` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `proyecto_original_id` varchar(36) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` longtext COLLATE utf8_spanish_ci,
  `cliente_id` varchar(36) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_vencimiento` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_correos`
--

CREATE TABLE `proyecto_correos` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `proyeto_id` varchar(36) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_cpanel`
--

CREATE TABLE `proyecto_cpanel` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `proyeto_id` varchar(36) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_cpanel` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia_cpanel` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_dns`
--

CREATE TABLE `proyecto_dns` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `proyecto_id` varchar(36) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ip_servidor` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nameserver` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_users_asignados`
--

CREATE TABLE `proyecto_users_asignados` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `proyecto_id` varchar(36) COLLATE utf8_spanish_ci NOT NULL,
  `user_id` varchar(36) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r_menus_grupos`
--

CREATE TABLE `r_menus_grupos` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `id_menu` varchar(36) COLLATE utf8_spanish_ci NOT NULL,
  `id_grupo` varchar(36) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r_permisos_grupos`
--

CREATE TABLE `r_permisos_grupos` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `id_cat_grupo` varchar(36) COLLATE utf8_spanish_ci NOT NULL,
  `id_cat_permiso` varchar(36) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `paterno` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `materno` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `grupo_id` varchar(36) COLLATE utf8_spanish_ci NOT NULL,
  `ultimo_acceso` datetime DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cat_grupos`
--
ALTER TABLE `cat_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cat_permisos`
--
ALTER TABLE `cat_permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- Indices de la tabla `proyectos_cuentas_extra`
--
ALTER TABLE `proyectos_cuentas_extra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proyecto_id` (`proyecto_id`);

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
  ADD KEY `proyeto_id` (`proyeto_id`);

--
-- Indices de la tabla `proyecto_cpanel`
--
ALTER TABLE `proyecto_cpanel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proyeto_id` (`proyeto_id`);

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
-- Indices de la tabla `r_menus_grupos`
--
ALTER TABLE `r_menus_grupos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_grupo` (`id_grupo`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indices de la tabla `r_permisos_grupos`
--
ALTER TABLE `r_permisos_grupos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cat_grupo` (`id_cat_grupo`),
  ADD KEY `id_cat_permiso` (`id_cat_permiso`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grupo_id` (`grupo_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`);

--
-- Filtros para la tabla `proyectos_cuentas_extra`
--
ALTER TABLE `proyectos_cuentas_extra`
  ADD CONSTRAINT `proyectos_cuentas_extra_ibfk_1` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`);

--
-- Filtros para la tabla `proyectos_historico`
--
ALTER TABLE `proyectos_historico`
  ADD CONSTRAINT `proyectos_historico_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `proyectos_historico_ibfk_2` FOREIGN KEY (`proyecto_original_id`) REFERENCES `proyectos` (`id`);

--
-- Filtros para la tabla `proyecto_correos`
--
ALTER TABLE `proyecto_correos`
  ADD CONSTRAINT `proyecto_correos_ibfk_1` FOREIGN KEY (`proyeto_id`) REFERENCES `proyectos` (`id`);

--
-- Filtros para la tabla `proyecto_cpanel`
--
ALTER TABLE `proyecto_cpanel`
  ADD CONSTRAINT `proyecto_cpanel_ibfk_1` FOREIGN KEY (`proyeto_id`) REFERENCES `proyectos` (`id`);

--
-- Filtros para la tabla `proyecto_dns`
--
ALTER TABLE `proyecto_dns`
  ADD CONSTRAINT `proyecto_dns_ibfk_1` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`);

--
-- Filtros para la tabla `proyecto_users_asignados`
--
ALTER TABLE `proyecto_users_asignados`
  ADD CONSTRAINT `proyecto_users_asignados_ibfk_1` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`),
  ADD CONSTRAINT `proyecto_users_asignados_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `r_menus_grupos`
--
ALTER TABLE `r_menus_grupos`
  ADD CONSTRAINT `r_menus_grupos_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `cat_grupos` (`id`),
  ADD CONSTRAINT `r_menus_grupos_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `menus` (`id`);

--
-- Filtros para la tabla `r_permisos_grupos`
--
ALTER TABLE `r_permisos_grupos`
  ADD CONSTRAINT `r_permisos_grupos_ibfk_1` FOREIGN KEY (`id_cat_grupo`) REFERENCES `cat_grupos` (`id`),
  ADD CONSTRAINT `r_permisos_grupos_ibfk_2` FOREIGN KEY (`id_cat_permiso`) REFERENCES `cat_permisos` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`grupo_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
