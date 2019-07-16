-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2014 at 04:11 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simbad`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `kode_guru` char(5) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `status_aktif` enum('Aktif','Tidak') NOT NULL,
  PRIMARY KEY (`kode_guru`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`kode_guru`, `nip`, `nama_guru`, `kelamin`, `alamat`, `no_telepon`, `status_aktif`) VALUES
('G0001', '201200001', 'Fajri Rahmat', 'Laki-Laki', 'Jl. Janti, Agen JNE, Karang Jambe, Yogyakarta', '081911111111', 'Aktif'),
('G0002', '201200002', 'Iesa', 'Laki-laki', 'Jl. Suhada, Labuhan Ratu 1, Way Jepara, Lampung Timur 2', '08522211100011', 'Tidak'),
('G0003', '201200003', 'Turmudzi', 'Laki-laki', 'Jl. Manggarawan, Labuhan Ratu 5 Way Jepara', '0819111122223', 'Aktif'),
('G0004', '201200004', 'Heru Santoso', 'Laki-laki', 'Jl. Margahayu, Labuhan Ratu Baru, Way Jepara, Lampung Timur', '08191111111222', 'Aktif'),
('G0005', '201200005', 'Andita', 'Perempuan', 'Jl. Parangtritis, 123, Bantulan, Yogyakarta', '08191818181818', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kode_kelas` char(4) NOT NULL,
  `tahun_ajar` varchar(12) NOT NULL,
  `kelas` char(2) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `kode_guru` char(5) NOT NULL,
  `status_aktif` enum('Aktif','Tidak Aktif') NOT NULL,
  PRIMARY KEY (`kode_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `tahun_ajar`, `kelas`, `nama_kelas`, `kode_guru`, `status_aktif`) VALUES
('K001', '1', '', 'Kelas Sabtu', 'G0001', 'Aktif'),
('K002', '2', '', 'Kelas Minggu', 'G0005', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_siswa`
--

CREATE TABLE IF NOT EXISTS `kelas_siswa` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `kode_kelas` char(4) NOT NULL,
  `kode_siswa` char(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `kelas_siswa`
--

INSERT INTO `kelas_siswa` (`id`, `kode_kelas`, `kode_siswa`) VALUES
(1, 'K001', 'S0001'),
(2, 'K001', 'S0002'),
(3, 'K001', 'S0003'),
(4, 'K001', 'S0004'),
(5, 'K001', 'S0006'),
(12, 'K002', 'S0010'),
(7, 'K002', 'S0008'),
(8, 'K002', 'S0009'),
(11, 'K002', 'S0007'),
(13, 'K002', 'S0005');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `semester` int(2) NOT NULL,
  `kode_pelajaran` char(4) NOT NULL,
  `kode_guru` char(5) NOT NULL,
  `kode_kelas` char(4) NOT NULL,
  `kode_siswa` char(5) NOT NULL,
  `nilai_tugas1` int(4) NOT NULL,
  `nilai_tugas2` int(4) NOT NULL,
  `nilai_uts` int(4) NOT NULL,
  `nilai_uas` int(4) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `semester`, `kode_pelajaran`, `kode_guru`, `kode_kelas`, `kode_siswa`, `nilai_tugas1`, `nilai_tugas2`, `nilai_uts`, `nilai_uas`, `keterangan`) VALUES
(1, 1, 'P001', 'G0001', 'K001', 'S0001', 74, 75, 80, 85, 'lunas'),
(3, 1, 'P001', 'G0002', 'K001', 'S0002', 75, 60, 80, 80, 'lunas'),
(4, 1, 'P001', 'G0003', 'K001', 'S0003', 70, 60, 75, 80, 'lunas'),
(5, 1, 'P001', 'G0004', 'K001', 'S0004', 75, 80, 75, 80, 'belum'),
(6, 1, 'P001', 'G0005', 'K001', 'S0006', 68, 70, 85, 80, 'lunas'),
(7, 1, 'P001', 'G0001', 'K002', 'S0007', 70, 70, 75, 79, 'belum'),
(8, 1, 'P001', 'G0002', 'K002', 'S0010', 78, 80, 75, 85, 'belum'),
(9, 1, 'P001', 'G0002', 'K002', 'S0009', 78, 80, 75, 80, 'lunas'),
(10, 1, 'P001', 'G0002', 'K002', 'S0008', 85, 80, 85, 90, 'lunas'),
(11, 1, 'P001', 'G0002', 'K002', 'S0005', 75, 70, 75, 80, 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE IF NOT EXISTS `pelajaran` (
  `kode_pelajaran` char(4) NOT NULL,
  `nama_pelajaran` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_pelajaran`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`kode_pelajaran`, `nama_pelajaran`, `keterangan`) VALUES
('P001', 'Java basic', 'Wajib'),
('P002', 'PHP Basic', 'Wajib'),
('P003', 'Java intermediate 1', 'Wajib'),
('P004', 'Java intermediate 2', 'Wajib'),
('P005', 'Java Hibernate', 'Wajib'),
('P006', 'Html @ CSS', 'Wajib');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `kode_siswa` char(5) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelamin` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tahun_angkatan` char(4) NOT NULL,
  `status` enum('Aktif','Lulus','Keluar') NOT NULL,
  PRIMARY KEY (`kode_siswa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`kode_siswa`, `nis`, `nama_siswa`, `kelamin`, `agama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telepon`, `foto`, `tahun_angkatan`, `status`) VALUES
('S0001', '2014001', 'Sardi Sudrajad', 'Laki-laki', 'Islam', 'Way Jepara, Lampung Timur', '1991-02-21', 'Jl. Suhada, Labuhan Ratu 1, Way Jepara, Lampung Timur', '0857279911111', '', '2014', 'Aktif'),
('S0002', '2014002', 'Susiatun Paritun', 'Perempuan', 'Islam', 'Sukadana, Lampung Timur', '1991-03-20', 'Jl. Suhada, Labuhan Ratu 1, Way Jepara, Lampung Timur', '081911111112222', '', '2014', 'Aktif'),
('S0003', '2014003', 'Septi Suhesti', 'Perempuan', 'Islam', 'Way Jepara, Lampung Timur', '1990-07-12', 'Way Jepara, Lampung Timur', '08579833212211', 'S0003.Septi Suhesti.jpg', '2014', 'Aktif'),
('S0004', '2014004', 'Rizka Dwi Saputra', 'Laki-laki', 'Islam', 'Raman Aji, Lampung Timur', '1993-02-15', 'Raman utara, Lampung Timur', '085743990000811', 'S0004.Riska Dwiputra.jpg', '2014', 'Aktif'),
('S0005', '2014005', 'Subroto Roto', 'Laki-laki', 'Islam', 'Bandar Sribawono, Lampung Timur', '1990-10-21', 'Jl. Suhada, Way Jepara Lampung Timur', '08191234561111', '', '2014', 'Aktif'),
('S0006', '2014006', 'Gendon Marselo', 'Laki-laki', 'Islam', 'Yogyakarta', '1992-01-11', 'Jl. Janti, Agen JNE, Karang Jambe, Way Jepara, Lampung Timur', '0819282828211', '', '2014', 'Aktif'),
('S0007', '2014007', 'Alfa Diony Sardiyon', 'Laki-laki', 'Islam', 'Way Jepara, Lampung Timur', '1990-06-12', 'Jl. Braja Indah, Way Jepara, Lampung Timur', '08572799896911', '', '2014', 'Aktif'),
('S0008', '2014008', 'Fitria Prasetia Wati', 'Laki-laki', 'Islam', 'Way Jepara, Lampung Timur', '1991-06-02', 'Jl. Pramuka, Labuhan Ratu 1, Way Jepara, Lampung Timur', '082122223333444', 'S0008.Fitria Prasetia Wati.jpg', '2014', 'Aktif'),
('S0009', '2014009', 'Gunawan Sitompul', 'Laki-laki', 'Kristen', 'Medan', '1990-06-14', 'Jl. Braja Indah, Way Jepara Lampung Timur', '085727998969111', '', '2014', 'Aktif'),
('S0010', '2014010', 'Evi Fatimah', 'Perempuan', 'Islam', 'Punggur', '1991-02-05', 'Jl. Braja Asri, Way Jepara Lampung Timur', '085727998969222', '', '2014', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `kode_user` char(4) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kode_user`, `nama_user`, `username`, `password`) VALUES
('U001', 'Salaph Alghibrany', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
('U002', 'Indah Indriyanna', 'indah', 'f3385c508ce54d577fd205a1b2ecdfb7'),
('U003', 'Fitria Prasetiawati', 'fitria', 'ef208a5dfcfc3ea9941d7a6c43841784');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
