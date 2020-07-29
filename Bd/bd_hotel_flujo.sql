-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2020 a las 00:37:26
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_hotel_flujo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso`
--

CREATE TABLE `proceso` (
  `id` int(11) NOT NULL,
  `codFlujo` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `codProceso` varchar(4) COLLATE utf8_spanish_ci DEFAULT NULL,
  `codProcesosig` varchar(4) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pantalla` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proceso`
--

INSERT INTO `proceso` (`id`, `codFlujo`, `codProceso`, `codProcesosig`, `tipo`, `rol`, `pantalla`) VALUES
(1, 'F3', 'P1', 'null', 'c', 'recepcion', 'reservo.php'),
(2, 'F3', 'P2', 'P3', 'P', 'recepcion', 'buscaReserva.php'),
(3, 'F3', 'P3', 'P12', 'P', 'recepcion', 'eligeReserva.php'),
(4, 'F3', 'P4', 'null', 'P', 'cliente', 'habDisponibles.php'),
(5, 'F3', 'P5', 'P6', 'c', 'cliente', 'mostrarHab.php'),
(6, 'F3', 'P6', 'null', 'P', 'cliente', 'deseaHospedarse.php'),
(7, 'F3', 'P7', 'P8', 'C', 'cliente', 'ingresaDatosHab.php'),
(8, 'F3', 'P8', 'null', 'P', 'cliente', 'nuevoCliente.php'),
(9, 'F3', 'P9', 'P10', 'P', 'cliente', 'ingresaDatosRegCli.php'),
(10, 'F3', 'P10', 'P11', 'P', 'cliente', 'registroCliente.php'),
(11, 'F3', 'P11', 'P12', 'P', 'cliente', 'buscaCi.php'),
(12, 'F3', 'P12', 'P13', 'P', 'cliente', 'asignaHab.php'),
(13, 'F3', 'P13', 'fin', 'C', 'cliente', 'fin.php'),
(14, 'F1', 'P1', 'P2', 'I', 'C', 'inicioreserva.php'),
(15, 'F1', 'P2', 'P3', 'P', 'C', 'elegirhab.php'),
(16, 'F1', 'P3', 'P4', 'P', 'C', 'elegirfecha.php'),
(17, 'F1', 'P4', 'null', 'C', 'S', 'consultafecha.php'),
(18, 'F1', 'P5', 'P2', 'P', 'C', 'otrasopciones.php'),
(19, 'F1', 'P6', 'P7', 'P', 'C', 'ingresarci.php'),
(20, 'F1', 'P7', 'null', 'C', 'S', 'clientenuevo.php'),
(21, 'F1', 'P8', 'P9', 'P', 'C', 'datoscliente.php'),
(22, 'F1', 'P9', 'P10', 'P', 'S', 'asignarhab.php'),
(23, 'F1', 'P10', 'fin', 'F', 'S', 'finreserva.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesocond`
--

CREATE TABLE `procesocond` (
  `id` int(11) NOT NULL,
  `codFlujo` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `codProceso` varchar(4) COLLATE utf8_spanish_ci DEFAULT NULL,
  `codProcesoSI` varchar(4) COLLATE utf8_spanish_ci DEFAULT NULL,
  `codProcesoNo` varchar(4) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `procesocond`
--

INSERT INTO `procesocond` (`id`, `codFlujo`, `codProceso`, `codProcesoSI`, `codProcesoNo`) VALUES
(1, 'F3', 'P1', 'P2', 'P4'),
(2, 'F3', 'P4', 'P5', 'P13'),
(3, 'F3', 'P6', 'P7', 'P13'),
(4, 'F3', 'P8', 'P9', 'P11'),
(5, 'F1', 'P4', 'P6', 'P5'),
(6, 'F1', 'P7', 'P8', 'P9');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `procesocond`
--
ALTER TABLE `procesocond`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proceso`
--
ALTER TABLE `proceso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `procesocond`
--
ALTER TABLE `procesocond`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
