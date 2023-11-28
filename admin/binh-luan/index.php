<?php

require_once "../../dao/pdo.php";
require_once "../../dao/binh_luan.php";
require_once "../../dao/thong_ke.php";
require_once "../../dao/mon_an.php";
require "../../global.php";


extract($_REQUEST);
if (exist_param("ma_mon_an")) {

    if (exist_param("btn_delete")) {
        try {
            binh_luan_delete($ma_binh_luan);
            $MESSAGE = "Xóa thành công";
        } catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại";
        }
    } else if (exist_param("btn_delete_all")) {
        try {
            $arr_ma_binh_luan = $_POST['ma_binh_luan'];
            binh_luan_delete($arr_ma_binh_luan);
            $MESSAGE = "Xóa thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại!";
        }
        // $items = binh_luan_select_by_mon_an($ma_mon_an);
        $VIEW_NAME = "detail.php";
    }

    $items = binh_luan_select_by_mon_an($ma_mon_an);

    if (count($items) == 0) {
        $items = thong_ke_binh_luan();
        $VIEW_NAME = "list.php";
    } else {
        $VIEW_NAME = "detail.php";
    }
} else {
    $items = thong_ke_binh_luan();
    $VIEW_NAME = "list.php";
}

require "../layout.php";