-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3308
-- Tiempo de generación: 18-01-2022 a las 23:43:29
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
-- Estructura de tabla para la tabla `repuestos`
--

CREATE TABLE `repuestos` (
  `id_repuesto` int(11) NOT NULL,
  `nro_parte` varchar(40) CHARACTER SET utf8 NOT NULL,
  `designacion` text CHARACTER SET utf8 NOT NULL,
  `aplicacion` text CHARACTER SET utf8 NOT NULL,
  `ubicacion` varchar(40) CHARACTER SET utf8 NOT NULL,
  `marca` varchar(40) CHARACTER SET utf8 NOT NULL,
  `cantidad` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha_hora_crud` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `repuestos`
--

INSERT INTO `repuestos` (`id_repuesto`, `nro_parte`, `designacion`, `aplicacion`, `ubicacion`, `marca`, `cantidad`, `usuario_id`, `fecha_hora_crud`) VALUES
(1, '4011834', 'COIL-IGNITION SINGLE W DIODE', 'bobina de encendido (ATV)', 'C13', 'POLARIS', 10, 1, '0000-00-00 00:00:00'),
(2, '4010425', 'KIT-IGNITION COIL TWIN EFI', 'bobina de encendido(ranger 700/900)', 'E13', 'POLARIS', 5, 2, '0000-00-00 00:00:00'),
(3, '398-832074A11', 'Red startor kit', 'bobinado de estator', 'e', 'mercury', 2, 3, '0000-00-00 00:00:00'),
(4, '818902A1', 'oil pump', 'Bomba de aceite', 'b3', 'mercury', 2, 1, '0000-00-00 00:00:00'),
(5, '8M0047624', 'Pump asy - fuel', 'Bomba de combustible 150hp', 'F', 'mercury', 4, 2, '0000-00-00 00:00:00'),
(6, '14360T75', 'Pump assemply - fuel', 'Bomba de combustible 40 y 50hp', 'F', 'mercury', 4, 3, '0000-00-00 00:00:00'),
(7, '828942', 'Bujias BR7HS-10', 'BUJIA', 'D2', 'mercury', 10, 1, '0000-00-00 00:00:00'),
(8, '33-816837Q', 'Bujias BPZ8HN-10 (equivale a champion QL78YC36)', 'Bujias', 'D2', 'mercury', 10, 2, '0000-00-00 00:00:00'),
(9, '33-889597Q', 'Bujias IZFR5G', 'Bujias', 'D4', 'mercury', 12, 3, '0000-00-00 00:00:00'),
(10, '4012443', 'MODULE-ENGINE CONTROL,SERVICE', 'COMPUTADORA (ecu)', 'J1', 'POLARIS', 2, 1, '0000-00-00 00:00:00'),
(11, '84892910T03', 'Harnes assy-coil box A03', 'conjunto de cables de inyectores', 'f1', 'mercury', 3, 2, '0000-00-00 00:00:00'),
(12, '79-895283A21', 'Instrument set', 'Conjunto de estrumentos.', 'd5', 'mercury', 1, 3, '0000-00-00 00:00:00'),
(13, '57-828507Q4', 'See yourdealer for applications', 'correa', 'h3', 'mercury', 7, 1, '0000-00-00 00:00:00'),
(14, '3211113', 'BELT DRIVE EBS', 'Correa de transmision', '11', 'POLARIS', 10, 2, '0000-00-00 00:00:00'),
(15, '3211077', 'Drive belt', 'Correa de transmision', 'C12', 'POLARIS', 5, 3, '0000-00-00 00:00:00'),
(16, '3211161 3211106', 'Drive belt', 'Correa de transmision (Ranger)', 'A11', 'POLARIS', 14, 1, '0000-00-00 00:00:00'),
(17, '3211162 3211133', 'BELT-DRIVE', 'Correa de transmision (segun manual es para un RZR y ranger800)', 'D11', 'POLARIS', 11, 2, '0000-00-00 00:00:00'),
(18, '3211069', 'BELT,DRIVE,ENG.BRK.(5)', 'Correa de transmision (Sportman)', 'F11', 'POLARIS', 1, 3, '0000-00-00 00:00:00'),
(19, '3211149', 'BELT DRIVE', 'CORREA DE TRANSMISION RANG 900', '', 'POLARIS', 0, 1, '0000-00-00 00:00:00'),
(20, '398-832075A21', 'Red startor kit', 'Estator kit.', 'c8', 'mercury', 2, 2, '0000-00-00 00:00:00'),
(21, '2203698', 'YOKE-SLIP,W/FITTING', 'EXTREMO CARDAN', 'H1', 'POLARIS', 3, 3, '0000-00-00 00:00:00'),
(22, '2203704', 'fitting-yoke (P010-2LJC)', 'EXTREMO CARDAN(porta cruceta)', 'd10', 'POLARIS', 1, 1, '0000-00-00 00:00:00'),
(23, '35-18458T4', 'Fuel filter', 'Filtro de aceite', 'c9', 'mercury', 9, 2, '0000-00-00 00:00:00'),
(24, '35-853333T', 'Filter air', 'Filtro de aire', 'h5', 'mercury', 10, 3, '0000-00-00 00:00:00'),
(25, '35-889527T02', 'Filter fuel assembly', 'Filtro de combustible con trampa de agua (Conjunto)', 'b4', 'mercury', 2, 1, '0000-00-00 00:00:00'),
(26, '35-886638', 'Fuel filter/water separator', 'Filtro para agua (trampa de agua)', 'h6', 'mercury', 8, 2, '0000-00-00 00:00:00'),
(27, 'QA2200R', 'Helice dm. 9 1/4, pitch 12 1/2, rotacion 3RH', 'Helice', 'b', 'mercury', 4, 3, '0000-00-00 00:00:00'),
(28, '48-90159A46', 'Helice dm. 15 1/2, pitch 17, rotacion 3LH', 'Helice', 'a8', 'mercury', 5, 1, '0000-00-00 00:00:00'),
(29, '48-18278A46', 'Helice dm. 15 1/2, pitch 17, rotacion 3RH', 'Helice', 'd7', 'mercury', 5, 2, '0000-00-00 00:00:00'),
(30, '48-73136A45', 'Helice 10 3/8, pitch 13, rotacion 3RH', 'Helice black Max', 'c1', 'mercury', 1, 3, '0000-00-00 00:00:00'),
(31, '48-8M8026630', 'Mercury Spit Fire (Diam 10.3, Pitch 13, N?blades 4RH)', 'Helice de 4 hojas para 30,40y50hp', 'B', 'mercury', 2, 1, '0000-00-00 00:00:00'),
(32, '827509T 7', 'CDM asy. Boxed', 'kit de Bobina y cable (transistorisada)', 'B2', 'mercury', 4, 2, '0000-00-00 00:00:00'),
(33, '3234593', 'KIT-SEAL REPAIR', 'Kit de reapracion (sello-diferencial delantero)', 'E1', 'POLARIS', 3, 3, '0000-00-00 00:00:00'),
(34, '2203148', 'KIT-BRAKE PAD & SHIMS, P/B', 'kit Pastilla de freno parqueo (ranger 700)', 'G9', 'POLARIS', 2, 1, '0000-00-00 00:00:00'),
(35, '22043747', 'Kit - fan', 'Kit ventilador', 'A10', 'POLARIS', 2, 2, '0000-00-00 00:00:00'),
(36, '1520796-067', 'RIM,FRONT,12X6,10GA,BLK', 'Llanta (sportman)', '', 'POLARIS', 2, 3, '0000-00-00 00:00:00'),
(37, '1520797-067', 'RIM,REAR,12X8,10GA,BLK', 'Llantas 12x8', '', 'POLARIS', 1, 1, '0000-00-00 00:00:00'),
(38, '1520457-067', 'RIM,REAR,12X8,BLACK', 'Llantas 12x8', '', 'POLARIS', 1, 2, '0000-00-00 00:00:00'),
(39, '8M0061886 8M8025354', 'Fuel line assembly 8ft', 'Manguera de tanque de comb. 40hp', 'E', 'mercury', 0, 3, '0000-00-00 00:00:00'),
(40, '79-895288A43', '2-30 PSI walter pressure gauge', 'Manometro de presion de 2 a 30 PSI', 'C', 'mercury', 8, 1, '0000-00-00 00:00:00'),
(41, '5135207', 'HUB-WHEEL,4WD,MACH', 'Masa(porta rueda)', 'B1', 'POLARIS', 1, 2, '0000-00-00 00:00:00'),
(42, '79-895292A41', 'Power trim gauge', 'Medidor de ajuste de potencia', 'C', 'mercury', 7, 3, '0000-00-00 00:00:00'),
(43, '79-895289A21', 'Oil pressure gauge', 'Medidor de presion de aceite.', 'c3', 'mercury', 2, 1, '0000-00-00 00:00:00'),
(44, '50-892339T01', 'Stater motor b 8M0022394', 'Motor de arranque', 'e4', 'mercury', 1, 2, '0000-00-00 00:00:00'),
(45, '2203147', '|', 'Pastilla de freno (ranger 700 de parqueo)', 'G9', 'POLARIS', 1, 3, '0000-00-00 00:00:00'),
(46, '2202413', 'KIT-BRAKE PAD,ASM,1.5(INCL 4 PADS)', 'Pastilla de freno (RGN 700y900 4x4 trasero/ RNG 700 6x6 delantero y trasero/ ATV 570 delantero)x4uni.', 'G9', 'POLARIS', 8, 1, '0000-00-00 00:00:00'),
(47, '2202412', 'KIT BRAKE PAD ASM', 'Pastilla de freno delantera(atv 500 )x4uni.', 'G9', 'POLARIS', 8, 2, '0000-00-00 00:00:00'),
(48, '2203747 2205949', 'K-ASM,PAD,BRAKE,DB,1.375', 'Pastilla de freno delantera(ranger 700/900)x2uni.', 'G9', 'POLARIS', 9, 3, '0000-00-00 00:00:00'),
(49, '2202414', 'KIT-BRAKE PAD ASM,DH4P', 'Pastilla de freno trasera (atv500)x2uni.', 'G9', 'POLARIS', 8, 1, '0000-00-00 00:00:00'),
(50, '2201093', 'KIT,REAR.BRAKEPAD,HVY.DUTY', 'Pastilla de freno trasero (atv carburado)', 'G9', 'POLARIS', 2, 2, '0000-00-00 00:00:00'),
(51, '853737T03', 'Coil plate', 'Placa de bobina', 'h1', 'mercury', 2, 3, '0000-00-00 00:00:00'),
(52, '7041955-067', 'SPRING-.42X15,115/145,BLK', 'Resorte tipo espiral (trasero)', 'C9', 'POLARIS', 4, 1, '0000-00-00 00:00:00'),
(53, '7043091-067', 'SPRING-COMP,REAR 100#,15LG,BLK', 'Resorte tipo espiral (trasero)', 'B/C', 'POLARIS', 8, 2, '0000-00-00 00:00:00'),
(54, '7042169-067', 'SPRING-MIDDLE AXLE,BLK', 'Resorte tipo espiral (trasero-MEDIO)', 'B9', 'POLARIS', 5, 3, '0000-00-00 00:00:00'),
(55, '79-895295A41', 'Cruiselog gauge', 'tacometro contador de horas', 'd4', 'mercury', 9, 1, '0000-00-00 00:00:00'),
(56, '79-895283A45', '7000 RPM tachometer', 'Tacometro de rpm', 'C', 'mercury', 4, 2, '0000-00-00 00:00:00'),
(58, '853783T01', 'Housing-extension', '', 'h2', 'mercury', 3, 1, '0000-00-00 00:00:00'),
(59, '434767681', 'Brake', 'Pastillas de freno', 'd8', 'Polaris', 5, 1, '2022-01-01 21:19:49'),
(92, '1234567', 'clutch', 'embrague', 'c2', 'Polaris', 15, 2, '2022-01-13 19:15:39'),
(93, '87665444', 'spark plug', 'bujia', 'a1', 'Polaris', 27, 2, '2022-01-13 19:41:57'),
(95, '', '', '', '', '', 0, 2, '2022-01-15 19:13:33'),
(96, '', '', '', '', '', 0, 2, '2022-01-15 19:13:46'),
(97, '', '', '', '', 'Mercury', 0, 2, '2022-01-15 21:24:24'),
(100, '', '', '', '', 'Honda', 0, 1, '2022-01-15 21:47:10'),
(101, '565786789', 'spark plug', 'bujia', 'g9', 'Honda', 4, 1, '2022-01-15 21:51:01'),
(102, 'e343242', 'pump', 'pump', 'a1', 'Polaris', 3, 2, '2022-01-15 22:34:12'),
(103, '1520797-068', 'RIM,REAR,12X8,10GA,BLK', 'Llantas 12x10', 'h20', 'Polaris', 15, 2, '2022-01-17 19:50:35');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_usuario`);

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
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `repuestos`
--
ALTER TABLE `repuestos`
  MODIFY `id_repuesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `repuestos`
--
ALTER TABLE `repuestos`
  ADD CONSTRAINT `acceso a repuestos` FOREIGN KEY (`usuario_id`) REFERENCES `login` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
