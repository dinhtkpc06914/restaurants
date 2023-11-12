<?php
require '../../global.php';
require '../../dao/nhan_vien.php';
if (isset($_GET['ma_nv'])) {

    $result = nhan_vien_exist($_GET['ma_nv']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}
if (isset($_GET['email'])) {
    $result = nhan_vien_exist_email($_GET['email']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}
if (isset($_POST['ma_nv'])) {
    # code...
    $result = nhan_vien_exist($_POST['ma_nv']);
    if ($result == true) {
        echo json_encode(true);
    } else {
        echo json_encode(false);
    }
}