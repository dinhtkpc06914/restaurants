<?php
require_once "../../global.php";
require "../../dao/ban.php";

if (isset($_GET['act']) && ($_GET['act'] == 'add')) {
    $result = ban_an_exist_add($_GET['ten_ban']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}
if (isset($_GET['act']) && ($_GET['act'] == 'update')) {


    // var_dump($ma_hh['ma_hh']);
    $result = ban_an_exist_update($_GET['ma_ban'], $_GET['ten_ban']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}