-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 30, 2022 at 09:24 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ryanvonb_WPXU2`
--

-- --------------------------------------------------------

--
-- Table structure for table `initial_cars`
--

CREATE TABLE `initial_cars` (
  `ID` int(11) NOT NULL,
  `make` varchar(10) NOT NULL,
  `model` varchar(20) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `initial_cars`
--

INSERT INTO `initial_cars` (`ID`, `make`, `model`, `img`) VALUES
(1, 'Nissan', 'Silvia S13', 'S13.png'),
(2, 'Nissan', '180SX', '180SX.png'),
(3, 'Nissan', 'Skyline R32', 'R32.png'),
(4, 'Honda', 'CIVIC EG6', 'EG6.png'),
(6, 'Mazda', 'RX7 FC', 'FC3S.png'),
(7, 'Mazda', 'RX7 FD', 'FD3S.png'),
(8, 'Nissan', 'SILEIGHTY', 'SilEighty.png'),
(9, 'Mitsubishi', 'Lancer Evo V', 'EVO_V.png'),
(10, 'Subaru', 'WRX STI', 'WRX.png'),
(11, 'Toyota', 'Supra', 'SUPRA.png'),
(12, 'Honda', 'S2000 AP1', 'AP1.jpg'),
(13, 'Toyota', 'AE86', 'the86.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `initial_cars`
--
ALTER TABLE `initial_cars`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `initial_cars`
--
ALTER TABLE `initial_cars`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
