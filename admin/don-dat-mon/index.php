<?php
require_once "../../dao/pdo.php";
require_once "../../dao/don_dat_mon.php";
require "../../global.php";

try {
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 10;

    $items = get_danh_sach_hoa_don($page, $limit);
// var_dump($items);
    $totalRows = get_so_luong_hoa_don();
    $currentPage = ceil($totalRows / $limit);

    $VIEW_NAME = "list.php";
} catch (Exception $e) {
    die("Lỗi: " . $e->getMessage());
}

require "../layout.php";
?>