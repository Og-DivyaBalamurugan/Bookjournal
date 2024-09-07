-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2024 at 09:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(6) UNSIGNED NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `rating` decimal(3,2) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `reading_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `author`, `rating`, `genre`, `reading_status`) VALUES
(1, 'THE HUNGER GAMES', 'SUZANNE COLLINS', 5.00, 'DYSTOPIAN', 'FINISHED'),
(2, 'THE SONG OF ACHILLES ', 'MADELLINE MILLER', 4.50, 'MYTHOLOGY', 'FINISHED'),
(3, 'PERCY JACKSON AND THE OLYMPIANS', 'RICK RIORDAN', 5.00, 'MYTHOLOGY', 'FINISHED'),
(4, 'A COURT OF THORNS AND ROSES', 'SARAH J MASS', 4.80, 'FANTASY', 'FINISHED'),
(5, 'DARK HEIR', 'C S PACAT', 5.00, 'FANTASY', 'FINISHED'),
(6, 'CIRCE', 'MADELLINE MILLER', 0.00, 'MYTHOLOGY', 'TOREAD'),
(7, 'LEGEND', 'MARIE LU', 0.00, 'DYSTOPIAN', 'TOREAD'),
(8, 'AN EMBER IN THE ASHES', 'SABAA TAHIR', 0.00, 'FANTASY', 'TOREAD'),
(9, 'WUTHERING HEIGHTS', 'EMILY BRONTE', 0.00, 'CLASSIC', 'TOREAD'),
(10, 'LITTLE WOMEN', 'LOUISA M ALCOTT', 0.00, 'CLASSIC', 'TOREAD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
