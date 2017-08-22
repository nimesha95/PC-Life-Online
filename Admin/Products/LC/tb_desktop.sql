-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2017 at 01:57 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

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
-- Table structure for table `tb_desktop`
--

CREATE TABLE `tb_desktop` (
  `id` int(5) NOT NULL,
  `pro_id` varchar(7) NOT NULL,
  `cat` varchar(20) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(10) NOT NULL,
  `processor` varchar(50) NOT NULL,
  `m_board` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `hdd` varchar(30) NOT NULL,
  `gui` varchar(50) NOT NULL,
  `op_drive` varchar(50) NOT NULL,
  `monitor_des` varchar(50) NOT NULL,
  `pw_supply` varchar(50) NOT NULL,
  `mouse` varchar(40) NOT NULL,
  `key_bd` varchar(40) NOT NULL,
  `sounds` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `dis_price` varchar(20) NOT NULL,
  `availability` varchar(10) NOT NULL,
  `warranty` varchar(20) NOT NULL,
  `pri_image` varchar(20) NOT NULL,
  `img1` varchar(20) NOT NULL,
  `img2` varchar(20) NOT NULL,
  `img3` varchar(20) NOT NULL,
  `img5` varchar(20) NOT NULL,
  `img4` varchar(20) NOT NULL,
  `add_date` date NOT NULL,
  `up_date` date NOT NULL,
  `os` varchar(20) NOT NULL,
  `frm_factor` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_desktop`
--
ALTER TABLE `tb_desktop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_desktop`
--
ALTER TABLE `tb_desktop`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
