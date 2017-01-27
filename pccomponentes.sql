-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2017 at 09:27 AM
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
(33, 11),
(34, 6),
(35, 10),
(36, 7),
(37, 12);

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
(213, 1, 34, -1, 3, 15),
(214, 1, 1000, -1, 2, 15),
(215, 1, 1000, -1, 2, 15),
(216, 1, 15, -1, 8, 15),
(217, 1, 34, -1, 3, 34),
(218, 1, 700, -1, 4, 34),
(219, 1, 1300, -1, 6, 34),
(220, 1, 34, -1, 3, 2),
(221, 1, 1000, -1, 2, 2),
(222, 1, 34, -1, 3, 2),
(223, 1, 34, -1, 3, 2),
(224, 1, 1000, -1, 2, 2),
(225, 1, 34, -1, 3, 2),
(232, 1, 34, -1, 3, 32),
(233, 1, 1000, -1, 2, 32),
(234, 1, 34, -1, 3, 36),
(235, 1, 1000, -1, 2, 36),
(236, 1, 15, -1, 8, 12),
(237, 1, 1300, -1, 6, 12);

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
(4, 'Hp'),
(5, 'Logitech'),
(6, 'Sony'),
(7, 'Pioneer');

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
(3, 'bueno', 7, 3, 1),
(4, 'fdas', 7, 3, 0),
(5, 'Comentario', 6, 4, 0),
(6, 'Comentario de hsm', 7, 2, 0),
(7, 'fsda', 7, 2, 0),
(8, 'Me encanta', 7, 2, 1);

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
(2, 'Lenovo thinkpad', 'Macnífico portátil', '1000', 13, 1, 2, 0),
(3, 'Ratón msi', 'Ratón para gamming', '34', 1226, 3, 3, 0),
(4, 'Torre HP', 'Magnifica tore blablabla', '700', 50, 5, 4, 0),
(6, 'Macbook Pro', 'Portátil de Apple de última generación?', '1300', 14, 2, 1, 1),
(8, 'Ratón inalámbrico', 'Ratón inalámbrico Logitech para uso cotidiano', '15', 14, 6, 5, 1),
(9, 'Altavoces Sony', 'Altavoces básicos para audio', '16', 10, 7, 6, 1),
(10, 'Altavoces stereo pro Pioneer', 'Calidad de sonido excelente', '35', 19, 4, 7, 1);

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
(5, 'Torre gamming', 21),
(6, 'Cotidiano', 3),
(7, 'Básicos', 10);

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
(6, 'juan', 'a94652aa97c7211ba8954dd15a3cf838', 'Juanito', 'juanito@gmail.com', 'Calle roja', '1324', 34),
(7, 'hsm', '75bc08308363144baf3b29af7c580e0b', 'Héctor Sansano Miralles', 'sansanomiralles@gmail.com', 'Calle amarilla', '52345236', 36),
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrador', 'admin@pccomponentes.com', 'Calle amarilla', '452345623', NULL),
(10, 'invitado', '', '', '', '', '', 35),
(11, 'pepe', '926e27eecdbc7a18858b3798ba99bddd', 'Jose ', 'jose@gmail.com', 'Calle roja', '34214', 11),
(12, 'pedro', 'c6cc8094c2dc07b700ffcc36d64e2138', 'Pedro Martinez', 'pedro@gmail.com', 'Calle eduardo', '3452151', 12);

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
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
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
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;
--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `opinion`
--
ALTER TABLE `opinion`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
