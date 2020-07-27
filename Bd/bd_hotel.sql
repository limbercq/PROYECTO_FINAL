-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2020 a las 15:37:45
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
-- Base de datos: `bd_hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `idcaja` int(11) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `adelanto` int(11) DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `ci` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `ci` varchar(15) DEFAULT NULL,
  `nro_tarjeta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `ci`, `nro_tarjeta`) VALUES
(1, '20160341', 54642131),
(2, '20170291', 547000),
(3, '3160733', 213132132);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `codhabitacion` varchar(15) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `costo` int(11) DEFAULT NULL,
  `nro_camas` int(11) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`codhabitacion`, `tipo`, `costo`, `nro_camas`, `estado`) VALUES
('A100', 'individual', 200, 1, 1),
('A101', 'individual', 200, 1, 0),
('A102', 'individual', 200, 1, 0),
('A103', 'individual', 200, 1, 0),
('A104', 'individual', 200, 1, 1),
('A105', 'individual', 200, 1, 1),
('A106', 'individual', 200, 1, 0),
('A107', 'individual', 200, 1, 0),
('A108', 'individual', 200, 1, 0),
('A109', 'individual', 200, 1, 0),
('B100', 'familiar', 400, 4, 0),
('B101', 'familiar', 400, 4, 0),
('B102', 'familiar', 400, 4, 0),
('B103', 'familiar', 400, 4, 0),
('B104', 'familiar', 400, 4, 0),
('B105', 'familiar', 400, 4, 0),
('B106', 'familiar', 400, 4, 0),
('B107', 'familiar', 400, 4, 0),
('B108', 'familiar', 400, 4, 0),
('B109', 'familiar', 400, 4, 0),
('C100', 'matrimonial', 300, 2, 0),
('C101', 'matrimonial', 300, 2, 0),
('C102', 'matrimonial', 300, 2, 0),
('C103', 'matrimonial', 300, 2, 0),
('C104', 'matrimonial', 300, 2, 0),
('C105', 'matrimonial', 300, 2, 0),
('D100', 'suite', 500, 2, 0),
('D101', 'suite', 500, 2, 0),
('D102', 'suite', 500, 2, 0),
('D103', 'suite', 500, 2, 0),
('D104', 'suite', 500, 2, 0),
('D105', 'suite', 500, 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `huesped`
--

CREATE TABLE `huesped` (
  `id_huesped` int(11) NOT NULL,
  `ci` varchar(15) DEFAULT NULL,
  `nro_tarjeta` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `huesped`
--

INSERT INTO `huesped` (`id_huesped`, `ci`, `nro_tarjeta`, `estado`) VALUES
(1, '5162068', 65656565, 1),
(2, '1712056', 15464654, 1),
(3, '20161989', 12132131, 0),
(4, '20170291', 54700066, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `sw_reprogramacion` tinyint(1) DEFAULT NULL,
  `ci` varchar(15) DEFAULT NULL,
  `codhab` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id_reserva`, `fecha_ingreso`, `fecha_salida`, `sw_reprogramacion`, `ci`, `codhab`) VALUES
(1, '2020-08-05', '2020-08-07', 0, '20170291', 'A100'),
(2, '2020-07-05', '2020-07-10', 0, '3160733', 'A101');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_hospeda`
--

CREATE TABLE `se_hospeda` (
  `id_se_hospeda` int(11) NOT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `ci` varchar(15) DEFAULT NULL,
  `codhab` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `se_hospeda`
--

INSERT INTO `se_hospeda` (`id_se_hospeda`, `fecha_ingreso`, `fecha_salida`, `ci`, `codhab`) VALUES
(1, '2020-08-14', '2020-08-17', '20161989', 'A104'),
(2, '2020-08-13', '2020-08-15', '1712056', 'A105'),
(3, '2020-08-05', '2020-08-07', '20170291', 'A100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE `tarjeta` (
  `nro_tarjeta` int(11) NOT NULL,
  `cvc` int(11) DEFAULT NULL,
  `nom_tajeta` varchar(30) DEFAULT NULL,
  `mes` int(11) DEFAULT NULL,
  `año` int(11) DEFAULT NULL,
  `ci` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarjeta`
--

INSERT INTO `tarjeta` (`nro_tarjeta`, `cvc`, `nom_tajeta`, `mes`, `año`, `ci`) VALUES
(642131, 4454, 'bisa', 2, 2022, '20160341'),
(12132131, 8698, 'mercantil', 10, 2022, '20161989'),
(15464654, 8878, 'union', 1, 2021, '1712056'),
(15629875, 2321, 'mercantil', 6, 2021, '70162379'),
(21313213, 5577, 'sol', 3, 2022, '3160733'),
(21321546, 3421, 'bisa', 5, 2022, '10174528'),
(31121313, 2131, 'bisa', 6, 2020, '40167338'),
(42132132, 5466, 'union', 5, 2023, '2167481'),
(54700066, 5445, 'union', 4, 2023, '20170291'),
(65421212, 5244, 'mercantil', 2, 2021, '30162772'),
(65656565, 5497, 'bisa ', 2, 2025, '5162068'),
(98972245, 4444, 'sol', 4, 2022, '20168745');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ci` varchar(15) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `nacionalidad` varchar(20) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ci`, `nombre`, `apellido`, `nacionalidad`, `correo`, `password`) VALUES
('10174528', 'CAMILA', 'MACHACA', 'argentino', 'test@gmail.com', 'oio12'),
('1712056', 'IVETTE', 'COLQUE', 'boliviano', 'vijay@gmail.com', '121'),
('20160341', 'JHOVANA', 'RAMOS', 'boliviano', 'anuj.lpu1@gmail.com', '123456'),
('20161989', 'NANCY', 'GUTIERREZ', 'boliviano', 'amrita@test.com', '121vd'),
('20168745', 'ANDREA', 'JIMENEZ', 'peruano', 'amit12@gmail.com', '8797'),
('20170291', 'ANDRES', 'VALENCIA', 'chileno', 'sarita@gmail.com', '5465489'),
('2167481', 'ALICIA', 'ARCANI', 'chileno', 'amit@gmail.com', '1231'),
('30162772', 'JUAN', 'CHIPANA', 'boliviano', 'info@w3gang.com', 'fioi5'),
('3160733', 'ALEXANDRA', 'PEREZ', 'argentino', 'nitesh@gmail.com', '4564'),
('40167338', 'MARISOL', 'PANTOJA', 'argentino', 'rahul@gmail.com', '4564'),
('5162068', 'JOSE LUIS', 'AGUILAR', 'chileno', 'sanjeev@gmail.com', '897oi'),
('70162379', 'CAROLINA', 'MAMANI', 'chilena', 'anuj.lpu1@gmail.com', '4564');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`idcaja`),
  ADD KEY `ci` (`ci`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `ci` (`ci`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`codhabitacion`);

--
-- Indices de la tabla `huesped`
--
ALTER TABLE `huesped`
  ADD PRIMARY KEY (`id_huesped`),
  ADD KEY `ci` (`ci`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `carnet` (`ci`),
  ADD KEY `codhab` (`codhab`);

--
-- Indices de la tabla `se_hospeda`
--
ALTER TABLE `se_hospeda`
  ADD PRIMARY KEY (`id_se_hospeda`),
  ADD KEY `ci` (`ci`),
  ADD KEY `codhab` (`codhab`);

--
-- Indices de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`nro_tarjeta`),
  ADD KEY `codusuario` (`ci`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ci`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `huesped`
--
ALTER TABLE `huesped`
  MODIFY `id_huesped` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `se_hospeda`
--
ALTER TABLE `se_hospeda`
  MODIFY `id_se_hospeda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `caja`
--
ALTER TABLE `caja`
  ADD CONSTRAINT `caja_ibfk_1` FOREIGN KEY (`ci`) REFERENCES `huesped` (`ci`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`ci`) REFERENCES `usuario` (`ci`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`ci`) REFERENCES `cliente` (`ci`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`codhab`) REFERENCES `habitacion` (`codhabitacion`);

--
-- Filtros para la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD CONSTRAINT `tarjeta_ibfk_1` FOREIGN KEY (`ci`) REFERENCES `usuario` (`ci`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
