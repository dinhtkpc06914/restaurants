<?php
require_once "../../dao/pdo.php";
require_once "../../dao/loai_ban.php";
require "../../global.php";



// chech_login();

extract($_REQUEST);
extract($_REQUEST);
$field = isset($_GET['field']) ? $_GET['field'] : "";
$value = isset($_GET['value']) ? $_GET['value'] : "";

$response = ["exists" => false, "message" => ""];
if (exist_param("btn_list")) {

    //show dữ liệu
    $items = loai_select_all();
    $VIEW_NAME = "list.php";
}else if (exist_param("btn_insert")) {
    if (loai_exist($ten_loai_ban)) {
        $MESSAGE = "Tên loại bàn đã tồn tại";
        $VIEW_NAME = "add.php"; // Set the view to the add form to display the error message
    } else {
        // Insert into the database
        $ten_loai_ban = $_POST['ten_loai_ban'];
        $mo_ta = $_POST['mo_ta'];
 
        loai_insert($ten_loai_ban, $mo_ta);

        // Show the list after successful insertion
        $items = loai_select_all();
        $VIEW_NAME = "list.php";
    }
} else if (exist_param("btn_edit")) {
    #lấy dữ liệu từ form
    $ma_loai_ban = $_REQUEST['ma_loai_ban'];
    $loai_info = loai_select_by_id($ma_loai_ban);
    extract($loai_info);

    //show dữ liệu
    $items = loai_select_all();
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $ma_loai_ban = $_REQUEST['ma_loai_ban'];
    loai_delete($ma_loai_ban);
    //hiển thị danh sách

    $items = loai_select_all();
    $VIEW_NAME = "list.php";
} else if (isset($_POST['btn_update'])) {
    // Lấy dữ liệu từ biểu mẫu
    $ma_loai_ban = $_POST['ma_loai_ban'];
    $ten_loai_ban = $_POST['ten_loai_ban'];
    $mo_ta = $_POST['mo_ta'];

    // Cập nhật dữ liệu trong cơ sở dữ liệu
    loai_update($ma_loai_ban, $ten_loai_ban, $mo_ta);
    //hiển thị danh sách
    header('Location: index.php?btn_list');
    exit;
} else {
    $VIEW_NAME = "add.php";
}
require "../layout.php";