-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2021 at 09:59 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `proma_portfolio`
--
CREATE DATABASE IF NOT EXISTS `proma_portfolio` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `proma_portfolio`;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(32) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `user_mobile` varchar(32) NOT NULL,
  `user_email` varchar(32) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `user_password`, `user_name`, `user_mobile`, `user_email`, `created`) VALUES
(1, '2018305050008', '12345', 'Anita Tasnim', '', 'anita.tasnim@gmail.com', '2021-08-04 07:14:26'),
(3, '0123', '12345', 'Hasib', '', 'marveloushasib@gmail.com', '2021-08-04 07:10:19'),
(4, '000', '000', '000', '', '000', '2021-08-04 07:12:27'),
(5, 'bilai', 'sdfd', 'asdf', '', 'adsf', '2021-08-04 07:55:29');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
