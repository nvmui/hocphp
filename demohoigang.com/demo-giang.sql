-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 22, 2024 at 12:35 PM
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
-- Database: `demo-giang`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `iddm` int NOT NULL,
  `TenDM` varchar(100) NOT NULL,
  `idhang` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `danhmucsp`
--

INSERT INTO `danhmucsp` (`iddm`, `TenDM`, `idhang`) VALUES
(1, 'Điện thoại', 0),
(2, 'Máy tính bảng', 1),
(3, 'Laptop', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hangsx`
--

CREATE TABLE `hangsx` (
  `idhang` int NOT NULL,
  `TenHang` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ThuTu` int NOT NULL,
  `AnHien` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `hangsx`
--

INSERT INTO `hangsx` (`idhang`, `TenHang`, `ThuTu`, `AnHien`) VALUES
(1, 'Dell', 9, 1),
(2, 'Sony', 1, 1),
(3, 'Apple', 2, 1),
(4, 'SamSung', 3, 1),
(5, 'Oppo', 4, 0),
(6, 'Panasonic', 5, 0),
(7, 'Sharp', 6, 1),
(8, 'Lenovo', 7, 1),
(9, 'Tất cả các hãng', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `IDNhaCungCap` int NOT NULL,
  `TenNhaCC` varchar(30) DEFAULT NULL,
  `DiaChi` varchar(30) DEFAULT NULL,
  `SDT` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`IDNhaCungCap`, `TenNhaCC`, `DiaChi`, `SDT`, `Email`) VALUES
(2, 'ID Word', '135 Nguyễn Hoàng', '0236 845 874', 'idword@gmail.com'),
(3, 'FPT Digital', '830 Tôn Đức Thắng', '0236 845 874', 'fptdigital@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `TenSP` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `Chitiet` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `Hinhanh` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `GiaSP` double NOT NULL,
  `GhiChu` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `iddm` int NOT NULL,
  `SoLuong` int NOT NULL,
  `NgayNhap` date NOT NULL,
  `idhang` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `TenSP`, `Chitiet`, `Hinhanh`, `GiaSP`, `GhiChu`, `iddm`, `SoLuong`, `NgayNhap`, `idhang`) VALUES
(1, 'IPhone 6S', 'Thiết kế trẻ trung, chạy hệ điều hành IOS 10', 'image/iphone.jpg', 17540000, 'Đang còn hàng', 0, 0, '0000-00-00', 3),
(29, 'SamSung galaxy a5', '\r\nĐặc điểm nổi bật của Samsung Galaxy A5 (2017)\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\n\r\nBộ sản phẩm chuẩn: Sạc, Tai nghe, Cáp (USB Type-C), Cây lấy sim, Hộp, Sách hướng dẫn\r\nĐẳng cấp', 'upload/samsung-galaxy-a5-2017.png', 8990000, '', 1, 10, '0000-00-00', 4),
(33, 'iPad Pro 9.7 inch Wifi 32GB', '\r\nĐặc điểm nổi bật của iPad Pro 9.7 inch Wifi 32GB\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\n\r\nBộ sản phẩm chuẩn: Adapter, Sách hướng dẫn, Cáp Lightning, Hộp máy\r\niPad Pro 9.7 inch – Máy tính bảng cao cấp, hiệu năng mượt mà\r\n\r\nSau ', 'upload/ipad-pro-97-inch-1-400x460.png', 14900000, '', 2, 10, '0000-00-00', 3),
(34, 'iPad Mini 4 Wifi Cellular 16GB', 'iPad Mini 4 Wifi Cellular 16GB cho bạn thêm sự lựa chọn với kết nối mạng 3G/4G cùng cấu hình mạnh mẽ.\r\nKết nối thế giới mọi lúc mọi nơi\r\n\r\nBên cạnh kết nối wifi chuẩn Wi-Fi 802.11 a/b/g/n/ac cho phép trải nghiệm web nhanh hơn, iPad Mini 4 ghi điểm vớ', 'upload/ipad-mini-4-cellular-16gb-400x460.png', 10490000, '', 2, 10, '0000-00-00', 3),
(35, 'iPad Mini 4 Wifi 32GB', 'Đặc điểm nổi bật của iPad Mini 4 Wifi 32GB\r\nTìm hiểu thêm\r\nBộ sản phẩm chuẩn: Adapter, Sách hướng dẫn, Cáp Lightning\r\niPad Mini 4 Wifi 32GB với thiết kế sang trọng cùng dung lượng pin lớn sẽ giúp bạn làm việc và giải trí mọi lúc mọi nơi.\r\nNhẹ hơn và ', 'upload/ipad-mini-4-wifi-32gb-400-400x460.png', 8490000, '', 2, 10, '0000-00-00', 3),
(37, 'Iphone 12 Max', 'Thiết kế mới rất đẹp', 'upload\\huawei-matepad-t8-xanh-600x600.jpg', 27700000, 'Mới', 1, 2, '2021-04-23', 1),
(41, 'iPhone 15 Pro Max 256GB', 'iPhone 15 Pro Max là một chiếc điện thoại thông minh cao cấp được mong đợi nhất năm 2023', 'upload/iphone-15-pro-max-white-1-3.jpg', 29990000, 'Có sẵn hàng', 1, 1, '2024-04-15', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `tennsd` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `tennsd`, `email`) VALUES
(1, 'admin', '123', 'Quản trị', 'quantri@gmail.com'),
(2, 'cadit', '123', 'Người quản trị', 'quantri@gmail.com'),
(3, 'muinv', 'mui123', 'Nguyễn Văn Mui', 'muicadit@yahoo.com'),
(4, 'muicep', 'cep123', 'Khoa Tin học - Ngoại ngữ', 'kthnn@gmail.com'),
(5, 'muicadit', 'mui123', 'Tổ tin học', 'totinhoc@gmail.com'),
(6, 'vanmanh', 'manh123', 'Nguyễn Văn Mạnh', 'vanmanh@gmail.com'),
(7, 'anhvui', 'vui123', 'Nguyễn Anh Vui', 'anhvui@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`iddm`);

--
-- Indexes for table `hangsx`
--
ALTER TABLE `hangsx`
  ADD PRIMARY KEY (`idhang`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`IDNhaCungCap`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `iddm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hangsx`
--
ALTER TABLE `hangsx`
  MODIFY `idhang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `IDNhaCungCap` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
