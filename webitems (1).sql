-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 06:55 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webitems`
--

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

CREATE TABLE `motherboard` (
  `id` int(11) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `formfactor` varchar(255) NOT NULL,
  `socket` varchar(255) NOT NULL,
  `chipset` varchar(255) NOT NULL,
  `No_of_ram` int(11) NOT NULL,
  `ram_type` varchar(255) NOT NULL,
  `ram_max_speed` int(11) NOT NULL,
  `ram_min_speed` int(11) NOT NULL,
  `max_ram` int(11) NOT NULL,
  `sata3` tinyint(1) NOT NULL,
  `sata3ports` int(11) NOT NULL,
  `sata2` tinyint(1) NOT NULL,
  `sata2ports` int(11) NOT NULL,
  `IDE` tinyint(1) NOT NULL,
  `onbaordVGA` int(11) NOT NULL,
  `No_PCIEx` int(11) NOT NULL,
  `PCIslots` int(11) NOT NULL,
  `USBB` int(11) NOT NULL,
  `USBF` int(11) NOT NULL,
  `HDMI` int(11) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `sound` float NOT NULL,
  `main_img` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`id`, `manufacturer`, `model`, `formfactor`, `socket`, `chipset`, `No_of_ram`, `ram_type`, `ram_max_speed`, `ram_min_speed`, `max_ram`, `sata3`, `sata3ports`, `sata2`, `sata2ports`, `IDE`, `onbaordVGA`, `No_PCIEx`, `PCIslots`, `USBB`, `USBF`, `HDMI`, `wifi`, `sound`, `main_img`, `img`) VALUES
(1, 'ASUS', 'ROG Maximus VIII Hero', 'ATX', 'LGA 1151', 'Intel Z170', 4, 'DDR4', 3600, 2133, 64, 1, 6, 1, 2, 0, 512, 3, 3, 8, 4, 1, 0, 8, 'provide link for the main image', 'provide links for the other images');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motherboard`
--
ALTER TABLE `motherboard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `motherboard`
--
ALTER TABLE `motherboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
