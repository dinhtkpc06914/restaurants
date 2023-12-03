<?php
require_once "../../dao/pdo.php";
require_once "../../dao/mon_an.php";
require_once "../../dao/hoa_don.php";
require_once "../../dao/khach_hang.php";
require "../../global.php";

extract($_REQUEST);

if (isset($_POST['btn_xacnhan'])) {

    $ma_hoa_don = $_POST['ma_hoa_don'];
    $trangthai = $_POST['trang_thai'];
    hoa_don_update($ma_hoa_don, $trang_thai);

 
    $items = hoa_don_selectall_with_khach_hang();
    $VIEW_NAME = "list.php";
} else {
    // Hiển thị danh sách
    $items = hoa_don_selectall_with_khach_hang();
    $VIEW_NAME = "list.php";
}

require "../layout.php";
