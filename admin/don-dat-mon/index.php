<?php
require_once "../../dao/pdo.php";
require_once "../../dao/don_dat_mon.php";
require "../../global.php";

try {
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 10;

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $ma_chi_tiet = isset($_POST['ma_chi_tiet']) ? $_POST['ma_chi_tiet'] : null;
        $trang_thai = isset($_POST['trang_thai']) ? $_POST['trang_thai'] : null;

        // Validate and sanitize user inputs here

        // Call the function to update the status
        updateStatus($ma_chi_tiet, $trang_thai);
    }

    // Get the updated list of items
    $items = get_danh_sach_hoa_don($page, $limit);

    $totalRows = get_so_luong_hoa_don();
    $currentPage = ceil($totalRows / $limit);

    $VIEW_NAME = "list.php";
} catch (Exception $e) {
    die("Lỗi: " . $e->getMessage());
}

require "../layout.php";
?>