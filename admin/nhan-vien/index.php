<?php 
require_once "../../dao/pdo.php";
require_once "../../dao/nhan_vien.php";
require "../../global.php";

extract($_REQUEST);
if(exist_param("btn_list")){
    $items=khach_hang_selectall_by_role();
  
    $VIEW_NAME = "list.php";
}elseif (exist_param("btn_insert")) {
    // lấy dữ liệu từ form
    $ma_kh = $_POST['ma_kh'];
    $raw_mat_khau = $_POST['mat_khau'];
    $ho_ten = $_POST['ho_ten'];
    $email = $_POST['email'];
    $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : null;
    $up_hinh = save_file("up_hinh", "$UPLOAD_URL/users/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
    $kich_hoat = isset($_POST['kich_hoat']) ? $_POST['kich_hoat'] : null;
    $vai_tro = isset($_POST['vai_tro']) ? $_POST['vai_tro'] : 1; // Mặc định là 1 (Nhân viên)

    // Mã hóa mật khẩu bằng Argon2
    $hashed_mat_khau = password_hash($raw_mat_khau, PASSWORD_ARGON2I);

    // insert database
    khach_hang_insert($ma_kh, $hashed_mat_khau, $ho_ten, $email, $sdt, $hinh, $kich_hoat, $vai_tro);

    // show dữ liệu
    $items = khach_hang_selectall_by_role();
    $VIEW_NAME = "list.php";
}elseif(exist_param("btn_edit")){
    // lấy dữ liệu từ form
    $ma_kh = $_REQUEST["ma_kh"];
    $khach_hang_info = khach_hang_select_by_id($ma_kh);
    extract($khach_hang_info);
    // showw dữ liệu    
    $items =khach_hang_selectall_by_role();
    $VIEW_NAME = "edit.php";
}elseif (exist_param("btn_delete")) {

    $ma_kh = $_REQUEST['ma_kh'];
    khach_hang_delete($ma_kh);
    //hiển thị danh sách

    $items =khach_hang_selectall_by_role();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        $arr_ma_kh = $_POST['ma_kh'];
        khach_hang_delete($arr_ma_kh);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items =khach_hang_selectall_by_role();
    $VIEW_NAME = "list.php";
}elseif (exist_param("btn_update")) {
    // lấy dữ liệu từ form
    $ma_kh = $_POST['ma_kh'];
    $ho_ten = $_POST['ho_ten'];
    $raw_mat_khau = $_POST['mat_khau'];  // Lấy mật khẩu chưa mã hóa từ form
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $kich_hoat = $_POST['kich_hoat'];
    $vai_tro = isset($_POST['vai_tro']) ? $_POST['vai_tro'] : 1; // Mặc định là 1 (Nhân viên)

    $up_hinh = save_file("up_hinh", "$UPLOAD_URL/users/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;

    // Mã hóa mật khẩu bằng Argon2
    $hashed_mat_khau = password_hash($raw_mat_khau, PASSWORD_ARGON2I);

    // Cập nhật thông tin khách hàng với mật khẩu đã mã hóa
    khach_hang_update($ma_kh, $hashed_mat_khau, $ho_ten, $email, $sdt, $hinh, $kich_hoat, $vai_tro);

    // Hiển thị danh sách
    $items = khach_hang_selectall_by_role();
    $VIEW_NAME = "list.php";
}
require "../layout.php";
?>