-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 17-12-2019 a las 02:45:22
-- Versión del servidor: 10.2.22-MariaDB-1:10.2.22+maria~bionic
-- Versión de PHP: 7.3.12-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `marca` varchar(20) DEFAULT NULL,
  `modelo` varchar(20) DEFAULT NULL,
  `anio` int(4) NOT NULL,
  `imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`marca`, `modelo`, `anio`, `imagen`) VALUES
('Tesla', 'Model 3', 2014, 'model3.jpg'),
('Tesla', 'Model Y', 2017, 'modelY.jpg'),
('Tesla', 'Model X', 2015, 'modelX.jpg'),
('Tesla', 'Model S', 2020, 'modelS.jpg'),
('Tesla', 'Roadster', 2020, 'roadster.jpg'),
('Tesla', 'CyberTruck', 2020, 'cybertruck.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `misProductos`
--

CREATE TABLE `misProductos` (
  `nombre` varchar(50) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `existencia` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `misProductos`
--

INSERT INTO `misProductos` (`nombre`, `precio`, `categoria`, `existencia`) VALUES
('coca', 10, 'bebidas', 5),
('pepsi', 10, 'bebidas', 6),
('sopa', 15, 'alimentos', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(6) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `precioCompra` decimal(4,2) DEFAULT NULL,
  `precioVenta` decimal(5,3) DEFAULT NULL,
  `fechaCompra` varchar(10) DEFAULT NULL,
  `categoria` varchar(15) DEFAULT NULL,
  `unidadesEnExistencia` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precioCompra`, `precioVenta`, `fechaCompra`, `categoria`, `unidadesEnExistencia`) VALUES
