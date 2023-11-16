<?php
require_once "../../dao/pdo.php";
require_once "../../dao/loai_ban.php";
require_once "../../dao/ban_an.php";
require "../../global.php";



// chech_login();

extract($_REQUEST);
if (exist_param("btn_list")) {

    //show dữ liệu
    $items = ban_an_select_page('ma_ban', 10);
    $VIEW_NAME = "list.php";
} else if (isset($_POST['btn_insert'])) {
    $ma_loai_ban = $_POST['ma_loai_ban'];
    $ten_ban = $_POST['ten_ban'];
    $trang_thai = $_POST['trang_thai'];

    ban_an_insert($ma_loai_ban, $ten_ban, $trang_thai);
    // Có thể thêm thông báo thành công và chuyển hướng sau khi thêm thành công
    header('Location: index.php?btn_list');
    exit();
} else if (exist_param("btn_edit")) {
    #lấy dữ liệu từ form
    $ma_ban = $_REQUEST['ma_ban'];
    $ban_an_info = ban_an_select_by_id($ma_ban);
    extract($ban_an_info);

    $loai_ban = loai_select_all('ASC');
    //show dữ liệu
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $ma_ban = $_REQUEST['ma_ban'];
    ban_an_delete($ma_ban);
    //hiển thị danh sách

    $items = ban_an_select_page('ma_ban', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        // Vừa sửa gì ở đây quên cmnr
        $arr_ma_ban = $_POST['ma_ban'];
        ban_an_delete($arr_ma_ban);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = ban_an_select_page('ma_ban', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {

    $ten_ban = $_POST['ten_ban'];
    $ma_loai = $_POST['ten_ban'];
    $so_ghe = $_POST['ten_ban'];
    $trang_thai = $_POST['ten_ban'];
    ban_an_update($ma_ban, $ten_ban, $ma_loai_ban, $trang_thai);
    //hiển thị danh sách

    $items = ban_an_select_page('ma_ban', 10);
    $VIEW_NAME = "list.php";
} else {
    $loai_ban = loai_select_all('ASC');
    $VIEW_NAME = "add.php";
}
require "../layout.php";