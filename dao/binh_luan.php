<?php
require_once 'pdo.php';
function binh_luan_insert($ma_kh, $ma_mon_an, $noi_dung, $ngay_binh_luan, $xep_hang)
{
    $sql = "INSERT INTO binh_luan(ma_kh, ma_mon_an, noi_dung, ngay_binh_luan, xep_hang) VALUES (?,?,?,?,?)";

    pdo_execute($sql, $ma_kh, $ma_mon_an, $noi_dung, $ngay_binh_luan, $xep_hang);
}
function binh_luan_update($ma_binh_luan, $ma_kh, $ma_mon_an, $noi_dung, $ngay_binh_luan)
{
    $sql = "UPDATE binh_luan SET ma_kh=?,ma_mon_an=?,noi_dung=?,ngay_binh_luan=? WHERE ma_binh_luan=?";
    pdo_execute($sql, $ma_kh, $ma_mon_an, $noi_dung, $ngay_binh_luan, $ma_binh_luan);
}
function binh_luan_delete($ma_binh_luan)
{
    $sql = "DELETE FROM binh_luan WHERE ma_binh_luan=?";
    if (is_array($ma_binh_luan)) {
        foreach ($ma_binh_luan as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_binh_luan);
    }
}
function binh_luan_select_all()
{
    $sql = "SELECT * FROM binh_luan bl ORDER BY ngay_binh_luan DESC";
    return pdo_query($sql);
}
function binh_luan_select_by_id($ma_binh_luan)
{
    $sql = "SELECT * FROM binh_luan WHERE ma_binh_luan=?";
    return pdo_query_one($sql, $ma_binh_luan);
}
function binh_luan_exist($ma_binh_luan)
{
    $sql = "SELECT count(*) FROM binh_luan WHERE ma_binh_luan=?";
    return pdo_query_value($sql, $ma_binh_luan) > 0;
}
function binh_luan_select_by_mon_an($ma_mon_an, $limit = 10)
{
    if (!isset($_REQUEST['page'])) {
        $_SESSION['page'] = 1;
    }
    if (!isset($_SESSION['total_page'])) {
        $_SESSION['total_page'] = 1;
    }
    $query = "SELECT count(*) FROM binh_luan b 
    JOIN mon_an h ON h.ma_mon_an = b.ma_mon_an 
    WHERE b.ma_mon_an = $ma_mon_an ORDER BY ma_binh_luan DESC";

    $_SESSION['total_bl'] = pdo_query_value($query);
    if (exist_param("page")) {
        $_SESSION['page'] = $_REQUEST['page'];
    }
    $begin = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_page'] = ceil($_SESSION['total_bl'] / $limit);
    $sql = "SELECT b.*, h.ten_mon_an, k.ho_ten, k.hinh FROM binh_luan b 
    JOIN mon_an h ON h.ma_mon_an = b.ma_mon_an 
    JOIN khach_hang k ON k.ma_kh =b.ma_kh WHERE b.ma_mon_an=? ORDER BY ma_binh_luan DESC LIMIT $begin,$limit";
    return pdo_query($sql, $ma_mon_an);
}