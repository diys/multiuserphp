-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2016 at 07:27 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nomertelp` varchar(20) NOT NULL,
  `keangotaan` varchar(100) NOT NULL,
  `konfirmasi` tinyint(4) NOT NULL DEFAULT '0',
  `joindate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastlogin` datetime NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`nama_depan`, `nama_belakang`, `email`, `password`, `alamat`, `nomertelp`, `keangotaan`, `konfirmasi`, `joindate`, `lastlogin`, `id`) VALUES
('diys', 'admin', 'admin@diys.com', '102938', 'Test Alamat', '1234567890', 'admin', 1, '2016-06-28 09:11:17', '2016-10-24 03:07:55', 1),
('user', 'member', 'amy@mail.com', '102938', 'Test Alamat', '102938', 'anggota', 0, '2016-06-28 14:39:12', '2016-10-23 10:06:41', 2),
('edwin', 'agung', 'uwin@gmail.com', '1234', 'jl margo no 12', '2147483647', '', 0, '2016-06-28 15:00:22', '0000-00-00 00:00:00', 5),
('premium', 'user', 'test@mail.com', '102938', 'Jl Sembarang', '24242211', 'premium', 1, '2016-10-23 15:10:03', '2016-10-24 03:08:08', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
