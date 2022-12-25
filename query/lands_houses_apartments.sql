-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 03:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online property sales system`
--

-- --------------------------------------------------------

--
-- Table structure for table `lands_houses_apartments`
--

CREATE TABLE `lands_houses_apartments` (
  `p_ID` varchar(5) DEFAULT NULL,
  `prType` varchar(15) DEFAULT NULL,
  `prName` char(50) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `price` float DEFAULT NULL,
  `sID` varchar(5) DEFAULT NULL,
  `listedDate` date DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lands_houses_apartments`
--

INSERT INTO `lands_houses_apartments` (`p_ID`, `prType`, `prName`, `location`, `price`, `sID`, `listedDate`, `image`) VALUES
(NULL, 'house', 'test3', '111111', 1111, '', '0000-00-00', ''),
(NULL, 'house', 'test1', 'test1', 5555, '', '0000-00-00', ''),
('', 'house', 'test3', 'yess', 22, '', '0000-00-00', ''),
('4', 'a', 'ae', 'as', 44, '', '0000-00-00', 'ddddddddd'),
('', 'house', 'h', 'h', 33, '', '0000-00-00', ''),
('', 'house', 'kjhgfd', 'sssssssssssssssssssssssssssssssssssssssssss', 3333330, '', '0000-00-00', 'Screenshot (6).png'),
('', 'house', 'kjhgfd', 'sssssssssssssssssssssssssssssssssssssssssss', 3333330, '', '0000-00-00', 'Screenshot (6).png'),
('', 'house', 'test3', 'sdfghj', 34567, '', '0000-00-00', 'Screenshot (3).png'),
('', 'land', 'Madusha Land', 'No 111, blallballb', 250000, '', '0000-00-00', 'Screenshot (3).png'),
('', 'land', 'Rashmi', 'wdfghj', 345678, '', '0000-00-00', '093ae56dc941bb55ca01f8b4214beb62 (1).jpg'),
('', 'land', 'test1', 'qwerty', 12345, '', '0000-00-00', '3701322.jpg'),
('', 'land', 'dffgh', 'cvbn', 123452, '', '0000-00-00', '3717057.jpg'),
('', 'land', 'xcght', 'cvbnvhuu', 1234530, '', '0000-00-00', '4442153.jpg'),
('14', 'land', 'test3', 'dfgg', 2356790, '', '0000-00-00', '1929x1089-px-Exam-Wallpapers-4WC76KT.jpg-Wallperio.comtm.jpg'),
('P15', 'dis', 'test3', 'asdfgh', 12345, '', '0000-00-00', 'a3d013988bcf04fa781c288425df67644e34c377.jpg'),
('P16', 'land', 'matti', '1234567', 345567, '', '0000-00-00', '82_carousel_neptune_1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
