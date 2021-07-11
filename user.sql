-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 12:47 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirmpassword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `mobile`, `branch`, `year`, `domain`, `password`, `confirmpassword`) VALUES
(1, 'QWE', 'qwe@gmail.com', '1111111111', 'IE', '3rd', 'Web dev', '$2y$10$/9kDRkVOkMzmwTtdRUeQIeTRALU/8YGrBHyUZeQN/MYVSPhlZYJjC', '$2y$10$yuoDY7H0eszGv7147uQOcufDbilhPUe/7xzgDd8KAK1H4gcPGRR/e'),
(2, 'wer', 'wer@gmail.com', '1111111111', 'IE', '3rd', 'web dev', '$2y$10$2wheSn23yDtE7gqeXLPr3.R4sqO.QPBdg6trW/f6lC1ZlDw3UjQm.', '$2y$10$udj3nyWWh6NysplF5a7JeOcpAVjxGiOBOxlGq4z.1DyMunFpn8HTe'),
(3, 'zxc', 'zxc@gmail.com', '1212121212', 'IE', '3rd', 'Web dev', '$2y$10$dFvxDm8SB5GW.m03Um04mOFY7fjThcVp3HqxSSg6adjU0uPiKwXhi', '$2y$10$t6UWA1OOTyExsaZwtwMoT.SeqXifI17/0UuKoO3xxF853YrO/nTpC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
