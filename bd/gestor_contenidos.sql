-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2018 a las 10:26:03
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
-- Base de datos: `gestor_contenidos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrousel`
--

CREATE TABLE `carrousel` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` longtext COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_dependencias`
--

CREATE TABLE `cat_dependencias` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_corto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `logo` longtext COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_estructura`
--

CREATE TABLE `cat_estructura` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_grupos`
--

CREATE TABLE `cat_grupos` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pagina_inicial` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_grupos_cat_menus`
--

CREATE TABLE `cat_grupos_cat_menus` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `cat_grupo_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `cat_menu_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_grupos_cat_permisos`
--

CREATE TABLE `cat_grupos_cat_permisos` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `cat_grupo_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `cat_permiso_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(4) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_grupos_users`
--

CREATE TABLE `cat_grupos_users` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `user_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `cat_grupo_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_iconos`
--

CREATE TABLE `cat_iconos` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `css` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_menus`
--

CREATE TABLE `cat_menus` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `padre_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `icono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `icono_img` longtext COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `posicion` tinyint(4) NOT NULL,
  `destino` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `color` text COLLATE utf8_spanish_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_permisos`
--

CREATE TABLE `cat_permisos` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `controller` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `action` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `footer`
--

CREATE TABLE `footer` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `texto` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` longtext COLLATE utf8_spanish_ci,
  `backgroud-color` text COLLATE utf8_spanish_ci,
  `background-image` longtext COLLATE utf8_spanish_ci,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `footer_enlaces`
--

CREATE TABLE `footer_enlaces` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `footer_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `texto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `icon_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `subtitulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `contenido` text COLLATE utf8_spanish_ci NOT NULL,
  `enlace` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias_imagenes`
--

CREATE TABLE `noticias_imagenes` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `noticia_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen` longtext COLLATE utf8_spanish_ci NOT NULL,
  `activo` smallint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes_sociales`
--

CREATE TABLE `redes_sociales` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `icon_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` longtext COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramites`
--

CREATE TABLE `tramites` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `icon_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `cat_dependencia_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ultimo_acceso` datetime NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrousel`
--
ALTER TABLE `carrousel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cat_dependencias`
--
ALTER TABLE `cat_dependencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cat_estructura`
--
ALTER TABLE `cat_estructura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cat_grupos`
--
ALTER TABLE `cat_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cat_grupos_cat_menus`
--
ALTER TABLE `cat_grupos_cat_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_grupo_id` (`cat_grupo_id`),
  ADD KEY `cat_menu_id` (`cat_menu_id`);

--
-- Indices de la tabla `cat_grupos_cat_permisos`
--
ALTER TABLE `cat_grupos_cat_permisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_grupo_id` (`cat_grupo_id`),
  ADD KEY `cat_permiso_id` (`cat_permiso_id`);

--
-- Indices de la tabla `cat_grupos_users`
--
ALTER TABLE `cat_grupos_users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cat_iconos`
--
ALTER TABLE `cat_iconos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cat_menus`
--
ALTER TABLE `cat_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cat_permisos`
--
ALTER TABLE `cat_permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `footer_enlaces`
--
ALTER TABLE `footer_enlaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `footer_id` (`footer_id`),
  ADD KEY `icon_id` (`icon_id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias_imagenes`
--
ALTER TABLE `noticias_imagenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `noticia_id` (`noticia_id`);

--
-- Indices de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tramites`
--
ALTER TABLE `tramites`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_dependencia_id` (`cat_dependencia_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cat_grupos_cat_menus`
--
ALTER TABLE `cat_grupos_cat_menus`
  ADD CONSTRAINT `cat_grupos_cat_menus_ibfk_1` FOREIGN KEY (`cat_grupo_id`) REFERENCES `cat_grupos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cat_grupos_cat_menus_ibfk_2` FOREIGN KEY (`cat_menu_id`) REFERENCES `cat_menus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cat_grupos_cat_permisos`
--
ALTER TABLE `cat_grupos_cat_permisos`
  ADD CONSTRAINT `cat_grupos_cat_permisos_ibfk_1` FOREIGN KEY (`cat_grupo_id`) REFERENCES `cat_grupos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cat_grupos_cat_permisos_ibfk_2` FOREIGN KEY (`cat_permiso_id`) REFERENCES `cat_permisos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `footer_enlaces`
--
ALTER TABLE `footer_enlaces`
  ADD CONSTRAINT `footer_enlaces_ibfk_1` FOREIGN KEY (`footer_id`) REFERENCES `footer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `footer_enlaces_ibfk_2` FOREIGN KEY (`icon_id`) REFERENCES `cat_iconos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `noticias_imagenes`
--
ALTER TABLE `noticias_imagenes`
  ADD CONSTRAINT `noticias_imagenes_ibfk_1` FOREIGN KEY (`noticia_id`) REFERENCES `noticias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`cat_dependencia_id`) REFERENCES `cat_dependencias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
