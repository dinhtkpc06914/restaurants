<?php

require "../../global.php";
require "../../dao/loai_mon.php";
require "../../dao/mon_an.php";
require "../../dao/khach_hang.php";
require "../../dao/binh_luan.php";

$loai = count(loai_mon_select_all());
$mon_an = count(mon_an_select_all());
$khach_hang = count(khach_hang_selectall_by_role());
$binh_luan = count(binh_luan_select_all());

$VIEW_NAME = "trang-chinh/home.php";
require "../layout.php";