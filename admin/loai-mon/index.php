<?php
require_once "../../dao/pdo.php";
require_once "../../dao/loai_mon.php";
require "../../global.php";



// chech_login();

extract($_REQUEST);
if (exist_param("btn_list")) {

    //show dữ liệu
    $items = loai_mon_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    #lấy dữ liệu từ form
    $ten_loai_mon = $_POST['ten_loai_mon'];
    $mo_ta = $_POST['mo_ta'];
    //insert vào db
    loai_mon_insert($ten_loai_mon, $mo_ta);
    //show dữ liệu
    $items = loai_mon_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    #lấy dữ liệu từ form
    $ma_loai_mon = $_REQUEST['ma_loai_mon'];
    $loai_mon_info = loai_mon_select_by_id($ma_loai_mon);
    extract($loai_mon_info);

    //show dữ liệu
    $items = loai_mon_select_all();
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $ma_loai_mon = $_REQUEST['ma_loai_mon'];
    loai_mon_delete($ma_loai_mon);
    //hiển thị danh sách

    $items = loai_mon_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        $arr_ma_loai_mon = $_POST['ma_loai_mon'];
        loai_mon_delete($arr_ma_loai_mon);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = loai_mon_select_all();
    $VIEW_NAME = "list.php";
} else if (isset($_POST['btn_update'])) {
    // Lấy dữ liệu từ biểu mẫu
    $ma_loai_mon = $_POST['ma_loai_mon'];
    $ten_loai_mon = $_POST['ten_loai_mon'];
    $mo_ta = $_POST['mo_ta'];


    // Cập nhật dữ liệu trong cơ sở dữ liệu
    loai_mon_update($ma_loai_mon,$ten_loai_mon,$mo_ta);

    // Thực hiện các hành động sau khi cập nhật (nếu cần)
    // Ví dụ: Chuyển hướng về trang danh sách
    header('Location: index.php?btn_list');
    exit;
} else {
    $VIEW_NAME = "add.php";
}
require "../layout.php";