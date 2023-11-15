-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 09:21 AM
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
-- Database: `ql_sua`
--
CREATE DATABASE IF NOT EXISTS `ql_sua` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ql_sua`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `taiKhoanAdmin` char(10) NOT NULL,
  `matKhauAdmin` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`taiKhoanAdmin`, `matKhauAdmin`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `hang`
--

CREATE TABLE `hang` (
  `maHang` char(5) NOT NULL,
  `tenHang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hang`
--

INSERT INTO `hang` (`maHang`, `tenHang`) VALUES
('vina', 'Vinamilk 2');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `tenKh` varchar(100) DEFAULT NULL,
  `sdt` int(11) DEFAULT NULL,
  `diaChi` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `tenKh`, `sdt`, `diaChi`, `email`, `password`) VALUES
(1, 'Nguyen Thi Cuong', 445879853, 'hello/bro213', 'hello@gmail.com', '1234'),
(2, 'Nguyen Van Tung', 445879365, 'brohello, halo', 'coconut@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `sua`
--

CREATE TABLE `sua` (
  `maSua` char(5) NOT NULL,
  `tenSua` varchar(100) NOT NULL,
  `loaiSua` varchar(100) NOT NULL,
  `giaTien` int(11) NOT NULL,
  `maHang` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sua`
--

INSERT INTO `sua` (`maSua`, `tenSua`, `loaiSua`, `giaTien`, `maHang`) VALUES
('vn11', 'Sữa tươi tuyệt trùng Vinamilk', 'sữa tươi', 20000, 'vina'),
('vn12', 'Sữa chua trái cây Vinamilk', 'sữa chua', 30000, 'vina');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`maHang`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sua`
--
ALTER TABLE `sua`
  ADD PRIMARY KEY (`maSua`),
  ADD KEY `maHang` (`maHang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sua`
--
ALTER TABLE `sua`
  ADD CONSTRAINT `sua_ibfk_1` FOREIGN KEY (`maHang`) REFERENCES `hang` (`maHang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
