<?php 
require "../../global.php";
require_once '../../dao/mon_an.php';
require_once '../../dao/loai_mon.php';

  $VIEW_NAME = "trang-chinh/trang-chu.php";
   if (exist_param("san-pham")) {

    $_SESSION['name_page'] = 'san_pham';
    header("location: $SITE_URL/mon-an/liet-ke.php");
}
elseif (exist_param("su_kien")) {

    $_SESSION['name_page'] = 'su_kien';
    $VIEW_NAME = "trang-chinh/su-kien.php";
} 
elseif (exist_param("dac_biet")) {

    $_SESSION['name_page'] = 'dac_biet';
    $VIEW_NAME = "trang-chinh/dac-biet.php";
} 
elseif (exist_param("dat_ban")) {

    $_SESSION['name_page'] = 'dat_ban';
    $VIEW_NAME = "trang-chinh/dat-ban.php";
} 


  else {
    $_SESSION['name_page'] = 'trang_chu';
    $items = mon_an_select_dac_biet();
    $top10 = mon_an_select_top10();
    $VIEW_NAME = "trang-chinh/trang-chu.php";
}
?>

<?php require "../layout.php"
?>