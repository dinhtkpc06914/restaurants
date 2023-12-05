<?php
require '../../global.php';
require '../../dao/mon_an.php';

// Lấy thông tin món ăn dựa trên tham số truyền vào (ma_mon_an)
if (isset($_GET['ma_mon_an'])) {
    $maMonAn = $_GET['ma_mon_an'];
    $monAn = mon_an_select_by_id($maMonAn);

    // Kiểm tra nếu món ăn tồn tại
    if ($monAn) {
        $title_site = $monAn['ten_mon_an'];
        $VIEW_NAME = "mon-an/liet-ke-ui.php";
        require '../layout.php';
    } else {
        // Xử lý nếu món ăn không tồn tại
        // Redirect hoặc thông báo lỗi tùy vào yêu cầu của bạn
    }
} else {
    // Xử lý nếu không có tham số truyền vào
    // Redirect hoặc thông báo lỗi tùy vào yêu cầu của bạn
}
?>