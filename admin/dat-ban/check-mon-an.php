<?php
require_once "../../global.php";
require "../../dao/ban.php";

if (isset($_GET['act']) && ($_GET['act'] == 'add')) {
    $result =dat_ban_exist_user_phone($_GET['so_dien_thoai']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}
if (isset($_GET['act']) && ($_GET['act'] == 'update')) {


    // var_dump($ma_hh['ma_hh']);
    $result =dat_ban_exist_user_phone_update($_GET['ma_dat_ban'], $_GET['so_dien_thoai']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}