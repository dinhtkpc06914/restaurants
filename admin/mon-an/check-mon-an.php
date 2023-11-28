<?php
require_once "../../global.php";
require "../../dao/mon_an.php";

if (isset($_GET['act']) && ($_GET['act'] == 'add')) {
    $result =mon_an_exist_add($_GET['ten_mon_an']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}
if (isset($_GET['act']) && ($_GET['act'] == 'update')) {


    // var_dump($ma_hh['ma_hh']);
    $result =mon_an_exist_update($_GET['ma_mon_an'], $_GET['ten_mon_an']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}