-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2023 lúc 06:25 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_binh_luan` int(11) NOT NULL,
  `ma_khach_hang` varchar(20) DEFAULT NULL,
  `ma_mon_an` int(11) DEFAULT NULL,
  `noi_dung` text NOT NULL,
  `ngay_binh_luan` datetime NOT NULL,
  `xep_hang` int(11) NOT NULL COMMENT 'xếp hạng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_hoa_don`
--

CREATE TABLE `chi_tiet_hoa_don` (
  `ma_chi_tiet` int(11) NOT NULL,
  `ma_hoa_don` int(11) DEFAULT NULL,
  `ma_mon_an` int(11) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `don_gia` decimal(10,2) DEFAULT NULL,
  `thanh_tien` decimal(10,2) DEFAULT NULL,
  `ngay_dat` date NOT NULL,
  `trang_thai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_hoa_don`
--

INSERT INTO `chi_tiet_hoa_don` (`ma_chi_tiet`, `ma_hoa_don`, `ma_mon_an`, `so_luong`, `don_gia`, `thanh_tien`, `ngay_dat`, `trang_thai`) VALUES
(1, 1, 12, 2, 20000.00, 40000.00, '2023-11-02', 'Đã nhận hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_ban`
--

CREATE TABLE `dat_ban` (
  `ma_dat_ban` int(11) NOT NULL,
  `ten_kh` varchar(255) NOT NULL,
  `so_dien_thoai` varchar(15) NOT NULL,
  `ngay_dat` date NOT NULL,
  `gio_dat` time NOT NULL,
  `so_nguoi` int(11) NOT NULL,
  `ghi_chu` text DEFAULT NULL,
  `trang_thai` varchar(150) DEFAULT '0',
  `ma_loai_ban` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `dat_ban`
--

INSERT INTO `dat_ban` (`ma_dat_ban`, `ten_kh`, `so_dien_thoai`, `ngay_dat`, `gio_dat`, `so_nguoi`, `ghi_chu`, `trang_thai`, `ma_loai_ban`) VALUES
(1, 'Trần Khải Đình', '0363055450', '2023-11-09', '08:12:13', 7, 'ngu', 'Đã xác nhận', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_dat_ban` int(11) DEFAULT NULL,
  `ma_khach_hang` varchar(20) DEFAULT NULL,
  `ten_khach_hang` varchar(255) NOT NULL,
  `ngay_tao` datetime DEFAULT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hoa_don`, `ma_dat_ban`, `ma_khach_hang`, `ten_khach_hang`, `ngay_tao`, `sdt`, `email`) VALUES
(1, NULL, 'admin', 'khải đình', '2023-11-22 10:57:31', 363055450, 'dinh@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(20) NOT NULL COMMENT 'mã khách hàng',
  `mat_khau` varchar(255) NOT NULL COMMENT 'mật khẩu',
  `ho_ten` varchar(150) NOT NULL COMMENT 'họ tên',
  `hinh` varchar(255) NOT NULL COMMENT 'hình ảnh',
  `email` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `kich_hoat` tinyint(4) DEFAULT NULL,
  `vai_tro` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `hinh`, `email`, `sdt`, `kich_hoat`, `vai_tro`) VALUES
('admin', '$argon2i$v=19$m=65536,t=4,p=1$VU1yb0E0RzdJQVJyUjdxdw$nx9dhZ1gJ8EJf4qmL7bj5gbEKA6RnUrVNH7oPSeUL9E', 'Trần Khải Đình', 'specials-4.png', 'admin@gmail.com.cu', 363055450, 1, 1),
('haomientay', '$argon2i$v=19$m=65536,t=4,p=1$UGZML3ZWZzMyZ0hhYkpMaA$RltKBoHVDj6onuMcum9tijqxxJpE7vbui7KnmmwMYto', 'Mai hảo hảo', 'specials-4.png', 'tkd25092003@gmail.com', 363055450, 1, 0),
('linhnhi', '8fce2616242fc3b6b64c5eb5ea0e26ed', 'Đình svpoly', 'mtc4.jpg', 'nhi@gmail.com', 363055450, 1, 0),
('phucngu', '202cb962ac59075b964b07152d234b70', 'Phan Hữu Phúc', 'specials-5.png', 'admin@gmail.com.cu', 363055450, 1, 0),
('youngtobi', '202cb962ac59075b964b07152d234b70', 'Ô bi tô', 'specials-4.png', 'dinh@gmail.com', 363055450, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_ban`
--

CREATE TABLE `loai_ban` (
  `ma_loai_ban` int(11) NOT NULL,
  `ten_loai_ban` varchar(255) NOT NULL,
  `mo_ta` text DEFAULT NULL,
  `trang_thai` varchar(100) NOT NULL COMMENT 'trạng thái'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_ban`
--

INSERT INTO `loai_ban` (`ma_loai_ban`, `ten_loai_ban`, `mo_ta`, `trang_thai`) VALUES
(2, 'Bàn tiệc ', '<p><strong>cccc</strong></p>', 'rùa'),
(4, 'Bàn sinh nhật', '<p><strong>Rùa</strong></p>', 'anh ba đầu rùa'),
(5, 'Bàn ngoài trời', '<p><strong>Bàn ấy</strong></p>', 'đầu rùa'),
(6, 'Bàn gia đình', '<p><strong>gia đình</strong></p>', 'cái đầu rùa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_mon`
--

CREATE TABLE `loai_mon` (
  `ma_loai_mon` int(6) NOT NULL COMMENT 'mã loại món ăn',
  `ten_loai_mon` varchar(100) NOT NULL COMMENT 'tên món ăn',
  `mo_ta` varchar(255) NOT NULL COMMENT 'mô tả'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_mon`
--

INSERT INTO `loai_mon` (`ma_loai_mon`, `ten_loai_mon`, `mo_ta`) VALUES
(6, 'Món tráng miện', '<p><strong>dùng để tráng miệng</strong></p>'),
(7, 'Món khai vị', '<p><strong>Dùng trước bửa ăn</strong></p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon_an`
--

CREATE TABLE `mon_an` (
  `ma_mon_an` int(6) NOT NULL COMMENT 'mã món ăn',
  `ten_mon_an` varchar(255) NOT NULL COMMENT 'Tên món ăn',
  `don_gia` varchar(255) NOT NULL COMMENT 'Đơn giá',
  `gia_giam` decimal(10,3) NOT NULL COMMENT 'giá giảm',
  `hinh` varchar(255) NOT NULL COMMENT 'hình ảnh',
  `mo_ta_mon` varchar(255) NOT NULL COMMENT 'mô tả món ăn',
  `dac_biet` tinyint(1) NOT NULL COMMENT 'đặc biệt hay không',
  `ngay_nhap` date NOT NULL COMMENT 'ngày nhập món',
  `luot_xem` int(6) NOT NULL COMMENT 'lượt xem',
  `ma_loai_mon` int(6) NOT NULL COMMENT 'mã loại món'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `mon_an`
--

INSERT INTO `mon_an` (`ma_mon_an`, `ten_mon_an`, `don_gia`, `gia_giam`, `hinh`, `mo_ta_mon`, `dac_biet`, `ngay_nhap`, `luot_xem`, `ma_loai_mon`) VALUES
(12, 'hành xào hẹ', '40000', 14998.000, 'specials-5.png', '<p><strong>ăn như đầu rùa</strong></p>', 0, '2023-11-26', 0, 7),
(13, 'Mì xào cơm', '60000', 12000.000, 'specials-1.png', '<p><strong>như con rùa</strong></p>', 0, '2023-11-26', 0, 6),
(14, 'Mì xào cơm', '60000', 12000.000, 'specials-1.png', '<p><strong>như con rùa</strong></p>', 0, '2023-11-26', 0, 6);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_binh_luan`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`),
  ADD KEY `fk_ma_mon_an` (`ma_mon_an`);

--
-- Chỉ mục cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD PRIMARY KEY (`ma_chi_tiet`),
  ADD KEY `ma_hoa_don` (`ma_hoa_don`),
  ADD KEY `ma_mon_an` (`ma_mon_an`);

--
-- Chỉ mục cho bảng `dat_ban`
--
ALTER TABLE `dat_ban`
  ADD PRIMARY KEY (`ma_dat_ban`),
  ADD KEY `ma_loai_ban` (`ma_loai_ban`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hoa_don`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`),
  ADD KEY `ma_dat_ban` (`ma_dat_ban`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `loai_ban`
--
ALTER TABLE `loai_ban`
  ADD PRIMARY KEY (`ma_loai_ban`);

--
-- Chỉ mục cho bảng `loai_mon`
--
ALTER TABLE `loai_mon`
  ADD PRIMARY KEY (`ma_loai_mon`);

--
-- Chỉ mục cho bảng `mon_an`
--
ALTER TABLE `mon_an`
  ADD PRIMARY KEY (`ma_mon_an`),
  ADD KEY `fk_loai_mon_mon` (`ma_loai_mon`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  MODIFY `ma_chi_tiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `dat_ban`
--
ALTER TABLE `dat_ban`
  MODIFY `ma_dat_ban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hoa_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `loai_ban`
--
ALTER TABLE `loai_ban`
  MODIFY `ma_loai_ban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `loai_mon`
--
ALTER TABLE `loai_mon`
  MODIFY `ma_loai_mon` int(6) NOT NULL AUTO_INCREMENT COMMENT 'mã loại món ăn', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `mon_an`
--
ALTER TABLE `mon_an`
  MODIFY `ma_mon_an` int(6) NOT NULL AUTO_INCREMENT COMMENT 'mã món ăn', AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khach_hang` (`ma_kh`),
  ADD CONSTRAINT `fk_ma_mon_an` FOREIGN KEY (`ma_mon_an`) REFERENCES `mon_an` (`ma_mon_an`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD CONSTRAINT `chi_tiet_hoa_don_ibfk_1` FOREIGN KEY (`ma_hoa_don`) REFERENCES `hoa_don` (`ma_hoa_don`),
  ADD CONSTRAINT `chi_tiet_hoa_don_ibfk_2` FOREIGN KEY (`ma_mon_an`) REFERENCES `mon_an` (`ma_mon_an`);

--
-- Các ràng buộc cho bảng `dat_ban`
--
ALTER TABLE `dat_ban`
  ADD CONSTRAINT `dat_ban_ibfk_1` FOREIGN KEY (`ma_loai_ban`) REFERENCES `loai_ban` (`ma_loai_ban`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_4` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khach_hang` (`ma_kh`),
  ADD CONSTRAINT `hoa_don_ibfk_5` FOREIGN KEY (`ma_dat_ban`) REFERENCES `dat_ban` (`ma_dat_ban`);

--
-- Các ràng buộc cho bảng `mon_an`
--
ALTER TABLE `mon_an`
  ADD CONSTRAINT `fk_loai_mon_mon` FOREIGN KEY (`ma_loai_mon`) REFERENCES `loai_mon` (`ma_loai_mon`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
