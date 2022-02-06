-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 09:47 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_1904030012`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_anggota`
--

CREATE TABLE `daftar_anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `email` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `foto_anggota` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_anggota`
--

INSERT INTO `daftar_anggota` (`id`, `nama`, `alamat`, `no_telepon`, `email`, `jenis_kelamin`, `foto_anggota`) VALUES
(21, 'Savira Fitry', 'Kosambi', '082134565251', 'fitry29@gmail.com', 'perempuan', 'foto2.png'),
(52, 'Mahendra Dwi', 'Lenteng Agung 5', '082214435243', 'mdwihendra@gmail.com', 'laki-laki', 'foto1.png'),
(421, 'Dini Chandra', 'Pulosari 7', '085221776859', 'dinich19@gmail.com', 'perempuan', 'foto2.png'),
(523, 'Rikas Prawira', 'Serpong Indah 1', '085821556753', 'rikaspwr01@gmail.com', 'laki-laki', 'foto1.png'),
(524, 'Riska Ningsih', 'Pabuaran 2', '082113056471', 'riskan21@gmail.com', 'perempuan', 'foto2.png'),
(525, 'Bagas Purnama', 'Komplek Pelita Mas', '085822134345', 'bagaspurna20@gmail.com', 'laki-laki', 'foto1.png'),
(526, 'Michelia Julia', 'Binong Permai', '082287653423', 'michel343@gmail.com', 'perempuan', 'foto2.png');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_buku`
--

CREATE TABLE `daftar_buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(35) NOT NULL,
  `penulis` varchar(35) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `edisi` int(5) NOT NULL,
  `cover_buku` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_buku`
--

INSERT INTO `daftar_buku` (`id`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `edisi`, `cover_buku`) VALUES
(10503, 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Hasta Mitra', '1980-02-01', 1, 'bumi_manusia.jfif'),
(11224, 'Ayat-Ayat Cinta', 'Habiburrahman El Shirazy', ' Republika', '2003-10-12', 7, 'ayat.jfif'),
(11447, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', '2005-07-05', 1, 'laskar.jpg'),
(12254, 'Pride and Prejudice', ' Jane Austen', 'T. Egerton, Whitehall', '1813-02-28', 1, 'pride.jpg'),
(13245, 'The Little Prince', 'Antoine de Saint-Exupéry', 'Pustaka Jaya, Gramedia', '1943-11-06', 10, 'prince.png'),
(21055, 'Tenggelamnya Kapal Van Der Wijck', 'Hamka', 'Gema Insani', '1938-03-02', 1, 'kapal.jpg'),
(21061, 'And Then There Were None', 'Agatha Christie', 'Gramedia Pustaka Utama', '1939-11-06', 25, 'lenyap.jpg'),
(21062, 'The Pragmatic Programmer', 'Andy Hunt, Dave Thomas', 'Addison Wesley', '1999-10-13', 20, 'prog.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_anggota`
--
ALTER TABLE `daftar_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_buku`
--
ALTER TABLE `daftar_buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_anggota`
--
ALTER TABLE `daftar_anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=527;

--
-- AUTO_INCREMENT for table `daftar_buku`
--
ALTER TABLE `daftar_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21063;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
