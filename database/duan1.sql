-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 03, 2023 lúc 02:38 PM
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
  `ma_kh` varchar(20) DEFAULT NULL,
  `ma_mon_an` int(11) DEFAULT NULL,
  `noi_dung` text NOT NULL,
  `ngay_binh_luan` datetime NOT NULL,
  `xep_hang` int(11) NOT NULL COMMENT 'xếp hạng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_binh_luan`, `ma_kh`, `ma_mon_an`, `noi_dung`, `ngay_binh_luan`, `xep_hang`) VALUES
(39, 'admin', 26, 'cccccccccc\r\n', '2023-12-03 15:14:55', 5),
(40, 'admin', 26, 'cccccccccccccccccc', '2023-12-03 15:14:57', 5),
(41, 'admin', 26, 'ok', '2023-12-03 15:15:26', 5),
(42, 'admin', 24, 'món này ăn cũng đại khái thôi', '2023-12-03 15:35:39', 5),
(43, 'admin', 27, 'ok', '2023-12-03 17:23:31', 5),
(44, 'admin', 27, 'ok', '2023-12-03 17:23:35', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_ban`
--

CREATE TABLE `dat_ban` (
  `ma_dat_ban` int(11) NOT NULL,
  `ma_kh` varchar(20) NOT NULL,
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

INSERT INTO `dat_ban` (`ma_dat_ban`, `ma_kh`, `so_dien_thoai`, `ngay_dat`, `gio_dat`, `so_nguoi`, `ghi_chu`, `trang_thai`, `ma_loai_ban`) VALUES
(1, '', '0363055450', '2023-11-09', '08:12:13', 7, 'ngu', 'Đã xác nhận', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_mon_an` int(6) NOT NULL,
  `trang_thai` int(1) NOT NULL DEFAULT 0,
  `gia_giam` float NOT NULL,
  `tong_tien` double NOT NULL,
  `ngay_dat` datetime NOT NULL,
  `phuong_thuc` int(11) NOT NULL,
  `ma_kh` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hoa_don`, `ma_mon_an`, `trang_thai`, `gia_giam`, `tong_tien`, `ngay_dat`, `phuong_thuc`, `ma_kh`) VALUES
(2, 26, 2, 30000, 120, '2023-12-03 08:56:19', 0, 'admin'),
(3, 26, 0, 30000, 120, '2023-12-03 08:56:49', 0, 'admin'),
(4, 24, 0, 120000, 460, '2023-12-03 08:59:40', 0, 'admin'),
(5, 26, 0, 30000, 480, '2023-12-03 09:34:45', 0, 'admin'),
(6, 14, 0, 25000, 130, '2023-12-03 09:37:18', 0, 'admin');

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
  `vai_tro` tinyint(4) DEFAULT NULL,
  `dia_chi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `hinh`, `email`, `sdt`, `kich_hoat`, `vai_tro`, `dia_chi`) VALUES
