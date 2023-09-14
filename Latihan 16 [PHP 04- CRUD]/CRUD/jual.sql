CREATE TABLE IF NOT EXISTS `jual` (
  `nofaktur` char(3) NOT NULL,
  `barang` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `banyak` int(11) NOT NULL,
  PRIMARY KEY  (`nofaktur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jual`
--

INSERT INTO `jual` (`nofaktur`, `barang`, `harga`, `banyak`) VALUES
('101', 'Buku Tulis', 4000, 5),
('102', 'Pinsil', 5250, 15);