-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 02:19 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cuti_lukman`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti_awal`
--

CREATE TABLE IF NOT EXISTS `cuti_awal` (
  `nik` varchar(50) NOT NULL DEFAULT '',
  `jml_cuti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti_awal`
--

INSERT INTO `cuti_awal` (`nik`, `jml_cuti`) VALUES
('K001', 11),
('K002', 2),
('K005', 10),
('K007', 10);

-- --------------------------------------------------------

--
-- Table structure for table `data_cuti`
--

CREATE TABLE IF NOT EXISTS `data_cuti` (
  `idx` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE IF NOT EXISTS `departemen` (
  `id_departemen` varchar(10) NOT NULL,
  `nm_departemen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_departemen`, `nm_departemen`) VALUES
('D001', 'Human Resource (HRD)'),
('D002', 'Produksi (PROD)'),
('D003', 'Quality Control (QC)'),
('D004', 'Teknik (TEK)'),
('D005', 'Gudang (WH)'),
('D006', 'Accounting dan Finance');

-- --------------------------------------------------------

--
-- Table structure for table `input_cuti`
--

CREATE TABLE IF NOT EXISTS `input_cuti` (
  `id_cuti` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `idx` varchar(10) NOT NULL,
  `id_departemen` varchar(100) NOT NULL,
  `cuti_awal` int(11) NOT NULL,
  `cuti_ambil` int(11) NOT NULL,
  `cuti_sisa` int(11) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_cuti`
--

INSERT INTO `input_cuti` (`id_cuti`, `tanggal`, `idx`, `id_departemen`, `cuti_awal`, `cuti_ambil`, `cuti_sisa`, `tgl_awal`, `tgl_akhir`, `alasan`, `status`) VALUES
('CT001', '2018-10-23', 'K002', 'D005', 7, 1, 6, '2018-11-02', '2018-11-02', 'Adik Nikahan', 'ACC CUTI'),
('CT002', '2018-10-26', 'K005', 'D004', 12, 2, 10, '2018-11-28', '2018-11-01', 'Anak di khitan', 'DITOLAK'),
('CT003', '2018-10-27', 'K002', 'D005', 6, 3, 0, '2018-11-12', '2018-11-14', 'Khitan anak', 'DITOLAK'),
('CT004', '2018-11-02', 'K002', 'D005', 3, 1, 2, '2018-11-03', '2018-11-03', 'sidang', 'ACC CUTI'),
('CT005', '2018-11-03', 'K002', 'D005', 2, 1, 0, '2018-11-07', '2018-11-08', 'Jalan jalan', 'WAITING APPROVE'),
('CT006', '2018-11-15', 'K007', 'D002', 12, 2, 10, '2018-12-27', '2018-12-29', 'Natalan', 'ACC CUTI');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `idx` varchar(10) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `hp` varchar(30) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`idx`, `tgl_masuk`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `hp`, `departemen`, `status`) VALUES
('K001', '2015-08-29', '12345001', 'Lukman', 'Sragen', '1990-08-12', 'Tambun', '089625519193', 'D006', 'TETAP'),
('K002', '2016-07-01', '12345002', 'Syaiful Mahdi', 'Blora', '1995-02-14', 'Villa Mutiara Bekasi', '089625519193', 'D005', 'TETAP'),
('K003', '2017-12-01', '12345003', 'Rini Astria', 'Jakarta', '2000-12-06', 'Cikarang', '087812345678', 'D002', 'KONTRAK'),
('K005', '2017-01-01', '17344001', 'Budiharjo', 'Padang', '1990-02-06', 'Sukaresmi', '08812183368', 'D004', 'TETAP'),
('K007', '2015-11-01', '0922', 'Lisa', 'Cikarang', '1990-11-02', 'Cikarang', '081234567', 'D002', 'TETAP');

-- --------------------------------------------------------

--
-- Table structure for table `user_akses`
--

CREATE TABLE IF NOT EXISTS `user_akses` (
  `id_user` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_akses`
--

INSERT INTO `user_akses` (`id_user`, `nama_lengkap`, `username`, `password`, `level`) VALUES
('K001', 'Lukman', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN'),
('K002', 'Syaiful Mahdi', 'pul', 'd09e4671adbbeb1174fdf3f79b34b436', 'KARYAWAN'),
('K004', 'Adi Winata', 'adi', 'c46335eb267e2e1cde5b017acb4cd799', 'MANAGER'),
('K005', 'Budiharjo', 'budi', '00dfc53ee86af02e742515cdcf075ed3', 'KARYAWAN'),
('K006', 'tes', 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 'KARYAWAN'),
('K007', 'Lisa', 'lisa', 'ed14f4a4d7ecddb6dae8e54900300b1e', 'KARYAWAN');

-- --------------------------------------------------------

--
-- Stand-in structure for view `_karyawan`
--
CREATE TABLE IF NOT EXISTS `_karyawan` (
`idx` varchar(10)
,`tgl_masuk` date
,`nik` varchar(20)
,`nama` varchar(100)
,`tempat_lahir` varchar(30)
,`tgl_lahir` date
,`alamat` varchar(100)
,`hp` varchar(30)
,`nm_departemen` varchar(100)
,`status` varchar(30)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `_pengajuan_cuti`
--
CREATE TABLE IF NOT EXISTS `_pengajuan_cuti` (
`id_cuti` varchar(15)
,`tanggal` date
,`idx` varchar(10)
,`nik` varchar(20)
,`nama` varchar(100)
,`nm_departemen` varchar(100)
,`cuti_awal` int(11)
,`cuti_ambil` int(11)
,`tgl_awal` date
,`alasan` varchar(100)
,`status` varchar(50)
,`hp` varchar(30)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `_sisa_cuti`
--
CREATE TABLE IF NOT EXISTS `_sisa_cuti` (
`idx` varchar(10)
,`nik` varchar(20)
,`nama` varchar(100)
,`nm_departemen` varchar(100)
,`jml_cuti` int(11)
);
-- --------------------------------------------------------

--
-- Structure for view `_karyawan`
--
DROP TABLE IF EXISTS `_karyawan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `_karyawan` AS select `karyawan`.`idx` AS `idx`,`karyawan`.`tgl_masuk` AS `tgl_masuk`,`karyawan`.`nik` AS `nik`,`karyawan`.`nama` AS `nama`,`karyawan`.`tempat_lahir` AS `tempat_lahir`,`karyawan`.`tgl_lahir` AS `tgl_lahir`,`karyawan`.`alamat` AS `alamat`,`karyawan`.`hp` AS `hp`,`departemen`.`nm_departemen` AS `nm_departemen`,`karyawan`.`status` AS `status` from (`departemen` join `karyawan` on((`departemen`.`id_departemen` = `karyawan`.`departemen`)));

-- --------------------------------------------------------

--
-- Structure for view `_pengajuan_cuti`
--
DROP TABLE IF EXISTS `_pengajuan_cuti`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `_pengajuan_cuti` AS select `input_cuti`.`id_cuti` AS `id_cuti`,`input_cuti`.`tanggal` AS `tanggal`,`input_cuti`.`idx` AS `idx`,`karyawan`.`nik` AS `nik`,`karyawan`.`nama` AS `nama`,`departemen`.`nm_departemen` AS `nm_departemen`,`input_cuti`.`cuti_awal` AS `cuti_awal`,`input_cuti`.`cuti_ambil` AS `cuti_ambil`,`input_cuti`.`tgl_awal` AS `tgl_awal`,`input_cuti`.`alasan` AS `alasan`,`input_cuti`.`status` AS `status`,`karyawan`.`hp` AS `hp` from (`cuti_awal` join (`departemen` join (`karyawan` join `input_cuti` on((`karyawan`.`idx` = `input_cuti`.`idx`))) on(((`departemen`.`id_departemen` = `input_cuti`.`id_departemen`) and (`departemen`.`id_departemen` = `karyawan`.`departemen`)))) on((`cuti_awal`.`nik` = `karyawan`.`idx`)));

-- --------------------------------------------------------

--
-- Structure for view `_sisa_cuti`
--
DROP TABLE IF EXISTS `_sisa_cuti`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `_sisa_cuti` AS select `karyawan`.`idx` AS `idx`,`karyawan`.`nik` AS `nik`,`karyawan`.`nama` AS `nama`,`departemen`.`nm_departemen` AS `nm_departemen`,`cuti_awal`.`jml_cuti` AS `jml_cuti` from (`departemen` join (`cuti_awal` join `karyawan` on((`cuti_awal`.`nik` = `karyawan`.`idx`))) on((`departemen`.`id_departemen` = `karyawan`.`departemen`)));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti_awal`
--
ALTER TABLE `cuti_awal`
 ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `data_cuti`
--
ALTER TABLE `data_cuti`
 ADD PRIMARY KEY (`idx`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
 ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `input_cuti`
--
ALTER TABLE `input_cuti`
 ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
 ADD PRIMARY KEY (`idx`);

--
-- Indexes for table `user_akses`
--
ALTER TABLE `user_akses`
 ADD PRIMARY KEY (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
