CREATE TABLE IF NOT EXISTS `pekerja` (
  `nip` char(3) NOT NULL,
  `gol` int NOT NULL,
  `gender` char(1) NOT NULL,
  PRIMARY KEY  (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerja`
--

INSERT INTO `pekerja` (`nip`, `gol`, `gender`) VALUES
('101', 1, 'L'),
('102', 2, 'W'),
('103', 1, 'L'),
('104', 3, 'W'),
('105', 2, 'L'),
('106', 2, 'L');