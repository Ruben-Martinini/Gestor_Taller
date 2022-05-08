-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3308
-- Tiempo de generación: 24-04-2022 a las 03:32:34
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_taller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destino_repuestos`
--

CREATE TABLE `destino_repuestos` (
  `id_destino` int(11) NOT NULL,
  `repuesto_id` int(11) NOT NULL,
  `dp1` int(11) NOT NULL,
  `dp2` int(11) NOT NULL,
  `dp3` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha_hora_crud` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `destino_repuestos`
--

INSERT INTO `destino_repuestos` (`id_destino`, `repuesto_id`, `dp1`, `dp2`, `dp3`, `usuario_id`, `fecha_hora_crud`) VALUES
(1, 1, 2, 1, 1, 2, '2022-04-18 13:59:39'),
(2, 2, 5, 0, 0, 2, '2022-03-08 22:15:56'),
(3, 3, 2, 2, 0, 3, '2022-03-08 22:15:56'),
(4, 4, 2, 2, 0, 1, '2022-03-08 22:15:56'),
(5, 5, 1, 4, 1, 2, '2022-03-08 22:15:56'),
(6, 6, 6, 5, 4, 1, '2022-04-23 16:49:44'),
(7, 7, 1, 10, 3, 1, '2022-03-08 22:15:56'),
(8, 8, 0, 10, 1, 2, '2022-03-08 22:15:56'),
(9, 9, 2, 12, 3, 3, '2022-03-08 22:15:56'),
(10, 10, 13, 2, 5, 1, '2022-03-08 22:15:56'),
(11, 11, 3, 3, 3, 2, '2022-03-08 22:15:56'),
(12, 12, 12, 1, 5, 3, '2022-03-08 22:15:56'),
(13, 13, 1, 7, 1, 1, '2022-03-08 22:15:56'),
(14, 14, 7, 10, 9, 2, '2022-03-08 22:15:56'),
(15, 15, 0, 5, 1, 3, '2022-03-08 22:15:56'),
(16, 16, 30, 14, 6, 1, '2022-03-08 22:15:56'),
(17, 17, 5, 11, 8, 2, '2022-03-08 22:15:56'),
(18, 18, 6, 1, 5, 3, '2022-03-08 22:15:56'),
(19, 19, 7, 0, 2, 1, '2022-03-08 22:15:56'),
(20, 20, 8, 2, 2, 2, '2022-03-08 22:15:56'),
(21, 21, 12, 3, 1, 3, '2022-03-08 22:15:56'),
(22, 22, 45, 1, 10, 1, '2022-03-08 22:15:56'),
(23, 23, 1, 9, 1, 2, '2022-03-08 22:15:56'),
(24, 24, 6, 10, 0, 3, '2022-03-08 22:15:56'),
(25, 25, 8, 2, 2, 1, '2022-03-08 22:15:56'),
(26, 26, 3, 8, 13, 2, '2022-03-08 22:15:56'),
(27, 27, 0, 4, 3, 3, '2022-03-08 22:15:56'),
(28, 28, 15, 5, 12, 1, '2022-03-08 22:15:56'),
(29, 29, 12, 5, 1, 2, '2022-03-08 22:15:56'),
(30, 30, 6, 1, 7, 3, '2022-03-08 22:15:56'),
(31, 31, 6, 2, 0, 1, '2022-03-08 22:15:56'),
(32, 32, 16, 4, 30, 2, '2022-03-08 22:15:56'),
(33, 33, 10, 3, 5, 3, '2022-03-08 22:15:56'),
(34, 34, 4, 2, 6, 1, '2022-03-08 22:15:56'),
(35, 35, 5, 2, 7, 2, '2022-03-08 22:15:56'),
(36, 36, 6, 2, 8, 3, '2022-03-08 22:15:56'),
(37, 37, 12, 6, 12, 2, '2022-04-18 17:56:19'),
(38, 38, 5, 7, 3, 2, '2022-04-05 18:34:50'),
(39, 39, 5, 0, 1, 3, '2022-03-08 22:15:56'),
(40, 40, 10, 8, 6, 1, '2022-03-08 22:15:56'),
(41, 41, 4, 1, 8, 2, '2022-03-08 22:15:56'),
(42, 42, 6, 7, 3, 3, '2022-03-08 22:15:56'),
(43, 43, 27, 2, 0, 1, '2022-03-08 22:15:56'),
(44, 44, 32, 1, 15, 2, '2022-03-08 22:15:56'),
(45, 45, 13, 1, 12, 3, '2022-03-08 22:15:56'),
(46, 46, 5, 8, 6, 1, '2022-03-08 22:15:56'),
(47, 47, 8, 8, 6, 2, '2022-03-08 22:15:56'),
(48, 48, 19, 9, 16, 3, '2022-03-08 22:15:56'),
(49, 49, 11, 8, 10, 1, '2022-03-08 22:15:56'),
(50, 50, 4, 2, 4, 2, '2022-03-08 22:15:56'),
(51, 51, 5, 2, 5, 3, '2022-03-08 22:15:56'),
(52, 52, 0, 4, 6, 1, '2022-03-08 22:15:56'),
(53, 53, 1, 8, 17, 2, '2022-03-08 22:15:56'),
(54, 54, 7, 5, 25, 3, '2022-03-08 22:15:56'),
(55, 55, 22, 9, 5, 1, '2022-03-08 22:15:56'),
(56, 56, 5, 4, 10, 2, '2022-03-08 22:15:56'),
(57, 57, 9, 3, 4, 1, '2022-03-08 22:15:56'),
(58, 58, 2, 5, 6, 1, '2022-03-08 22:15:56'),
(59, 59, 4, 15, 21, 1, '2022-04-23 15:40:56'),
(60, 60, 3, 27, 32, 2, '2022-03-08 22:15:56'),
(61, 61, 9, 0, 13, 2, '2022-03-08 22:15:56'),
(62, 62, 10, 0, 5, 2, '2022-03-08 22:15:56'),
(63, 63, 0, 0, 8, 2, '2022-03-08 22:15:56'),
(64, 104, 3, 0, 0, 1, '2022-03-08 22:15:56'),
(65, 105, 3, 0, 0, 1, '2022-03-08 22:15:56'),
(72, 106, 3, 0, 0, 1, '2022-03-08 22:15:56'),
(73, 107, 4, 0, 0, 1, '2022-03-08 22:15:56'),
(74, 108, 3, 0, 0, 1, '2022-03-08 22:15:56'),
(75, 109, 6, 0, 0, 1, '2022-03-08 22:15:56'),
(76, 110, 8, 0, 0, 1, '2022-03-08 22:15:56'),
(79, 111, 10, 0, 0, 1, '2022-03-08 22:15:56'),
(83, 113, 5, 0, 0, 1, '2022-03-08 22:15:56'),
(84, 114, 7, 0, 0, 1, '2022-03-08 22:15:56'),
(85, 115, 9, 0, 0, 1, '2022-03-08 22:15:56'),
(86, 116, 8, 0, 0, 1, '2022-03-08 22:15:56'),
(87, 117, 10, 0, 0, 1, '2022-03-08 22:15:56'),
(88, 118, 10, 0, 0, 1, '2022-03-08 22:15:56'),
(89, 119, 7, 0, 0, 1, '2022-03-08 22:15:56'),
(91, 120, 8, 0, 0, 1, '2022-03-08 22:15:56'),
(93, 121, 6, 0, 0, 1, '2022-03-08 22:15:56'),
(96, 124, 2, 0, 0, 1, '2022-03-08 22:15:56'),
(97, 125, 8, 0, 0, 1, '2022-03-08 22:15:56'),
(98, 126, 12, 0, 0, 1, '2022-03-08 22:15:56'),
(99, 127, 7, 0, 0, 1, '2022-03-08 22:15:56'),
(100, 128, 10, 0, 0, 1, '2022-03-08 22:15:56'),
(101, 129, 3, 0, 0, 2, '2022-03-08 22:15:56'),
(102, 130, 30, 0, 0, 2, '2022-03-08 22:15:56'),
(103, 131, 2, 0, 0, 2, '2022-03-08 22:15:56'),
(104, 132, 2, 0, 0, 2, '2022-03-08 22:15:56'),
(105, 133, 3, 0, 0, 2, '2022-03-08 22:15:56'),
(106, 134, 22, 0, 0, 2, '2022-03-08 22:15:56'),
(107, 135, 5, 0, 0, 1, '2022-03-08 22:15:56'),
(108, 136, 10, 0, 0, 1, '2022-03-08 22:15:56'),
(109, 137, 37, 0, 0, 1, '2022-03-08 22:15:56'),
(110, 138, 5, 0, 0, 1, '2022-03-08 22:15:56'),
(111, 139, 25, 0, 0, 1, '2022-03-08 22:15:56'),
(112, 140, 5, 0, 0, 1, '2022-03-08 22:15:56'),
(113, 141, 11, 0, 0, 1, '2022-03-08 22:15:56'),
(114, 142, 8, 0, 0, 1, '2022-03-08 22:15:56'),
(115, 143, 7, 0, 0, 1, '2022-03-08 22:15:56'),
(116, 144, 9, 0, 0, 2, '2022-03-08 22:15:56'),
(117, 145, 9, 0, 0, 2, '2022-03-08 22:15:56'),
(118, 146, 39, 6, 4, 3, '2022-04-19 17:52:46'),
(119, 147, 10, 0, 0, 2, '2022-03-08 22:28:42'),
(120, 148, 5, 0, 0, 2, '2022-03-08 23:11:25'),
(121, 149, 8, 0, 0, 3, '2022-03-09 21:36:00'),
(122, 150, 2, 0, 0, 2, '2022-03-09 23:07:53'),
(123, 151, 4, 0, 0, 2, '2022-03-09 23:11:33'),
(124, 152, 40, 0, 0, 2, '2022-03-09 23:15:51'),
(125, 153, 5, 0, 0, 2, '2022-03-09 23:20:22'),
(126, 154, 8, 0, 0, 2, '2022-03-09 23:26:38'),
(127, 155, 5, 0, 0, 2, '2022-03-10 13:50:11'),
(128, 156, 30, 0, 0, 2, '2022-03-10 21:35:08'),
(129, 157, 5, 0, 0, 1, '2022-03-10 21:52:27'),
(131, 159, 1, 0, 0, 2, '2022-03-15 18:48:51'),
(133, 161, 5, 0, 0, 1, '2022-03-16 22:26:04'),
(141, 163, 5, 0, 0, 1, '2022-03-27 15:32:28'),
(142, 164, 26, 5, 4, 3, '2022-04-20 13:52:15'),
(143, 165, 45, 0, 0, 1, '2022-04-22 23:02:39'),
(144, 166, 10, 0, 0, 2, '2022-04-22 23:08:32'),
(145, 167, 10, 0, 0, 1, '2022-04-23 00:18:39'),
(146, 168, 8, 0, 0, 2, '2022-04-23 01:06:30'),
(147, 169, 15, 0, 0, 1, '2022-04-23 01:11:03'),
(148, 170, 3, 0, 0, 1, '2022-04-23 01:12:55'),
(149, 171, 3, 2, 1, 1, '2022-04-23 15:26:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `clave` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `es_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id_usuario`, `usuario`, `clave`, `es_admin`) VALUES
(1, 'mecanico1', '1234', 1),
(2, 'mecanico2', '5678', 1),
(3, 'mecanico3', '9012', 1),
(4, 'invitado1', '1234', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo_repuesto`
--

CREATE TABLE `modelo_repuesto` (
  `id_modelo` int(11) NOT NULL,
  `repuesto_id` int(11) NOT NULL,
  `fecha_hora_crud` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `marca` varchar(40) CHARACTER SET utf8 NOT NULL,
  `SPORTMAN_500_4x2` tinyint(1) NOT NULL,
  `SPORTMAN_500_4x4` tinyint(1) NOT NULL,
  `SPORTMAN_570_4x4` tinyint(1) NOT NULL,
  `RANGER_700_4x4` tinyint(1) NOT NULL,
  `RANGER_700_6x6` tinyint(1) NOT NULL,
  `RANGER_900_4x4` tinyint(1) NOT NULL,
  `IQ_600` tinyint(1) NOT NULL,
  `LX_500` tinyint(1) NOT NULL,
  `LX_550` tinyint(1) NOT NULL,
  `120_PRO` tinyint(1) NOT NULL,
  `25HP_2CYL` tinyint(1) NOT NULL,
  `40HP_2CYL` tinyint(1) NOT NULL,
  `40HP_3CYL` tinyint(1) NOT NULL,
  `50HP_2CYL` tinyint(1) NOT NULL,
  `50HP_3CYL` tinyint(1) NOT NULL,
  `150HP_6CYL` tinyint(1) NOT NULL,
  `U1000` tinyint(1) NOT NULL,
  `U2000` tinyint(1) NOT NULL,
  `EG6500` tinyint(1) NOT NULL,
  `ET12000` tinyint(1) NOT NULL,
  `WB_20XH` tinyint(1) NOT NULL,
  `WB_20XT` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modelo_repuesto`
--

INSERT INTO `modelo_repuesto` (`id_modelo`, `repuesto_id`, `fecha_hora_crud`, `marca`, `SPORTMAN_500_4x2`, `SPORTMAN_500_4x4`, `SPORTMAN_570_4x4`, `RANGER_700_4x4`, `RANGER_700_6x6`, `RANGER_900_4x4`, `IQ_600`, `LX_500`, `LX_550`, `120_PRO`, `25HP_2CYL`, `40HP_2CYL`, `40HP_3CYL`, `50HP_2CYL`, `50HP_3CYL`, `150HP_6CYL`, `U1000`, `U2000`, `EG6500`, `ET12000`, `WB_20XH`, `WB_20XT`) VALUES
(3, 129, '2022-03-08 22:17:27', 'Honda', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0),
(4, 130, '2022-03-08 22:17:27', 'Mercury', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(5, 131, '2022-03-08 22:17:27', 'Polaris', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 132, '2022-03-08 22:17:27', 'Polaris', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 133, '2022-03-08 22:17:27', 'Mercury', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0),
(8, 134, '2022-03-08 22:17:27', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 135, '2022-03-08 22:17:27', 'Honda', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(10, 136, '2022-03-08 22:17:27', 'Polaris', 0, 0, 0, 1, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 137, '2022-03-08 22:17:27', 'Honda', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1),
(12, 138, '2022-03-08 22:17:27', 'Mercury', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0),
(13, 139, '2022-03-25 22:50:47', 'Polaris', 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 140, '2022-03-08 22:17:27', 'Mercury', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 141, '2022-03-08 22:17:27', 'Honda', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(16, 142, '2022-04-20 13:36:05', 'Honda', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0),
(17, 143, '2022-03-08 22:17:27', 'Mercury', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 144, '2022-03-25 21:49:33', 'Polaris', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 145, '2022-03-08 22:17:27', 'Mercury', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(20, 146, '2022-03-08 22:17:27', 'Polaris', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 147, '2022-03-08 22:17:27', 'Polaris', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 148, '2022-03-09 21:25:04', 'Honda', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(23, 149, '2022-03-21 23:21:14', 'Polaris', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 150, '2022-03-21 23:21:39', 'Honda', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(25, 151, '2022-03-17 01:17:06', 'Mercury', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 152, '2022-03-21 14:03:06', 'Polaris', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 153, '2022-03-25 22:01:33', 'Mercury', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 154, '2022-03-10 01:17:11', 'Polaris', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 155, '2022-03-10 14:03:55', 'Mercury', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 156, '2022-03-10 21:36:34', 'Polaris', 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 157, '2022-03-10 21:52:57', 'Honda', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0),
(33, 159, '2022-03-15 18:48:51', 'Polaris', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 161, '2022-03-16 22:26:04', 'Polaris', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 163, '2022-03-27 15:32:28', 'Polaris', 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 164, '2022-04-20 13:41:13', 'Polaris', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 165, '2022-04-22 23:06:09', 'Mercury', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 166, '2022-04-22 23:08:32', 'Honda', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0),
(47, 167, '2022-04-23 00:18:39', 'Polaris', 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 168, '2022-04-23 01:06:30', 'Polaris', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 169, '2022-04-23 01:11:03', 'Honda', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0),
(50, 170, '2022-04-23 01:12:55', 'Honda', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(51, 171, '2022-04-23 15:20:02', 'Honda', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_compra`
--

CREATE TABLE `orden_compra` (
  `id_oc` int(11) NOT NULL,
  `repuesto_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `nro_oc` varchar(40) CHARACTER SET utf8 NOT NULL,
  `fecha_hora_crud` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `orden_compra`
--

INSERT INTO `orden_compra` (`id_oc`, `repuesto_id`, `usuario_id`, `nro_oc`, `fecha_hora_crud`) VALUES
(1, 125, 1, '26-1111-OC21', '2022-02-28 22:21:23'),
(2, 126, 1, '26-1245-OC21', '2022-02-28 22:25:34'),
(3, 127, 1, 'Caja chica', '2022-03-01 21:35:42'),
(4, 128, 1, '26-1212-OC22', '2022-03-01 21:51:49'),
(5, 129, 2, '26-1111-OC21', '2022-03-04 21:06:59'),
(6, 130, 2, '26-1224-OC22', '2022-03-04 21:16:58'),
(7, 131, 2, '26-1244-OC21', '2022-03-04 22:21:08'),
(8, 123, 1, '26-1244-OC21', '2022-03-05 23:24:53'),
(9, 132, 2, '26-1144-OC21', '2022-03-06 20:49:24'),
(10, 133, 2, '26-1120-OC21', '2022-03-06 21:15:59'),
(11, 134, 2, '26-1140-OC21', '2022-03-06 22:42:19'),
(12, 135, 1, '26-1341-OC', '2022-03-07 14:05:02'),
(13, 136, 1, '26-1120-OC21', '2022-03-07 17:52:04'),
(14, 137, 1, '26-1322-OC', '2022-03-07 18:22:57'),
(15, 138, 1, '26-2223-OC21', '2022-03-07 18:29:33'),
(16, 139, 1, '26-1311-OC21', '2022-03-07 19:56:55'),
(17, 140, 1, '26-1441-OC22', '2022-03-07 19:59:36'),
(18, 141, 1, '26-1234-OC21', '2022-03-07 20:19:29'),
(19, 142, 1, '26-1239-OC21', '2022-03-07 21:49:33'),
(20, 143, 1, '26-1212-OC21', '2022-03-07 22:01:01'),
(21, 144, 2, '26-3212-OC22', '2022-03-08 17:49:41'),
(22, 145, 2, '26-1223-OC21', '2022-03-08 20:17:04'),
(23, 146, 2, '26-1223-OC', '2022-03-08 20:28:48'),
(24, 147, 2, '26-3215-OC21', '2022-03-08 22:02:00'),
(25, 148, 2, '26-1222-OC21', '2022-03-08 22:51:21'),
(26, 149, 3, '26-1245-OC21', '2022-03-09 21:31:38'),
(27, 150, 2, '26-1223-OC21', '2022-03-09 23:07:53'),
(28, 151, 2, '26-1111-OC22', '2022-03-09 23:11:33'),
(29, 152, 2, '26-1112-OC21', '2022-03-09 23:15:51'),
(30, 153, 2, '26-2134-OC21', '2022-03-09 23:20:22'),
(31, 154, 2, '', '2022-03-09 23:58:20'),
(32, 155, 2, '26-1233-OC', '2022-03-10 13:50:11'),
(33, 156, 2, '26-1243-OC21', '2022-03-10 21:37:05'),
(40, 123, 1, '26-1244-OC21', '2022-03-27 00:11:37'),
(41, 163, 1, '26-3422-OC22', '2022-03-27 15:32:28'),
(42, 164, 3, '26-2344-OC22', '2022-04-20 13:41:13'),
(43, 165, 1, '26-3422-OC22', '2022-04-22 23:06:09'),
(44, 166, 2, '26-1111-OC22', '2022-04-22 23:08:32'),
(45, 167, 1, 'PNUD OC-2345', '2022-04-23 00:18:39'),
(46, 168, 2, 'Caja chica', '2022-04-23 01:06:30'),
(47, 169, 1, '26-1234-OC22', '2022-04-23 01:11:03'),
(48, 170, 1, '26-3233-OC21', '2022-04-23 01:12:55'),
(49, 171, 1, 'Caja chica 2022', '2022-04-23 15:20:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuestos`
--

CREATE TABLE `repuestos` (
  `id_repuesto` int(11) NOT NULL,
  `nro_parte` varchar(40) CHARACTER SET utf8 NOT NULL,
  `designacion` text CHARACTER SET utf8 NOT NULL,
  `aplicacion` text CHARACTER SET utf8 NOT NULL,
  `ubicacion` varchar(40) CHARACTER SET utf8 NOT NULL,
  `marca` varchar(40) CHARACTER SET utf8 NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha_hora_crud` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `repuestos`
--

INSERT INTO `repuestos` (`id_repuesto`, `nro_parte`, `designacion`, `aplicacion`, `ubicacion`, `marca`, `usuario_id`, `fecha_hora_crud`) VALUES
(1, '4011834', 'COIL-IGNITION SINGLE W DIODE', 'bobina de encendido (ATV)', 'C13', 'POLARIS', 1, '0000-00-00 00:00:00'),
(2, '4010425', 'KIT-IGNITION COIL TWIN EFI', 'bobina de encendido(ranger 700/900)', 'E2', 'Polaris', 1, '2022-01-21 23:04:01'),
(3, '398-832074A11', 'Red startor kit', 'bobinado de estator', 'e', 'mercury', 3, '0000-00-00 00:00:00'),
(4, '818902A1', 'oil pump', 'Bomba de aceite', 'b3', 'mercury', 1, '0000-00-00 00:00:00'),
(5, '8M0047624', 'Pump asy - fuel', 'Bomba de combustible 150hp', 'F', 'mercury', 2, '0000-00-00 00:00:00'),
(6, '14360T75', 'Pump assemply - fuel', 'Bomba de combustible 40 y 50hp', 'F', 'mercury', 3, '0000-00-00 00:00:00'),
(7, '828942', 'Bujias BR7HS-10', 'BUJIA', 'D2', 'mercury', 1, '0000-00-00 00:00:00'),
(8, '33-816837Q', 'Bujias BPZ8HN-10 (equivale a champion QL78YC36)', 'Bujias', 'D2', 'mercury', 2, '0000-00-00 00:00:00'),
(9, '33-889597Q', 'Bujias IZFR5G', 'Bujias', 'D4', 'mercury', 3, '0000-00-00 00:00:00'),
(10, '4012443', 'MODULE-ENGINE CONTROL,SERVICE', 'COMPUTADORA (ecu)', 'J1', 'POLARIS', 1, '0000-00-00 00:00:00'),
(11, '84892910T03', 'Harnes assy-coil box A03', 'conjunto de cables de inyectores', 'f1', 'mercury', 2, '0000-00-00 00:00:00'),
(12, '79-895283A21', 'Instrument set', 'Conjunto de estrumentos.', 'd5', 'mercury', 3, '0000-00-00 00:00:00'),
(13, '57-828507Q4', 'See yourdealer for applications', 'correa', 'h3', 'mercury', 1, '0000-00-00 00:00:00'),
(14, '3211113', 'BELT DRIVE EBS', 'Correa de transmision', 'd11', 'POLARIS', 2, '0000-00-00 00:00:00'),
(15, '3211077', 'Drive belt', 'Correa de transmision', 'C12', 'POLARIS', 3, '0000-00-00 00:00:00'),
(16, '3211161 3211106', 'Drive belt', 'Correa de transmision (Ranger)', 'A11', 'POLARIS', 1, '0000-00-00 00:00:00'),
(17, '3211162 3211133', 'BELT-DRIVE', 'Correa de transmision (segun manual es para un RZR y ranger800)', 'D11', 'POLARIS', 2, '0000-00-00 00:00:00'),
(18, '3211069', 'BELT,DRIVE,ENG.BRK.(5)', 'Correa de transmision (Sportman)', 'F11', 'POLARIS', 3, '0000-00-00 00:00:00'),
(19, '3211149', 'BELT DRIVE', 'CORREA DE TRANSMISION RANG 900', 'h', 'POLARIS', 1, '0000-00-00 00:00:00'),
(20, '398-832075A21', 'Red startor kit', 'Estator kit.', 'c8', 'mercury', 2, '0000-00-00 00:00:00'),
(21, '2203698', 'YOKE-SLIP,W/FITTING', 'EXTREMO CARDAN', 'H1', 'POLARIS', 3, '0000-00-00 00:00:00'),
(22, '2203704', 'fitting-yoke (P010-2LJC)', 'EXTREMO CARDAN(porta cruceta)', 'd10', 'POLARIS', 1, '0000-00-00 00:00:00'),
(23, '35-18458T4', 'Fuel filter', 'Filtro de aceite', 'c9', 'mercury', 2, '0000-00-00 00:00:00'),
(24, '35-853333T', 'Filter air', 'Filtro de aire', 'h5', 'mercury', 3, '0000-00-00 00:00:00'),
(25, '35-889527T02', 'Filter fuel assembly', 'Filtro de combustible con trampa de agua (Conjunto)', 'b4', 'mercury', 1, '0000-00-00 00:00:00'),
(26, '35-886638', 'Fuel filter/water separator', 'Filtro para agua (trampa de agua)', 'h6', 'mercury', 2, '0000-00-00 00:00:00'),
(27, 'QA2200R', 'Helice dm. 9 1/4, pitch 12 1/2, rotacion 3RH', 'Helice', 'b', 'mercury', 3, '0000-00-00 00:00:00'),
(28, '48-90159A46', 'Helice dm. 15 1/2, pitch 17, rotacion 3LH', 'Helice', 'a8', 'mercury', 1, '0000-00-00 00:00:00'),
(29, '48-18278A46', 'Helice dm. 15 1/2, pitch 17, rotacion 3RH', 'Helice', 'd7', 'mercury', 2, '0000-00-00 00:00:00'),
(30, '48-73136A45', 'Helice 10 3/8, pitch 13, rotacion 3RH', 'Helice black Max', 'c1', 'mercury', 3, '0000-00-00 00:00:00'),
(31, '48-8M8026630', 'Mercury Spit Fire (Diam 10.3, Pitch 13, N?blades 4RH)', 'Helice de 4 hojas para 30,40y50hp', 'B', 'mercury', 1, '0000-00-00 00:00:00'),
(32, '827509T 7', 'CDM asy. Boxed', 'kit de Bobina y cable (transistorisada)', 'B2', 'mercury', 2, '0000-00-00 00:00:00'),
(33, '3234593', 'KIT-SEAL REPAIR', 'Kit de reapracion (sello-diferencial delantero)', 'E1', 'POLARIS', 3, '0000-00-00 00:00:00'),
(34, '2203148', 'KIT-BRAKE PAD & SHIMS, P/B', 'kit Pastilla de freno parqueo (ranger 700)', 'G9', 'POLARIS', 1, '0000-00-00 00:00:00'),
(35, '22043747', 'Kit - fan', 'Kit ventilador', 'A10', 'POLARIS', 2, '0000-00-00 00:00:00'),
(36, '1520796-067', 'RIM,FRONT,12X6,10GA,BLK', 'Llanta (sportman)', 'a5', 'POLARIS', 3, '0000-00-00 00:00:00'),
(37, '1520797-067', 'RIM,REAR,12X8,10GA,BLK', 'Llantas 12x8', 'a1', 'POLARIS', 1, '0000-00-00 00:00:00'),
(38, '1520457-067', 'RIM,REAR,12X8,BLACK', 'Llantas 12x8', 'a2', 'POLARIS', 2, '0000-00-00 00:00:00'),
(39, '8M0061886 8M8025354', 'Fuel line assembly 8ft', 'Manguera de tanque de comb. 40hp', 'E', 'mercury', 3, '0000-00-00 00:00:00'),
(40, '79-895288A43', '2-30 PSI walter pressure gauge', 'Manometro de presion de 2 a 30 PSI', 'C', 'mercury', 1, '0000-00-00 00:00:00'),
(41, '5135207', 'HUB-WHEEL,4WD,MACH', 'Masa(porta rueda)', 'B1', 'POLARIS', 2, '0000-00-00 00:00:00'),
(42, '79-895292A41', 'Power trim gauge', 'Medidor de ajuste de potencia', 'C', 'mercury', 3, '0000-00-00 00:00:00'),
(43, '79-895289A21', 'Oil pressure gauge', 'Medidor de presion de aceite.', 'c3', 'mercury', 1, '0000-00-00 00:00:00'),
(44, '50-892339T01', 'Stater motor b 8M0022394', 'Motor de arranque', 'e4', 'mercury', 2, '0000-00-00 00:00:00'),
(45, '2203147', 'kit brake pads', 'Pastilla de freno (ranger 700 de parqueo)', 'G9', 'POLARIS', 3, '2022-03-15 20:01:08'),
(46, '2202413', 'KIT-BRAKE PAD,ASM,1.5(INCL 4 PADS)', 'Pastilla de freno (RGN 700y900 4x4 trasero/ RNG 700 6x6 delantero y trasero/ ATV 570 delantero)x4uni.', 'G9', 'POLARIS', 1, '0000-00-00 00:00:00'),
(47, '2202412', 'KIT BRAKE PAD ASM', 'Pastilla de freno delantera(atv 500 )x4uni.', 'G9', 'POLARIS', 2, '0000-00-00 00:00:00'),
(48, '2203747 2205949', 'K-ASM,PAD,BRAKE,DB,1.375', 'Pastilla de freno delantera(ranger 700/900)x2uni.', 'G9', 'POLARIS', 3, '0000-00-00 00:00:00'),
(49, '2202414', 'KIT-BRAKE PAD ASM,DH4P', 'Pastilla de freno trasera (atv500)x2uni.', 'G9', 'POLARIS', 1, '0000-00-00 00:00:00'),
(50, '2201093', 'KIT,REAR.BRAKEPAD,HVY.DUTY', 'Pastilla de freno trasero (atv carburado)', 'G9', 'POLARIS', 2, '0000-00-00 00:00:00'),
(51, '853737T03', 'Coil plate', 'Placa de bobina', 'h1', 'mercury', 3, '0000-00-00 00:00:00'),
(52, '7041955-067', 'SPRING-.42X15,115/145,BLK', 'Resorte tipo espiral (trasero)', 'C9', 'POLARIS', 1, '0000-00-00 00:00:00'),
(53, '7043091-067', 'SPRING-COMP,REAR 100#,15LG,BLK', 'Resorte tipo espiral (trasero)', 'B/C', 'POLARIS', 2, '0000-00-00 00:00:00'),
(54, '7042169-067', 'SPRING-MIDDLE AXLE,BLK', 'Resorte tipo espiral (trasero-MEDIO)', 'B9', 'POLARIS', 3, '0000-00-00 00:00:00'),
(55, '79-895295A41', 'Cruiselog gauge', 'tacometro contador de horas', 'd4', 'mercury', 1, '0000-00-00 00:00:00'),
(56, '79-895283A45', '7000 RPM tachometer', 'Tacometro de rpm', 'C', 'mercury', 2, '0000-00-00 00:00:00'),
(57, '853783T01', 'Housing-extension', '', 'h2', 'mercury', 1, '0000-00-00 00:00:00'),
(58, '434767681', 'Brake', 'Pastillas de freno', 'd8', 'Polaris', 1, '0000-00-00 00:00:00'),
(59, '1234567', 'clutch', 'embrague', 'c1', 'Polaris', 1, '2022-01-21 23:31:17'),
(60, '87665444', 'spark plug', 'bujia', 'a1', 'Polaris', 2, '0000-00-00 00:00:00'),
(61, '565786789', 'spark plug', 'bujia', 'g9', 'Honda', 1, '0000-00-00 00:00:00'),
(62, 'e343242', 'pump', 'pump', 'a1', 'Polaris', 2, '0000-00-00 00:00:00'),
(63, '1520797-068', 'RIM,REAR,12X8,10GA,BLK', 'Llantas 12x10', 'h20', 'Polaris', 2, '0000-00-00 00:00:00'),
(104, '123123R-566', 'starter', 'motor de arranque', 'c4', 'Honda', 1, '2022-01-21 19:27:31'),
(105, '123145R-532', 'storage', 'caja de filtro de aire', 'b7', 'Honda', 1, '2022-01-21 19:40:46'),
(106, '412682300', 'Throtle position sensor', 'Sensor de posición de mariposa', 'd10', 'Polaris', 1, '2022-01-21 19:48:03'),
(107, '412682301', 'Throtle', 'Cuerpo mariposa', 'd8', 'Polaris', 1, '2022-01-21 19:50:56'),
(108, 'T67777-890', 'carburator', 'carburador', 'H1', 'Mercury', 1, '2022-01-21 20:15:38'),
(109, '15277777-068', 'pump', 'bomba de agua', 'c3', 'Honda', 1, '2022-01-21 20:22:26'),
(110, '40199999', 'oil filter', 'filtro de aceite', 'h5', 'Polaris', 1, '2022-01-21 20:25:28'),
(111, '987976432', 'brake', 'cable de freno', 'a6', 'Polaris', 1, '2022-01-21 20:36:59'),
(113, 'A883726444', 'spark plug', 'bujia', 'c2', 'Honda', 1, '2022-01-21 20:52:27'),
(114, 'A88823984', 'clutch', 'embrague', 'h5', 'Honda', 1, '2022-01-21 20:55:12'),
(115, 'R1287738782', 'filter', 'filtro', 'a1', 'Polaris', 1, '2022-01-21 20:59:00'),
(116, '222223333A', 'camshaft', 'árbol de leva', 'd6', 'Honda', 1, '2022-01-21 21:50:40'),
(117, '486661112', 'tired', 'cubierta', 'c', 'Polaris', 1, '2022-01-21 21:56:08'),
(118, '55555555', 'anode', 'anodo', 'g1', 'Mercury', 1, '2022-01-21 22:03:27'),
(119, '656565656', 'tired', 'cubierta', 'a1', '', 1, '2022-01-21 22:08:06'),
(120, '1314254657', 'filter', 'filtro', 'a7', '', 1, '2022-01-21 22:18:36'),
(121, '61616161616', 'clutch', 'embrague', 'G4', 'Mercury', 1, '2022-01-21 22:25:47'),
(124, '1231451678', 'clutch', 'embrague primario', 'a1', 'Polaris', 1, '2022-02-28 21:36:51'),
(125, '99988887777', 'filter', 'filtro de aceite', 'g9', 'Polaris', 1, '2022-02-28 22:21:23'),
(126, '4549k8723', 'brake', 'freno', 'G9', 'Polaris', 1, '2022-02-28 22:25:34'),
(127, 'a123b666', 'tired', 'Llantas 12x10', 'c2', 'Honda', 1, '2022-03-01 21:35:42'),
(128, '555577771', 'clutch', 'embrague', 'h1', 'Polaris', 1, '2022-03-01 21:51:49'),
(129, 'A-12334455', 'governor', 'control de ralentí automático', 'a5', 'Honda', 2, '2022-03-04 21:06:59'),
(130, '81-78126635A', 'spark plug', 'bujia', 'h5', 'Mercury', 2, '2022-03-04 21:16:58'),
(131, '10101000001', 'clutch', 'embrague', 'G9', 'Polaris', 2, '2022-03-04 22:21:08'),
(132, '1B-3450192', 'carburator', 'conjunto carburador', 'B5', 'Polaris', 2, '2022-03-06 21:05:33'),
(133, 'B5-12300001', 'starter', ' Motor de arranque', 'H1', 'Mercury', 2, '2022-03-06 22:34:59'),
(134, '777775111', 'spark plug', 'bujia', 'A1', '', 2, '2022-03-06 22:58:15'),
(135, 'AB123456', 'Bomb arm', 'cuerpo de bomba', 'C5', 'Honda', 1, '2022-03-07 14:05:02'),
(136, '1C7777712', 'anode', 'anodo', 'G8', 'Polaris', 1, '2022-03-07 18:14:17'),
(137, 'AB12123CD', 'filter', 'filtro', 'H3', 'Honda', 2, '2022-03-26 21:23:22'),
(138, 'XA786544-a', 'rod', 'rotula', 'D3', 'Mercury', 1, '2022-03-07 18:29:33'),
(139, 'btr5h771', 'clutch', 'embrague', 'G9', 'Polaris', 2, '2022-03-25 22:43:18'),
(140, '345H1234', 'brake', 'freno', 'G9', 'Mercury', 1, '2022-03-07 20:00:26'),
(141, 'AA-32134565', 'clutch', 'embrague', 'D9', 'Honda', 1, '2022-03-08 20:26:40'),
(142, '123D12356', 'brake', 'freno', 'h5', 'Honda', 3, '2022-04-20 13:36:05'),
(143, 'X1-32423534', 'tired', 'Llantas 12x10', 'G9', 'Mercury', 1, '2022-03-07 22:05:10'),
(144, '9999AA677', 'pump', 'bomba de combustible', 'E5', 'Polaris', 2, '2022-03-25 21:50:42'),
(145, 'BC6521888', 'spark plug', 'bujia', 'F1', 'Mercury', 2, '2022-03-08 20:24:03'),
(146, '1-237287-A', 'belt', 'correa', 'G1', 'Polaris', 2, '2022-03-08 21:31:28'),
(147, 'X-4568878763', 'struth', 'amortiguador', 'G8', 'Polaris', 2, '2022-03-08 22:28:42'),
(148, 'BB1246563', 'pump', 'bomba', 'H1', 'Honda', 2, '2022-03-09 21:25:25'),
(149, '31-4554533', 'camshaft', 'arbol de levas', 'A3', 'Polaris', 3, '2022-03-21 23:22:10'),
(150, 'A5656-777', 'box', 'caja', 'H1', 'Honda', 2, '2022-03-21 23:22:37'),
(151, '123C-56756', 'anode', 'anodo', 'G4', 'Mercury', 2, '2022-03-17 01:18:02'),
(152, '909888-E', 'spark', 'bujia', 'A5', 'Polaris', 2, '2022-03-21 14:02:43'),
(153, '4444-U9888', 'arm', 'brazo derecho', 'K1', 'Mercury', 2, '2022-03-25 22:43:07'),
(154, '44444-44444', 'tree', 'arbol', 'G1', 'Polaris', 2, '2022-03-10 01:17:11'),
(155, 'AV-787685', 'spark plug', 'bujia', 'K5', 'Mercury', 2, '2022-03-10 14:04:18'),
(156, 'S-23424555-1', 'spark', 'bujia', 'G2', 'Polaris', 2, '2022-03-10 21:36:34'),
(157, '1-D-89876875', 'crankshaft', 'cigueñal', 'D2', 'Honda', 1, '2022-03-10 21:52:27'),
(159, 'SS-12345444', 'clutch', 'embrague', 'a1', 'Polaris', 2, '2022-03-15 19:59:57'),
(161, '45454233HH', 'filter', 'filtro', 'H5', 'Polaris', 1, '2022-03-16 22:26:04'),
(163, 'RR-896655-0', 'spark plug', 'bujia', 'h5', 'Polaris', 1, '2022-03-27 15:32:28'),
(164, 'A1-67355882', 'spark plug', 'bujia', 'G9', 'Polaris', 3, '2022-04-20 13:41:13'),
(165, '5R66677U1', 'trim', 'aleta', 'H1', 'Mercury', 1, '2022-04-22 23:06:09'),
(166, '33331129', 'filter', 'filtro', 'B3', 'Honda', 2, '2022-04-22 23:08:32'),
(167, '123E5566', 'spark plug', 'bujia', 'G5', 'Polaris', 1, '2022-04-23 00:18:39'),
(168, '1298U87291', 'arm', 'conjunto de suspension', 'D1', 'Polaris', 2, '2022-04-23 01:06:30'),
(169, '12W34365271', 'filter in line', 'filtro de linea', 'A1', 'Honda', 1, '2022-04-23 01:11:03'),
(170, 'LKK/777777', 'clutch', 'embrague', 'h20', 'Honda', 1, '2022-04-23 01:12:55'),
(171, '11-A-324567', 'pump', 'bomba', 'B1', 'Honda', 1, '2022-04-23 15:20:02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `destino_repuestos`
--
ALTER TABLE `destino_repuestos`
  ADD PRIMARY KEY (`id_destino`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `repuesto_id` (`repuesto_id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `modelo_repuesto`
--
ALTER TABLE `modelo_repuesto`
  ADD PRIMARY KEY (`id_modelo`),
  ADD KEY `repuesto_id` (`repuesto_id`);

--
-- Indices de la tabla `orden_compra`
--
ALTER TABLE `orden_compra`
  ADD PRIMARY KEY (`id_oc`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `repuesto_id` (`repuesto_id`);

--
-- Indices de la tabla `repuestos`
--
ALTER TABLE `repuestos`
  ADD PRIMARY KEY (`id_repuesto`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `destino_repuestos`
--
ALTER TABLE `destino_repuestos`
  MODIFY `id_destino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `modelo_repuesto`
--
ALTER TABLE `modelo_repuesto`
  MODIFY `id_modelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `orden_compra`
--
ALTER TABLE `orden_compra`
  MODIFY `id_oc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `repuestos`
--
ALTER TABLE `repuestos`
  MODIFY `id_repuesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `destino_repuestos`
--
ALTER TABLE `destino_repuestos`
  ADD CONSTRAINT `destino_repuestos_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `login` (`id_usuario`),
  ADD CONSTRAINT `destino_repuestos_ibfk_3` FOREIGN KEY (`repuesto_id`) REFERENCES `repuestos` (`id_repuesto`);

--
-- Filtros para la tabla `modelo_repuesto`
--
ALTER TABLE `modelo_repuesto`
  ADD CONSTRAINT `modelo_repuesto_ibfk_1` FOREIGN KEY (`repuesto_id`) REFERENCES `repuestos` (`id_repuesto`);

--
-- Filtros para la tabla `orden_compra`
--
ALTER TABLE `orden_compra`
  ADD CONSTRAINT `orden_compra_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `repuestos` (`id_repuesto`);

--
-- Filtros para la tabla `repuestos`
--
ALTER TABLE `repuestos`
  ADD CONSTRAINT `acceso a repuestos` FOREIGN KEY (`usuario_id`) REFERENCES `login` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
