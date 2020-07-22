-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 05:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipegat`
--

-- --------------------------------------------------------

--
-- Table structure for table `p_product`
--

CREATE TABLE `p_product` (
  `kode_product` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(12) NOT NULL,
  `category` varchar(12) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_product`
--

INSERT INTO `p_product` (`kode_product`, `name`, `price`, `category`, `detail`, `img`) VALUES
('512056157008', 'ibu ningsih', 1000001, 'Bahasa', '1', 'item-200719-87067b6ae6.png'),
('512056828712', 'kang adit', 1500001, 'Programmer', '1', 'item-200719-63538fe6ef.jpg'),
('512100766936', 'ibu guru', 1000000, 'Akademik', 'a', 'item-200721-f98aea1a7f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `username` varchar(16) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`username`, `name`, `password`, `img`) VALUES
('admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'default.jpg'),
('tegar', 'tegar', '1d31802d64bae29d88923d795fc73734', 'admin-200721-a4f3e2a651.png'),
('user', 'user', 'd41d8cd98f00b204e9800998ecf8427e', 'admin-200721-23950fd434.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `img` varchar(300) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`email`, `name`, `password`, `phone`, `gender`, `address`, `img`) VALUES
('anggithermawan@gmail.com', 'anggit hermawan', 'd41d8cd98f00b204e9800998ecf8427e', '1', 'L', 'a', 'profile-200721-e2f69d4be0.jpg'),
('hadicahyadi@gmai.com', 'hadi cahyadi', '2c0fe98aaf71bd425818f0058ab9fa7d', '1', 'L', 'a', 'profile-200721-b11d57a6dd.jpg'),
('intanmaulida@gmail.com', 'intan maulida', 'c079f23d612970847aa341df16793272', '0543053430', 'P', 'a', 'profile-200721-6000db4c19.png'),
('lukmantoro@gmai.com', 'lukman toro', '655d5383dd83547e81596c9bc4ad1b29', '1', 'L', 'a', 'profile-200721-68e4bdc24a.jpg'),
('nengimas@gmail.com', 'neng imas', 'd41d8cd98f00b204e9800998ecf8427e', '', 'L', 'b', 'profile-200721-ead97089aa.jpg'),
('nextwznu@gmail.com', 'next wznu', '29777bf2c1060b5e8fa25000b778f5a6', '2502513', 'L', 'a', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
