-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2016 at 12:45 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbphp7`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `alamat` text,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `jurusan`, `alamat`, `gambar`) VALUES
(1, '2012030123', 'Aguzrybudy', 'Manajemen Informatika', '<p>Medan Indonesia</p>\r\n', 'profile2.png'),
(2, '2012030121', 'Budi Santoso', 'Manajemen Informatika', '<p>Medan Timur</p>\r\n', 'profile2.png'),
(4, '2012030120', 'Agus Kuncoro', 'Manajemen Informatika', '<p>Medan Barat</p>\r\n', 'profile2.png'),
(5, '2012030122', 'Rio Syahputra', 'Tehnik Informatika', '<p>Medan Barat</p>\r\n', 'profile3.png'),
(6, '2012030123', 'Muhammad ali', 'Tehnik Komputer', '<p>Medan Sumatera Utara</p>\r\n', 'profile2.png'),
(7, '2012030124', 'Ridho ', 'Sistem Informasi', '<p>Medan Johor</p>\r\n', 'profile3.png'),
(8, '2012030125', 'Muhammad Ridho', 'Tehnik Informatika', '<p>Medan Barat</p>\r\n', 'profile2.png'),
(9, '2012030126', 'Logia', 'Tehnik Informatika', '<p>Medan Angkasa</p>\r\n', 'profile3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
