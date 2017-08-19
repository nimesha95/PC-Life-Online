-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2017 at 05:02 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc_life_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_laptop`
--

CREATE TABLE `tb_laptop` (
  `id` int(10) NOT NULL,
  `pro_id` varchar(10) NOT NULL,
  `cond` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `processor` varchar(30) NOT NULL,
  `ram` varchar(30) NOT NULL,
  `hdd` varchar(30) NOT NULL,
  `gui` varchar(30) NOT NULL,
  `op_drive` varchar(30) NOT NULL,
  `screen_type` varchar(30) NOT NULL,
  `screen_size` varchar(30) NOT NULL,
  `wifi` varchar(30) NOT NULL,
  `bluetooth` varchar(30) NOT NULL,
  `web_cam` varchar(30) NOT NULL,
  `os` varchar(30) NOT NULL,
  `colors` varchar(30) NOT NULL,
  `sounds` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `dis_price` int(10) NOT NULL,
  `availability` varchar(30) NOT NULL,
  `warranty` varchar(30) NOT NULL,
  `pri_image` varchar(30) NOT NULL,
  `img1` varchar(30) NOT NULL,
  `img2` varchar(30) NOT NULL,
  `img3` varchar(30) NOT NULL,
  `img4` varchar(30) NOT NULL,
  `add_date` date NOT NULL,
  `up_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_laptop`
--
ALTER TABLE `tb_laptop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_laptop`
--
ALTER TABLE `tb_laptop`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
