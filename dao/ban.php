<?php
require_once 'pdo.php';
function ban_an_insert( $ma_loai_ban, $ten_ban, $suc_chua, $trang_thai)
{
    $sql = "INSERT INTO ban_an( ma_loai_ban, ten_ban, suc_chua, trang_thai) VALUES ( ?, ?, ?, ?)";
    pdo_execute($sql, $ma_loai_ban, $ten_ban, $suc_chua, $trang_thai);
}
function ban_an_update($ma_ban, $ma_loai_ban, $ten_ban, $suc_chua, $trang_thai)
{
    $sql = "UPDATE ban_an SET ma_loai_ban=?, ten_ban=?, suc_chua=?, trang_thai=? WHERE ma_ban=?";
    pdo_execute($sql, $ma_loai_ban, $ten_ban, $suc_chua, $trang_thai, $ma_ban);
}
function ban_an_delete($ma_ban)
{
    $sql = "DELETE FROM ban_an WHERE ma_ban=?";
    if (is_array($ma_ban)) {
        foreach ($ma_ban as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_ban);
    }
}
function ban_an_select_all()
{
    $sql = "SELECT * FROM ban_an ORDER BY ma_ban desc";
    return pdo_query($sql);
}
function ban_an_select_by_id($ma_ban)
{
    $sql = "SELECT * FROM ban_an WHERE ma_ban=?";
    return pdo_query_one($sql, $ma_ban);
}
function ban_an_exist($ma_ban)
{
    $sql = "SELECT count(*) FROM ban_an WHERE ma_ban=?";
    return pdo_query_value($sql, $ma_ban) > 0;
}
function ban_an_exist_add($ten_ban)
{
    $sql = "SELECT count(*) FROM ban_an WHERE ten_ban=?";
    return pdo_query_value($sql, $ten_ban) > 0;
}
function ban_an_exist_update($ma_ban, $ten_ban)
{
    $sql = "SELECT count(*) FROM ban_an WHERE ma_ban!=? and ten_ban=?";
    return pdo_query_value($sql, $ma_ban, $ten_ban) > 0;
}

function ban_an_tang_so_luot_xem($ma_ban)
{
    $sql = "UPDATE ban_an SET so_luot_xem = so_luot_xem + 1 WHERE ma_ban=?";
    pdo_execute($sql, $ma_ban);
}
function ban_an_select_top10()
{
    $sql = "SELECT * FROM ban_an WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
    return pdo_query($sql);
}
function ban_an_select_dac_biet()
{
    $sql = "SELECT * FROM ban_an WHERE dac_biet=1";
    return pdo_query($sql);
}
function ban_an_select_by_loai($ma_loai)
{
    $sql = "SELECT * FROM ban_an WHERE ma_loai=?";
    return pdo_query($sql, $ma_loai);
}
function ban_an_select_keyword($keyword)
{
    $sql = "SELECT * FROM ban_an hh "
        . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
        . " WHERE ten_ban LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}
function ban_an_select_page($order, $limit)
{
    if (!isset($_REQUEST['page'])) {
        $_SESSION['page'] = 1;
    }
    if (!isset($_SESSION['total_page'])) {
        $_SESSION['total_page'] = 1;
    }
    $_SESSION['total_pro'] = pdo_query_value("SELECT count(*) FROM ban_an");
    if (exist_param("page")) {
        $_SESSION['page'] = $_REQUEST['page'];
    }
    $begin = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_page'] = ceil($_SESSION['total_pro'] / $limit);
    $sql = "SELECT * FROM ban_an ORDER BY $order DESC LIMIT $begin,$limit";
    return pdo_query($sql);
}