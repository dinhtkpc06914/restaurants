<?php
require_once "../../global.php";
require "../../dao/loai_ban.php";
if (isset($_GET['act'])) {


    if ($_GET['act'] == 'add') {
        $result = loai_exist_ten_loai_ban_add($_GET['ten_loai_ban']);
        if ($result == true) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }
    if ($_GET['act'] == 'update') {
        // var_dump($_GET['ma_loai']);
        $result = loai_exist_ten_loai_ban_update($_GET['ma_loai_ban'], $_GET['ten_loai_ban']);
        if ($result == true) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }
}