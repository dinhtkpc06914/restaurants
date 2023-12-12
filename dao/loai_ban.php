<?php
require_once 'pdo.php';
function loai_insert($ten_loai_ban, $mo_ta,$trang_thai)
{
    $sql = "INSERT INTO loai_ban(ten_loai_ban, mo_ta) VALUES(?,?,?)";
    pdo_execute($sql, $ten_loai_ban,$mo_ta,$trang_thai);
}
function loai_update(  $ma_loai_ban,$ten_loai_ban,$mo_ta)
{
    $sql = "UPDATE loai_ban SET ten_loai_ban=?,mo_ta=?WHERE ma_loai_ban=?";
    pdo_execute($sql, $ten_loai_ban, $mo_ta,$ma_loai_ban);
}
function loai_delete($ma_loai_ban)
{
    $sql = "DELETE FROM loai_ban WHERE ma_loai_ban=?";
    if (is_array($ma_loai_ban)) {
        foreach ($ma_loai_ban as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_loai_ban);
    }
}
//Mặc định sắp xếp ngược/ truyền ASC vào thì xuôi

function loai_select_all($order = 'DESC')
{
    $sql = "SELECT * FROM loai_ban ORDER BY ma_loai_ban $order";
    return pdo_query($sql);
}
function loai_select_by_id($ma_loai_ban)
{
    $sql = "SELECT * FROM loai_ban WHERE ma_loai_ban=?";
    return pdo_query_one($sql, $ma_loai_ban);
}
function loai_exist($ma_loai_ban)
{
    $sql = "SELECT count(*) FROM loai_ban WHERE ma_loai_ban=?";
    return pdo_query_value($sql, $ma_loai_ban) > 0;
}

function loai_exist_ten_loai_ban_add($ten_loai_ban)
{
    $sql = "SELECT count(*) FROM loai_ban WHERE ten_loai_ban=?";
    return pdo_query_value($sql, $ten_loai_ban) > 0;
}
function loai_exist_ten_loai_ban_update($ma_loai_ban, $ten_loai_ban)
{
    $sql = "SELECT count(*) FROM loai_ban WHERE  ma_loai!=? and ten_loai_ban=?";
    return pdo_query_value($sql, $ma_loai_ban, $ten_loai_ban) > 0;
}