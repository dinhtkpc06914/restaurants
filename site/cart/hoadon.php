<?php
require '../../global.php';
require '../../dao/mon_an.php';
require '../../dao/khach_hang.php';
require '../../dao/hoa_don.php';


if (isset($_SESSION['user']['ma_kh'])) {
    $id = $_SESSION['user'];
    $kh = khach_hang_select_by_id($id['ma_kh']);
    extract($kh);
    $VIEW_NAME = "../cart/list-hoadon.php";
} else {
    header("location:" . $SITE_URL . "/tai-khoan/dang-nhap.php");
}
require "../layout.php";