('admin', '$argon2i$v=19$m=65536,t=4,p=1$a29DR08yUi8wTGh6aVpaSg$CxI8FVX3377IL+ENwEQfbxaoPpB1xlR8ABh14vkqipc', 'Trần Khải Đình', 'bo-fu-ji.jpg', 'admin@gmail.com.cu', 363055460, 1, 1, 'Ninh kiều cần câu'),
('haomientay', '$argon2i$v=19$m=65536,t=4,p=1$a3ltRXVjWVhTUS9FZkpzeA$waKWs2TpKbr4tQGwyGvtvyptj5IQhmpGcNM2U9As1zQ', 'Mai hảo hảo', 'salad-mam-cai.jpg', 'dinhtkpc06914@fpt.edu.vn', 363055450, 1, 0, 'Ninh kiều cần thơ '),
('linhnhi', '8fce2616242fc3b6b64c5eb5ea0e26ed', 'Đình svpoly', 'mtc4.jpg', 'nhi@gmail.com', 363055450, 1, 0, ''),
('phatculua', '$argon2i$v=19$m=65536,t=4,p=1$T1FIOVhBLmxHaUUyaGZieg$Ccqd5P9KBPtMfDIoCepd6QmRLfyIlD9SzkNARa7w6/0', 'Ngyễn Thành Phát', 'cu-sen-chien.jpg', 'phatcc@gmail.com', 363055450, 1, 0, 'cái răng cần thơ'),
('phucngu', '202cb962ac59075b964b07152d234b70', 'Phan Hữu Phúc', 'specials-5.png', 'admin@gmail.com.cu', 363055450, 1, 0, ''),
('youngtobi', '202cb962ac59075b964b07152d234b70', 'Ô bi tô', 'specials-4.png', 'dinh@gmail.com', 363055450, 1, 1, '');

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
(5, 'Bàn ngoài trời', '<p><strong>Bàn ấy</strong></p>', 'đầu rùa');

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
(6, 'Món tráng miện', '<p><strong>dùng sau bửa ăn</strong></p>'),
(7, 'Món khai vị', '<p><strong>dùng trước bửa ăn</strong></p>'),
(8, 'Món nướng', '<p><strong>Dùng trong bửa ăn chính</strong></p>'),
(10, 'Salads', '<p>xà lách&nbsp;</p>'),
(11, 'Món chiên , xào', '<p>chiên xào</p>');

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
(12, 'Thịt trâu gác bếp ', '150000', 20000.000, 'trau-gac-bep.jpg', '<p><strong>Thịt trâu được treo gác bếp ăn với chẩm  chéo</strong></p>', 0, '2023-11-26', 0, 8),
(13, 'Sườn cừu sốt lá thơm', '220000', 30000.000, 'suon-cuu.jpg', '<p><strong>như con rùa</strong></p>', 0, '2023-11-26', 8, 8),
(14, 'Salads hoa quả tôm', '155000', 25000.000, 'salad-hoa-qua.jpg', 'Salad hoa quả tôm', 0, '2023-11-26', 47, 11),
(15, 'Salad mầm cải thịt bò', '120000', 25000.000, 'salad-mam-cai.jpg', '<p>như ăn lẩu</p>', 0, '2023-11-29', 30, 10),
(16, ' Lườn ngỗng xông khói', '165000', 50000.000, 'salad-roket.jpg', 'Salad rau rocket lườn ngỗng xông khói', 0, '2023-11-29', 5, 8),
(18, 'Salad rau xanh', '100000', 20000.000, 'greek-salad.jpg', 'Salad rau xanh', 0, '2023-11-29', 0, 10),
(23, 'Salad rong biển trứng cua', '125000', 25000.000, 'salad-rong-bien.jpg', 'Là một món ăn được kết hợp từ các loại rau và trứng cua', 0, '2023-11-29', 1, 10),
(24, 'Bò Fuji nướng ', '450000', 120000.000, 'bo-fu-ji.jpg', '<p>Miếng bò Fujji nướng ăn kèm với ngô và khoai tây chiên</p>', 1, '2023-11-30', 39, 6),
(25, 'Phô mai dây', '120000', 15000.000, 'pho-mai-day.jpg', '<p><strong>Phô mai dây dai mềm mặn béo</strong></p>', 0, '2023-11-30', 0, 7),
(26, 'Lườn ngỗng áp chảo', '150000', 30000.000, 'luon-nghong.jpg', '<p>Lườn ngỗng áp chảo bú dô cái body </p>', 1, '2023-11-30', 240, 6),
(27, 'Cồi sò xào ngủ sắc', '190000', 15000.000, 'coi-xo-xao.jpg', '<p>Cồi sò xào ngủ sắc</p>', 1, '2023-11-30', 8, 6);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_binh_luan`),
  ADD KEY `ma_khach_hang` (`ma_kh`),
  ADD KEY `fk_ma_mon_an` (`ma_mon_an`);

--
-- Chỉ mục cho bảng `dat_ban`
--
ALTER TABLE `dat_ban`
  ADD PRIMARY KEY (`ma_dat_ban`),
  ADD KEY `ma_loai_ban` (`ma_loai_ban`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hoa_don`),
  ADD KEY `ma_mon_an` (`ma_mon_an`),
  ADD KEY `phuong_thuc` (`phuong_thuc`),
  ADD KEY `ma_kh` (`ma_kh`),
  ADD KEY `ma_mon_an_2` (`ma_mon_an`);

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
  ADD KEY `fk_loai_mon_mon` (`ma_loai_mon`),
  ADD KEY `ma_mon_an` (`ma_mon_an`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `dat_ban`
--
ALTER TABLE `dat_ban`
  MODIFY `ma_dat_ban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hoa_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `loai_ban`
--
ALTER TABLE `loai_ban`
  MODIFY `ma_loai_ban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `loai_mon`
--
ALTER TABLE `loai_mon`
  MODIFY `ma_loai_mon` int(6) NOT NULL AUTO_INCREMENT COMMENT 'mã loại món ăn', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `mon_an`
--
ALTER TABLE `mon_an`
  MODIFY `ma_mon_an` int(6) NOT NULL AUTO_INCREMENT COMMENT 'mã món ăn', AUTO_INCREMENT=28;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`),
  ADD CONSTRAINT `fk_ma_mon_an` FOREIGN KEY (`ma_mon_an`) REFERENCES `mon_an` (`ma_mon_an`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `dat_ban`
--
ALTER TABLE `dat_ban`
  ADD CONSTRAINT `dat_ban_ibfk_1` FOREIGN KEY (`ma_loai_ban`) REFERENCES `loai_ban` (`ma_loai_ban`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`ma_mon_an`) REFERENCES `mon_an` (`ma_mon_an`),
  ADD CONSTRAINT `hoa_don_ibfk_2` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `mon_an`
--
ALTER TABLE `mon_an`
  ADD CONSTRAINT `fk_loai_mon_mon` FOREIGN KEY (`ma_loai_mon`) REFERENCES `loai_mon` (`ma_loai_mon`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
