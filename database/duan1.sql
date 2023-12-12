-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2023 lúc 04:38 AM
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
(44, 'admin', 27, 'ok', '2023-12-03 17:23:35', 5),
(45, 'admin', 23, 'hi', '2023-12-04 10:45:49', 5),
(46, 'admin', 23, 'hihi', '2023-12-04 10:45:52', 5),
(47, 'admin', 23, 'huhu', '2023-12-04 10:45:57', 5),
(48, 'admin', 23, 'đầu bần', '2023-12-04 10:46:08', 5),
(49, 'admin', 23, 'c', '2023-12-04 10:46:49', 5),
(50, 'admin', 14, 'uk', '2023-12-04 10:47:06', 5),
(51, 'admin', 14, 'uk', '2023-12-04 10:47:08', 5),
(52, 'admin', 14, 'uk', '2023-12-04 10:47:10', 5),
(53, 'admin', 14, 'ok', '2023-12-04 10:47:13', 5),
(54, 'admin', 14, 'hi', '2023-12-04 10:47:16', 5),
(55, 'admin', 13, 'ngon nha', '2023-12-04 10:47:57', 5),
(56, 'admin', 13, 'tuyệt', '2023-12-04 10:48:05', 5),
(57, 'admin', 13, 'vip\r\n', '2023-12-04 10:48:09', 5),
(58, 'admin', 13, 'đầu bồi', '2023-12-04 10:48:17', 5),
(59, 'admin', 13, 'cc', '2023-12-04 10:48:20', 5),
(60, 'admin', 13, 'vip\r\n', '2023-12-04 10:52:22', 5),
(61, 'admin', 13, 'vip\r\n', '2023-12-04 10:53:02', 5),
(62, 'admin', 13, 'uk', '2023-12-04 10:56:32', 5),
(63, 'admin', 16, 'đừng nhìn anh khóc mới biết anh đau', '2023-12-04 10:56:54', 5),
(64, 'admin', 16, 'đừng nhìn em đi mới biết em tồn tại\r\n', '2023-12-04 10:57:04', 5),
(65, 'admin', 16, 'mấy đứa chúng mày liệu mà ăn cho nhiều', '2023-12-04 10:57:16', 5),
(66, 'admin', 16, 'ra bên ngoài học điều hay mang về', '2023-12-04 10:57:26', 5),
(67, 'admin', 12, 'ccc', '2023-12-04 11:00:19', 5),
(68, 'admin', 12, 'cc', '2023-12-04 11:00:22', 5),
(69, 'admin', 12, 'c', '2023-12-04 11:00:23', 5),
(70, 'admin', 12, '', '2023-12-04 11:00:25', 5),
(71, 'admin', 26, 'uk\r\n', '2023-12-04 11:07:48', 5),
(72, 'admin', 26, 'uk\r\n', '2023-12-04 11:08:53', 5),
(73, 'admin', 24, 'c', '2023-12-04 12:47:16', 5),
(74, 'admin', 24, 'ok dc', '2023-12-04 12:47:19', 5),
(75, 'admin', 24, 'ngona\r\n', '2023-12-04 12:47:25', 5),
(78, 'admin', 26, 'kể tử ngày đó 2 ta chẳng thấy nhau em sống ra sao yêu người thế nào ở nơi xa lạ nhiều lần nghĩ đến anh rồi hoài đêm đến làm sao dưem]]ưadđxxxxxxxxxxxxxxxxxxxxxxxxxxx', '2023-12-04 23:08:55', 5),
(79, 'admin', 25, 'Đầu rùa', '2023-12-05 18:21:36', 5),
(80, 'admin', 26, 'aksasasa', '2023-12-06 20:04:31', 5),
(81, 'admin', 26, 'có giờ nè', '2023-12-06 23:56:47', 5),
(82, 'admin', 27, 'phúc l', '2023-12-07 13:14:42', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_ban`
--

CREATE TABLE `dat_ban` (
  `ma_dat_ban` int(11) NOT NULL,
  `ma_kh` varchar(20) DEFAULT NULL,
  `ten_kh` varchar(255) DEFAULT NULL,
  `sdt` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ngay_dat` date DEFAULT NULL,
  `gio_dat` time DEFAULT NULL,
  `so_nguoi` int(11) DEFAULT NULL,
  `ma_loai_ban` int(11) DEFAULT NULL,
  `loi_nhan` text DEFAULT NULL,
  `trang_thai` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_mon_an` int(6) NOT NULL,
  `don_gia` double NOT NULL,
  `trang_thai` int(1) NOT NULL DEFAULT 0,
  `gia_giam` float NOT NULL,
  `so_luong` int(11) NOT NULL,
  `tong_tien` decimal(10,3) NOT NULL,
  `ngay_dat` datetime NOT NULL,
  `phuong_thuc` int(11) NOT NULL,
  `sdt` int(11) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `ma_kh` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

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
('admin', '$argon2i$v=19$m=65536,t=4,p=1$cFZsSENncllEdTQ2blRBcA$d8a7UCb3PeqUt4URC4977+Xa4dAZV2pnKyI6d1ktMns', 'Trần Khải Đình', 'bo-fu-ji.jpg', 'dinhtkpc06914@fpt.edu.vn', 363055460, 1, 1, 'Ninh kiều cần câu'),
('dinhtran', '$argon2i$v=19$m=65536,t=4,p=1$ak1LN1hreFRhektXVUhFVg$rtSsv6DLVqM1dDsOj02DGmws43pMh0/w/vHau4EayEA', 'Đình trần vn', 'salad-roket.jpg', 'tkd25092003@gmail.com', 363055450, 1, 0, 'Ninh kiều cần thơ cái răng bờ kè'),
('linhnhi', '8fce2616242fc3b6b64c5eb5ea0e26ed', 'Đình svpoly', 'mtc4.jpg', 'nhi@gmail.com', 363055450, 1, 0, ''),
('ongtroi', '$argon2i$v=19$m=65536,t=4,p=1$S2xISjNyb1ZQQ3pla3VpWg$0u+7UQKq/3VlfOXj/HYc1ncz0Ud18kTpALEPnfrZbz0', 'trời ơi đất hởi', 'spinach-salad.jpg', 'troi@gmail.com', 363055450, 1, 0, 'Ninh kiều cần thơ cái răng bờ kè'),
('tinh123', '$argon2i$v=19$m=65536,t=4,p=1$MGl3TUN3d1N6Z3FUT3dOZQ$F8wd9TJOJNQAdqZLTe4WRqE9wixvc621eB6eovF+eJY', 'Phan Văn Tính', 'about-bg.jpg', ' admin@gmail.com.cu', 363055450, 1, 0, 'Ninh kiều cần thơ cái răng bờ kè'),
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
(5, 'Bàn ngoài trời', '<p><strong>Bàn ấy</strong></p>', 'đầu rùa'),
(11, 'Bàn gia đình', '<p>gia đình&nbsp;</p>', ' trống');

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
(11, 'Món chiên , xào', '<p><i><strong>Món ngu ngục&nbsp;</strong></i></p>');

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
(12, 'Thịt trâu gác bếp ', '150000', 20000.000, 'trau-gac-bep.jpg', '<p><strong>Món \"Thịt trâu gác bếp\" sẽ là một sự kết hợp tuyệt vời giữa hương vị đặc trưng của thịt trâu, mùi thơm của lá thơm, và sự độc đáo của các gia vị. Đây có thể là một bữa ăn đặc sắc và lôi cuốn cho những người thưởng thức ẩm thực sáng tạo.</strong', 0, '2023-11-26', 6, 8),
(13, 'Sườn cừu sốt lá thơm', '220000', 30000.000, 'suon-cuu.jpg', '<p><strong>Sườn cừu sốt lá thơm là một món ăn phức tạp và ngon miệng, nơi hương vị thơm ngon của lá thơm kết hợp với độ mềm mịn và đặc trưng của sườn cừu, không chỉ mang lại hương vị thơm ngon đặc trưng của lá thơm mà còn tận dụng được hương vị độc đáo củ', 0, '2023-11-26', 44, 8),
(14, 'Salads hoa quả tôm', '155000', 25000.000, 'salad-hoa-qua.jpg', 'Salad hoa quả tôm là một món ăn nhẹ, tươi mới và đầy dinh dưỡng, kết hợp giữa hương vị ngọt ngào của hoa quả và độ ngon của tôm,Món ăn này không chỉ làm hài lòng khẩu vị mà còn mang lại trải nghiệm ẩm thực sáng tạo và lành mạnh.', 0, '2023-11-26', 56, 10),
(15, 'Salad mầm cải thịt bò', '120000', 25000.000, 'salad-mam-cai.jpg', '<p>Salad mầm cải thịt bò không chỉ ngon miệng mà còn cung cấp nhiều dưỡng chất từ rau củ và thịt bò. Hương vị tươi mới và sự kết hợp độc đáo giữa mầm cải và thịt bò làm cho món salad trở thành một lựa chọn ăn nhẹ hoàn hảo cho bữa trưa hoặc bữa tối.</p>', 0, '2023-11-29', 30, 10),
(16, ' Lườn ngỗng xông khói', '165000', 50000.000, 'salad-roket.jpg', 'Lườn ngỗng xông khói là một món ăn thơm ngon và phổ biến trong nhiều nền văn hóa. Dưới đây là một mô tả tưởng tượng về lườn ngỗng xông khói:', 0, '2023-11-29', 19, 8),
(23, 'Salad rong biển trứng cua', '125000', 25000.000, 'salad-rong-bien.jpg', 'Salad rong biển trứng cua là một món ăn nhẹ và đầy dinh dưỡng, kết hợp giữa hương vị biển cả của rong biển và độ thơm ngon của trứng cua. Dưới đây là một mô tả tưởng tượng về món salad này:', 0, '2023-11-29', 14, 10),
(24, 'Bò Fuji nướng ', '450000', 120000.000, 'bo-fu-ji.jpg', '<p>Bò Fuji nướng là một món ăn độc đáo và ngon miệng, được chế biến từ những miếng thịt bò chất lượng cao, được ướp gia vị và nướng chín tới mức độ hoàn hảo. Tên gọi \"Fuji\" có thể xuất phát từ sự kết hợp của hương vị phong phú và hình dáng nấu ăn sáng tạo', 1, '2023-11-30', 72, 8),
(25, 'Phô mai dây', '120000', 15000.000, 'pho-mai-day.jpg', '<p><strong>Phô mai dây là một món ăn nhẹ và thú vị, thường được làm từ phô mai mềm và đàn hồi. Được biết đến với hình dạng dạng sợi, phô mai dây có thể được cuộn lại thành các cuộn nhỏ giống như dây, tạo nên một hình thức độc đáo và thú vị.</strong></p>', 0, '2023-11-30', 2, 7),
(26, 'Lườn ngỗng áp chảo', '150000', 30000.000, 'luon-nghong.jpg', '<p>Lườn ngỗng áp chảo là một món ăn sang trọng và đặc sắc, nổi bật với sự kết hợp tinh tế giữa thịt ngỗng tươi ngon và các loại gia vị hảo huyền. Đầu tiên, lườn ngỗng được chuẩn bị một cách cẩn thận</p>', 1, '2023-11-30', 408, 11),
(27, 'Cồi sò xào ngủ sắc', '190000', 15000.000, 'coi-xo-xao.jpg', '<p>Cồi sò xào ngủ sắc là một món hấp dẫn và hương vị độc đáo, đậm đà biểu tượng cho hương vị biển cả. Nhìn chung, món ăn này bắt đầu với những cồi sò tươi ngon, được lựa chọn kỹ lưỡng và làm sạch.</p>', 1, '2023-11-30', 13, 11);

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
  ADD UNIQUE KEY `ma_kh` (`ma_kh`);

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
  MODIFY `ma_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `dat_ban`
--
ALTER TABLE `dat_ban`
  MODIFY `ma_dat_ban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hoa_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `loai_ban`
--
ALTER TABLE `loai_ban`
  MODIFY `ma_loai_ban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  ADD CONSTRAINT `dat_ban_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`ma_mon_an`) REFERENCES `mon_an` (`ma_mon_an`) ON DELETE CASCADE,
  ADD CONSTRAINT `hoa_don_ibfk_2` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `mon_an`
--
ALTER TABLE `mon_an`
  ADD CONSTRAINT `fk_loai_mon_mon` FOREIGN KEY (`ma_loai_mon`) REFERENCES `loai_mon` (`ma_loai_mon`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
