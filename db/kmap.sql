-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 09:00 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmap`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `number` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `college`, `number`, `message`) VALUES
('Akshay kurhekar', 'akshay.kurhekar1014662@gmail.com', 'jyg,kuasgx.kauj', '2147483647', 'bgkjuglis'),
('Akshay kurhekar', 'akshay.kurhekar1014662@gmail.com', 'SIT', '2147483647', 'fiytcvfiuefouw'),
('Akshay kurhekar', 'akshay.kurhekar1014662@gmail.com', 'kuyfouyf', '2147483647', 'kkuytoiuyfs'),
('Akshay kurhekar', 'akshay.kurhekar1014662@gmail.com', 'sit', '+919552259961', 'I am Akshay'),
('Akshay kurhekar', 'akshay.kurhekar1014662@gmail.com', 'sit', '+919552259961', 'kjhkvjh'),
('Akshay kurhekar', 'akshay.kurhekar1014662@gmail.com', 'sit', '+919552259961', 'hdjhbks'),
('gaurav kurhekar', 'jgsvkdfuj@mhgsvkd.ocm', 'sssss', '135468', 'hii this is gaurav...'),
('', '', '', '', ''),
('', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kmapregister`
--

CREATE TABLE `kmapregister` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kmapregister`
--

INSERT INTO `kmapregister` (`user`, `pass`) VALUES
('akshay', '1111'),
('root', 'root');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kmapregister`
--
ALTER TABLE `kmapregister`
  ADD PRIMARY KEY (`user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
