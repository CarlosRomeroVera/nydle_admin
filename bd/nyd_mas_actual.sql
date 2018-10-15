-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2018 a las 02:11:54
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
-- Estructura de tabla para la tabla `a_dmad_social_auth_phinxlog`
--

CREATE TABLE `a_dmad_social_auth_phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `a_dmad_social_auth_phinxlog`
--

INSERT INTO `a_dmad_social_auth_phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20170418000000, 'CreateSocialProfiles', '2018-10-02 10:16:23', '2018-10-02 10:16:24', 0);

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

--
-- Volcado de datos para la tabla `cat_grupos`
--

INSERT INTO `cat_grupos` (`id`, `nombre`, `activo`, `created`, `modified`) VALUES
('26d122cd-64bb-442b-8d55-876f72f925cc', 'NYDLE', 1, '2018-09-26 05:55:16', '2018-09-26 05:55:16'),
('debd79a4-0603-435b-bf80-20f8d856af18', 'ADMIN', 1, '2018-09-26 05:55:28', '2018-09-26 05:55:28'),
('e592ecb7-33a0-48f9-8395-e18f341ff695', 'VISITANTE', 1, '2018-09-26 06:06:18', '2018-09-26 06:06:18');

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

--
-- Volcado de datos para la tabla `cat_permisos`
--

