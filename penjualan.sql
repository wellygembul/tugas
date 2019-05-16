-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2019 pada 03.12
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `No` varchar(225) NOT NULL,
  `Nama` varchar(225) NOT NULL,
  `Status` varchar(225) NOT NULL,
  `Tanggal` date NOT NULL,
  `Dari` varchar(225) NOT NULL,
  `Jumlah` varchar(225) NOT NULL,
  `Harga` varchar(225) NOT NULL,
  `Total` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`No`, `Nama`, `Status`, `Tanggal`, `Dari`, `Jumlah`, `Harga`, `Total`) VALUES
('KOD001', 'Fladeo', 'Masuk', '2019-05-01', 'PT Alfa', '5', '200000', '1000000'),
('KOD002', 'Nevada', 'Masuk', '2019-05-03', 'PT Indo Midi Jaya', '30', '300000', '9000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `No` varchar(225) NOT NULL,
  `Nama` varchar(225) NOT NULL,
  `Tanggal` date NOT NULL,
  `Jumlah` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`No`, `Nama`, `Tanggal`, `Jumlah`) VALUES
('BRG001', 'Fladeo', '2019-04-01', '200'),
('BRG002', 'Zara', '2019-04-05', '124'),
('BRG003', 'Nevada', '2019-04-06', '456'),
('BRG004', 'Zara', '2019-05-06', '400'),
('BRG005', 'Nevalium', '2019-05-07', '333');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
