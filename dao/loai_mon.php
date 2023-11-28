<?php
require_once 'pdo.php';
function loai_mon_insert($ten_loai_mon, $mo_ta)
{
    $sql = "INSERT INTO loai_mon(ten_loai_mon, mo_ta) VALUES(?,?)";
    pdo_execute($sql, $ten_loai_mon,$mo_ta);
}
function loai_mon_update($ma_loai_mon,$ten_loai_mon,$mo_ta)
{
    $sql = "UPDATE loai_mon SET ten_loai_mon=?,mo_ta=? WHERE ma_loai_mon=?";
    pdo_execute($sql, $ten_loai_mon, $mo_ta, $ma_loai_mon);
}
function loai_mon_delete($ma_loai_mon)
{
    $sql = "DELETE FROM loai_mon WHERE ma_loai_mon=?";
    if (is_array($ma_loai_mon)) {
        foreach ($ma_loai_mon as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_loai_mon);
    }
}
//Mặc định sắp xếp ngược/ truyền ASC vào thì xuôi

function loai_mon_select_all($order = 'DESC')
{
    $sql = "SELECT * FROM loai_mon ORDER BY ma_loai_mon $order";
    return pdo_query($sql);
}
function loai_mon_select_by_id($ma_loai_mon)
{
    $sql = "SELECT * FROM loai_mon WHERE ma_loai_mon=?";
    return pdo_query_one($sql, $ma_loai_mon);
}
function loai_mon_exist($ma_loai_mon)
{
    $sql = "SELECT count(*) FROM loai_mon WHERE ma_loai_mon=?";
    return pdo_query_value($sql, $ma_loai_mon) > 0;
}

function loai_mon_exist_ten_loai_mon_add($ten_loai_mon)
{
    $sql = "SELECT count(*) FROM loai_mon WHERE ten_loai_mon=?";
    return pdo_query_value($sql, $ten_loai_mon) > 0;
}
function loai_mon_exist_ten_loai_mon_update($ma_loai_mon, $ten_loai_mon)
{
    $sql = "SELECT count(*) FROM loai_mon WHERE  ma_loai_mon!=? and ten_loai_mon=?";
    return pdo_query_value($sql, $ma_loai_mon, $ten_loai_mon) > 0;
}