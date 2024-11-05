-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 08, 2024 at 02:40 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `mabl` int NOT NULL,
  `noidung` varchar(2000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `maloai` int NOT NULL,
  `makh` int NOT NULL,
  `ngaybl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int NOT NULL,
  `matkhau` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `kichhoat` bit(50) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `vaitro` bit(50) DEFAULT NULL COMMENT 'true la nhan vien',
  `role` int NOT NULL DEFAULT '0' COMMENT '0 là khách hàng, 1 là quản trị.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `matkhau`, `ten`, `kichhoat`, `email`, `vaitro`, `role`) VALUES
(1, '12345', 'admin', NULL, 'admin@gmail.com', NULL, 1),
(10, '32432', 'An Thư', NULL, 'anthu@gmail.com', NULL, 0),
(11, '1467', 'Hi Tuệ', NULL, 'hitue@gmail.com', NULL, 0),
(12, '2468', 'Phương', NULL, 'phuong@gmail.com', NULL, 0),
(13, '12356', 'An Thư', NULL, 'anthu233@gmail.com', NULL, 0),
(14, '123456', 'An Thư', NULL, 'anthu2334@gmail.com', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaihang`
--

CREATE TABLE `loaihang` (
  `maloai` int NOT NULL,
  `tenloai` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `loaihang`
--

INSERT INTO `loaihang` (`maloai`, `tenloai`) VALUES
(1, 'Váy Đầm'),
(2, 'Áo Nỉ & Áo Hoodie'),
(3, 'Áo Sơmi'),
(4, 'Áo Khoác Ngoài'),
(5, 'Quần Jean'),
(6, 'Đồ ngủ '),
(7, 'Quần Dài');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masanpham` int NOT NULL,
  `tensanpham` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `dongia` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `giamgia` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `ngaynhap` date NOT NULL,
  `mota` varchar(2000) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `soluotxem` int NOT NULL DEFAULT '0',
  `maloai` int NOT NULL,
  `sp_noibat` tinyint(1) NOT NULL COMMENT '0 là bình thường, 1 là nổi bật '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masanpham`, `tensanpham`, `dongia`, `giamgia`, `img`, `ngaynhap`, `mota`, `soluotxem`, `maloai`, `sp_noibat`) VALUES
(1, 'Váy kẻ caro cổ vuông sequin mỏng Kang Kang', '$30,39', NULL, 'vaydam1.jpeg', '2024-06-03', NULL, 0, 1, 1),
(2, 'Váy Riaz Pocket Shirring Strap Top', '$66,49', NULL, 'vaydam2.jpeg', '2024-07-24', NULL, 0, 1, 1),
(3, 'Váy không tay xòe dạo phố mùa hè', '$98,79', NULL, 'vaydam3.jpg', '2024-07-10', NULL, 0, 1, 0),
(4, 'Váy xòe thêu hoa hình bóng đẹp', '$40,84', NULL, 'vaydam9.jpeg', '2024-05-07', NULL, 0, 1, 1),
(5, 'Váy Jean kiểu', '$86.44', NULL, 'vaydam11.jpeg', '2024-07-18', NULL, 0, 1, 0),
(6, 'Váy Cotton Mini Blibly Ribbon A3296', '$36,09', NULL, 'vaydam8.jpeg', '2024-07-24', NULL, 0, 1, 0),
(21, 'Evely Sleeveless Pair', '$75.99', NULL, 'dongu1.jpeg', '2024-08-01', NULL, 0, 6, 1),
(22, 'Clean Long Sleeve Pair', '$83.59', NULL, 'dongu2.jpeg', '2024-07-08', NULL, 0, 6, 0),
(23, 'Alissa Strapless Dress Pk', '$78.84', NULL, 'dongu3.jpeg', '2024-08-04', NULL, 0, 6, 1),
(24, 'Women Clara Long Sleeve Dress Pink', '$63.64', NULL, 'dongu4.jpg', '2024-06-04', NULL, 0, 6, 0),
(25, 'Sweet Dream Sleepwear Set', '$44.64', NULL, 'dongu5.jpeg', '2024-06-11', NULL, 0, 6, 0),
(26, 'Summer Vibe Sleeveless Top', '$75.04', NULL, 'dongu6.jpeg', '2024-07-02', NULL, 0, 6, 0),
(27, 'Cool Bundo Floral Short Sleeve Sweatshirt', '$35.14', NULL, 'ni1.jpeg', '2024-07-01', NULL, 0, 2, 0),
(28, 'Oblique Pocket Hoody In Brown', '$207.99', NULL, 'ni2.jpg', '2024-08-01', NULL, 0, 2, 0),
(29, 'Unisex Sailing Boat Sweatshirt Ivory', '$106.99', NULL, 'ni6.jpg', '2024-07-10', NULL, 0, 2, 0),
(30, 'Basic Fit Back Elastic Waist Jeans', '$43.69', NULL, 'quan2.jpeg', '2024-07-17', NULL, 0, 5, 0),
(31, 'Nylon Wide String Pants', '$75.19', NULL, 'quan3.jpeg', '2024-08-04', NULL, 0, 5, 1),
(32, 'Carol Golden Fleece Lined Label Wide Pants', '$56.04', NULL, 'quan5.jpeg', '2024-08-03', NULL, 0, 5, 0),
(33, 'Linen Touch Short Sleeve Jacket', '$37.99', NULL, 'somi1.jpeg', '2024-07-01', NULL, 0, 3, 0),
(34, 'Cotton Pleats Half Sleeve Blouse White', '$55.99', NULL, 'somi4.jpg', '2024-07-09', NULL, 0, 3, 0),
(35, 'Cappuccino Drop-shoulder Vest Cardigan', '$40.84', NULL, 'khoac3.jpeg', '2024-08-01', NULL, 0, 4, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`mabl`),
  ADD KEY `maloai` (`maloai`),
  ADD KEY `makh` (`makh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masanpham`),
  ADD KEY `maloai` (`maloai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `mabl` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `maloai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masanpham` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loaihang` (`maloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
