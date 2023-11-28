<?php
require_once "../../global.php";
require_once "../../dao/thong_ke.php";
//--------------------------------//



if (exist_param("chart")) {
    $VIEW_NAME = "bieu-do.php";
} else {
    $VIEW_NAME = "list.php";
}
$items = thong_ke_mon_an();
require "../layout.php";
   
    