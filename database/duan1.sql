-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2023 lúc 07:33 AM
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
  `ma_ban` int(11) NOT NULL,
  `ma_loai_ban` int(11) DEFAULT NULL,
  `ten_ban` varchar(255) DEFAULT NULL,
  `suc_chua` int(11) NOT NULL COMMENT 'suc chua',
  `trang_thai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `ban_an`
--

INSERT INTO `ban_an` (`ma_ban`, `ma_loai_ban`, `ten_ban`, `suc_chua`, `trang_thai`) VALUES
(3, 2, 'cccccccc', 0, 'ccc'),
(9, 2, 'bàn inox', 5, ' ngu'),
(12, 2, 'bàn á đù', 7, '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_binh_luan` int(11) NOT NULL,
  `ma_khach_hang` varchar(20) DEFAULT NULL,
  `ma_mon_an` int(11) DEFAULT NULL,
  `noi_dung` text NOT NULL,
  `ngay_binh_luan` datetime NOT NULL
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
  `thanh_tien` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_ban`
--

CREATE TABLE `dat_ban` (
  `ma_dat_ban` int(11) NOT NULL,
  `ten_khachhang` varchar(255) NOT NULL,
  `so_dien_thoai` varchar(15) NOT NULL,
  `ngay_dat` date NOT NULL,
  `gio_dat` time NOT NULL,
  `so_nguoi` int(11) NOT NULL,
  `ghi_chu` text DEFAULT NULL,
  `trang_thai` int(11) DEFAULT 0,
  `ma_ban` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_ban` int(11) DEFAULT NULL,
  `ma_khach_hang` varchar(20) DEFAULT NULL,
  `ngay_tao` datetime DEFAULT NULL,
  `tong_tien` decimal(10,2) DEFAULT NULL,
  `trang_thai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(20) NOT NULL COMMENT 'mã khách hàng',
  `mat_khau` varchar(150) NOT NULL COMMENT 'mật khẩu',
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
('haomientay', '664a1b50ea33727a8ad898e8c1f5f079', 'Mai hảo hảo', 'freeship.png', 'admin@gmail.com.cu', 363055459, 1, 1),
('linhnhi', '123', 'Linh Nhi', 'mtc4.jpg', 'nhi@gmail.com', 363055450, 1, 1),
('phucngu', '7363a0d0604902af7b70b271a0b96480', 'Phan Hữu Phúc', 'mx3.jpg', 'phatcc@gmail.com', 363033334, 7, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_ban`
--

CREATE TABLE `loai_ban` (
  `ma_loai_ban` int(11) NOT NULL,
  `ten_loai_ban` varchar(255) NOT NULL,
  `mo_ta` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_ban`
--

INSERT INTO `loai_ban` (`ma_loai_ban`, `ten_loai_ban`, `mo_ta`) VALUES
(2, 'Bàn gia đình đẹp trai', '  gia đình mới được đặt nha cưnhg'),
(4, 'Bàn ngoài trời', ' ngoài trời có mây'),
(5, 'Bàn inox', ' cccc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_mon`
--

CREATE TABLE `loai_mon` (
  `ma_loai_mon` int(6) NOT NULL COMMENT 'mã loại món ăn',
  `ten_loai_mon` varchar(100) NOT NULL COMMENT 'tên món ăn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon_an`
--

CREATE TABLE `mon_an` (
  `ma_mon_an` int(6) NOT NULL COMMENT 'mã món ăn',
  `ten` varchar(255) NOT NULL COMMENT 'Tên món ăn',
  `don_gia` varchar(255) NOT NULL COMMENT 'Đơn giá',
  `gia_giam` decimal(10,3) NOT NULL COMMENT 'giá giảm',
  `hinh` varchar(255) NOT NULL COMMENT 'hình ảnh',
  `mo_ta` varchar(255) NOT NULL COMMENT 'mô tả món ăn',
  `dac_biet` tinyint(1) NOT NULL COMMENT 'đặc biệt hay không',
  `ngay_nhap` date NOT NULL COMMENT 'ngày nhập món',
  `luot_xem` int(6) NOT NULL COMMENT 'lượt xem',
  `id_loai_mon` int(6) NOT NULL COMMENT 'mã loại món'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ban_an`
--
ALTER TABLE `ban_an`
  ADD PRIMARY KEY (`ma_ban`),
  ADD KEY `ma_loai_ban` (`ma_loai_ban`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_binh_luan`),
  ADD KEY `fk_ma_mon_an` (`ma_mon_an`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`);

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
  ADD KEY `ma_ban` (`ma_ban`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hoa_don`),
  ADD KEY `ma_ban` (`ma_ban`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`);

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
  ADD KEY `id_loai_mon` (`id_loai_mon`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ban_an`
--
ALTER TABLE `ban_an`
  MODIFY `ma_ban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_binh_luan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  MODIFY `ma_chi_tiet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dat_ban`
--
ALTER TABLE `dat_ban`
  MODIFY `ma_dat_ban` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hoa_don` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai_ban`
--
ALTER TABLE `loai_ban`
  MODIFY `ma_loai_ban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loai_mon`
--
ALTER TABLE `loai_mon`
  MODIFY `ma_loai_mon` int(6) NOT NULL AUTO_INCREMENT COMMENT 'mã loại món ăn';

--
-- AUTO_INCREMENT cho bảng `mon_an`
--
ALTER TABLE `mon_an`
  MODIFY `ma_mon_an` int(6) NOT NULL AUTO_INCREMENT COMMENT 'mã món ăn';

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ban_an`
--
ALTER TABLE `ban_an`
  ADD CONSTRAINT `ban_an_ibfk_1` FOREIGN KEY (`ma_loai_ban`) REFERENCES `loai_ban` (`ma_loai_ban`);

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khach_hang` (`ma_kh`),
  ADD CONSTRAINT `fk_ma_mon_an` FOREIGN KEY (`ma_mon_an`) REFERENCES `mon_an` (`ma_mon_an`);

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
  ADD CONSTRAINT `dat_ban_ibfk_1` FOREIGN KEY (`ma_ban`) REFERENCES `ban_an` (`ma_ban`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_3` FOREIGN KEY (`ma_ban`) REFERENCES `ban_an` (`ma_ban`),
  ADD CONSTRAINT `hoa_don_ibfk_4` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `mon_an`
--
ALTER TABLE `mon_an`
  ADD CONSTRAINT `fk_loai_mon_mon` FOREIGN KEY (`id_loai_mon`) REFERENCES `loai_mon` (`ma_loai_mon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
