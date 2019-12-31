-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2019 at 08:55 AM
-- Server version: 8.0.18-0ubuntu0.19.10.1
-- PHP Version: 7.2.24-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jus`
--

-- --------------------------------------------------------

--
-- Table structure for table `academicians`
--

CREATE TABLE `academicians` (
  `academician_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_estonian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `academicians`
--

INSERT INTO `academicians` (`academician_id`, `name`, `email`, `phone`, `image`) VALUES
(1, 'Professor Dr. Md. Mijanur Rahman', '	mdmijanur1970@gmail.com', '01778949274', 'img/mijanurRahman.jpg'),
(2, 'Dr. A. H. M. Saifullah Sadi', 'saifullah.sadi@uttarauniversity.edu.bd', '+8801795379956', 'img/saifullah.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `degrees`
--

CREATE TABLE `degrees` (
  `degree_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `academician_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Dumping data for table `degrees`
--

INSERT INTO `degrees` (`degree_id`, `name`, `academician_id`) VALUES
(1, 'Ph.D in Quantum Communication, Multimedia University, Malaysia (2010)\r\n', 1),
(2, 'M.Sc in Satellite Image Processing, Universiti Malaysia Sarawak, Malaysia, (1999)', 1),
(3, 'B.Sc in CSE, BUET, Bangladesh (1995)', 1),
(4, 'PhD in Information Technology (IT), (2012), International Islamic University (IIUM), Malaysia', 2),
(5, 'MBA in Management Information Systems (MIS), IIUM, Malaysia', 2),
(6, 'B.Sc. (Hons.) in Computing & Information Systems (CIS), University of Lincoln, UK ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `researches`
--

CREATE TABLE `researches` (
  `research_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `academician_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Dumping data for table `researches`
--

INSERT INTO `researches` (`research_id`, `name`, `academician_id`) VALUES
(1, 'Computer and Robot Vision, Deep Learning, LTE and OFDM Communications, Quantum Data Communication, Embedded Systems, Scientific Computation', 1),
(2, 'M-commerce, E-Commerce, Adoption of Innovation, Web Development, Big Data, E-Learning', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_estonian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `phone`, `email`, `password`) VALUES
('Tamanna Jahan Jerin', '01634846956', 'jerin@gmail.com', 'jerin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academicians`
--
ALTER TABLE `academicians`
  ADD PRIMARY KEY (`academician_id`);

--
-- Indexes for table `degrees`
--
ALTER TABLE `degrees`
  ADD KEY `user_id` (`academician_id`);

--
-- Indexes for table `researches`
--
ALTER TABLE `researches`
  ADD PRIMARY KEY (`research_id`),
  ADD KEY `user_id` (`academician_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academicians`
--
ALTER TABLE `academicians`
  MODIFY `academician_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `researches`
--
ALTER TABLE `researches`
  MODIFY `research_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `degrees`
--
ALTER TABLE `degrees`
  ADD CONSTRAINT `degrees_ibfk_1` FOREIGN KEY (`academician_id`) REFERENCES `academicians` (`academician_id`),
  ADD CONSTRAINT `degrees_ibfk_2` FOREIGN KEY (`academician_id`) REFERENCES `academicians` (`academician_id`);

--
-- Constraints for table `researches`
--
ALTER TABLE `researches`
  ADD CONSTRAINT `researches_ibfk_1` FOREIGN KEY (`academician_id`) REFERENCES `academicians` (`academician_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
