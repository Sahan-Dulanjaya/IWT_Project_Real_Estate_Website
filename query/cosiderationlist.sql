-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 07:02 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwt`
--

-- --------------------------------------------------------

--
-- Table structure for table `cosiderationlist`
--

CREATE TABLE `cosiderationlist` (
  `cl_ID` varchar(10) DEFAULT NULL,
  `p_ID` varchar(5) NOT NULL,
  `pType` varchar(25) NOT NULL,
  `pName` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `location` text NOT NULL,
  `price` float NOT NULL,
  `listedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cosiderationlist`
--

INSERT INTO `cosiderationlist` (`cl_ID`, `p_ID`, `pType`, `pName`, `photo`, `location`, `price`, `listedDate`) VALUES
(NULL, '1', '', '', 'Planet9_3840x2160.jpg', 'testing123testing123', 1111, '0000-00-00'),
(NULL, '14', 'land', 'test3', '1929x1089-px-Exam-Wallpapers-4WC76KT.jpg-Wallperio.comtm.jpg', 'dfgg', 2356790, '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
