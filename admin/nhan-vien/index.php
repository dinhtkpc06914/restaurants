<?php 
require_once "../../dao/pdo.php";
require_once "../../dao/nhan_vien.php";
require "../../global.php";
$ma_nv = $ho_ten = $mat_khau = $hinh = $email = $sdt = "";
extract($_REQUEST);
if(exist_param("btn_list")){
    $items= nhan_vien_selectall();
    $VIEW_NAME = "list.php";
}elseif(exist_param("btn_insert")){
    // lấy dữ liệu từ form
    $ma_nv=$_POST['ma_nv'];
    $mat_khau=md5($_POST['mat_khau']);
    $ho_ten=$_POST['ho_ten'];  
    $up_hinh = save_file("up_hinh", "$UPLOAD_URL/users/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
    $email=$_POST['email'];
    $sdt = $_POST['sdt'];
    // insert database
    nhan_vien_insert($ma_nv, $ho_ten,$mat_khau, $hinh, $email, $sdt);

    // show dữ liệu
    $items = nhan_vien_selectall();
    $VIEW_NAME = "list.php";

}elseif(exist_param("btn_edit")){
    // lấy dữ liệu từ form
    $ma_nv = $_REQUEST["ma_nv"];
    $nhan_vien_info = nhan_vien_select_by_id($ma_nv);
    extract($nhan_vien_info);
    // showw dữ liệu    
    $items = nhan_vien_selectall();
    $VIEW_NAME = "edit.php";
}elseif (exist_param("btn_delete")) {

    $ma_nv = $_REQUEST['ma_nv'];
    nhan_vien_delete($ma_nv);
    //hiển thị danh sách

    $items = nhan_vien_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        $arr_ma_nv = $_POST['ma_nv'];
        nhan_vien_delete($arr_ma_nv);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = nhan_vien_selectall();
    $VIEW_NAME = "list.php";
}elseif (exist_param("btn_update")) {

    $ma_nv = $_POST['ma_nv'];
    $ho_ten = $_POST['ho_ten'];
    $mat_nvau = md5($_POST['mat_khau']);
    $up_hinh = save_file("up_hinh", "$UPLOAD_URL/users/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    nhan_vien_update($ma_nv, $ho_ten,$mat_khau,  $hinh, $email, $sdt);
    // nhan_vien_update();
    //hiển thị danh sách
    $items = nhan_vien_selectall();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "../layout.php";
?>