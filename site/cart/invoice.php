<?php

require '../../global.php';
require '../../dao/mon_an.php';
require '../../dao/hoa_don.php';
require '../../dao/khach_hang.php';
extract($_REQUEST);
if (exist_param("btn_thanh_toan")) {
    $hinh = $_POST['hinh'];
  
    // Giả sử hoa_don_insert trả về ma_hd đã được chèn
  
    $ma_hoa_don = hoa_don_insert(null,$ma_mon_an,$don_gia, $tong_tien, $gia_giam,$so_luong, date("Y-m-d H:i:s"), $phuong_thuc,$sdt,$dia_chi,$ho_ten,$ma_kh);
    unset($_SESSION['total_cart']);
    unset($_SESSION['cart']);
    // Chuyển hướng sau khi xử lý
    header("location: ../cart/hoadon.php");
    exit();
}
 else if (exist_param("btn_details")) {
    $ma_hoa_don = $_GET['btn_details'];
    $order = hoa_don_select_by_id($ma_hoa_don);
    extract($order);
    $order2 = getFullOrderInformation($ma_hoa_don);
    $VIEW_NAME = "../cart/chi-tiet-hoa-don.php";
} else {
    $VIEW_NAME = "../cart/list-hoadon.php";
}



require "../layout.php";

