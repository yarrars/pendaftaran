-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 Apr 2020 pada 10.53
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_wikramagarut1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_s`
--

CREATE TABLE `data_s` (
  `id` int(11) NOT NULL,
  `nama_l` varchar(100) NOT NULL,
  `nama_p` varchar(20) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `cita` text NOT NULL,
  `hoby` text NOT NULL,
  `anake` int(11) NOT NULL,
  `skandung` int(11) NOT NULL,
  `stiri` int(11) NOT NULL,
  `sangkat` int(11) NOT NULL,
  `bb` int(11) NOT NULL,
  `tb` int(11) NOT NULL,
  `gd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_s`
--

INSERT INTO `data_s` (`id`, `nama_l`, `nama_p`, `jk`, `ttl`, `agama`, `cita`, `hoby`, `anake`, `skandung`, `stiri`, `sangkat`, `bb`, `tb`, `gd`) VALUES
(1, 'Fatwa Fuzan', 'ojan', 'L', 'Bogor , 9 Desember 2002', 'Islam', 'Masuk surga', 'Ngaji', 1, 3, 0, 0, 75, 179, 'o');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tinggal`
--

CREATE TABLE `data_tinggal` (
  `s_id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `koka` varchar(100) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `notlp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tgl` varchar(20) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_tinggal`
--

INSERT INTO `data_tinggal` (`s_id`, `alamat`, `kelurahan`, `kecamatan`, `koka`, `propinsi`, `notlp`, `email`, `tgl`, `ket`) VALUES
(1, '(Tajur)', '(tajur)', '(bogor timur)', '(bogor)', '(jawa barat)', '(089712318736)', '(admin@admin.com)', '(orangtua)', '()');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_wali`
--

CREATE TABLE `data_wali` (
  `id_s` int(11) NOT NULL,
  `nama_a` varchar(100) NOT NULL,
  `ada_a` varchar(20) NOT NULL,
  `ttl_a` varchar(100) NOT NULL,
  `pekerjaan_a` varchar(100) NOT NULL,
  `pendidikan_terakhir_a` varchar(100) NOT NULL,
  `warga_a` varchar(100) NOT NULL,
  `nohp_a` varchar(20) NOT NULL,
  `nama_i` varchar(100) NOT NULL,
  `ada_i` varchar(20) NOT NULL,
  `ttl_i` varchar(100) NOT NULL,
  `pekerjaan_i` varchar(100) NOT NULL,
  `pendidikan_terakhir_i` varchar(100) NOT NULL,
  `warga_i` varchar(100) NOT NULL,
  `nohp_i` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_wali`
--

INSERT INTO `data_wali` (`id_s`, `nama_a`, `ada_a`, `ttl_a`, `pekerjaan_a`, `pendidikan_terakhir_a`, `warga_a`, `nohp_a`, `nama_i`, `ada_i`, `ttl_i`, `pekerjaan_i`, `pendidikan_terakhir_i`, `warga_i`, `nohp_i`) VALUES
(1, '(Jajang)', '(ada)', '(Bogor, 8 Oktober 1965)', '(Pegawai Negeri)', '', '(Indonesia/Islam)', '(089123874198)', '(Maryati)', '(ada)', '(Singapure, 8 Februari1969)', '(Ibu rumah tetangga)', '', '(Indonesia/Islam)', '(0812268873)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_s`
--
ALTER TABLE `data_s`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_s`
--
ALTER TABLE `data_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
