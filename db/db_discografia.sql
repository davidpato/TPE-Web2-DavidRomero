-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 07:28 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_discografia`
--

-- --------------------------------------------------------

--
-- Table structure for table `cancion`
--

CREATE TABLE `cancion` (
  `c_id` int(11) NOT NULL,
  `c_nombre` varchar(60) NOT NULL,
  `c_duracion` int(11) NOT NULL,
  `c_disco` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancion`
--

INSERT INTO `cancion` (`c_id`, `c_nombre`, `c_duracion`, `c_disco`) VALUES
(41, 'Astronomy Domine', 4, 87),
(42, 'Lucifer Sam', 3, 87),
(43, 'Matilda Mother', 3, 87),
(44, 'Let There Be More Light', 5, 88),
(45, 'Remember a Day', 4, 88),
(46, 'Set the Controls for the Heart of the Sun', 5, 88);

-- --------------------------------------------------------

--
-- Table structure for table `disco`
--

CREATE TABLE `disco` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disco`
--

INSERT INTO `disco` (`id`, `nombre`, `descripcion`) VALUES
(87, 'The Piper at the Gates of Dawn', '1967'),
(88, 'A Saucerful of Secrets', '1968'),
(89, 'Atom Heart Mother', '1970'),
(90, 'The Dark Side of the Moon', '1973');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `pass` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `pass`) VALUES
(5, 'user', '$2y$10$XVmeMPAK4aSrF6lxxWKv0O53ss/cpYtLgbmeJZ9BZpOiG5QXenF7e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cancion`
--
ALTER TABLE `cancion`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `disco` (`c_disco`);

--
-- Indexes for table `disco`
--
ALTER TABLE `disco`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre` (`nombre`),
  ADD KEY `nombre_2` (`nombre`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cancion`
--
ALTER TABLE `cancion`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `disco`
--
ALTER TABLE `disco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cancion`
--
ALTER TABLE `cancion`
  ADD CONSTRAINT `cancion_ibfk_1` FOREIGN KEY (`c_disco`) REFERENCES `disco` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
