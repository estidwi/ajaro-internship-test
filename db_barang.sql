-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2019 pada 03.05
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_barang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `stock` int(5) NOT NULL,
  `harga` double(12,2) NOT NULL,
  `berat` double(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `kode`, `nama`, `deskripsi`, `stock`, `harga`, `berat`) VALUES
(1, '001', 'Buku', 'Novel', 10, 63000.00, 100.00),
(4, '3', 'buku', 'kpop', 3, 150000.00, 50.00),
(5, '5', 'pensil', '2B', 4, 10000.00, 20.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `E-mail Address` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
