<?php
require_once "../../global.php";
require "../../dao/loai_mon.php";
if (isset($_GET['act'])) {


    if ($_GET['act'] == 'add') {
        $result = loai_mon_exist_ten_loai_mon_add($_GET['ten_loai_mon']);
        if ($result == true) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }
    if ($_GET['act'] == 'update') {
        // var_dump($_GET['ma_loai']);
        $result = loai_mon_exist_ten_loai_mon_update($_GET['ma_loai_mon'], $_GET['ten_loai_mon']);
        if ($result == true) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }
}