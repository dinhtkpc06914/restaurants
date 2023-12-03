<?php

require '../../global.php';
require '../../dao/mon_an.php';
require '../../dao/hoa_don.php';

extract($_REQUEST);
if (exist_param("btn_thanh_toan")) {
    // Giả sử hoa_don_insert trả về ma_hd đã được chèn
    $ma_hoa_don = hoa_don_insert(null,$ma_mon_an, $tong_tien, $gia_giam, date("Y-m-d H:i:s"), $phuong_thuc, $ma_kh);

    unset($_SESSION['total_cart']);
    unset($_SESSION['cart']);
    // Chuyển hướng sau khi xử lý
    header("location: ../cart/hoadon.php");
    exit();
}

require "../layout.php";

