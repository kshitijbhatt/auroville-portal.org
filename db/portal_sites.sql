-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 09:17 AM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auro_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `portal_sites`
--

CREATE TABLE `portal_sites` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `description` longtext NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagaram` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `linkein` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portal_sites`
--

INSERT INTO `portal_sites` (`id`, `title`, `description`, `url`, `image`, `color`, `facebook`, `twitter`, `instagaram`, `youtube`, `linkein`) VALUES
(1, 'Auro sample', 'Sample content', '#somthing', '', 'red', 'fb', 'tw', 'instagra', 'youtube', 'link in');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
