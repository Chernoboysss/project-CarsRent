-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 11:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_carsresent`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id` int(5) NOT NULL,
  `id_tipe` int(5) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `transmisi` varchar(64) NOT NULL,
  `tahun` year(4) NOT NULL,
  `warna` varchar(64) NOT NULL,
  `kursi` int(5) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `id_tipe`, `nama`, `transmisi`, `tahun`, `warna`, `kursi`, `harga`, `gambar`) VALUES
(1, 2, 'Mitsubishi Xpander', 'Automatic', '2019', 'Hitam', 7, 500000000, 'xpander.png'),
(2, 1, 'Hyundai Creta', 'Automatic', '2022', 'Merah', 5, 500000000, 'creta.png'),
(3, 1, 'Honda SUV', 'Automatic', '2018', 'Putih', 5, 400000000, 'hrv.png'),
(4, 3, 'Honda Jazz', 'Automatic', '2018', 'Merah', 5, 350000000, 'jazz.png'),
(5, 5, 'Mitsubishi L300', 'Manual', '2018', 'Hitam', 2, 200000000, 'l300.png'),
(6, 1, 'Daihatsu Rocky', 'Automatic', '2020', 'Merah', 5, 200000000, 'rocky.png'),
(7, 2, 'Toyota Veloz', 'Automatic', '2020', 'Silver', 7, 350000000, 'veloz.png'),
(8, 4, 'Toyota Vios', 'Automatic', '2023', 'Putih', 5, 2147483647, 'vios.png');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `rating` int(5) NOT NULL,
  `massage` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `id_user`, `id`, `rating`, `massage`) VALUES
(1, 1, 1, 5, 'Gile mobilnye, ajib bener ye.'),
(2, 2, 8, 2, 'asoy geboy ngebut dijalanan ibukota asoy geboy ngebut dijalanan ibukota asoy geboy ngebut dijalanan ibukota asoy geboy ngebut dijalanan ibukota asoy geboy ngebut dijalanan ibukota asoy geboy ngebut dijalanan ibukota asoy geboy ngebut dijalanan ibukota asoy'),
(106, 2, 4, 3, 'jadsh dskjhl '),
(140, 2, 2, 4, '4 star deh, coba lagi 1 kali');

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `id_tipe` int(5) NOT NULL,
  `nama` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`id_tipe`, `nama`) VALUES
(1, 'SUV'),
(2, 'MPV'),
(3, 'Hatchback'),
(4, 'Sedan'),
(5, 'Pickup');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nohp` int(20) NOT NULL,
  `gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nohp`, `gambar`) VALUES
(1, 'ujang sangkuriang', 'rahasianegara', 217918768, 'as'),
(2, 'budi', 'rahasianegro', 12345, 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipe` (`id_tipe`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id` (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `id_tipe` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mobil`
--
ALTER TABLE `mobil`
  ADD CONSTRAINT `mobil_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `tipe` (`id_tipe`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`id`) REFERENCES `mobil` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
