-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 13, 2017 at 11:37 PM
-- Server version: 5.0.41
-- PHP Version: 5.2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `absenin`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `absensi`
-- 

CREATE TABLE `absensi` (
  `id_absensi` int(10) NOT NULL auto_increment,
  `nim` int(25) NOT NULL,
  `nm_kelas` char(50) character set latin1 collate latin1_general_ci NOT NULL,
  `ket` enum('H','S','I','A') character set latin1 collate latin1_general_ci NOT NULL,
  `tanggal` char(20) character set latin1 collate latin1_general_ci NOT NULL,
  `info` char(10) character set latin1 collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_absensi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=151 ;

-- 
-- Dumping data for table `absensi`
-- 

INSERT INTO `absensi` VALUES (1, 10140021, 'TI.14.B4', 'H', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (2, 10140022, 'TI.14.B4', 'H', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (3, 10140023, 'TI.14.B4', 'H', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (4, 10140024, 'TI.14.B4', 'S', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (5, 10140026, 'TI.14.B4', 'I', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (6, 10140025, 'TI.14.B4', 'A', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (7, 10140011, 'TI.14.B4', 'H', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (8, 10140014, 'TI.14.B4', 'H', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (9, 10140015, 'TI.14.B4', 'H', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (10, 10140012, 'TI.14.B4', 'S', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (11, 10140013, 'TI.14.B4', 'S', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (12, 10140016, 'TI.14.B4', 'A', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (13, 10140017, 'TI.14.B4', 'A', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (14, 10140031, 'TI.14.B4', 'H', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (15, 10140032, 'TI.14.B4', 'H', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (16, 10140033, 'TI.14.B4', 'H', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (17, 10140035, 'TI.14.B4', 'H', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (18, 10140036, 'TI.14.B4', 'H', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (19, 10140037, 'TI.14.B4', 'H', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (20, 10140039, 'TI.14.B4', 'H', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (21, 10140040, 'TI.14.B4', 'H', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (22, 10140041, 'TI.14.B4', 'H', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (23, 10140034, 'TI.14.B4', 'S', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (24, 10140038, 'TI.14.B4', 'I', '05/02/2017', 'succes');
INSERT INTO `absensi` VALUES (25, 10140023, 'TI.14.B4', 'H', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (26, 10140024, 'TI.14.B4', 'H', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (27, 10140026, 'TI.14.B4', 'H', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (28, 10140021, 'TI.14.B4', 'S', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (29, 10140025, 'TI.14.B4', 'S', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (30, 10140022, 'TI.14.B4', 'I', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (31, 10140011, 'TI.14.B4', 'H', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (32, 10140012, 'TI.14.B4', 'H', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (33, 10140013, 'TI.14.B4', 'H', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (34, 10140014, 'TI.14.B4', 'H', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (35, 10140016, 'TI.14.B4', 'H', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (36, 10140015, 'TI.14.B4', 'S', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (37, 10140017, 'TI.14.B4', 'I', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (38, 10140032, 'TI.14.B4', 'H', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (39, 10140033, 'TI.14.B4', 'H', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (40, 10140034, 'TI.14.B4', 'H', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (41, 10140035, 'TI.14.B4', 'H', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (42, 10140037, 'TI.14.B4', 'H', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (43, 10140038, 'TI.14.B4', 'H', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (44, 10140039, 'TI.14.B4', 'H', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (45, 10140031, 'TI.14.B4', 'S', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (46, 10140036, 'TI.14.B4', 'S', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (47, 10140040, 'TI.14.B4', 'S', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (48, 10140041, 'TI.14.B4', 'I', '06/02/2017', 'succes');
INSERT INTO `absensi` VALUES (60, 10140036, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (59, 10140035, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (58, 10140034, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (57, 10140033, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (56, 10140032, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (55, 10140031, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (61, 10140037, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (62, 10140038, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (63, 10140039, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (64, 10140040, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (65, 10140041, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (66, 10140011, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (67, 10140012, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (68, 10140013, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (69, 10140014, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (70, 10140015, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (71, 10140016, 'TI.14.B4', 'S', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (72, 10140017, 'TI.14.B4', 'I', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (73, 10140021, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (74, 10140022, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (75, 10140023, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (76, 10140024, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (77, 10140025, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (78, 10140026, 'TI.14.B4', 'H', '07/02/2017', 'succes');
INSERT INTO `absensi` VALUES (79, 10140021, 'TI.14.B4', 'H', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (80, 10140022, 'TI.14.B4', 'H', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (81, 10140023, 'TI.14.B4', 'H', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (82, 10140024, 'TI.14.B4', 'H', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (83, 10140025, 'TI.14.B4', 'H', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (84, 10140026, 'TI.14.B4', 'H', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (85, 10140011, 'TI.14.B4', 'H', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (86, 10140012, 'TI.14.B4', 'H', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (87, 10140013, 'TI.14.B4', 'H', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (88, 10140014, 'TI.14.B4', 'H', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (89, 10140016, 'TI.14.B4', 'S', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (90, 10140015, 'TI.14.B4', 'I', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (91, 10140017, 'TI.14.B4', 'A', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (92, 10140031, 'TI.14.B4', 'A', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (93, 10140032, 'TI.14.B4', 'A', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (94, 10140033, 'TI.14.B4', 'A', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (95, 10140034, 'TI.14.B4', 'A', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (96, 10140035, 'TI.14.B4', 'A', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (97, 10140036, 'TI.14.B4', 'A', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (98, 10140037, 'TI.14.B4', 'A', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (99, 10140038, 'TI.14.B4', 'A', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (100, 10140039, 'TI.14.B4', 'A', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (101, 10140040, 'TI.14.B4', 'A', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (102, 10140041, 'TI.14.B4', 'A', '08/02/2017', 'succes');
INSERT INTO `absensi` VALUES (103, 10140021, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (104, 10140022, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (105, 10140023, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (106, 10140024, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (107, 10140025, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (108, 10140026, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (109, 10140011, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (110, 10140012, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (111, 10140013, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (112, 10140014, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (113, 10140015, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (114, 10140016, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (115, 10140017, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (116, 10140031, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (117, 10140032, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (118, 10140033, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (119, 10140034, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (120, 10140035, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (121, 10140036, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (122, 10140037, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (123, 10140038, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (124, 10140039, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (125, 10140040, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (126, 10140041, 'TI.14.B4', 'H', '12/02/2017', 'succes');
INSERT INTO `absensi` VALUES (127, 10140021, 'TI.14.B4', 'I', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (128, 10140022, 'TI.14.B4', 'I', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (129, 10140023, 'TI.14.B4', 'I', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (130, 10140024, 'TI.14.B4', 'I', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (131, 10140025, 'TI.14.B4', 'I', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (132, 10140026, 'TI.14.B4', 'I', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (133, 10140016, 'TI.14.B4', 'H', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (134, 10140017, 'TI.14.B4', 'H', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (135, 10140015, 'TI.14.B4', 'S', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (136, 10140014, 'TI.14.B4', 'I', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (137, 10140011, 'TI.14.B4', 'A', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (138, 10140012, 'TI.14.B4', 'A', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (139, 10140013, 'TI.14.B4', 'A', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (140, 10140031, 'TI.14.B4', 'A', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (141, 10140032, 'TI.14.B4', 'A', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (142, 10140033, 'TI.14.B4', 'A', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (143, 10140034, 'TI.14.B4', 'A', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (144, 10140035, 'TI.14.B4', 'A', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (145, 10140036, 'TI.14.B4', 'A', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (146, 10140037, 'TI.14.B4', 'A', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (147, 10140038, 'TI.14.B4', 'A', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (148, 10140039, 'TI.14.B4', 'A', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (149, 10140040, 'TI.14.B4', 'A', '13/02/2017', 'succes');
INSERT INTO `absensi` VALUES (150, 10140041, 'TI.14.B4', 'A', '13/02/2017', 'succes');

-- --------------------------------------------------------

-- 
-- Table structure for table `kelas`
-- 

CREATE TABLE `kelas` (
  `id_kelas` int(10) NOT NULL auto_increment,
  `nm_kelas` char(50) character set latin1 collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_kelas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `kelas`
-- 

INSERT INTO `kelas` VALUES (1, 'TI.14.B4');
INSERT INTO `kelas` VALUES (2, 'TI.14.B4');
INSERT INTO `kelas` VALUES (3, 'TI.14.B4');
INSERT INTO `kelas` VALUES (4, 'TI.14.B4');
INSERT INTO `kelas` VALUES (5, 'TI.14.B4');
INSERT INTO `kelas` VALUES (6, 'TI.14.B4');

-- --------------------------------------------------------

-- 
-- Table structure for table `mahasiswa`
-- 

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(10) NOT NULL auto_increment,
  `nama` char(50) character set latin1 collate latin1_general_ci NOT NULL,
  `nim` int(25) NOT NULL,
  `jns_kel` enum('Laki-Laki','Perempuan') character set latin1 collate latin1_general_ci NOT NULL,
  `tgl_lahir` char(20) character set latin1 collate latin1_general_ci NOT NULL,
  `tmpt_lahir` char(50) character set latin1 collate latin1_general_ci NOT NULL,
  `alamat` text character set latin1 collate latin1_general_ci NOT NULL,
  `nm_kelas` char(50) character set latin1 collate latin1_general_ci NOT NULL,
  `foto` char(200) character set latin1 collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_mahasiswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

-- 
-- Dumping data for table `mahasiswa`
-- 

INSERT INTO `mahasiswa` VALUES (1, 'Abdul Manap', 10140011, 'Laki-Laki', '15/06/1998', 'Tasikmalaya', 'Kp. Batumasigit', 'TI.14.B4', 'system/images/avatar-1-256.png');
INSERT INTO `mahasiswa` VALUES (2, 'Dini Nurbaeti', 10140012, 'Perempuan', '14/04/1998', 'Tasikmalaya', 'Kp. Batumasigit', 'TI.14.B4', 'system/images/avatar-3-256.png');
INSERT INTO `mahasiswa` VALUES (3, 'Eva Sulastri', 10140013, 'Perempuan', '10/08/1998', 'Tasikmalaya', 'Kp. Pirusa Sukaratu', 'TI.14.B4', 'system/images/avatar-3-256.png');
INSERT INTO `mahasiswa` VALUES (4, 'Arip Rohana', 10140014, 'Laki-Laki', '28/10/1998', 'Tasikmalaya', 'Kp. Batumasigit', 'TI.14.B4', 'system/images/avatar-1-256.png');
INSERT INTO `mahasiswa` VALUES (5, 'Wina Julia', 10140015, 'Perempuan', '03/11/1998', 'Tasikmalaya', 'Kp. Batumasigit', 'TI.14.B4', 'system/images/avatar-3-256.png');
INSERT INTO `mahasiswa` VALUES (6, 'Dian', 10140016, 'Perempuan', '03/03/1998', 'Tasikmalaya', 'Kp. Pirusa Sukaratu', 'TI.14.B4', 'system/images/avatar-3-256.png');
INSERT INTO `mahasiswa` VALUES (7, 'Muhammad Aziz', 10140017, 'Laki-Laki', '30/06/1998', 'Tasikmalaya', 'Kp. Cihideung Gunungsari', 'TI.14.B4', 'system/images/avatar-1-256.png');
INSERT INTO `mahasiswa` VALUES (8, 'Adi Ardiansyah', 10140021, 'Laki-Laki', '07/10/1998', 'Tasikmalaya', 'Kp. Sukarame Bungursari', 'TI.14.B4', 'system/images/avatar-1-256.png');
INSERT INTO `mahasiswa` VALUES (9, 'Agus Fuad', 10140022, 'Laki-Laki', '11/10/1998', 'Tasikmalaya', 'Kp. Sukarame Bungursari', 'TI.14.B4', 'system/images/avatar-1-256.png');
INSERT INTO `mahasiswa` VALUES (10, 'Ai Rifkiah', 10140023, 'Perempuan', '03/10/1998', 'Tasikmalaya', 'Kp. Pirusa Sukaratu', 'TI.14.B4', 'system/images/avatar-3-256.png');
INSERT INTO `mahasiswa` VALUES (11, 'Dika Maulana', 10140024, 'Laki-Laki', '29/09/1998', 'Tasikmalaya', 'Kp. Cihideung Gunungsari', 'TI.14.B4', 'system/images/avatar-1-256.png');
INSERT INTO `mahasiswa` VALUES (12, 'Irfan Aji Syaputra', 10140025, 'Laki-Laki', '29/09/1998', 'Tasikmalaya', 'Kp. Sukarame Bungursari', 'TI.14.B4', 'system/images/avatar-1-256.png');
INSERT INTO `mahasiswa` VALUES (13, 'Muhamad Yoga', 10140026, 'Laki-Laki', '10/10/1998', 'Tasikmalaya', 'Kp. Batumasigit', 'TI.14.B4', 'system/images/avatar-1-256.png');
INSERT INTO `mahasiswa` VALUES (14, 'Ahmad Fauzi A', 10140031, 'Laki-Laki', '07/10/1998', 'Tasikmalaya', 'Kp. Pirusa Sukaratu', 'TI.14.B4', 'system/images/avatar-1-256.png');
INSERT INTO `mahasiswa` VALUES (15, 'Ahmad Fauzi B', 10140032, 'Laki-Laki', '13/07/1998', 'Tasikmalaya', 'Kp. Cihideung Gunungsari', 'TI.14.B4', 'system/images/avatar-1-256.png');
INSERT INTO `mahasiswa` VALUES (16, 'Fahmi Sanjaya', 10140033, 'Laki-Laki', '28/10/1998', 'Tasikmalaya', 'Kp. Cihideung Gunungsari', 'TI.14.B4', 'system/images/avatar-1-256.png');
INSERT INTO `mahasiswa` VALUES (17, 'Indra', 10140034, 'Laki-Laki', '28/09/1998', 'Tasikmalaya', 'Kp. Cihideung Gunungsari', 'TI.14.B4', 'system/images/avatar-1-256.png');
INSERT INTO `mahasiswa` VALUES (18, 'Najip Safulloh', 10140035, 'Laki-Laki', '01/10/1998', 'Tasikmalaya', 'Kp. Batumasigit', 'TI.14.B4', 'system/images/avatar-1-256.png');
INSERT INTO `mahasiswa` VALUES (19, 'Sandi', 10140036, 'Laki-Laki', '07/10/1998', 'Tasikmalaya', 'Kp. Batumasigit', 'TI.14.B4', 'system/images/avatar-1-256.png');
INSERT INTO `mahasiswa` VALUES (20, 'Soni', 10140037, 'Laki-Laki', '07/10/1998', 'Tasikmalaya', 'Kp. Pirusa Sukaratu', 'TI.14.B4', 'system/images/avatar-1-256.png');
INSERT INTO `mahasiswa` VALUES (21, 'Redi', 10140038, 'Laki-Laki', '04/10/1998', 'Tasikmalaya', 'Kp. Pirusa Sukaratu', 'TI.14.B4', 'system/images/avatar-1-256.png');
INSERT INTO `mahasiswa` VALUES (22, 'Windi Nugraha', 10140039, 'Laki-Laki', '02/10/1998', 'Tasikmalaya', 'Kp. Pirusa Sukaratu', 'TI.14.B4', 'system/images/avatar-1-256.png');
INSERT INTO `mahasiswa` VALUES (23, 'Mubin', 10140040, 'Laki-Laki', '06/10/1998', 'Tasikmalaya', 'Kp. Cihideung Gunungsari', 'TI.14.B4', 'system/images/avatar-1-256.png');
INSERT INTO `mahasiswa` VALUES (24, 'Sulton', 10140041, 'Laki-Laki', '05/10/1998', 'Tasikmalaya', 'Kp. Batumasigit', 'TI.14.B4', 'system/images/avatar-1-256.png');

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL auto_increment,
  `user` char(25) collate latin1_general_ci NOT NULL,
  `pass` char(200) collate latin1_general_ci NOT NULL,
  `confirm` char(200) collate latin1_general_ci NOT NULL,
  `level` enum('Admin','dosen-Piket','Sekretaris') collate latin1_general_ci NOT NULL,
  `nama` char(50) collate latin1_general_ci NOT NULL,
  `foto` char(200) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES (1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 'Admin', 'system/images/avatar-1-256.png');
INSERT INTO `user` VALUES (2, 'dosen', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'dosen-Piket', 'dosen Piket', 'system/images/avatar-1-256.png');
INSERT INTO `user` VALUES (3, 'sekretaris', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'Sekretaris', 'Sekretaris', 'system/images/avatar-1-256.png');