<?php
require_once "../../global.php";
require "../../dao/don_dat_mon.php";

if (isset($_GET['act'])) {
    if ($_GET['act'] == 'add') {
        $result = hoa_don_exist_user_email($_GET['email']);
        echo json_encode($result);
    }

    if ($_GET['act'] == 'update') {
        $result = hoa_don_exist_user_email_update($_GET['ma_chi_tiet'], $_GET['email']);
        echo json_encode($result);
    }
}
?>