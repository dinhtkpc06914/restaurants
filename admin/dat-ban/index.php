<?php
require_once "../../dao/pdo.php";
require_once "../../dao/dat_ban.php";
require "../../global.php";

extract($_REQUEST);

if (exist_param("btn_list")) {
    $dat_ban_items = get_danh_sach_dat_ban();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    // Xử lý thêm đặt bàn nếu cần
    // ...

    $dat_ban_items = get_danh_sach_dat_ban();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    $ma_dat_ban = $_REQUEST['ma_dat_ban'];
    $dat_ban_info = get_dat_ban_by_id($ma_dat_ban); // Hàm này cần được định nghĩa trong dat_ban.php

    extract($dat_ban_info);
    // showw dữ liệu    
    $items = get_danh_sach_dat_ban();
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {
    // Xử lý xóa đặt bàn nếu cần
    // ...

    $dat_ban_items = get_danh_sach_dat_ban();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    // Xử lý xóa nhiều đặt bàn nếu cần
    // ...

    $dat_ban_items = get_danh_sach_dat_ban();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {
    $ma_dat_ban = $_POST['ma_dat_ban'];
    $ten_kh = $_POST['ten_khach_hang'];
    $so_dien_thoai = $_POST['so_dien_thoai'];
    $ngay_dat = $_POST['ngay_dat'];
    $gio_dat = $_POST['gio_dat'];
    $so_nguoi = $_POST['so_nguoi'];
    $ghi_chu = $_POST['ghi_chu'];
    $trang_thai = $_POST['trang_thai'];

    // Kiểm tra xem 'ma_loai_ban' có tồn tại trong $_POST không
    $ma_loai_ban = isset($_POST['ma_loai_ban']) ? $_POST['ma_loai_ban'] : null;

    // Gọi hàm cập nhật đặt bàn từ CSDL
    dat_ban_update($ma_dat_ban, $ten_kh, $so_dien_thoai, $ngay_dat, $gio_dat, $so_nguoi, $ghi_chu, $trang_thai, $ma_loai_ban);

    // Sau khi cập nhật xong, điều hướng về trang danh sách
    $dat_ban_items = get_danh_sach_dat_ban();
    $VIEW_NAME = "list.php";
}else {
    // Mặc định hiển thị danh sách đặt bàn
    $dat_ban_items = get_danh_sach_dat_ban();
    $VIEW_NAME = "list.php";
}

require "../layout.php";
?>
