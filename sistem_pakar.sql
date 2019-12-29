-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2019 at 02:59 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_pakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `id_bobot` int(11) NOT NULL,
  `id_penyakit` varchar(5) NOT NULL,
  `id_gejala` varchar(5) NOT NULL,
  `cf_pakar` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id_bobot`, `id_penyakit`, `id_gejala`, `cf_pakar`) VALUES
(1, 'K1', 'G1', 0.6),
(2, 'K1', 'G2', 0.8),
(3, 'K1', 'G4', 0.4),
(4, 'K1', 'G6', 0.6),
(5, 'K1', 'G11', 0.2),
(6, 'K2', 'G3', 0.4),
(7, 'K2', 'G6', 0.6),
(8, 'K2', 'G7', 0.8),
(9, 'K2', 'G10', 0.2),
(10, 'K3', 'G4', 0.4),
(11, 'K3', 'G5', 0.6),
(12, 'K3', 'G10', 0.8),
(13, 'K4', 'G4', 0.8),
(14, 'K4', 'G8', 0.6),
(15, 'K4', 'G9', 0.2);

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(10) NOT NULL,
  `gejala` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `gejala`) VALUES
('G1', 'Buah Mengering dan Keriput'),
('G10', 'Daun berwarna hijau pekat'),
('G11', 'Daun berguguran'),
('G2', 'Buah terdapat bercak hitam dan membusuk'),
('G3', 'Bercak berwarna coklat abu-abu pada daun'),
('G4', 'Daun Menguning'),
('G5', 'Daun berkerut dan tidak rata'),
('G6', 'Bercak kering pada daun'),
('G7', 'Daun sobek dan terdapat bercak'),
('G8', 'Daun menggulung ke arah bawah'),
('G9', 'Tulang daun menebal');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(5) NOT NULL,
  `penyakit` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `penyakit`) VALUES
('K1', 'Antraknosa'),
('K2', 'Cercospora'),
('K3', 'Penyakit Kerupuk'),
('K4', 'Virus Gemini');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
