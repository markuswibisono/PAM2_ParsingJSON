-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2015 at 05:44 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `datahotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel`
--

CREATE TABLE IF NOT EXISTS `tbl_hotel` (
`id` int(20) NOT NULL,
  `nama_hotel` varchar(150) DEFAULT '0',
  `alamat_hotel` varchar(150) DEFAULT '0',
  `telp_hotel` int(150) DEFAULT '0',
  `email_hotel` varchar(150) DEFAULT '0',
  `img_url` varchar(150) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotel`
--

INSERT INTO `tbl_hotel` (`id`, `nama_hotel`, `alamat_hotel`, `telp_hotel`, `email_hotel`, `img_url`) VALUES
(1, 'Kayu Arum', 'Jalan Magersari, Ringinawe, Tegalrejo, Salatiga, Jawa Tengah 50733', 316654, 'kayuarum@gmail.com', 'http://localhost/hotel/img/1.JPG'),
(2, 'Hotel Wahid', 'Jalan Jenderal Sudirman no.2, Jawa Tengah 50711', 328500, 'wahid@gmail.com', 'http://localhost/hotel/img/2.JPG'),
(3, 'Hotel Laras Asri', 'Jalan Jenderal Sudirman No. 335, Salatiga, Jawa Tengah 50732', 312222, 'larasasri@gmail.com', 'http://localhost/hotel/img/3.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
