-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 08:49 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perfiles`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_perfiles_alumno`
--

CREATE TABLE `t_perfiles_alumno` (
  `id_perfil` int(30) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apaterno` varchar(255) DEFAULT NULL,
  `amaterno` varchar(255) DEFAULT NULL,
  `matricula` varchar(255) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `especialidad` varchar(255) DEFAULT NULL,
  `sexo` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `extension` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_perfiles_alumno`
--

INSERT INTO `t_perfiles_alumno` (`id_perfil`, `nombre`, `apaterno`, `amaterno`, `matricula`, `fechaNacimiento`, `especialidad`, `sexo`, `foto`, `extension`) VALUES
(21, 'LAURA ITZEL', 'Mtz', 'Zaragoza', '171190097', '1998-09-26', 'Sistemas', 'Femenino', 'kame-house-dragon-ball-casa-de-muten-roshi-maestro.jpg', 'jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_perfiles_alumno`
--
ALTER TABLE `t_perfiles_alumno`
  ADD PRIMARY KEY (`id_perfil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_perfiles_alumno`
--
ALTER TABLE `t_perfiles_alumno`
  MODIFY `id_perfil` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
