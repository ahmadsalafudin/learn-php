-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2010 at 09:55 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbberita`
--

CREATE TABLE IF NOT EXISTS `tbberita` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Judul` varchar(100) NOT NULL,
  `Berita` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbcache`
--

CREATE TABLE IF NOT EXISTS `tbcache` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Query` varchar(100) NOT NULL,
  `DocId` int(11) NOT NULL,
  `Value` float NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbindex`
--

CREATE TABLE IF NOT EXISTS `tbindex` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Term` varchar(30) NOT NULL,
  `DocId` int(11) NOT NULL,
  `Count` int(11) NOT NULL,
  `Bobot` float NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbstem`
--

CREATE TABLE IF NOT EXISTS `tbstem` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Term` varchar(30) NOT NULL,
  `Stem` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbstem`
--

INSERT INTO `tbstem` (`Id`, `Term`, `Stem`) VALUES
(1, 'pertemuan', 'temu'),
(2, 'bertemu', 'temu'),
(3, 'cr9', 'cristiano ronaldo'),
(4, 'kepindahan', 'pindah'),
(5, 'menembus', 'tembus'),
(6, 'menyusut', 'susut');

-- --------------------------------------------------------

--
-- Table structure for table `tbvektor`
--

CREATE TABLE IF NOT EXISTS `tbvektor` (
  `DocId` int(11) NOT NULL,
  `Panjang` float NOT NULL,
  PRIMARY KEY (`DocId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

