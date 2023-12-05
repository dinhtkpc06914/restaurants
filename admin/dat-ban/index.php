<?php
require_once "../../dao/pdo.php";
require_once "../../dao/dat_ban.php";
require "../../global.php";

extract($_REQUEST);

if (exist_param("btn_list")) {
    $items =dat_ban_select_page('ma_dat_ban', 6);
    $VIEW_NAME = "list.php";
}else if (isset($_POST['btn_xacnhan'])) {

    $ma_dat_ban = $_POST['ma_dat_ban'];
    $trangthai = $_POST['trang_thai'];
    dat_ban_update($ma_dat_ban, $trang_thai);

    $items =dat_ban_select_page('ma_dat_ban', 6);
    $VIEW_NAME = "list.php";
}else if (exist_param("btn_delete")) {

    $maDatBanXoa = $_POST['ma_dat_ban'];
    xoaDonDatBan($maDatBanXoa);
    //hiển thị danh sách
    $items =dat_ban_select_page('ma_dat_ban', 6);
    $VIEW_NAME = "list.php";
}

//  else if (exist_param("btn_update")) {
//     $ma_dat_ban = $_POST['ma_dat_ban'];
//     $ten_kh = $_POST['ten_khach_hang'];
//     $so_dien_thoai = $_POST['so_dien_thoai'];
//     $ngay_dat = $_POST['ngay_dat'];
//     $gio_dat = $_POST['gio_dat'];
//     $so_nguoi = $_POST['so_nguoi'];
//     $ghi_chu = $_POST['ghi_chu'];
//     $trang_thai = $_POST['trang_thai'];

//     // Kiểm tra xem 'ma_loai_ban' có tồn tại trong $_POST không
//     $ma_loai_ban = isset($_POST['ma_loai_ban']) ? $_POST['ma_loai_ban'] : null;

//     // Gọi hàm cập nhật đặt bàn từ CSDL
//     dat_ban_update($ma_dat_ban, $ten_kh, $so_dien_thoai, $ngay_dat, $gio_dat, $so_nguoi, $ghi_chu, $trang_thai, $ma_loai_ban);

//     // Sau khi cập nhật xong, điều hướng về trang danh sách
//     $dat_ban_items = get_danh_sach_dat_ban();
//     $VIEW_NAME = "list.php";
// }
else {
    // Mặc định hiển thị danh sách đặt bàn
    $dat_ban_items = layDanhSachDatBan();
    $VIEW_NAME = "list.php";
}

require "../layout.php";
?>
