<?php
require '../../global.php';
require '../../dao/mon_an.php';
require '../../dao/loai_mon.php';
//-------------------------------//


extract($_REQUEST);

if (exist_param("ma_loai")) {

    $name_loai = loai_mon_select_by_id($ma_loai);
    extract($name_loai);
    $title_site = "CÁC MÓN ĂN THUỘC LOẠI : '$ten_loai_mon' ";

    $items = mon_an_select_by_loai($ma_loai);
}  else if (exist_param("timkiem")) {
    $kyw = $_POST['kyw'];
    if ($kyw == '') {
        $title_site = "THỰC ĐƠN CỦA CHÚNG TÔI";
    } else {
        $title_site = "CÁC MÓN ĂN CHỨA TỪ KHÓA :'$kyw'";
    }
    $items = mon_an_select_keyword($kyw);
    if (count($items) == 0) {
        $title_site = "KHÔNG MÓN ĂN NÀO CHỨA TỪ KHÓA :'$kyw'";
    }
} else {
    $title_site = "THỰC ĐƠN CỦA CHÚNG TÔI";
    $items = mon_an_select_page('luot_xem', 6);
}
$hh_db = mon_an_select_dac_biet();
$hh_top10 = mon_an_select_top10();
$ds_loai = loai_mon_select_all();
$VIEW_NAME = "mon-an/liet-ke-ui.php";

require '../layout.php';