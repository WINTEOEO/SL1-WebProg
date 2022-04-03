-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 07:39 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sl_web_prog`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `nama_depan` varchar(30) DEFAULT NULL,
  `nama_tengah` varchar(30) DEFAULT NULL,
  `nama_belakang` varchar(30) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nik` char(11) DEFAULT NULL,
  `warga_negara` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `no.telp` char(12) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kode_pos` char(5) DEFAULT NULL,
  `foto_profil` blob DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`nama_depan`, `nama_tengah`, `nama_belakang`, `tempat_lahir`, `tanggal_lahir`, `nik`, `warga_negara`, `email`, `no.telp`, `alamat`, `kode_pos`, `foto_profil`, `username`, `password`) VALUES
('Jem', 'Wang', 'Sen', 'Bekasi', '2002-08-22', '12345678900', 'Indonesia', 'jrmng34@gmail.com', '082170094979', 'Ganting', '25123', '', 'QWE', 'asd'),
('Chevin', 'Shoji', 'Siowkurur', 'Sorong', '2001-05-18', '12234567890', 'Indonesia', 'a@gmail.com', '082170094999', 'Cokro', '23123', 0x3434333530372e6a7067, 'Soji', 'qwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
