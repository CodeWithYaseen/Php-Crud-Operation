-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2025 at 09:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `phone`, `gender`) VALUES
(31, 'Muhammad Yaseen', 'yaseen2409d@gmail.com', '$2y$10$z0jqPgGZ6Yz1xiWsCURw.ePrJBPGKxbyEHU5cj/MghLvONjs/T.cG', '03198145385', 1),
(32, 'Ali', 'ali@gmail.com', '$2y$10$tBoWmBxMXee2jPGCIZAeVenYnCnWB08iDldjgmPU5yYyEm.AipPCG', '03198145387', 1),
(33, 'Mubeen', 'mubeen@gmail.com', '$2y$10$hpoBScr/9Q5us/nCmSMm8.MDFWvatcSbE56TwjwXJdQ9kJbhUI7wW', '03198145383', 1),
(34, 'Shahzad', 'shahzad@gmail.com', '$2y$10$.skgrGxH2A0pPEug8PUbh.3l.fP6QrJXxJopr0XvV.iL6nOQ3e03a', '03198145381', 1),
(35, 'Hassan', 'hassan@gmail.com', '$2y$10$YxLhrLw4J7oDySLE9hEvZuSJnUCVjt4vOCmeFxP3Ew49zBN2lwK76', '03198145380', 1),
(36, 'Ghulam Mustafa', 'Mustafa@gmail.com', '$2y$10$cHCnI/RW5E0oOnooQBAzlulcZmceT9wXhs/j8Qy5ynz6Nzt3C9kSC', '03198145390', 1),
(37, 'Afsha', 'afsha@gmail.com', '$2y$10$iGw9I7Jo10O53Ap9yPyLGOwwaDTzgSkwt5T00t2VfHl45RaftORZi', '03198145391', 0),
(38, 'Iqra', 'iqra@gmail.com', '$2y$10$gI5nYzsWaRP1WToMHBM8eu/w19MSR.thpm8YGzvBSnGIXLXK8AyCa', '03198145397', 0),
(39, 'Hadi', 'Hadi@gmail.com', '$2y$10$NV5rHcpmtwj/EYcnQf.rmuSB4MBptCrnaO2ruFAsHSt4b7U2g1rRK', '03198145395', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
