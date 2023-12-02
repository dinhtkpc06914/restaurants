<?php

require '../../global.php';
require '../../dao/khach_hang.php';

extract($_REQUEST);
$VIEW_NAME = "tai-khoan/dang-ky-form.php";

extract($_REQUEST);

if (exist_param("btn_register")) {
    if ($mat_khau != $mat_khau2) {
        $MESSAGE = "Mật khẩu phải trùng nhau";
    } elseif (khach_hang_exist($ma_kh)) {
        $MESSAGE = "Tên đăng nhập đã tồn tại";
    } else {
        // Mã hóa mật khẩu bằng Argon2
        $hashed_password = password_hash($mat_khau, PASSWORD_ARGON2I);

        $file_name = save_file("up_hinh", "$UPLOAD_URL/users/");
        $hinh = $file_name ? $file_name : "";
        try {
            khach_hang_insert($ma_kh, $hashed_password, $ho_ten, $email, $sdt, $hinh, $kich_hoat, $vai_tro, $dia_chi);
            $MESSAGE = "Đăng ký thành viên thành công!";
            $VIEW_NAME = "dang-nhap-form.php";
        } catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại!";
        }
    }
} else {
    global $ma_kh, $mat_khau, $ho_ten, $email, $sdt, $hinh, $kich_hoat, $vai_tro, $mat_khau2;
    $VIEW_NAME = "tai-khoan/dang-ky-form.php";
}

require '../layout.php';
?>
