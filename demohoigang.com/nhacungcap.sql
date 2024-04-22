-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 22, 2024 at 11:44 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoigiang`
--

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `IDNhaCungCap` int NOT NULL,
  `TenNhaCC` varchar(30) DEFAULT NULL,
  `DiaChi` varchar(30) DEFAULT NULL,
  `SDT` varchar(10) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`IDNhaCungCap`, `TenNhaCC`, `DiaChi`, `SDT`, `Email`) VALUES
(1, 'FPT Shope', '143 Nguyễn Lương Bằng', '0819173817', 'fptshope@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`IDNhaCungCap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `IDNhaCungCap` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD CONSTRAINT `nhacungcap_ibfk_1` FOREIGN KEY (`IDNhaCungCap`) REFERENCES `sanpham` (`IDNhaCungCap`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
