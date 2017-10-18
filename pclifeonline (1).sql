-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2017 at 05:20 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pclifeonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` int(11) NOT NULL,
  `pro_id` varchar(10) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `cont_table` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`id`, `pro_id`, `itemName`, `cont_table`) VALUES
(1, 'LC00001', 'DELL VOSTRO 3568', 'tb_laptop'),
(2, 'LC00002', 'HP 15-au171TX', 'tb_laptop'),
(3, 'LC00003', 'HP Notebook - 15-ay104tx', 'tb_laptop'),
(4, 'LC00004', 'Dell inspiron 5559', 'tb_laptop'),
(5, 'LC00005', 'Lenovo Ideapad 110 - 151SK', 'tb_laptop'),
(6, 'LC00006', 'Lenovo IdeaPad Y700 - 15ISK', 'tb_laptop'),
(7, 'LC00007', 'Acer F5-573G i7', 'tb_laptop'),
(8, 'LC00008', 'ASUS Vivobook X556UQ', 'tb_laptop'),
(9, 'LC00009', 'Samsung ATIV Book 9', 'tb_laptop');

-- --------------------------------------------------------

--
-- Table structure for table `tb_desktop`
--

CREATE TABLE `tb_desktop` (
  `id` int(5) NOT NULL,
  `pro_id` varchar(7) NOT NULL,
  `cat` varchar(20) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `processor` varchar(200) NOT NULL,
  `m_board` varchar(100) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `hdd` varchar(100) NOT NULL,
  `gui` varchar(50) NOT NULL,
  `op_drive` varchar(50) NOT NULL,
  `monitor_des` varchar(50) NOT NULL,
  `pw_supply` varchar(200) NOT NULL,
  `mouse` varchar(40) NOT NULL,
  `key_bd` varchar(40) NOT NULL,
  `sounds` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `dis_price` varchar(20) NOT NULL,
  `availability` varchar(20) NOT NULL,
  `warranty` varchar(20) NOT NULL,
  `pri_image` varchar(200) NOT NULL,
  `img1` varchar(200) NOT NULL,
  `img2` varchar(200) NOT NULL,
  `img3` varchar(200) NOT NULL,
  `img5` varchar(200) NOT NULL,
  `img4` varchar(200) NOT NULL,
  `add_date` date NOT NULL,
  `up_date` date NOT NULL,
  `os` varchar(20) NOT NULL,
  `frm_factor` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_desktop`
--

