-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2016 a las 17:43:14
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `telefonica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celular`
--

CREATE TABLE `celular` (
  `idCelular` int(11) NOT NULL,
  `Modelo` varchar(45) DEFAULT NULL,
  `imei` varchar(150) DEFAULT NULL,
  `idMarca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `celular`
--

INSERT INTO `celular` (`idCelular`, `Modelo`, `imei`, `idMarca`) VALUES
(1, 's6', 'uy1g231uyg23asd', 1),
(2, '7 plus', '45asdjaushd123d', 1),
(3, 'm9', 'iuhfv9192hnsasd1', 4),
(4, 's5', '8u12ns82ns090sd', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Apellido` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `Nombre`, `Apellido`, `Correo`, `Telefono`) VALUES
(45678, 'Carlos', 'Martinez', 'festi@loca.com', 6789124),
(65487, 'Joel', 'Rojas', 'joel@gmail.com', 7728150),
(76592, 'Laura', 'Vaca', 'chiri@changa.com', 7841234);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d_celula`
--

CREATE TABLE `d_celula` (
  `idcelula` smallint(6) NOT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `zona` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d_cliente`
--

CREATE TABLE `d_cliente` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d_planes`
--

CREATE TABLE `d_planes` (
  `idplan_pago` smallint(6) NOT NULL,
  `nombre_plan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d_tiempo`
--

CREATE TABLE `d_tiempo` (
  `idtiempo` int(11) NOT NULL,
  `anho` smallint(6) DEFAULT NULL,
  `mes` smallint(6) DEFAULT NULL,
  `dia` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturación`
--

