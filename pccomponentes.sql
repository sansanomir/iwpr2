-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2017 at 05:49 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pccomponentes`
--

-- --------------------------------------------------------

--
-- Table structure for table `carro`
--

CREATE TABLE `carro` (
  `oid` int(11) NOT NULL,
  `useroid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `carro`
--

INSERT INTO `carro` (`oid`, `useroid`) VALUES
(2, 10),
(15, 6),
(16, 7);

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `oid` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`oid`, `nombre`) VALUES
(10, 'Altavoces'),
(4, 'Computadores'),
(12, 'Inalámbrico'),
(20, 'Nueva'),
(1, 'Portátiles'),
(3, 'Ratones'),
(2, 'Teclados'),
(21, 'Torre');

-- --------------------------------------------------------

--
-- Table structure for table `imagenes`
--

CREATE TABLE `imagenes` (
  `oid` int(11) NOT NULL,
  `ruta` varchar(200) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_bin NOT NULL,
  `productooid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `lineapedido`
--

CREATE TABLE `lineapedido` (
  `oid` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL,
  `precioTotal` float NOT NULL,
  `productooid` int(11) NOT NULL,
  `carrooid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `lineapedido`
--

INSERT INTO `lineapedido` (`oid`, `cantidad`, `precio`, `precioTotal`, `productooid`, `carrooid`) VALUES
(1, 1, 0, 0, 2, 1),
(2, 1, 23, 34, 2, 1),
(3, 1, 13, 321, 3, 1),
(4, 1, 1000, 1000, 2, 6),
(5, 1, 34, 34, 3, 6),
(6, 1, -1, -1, 2, 6),
(7, 1, -1, -1, 3, 6),
(8, 1, -1, -1, 2, 6),
(9, 1, -1, -1, 3, 1),
(10, 1, -1, -1, 3, 1),
(11, 1, -1, -1, 3, 1),
(12, 1, -1, -1, 3, 1),
(13, 1, -1, -1, 3, 1),
(14, 1, -1, -1, 3, 1),
(15, 1, -1, -1, 3, 1),
(16, 1, -1, -1, 3, 1),
(17, 1, -1, -1, 3, 1),
(18, 1, -1, -1, 2, 1),
(19, 1, -1, -1, 2, 1),
(20, 1, -1, -1, 2, 1),
(21, 1, -1, -1, 2, 1),
(22, 1, -1, -1, 2, 1),
(23, 1, -1, -1, 2, 1),
(24, 1, -1, -1, 2, 1),
(25, 1, -1, -1, 2, 1),
(26, 1, -1, -1, 2, 1),
(27, 1, -1, -1, 2, 1),
(28, 1, -1, -1, 2, 1),
(29, 1, -1, -1, 2, 1),
(30, 1, -1, -1, 3, 1),
(31, 1, -1, -1, 3, 1),
(32, 1, -1, -1, 3, 1),
(33, 1, -1, -1, 4, 1),
(34, 1, -1, -1, 4, 1),
(35, 1, -1, -1, 3, 1),
(36, 1, -1, -1, 4, 1),
(37, 1, -1, -1, 4, 2),
(38, 1, -1, -1, 2, 2),
(39, 1, -1, -1, 3, 2),
(40, 1, -1, -1, 3, 2),
(41, 1, -1, -1, 3, 2),
(42, 1, -1, -1, 4, 2),
(43, 1, -1, -1, 4, 1),
(44, 1, -1, -1, 4, 1),
(45, 1, -1, -1, 4, 1),
(46, 1, -1, -1, 4, 1),
(47, 1, -1, -1, 4, 1),
(48, 1, -1, -1, 4, 1),
(49, 1, -1, -1, 4, 1),
(50, 1, -1, -1, 4, 1),
(51, 1, -1, -1, 4, 1),
(52, 1, -1, -1, 4, 1),
(53, 1, -1, -1, 4, 1),
(54, 1, -1, -1, 4, 1),
(55, 1, -1, -1, 2, 13),
(56, 1, -1, -1, 2, 13),
(57, 1, -1, -1, 3, 13),
(58, 1, -1, -1, 4, 13),
(59, 1, -1, -1, 4, 2),
(60, 1, -1, -1, 4, 2),
(61, 1, -1, -1, 4, 2),
(62, 1, -1, -1, 4, 2),
(63, 1, -1, -1, 2, 2),
(64, 1, -1, -1, 2, 14),
(65, 1, -1, -1, 3, 14),
(66, 1, -1, -1, 3, 14),
(67, 1, -1, -1, 2, 15),
(68, 1, -1, -1, 2, 15),
(69, 1, -1, -1, 3, 15),
(70, 1, -1, -1, 3, 15),
(71, 1, -1, -1, 3, 15),
(72, 1, -1, -1, 3, 15),
(73, 1, -1, -1, 3, 2),
(74, 1, -1, -1, 2, 16),
(75, 1, -1, -1, 3, 16),
(76, 1, -1, -1, 2, 16),
(77, 1, -1, -1, 4, 16),
(78, 1, -1, -1, 4, 16),
(79, 1, -1, -1, 4, 16);

-- --------------------------------------------------------

--
-- Table structure for table `marcas`
--

CREATE TABLE `marcas` (
  `oid` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `marcas`
--

INSERT INTO `marcas` (`oid`, `nombre`) VALUES
(1, 'Apple'),
(2, 'Lenovo'),
(3, 'Msi'),
(4, 'Hp');

-- --------------------------------------------------------

--
-- Table structure for table `oferta`
--

CREATE TABLE `oferta` (
  `oid` int(11) NOT NULL,
  `fechaInicio` varchar(200) COLLATE utf8_bin NOT NULL,
  `fechaFil` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `oferta`
--

INSERT INTO `oferta` (`oid`, `fechaInicio`, `fechaFil`) VALUES
(0, '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `opinion`
--

CREATE TABLE `opinion` (
  `oid` int(11) NOT NULL,
  `comentario` varchar(100) COLLATE utf8_bin NOT NULL,
  `useroid` int(11) NOT NULL,
  `productooid` int(11) NOT NULL,
  `ok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `opinion`
--

INSERT INTO `opinion` (`oid`, `comentario`, `useroid`, `productooid`, `ok`) VALUES
(1, 'Muy buena torre', 7, 4, 1),
(2, 'Me gusta mucho', 6, 4, 0),
(3, 'bueno', 7, 3, 0),
(4, 'fdas', 7, 3, 0),
(5, 'Comentario', 6, 4, 0),
(6, 'Comentario de hsm', 7, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `oid` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_bin NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `stock` int(11) NOT NULL,
  `subcategoriaoid` int(11) NOT NULL,
  `marcasoid` int(11) NOT NULL,
  `ofertaoid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`oid`, `nombre`, `descripcion`, `precio`, `stock`, `subcategoriaoid`, `marcasoid`, `ofertaoid`) VALUES
(2, 'LEnovo thinkpad', 'dfgfagfa', '1000', 34, 1, 2, 0),
(3, 'Ratón msi', 'Ratón para gamming', '34', -1, 3, 3, 0),
(4, 'Torre HP', 'MAgnifica tore blablabla', '700', 91, 5, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subcategoria`
--

CREATE TABLE `subcategoria` (
  `oid` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_bin NOT NULL,
  `categoriaoid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `subcategoria`
--

INSERT INTO `subcategoria` (`oid`, `nombre`, `categoriaoid`) VALUES
(1, 'Netbook', 1),
(2, 'Macbook', 1),
(3, 'Gamming', 3),
(4, 'Stereo', 10),
(5, 'Torre gamming', 21);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `oid` int(11) NOT NULL,
  `userName` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(200) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(200) COLLATE utf8_bin NOT NULL,
  `cuenta` varchar(200) COLLATE utf8_bin NOT NULL,
  `carrooid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`oid`, `userName`, `password`, `nombre`, `email`, `direccion`, `cuenta`, `carrooid`) VALUES
(2, 'pep', 'pep', 'pep', 'pep', 'pep', 'pep', NULL),
(4, 'pepe', 'pepe', 'lmsadml', 'mlfdaslm', 'dfasm', 'fdasm', NULL),
(6, 'juan', 'a94652aa97c7211ba8954dd15a3cf838', 'Juanito', 'juanito@gmail.com', 'Calle roja', '1324', 15),
(7, 'hsm', '75bc08308363144baf3b29af7c580e0b', 'Héctor Sansano', 'sansanomiralles@gmail.com', 'Calle roja', '9123', 16),
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrador', 'admin@pccomponentes.com', 'Calle amarilla', '452345623', NULL),
(9, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', NULL),
(10, 'invitado', '', '', '', '', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`oid`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indexes for table `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `lineapedido`
--
ALTER TABLE `lineapedido`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `opinion`
--
ALTER TABLE `opinion`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`oid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carro`
--
ALTER TABLE `carro`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lineapedido`
--
ALTER TABLE `lineapedido`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `opinion`
--
ALTER TABLE `opinion`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
