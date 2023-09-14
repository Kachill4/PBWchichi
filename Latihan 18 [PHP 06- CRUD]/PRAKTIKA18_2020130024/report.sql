--
-- Struktur dari tabel `bahanbaku`
--

CREATE TABLE IF NOT EXISTS `bahanbaku` (
  `kdbahan` char(3) NOT NULL,
  `namabahan` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bahanbaku`
--

INSERT INTO `bahanbaku` (`kdbahan`, `namabahan`, `stok`) VALUES
('101', 'Terigu', 25),
('102', 'Gula Pasir', 50),
('103', 'Mentega', 20),
('104', 'Garam', 10),
('105', 'Coklat Bubuk', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli`
--

CREATE TABLE IF NOT EXISTS `beli` (
  `nobon` char(3) NOT NULL,
  `tglbeli` date NOT NULL,
  `kdpemasok` char(3) NOT NULL,
  PRIMARY KEY (`nobon`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beli`
--

INSERT INTO `beli` (`nobon`, `tglbeli`, `kdpemasok`) VALUES
('001', '2017-01-05', '903'),
('002', '2017-01-06', '902'),
('003', '2017-01-09', '903'),
('004', '2017-01-12', '901');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detilbeli`
--

CREATE TABLE IF NOT EXISTS `detilbeli` (
  `nobon` char(3) NOT NULL,
  `kdbahan` char(3) NOT NULL,
  `banyak` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detilbeli`
--

INSERT INTO `detilbeli` (`nobon`, `kdbahan`, `banyak`, `harga`) VALUES
('001', '102', 5, 15000),
('001', '103', 3, 10000),
('002', '102', 2, 15000),
('002', '103', 5, 11500),
('002', '104', 1, 6500),
('003', '105', 5, 20000),
('004', '101', 4, 17500),
('004', '105', 2, 22000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasok`
--

CREATE TABLE IF NOT EXISTS `pemasok` (
  `kdpemasok` char(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `tlp` varchar(10) NOT NULL,
  PRIMARY KEY (`kdpemasok`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemasok`
--

INSERT INTO `pemasok` (`kdpemasok`, `nama`, `alamat`, `tlp`) VALUES
('901', 'CV Wijaya', 'Dago 801', '2509090'),
('902', 'Kharisma Jaya', 'Menado 80', '5302121'),
('903', 'PT Bandung Food', 'Riau 987', '4390808');
