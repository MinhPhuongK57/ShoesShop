-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th6 04, 2021 lúc 03:40 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `databaseshoesshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `phonenum` text COLLATE utf8_unicode_ci NOT NULL,
  `customername` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_card` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `customertype` int(11) NOT NULL,
  PRIMARY KEY (`phonenum`(20))
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer_account`
--

DROP TABLE IF EXISTS `customer_account`;
CREATE TABLE IF NOT EXISTS `customer_account` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phonenum` text COLLATE utf8_unicode_ci NOT NULL,
  `id_card` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_card`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer_account`
--

INSERT INTO `customer_account` (`username`, `phonenum`, `id_card`, `email`, `address`, `password`, `status`) VALUES
('Tống Thành Tài', '0387666785', 1223341, 'tongthanhtai27052001@gmail.com', '251 Chấn Hưng', '123', 0),
('Tống Thành Tài', '0387666785', 12233412, 'tongthanhtai27052001@gmail.com', '251 Chấn Hưng', '123', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id_product` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `productname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_producttype` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_provider` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `productimage` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `price` double NOT NULL,
  `color` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `size` float NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `productname`, `id_producttype`, `id_provider`, `productimage`, `total`, `price`, `color`, `size`, `description`, `status`) VALUES
('Pro5', 'HYPERVENOM5', 'Men', 'Nike', 'product1.jpg', 38, 380, 'Black', 40, 'Men\'s Firm-Ground Football Boot', 1),
('Pro4', 'HYPERVENOM4', 'Men', 'Nike', 'product5.jpg', 38, 380, 'Grey', 39, 'Men\'s Firm-Ground Football Boot', 1),
('Pro3', 'HYPERVENOM3', 'Kid', 'Nike', 'product3.jpg', 38, 380, 'White', 38, 'Personalized children\'s sports shoes', 1),
('Pro2', 'HYPERVENOM2', 'Kid', 'Nike', 'product4.jpg', 38, 380, 'Blue', 37, 'Personalized children\'s sports shoes', 1),
('Pro1', 'HYPERVENOM1', 'Kid', 'Nike', 'product1.jpg', 38, 380, 'Red', 36, 'Personalized children\'s sports shoes', 1),
('Pro6', 'HYPERVENOM6', 'Men', 'Adidas', 'product6.jpg', 38, 380, 'Green', 41, 'Men\'s Firm-Ground Football Boot', 1),
('Pro7', 'HYPERVENOM7', 'Men', 'Adidas', 'product1.jpg', 38, 380, 'Grey', 42, 'Men\'s Firm-Ground Football Boot', 1),
('Pro8', 'HYPERVENOM8', 'Woman', 'Adidas', 'product5.jpg', 38, 380, 'Black', 43, 'Personalized women\'s sports shoes', 1),
('Pro9', 'HYPERVENOM9', 'Woman', 'Adidas', 'product1.jpg', 38, 380, 'Green', 44, 'Personalized women\'s sports shoes', 1),
('Pro10', 'HYPERVENOM10', 'Woman', 'Adidas', 'product4.jpg', 38, 380, 'Green', 45, 'Personalized women\'s sports shoes', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `producttype`
--

DROP TABLE IF EXISTS `producttype`;
CREATE TABLE IF NOT EXISTS `producttype` (
  `id_producttype` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `producttypename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_producttype`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id_staff` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `staffname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `salary` double NOT NULL,
  `phonenum` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_staff`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`id_staff`, `staffname`, `salary`, `phonenum`, `email`, `address`, `status`) VALUES
('NV02', 'Ngyễn Thị Ánh', 6000000, '34312678', 'anh@gmail.com', 'Hà Nội', 1),
('NV01', 'Lê Văn Tám', 5000000, '34412345', 'tam@gmail.com', 'Bến Tre', 2),
('NV03', 'Trần Thanh Tâm', 4000000, '32345312', 'tam@gmail.com', 'Hải Phòng', 3),
('NV04', 'Phạm Nhật Vượng', 9000000, '34545343', 'vuong@gmail.com', 'Bình Phước', 0),
('NV05', 'Lê Thị Riêng', 6000000, '32345532', 'rieng@gmail.com', 'TP Hồ Chí Minh', 1),
('NV06', 'Lê Văn Bưởi', 5000000, '33444268', 'buoi@gmail.com', 'Vũng Tàu', 2),
('NV07', 'Ngyễn Thị Ánh Tuyết', 5000000, '32343476', 'tuyet@gmail.com', 'Cà Mau', 2),
('NV08', 'Phạm Nhất Thống', 5000000, '30970980', 'thong@gmail.com', 'Sóc Trăng', 2),
('NV09', 'Trần Văn Hai', 4000000, '32300972', 'hai@gmail.com', 'Sóc Trăng', 3),
('NV10', 'Chu Thị Hồng', 5000000, '98709335', 'hong@gmail.com', 'Sóc Trăng', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
