-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 10:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_stok_darah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_stok`
--

CREATE TABLE `tb_stok` (
  `id` int(11) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `ap` int(11) NOT NULL,
  `an` int(11) NOT NULL,
  `bp` int(11) NOT NULL,
  `bn` int(11) NOT NULL,
  `op` int(11) NOT NULL,
  `onn` int(11) NOT NULL,
  `abp` int(11) NOT NULL,
  `abn` int(11) NOT NULL,
  `update` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_stok`
--

INSERT INTO `tb_stok` (`id`, `kabupaten`, `ap`, `an`, `bp`, `bn`, `op`, `onn`, `abp`, `abn`, `update`) VALUES
(1, 'Kudus', 10, 12, 7, 13, 11, 21, 23, 100, '2020-12-15'),
(13, 'Pati', 56, 13, 45, 33, 44, 53, 23, 12, '2020-12-15'),
(15, 'Semarang', 45, 45, 76, 43, 24, 64, 78, 43, '2020-12-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_stok`
--
ALTER TABLE `tb_stok`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_stok`
--
ALTER TABLE `tb_stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
