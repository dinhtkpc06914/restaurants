<?php
require_once "../../dao/pdo.php";
require_once "../../dao/loai_mon.php";
require_once "../../dao/mon_an.php";
require "../../global.php";

// chech_login();

extract($_REQUEST);
if (exist_param("btn_list")) {

    //show dữ liệu
    $items =mon_an_select_page('ma_mon_an', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    #lấy dữ liệu từ form
    $ten_mon_an = $_POST['ten_mon_an'];
    $don_gia = $_POST['don_gia'];
    $gia_giam = $_POST['giam_gia'];
    $ma_loai_mon = $_POST['ma_loai_mon'];
    $dac_biet = $_POST['dac_biet'];
    $luot_xem = $_POST['so_luot_xem'];
    $mo_ta_mon = $_POST['mo_ta_mon'];
    $ngay_nhap = $_POST['ngay_nhap'];

    // $hinh = $_FILES['hinh']['name'];
    // Upload file lên host
    $hinh = save_file('hinh', "$UPLOAD_URL/products/");
    //insert vào db
    mon_an_insert($ten_mon_an, $don_gia, $gia_giam, $hinh,$mo_ta_mon,$dac_biet, $ngay_nhap, $luot_xem,$ma_loai_mon  );

    //show dữ liệu
    $items =mon_an_select_page('ma_mon_an', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    #lấy dữ liệu từ form
    $ma_mon_an = $_REQUEST['ma_mon_an'];
    $hang_hoa_info =mon_an_select_by_id($ma_mon_an);
    extract($hang_hoa_info);

    $loai_mon = loai_mon_select_all('ASC');
    //show dữ liệu
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $ma_mon_an = $_REQUEST['ma_mon_an'];
   mon_an_delete($ma_mon_an);
    //hiển thị danh sách

    $items =mon_an_select_page('ma_mon_an', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        // Vừa sửa gì ở đây quên cmnr
        $arr_ma_mon_an = $_POST['ma_mon_an'];
       mon_an_delete($arr_ma_mon_an);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items =mon_an_select_page('ma_mon_an', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {

    $ten_mon_an = $_POST['ten_mon_an'];
    $don_gia = $_POST['don_gia'];
    $gia_giam = $_POST['giam_gia'];
    $ma_loai_mon = $_POST['ma_loai_mon'];
    $dac_biet = $_POST['dac_biet'];
    $luot_xem = $_POST['so_luot_xem'];
    $mo_ta_mon = $_POST['mo_ta_mon'];
    $ngay_nhap = $_POST['ngay_nhap'];

    $up_hinh = save_file("up_hinh", "$UPLOAD_URL/products/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;


    mon_an_update($ma_mon_an,$ten_mon_an, $don_gia, $gia_giam, $hinh,$mo_ta_mon,$dac_biet, $ngay_nhap, $luot_xem,$ma_loai_mon);
    //hiển thị danh sách

    $items =mon_an_select_page('ma_mon_an', 10);
    $VIEW_NAME = "list.php";
} else {
    $loai_mon = loai_mon_select_all('ASC');
    $VIEW_NAME = "add.php";
}
require "../layout.php";