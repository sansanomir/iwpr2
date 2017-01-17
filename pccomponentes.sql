-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2016 at 07:12 PM
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
-- Table structure for table `Categoria`
--

CREATE TABLE `Categoria` (
  `oid` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `Categoria`
--

INSERT INTO `Categoria` (`oid`, `nombre`) VALUES
(1, 'Portátiles'),
(2, 'Teclados'),
(3, 'Ratones');

-- --------------------------------------------------------

--
-- Table structure for table `Imagenes`
--

CREATE TABLE `Imagenes` (
  `oid` int(11) NOT NULL,
  `ruta` varchar(200) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_bin NOT NULL,
  `productooid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `LineaPedido`
--

CREATE TABLE `LineaPedido` (
  `oid` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL,
  `precioTotal` float NOT NULL,
  `productooid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `Marcas`
--

CREATE TABLE `Marcas` (
  `oid` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `Marcas`
--

INSERT INTO `Marcas` (`oid`, `nombre`) VALUES
(1, 'Apple'),
(2, 'Lenovo');

-- --------------------------------------------------------

--
-- Table structure for table `Oferta`
--

CREATE TABLE `Oferta` (
  `oid` int(11) NOT NULL,
  `fechaInicio` varchar(200) COLLATE utf8_bin NOT NULL,
  `fechaFil` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `Oferta`
--

INSERT INTO `Oferta` (`oid`, `fechaInicio`, `fechaFil`) VALUES
(0, '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `Opinion`
--

CREATE TABLE `Opinion` (
  `oid` int(11) NOT NULL,
  `comentario` varchar(100) COLLATE utf8_bin NOT NULL,
  `useroid` int(11) NOT NULL,
  `productooid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `Producto`
--

CREATE TABLE `Producto` (
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
-- Dumping data for table `Producto`
--

INSERT INTO `Producto` (`oid`, `nombre`, `descripcion`, `precio`, `stock`, `subcategoriaoid`, `marcasoid`, `ofertaoid`) VALUES
(1, 'Macbook', '7.1', '34', 45, 0, 0, 0),
(2, 'LEnovo thinkpad', 'dfgfagfa', '34', 34, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Subcategoria`
--

CREATE TABLE `Subcategoria` (
  `oid` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_bin NOT NULL,
  `categoriaoid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `Subcategoria`
--

INSERT INTO `Subcategoria` (`oid`, `nombre`, `categoriaoid`) VALUES
(1, 'Netbook', 1);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
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
-- Dumping data for table `User`
--

INSERT INTO `User` (`oid`, `userName`, `password`, `nombre`, `email`, `direccion`, `cuenta`, `carrooid`) VALUES
(1, 'hsm', 'hsm', 'Héctor', 'hsm5@gmail.com', 'C/Eduardo Ferrandez', '325412531', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Categoria`
--
ALTER TABLE `Categoria`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `Imagenes`
--
ALTER TABLE `Imagenes`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `LineaPedido`
--
ALTER TABLE `LineaPedido`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `Marcas`
--
ALTER TABLE `Marcas`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `Opinion`
--
ALTER TABLE `Opinion`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `Producto`
--
ALTER TABLE `Producto`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `Subcategoria`
--
ALTER TABLE `Subcategoria`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`oid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Categoria`
--
ALTER TABLE `Categoria`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Imagenes`
--
ALTER TABLE `Imagenes`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `LineaPedido`
--
ALTER TABLE `LineaPedido`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Marcas`
--
ALTER TABLE `Marcas`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Opinion`
--
ALTER TABLE `Opinion`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Producto`
--
ALTER TABLE `Producto`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Subcategoria`
--
ALTER TABLE `Subcategoria`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
