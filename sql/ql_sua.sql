-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2023 lúc 09:02 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_sua`
--
CREATE DATABASE IF NOT EXISTS `ql_sua` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ql_sua`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `taiKhoanAdmin` char(10) NOT NULL,
  `matKhauAdmin` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`taiKhoanAdmin`, `matKhauAdmin`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang`
--

CREATE TABLE `hang` (
  `maHang` char(5) NOT NULL,
  `tenHang` varchar(100) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `dienThoai` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hang`
--

INSERT INTO `hang` (`maHang`, `tenHang`, `diaChi`, `dienThoai`, `email`) VALUES
('AB', 'Abbott', 'Cong ty nhap khau Viet Nam', 258963147, 'abbott@ab.com'),
('DL', 'Dutch Lady', 'Khu cong nghiep Bien Hoa Dong Nai', 365478921, 'dutchlady@dl.com'),
('NTF', 'Nutifood', 'Khu cong nghiep Song Than Binh Duong', 789456123, 'nutifood@ntf.com'),
('TH', 'TH true MILK', '456 To Hieu - Hoa Minh - Da Nang', 854796312, 'thtruemilk@th.com'),
('VNM', 'Vinamilk', '123 Nguyen Du - Quan 1 - TP.HCM', 123456789, 'vinamilk@vnm.com'),
('VS', 'VinaSoy', 'Khu cong nghiep HN', 985214763, 'vinasoy@vs.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
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
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `tenKh`, `sdt`, `diaChi`, `email`, `password`) VALUES
(1, 'Nguyen Thi Cuong', 445879853, 'hello/bro213', 'hello@gmail.com', '1234'),
(2, 'Nguyen Van Tung', 445879365, 'brohello, halo', 'coconut@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sua`
--

CREATE TABLE `sua` (
  `maSua` char(5) NOT NULL,
  `tenSua` varchar(100) NOT NULL,
  `loaiSua` varchar(100) NOT NULL,
  `giaTien` int(11) NOT NULL,
  `maHang` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sua`
--

INSERT INTO `sua` (`maSua`, `tenSua`, `loaiSua`, `giaTien`, `maHang`) VALUES
('dl1', 'Sữa tươi Dutch Lady hộp có đường', 'sữa tươi', 28000, 'DL'),
('dl3', 'Sữa đặc Dutch Lady Cao Cấp', 'sữa đặc', 20000, 'DL'),
('dl31', 'Sữa đặc Dutch Lady có đường', 'sữa đặc', 20000, 'DL'),
('ntf11', 'Sữa đậu nành Nutifood', 'sữa thực vật', 35000, 'NTF'),
('th1', 'Sữa tươi TH true MILK hộp ít đường', 'sữa tươi', 32000, 'TH'),
('th12', 'Sữa tươi TH true MILK hộp vị dâu', 'sữa tươi', 30000, 'TH'),
('th13', 'Sữa tươi TH true MILK hộp vị socola', 'sữa tươi', 30000, 'TH'),
('th2', 'Sữa chua TH true MILK nha đam', 'sữa chua', 32000, 'TH'),
('th21', 'Sữa chua TH true MILK vị táo', 'sữa chua', 32000, 'TH'),
('th22', 'Sữa chua TH true MILK vị việt quất', 'sữa chua', 32000, 'TH'),
('th23', 'Sữa chua TH true MILK ít đường', 'sữa chua', 32000, 'TH'),
('th41', 'Sữa óc chó TH true MILK', 'sữa thực vật', 28000, 'TH'),
('vnm1', 'Sữa tươi Vinamilk hộp không đường', 'sữa tươi', 28000, 'VNM'),
('vnm12', 'Sữa tươi Vinamilk hộp vị dâu', 'sữa tươi', 28000, 'VNM'),
('vnm13', 'Sữa tươi Vinamilk hộp vị socola', 'sữa tươi', 28000, 'VNM'),
('vnm14', 'Sữa tươi Vinamilk hộp ít đường', 'sữa tươi', 28000, 'VNM'),
('vnm15', 'Sữa tươi Vinamilk hộp có đường', 'sữa tươi', 28000, 'VNM'),
('vnm2', 'Sữa chua Vinamilk nha đam', 'sữa chua', 28000, 'VNM'),
('vnm21', 'Sữa chua Vinamilk vị dâu', 'sữa chua', 32000, 'VNM'),
('vnm22', 'Sữa chua Vinamilk ít đường', 'sữa chua', 32000, 'VNM'),
('vnm23', 'Sữa chua Vinamilk không đường', 'sữa chua', 32000, 'VNM'),
('vnm31', 'Sữa đặc Ông Thọ', 'sữa đặc', 24000, 'VNM'),
('vnm32', 'Sữa đặc Ngôi sao Phương Nam', 'sữa đặc', 24000, 'VNM'),
('vnm33', 'Sữa đặc Ngôi sao Phương Nam lon', 'sữa đặc', 22000, 'VNM'),
('vnm34', 'Sữa đặc Ông Thọ đỏ', 'sữa đặc', 25000, 'VNM'),
('vnm35', 'Sữa đặc Ông Thọ xanh', 'sữa đặc', 25000, 'VNM'),
('vnm41', 'Sữa đậu đỏ Vinamilk', 'sữa thực vật', 25000, 'VNM'),
('vnm42', 'Sữa hạnh nhân Vinamilk', 'sữa thực vật', 25000, 'VNM'),
('vnm43', 'Sữa đậu nành Vinamilk', 'sữa thực vật', 25000, 'VNM'),
('vs11', 'Sữa Fami vị dừa', 'sữa thực vật', 36000, 'VS'),
('vs12', 'Sữa Fami ít đường', 'sữa thực vật', 36000, 'VS'),
('vs13', 'Sữa Fami vị cà ', 'sữa thực vật', 36000, 'VS');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`maHang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sua`
--
ALTER TABLE `sua`
  ADD PRIMARY KEY (`maSua`),
  ADD KEY `maHang` (`maHang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sua`
--
ALTER TABLE `sua`
  ADD CONSTRAINT `sua_ibfk_1` FOREIGN KEY (`maHang`) REFERENCES `hang` (`maHang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