INSERT INTO `tb_desktop` (`id`, `pro_id`, `cat`, `brand`, `model`, `processor`, `m_board`, `ram`, `hdd`, `gui`, `op_drive`, `monitor_des`, `pw_supply`, `mouse`, `key_bd`, `sounds`, `price`, `dis_price`, `availability`, `warranty`, `pri_image`, `img1`, `img2`, `img3`, `img5`, `img4`, `add_date`, `up_date`, `os`, `frm_factor`) VALUES
(3, 'DC00002', 'Brand New', 'Other', 'DJ-C002', 'Intel Duo Core', 'Asus', 'Kingston DDR4 4GB ', '1TB', 'Intel HD Graphics', 'DVD-Writer', '17-19inch', 'AC 120/230 V (50/60 Hz) power supply ', 'Branded', 'Branded', 'Divoom/Sterio', '27750', '22750', 'Available', '06', 'https://res.cloudinary.com/group-32/image/upload/v1503404879/Desktop Computers/DJC002-1.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404845/Desktop Computers/DJC002_-2.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404866/Desktop Computers/DJC002-2.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404845/Desktop Computers/DJC002-3.jpg', 'http://res.cloudinary.com/group-32/image/upload/v1503404882/Desktop%20Computers/DJC002-4.jpg', 'http://res.cloudinary.com/group-32/image/upload/v1503404882/Desktop%20Computers/DJC002-4.jpg', '2017-08-22', '2017-08-22', 'Windows 7', 'ATX'),
(6, 'DC00004', 'Brand New', 'Dell', 'Vostro 3650', 'IntelÂ®Â  6th Generation CoreTMÂ  i5-6400 processor (6M Cache, up to 3.30 GHz)', 'Dell', 'DDR3L SDRAM-8 GB ', '1 TB HDD  SATA 7200 rpm ', 'Intel HD Graphics 530', 'DVD-Writer', '15"', 'AC 120/230 V (50/60 Hz) power supply ', 'Dell', 'Dell', 'Stereo', '85000', '80000', 'Available', '12', 'https://res.cloudinary.com/group-32/image/upload/v1503404860/Desktop Computers/Dell-Vostro-3650_-1.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404859/Desktop Computers/Dell-Vostro-3650_-2.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404860/Desktop Computers/Dell-Vostro-3650_-3.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404860/Desktop Computers/Dell-Vostro-3650_-4.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404860/Desktop Computers/Dell-Vostro-3650_-5.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404860/Desktop Computers/Dell-Vostro-3650_-5.jpg', '2017-08-22', '2017-08-22', '', 'ATX'),
(7, 'DC00007', 'Used', 'HP', 'DJ-C004', 'Intel P4', 'Intel', '2GB', '500GB', 'On board VGA', 'DVD-Writer', '15"', 'AC 120/230 V (50/60 Hz) power supply ', 'Branded', 'Branded', 'Divoom/Sterio', '21000', '20000', 'Available', '03', 'https://res.cloudinary.com/group-32/image/upload/v1503404850/Desktop Computers/DJ-C004-1.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404850/Desktop Computers/DJ-C004-2.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404850/Desktop Computers/DJ-C004-3.jpg', 'http://res.cloudinary.com/group-32/image/upload/v1503404850/Desktop%20Computers/DJ-C004-4.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404853/Desktop Computers/Asus-ET2040IUK-BB059M-5.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404853/Desktop Computers/Asus-ET2040IUK-BB059M-5.jpg', '2017-08-22', '2017-08-22', 'Windows 7', 'ATX'),
(8, 'DC00008', 'Brand New', 'HP', 'i3-7100', 'IntelÂ® Coreâ„¢ i3-7100 Processor 3.9GHz', 'Intel', '4GB', 'Toshiba 500 GB HDD', 'Intel HD Graphics 530', 'Liteon DVD Writer', '17"', 'Thermaltake 450W Power Supply', 'Mouse Combo', 'Xplorer 5500 Key Board', 'Divoom/Sterio', '48000', '46000', 'Available', '05', 'https://res.cloudinary.com/group-32/image/upload/v1503407398/Desktop%20Computers/HP_i3-7100-1.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503407409/Desktop%20Computers/HP_i3-7100-2.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503407396/Desktop%20Computers/HP_i3-7100-3.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503407398/Desktop%20Computers/HP_i3-7100-1.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503407396/Desktop%20Computers/HP_i3-7100-3.jpg', '', '2017-08-22', '2017-08-22', 'Windows 7', 'ATX'),
(9, 'DC00009', 'Brand New', 'HP', '202-F7C57PA', 'Intel Pentium Dual Core 3 GHz', 'Intel', '2GB   DDR3', 'HP 500GB  HDD  7200 RPM', 'Intel HD Graphics 530', 'DVD-Writer', '18.5"', '450W Power Supply', 'HP', 'HP', '', '65000', '62000', 'Available', '36', 'https://res.cloudinary.com/group-32/image/upload/v1503404862/Desktop Computers/HP-202-F7C57PA_-1.png', 'https://res.cloudinary.com/group-32/image/upload/v1503404862/Desktop%20Computers/HP-202-F7C57PA_-2.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404863/Desktop Computers/HP-202-F7C57PA_-3.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404863/Desktop Computers/HP-202-F7C57PA_-4.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404863/Desktop Computers/HP-202-F7C57PA_-5.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404863/Desktop Computers/HP-202-F7C57PA_-5.jpg', '2017-08-22', '2017-08-22', 'Windows 10', 'ATX'),
(10, 'DC00010', 'Brand New', 'Dell', 'ET2040IUK BB059M', 'Intel Atom 2.41 GHZ', 'Asus', 'DDR3 4GB', 'HDD 500 GB', 'Intel', 'DVD-Writer', '19.5"', '450W Power Supply', 'Asus', 'Asus', '', '75000', '75000', 'Available', '24', 'https://res.cloudinary.com/group-32/image/upload/v1503404853/Desktop Computers/Asus-ET2040IUK-3BB059M-1.jpg', 'http://res.cloudinary.com/group-32/image/upload/v1503404853/Desktop%20Computers/Asus-ET2040IUK-BB059M-2.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404853/Desktop Computers/Asus-ET2040IUK-BB059M-3.jpg', 'http://res.cloudinary.com/group-32/image/upload/v1503404853/Desktop%20Computers/Asus-ET2040IUK-BB059M-4.jpg', 'http://res.cloudinary.com/group-32/image/upload/v1503404853/Desktop%20Computers/Asus-ET2040IUK-BB059M-5.jpg', 'http://res.cloudinary.com/group-32/image/upload/v1503404853/Desktop%20Computers/Asus-ET2040IUK-BB059M-5.jpg', '2017-08-22', '2017-08-22', 'Windows 10', 'ATX'),
(11, 'DC00011', 'Brand New', 'Lenovo', ' F0BV004FIN', 'Intel Core i3', 'intel ', 'DDR4 4GB', '1TB', 'intel', '', '20"', '', 'intel', 'intel', '', '24000', '24000', 'Available', '06', 'https://res.cloudinary.com/group-32/image/upload/v1503407490/Desktop%20Computers/Lenovo-F0BV004FIN-1.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503407494/Desktop%20Computers/Lenovo-F0BV004FIN-2.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503407485/Desktop Computers/Lenovo-F0BV004FIN-3.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503407483/Desktop%20Computers/Lenovo-F0BV004FIN-4.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503407486/Desktop%20Computers/Lenovo-F0BV004FIN-5.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503407486/Desktop%20Computers/Lenovo-F0BV004FIN-5.jpg', '2017-08-22', '2017-08-22', 'Windows 7', 'ATX'),
(12, 'DC00012', 'Brand New', 'Samsung', 'MSI PRO 22E 4BW', 'Intel Celeron 1.6 GHZ', 'intel ', 'DDR3 4GB ', '500GB', 'Intel GPU', '', '21.5"', '', 'MSI', 'MSI', '', '30000', '30000', 'Available', '24', 'https://res.cloudinary.com/group-32/image/upload/v1503404889/Desktop%20Computers/MSI-PRO-22E-4BW-21.5-1.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404889/Desktop%20Computers/MSI-PRO-22E-4BW-21.5-2.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404889/Desktop%20Computers/MSI-PRO-22E-4BW-21.5-3.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404889/Desktop%20Computers/MSI-PRO-22E-4BW-21.5-4.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404889/Desktop Computers/MSI-PRO-22E-4BW-21.5-5.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404889/Desktop Computers/MSI-PRO-22E-4BW-21.5-5.jpg', '2017-08-22', '2017-08-22', 'Windows 7', 'ATX'),
(13, 'DC00013', 'Brand New', 'Samsung', 'IE-3741', 'Pentium DIntel h81ual Core', 'Intel h81', 'DDR3 2GB', '500GB', 'Intel', 'DVD-Writer', '18.5"', '450W Power Supply', 'Acer', 'Acer', '', '20000', '18000', 'Available', '03', 'https://res.cloudinary.com/group-32/image/upload/v1503404835/Desktop%20Computers/Acer-IE-3741-1.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404835/Desktop%20Computers/Acer-IE-3741-2.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404835/Desktop%20Computers/Acer-IE-3741-3.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404835/Desktop%20Computers/Acer-IE-3741-4.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404835/Desktop%20Computers/Acer-IE-3741-5.png', 'https://res.cloudinary.com/group-32/image/upload/v1503404835/Desktop%20Computers/Acer-IE-3741-5.png', '2017-08-22', '2017-08-22', 'Windows 7', 'ATX');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laptop`
--

CREATE TABLE `tb_laptop` (
  `id` int(10) NOT NULL,
  `pro_id` varchar(10) NOT NULL,
  `cat` varchar(20) NOT NULL,
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
  `pri_image` varchar(300) NOT NULL,
  `img1` varchar(300) NOT NULL,
  `img2` varchar(300) NOT NULL,
  `img3` varchar(300) NOT NULL,
  `img4` varchar(300) NOT NULL,
  `add_date` date NOT NULL,
  `up_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_laptop`
--

INSERT INTO `tb_laptop` (`id`, `pro_id`, `cat`, `brand`, `model`, `processor`, `ram`, `hdd`, `gui`, `op_drive`, `screen_type`, `screen_size`, `wifi`, `bluetooth`, `web_cam`, `os`, `colors`, `sounds`, `price`, `dis_price`, `availability`, `warranty`, `pri_image`, `img1`, `img2`, `img3`, `img4`, `add_date`, `up_date`) VALUES
(1, 'LC00002', 'Brand New', 'Dell', 'DELL VOSTRO 3568', 'Intel i7-7500U, 2.7GHz', '4GB Single Channel DDR4 2400MH', '1TB 5400RPM SATA hard drive', '2GB AMD Radeon R5 M240', 'Built-in 9.5 mm SATA tray load', 'anti-glare LED-backlit display', '15.6-inch HD (1366x768)', 'Available', 'Available', 'Available', 'Available', 'Black', 'Two-channel high-definition au', 11000, 105, 'Available', '24', 'https://res.cloudinary.com/group-32/image/upload/v1503404580/Laptops/dell-vostro-3568prim-png.png', 'https://res.cloudinary.com/group-32/image/upload/v1503404580/Laptops/dell-vostro-3568-3.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404579/Laptops/dell-vostro-3568-2.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404580/Laptops/dell-vostro-3568prim-png.png', 'https://res.cloudinary.com/group-32/image/upload/v1503404579/Laptops/dell-vostro-3568-1.jpg', '2017-08-23', '2017-08-23'),
(2, 'LC00002', 'Brand New', 'HP', '15-au171TX', 'IntelÂ® Coreâ„¢ i5-7200U (2.5 ', '8 GB DDR4-2133 SDRAM (1 x 8 GB', '1 TB 5400 rpm SATA', '4 GB DDR3 NVIDIA GeForce 940MX', 'SuperMulti DVD burner', 'HD SVA BrightView WLED-backlit', '15.6"', 'Available', 'Available', 'Available', 'Available', 'Beige', 'B&O PLAY; HP Audio Boost; Dual', 96350, 91350, 'Available', '24', 'https://res.cloudinary.com/group-32/image/upload/v1503403846/Laptops/HP_15-au171TX_i5-Prim.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503403846/Laptops/HP_15-au171TX_i5-3.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503403846/Laptops/HP_15-au171TX_i5-2.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503403846/Laptops/HP_15-au171TX_i5-1.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503403846/Laptops/HP_15-au171TX_i5-Prim.jpg', '2017-08-23', '2017-08-23'),
(3, 'LC00003', 'Used', 'HP', 'HP Notebook - 15-ay104tx', 'IntelÂ® Coreâ„¢ i5-7200U (2.5 ', '4 GB DDR4-2133 SDRAM (1 x 4 GB', '1 TB 5400 rpm SATA', 'AMD Radeonâ„¢ R5 M430 Graphics', 'SuperMulti DVD burner', 'Â BrightView WLED-backlit', '15.6" diagonalÂ ', 'Available', 'Available', 'Available', 'Available', 'Silver', 'DTS Studio Soundâ„¢; Dual spea', 81750, 76750, 'Available', '24', 'https://res.cloudinary.com/group-32/image/upload/v1503403809/Laptops/HP_Notebook_-_15-ay104tx-prim.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503403809/Laptops/HP_Notebook_-_15-ay104tx-4.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503403809/Laptops/HP_Notebook_-_15-ay104tx-3.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503403809/Laptops/HP_Notebook_-_15-ay104tx-prim.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503403809/Laptops/HP_Notebook_-_15-ay104tx-2.jpg', '2017-08-23', '2017-08-23'),
(4, 'LC00004', 'Brand New', 'Dell', 'Dell inspiron 5559', '6th gen Intel Core i5-6200u', '4GB DDR3L 1600MHz', '500GB 5400 rpm SATA Hard Drive', '2GB AMD Radeonâ„¢ R5 M335 Grap', 'Tray load DVD Drive (Reads and', 'Truelife LED-Backlit Display', '15.6-inch HD (1366 x 768)', 'Available', 'Available', 'Available', 'Available', 'Black,Silver,Red,Blue', '2.1', 79350, 74350, 'Available', '24 months', 'https://res.cloudinary.com/group-32/image/upload/v1503403768/Laptops/Dell_5559_i5-4.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503403768/Laptops/Dell_5559_i5-3.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503403768/Laptops/Dell_5559_i5-2.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503403768/Laptops/Dell_5559_i5-1.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503403768/Laptops/Dell_5559_i5-_2.jpg', '2017-08-23', '2017-08-23'),
(5, 'LC00005', 'Brand New', 'Lenovo', 'Lenovo Ideapad 110 - 151SK', 'Intel Core i3 2.3GHz (6100U)', '6 GB DDR3', '1TB', 'Integrated IntelÂ®Â HD Graphic', 'Built-in DVD Recordable Drive', 'TN display', '15.6-inch (1366 x 768 pixels)', 'Available', 'Available', 'Available', 'Available', 'Ebony Black', 'Stereo Speakers with Dolby Aud', 64000, 59000, 'Available', '24', 'https://res.cloudinary.com/group-32/image/upload/v1503404151/Laptops/enovo_Ideapad_110_-_151SK-Prim.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404151/Laptops/enovo_Ideapad_110_-_151SK-2.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404151/Laptops/enovo_Ideapad_110_-_151SK-1.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404151/Laptops/enovo_Ideapad_110_-_151SK-2.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404151/Laptops/enovo_Ideapad_110_-_151SK-1.jpg', '2017-08-23', '2017-08-23'),
(6, 'LC00006', 'Brand New', 'Lenovo', 'Lenovo IdeaPad Y700 - 15ISK', '2.6-GHz Intel Core i7-6700HQ p', '12GB DDR4', '256GB SSD + 1TB HDD', 'Intel HD Graphics 530 & Nvidia', 'Optional', 'Full HD', 'Stunning 15.6" Display', 'Available', 'Available', 'Available', 'Available', 'Black', 'Pair of JBL speakers and a bot', 165000, 165000, 'Available', '1YR + 2YR Service', 'https://res.cloudinary.com/group-32/image/upload/v1503404191/Laptops/Lenovo_IdeaPad_Y700_-_15ISK-prim.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404191/Laptops/Lenovo_IdeaPad_Y700_-_15ISK-3.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404191/Laptops/Lenovo_IdeaPad_Y700_-_15ISK-2.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404191/Laptops/Lenovo_IdeaPad_Y700_-_15ISK-prim.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404190/Laptops/Lenovo_IdeaPad_Y700_-_15ISK-1.jpg', '2017-08-23', '2017-08-23'),
(7, 'LC00007', 'Brand New', 'Other', 'Acer F5-573G i7', 'IntelÂ®Â ProcessorÂ (3MÂ Cache', '8GBÂ DDR3Â SDRAMÂ DDR3Â uptoÂ ', '1TBÂ (SSDÂ Enable)', 'Nvidia GT940MX 4GB', 'DVD-SuperÂ MultiÂ DoubleÂ Laye', 'FULLÂ HDÂ 1920Â xÂ 1080Â resol', '"15.6"', 'Available', 'Available', 'Available', 'Available', 'Black', 'TwoÂ built-inÂ stereoÂ speaker', 117500, 117500, 'Available', '24', 'https://res.cloudinary.com/group-32/image/upload/v1503404217/Laptops/Acer_F5-573G_i7-1.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404217/Laptops/Acer_F5-573G_i7-4.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404217/Laptops/Acer_F5-573G_i7-5.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404218/Laptops/Acer_F5-573G_i7-6.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404220/Laptops/Aspire-F15-Silver-sku-main.png', '2017-08-23', '2017-08-23'),
(8, 'LC00008', 'Brand New', 'Other', 'ASUS Vivobook X556UQ', 'IntelÂ® Coreâ„¢ i7 - 7500U - 2', '8GBÂ DDR4 2133MHz', '1TB 5400RPM SATA HDD', '2GB DDR5 NVIDIA GeForce 940MX', 'Super-Multi DVD', 'LED backlit FHD', '15.6" (16:9) LED backlit FHD (', 'Available', 'Available', 'Available', 'Available', 'Chocolate Brown, Navy Blue, Ar', 'ASUS SonicMaster Technology', 124100, 120000, 'Available', '24 months', 'https://res.cloudinary.com/group-32/image/upload/v1503404245/Laptops/ASUS_Vivobook_X556UQ-6.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404245/Laptops/ASUS_Vivobook_X556UQ-3.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404246/Laptops/ASUS_Vivobook_X556UQ-2.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404247/Laptops/ASUS_Vivobook_X556UQ-1.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404246/Laptops/ASUS_Vivobook_X556UQ-4.jpg', '2017-08-23', '2017-08-23'),
(9, 'LC00009', 'Brand New', 'Samsung', 'Samsung ATIV Book 9', 'Intel Core i7-3537U 2.0Ghz 3rd', '4GB DDR3 On-Board', '256GB SSD + 1TB HDD', 'Intel HD Graphics 4000', 'None', 'SuperBright 300nit Full HD LED', '13.3-inch screen', 'Available', 'Available', 'Available', 'Available', 'Mineral Ash Black', 'High Definition Audio, SoundAl', 175000, 170000, 'Available', '24 months', 'https://res.cloudinary.com/group-32/image/upload/v1503404260/Laptops/Samsung_ATIV_Book_9-Prim.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404260/Laptops/Samsung_ATIV_Book_9-4.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404260/Laptops/Samsung_ATIV_Book_9-3.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404259/Laptops/Samsung_ATIV_Book_9-1.jpg', 'https://res.cloudinary.com/group-32/image/upload/v1503404259/Laptops/Samsung_ATIV_Book_9-2.jpg', '2017-08-23', '2017-08-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_desktop`
--
ALTER TABLE `tb_desktop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_laptop`
--
ALTER TABLE `tb_laptop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_desktop`
--
ALTER TABLE `tb_desktop`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_laptop`
--
ALTER TABLE `tb_laptop`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
