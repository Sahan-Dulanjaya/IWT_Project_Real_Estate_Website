-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 12:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paymentinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `paymentinfonew`
--

CREATE TABLE `paymentinfonew` (
  `userID` int(5) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adr` varchar(500) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `ccnum` varchar(16) NOT NULL,
  `expmonth` varchar(2) NOT NULL,
  `expyear` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentinfonew`
--

INSERT INTO `paymentinfonew` (`userID`, `fname`, `email`, `adr`, `city`, `state`, `zip`, `cname`, `ccnum`, `expmonth`, `expyear`) VALUES
(1, 'Anuradha  Jayasuriya', 'ccnin4czft9@temporary-mail.net', '64, Foster Lane, Colombo', 'Colombo', 'Western', '00130', 'A Jayasuriya', '5527821137542603', '9', '2026'),
(2, 'Ninithi  Jayawickrama', 'nithi.wickrama@gmail.com', 'NO. 385/6, Madawachchi Road, Negombo', 'Negombo', 'Western', '11410', 'N Jayawickrama', '5299761099452282', '11', '2023'),
(3, 'Dimuthu Jayasumanage Jayewardene', 'dimajay@outlook.com', '1117 A Maradana Road, Madawachchiya', 'Madawachchiya', 'Anuradhapura', '50500', 'D J Jayewardene', '5558127264796414', '6', '2024'),
(4, 'Ama Viharsha Jayasinghe', 'viharsha99@gmail.com', 'No 99 thalatuoya road, Gurudeniya', 'Kandy', 'Central', '20000', 'A V Jayasinghe', '5348749235636430', '3', '2024'),
(5, 'Jehan Edirisinghe', 'edirisinghe.jehan@outlook.com', 'Dangaspitiya Industrial Park, Kohilegedera', 'Kohilegedera', 'Kurunegala', '60028', 'J Edirisinghe', '4532533609494728', '12', '22'),
(6, 'Goonathilakege Mahinda Thotawatte', 'mahindathotawatte@yahoo.com', '74 Upatissa Road, Kelaniya', 'Kelaniya', 'Western', '11300', 'G M Thotawatte', '4929590720418136', '1', '2023'),
(7, 'John Karunarathne', 'johnkarunarathne21@gmail.com', '28/c Moragaha Rd, Padukka', 'Padukka', 'Western', '14350', 'J Karunarathne', '4353123465789876', '11', '2024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paymentinfonew`
--
ALTER TABLE `paymentinfonew`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paymentinfonew`
--
ALTER TABLE `paymentinfonew`
  MODIFY `userID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
