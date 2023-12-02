<?php
require '../../global.php';
require '../../dao/mon_an.php';
require '../../dao/binh_luan.php';
//-------------------------------//

extract($_REQUEST);

// Truy vấn mặt hàng theo mã lấy nó ra để hiện thị
$mon_an = mon_an_select_by_id($ma_mon_an);
extract($mon_an);

// Tăng số lượt xem lên 1
mon_an_tang_so_luot_xem($ma_mon_an);
// Thiết lập múi giờ cho Việt Nam (ICT)
date_default_timezone_set('Asia/Ho_Chi_Minh');
// Hàng cùng Loại
$mon_an_cung_loai = mon_an_select_by_loai($ma_loai_mon);

if (exist_param("noi_dung")) {
    $ma_kh = $_SESSION['user']['ma_kh'];
    $ngay_binh_luan = date('Y-m-d H:i:s'); // Lấy ngày và giờ hiện tại theo múi giờ Việt Nam
    binh_luan_insert($ma_kh, $ma_mon_an, $noi_dung, $ngay_binh_luan, $xep_hang);
}

// Lấy list bình luận ra
$binh_luan_list = binh_luan_select_by_mon_an($ma_mon_an, 3);

$VIEW_NAME = "mon-an/chi-tiet-ui.php";
require '../layout.php';
?>
