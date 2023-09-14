-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2022 pada 02.27
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` char(3) NOT NULL,
  `nama_obat` varchar(15) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `harga`, `stok`) VALUES
('001', 'Paracetamol', 4500, 25),
('002', 'Amoxilin', 12700, 32),
('003', 'Enervon C', 5150, 37),
('004', 'Combantrin', 21000, 14),
('005', 'Flunarizin', 24900, 8),
('006', 'Decolgen', 3500, 35),
('007', 'Dextrose', 17500, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transjual`
--

CREATE TABLE `transjual` (
  `nobon` char(3) NOT NULL,
  `tgl_jual` date NOT NULL,
  `id_obat` char(3) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transjual`
--

INSERT INTO `transjual` (`nobon`, `tgl_jual`, `id_obat`, `quantity`) VALUES
('501', '2022-05-01', '003', 3),
('502', '2022-05-02', '002', 5),
('503', '2022-05-05', '004', 2),
('504', '2022-05-08', '001', 1),
('505', '2022-05-15', '004', 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `transjual`
--
ALTER TABLE `transjual`
  ADD PRIMARY KEY (`nobon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
