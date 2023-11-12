-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2023 lúc 03:18 AM
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
-- Cấu trúc bảng cho bảng `ban_an`
--

CREATE TABLE `ban_an` (
  `id` int(11) NOT NULL COMMENT 'Mã phòng',
  `ten` varchar(50) NOT NULL COMMENT 'Tên Hàng Hóa',
  `don_gia` double(10,2) NOT NULL COMMENT 'Đơn Giá',
  `gia_giam` double(10,2) DEFAULT 0.00 COMMENT 'Giảm Giá',
  `hinh` varchar(50) NOT NULL COMMENT 'Hình Ảnh',
  `ngay_nhap` date DEFAULT NULL COMMENT 'Ngày Nhập Hàng',
  `mo_ta` text NOT NULL COMMENT 'Mô Tả',
  `dac_biet` tinyint(1) NOT NULL COMMENT 'Đặc Biệt',
  `luot_xem` int(11) NOT NULL DEFAULT 0 COMMENT 'Số Lượt Xem',
  `id_loai` int(10) NOT NULL COMMENT 'Mã Loại'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ban_an`
--

INSERT INTO `ban_an` (`id`, `ten`, `don_gia`, `gia_giam`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `luot_xem`, `id_loai`) VALUES
(1, 'Kem sữa dừa', 20000.00, 15000.00, 'product-4.jpg', '2023-10-07', 'Một loại kem mang hương vị của quê hương được làm từ những trái dừa khô và sữa bò .', 1, 80, 1),
(3, 'Kem chuối', 10000.00, 8000.00, 'kem-chuoi.jpg', '2023-10-07', 'Kem chuối là một món tráng miệng phổ biến ở Việt Nam. Nó được làm từ kem vani và chuối tươ', 0, 16, 2),
(4, 'Kem sữa chua', 15000.00, 12000.00, 'kem-sua-chua.png', '2023-10-07', 'Loại kem này được làm từ kem và sữa chua. Hương vị của kem sữa chua thường ngọt nhẹ và có chút chua từ sữa chua.', 0, 2, 2),
(5, 'Kem bơ phủ socola', 10000.00, 1000.00, 'kem-bo.jpg', '2023-10-21', 'Kem bơ phủ socola là một loại kem rất phổ biến và ngon miệng. Để làm kem bơ phủ socola, người ta thường sử dụng bơ và socola làm thành phần chính. Dưới đây là cách làm kem bơ phủ socola đơn giản:', 1, 0, 23),
(6, 'Kem đậu đỏ', 12000.00, 2000.00, 'kem-dau-do.jpg', '2023-10-21', 'Kem đậu đỏ, hay còn gọi là kem đậu phộng đỏ, là một món tráng miệng phổ biến trong ẩm thực Á Đông, bao gồm cả Việt Nam. Đây là một loại kem thơm ngon và có màu đỏ tự nhiên nhờ sử dụng đậu đỏ làm thành phần chính.', 1, 0, 23),
(7, 'Half and half', 30000.00, 8000.00, 'kem-tuoi-1.jpg', '2023-10-21', 'Kem Half and Half là một loại kem phổ biến ở Mỹ và một số quốc gia khác. \"Half and Half\" trong tiếng Anh có nghĩa là \"một nửa và một nửa\", và loại kem này thường được làm bằng cách kết hợp một phần sữa và một phần kem.', 0, 0, 25),
(8, 'Light Whipping cream', 50000.00, 5000.00, 'kem-tuoi-2.jpg', '2023-10-21', 'Kem Light Whipping Cream là một phiên bản kem nhẹ hơn của kem whipping cream truyền thống. Nó có nồng độ chất béo thấp hơn, thường từ 30-35% so với 35-40% của kem whippping cream thông thường. Kem Light Whipping Cream thường được sử dụng để làm kem đánh bông nhẹ hoặc làm phụ gia cho các món tráng miệng khác.', 1, 0, 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(6) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `id_ban` int(6) NOT NULL,
  `id_kh` int(6) NOT NULL,
  `ngay_bl` date NOT NULL,
  `xep_hang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(6) NOT NULL,
  `sdt` int(11) NOT NULL,
  `dia_chi` int(255) NOT NULL,
  `tong_tien` decimal(10,3) NOT NULL,
  `id_kh` int(6) NOT NULL,
  `ngay_dat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don_ct`
--

CREATE TABLE `hoa_don_ct` (
  `id` int(6) NOT NULL,
  `id_ban` int(6) NOT NULL,
  `id_mon` int(6) NOT NULL,
  `don_gia` decimal(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(6) NOT NULL COMMENT 'tên đăng nhập',
  `mat_khau` varchar(50) NOT NULL COMMENT 'mật khẩu',
  `ho_ten` varchar(100) NOT NULL COMMENT 'họ tên',
  `hinh` varchar(50) NOT NULL COMMENT 'hình ',
  `email` varchar(250) NOT NULL COMMENT 'email',
  `sdt` int(11) NOT NULL COMMENT 'sô điện thoại'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `hinh`, `email`, `sdt`) VALUES
(1, 'd9b1d7db4cd6e70935368a1efb10e377', 'Trần Khải Đìn', 'mx2.jpg', 'tkd25092003@gmail.com', 363055450),
(4, '7363a0d0604902af7b70b271a0b96480', 'Quách Nguyễn ', 'mv3.jpg', 'truc@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_ban`
--

CREATE TABLE `loai_ban` (
  `id` int(10) NOT NULL COMMENT 'Mã Loại Hàng',
  `ten` varchar(50) NOT NULL COMMENT 'Tên Loại '
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_ban`
--

INSERT INTO `loai_ban` (`id`, `ten`) VALUES
(1, 'Kem ký'),
(2, 'Kem truyền thống'),
(23, 'Kem cây'),
(24, 'Kem Sandwich'),
(25, 'Kem tươi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_mon`
--

CREATE TABLE `loai_mon` (
  `id` int(6) NOT NULL COMMENT 'mã loại món ăn',
  `ten` varchar(100) NOT NULL COMMENT 'tên món ăn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon_an`
--

CREATE TABLE `mon_an` (
  `id` int(6) NOT NULL COMMENT 'mã món ăn',
  `ten` varchar(100) NOT NULL COMMENT 'Tên món ăn',
  `don_gia` varchar(255) NOT NULL COMMENT 'Đơn giá',
  `gia_giam` decimal(10,3) NOT NULL COMMENT 'giá giảm',
  `hinh` varchar(255) NOT NULL COMMENT 'hình ảnh',
  `mo_ta` varchar(255) NOT NULL COMMENT 'mô tả món ăn',
  `dac_biet` tinyint(1) NOT NULL COMMENT 'đặc biệt hay không',
  `luot_xem` int(6) NOT NULL COMMENT 'lượt xem',
  `id_loai_mon` int(6) NOT NULL COMMENT 'mã loại món'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `ma_nv` int(20) NOT NULL COMMENT 'mã nhân viên',
  `ho_ten` varchar(150) NOT NULL COMMENT 'họ tên',
  `mat_khau` varchar(50) NOT NULL COMMENT 'mật khẩu',
  `hinh` varchar(250) NOT NULL COMMENT 'hình',
  `email` varchar(255) NOT NULL COMMENT 'email',
  `sdt` int(11) NOT NULL COMMENT 'sdt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`ma_nv`, `ho_ten`, `mat_khau`, `hinh`, `email`, `sdt`) VALUES
(2, 'mai hảo hửi', '', 'mn2.jpg', 'admin@gmail.com.cu', 363055450);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ban_an`
--
ALTER TABLE `ban_an`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_hh` (`id`),
  ADD KEY `ma_loai` (`id_loai`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bl_ban` (`id_ban`),
  ADD KEY `id_kh` (`id_kh`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hoadon_kh` (`id_kh`);

--
-- Chỉ mục cho bảng `hoa_don_ct`
--
ALTER TABLE `hoa_don_ct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hoadonct_ban` (`id_ban`),
  ADD KEY `id_mon` (`id_mon`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`),
  ADD UNIQUE KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `loai_ban`
--
ALTER TABLE `loai_ban`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_mon`
--
ALTER TABLE `loai_mon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mon_an`
--
ALTER TABLE `mon_an`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loai_mon` (`id_loai_mon`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`ma_nv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ban_an`
--
ALTER TABLE `ban_an`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã phòng', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(6) NOT NULL AUTO_INCREMENT COMMENT 'tên đăng nhập', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loai_ban`
--
ALTER TABLE `loai_ban`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Mã Loại Hàng', AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `loai_mon`
--
ALTER TABLE `loai_mon`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT COMMENT 'mã loại món ăn';

--
-- AUTO_INCREMENT cho bảng `mon_an`
--
ALTER TABLE `mon_an`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT COMMENT 'mã món ăn';

--
-- AUTO_INCREMENT cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `ma_nv` int(20) NOT NULL AUTO_INCREMENT COMMENT 'mã nhân viên', AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ban_an`
--
ALTER TABLE `ban_an`
  ADD CONSTRAINT `ban_an_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `loai_ban` (`id`);

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`id_kh`) REFERENCES `khach_hang` (`ma_kh`),
  ADD CONSTRAINT `fk_bl_ban` FOREIGN KEY (`id_ban`) REFERENCES `ban_an` (`id`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `fk_hoadon_kh` FOREIGN KEY (`id_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `hoa_don_ct`
--
ALTER TABLE `hoa_don_ct`
  ADD CONSTRAINT `fk_hoadonct_ban` FOREIGN KEY (`id_ban`) REFERENCES `ban_an` (`id`),
  ADD CONSTRAINT `hoa_don_ct_ibfk_1` FOREIGN KEY (`id_mon`) REFERENCES `mon_an` (`id`);

--
-- Các ràng buộc cho bảng `mon_an`
--
ALTER TABLE `mon_an`
  ADD CONSTRAINT `fk_loai_mon_mon` FOREIGN KEY (`id_loai_mon`) REFERENCES `loai_mon` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