INSERT INTO `cat_permisos` (`id`, `nombre`, `controlador`, `accion`, `activo`, `created`, `modified`) VALUES
('016413df-54cc-4542-862e-02141a28699d', 'ProyectosCuentasExtra:view', 'ProyectosCuentasExtra', 'view', 1, '2018-10-14 18:38:44', '2018-10-14 18:38:44'),
('02bff60a-2eaf-4678-8b30-1de2d8a0f807', 'ProyectoUsersAsignados:add', 'ProyectoUsersAsignados', 'add', 1, '2018-10-14 18:37:36', '2018-10-14 18:37:36'),
('030901b6-99da-4f46-aaf5-7537c563c201', 'CatPermisos:add', 'CatPermisos', 'add', 1, '2018-10-14 18:34:48', '2018-10-14 18:34:48'),
('045f323b-6960-4ab8-a25e-11d17a507620', 'Proyectos:add', 'Proyectos', 'add', 1, '2018-10-14 18:38:04', '2018-10-14 18:38:04'),
('0aae94a1-3af8-4eb7-a99d-9addddd66dbf', 'Proyectos:delete', 'Proyectos', 'delete', 1, '2018-10-14 18:38:04', '2018-10-14 18:38:04'),
('0b20c3d3-c787-4a9c-99a4-87a456a1ad76', 'Proyectos:edit', 'Proyectos', 'edit', 1, '2018-10-14 18:38:04', '2018-10-14 18:38:04'),
('10326877-ee46-41a9-88b0-7a42aa278074', 'Clientes:delete', 'Clientes', 'delete', 1, '2018-10-14 18:35:12', '2018-10-14 18:35:12'),
('16aa4650-4c28-49e0-a5c3-8222720f5244', 'ProyectoCorreos:index', 'ProyectoCorreos', 'index', 1, '2018-10-14 18:36:00', '2018-10-14 18:36:00'),
('176ea305-2f92-4f29-a1af-05f62c1d75ef', 'Menus:view', 'Menus', 'view', 1, '2018-10-14 18:35:36', '2018-10-14 18:35:36'),
('181643ac-c22d-4b26-b648-b25917282501', 'ProyectoUsersAsignados:delete', 'ProyectoUsersAsignados', 'delete', 1, '2018-10-14 18:37:37', '2018-10-14 18:37:37'),
('1bce6ff8-897c-4e2d-bd47-1bc7de628cfa', 'ProyectoCuentasExtra:edit', 'ProyectoCuentasExtra', 'edit', 1, '2018-10-14 18:36:47', '2018-10-14 18:36:47'),
('20e5deee-f4f4-4062-a8fb-60e16eb0d982', 'ProyectoCpanel:view', 'ProyectoCpanel', 'view', 1, '2018-10-14 18:36:27', '2018-10-14 18:36:27'),
('2d62bc35-a8d2-4742-8512-f0dac502e535', 'ProyectoCpanel:delete', 'ProyectoCpanel', 'delete', 1, '2018-10-14 18:36:27', '2018-10-14 18:36:27'),
('3151cd3e-7017-49e3-93b3-c9e5a376a3cc', 'Clientes:view', 'Clientes', 'view', 1, '2018-10-14 18:35:12', '2018-10-14 18:35:12'),
('3513a632-057a-4aed-8604-70f96b742fde', 'ProyectosCuentasExtra:delete', 'ProyectosCuentasExtra', 'delete', 1, '2018-10-14 18:38:44', '2018-10-14 18:38:44'),
('3c31b888-0b58-47c1-9bd1-dac9ca5d203c', 'ProyectoDns:add', 'ProyectoDns', 'add', 1, '2018-10-14 18:37:16', '2018-10-14 18:37:16'),
('405adefe-cb39-457d-aaf6-d778f3c02df4', 'Menus:edit', 'Menus', 'edit', 1, '2018-10-14 18:35:36', '2018-10-14 18:35:36'),
('4c73b14a-73ea-4923-847f-18b3576c642f', 'CatGrupos:delete', 'CatGrupos', 'delete', 1, '2018-10-14 18:19:23', '2018-10-14 18:19:23'),
('4df8fa0d-d27a-44af-bd63-3610cd1b9aeb', 'CatPermisos:edit', 'CatPermisos', 'edit', 1, '2018-10-14 18:34:48', '2018-10-14 18:34:48'),
('53d1a174-709f-4b6a-b3eb-fb42b1978cea', 'Menus:delete', 'Menus', 'delete', 1, '2018-10-14 18:35:36', '2018-10-14 18:35:36'),
('5d324fc2-9ea2-463f-a76e-52cb23ba82c0', 'Menus:index', 'Menus', 'index', 1, '2018-10-14 18:35:36', '2018-10-14 18:35:36'),
('5ec85f5e-5ce5-4da4-ac1b-3f788fe30f60', 'ProyectoDns:edit', 'ProyectoDns', 'edit', 1, '2018-10-14 18:37:16', '2018-10-14 18:37:16'),
('627c414b-f9ab-4529-ab05-c6d59777a558', 'ProyectoCpanel:edit', 'ProyectoCpanel', 'edit', 1, '2018-10-14 18:36:27', '2018-10-14 18:36:27'),
('66ee32a6-5d1b-4c70-9d13-32996402c011', 'CatGrupos:add', 'CatGrupos', 'add', 1, '2018-10-14 18:19:23', '2018-10-14 18:19:23'),
('691644b7-ea31-47cb-9b25-c2f27f6e14a3', 'ProyectoCpanel:add', 'ProyectoCpanel', 'add', 1, '2018-10-14 18:36:27', '2018-10-14 18:36:27'),
('70c23c27-9111-4e52-9967-6e35ab1c09e1', 'ProyectoCorreos:delete', 'ProyectoCorreos', 'delete', 1, '2018-10-14 18:36:00', '2018-10-14 18:36:00'),
('7360544d-8fcf-420c-b903-8bc41ad08209', 'ProyectoCorreos:view', 'ProyectoCorreos', 'view', 1, '2018-10-14 18:36:00', '2018-10-14 18:36:00'),
('73f55d80-1e70-4041-ba25-c588d013842a', 'ProyectoCuentasExtra:add', 'ProyectoCuentasExtra', 'add', 1, '2018-10-14 18:36:47', '2018-10-14 18:36:47'),
('7447d486-e74a-4fc4-94c1-e4cc9f861a06', 'ProyectosHistorico:index', 'ProyectosHistorico', 'index', 1, '2018-10-14 18:39:08', '2018-10-14 18:39:08'),
('75e4fca4-1787-41e1-b6d0-13e552ef3523', 'ProyectoDns:delete', 'ProyectoDns', 'delete', 1, '2018-10-14 18:37:16', '2018-10-14 18:37:16'),
('76d373ba-6b98-417d-bc9b-0caa4b4f0ebd', 'Proyectos:view', 'Proyectos', 'view', 1, '2018-10-14 18:38:03', '2018-10-14 18:38:03'),
('77f58485-da81-4c5d-b02f-7d54b56c090a', 'ProyectosCuentasExtra:add', 'ProyectosCuentasExtra', 'add', 1, '2018-10-14 18:38:44', '2018-10-14 18:38:44'),
('7bc0e4ac-0554-4ae4-bf63-0eb87d39e455', 'ProyectosCuentasExtra:edit', 'ProyectosCuentasExtra', 'edit', 1, '2018-10-14 18:38:44', '2018-10-14 18:38:44'),
('7ef9ad74-4378-46a9-be3a-dc61f7bb7145', 'CatPermisos:index', 'CatPermisos', 'index', 1, '2018-10-14 18:34:48', '2018-10-14 18:34:48'),
('8342e5fc-77e6-4aa8-b275-46a222d6bd3d', 'CatPermisos:view', 'CatPermisos', 'view', 1, '2018-10-14 18:34:48', '2018-10-14 18:34:48'),
('8469a7b4-a575-4233-91b5-d788835dcdab', 'CatPermisos:delete', 'CatPermisos', 'delete', 1, '2018-10-14 18:34:48', '2018-10-14 18:34:48'),
('8541ddc5-77c2-4953-ba72-1eef9b375062', 'ProyectoDns:view', 'ProyectoDns', 'view', 1, '2018-10-14 18:37:16', '2018-10-14 18:37:16'),
('95220869-7984-4b42-94fa-af3a425446b5', 'ProyectoUsersAsignados:index', 'ProyectoUsersAsignados', 'index', 1, '2018-10-14 18:37:36', '2018-10-14 18:37:36'),
('99812462-2d25-43b4-8105-2fee3f0a5d7a', 'ProyectosHistorico:delete', 'ProyectosHistorico', 'delete', 1, '2018-10-14 18:39:09', '2018-10-14 18:39:09'),
('99b9c242-a4bc-4833-9549-20569419e33d', 'ProyectoUsersAsignados:view', 'ProyectoUsersAsignados', 'view', 1, '2018-10-14 18:37:36', '2018-10-14 18:37:36'),
('9eded8d9-eab6-4959-9284-459c4f46d707', 'Clientes:edit', 'Clientes', 'edit', 1, '2018-10-14 18:35:12', '2018-10-14 18:35:12'),
('a67aff60-f008-4489-97b2-4cd0b5d8dd3c', 'Clientes:index', 'Clientes', 'index', 1, '2018-10-14 18:35:11', '2018-10-14 18:35:11'),
('ab02e34f-35d1-4ed5-b3f5-a26563520c1c', 'Menus:add', 'Menus', 'add', 1, '2018-10-14 18:35:36', '2018-10-14 18:35:36'),
('b271b13b-e74e-4c2d-a4de-1e4b6ddfb6d9', 'ProyectoCpanel:index', 'ProyectoCpanel', 'index', 1, '2018-10-14 18:36:27', '2018-10-14 18:36:27'),
('b2c4a86d-33fd-4e73-9e85-8e5c9bf7bfd0', 'ProyectoCuentasExtra:view', 'ProyectoCuentasExtra', 'view', 1, '2018-10-14 18:36:47', '2018-10-14 18:36:47'),
('ba766807-2e2f-4d54-9e0b-4e2f1f3589fd', 'ProyectoCorreos:edit', 'ProyectoCorreos', 'edit', 1, '2018-10-14 18:36:00', '2018-10-14 18:36:00'),
('bad9a8c1-4bd3-4894-ac71-e67c97c6c9a6', 'ProyectoCuentasExtra:delete', 'ProyectoCuentasExtra', 'delete', 1, '2018-10-14 18:36:47', '2018-10-14 18:36:47'),
('c16731ee-7f3e-42f8-a403-ce878a93dab6', 'ProyectosHistorico:edit', 'ProyectosHistorico', 'edit', 1, '2018-10-14 18:39:09', '2018-10-14 18:39:09'),
('c20895cc-f5f0-4a4d-ae1a-599789a58151', 'ProyectosHistorico:add', 'ProyectosHistorico', 'add', 1, '2018-10-14 18:39:08', '2018-10-14 18:39:08'),
('c3fb3c65-5953-45c2-9939-91ce54995de8', 'CatGrupos:index', 'CatGrupos', 'index', 1, '2018-10-14 18:19:22', '2018-10-14 18:19:22'),
('c5845065-67ba-4b94-82e5-1a7a13d7713d', 'ProyectoUsersAsignados:edit', 'ProyectoUsersAsignados', 'edit', 1, '2018-10-14 18:37:36', '2018-10-14 18:37:36'),
('cea9d32d-9e23-4bb9-a5de-20dc7961e0f6', 'CatGrupos:view', 'CatGrupos', 'view', 1, '2018-10-14 18:19:22', '2018-10-14 18:19:22'),
('cec1c3fe-a027-40ae-9b0a-38afd45b054a', 'Proyectos:index', 'Proyectos', 'index', 1, '2018-10-14 18:38:03', '2018-10-14 18:38:03'),
('db4bbf26-e6ab-4127-a78d-0df4676c5b49', 'ProyectosHistorico:view', 'ProyectosHistorico', 'view', 1, '2018-10-14 18:39:08', '2018-10-14 18:39:08'),
('e31c60c3-a34b-4817-bb98-6fca39d14ace', 'ProyectoCorreos:add', 'ProyectoCorreos', 'add', 1, '2018-10-14 18:36:00', '2018-10-14 18:36:00'),
('e9b72192-5bac-4ecf-852a-90c5a904c224', 'Clientes:add', 'Clientes', 'add', 1, '2018-10-14 18:35:12', '2018-10-14 18:35:12'),
('eb727dba-4995-4fab-b88d-547d9688fe21', 'ProyectoCuentasExtra:index', 'ProyectoCuentasExtra', 'index', 1, '2018-10-14 18:36:47', '2018-10-14 18:36:47'),
('ee6f830c-401e-4cbb-adaf-3733af8c2f65', 'ProyectosCuentasExtra:index', 'ProyectosCuentasExtra', 'index', 1, '2018-10-14 18:38:44', '2018-10-14 18:38:44'),
('fb7b36b1-7dd8-4189-b60d-f46a217a64d8', 'CatGrupos:edit', 'CatGrupos', 'edit', 1, '2018-10-14 18:19:23', '2018-10-14 18:19:23'),
('fc1c3c3c-51db-440a-bec9-a7f69b610baa', 'ProyectoDns:index', 'ProyectoDns', 'index', 1, '2018-10-14 18:37:15', '2018-10-14 18:37:15');

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

