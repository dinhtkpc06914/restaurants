<?php
require_once "../../dao/pdo.php";
require_once "../../dao/mon_an.php";
require_once "../../dao/hoa_don.php";
require_once "../../dao/khach_hang.php";
require "../../global.php";

extract($_REQUEST);

// Số lượng hóa đơn muốn hiển thị trên mỗi trang
$limit = 6;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn_xacnhan'])) {
    // Xử lý cập nhật trạng thái hóa đơn
    $ma_hoa_don = $_POST['ma_hoa_don'];
    $trang_thai = $_POST['trang_thai'];
    hoa_don_update($ma_hoa_don, $trang_thai);

    // Lấy danh sách hóa đơn sau khi cập nhật
    $items = hoa_don_select_page('ma_hoa_don', $limit);
    $VIEW_NAME = "list.php";
}elseif (isset($_POST['btn_xoa'])) {
    $ma_hoa_don = $_POST['ma_hoa_don'];
   hoa_don_delete($ma_hoa_don);

    // Cập nhật danh sách sau khi xóa
    $items = hoa_don_select_page('ma_hoa_don', $limit);
    $VIEW_NAME = "list.php";
}  else if (exist_param("btn_details")) {
    $ma_hoa_don = $_GET['btn_details'];
    $order = hoa_don_select_by_id($ma_hoa_don);
    extract($order);
    $order2 = getFullOrderInformation($ma_hoa_don);
    $VIEW_NAME = "chi-tiet-hoa-don.php";
}else {
    // Hiển thị danh sách theo trang
    if (!isset($_SESSION['page'])) {
        $_SESSION['page'] = 1;
    }

    // Lấy danh sách hóa đơn theo trang
    $items = hoa_don_select_page('ma_hoa_don', $limit);
    $VIEW_NAME = "list.php";
}

require "../layout.php";
?>
