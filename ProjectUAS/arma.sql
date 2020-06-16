-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2020 at 12:29 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arma`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderguitar`
--

CREATE TABLE `orderguitar` (
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` int(15) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderguitar`
--

INSERT INTO `orderguitar` (`Name`, `Address`, `Phone`, `Type`) VALUES
('funk', 'republic city', 9876, 'ESP E-II Horizon NT-7B Hipshot'),
('funk', 'beach', 435636, 'PRS SE Standard 24'),
('funk', 'republic city', 456789, 'PRS SE Standard 24'),
('ash', 'omashu', 1234321, 'Gibson 1959 Les Paul Standard'),
('raava', 'spirit world', 69696969, 'ESP E-II Horizon NT-7B Hipshot'),
('shi', 'heaven', 81818181, 'Gibson 1959 Les Paul Standard'),
('pabu', 'republic city', 111222333, 'ESP E-II Horizon NT-7B Hipshot'),
('roy', 'hell', 2147483647, 'Gibson 1959 Les Paul Standard');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderguitar`
--
ALTER TABLE `orderguitar`
  ADD PRIMARY KEY (`Phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
