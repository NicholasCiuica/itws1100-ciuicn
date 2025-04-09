-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2025 at 06:47 PM
-- Server version: 10.11.11-MariaDB-0ubuntu0.24.04.2
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mySite`
--

-- --------------------------------------------------------

--
-- Table structure for table `myLabs`
--

CREATE TABLE `myLabs` (
  `id` int(2) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myLabs`
--

INSERT INTO `myLabs` (`id`, `title`, `desc`, `link`) VALUES
(0, 'Lab 1', 'Setup', 'lab01'),
(1, 'Lab 2', 'Resume', 'lab02'),
(2, 'Lab 3', 'Site Architecture', 'lab03'),
(3, 'Lab 4', 'RSS/Atom XML Feeds', 'lab04'),
(4, 'Lab 5', 'JavaScript', 'lab05'),
(5, 'Lab 6', 'JQuery', 'lab06'),
(6, 'Lab 7', 'Team Project Mockups', 'lab07'),
(7, 'Lab 8', 'JSON/AJAX', 'lab08'),
(8, 'Lab 9', 'SQL/PHP', 'lab09'),
(9, 'Lab 10', 'Website Deployment', 'lab10'),
(10, 'Group Project', 'Team 9', 'group_project'),
(37, 'Test', 'testing lab add/remove', 'test_link');

-- --------------------------------------------------------

--
-- Table structure for table `mySiteUsers`
--

CREATE TABLE `mySiteUsers` (
  `id` int(2) UNSIGNED NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mySiteUsers`
--

INSERT INTO `mySiteUsers` (`id`, `user`, `pass`, `name`, `type`) VALUES
(0, 'ciuicn', 'secret', 'Nicholas Ciuica', 'admin'),
(1, 'teacher', 'guess', 'Professor Plotka or TA Ola', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myLabs`
--
ALTER TABLE `myLabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mySiteUsers`
--
ALTER TABLE `mySiteUsers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myLabs`
--
ALTER TABLE `myLabs`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `mySiteUsers`
--
ALTER TABLE `mySiteUsers`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
