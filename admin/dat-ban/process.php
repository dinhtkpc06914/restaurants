<?php 
require_once "../../dao/dat_ban.php";
if (isset($_POST['btn_update_trang_thai'])) {
    $ma_dat_ban = $_POST['ma_dat_ban'];
    $trang_thai = $_POST['trang_thai'];

    // Thực hiện câu truy vấn cập nhật trạng thái trong CSDL
    update_dat_ban_trang_thai($ma_dat_ban, $trang_thai);

    // Chuyển hướng về trang danh sách hoặc trang cần thiết
    header('Location: index.php?btn_list');
    exit;
}?>