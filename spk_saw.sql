-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 08:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_saw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'luluk', 'luluk');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `TT` varchar(100) NOT NULL,
  `AS` varchar(100) NOT NULL,
  `JD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `gender`, `TT`, `AS`, `JD`) VALUES
(4, 'abdul wahid', 'Laki-laki', 'Surabaya - Bangkalan', 'Surabaya - Bangkalan', '>200-230'),
(5, 'zakiyah', 'Perempuan', 'Surabaya - Bangkalan', 'Surabaya - Bangkalan', '>260'),
(6, 'Qurrota A\'yuningsih', 'Perempuan', 'Surabaya - Bangkalan', 'Surabaya - Bangkalan', '>230-260'),
(7, 'Hamdani', 'Laki-laki', 'Surabaya - Bangkalan', 'Surabaya - Bangkalan', '>230-260'),
(8, 'Diyana Komalasari', 'Perempuan', 'Surabaya - Bangkalan', 'Surabaya - Bangkalan', '>260'),
(9, 'M.Firmansyah', 'Laki-laki', 'Gresik', 'Surabaya - Bangkalan', '>230-260'),
(10, 'Rifan Hoiron', 'Laki-laki', 'Surabaya - Bangkalan', 'Surabaya - Bangkalan', '>260'),
(11, 'Ratna Amiratul', 'Perempuan', 'Surabaya - Bangkalan', 'Surabaya - Bangkalan', '>260'),
(12, 'Syarif Hidayat', 'Laki-laki', 'Surabaya - Bangkalan', 'Surabaya - Bangkalan', '>230-260'),
(13, 'Nurul Fitriyah', 'Perempuan', 'Surabaya - Bangkalan', 'Surabaya - Bangkalan', '>260');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `tipe_kriteria` varchar(10) NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `tipe_kriteria`, `bobot_kriteria`) VALUES
(2, 'Jumlah Danun', 'Benefit', 4),
(3, 'Asal Sekolah', 'Cost', 2),
(7, 'Tempat Tinggal', 'Cost', 3);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(6) NOT NULL,
  `ket_nilai` varchar(45) NOT NULL,
  `jum_nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rangking`
--

CREATE TABLE `rangking` (
  `id_rangking` int(11) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `ik1` varchar(100) NOT NULL,
  `ik2` varchar(100) NOT NULL,
  `ik3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_subkriteria` int(11) NOT NULL,
  `nm_kriteria` varchar(100) NOT NULL,
  `subkriteria` varchar(100) NOT NULL,
  `nilai_sub` varchar(200) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id_subkriteria`, `nm_kriteria`, `subkriteria`, `nilai_sub`, `keterangan`) VALUES
(4, 'Jumlah Danun', '<200', '1', '<200'),
(5, 'Jumlah Danun', '>200-230', '2', '>200-230'),
(6, 'Jumlah Danun', '>230-260', '3', '>230-260'),
(7, 'Jumlah Danun', '>260', '4', '>260'),
(17, 'Asal Sekolah', '162 km ', '1', 'Sumenep'),
(18, 'Asal Sekolah', '>=84 km - <=100 km', '2', 'Sampang - Pamekasan'),
(19, 'Asal Sekolah', '43 km', '3', 'Gresik'),
(20, 'Asal Sekolah', '<= 18 km', '4', 'Surabaya - Bangkalan'),
(21, 'Tempat Tinggal', '162 km ', '1', 'Sumenep'),
(22, 'Tempat Tinggal', '>=84 km - <=100 km', '2', 'Sampang - Pamekasan'),
(23, 'Tempat Tinggal', '43 km', '3', 'Gresik'),
(24, 'Tempat Tinggal', '<= 18 km', '4', 'Surabaya - Bangkalan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `rangking`
--
ALTER TABLE `rangking`
  ADD PRIMARY KEY (`id_rangking`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rangking`
--
ALTER TABLE `rangking`
  MODIFY `id_rangking` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
