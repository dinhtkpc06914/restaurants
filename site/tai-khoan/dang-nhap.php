<?php
require '../../global.php';
require '../../dao/khach_hang.php';

extract($_REQUEST);
$VIEW_NAME = "tai-khoan/dang-nhap-form.php";

if (exist_param("btn_login")) {
    $user = khach_hang_select_by_id($ma_kh);
    
    if ($user) {
        $stored_password_hash = $user['mat_khau'];
    
        // Kiểm tra mật khẩu bằng Argon2
        if (password_verify($mat_khau, $stored_password_hash)) {
            if (exist_param('ghi_nho')) {
                add_cookie("ma_kh", $ma_kh, 30);
                add_cookie("mat_khau", $mat_khau, 30);
            } else {
                delete_cookie("ma_kh");
                delete_cookie("mat_khau");
            }
    
            // Restore cart data if available
            if (isset($_SESSION['cart'])) {
                $_SESSION['cart'] = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
            }
    
            if (isset($_SESSION['total_cart'])) {
                $_SESSION['total_cart'] = isset($_SESSION['total_cart']) ? $_SESSION['total_cart'] : 0;
            }
    
            $_SESSION["user"] = $user;
            $ten_vai_tro = $user['vai_tro'] == 0 ? "" : "nhân viên ";
            echo "<script>
                     alert('Đăng nhập tài khoản " . $ten_vai_tro . "thành công!'); 
                     location.href='http://localhost:/" . $ROOT_URL . "';
                </script>";
        } else {
            $MESSAGE = "Sai mật khẩu!";
        }
    } else {
        $MESSAGE = "Sai tên đăng nhập!";
    }
    

} else {
    if (exist_param("btn_logout")) {
      
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            unset($_SESSION['cart']);
            unset($_SESSION['total_cart']);
            $_SESSION['name_page'] = 'trang_chu';
        }
    }
    
    $ma_kh = get_cookie("ma_kh");
    $mat_khau = get_cookie("mat_khau");
    
}
require '../layout.php';
?>