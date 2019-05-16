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
-- Database: `pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `kode` char(5) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `kota` varchar(225) NOT NULL,
  `jenis` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `telp` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `No` char(225) NOT NULL,
  `Nama` varchar(225) NOT NULL,
  `Foto` varchar(225) NOT NULL,
  `Tempat` varchar(225) NOT NULL,
  `Tanggal` date NOT NULL,
  `Jenis` varchar(225) NOT NULL,
  `Pendidikan` varchar(225) NOT NULL,
  `Telp` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Jabatan` varchar(225) NOT NULL,
  `Status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`No`, `Nama`, `Foto`, `Tempat`, `Tanggal`, `Jenis`, `Pendidikan`, `Telp`, `Email`, `Jabatan`, `Status`) VALUES
('PEG001', 'Lisa Putri Puspita', 'perempuan.png', 'Sidoarjo', '1995-09-09', 'Perempuan', 'SMA/SMK/MA', '082334562123', 'Eka@gmail.com', 'Staf Gudang', 'Belum Menikah'),
('PEG002', 'Siswanto Pujo', 'L3.png', 'Jember', '1995-06-17', 'Laki-laki', 'Sarjana', '082334562232', 'Pujo@gmail.com', 'Staf Gudang', 'Belum Menikah'),
('PEG003', 'Putri Ayu', 'p3.png', 'Malang', '1993-08-09', 'Perempuan', 'Sarjana', '082334562232', 'Ayu@gmail.com', 'Staf Pengiriman', 'Belum Menikah'),
('PEG004', 'Lita Eka', 'p7.png', 'Jember', '1995-09-09', 'Perempuan', 'SMA/SMK/MA', '082334562232', 'Lita@gmail.com', 'Staf Gudang', 'Belum Menikah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambah`
--

CREATE TABLE `tambah` (
  `Id` int(11) NOT NULL,
  `No` char(225) NOT NULL,
  `Nama` varchar(225) NOT NULL,
  `Foto` varchar(225) NOT NULL,
  `Tempat` varchar(225) NOT NULL,
  `Tanggal` date NOT NULL,
  `Jenis` varchar(225) NOT NULL,
  `Pendidikan` varchar(225) NOT NULL,
  `Telp` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Jabatan` varchar(225) NOT NULL,
  `Status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `tambah`
--
ALTER TABLE `tambah`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tambah`
--
ALTER TABLE `tambah`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
