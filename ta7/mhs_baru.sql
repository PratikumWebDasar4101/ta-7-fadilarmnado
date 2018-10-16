-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 01:01 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal7`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs_baru`
--

CREATE TABLE `mhs_baru` (
  `nama` varchar(50) NOT NULL,
  `nim` int(10) NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `prodi` text NOT NULL,
  `fakultas` text NOT NULL,
  `asal` text NOT NULL,
  `moto_hidup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs_baru`
--

INSERT INTO `mhs_baru` (`nama`, `nim`, `jenis_kelamin`, `prodi`, `fakultas`, `asal`, `moto_hidup`) VALUES
('dodol1', 1234, 'Laki-Laki', 'D3 Teknik Informatika', 'fakultas ilmu terapan', 'asdn', 'aksdkjandnjas'),
('riri', 3214, 'perempuan', 'D4 Sistem Multimedia', 'fakultas ilmu terapan', 'bengkulu', 'asdadsadsa'),
('fadil', 2147483647, 'Laki-Laki', 'D3 Perhotelan', 'fakultas industri kreatif', 'Bengkulu', 'tak pernah berhenti mencoba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs_baru`
--
ALTER TABLE `mhs_baru`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
