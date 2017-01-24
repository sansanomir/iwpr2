-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2017 at 08:35 PM
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
(2, 'Teclados');

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
(2, 'Lenovo');

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
  `productooid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(1, 'Macbook', '7.1', '34', 45, 0, 0, 0),
(2, 'LEnovo thinkpad', 'dfgfagfa', '34', 34, 1, 0, 0);

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
(4, 'Stereo', 10);

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
(6, 'juan', 'a94652aa97c7211ba8954dd15a3cf838', 'Juanito', 'juanito@gmail.com', 'Calle roja', '1324', NULL),
(7, 'hsm', '75bc08308363144baf3b29af7c580e0b', 'Héctor Sansano', 'sansanomiralles@gmail.com', 'Calle roja', '9123', NULL),
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrador', 'admin@pccomponentes.com', 'Calle amarilla', '452345623', NULL),
(9, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', NULL);

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
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lineapedido`
--
ALTER TABLE `lineapedido`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `opinion`
--
ALTER TABLE `opinion`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
