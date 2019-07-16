

CREATE TABLE IF NOT EXISTS `file` (
  `id_file` int(50) NOT NULL AUTO_INCREMENT,
  `title_file` text COLLATE latin1_general_ci NOT NULL,
  `nama_file` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_file`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=100001 ;
