-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 06:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kritik`
--

-- --------------------------------------------------------

--
-- Table structure for table `kritik`
--

CREATE TABLE `kritik` (
  `id_user` int(11) NOT NULL,
  `kritik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kritik`
--

INSERT INTO `kritik` (`id_user`, `kritik`) VALUES
(1, 'Saya Suka Guru Bahasa Inggris,Karna Dia Slalu mengasih games stiap hari'),
(7, 'Saya Suka Guru Bahasa Inggris,Karna Dia Slalu mengasih games stiap hari'),
(8, 'Saya Tidak Suka Guru Bahasa Inggris,Karna Dia Slalu mengasih games stiap hari'),
(9, 'hloo'),
(37, 'tugas - tugas yang diberikan tidak relevan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nomor` varchar(15) NOT NULL,
  `jk` char(1) NOT NULL,
  `jurusan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_siswa`, `nama`, `nis`, `email`, `nomor`, `jk`, `jurusan`) VALUES
(8, 'Dian', 220175, 'dianbahari693@gmail.com', '089676851007', 'P', 'RPL'),
(10, 'Craft', 220169, 'envikicraft@gmail.com', '089676851007', 'L', 'RPL'),
(12, 'Fiki', 220173, 'dianbahari693@gmail.com', '089676851007', 'L', 'RPL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
