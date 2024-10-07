-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2023 lúc 04:46 PM
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
-- Cơ sở dữ liệu: `projectweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`name`, `price`, `image`, `quantity`, `id`) VALUES
('Kiwi', '50000', 'kiwi.png', 2, 13),
('Đu đủ ', '15000', 'dudu.png', 1, 14),
('Mẫu 6', '599000', 'giotraicay6.png', 1, 17),
('Dưa hấu', '40000', 'duahau.png', 1, 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products-ban-chay`
--

CREATE TABLE `products-ban-chay` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products-ban-chay`
--

INSERT INTO `products-ban-chay` (`id`, `name`, `price`, `image`) VALUES
(1, 'chuối', '28000', 'chuoi.png'),
(2, 'Dưa hấu', '40000', 'duahau.png'),
(4, 'Đào', '65000', 'dao.png'),
(5, 'dừa', '1212', 'duatuoi.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products-gio-qua-trai-cay`
--

CREATE TABLE `products-gio-qua-trai-cay` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products-gio-qua-trai-cay`
--

INSERT INTO `products-gio-qua-trai-cay` (`id`, `name`, `price`, `image`) VALUES
(1, 'mẫu 5', '450000', 'giotraicay5.png'),
(2, 'Mẫu 2', '500000', 'giotraicay2.png'),
(3, 'Mẫu 6', '599000', 'giotraicay6.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products-nhap-khau`
--

CREATE TABLE `products-nhap-khau` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products-nhap-khau`
--

INSERT INTO `products-nhap-khau` (`id`, `name`, `price`, `image`) VALUES
(1, 'TÁO ĐỎ', '70000', 'tao.png'),
(3, 'NHO MỸ', '120000', 'nho.png'),
(4, 'THƠM THÁI', '60000', 'thom.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products-nhiet-doi`
--

CREATE TABLE `products-nhiet-doi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products-nhiet-doi`
--

INSERT INTO `products-nhiet-doi` (`id`, `name`, `price`, `image`) VALUES
(1, 'LỰU ĐỎ', '54000', 'luu.png'),
(2, 'MÃN CẦU SIÊM', '65000', 'mangcausiem.png'),
(3, 'mít', '43000', 'mit.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products-noi-bac`
--

CREATE TABLE `products-noi-bac` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products-noi-bac`
--

INSERT INTO `products-noi-bac` (`id`, `name`, `price`, `image`) VALUES
(1, 'Đu đủ ', '15000', 'dudu.png'),
(2, 'Kiwi', '50000', 'kiwi.png'),
(4, 'Cherry', '200000', 'cherry.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanly`
--

CREATE TABLE `quanly` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  `usertype` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `quanly`
--

INSERT INTO `quanly` (`id`, `username`, `psw`, `usertype`, `email`, `mobile`) VALUES
(1, 'admin_cemngot', '1221', 1, '', ''),
(26, 'kimngoc', '1212', 0, 'kimngoc1810114@gmail.com', '12222332132142'),
(27, 'anhkhuong22', 'anhkhuong22', 0, 'anhkhuong@gmail.com', '0888517467'),
(28, 'khuongdien', '1212', 0, 'kimngoc1810114@gmail.com', '123123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products-ban-chay`
--
ALTER TABLE `products-ban-chay`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products-gio-qua-trai-cay`
--
ALTER TABLE `products-gio-qua-trai-cay`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products-nhap-khau`
--
ALTER TABLE `products-nhap-khau`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products-nhiet-doi`
--
ALTER TABLE `products-nhiet-doi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products-noi-bac`
--
ALTER TABLE `products-noi-bac`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quanly`
--
ALTER TABLE `quanly`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `products-ban-chay`
--
ALTER TABLE `products-ban-chay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `products-gio-qua-trai-cay`
--
ALTER TABLE `products-gio-qua-trai-cay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products-nhap-khau`
--
ALTER TABLE `products-nhap-khau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `products-nhiet-doi`
--
ALTER TABLE `products-nhiet-doi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products-noi-bac`
--
ALTER TABLE `products-noi-bac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `quanly`
--
ALTER TABLE `quanly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