CREATE TABLE `facturación` (
  `idFacturación` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `idCliente` int(11) NOT NULL,
  `idPlan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `facturación`
--

INSERT INTO `facturación` (`idFacturación`, `Fecha`, `idCliente`, `idPlan`) VALUES
(1, '2010-02-03', 45678, 5),
(2, '2011-02-03', 65487, 3),
(3, '2012-02-03', 76592, 1),
(4, '2013-02-03', 65487, 2),
(5, '2014-02-03', 45678, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `h_llamada`
--

CREATE TABLE `h_llamada` (
  `idCliente` int(11) NOT NULL,
  `idtiempo` int(11) NOT NULL,
  `idplan_pago` smallint(6) NOT NULL,
  `idcelula` smallint(6) NOT NULL,
  `numero_llamadas` int(11) DEFAULT NULL,
  `duracion` varchar(50) DEFAULT NULL,
  `monto` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea`
--

CREATE TABLE `linea` (
  `idLinea` int(11) NOT NULL,
  `Numero` int(11) DEFAULT NULL,
  `idCliente` int(11) NOT NULL,
  `idCelular` int(11) NOT NULL,
  `Localidad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `linea`
--

INSERT INTO `linea` (`idLinea`, `Numero`, `idCliente`, `idCelular`, `Localidad`) VALUES
(1, 7728124, 45678, 1, 'a'),
(2, 6546871, 65487, 2, 'b'),
(3, 9876123, 76592, 3, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_plan`
--

CREATE TABLE `linea_plan` (
  `idLinea_Plan` int(11) NOT NULL,
  `idLinea` int(11) NOT NULL,
  `idPlan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `linea_plan`
--

INSERT INTO `linea_plan` (`idLinea_Plan`, `idLinea`, `idPlan`) VALUES
(1, 3, 1),
(2, 2, 3),
(3, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llamada`
--

CREATE TABLE `llamada` (
  `idLlamada` int(11) NOT NULL,
  `Duración` int(11) DEFAULT NULL,
  `Emisor` varchar(45) DEFAULT NULL,
  `Receptor` varchar(45) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `idLinea_entrante` int(11) NOT NULL,
  `idLinea1_saliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `llamada`
--

INSERT INTO `llamada` (`idLlamada`, `Duración`, `Emisor`, `Receptor`, `Fecha`, `idLinea_entrante`, `idLinea1_saliente`) VALUES
(1, 3, NULL, NULL, '2010-02-03', 1, 2),
(2, 15, NULL, NULL, '2010-03-15', 2, 3),
(3, 2, NULL, NULL, '2010-05-23', 3, 1),
(4, 1, NULL, NULL, '2011-09-06', 2, 1),
(5, 10, NULL, NULL, '2011-09-21', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMarca`, `Nombre`) VALUES
(1, 'apple'),
(2, 'sony'),
(3, 'samsung'),
(4, 'htc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `idPago` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Detalle` varchar(45) DEFAULT NULL,
  `idLlamada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`idPago`, `Fecha`, `Detalle`, `idLlamada`) VALUES
(1, '2010-05-03', 'A1', 1),
(2, '2010-02-23', 'B2', 2),
(3, '2011-07-13', 'C3', 3),
(4, '2011-02-03', 'D4', 4),
(5, '2011-09-14', 'E5', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE `plan` (
  `idPlan` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL,
  `Descripcción` varchar(45) DEFAULT NULL,
  `idTipo_plan` int(11) NOT NULL,
  `idTarifas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`idPlan`, `Nombre`, `Precio`, `Descripcción`, `idTipo_plan`, `idTarifas`) VALUES
(1, 'Z', 1000, 'A', 5, 1),
(2, 'X', 1500, 'B', 4, 2),
(3, 'Y', 500, 'C', 3, 3),
(4, 'V', 800, 'D', 2, 4),
(5, 'C', 1200, 'E', 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `idServicio` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `idTarifas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`idServicio`, `Nombre`, `idTarifas`) VALUES
(1, 'internet', 1),
(2, 'mensajes', 2),
(3, 'llamadas', 3),
(4, 'internet 1', 4),
(5, 'internet 2', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serv_linea`
--

CREATE TABLE `serv_linea` (
  `idServ_linea` int(11) NOT NULL,
  `idServicio` int(11) NOT NULL,
  `idLinea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `serv_linea`
--

INSERT INTO `serv_linea` (`idServ_linea`, `idServicio`, `idLinea`) VALUES
(1, 5, 1),
(2, 4, 2),
(3, 2, 3),
(4, 1, 2),
(5, 3, 3),
(6, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE `tarifas` (
  `idTarifas` int(11) NOT NULL,
  `Monto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tarifas`
--

INSERT INTO `tarifas` (`idTarifas`, `Monto`) VALUES
(1, '643'),
(2, '450'),
(3, '120'),
(4, '352'),
(5, '250');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_plan`
--

CREATE TABLE `tipo_plan` (
  `idTipo_plan` int(11) NOT NULL,
  `Tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_plan`
--

INSERT INTO `tipo_plan` (`idTipo_plan`, `Tipo`) VALUES
(1, 'aaa'),
(2, 'bbb'),
(3, 'ccc'),
(4, 'ddd'),
(5, 'eee');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `celular`
--
ALTER TABLE `celular`
  ADD PRIMARY KEY (`idCelular`),
  ADD KEY `fk_Celular_Marca1_idx` (`idMarca`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `d_celula`
--
ALTER TABLE `d_celula`
  ADD PRIMARY KEY (`idcelula`);

--
-- Indices de la tabla `d_cliente`
--
ALTER TABLE `d_cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `d_planes`
--
ALTER TABLE `d_planes`
  ADD PRIMARY KEY (`idplan_pago`);

--
-- Indices de la tabla `d_tiempo`
--
ALTER TABLE `d_tiempo`
  ADD PRIMARY KEY (`idtiempo`);

--
-- Indices de la tabla `facturación`
--
ALTER TABLE `facturación`
  ADD PRIMARY KEY (`idFacturación`),
  ADD KEY `fk_Facturación_Cliente1_idx` (`idCliente`),
  ADD KEY `fk_Facturación_Plan1_idx` (`idPlan`);

--
-- Indices de la tabla `h_llamada`
--
ALTER TABLE `h_llamada`
  ADD PRIMARY KEY (`idCliente`,`idtiempo`,`idplan_pago`,`idcelula`),
  ADD KEY `d_cliente` (`idCliente`),
  ADD KEY `d_tiempo` (`idtiempo`),
  ADD KEY `d_planes` (`idplan_pago`),
  ADD KEY `d_celula` (`idcelula`);

--
-- Indices de la tabla `linea`
--
ALTER TABLE `linea`
  ADD PRIMARY KEY (`idLinea`),
  ADD KEY `fk_Linea_Cliente_idx` (`idCliente`),
  ADD KEY `fk_Linea_Celular1_idx` (`idCelular`);

--
-- Indices de la tabla `linea_plan`
--
ALTER TABLE `linea_plan`
  ADD PRIMARY KEY (`idLinea_Plan`),
  ADD KEY `fk_Linea_Plan_Linea1_idx` (`idLinea`),
  ADD KEY `fk_Linea_Plan_Plan1_idx` (`idPlan`);

--
-- Indices de la tabla `llamada`
--
ALTER TABLE `llamada`
  ADD PRIMARY KEY (`idLlamada`),
  ADD KEY `fk_Llamada_Linea1_idx` (`idLinea_entrante`),
  ADD KEY `fk_Llamada_Linea2_idx` (`idLinea1_saliente`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`idPago`),
  ADD KEY `fk_Pago_Llamada1_idx` (`idLlamada`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`idPlan`),
  ADD KEY `fk_Plan_Tipo_plan1_idx` (`idTipo_plan`),
  ADD KEY `fk_Plan_Tarifas1_idx` (`idTarifas`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`idServicio`),
  ADD KEY `fk_Servicio_Tarifas1_idx` (`idTarifas`);

--
-- Indices de la tabla `serv_linea`
--
ALTER TABLE `serv_linea`
  ADD PRIMARY KEY (`idServ_linea`),
  ADD KEY `fk_Serv_linea_Linea1_idx` (`idLinea`),
  ADD KEY `fk_Serv_linea_Servicio1_idx` (`idServicio`);

--
-- Indices de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`idTarifas`);

--
-- Indices de la tabla `tipo_plan`
--
ALTER TABLE `tipo_plan`
  ADD PRIMARY KEY (`idTipo_plan`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `celular`
--
ALTER TABLE `celular`
  MODIFY `idCelular` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `d_celula`
--
ALTER TABLE `d_celula`
  MODIFY `idcelula` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `d_planes`
--
ALTER TABLE `d_planes`
  MODIFY `idplan_pago` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `d_tiempo`
--
ALTER TABLE `d_tiempo`
  MODIFY `idtiempo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `facturación`
--
ALTER TABLE `facturación`
  MODIFY `idFacturación` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `celular`
--
ALTER TABLE `celular`
  ADD CONSTRAINT `fk_Celular_Marca1` FOREIGN KEY (`idMarca`) REFERENCES `marca` (`idMarca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `facturación`
--
ALTER TABLE `facturación`
  ADD CONSTRAINT `fk_Facturación_Cliente1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Facturación_Plan1` FOREIGN KEY (`idPlan`) REFERENCES `plan` (`idPlan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `h_llamada`
--
ALTER TABLE `h_llamada`
  ADD CONSTRAINT `h_llamada_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `d_cliente` (`idcliente`),
  ADD CONSTRAINT `h_llamada_ibfk_2` FOREIGN KEY (`idtiempo`) REFERENCES `d_tiempo` (`idtiempo`),
  ADD CONSTRAINT `h_llamada_ibfk_3` FOREIGN KEY (`idplan_pago`) REFERENCES `d_planes` (`idplan_pago`),
  ADD CONSTRAINT `h_llamada_ibfk_4` FOREIGN KEY (`idcelula`) REFERENCES `d_celula` (`idcelula`);

--
-- Filtros para la tabla `linea`
--
ALTER TABLE `linea`
  ADD CONSTRAINT `fk_Linea_Celular1` FOREIGN KEY (`idCelular`) REFERENCES `celular` (`idCelular`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Linea_Cliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `linea_plan`
--
ALTER TABLE `linea_plan`
  ADD CONSTRAINT `fk_Linea_Plan_Linea1` FOREIGN KEY (`idLinea`) REFERENCES `linea` (`idLinea`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Linea_Plan_Plan1` FOREIGN KEY (`idPlan`) REFERENCES `plan` (`idPlan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `llamada`
--
ALTER TABLE `llamada`
  ADD CONSTRAINT `fk_Llamada_Linea1` FOREIGN KEY (`idLinea_entrante`) REFERENCES `linea` (`idLinea`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Llamada_Linea2` FOREIGN KEY (`idLinea1_saliente`) REFERENCES `linea` (`idLinea`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `fk_Pago_Llamada1` FOREIGN KEY (`idLlamada`) REFERENCES `llamada` (`idLlamada`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `fk_Plan_Tarifas1` FOREIGN KEY (`idTarifas`) REFERENCES `tarifas` (`idTarifas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Plan_Tipo_plan1` FOREIGN KEY (`idTipo_plan`) REFERENCES `tipo_plan` (`idTipo_plan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `fk_Servicio_Tarifas1` FOREIGN KEY (`idTarifas`) REFERENCES `tarifas` (`idTarifas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `serv_linea`
--
ALTER TABLE `serv_linea`
  ADD CONSTRAINT `fk_Serv_linea_Linea1` FOREIGN KEY (`idLinea`) REFERENCES `linea` (`idLinea`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Serv_linea_Servicio1` FOREIGN KEY (`idServicio`) REFERENCES `servicio` (`idServicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