--
-- Volcado de datos para la tabla `r_permisos_grupos`
--

INSERT INTO `r_permisos_grupos` (`id`, `id_cat_grupo`, `id_cat_permiso`, `activo`) VALUES
('087ad055-f94c-441b-85a9-62ce104dbb82', '26d122cd-64bb-442b-8d55-876f72f925cc', '7ef9ad74-4378-46a9-be3a-dc61f7bb7145', 1),
('0a0f8e0c-b8b2-4c36-a575-e19a54e6e583', '26d122cd-64bb-442b-8d55-876f72f925cc', 'c3fb3c65-5953-45c2-9939-91ce54995de8', 1),
('10999d59-a40f-4cf0-a1b2-96372de9d02a', '26d122cd-64bb-442b-8d55-876f72f925cc', '030901b6-99da-4f46-aaf5-7537c563c201', 1),
('11b7d942-26dc-4532-a899-87c4db66b229', '26d122cd-64bb-442b-8d55-876f72f925cc', 'c20895cc-f5f0-4a4d-ae1a-599789a58151', 1),
('14b4ab17-309f-467b-837f-4e9c38c8cf98', '26d122cd-64bb-442b-8d55-876f72f925cc', 'eb727dba-4995-4fab-b88d-547d9688fe21', 1),
('17e44bb2-b4c6-4a05-88e2-a24a869a4427', '26d122cd-64bb-442b-8d55-876f72f925cc', '045f323b-6960-4ab8-a25e-11d17a507620', 1),
('18d5e740-89b4-492d-86ec-e2b448d9163b', '26d122cd-64bb-442b-8d55-876f72f925cc', 'b2c4a86d-33fd-4e73-9e85-8e5c9bf7bfd0', 1),
('1ad189a9-7778-427f-a98a-db980ccba34e', '26d122cd-64bb-442b-8d55-876f72f925cc', '20e5deee-f4f4-4062-a8fb-60e16eb0d982', 1),
('2942e919-48b4-483e-aa24-72e57db9531e', '26d122cd-64bb-442b-8d55-876f72f925cc', 'e9b72192-5bac-4ecf-852a-90c5a904c224', 1),
('332ef2c4-5e51-48f5-81ff-ab7fec05a876', '26d122cd-64bb-442b-8d55-876f72f925cc', '8469a7b4-a575-4233-91b5-d788835dcdab', 1),
('3f77f9ed-462f-4406-9aee-5dd80a6fdab4', '26d122cd-64bb-442b-8d55-876f72f925cc', '7bc0e4ac-0554-4ae4-bf63-0eb87d39e455', 1),
('42720753-1519-44d5-840c-d16bb46b94cb', '26d122cd-64bb-442b-8d55-876f72f925cc', 'b271b13b-e74e-4c2d-a4de-1e4b6ddfb6d9', 1),
('43fe7ccb-14f9-42b2-97f2-9e0bf211cc59', '26d122cd-64bb-442b-8d55-876f72f925cc', 'c5845065-67ba-4b94-82e5-1a7a13d7713d', 1),
('45c3c2b4-81a6-4a08-8489-a97fbf53afe2', '26d122cd-64bb-442b-8d55-876f72f925cc', '76d373ba-6b98-417d-bc9b-0caa4b4f0ebd', 1),
('485c451f-8148-4026-b902-3396e501cb13', '26d122cd-64bb-442b-8d55-876f72f925cc', '02bff60a-2eaf-4678-8b30-1de2d8a0f807', 1),
('49d95b95-72f1-4908-8a44-14c9c8853543', '26d122cd-64bb-442b-8d55-876f72f925cc', '99b9c242-a4bc-4833-9549-20569419e33d', 1),
('4ed32c58-0e42-4184-a04a-4d3af5646c93', '26d122cd-64bb-442b-8d55-876f72f925cc', '627c414b-f9ab-4529-ab05-c6d59777a558', 1),
('59452e96-8898-41dd-9c8d-66047fd99ed9', '26d122cd-64bb-442b-8d55-876f72f925cc', 'e31c60c3-a34b-4817-bb98-6fca39d14ace', 1),
('5969e346-bfab-4112-b4ae-51cf01c3d1f1', '26d122cd-64bb-442b-8d55-876f72f925cc', '9eded8d9-eab6-4959-9284-459c4f46d707', 1),
('5f6796bc-1d5e-4cfe-b64b-5a87605870c8', '26d122cd-64bb-442b-8d55-876f72f925cc', '4df8fa0d-d27a-44af-bd63-3610cd1b9aeb', 1),
('62b95cc0-a289-404f-89a8-f397f380bfc6', '26d122cd-64bb-442b-8d55-876f72f925cc', '181643ac-c22d-4b26-b648-b25917282501', 1),
('66c309c2-1111-49d4-9549-a9d353d6cfda', '26d122cd-64bb-442b-8d55-876f72f925cc', 'a67aff60-f008-4489-97b2-4cd0b5d8dd3c', 1),
('72b12a15-c5f5-47d4-be56-d1ffdc7c18bf', '26d122cd-64bb-442b-8d55-876f72f925cc', '0aae94a1-3af8-4eb7-a99d-9addddd66dbf', 1),
('75b7112c-50f7-4edb-9a00-b6df179e6e92', '26d122cd-64bb-442b-8d55-876f72f925cc', '99812462-2d25-43b4-8105-2fee3f0a5d7a', 1),
('75d39fe3-d6a3-4afb-9dd4-a7e88ef50a7b', '26d122cd-64bb-442b-8d55-876f72f925cc', '8342e5fc-77e6-4aa8-b275-46a222d6bd3d', 1),
('7b34345c-c05e-49e8-adff-191c9b29dfd1', '26d122cd-64bb-442b-8d55-876f72f925cc', '3151cd3e-7017-49e3-93b3-c9e5a376a3cc', 1),
('7d0a6887-996e-403f-ada2-66879a8e7bb9', '26d122cd-64bb-442b-8d55-876f72f925cc', 'c16731ee-7f3e-42f8-a403-ce878a93dab6', 1),
('8050fa0d-d9ee-4350-b171-dd405f626859', '26d122cd-64bb-442b-8d55-876f72f925cc', '4c73b14a-73ea-4923-847f-18b3576c642f', 1),
('9144f9b0-1ffe-4d0e-901f-d341971f321a', '26d122cd-64bb-442b-8d55-876f72f925cc', '691644b7-ea31-47cb-9b25-c2f27f6e14a3', 1),
('92b280b3-8243-480e-8cdf-d71b600c862c', '26d122cd-64bb-442b-8d55-876f72f925cc', '016413df-54cc-4542-862e-02141a28699d', 1),
('95241f02-b421-4dd2-a13e-056a0140a38a', '26d122cd-64bb-442b-8d55-876f72f925cc', '176ea305-2f92-4f29-a1af-05f62c1d75ef', 1),
('95285a30-3033-46ba-821d-6ddf28856283', '26d122cd-64bb-442b-8d55-876f72f925cc', '5d324fc2-9ea2-463f-a76e-52cb23ba82c0', 1),
('977e4b47-ffa1-4c82-9805-1c743b413f92', '26d122cd-64bb-442b-8d55-876f72f925cc', 'db4bbf26-e6ab-4127-a78d-0df4676c5b49', 1),
('991bc3fe-f1e0-401d-aa37-049742374ea1', '26d122cd-64bb-442b-8d55-876f72f925cc', '5ec85f5e-5ce5-4da4-ac1b-3f788fe30f60', 1),
('9b4ad04f-a58d-47bd-8724-20badb9e0cf1', '26d122cd-64bb-442b-8d55-876f72f925cc', 'ba766807-2e2f-4d54-9e0b-4e2f1f3589fd', 1),
('9bb97201-8f48-4b68-b81d-0ab5df096cb2', '26d122cd-64bb-442b-8d55-876f72f925cc', 'ee6f830c-401e-4cbb-adaf-3733af8c2f65', 1),
('a09616ce-8935-40b2-99cf-4ff59540edbf', '26d122cd-64bb-442b-8d55-876f72f925cc', 'ab02e34f-35d1-4ed5-b3f5-a26563520c1c', 1),
('a9562c48-0cf7-493c-9596-47ab341f187d', '26d122cd-64bb-442b-8d55-876f72f925cc', 'cec1c3fe-a027-40ae-9b0a-38afd45b054a', 1),
('a98bd791-c536-464d-ae5e-e1fc0b03b8d8', '26d122cd-64bb-442b-8d55-876f72f925cc', '66ee32a6-5d1b-4c70-9d13-32996402c011', 1),
('aea1459a-119b-4c94-8021-5cbfcefd9de5', '26d122cd-64bb-442b-8d55-876f72f925cc', 'fb7b36b1-7dd8-4189-b60d-f46a217a64d8', 1),
('af34ddad-f454-4054-9b5a-a33d02514283', '26d122cd-64bb-442b-8d55-876f72f925cc', '1bce6ff8-897c-4e2d-bd47-1bc7de628cfa', 1),
('b1c968ec-a8d5-47ab-91ef-0cde784cfdf2', '26d122cd-64bb-442b-8d55-876f72f925cc', '70c23c27-9111-4e52-9967-6e35ab1c09e1', 1),
('b4b34fb1-d851-4e07-bde6-34e907e5faa1', '26d122cd-64bb-442b-8d55-876f72f925cc', '405adefe-cb39-457d-aaf6-d778f3c02df4', 1),
('c331a9f8-cdda-4cca-b400-8100a9f8492d', '26d122cd-64bb-442b-8d55-876f72f925cc', 'cea9d32d-9e23-4bb9-a5de-20dc7961e0f6', 1),
('c9108917-544e-447b-a77b-6f43332e93d6', '26d122cd-64bb-442b-8d55-876f72f925cc', '8541ddc5-77c2-4953-ba72-1eef9b375062', 1),
('ccab0a5c-8981-409b-a230-0f106c9a1c19', '26d122cd-64bb-442b-8d55-876f72f925cc', '77f58485-da81-4c5d-b02f-7d54b56c090a', 1),
('cf6653d4-5812-43b4-b0e6-524a76acbb8a', '26d122cd-64bb-442b-8d55-876f72f925cc', '7447d486-e74a-4fc4-94c1-e4cc9f861a06', 1),
('d9df5a97-5e5d-4da2-b0a7-9dfef1c7742d', '26d122cd-64bb-442b-8d55-876f72f925cc', 'fc1c3c3c-51db-440a-bec9-a7f69b610baa', 1),
('da50fa72-0799-422d-9208-1c5fd874372d', '26d122cd-64bb-442b-8d55-876f72f925cc', '73f55d80-1e70-4041-ba25-c588d013842a', 1),
('db606967-49a3-4557-8c66-b761ccbe7862', '26d122cd-64bb-442b-8d55-876f72f925cc', '0b20c3d3-c787-4a9c-99a4-87a456a1ad76', 1),
('e1d348f8-0aad-4533-aa38-74d197cd1671', '26d122cd-64bb-442b-8d55-876f72f925cc', '10326877-ee46-41a9-88b0-7a42aa278074', 1),
('e3ada7fc-d4ff-49c9-8077-68c8a557a4fc', '26d122cd-64bb-442b-8d55-876f72f925cc', '2d62bc35-a8d2-4742-8512-f0dac502e535', 1),
('e6121e34-6bdd-406d-a903-00e9a792aae2', '26d122cd-64bb-442b-8d55-876f72f925cc', '3513a632-057a-4aed-8604-70f96b742fde', 1),
('e970a996-9f15-4788-b447-f327444ad54b', '26d122cd-64bb-442b-8d55-876f72f925cc', '3c31b888-0b58-47c1-9bd1-dac9ca5d203c', 1),
('ea0e90e0-8b56-4d02-ad35-b8c660c0ce71', '26d122cd-64bb-442b-8d55-876f72f925cc', '95220869-7984-4b42-94fa-af3a425446b5', 1),
('edc4ce32-812f-4d32-b239-30a2c50f012b', '26d122cd-64bb-442b-8d55-876f72f925cc', '7360544d-8fcf-420c-b903-8bc41ad08209', 1),
('ef2af72f-c019-41bb-a928-9bb2a9509909', '26d122cd-64bb-442b-8d55-876f72f925cc', '16aa4650-4c28-49e0-a5c3-8222720f5244', 1),
('f00fae78-202f-4188-83a3-2cca3902ffa5', '26d122cd-64bb-442b-8d55-876f72f925cc', 'bad9a8c1-4bd3-4894-ac71-e67c97c6c9a6', 1),
('f1163971-56c4-43cf-8c0c-33dfd53553ce', '26d122cd-64bb-442b-8d55-876f72f925cc', '75e4fca4-1787-41e1-b6d0-13e552ef3523', 1),
('fee6d2e9-5847-4be7-9a19-704031f1dc79', '26d122cd-64bb-442b-8d55-876f72f925cc', '53d1a174-709f-4b6a-b3eb-fb42b1978cea', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `social_profiles`
--

CREATE TABLE `social_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) NOT NULL,
  `access_token` blob NOT NULL,
  `identifier` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birth_date` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `picture_url` varchar(255) DEFAULT NULL,
  `email_verified` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `social_profiles`
--

INSERT INTO `social_profiles` (`id`, `user_id`, `provider`, `access_token`, `identifier`, `username`, `first_name`, `last_name`, `full_name`, `email`, `birth_date`, `gender`, `picture_url`, `email_verified`, `created`, `modified`) VALUES
(3, 0, 'facebook', 0x4f3a33323a22536f6369616c436f6e6e6563745c4f41757468325c416363657373546f6b656e223a333a7b733a383a22002a00746f6b656e223b733a3138313a2245414148656d4d6a7a516c454241466d5a437a71484865525a426d5a42704250455958556c633173594e704e626c466a6d347041686d795a41353833317537744a375a41534b5548734252654b6b4e714f6c5a4349464b55676b6e63313451646337625a434279366979395a424d746e716f77675a436c467863755546734a654c7135726b67646a7177764171324842574e6d4e4235426442324145384c5a4339614e5573645864744769566a337636415a445a44223b733a31303a22002a0065787069726573223b693a313534343432303637393b733a363a22002a00756964223b4e3b7d, '1928006713946642', NULL, 'Cruz', 'Chulim Bautista', 'Cruz Chulim Bautista', 'lobo16_ch@hotmail.com', NULL, NULL, NULL, 1, '2018-10-11 06:40:22', '2018-10-11 06:55:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `grupo_id` varchar(36) COLLATE utf8_spanish_ci NOT NULL,
  `ultimo_acceso` datetime DEFAULT NULL,
  `email` varchar(256) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombres`, `apellidos`, `username`, `password`, `grupo_id`, `ultimo_acceso`, `email`, `telefono`, `activo`, `created`, `modified`) VALUES
('1e4d02a5-d84a-4d17-93f9-49054abcfd10', 'Fredy', 'Osorio', 'fosorio', '$2y$10$qmZWkylfefCUS7t7In6gIO5tDu5msGYUDUaaK12AbLHRRmnAB3may', '26d122cd-64bb-442b-8d55-876f72f925cc', NULL, NULL, '9831430498', 1, '2018-10-14 17:14:10', '2018-10-14 17:14:10'),
('83a0d19f-d753-4ee5-83f3-cd139a06ba1a', 'Anastacio de la Cruz', 'Chulim Bautista', 'achulim', '$2y$10$EmWR0DPP7HZMooybjLD4K.Kh8zGzTtQwFamRYZw619tpQlhfIq7pS', '26d122cd-64bb-442b-8d55-876f72f925cc', '2018-10-14 18:47:43', NULL, '9831039027', 1, '2018-10-14 16:42:25', '2018-10-14 18:47:43'),
('8b174126-32ce-4b26-a151-a278dcc15275', 'Jose Carlos', 'Romero Vera', 'cromero', '$2y$10$6IPdmvM0uPbz1OBjoP6lq.UY94UcpWv6k1sU30Z4QfDi.WwvJTzCe', '26d122cd-64bb-442b-8d55-876f72f925cc', NULL, NULL, '9831161061', 1, '2018-10-14 17:08:52', '2018-10-14 17:08:52'),
('dcbd9147-cf67-45f6-85a6-77661d2a29c1', 'Carlos Eduardo', 'Peña Cuich', 'cpena', '$2y$10$OiCVxI0/GySlWBlyRdl9suzUGy0iSjy8N4E2Wq.8c.9i6bOu//sA2', '26d122cd-64bb-442b-8d55-876f72f925cc', NULL, NULL, '9831115181', 1, '2018-10-14 16:57:41', '2018-10-14 16:57:41');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_grupos_permisos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_grupos_permisos` (
`id` char(36)
,`permiso` varchar(401)
,`co_grupo_id` char(36)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `v_grupos_permisos`
--
DROP TABLE IF EXISTS `v_grupos_permisos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_grupos_permisos`  AS  (select `cat_permisos`.`id` AS `id`,concat(`cat_permisos`.`controlador`,':',`cat_permisos`.`accion`) AS `permiso`,`cat_grupos`.`id` AS `co_grupo_id` from ((`cat_grupos` join `r_permisos_grupos` on((`r_permisos_grupos`.`id_cat_grupo` = `cat_grupos`.`id`))) join `cat_permisos` on((`r_permisos_grupos`.`id_cat_permiso` = `cat_permisos`.`id`)))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `a_dmad_social_auth_phinxlog`
--
ALTER TABLE `a_dmad_social_auth_phinxlog`
  ADD PRIMARY KEY (`version`);

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
-- Indices de la tabla `social_profiles`
--
ALTER TABLE `social_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_ibfk_1` (`grupo_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `social_profiles`
--
ALTER TABLE `social_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`grupo_id`) REFERENCES `cat_grupos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
