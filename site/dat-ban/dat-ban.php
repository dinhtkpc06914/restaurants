<?php
require '../../global.php';

require '../../dao/khach_hang.php';
require '../../dao/dat_ban.php';


if (isset($_SESSION['user']['ma_kh'])) {
    $id = $_SESSION['user'];
    $kh = khach_hang_select_by_id($id['ma_kh']);

    extract($kh);
     
    $VIEW_NAME = "../dat-ban/thong-bao.php";
}  


else {
    header("location:" . $SITE_URL . "/tai-khoan/dang-nhap.php");
}
require "../layout.php";