(1, 'Té Dharamsala', '18.00', '19.800', '2015-10-10', 'Bebidas', 39),
(2, 'Cerveza tibetana Barley', '19.00', '20.900', '2015-10-11', 'Bebidas', 17),
(3, 'Sirope de regaliz', '10.00', '11.000', '2015-10-12', 'Condimentos', 13),
(4, 'Especias Cajun del chef Anton', '22.00', '24.200', '2015-10-13', 'Condimentos', 53),
(5, 'Mezcla Gumbo del chef Anton', '21.35', '23.485', '2015-10-14', 'Condimentos', 0),
(6, 'Mermelada de grosellas de la abuela', '25.00', '27.500', '2015-10-15', 'Condimentos', 120),
(7, 'Peras secas orgánicas del tío Bob', '30.00', '33.000', '2015-10-16', 'Frutas/Verduras', 15),
(8, 'Salsa de arándanos Northwoods', '40.00', '44.000', '2015-10-17', 'Condimentos', 6),
(9, 'Buey Mishi Kobe', '90.00', '99.000', '2015-10-18', 'Carnes', 29),
(10, 'Pez espada', '31.00', '34.100', '2015-10-19', 'Pescado/Marisco', 31),
(11, 'Queso Cabrales', '21.00', '23.100', '2015-10-20', 'Lácteos', 22),
(12, 'Queso Manchego La Pastora', '38.00', '41.800', '2015-10-21', 'Lácteos', 86),
(13, 'Algas Konbu', '6.00', '6.600', '2015-10-22', 'Pescado/Marisco', 24),
(14, 'Cuajada de judías', '23.25', '25.575', '2015-10-23', 'Frutas/Verduras', 35),
(15, 'Salsa de soja baja en sodio', '15.50', '17.050', '2015-10-24', 'Condimentos', 39),
(16, 'Postre de merengue Pavlova', '17.45', '19.195', '2015-10-25', 'Repostería', 29),
(17, 'Cordero Alice Springs', '39.00', '42.900', '2015-10-26', 'Carnes', 0),
(18, 'Langostinos tigre Carnarvon', '62.50', '68.750', '2015-10-27', 'Pescado/Marisco', 42),
(19, 'Pastas de té de chocolate', '9.20', '10.120', '2015-10-28', 'Repostería', 25),
(20, 'Mermelada de Sir Rodney\'s', '81.00', '89.100', '2015-10-29', 'Repostería', 40),
(21, 'Bollos de Sir Rodney\'s', '18.00', '19.800', '2015-10-10', 'Repostería', 3),
(22, 'Pan de centeno crujiente estilo Gustaf\'s', '19.00', '20.900', '2015-10-11', 'Granos/Cereales', 104),
(23, 'Pan fino', '10.00', '11.000', '2015-10-12', 'Granos/Cereales', 61),
(24, 'Refresco Guaraná Fantástica', '22.00', '24.200', '2015-10-13', 'Bebidas', 20),
(25, 'Crema de chocolate y nueces NuNuCa', '21.35', '23.485', '2015-10-14', 'Repostería', 76),
(26, 'Ositos de goma Gumbär', '25.00', '27.500', '2015-10-15', 'Repostería', 15),
(27, 'Chocolate Schoggi', '30.00', '33.000', '2015-10-16', 'Repostería', 49),
(28, 'Col fermentada Rössle', '40.00', '44.000', '2015-10-17', 'Frutas/Verduras', 26),
(29, 'Salchicha Thüringer', '90.00', '99.000', '2015-10-18', 'Carnes', 0),
(30, 'Arenque blanco del noroeste', '31.00', '34.100', '2015-10-19', 'Pescado/Marisco', 10),
(31, 'Queso gorgonzola Telino', '21.00', '23.100', '2015-10-20', 'Lácteos', 0),
(32, 'Queso Mascarpone Fabioli', '38.00', '41.800', '2015-10-21', 'Lácteos', 9),
(33, 'Queso de cabra', '6.00', '6.600', '2015-10-22', 'Lácteos', 112),
(34, 'Cerveza Sasquatch', '23.25', '25.575', '2015-10-23', 'Bebidas', 111),
(35, 'Cerveza negra Steeleye', '15.50', '17.050', '2015-10-24', 'Bebidas', 20),
(36, 'Escabeche de arenque', '17.45', '19.195', '2015-10-25', 'Pescado/Marisco', 112),
(37, 'Salmón ahumado Gravad', '39.00', '42.900', '2015-10-26', 'Pescado/Marisco', 11),
(38, 'Vino Côte de Blaye', '62.50', '68.750', '2015-10-27', 'Bebidas', 17),
(39, 'Licor verde Chartreuse', '9.20', '10.120', '2015-10-28', 'Bebidas', 69),
(40, 'Carne de cangrejo de Boston', '81.00', '89.100', '2015-10-29', 'Pescado/Marisco', 123),
(41, 'Crema de almejas estilo Nueva Inglaterra', '18.00', '19.800', '2015-10-10', 'Pescado/Marisco', 85),
(42, 'Tallarines de Singapur', '19.00', '20.900', '2015-10-11', 'Granos/Cereales', 26),
(43, 'Café de Malasia', '10.00', '11.000', '2015-10-12', 'Bebidas', 17),
(44, 'Azúcar negra Malacca', '22.00', '24.200', '2015-10-13', 'Condimentos', 27),
(45, 'Arenque ahumado', '21.35', '23.485', '2015-10-14', 'Pescado/Marisco', 5),
(46, 'Arenque salado', '25.00', '27.500', '2015-10-15', 'Pescado/Marisco', 95),
(47, 'Galletas Zaanse', '30.00', '33.000', '2015-10-16', 'Repostería', 36),
(48, 'Chocolate holandés', '40.00', '44.000', '2015-10-17', 'Repostería', 15),
(49, 'Regaliz', '90.00', '99.000', '2015-10-18', 'Repostería', 10),
(50, 'Chocolate blanco', '31.00', '34.100', '2015-10-19', 'Repostería', 65),
(51, 'Manzanas secas Manjimup', '21.00', '23.100', '2015-10-20', 'Frutas/Verduras', 20),
(52, 'Cereales para Filo', '38.00', '41.800', '2015-10-21', 'Granos/Cereales', 38),
(53, 'Empanada de carne', '6.00', '6.600', '2015-10-22', 'Carnes', 0),
(54, 'Empanada de cerdo', '23.25', '25.575', '2015-10-23', 'Carnes', 21),
(55, 'Paté chino', '15.50', '17.050', '2015-10-24', 'Carnes', 115),
(56, 'Gnocchi de la abuela Alicia', '17.45', '19.195', '2015-10-25', 'Granos/Cereales', 21),
(57, 'Raviolis Angelo', '39.00', '42.900', '2015-10-26', 'Granos/Cereales', 36),
(58, 'Caracoles de Borgoña', '62.50', '68.750', '2015-10-27', 'Pescado/Marisco', 62),
(59, 'Raclet de queso Courdavault', '9.20', '10.120', '2015-10-28', 'Lácteos', 79),
(60, 'Camembert Pierrot', '81.00', '89.100', '2015-10-29', 'Lácteos', 19),
(61, 'Sirope de arce', '18.00', '19.800', '2015-10-10', 'Condimentos', 113),
(62, 'Tarta de azúcar', '19.00', '20.900', '2015-10-11', 'Repostería', 17),
(63, 'Sandwich de vegetales', '10.00', '11.000', '2015-10-12', 'Condimentos', 24),
(64, 'Bollos de pan de Wimmer', '22.00', '24.200', '2015-10-13', 'Granos/Cereales', 22),
(65, 'Salsa de pimiento picante de Luisiana', '21.35', '23.485', '2015-10-14', 'Condimentos', 76),
(66, 'Especias picantes de Luisiana', '25.00', '27.500', '2015-10-15', 'Condimentos', 4),
(67, 'Cerveza Laughing Lumberjack', '30.00', '33.000', '2015-10-16', 'Bebidas', 52),
(68, 'Barras de pan de Escocia', '40.00', '44.000', '2015-10-17', 'Repostería', 6),
(69, 'Queso Gudbrandsdals', '90.00', '99.000', '2015-10-18', 'Lácteos', 26),
(70, 'Cerveza Outback', '32.00', '34.100', '2015-10-19', 'Bebidas', 15),
(71, 'Crema de queso Fløtemys', '21.00', '23.100', '2015-10-20', 'Lácteos', 26),
(72, 'Queso Mozzarella Giovanni', '38.00', '41.800', '2015-10-21', 'Lácteos', 14),
(73, 'Caviar rojo', '6.00', '6.600', '2015-10-22', 'Pescado/Marisco', 101),
(74, 'Queso de soja Longlife', '23.00', '25.575', '2015-10-23', 'Frutas/Verduras', 4),
(75, 'Cerveza Klosterbier Rhönbräu', '15.50', '17.050', '2015-10-24', 'Bebidas', 125),
(76, 'Licor Cloudberry', '17.45', '19.195', '2015-10-25', 'Bebidas', 57),
(77, 'Salsa verde original Frankfurter', '39.00', '42.900', '2015-10-26', 'Condimentos', 32),
(80, 'pepino', '10.00', '20.000', '2020-10-10', 'Frutas', 47);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
