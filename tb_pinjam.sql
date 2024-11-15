-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2024 at 05:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_masuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `Nama` varchar(250) DEFAULT NULL,
  `Kelas` varchar(250) DEFAULT NULL,
  `Barang` varchar(250) DEFAULT NULL,
  `Tanggalpinjam` date DEFAULT NULL,
  `TangggalPengembalian` date NOT NULL,
  `id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pinjam`
--

INSERT INTO `tb_pinjam` (`Nama`, `Kelas`, `Barang`, `Tanggalpinjam`, `TangggalPengembalian`, `id`) VALUES
('Mahesa Putra', 'mnsabhj', 'abkxj', '2024-11-21', '2024-11-08', 19),
('agitha', 'wqyusadhbjh', 'aVHXUQABJ', '2024-11-29', '2024-11-15', 20),
('marlina', 'XI-AK 1', 'infocus+kabel', '2024-11-14', '2024-11-14', 21),
('shajXBjH', 'amnzBHJ', 'bjhsabj', '2024-11-29', '2024-11-22', 22),
('gd', 'gffgfg', 're', '2024-11-29', '2024-11-22', 23),
('renata', 'AK-3', 'infokus,kabel,hdmi', '2024-11-16', '2024-11-16', 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
