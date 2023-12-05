<?php
require_once 'pdo.php';
function mon_an_insert($ten_mon_an, $don_gia, $gia_giam, $hinh, $mo_ta_mon, $dac_biet, $ngay_nhap, $luot_xem, $ma_loai_mon)
{
    $sql = "INSERT INTO mon_an(ten_mon_an, don_gia, gia_giam, hinh, mo_ta_mon, dac_biet, ngay_nhap, luot_xem, ma_loai_mon) VALUES(?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $ten_mon_an, $don_gia, $gia_giam, $hinh, $mo_ta_mon, $dac_biet, $ngay_nhap, $luot_xem, $ma_loai_mon);
}

function mon_an_update($ma_mon_an,$ten_mon_an, $don_gia, $gia_giam, $hinh,$mo_ta_mon,$dac_biet, $ngay_nhap, $luot_xem,$ma_loai_mon)
{
    $sql = "UPDATE mon_an SET ten_mon_an=?, don_gia=?, gia_giam=?, hinh=?,  mo_ta_mon=?, dac_biet=?,ngay_nhap=?, luot_xem=?, ma_loai_mon = ?  WHERE ma_mon_an=?";
    pdo_execute($sql, $ten_mon_an, $don_gia, $gia_giam, $hinh,$mo_ta_mon,$dac_biet==1, $ngay_nhap, $luot_xem,$ma_loai_mon, $ma_mon_an);
}

function mon_an_delete($ma_mon_an)
{
    $sql = "DELETE FROM mon_an WHERE ma_mon_an=?";
    if (is_array($ma_mon_an)) {
        foreach ($ma_mon_an as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_mon_an);
    }
}

function mon_an_select_all()
{
    $sql = "SELECT * FROM mon_an ORDER BY ma_mon_an desc";
    return pdo_query($sql);
}
function mon_an_select_by_id($ma_mon_an)
{
    $sql = "SELECT * FROM mon_an WHERE ma_mon_an=?";
    return pdo_query_one($sql, $ma_mon_an);
}
function mon_an_exist($ma_mon_an)
{
    $sql = "SELECT count(*) FROM mon_an WHERE ma_mon_an=?";
    return pdo_query_value($sql, $ma_mon_an) > 0;
}
function mon_an_exist_add($ten_mon_an)
{
    $sql = "SELECT count(*) FROM mon_an WHERE ten_mon_an=?";
    return pdo_query_value($sql, $ten_mon_an) > 0;
}
function mon_an_exist_update($ma_mon_an, $ten_mon_an)
{
    $sql = "SELECT count(*) FROM mon_an WHERE ma_mon_an!=? and ten_mon_an=?";
    return pdo_query_value($sql, $ma_mon_an, $ten_mon_an) > 0;
}

function mon_an_tang_so_luot_xem($ma_mon_an)
{
    $sql = "UPDATE mon_an SET luot_xem = luot_xem + 1 WHERE ma_mon_an=?";
    pdo_execute($sql, $ma_mon_an);
}
function mon_an_select_top10()
{
    $sql = "SELECT * FROM mon_an WHERE luot_xem > 0 ORDER BY luot_xem DESC LIMIT 0, 10";
    return pdo_query($sql);
}
function mon_an_select_dac_biet()
{
    $sql = "SELECT * FROM mon_an WHERE dac_biet=1";
    return pdo_query($sql);
}
function mon_an_select_by_loai($ma_loai_mon)
{
    $sql = "SELECT * FROM mon_an WHERE ma_loai_mon=?";
    return pdo_query($sql, $ma_loai_mon);
}
function mon_an_select_keyword($keyword)
{
    $sql = "SELECT * FROM mon_an mon_an "
        . " JOIN loai_mon lo ON lo.ma_loai_mon=mon_an.ma_loai_mon "
        . " WHERE ten_mon_an LIKE ? OR ten_loai_mon LIKE ?";
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}
function mon_an_select_page($order, $limit)
{
    if (!isset($_REQUEST['page'])) {
        $_SESSION['page'] = 1;
    }
    if (!isset($_SESSION['total_page'])) {
        $_SESSION['total_page'] = 1;
    }
    $_SESSION['total_pro'] = pdo_query_value("SELECT count(*) FROM mon_an");
    if (exist_param("page")) {
        $_SESSION['page'] = $_REQUEST['page'];
    }
    $begin = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_page'] = ceil($_SESSION['total_pro'] / $limit);
    $sql = "SELECT * FROM mon_an ORDER BY $order DESC LIMIT $begin,$limit";
    return pdo_query($sql);
}
function mon_an_select_page1($order, $limit, $page)
{
    // ... (các dòng mã khác)

    if (!isset($_REQUEST['page'])) {
        $_SESSION['page'] = 1;
    }
    if (!isset($_SESSION['total_page'])) {
        $_SESSION['total_page'] = 1;
    }
    $_SESSION['total_pro'] = pdo_query_value("SELECT count(*) FROM mon_an");
    if (exist_param("page")) {
        $_SESSION['page'] = $_REQUEST['page'];
    }
    $begin = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_page'] = ceil($_SESSION['total_pro'] / $limit);
    $sql = "SELECT * FROM mon_an ORDER BY $order DESC LIMIT $begin, $limit";
    return pdo_query($sql);
}



