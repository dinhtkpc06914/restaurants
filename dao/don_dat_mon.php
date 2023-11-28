<?php

require_once 'pdo.php';

function get_danh_sach_hoa_don($page = 1, $limit = 10)
{
    try {
        $start = ($page - 1) * $limit;

        $sql = "SELECT * FROM hoa_don
            LEFT JOIN chi_tiet_hoa_don ON chi_tiet_hoa_don.ma_chi_tiet = hoa_don.ma_hoa_don
            LEFT JOIN mon_an ON mon_an.ma_mon_an = chi_tiet_hoa_don.ma_mon_an
            ORDER BY ngay_dat DESC LIMIT $start, $limit";

        return pdo_query($sql);
    } catch (Exception $e) {
        die("Lỗi thực thi sql: " . $e->getMessage());
    }
}

function get_so_luong_hoa_don()
{
    try {
        $sql = "SELECT COUNT(*) FROM hoa_don, chi_tiet_hoa_don, mon_an
            WHERE chi_tiet_hoa_don.ma_chi_tiet = hoa_don.ma_hoa_don AND mon_an.ma_mon_an = chi_tiet_hoa_don.ma_mon_an";

        return pdo_query_value($sql);
    } catch (Exception $e) {
        die("Lỗi thực thi sql: " . $e->getMessage());
    }
}

function get_hoa_don_by_id($ma_chi_tiet)
{
    try {
        $sql = "SELECT * FROM hoa_don
            INNER JOIN chi_tiet_hoa_don ON chi_tiet_hoa_don.ma_chi_tiet = hoa_don.ma_hoa_don
            INNER JOIN mon_an ON mon_an.ma_mon_an = chi_tiet_hoa_don.ma_mon_an
            WHERE chi_tiet_hoa_don.ma_chi_tiet = ?";

        return pdo_query_one($sql, $ma_chi_tiet);
    } catch (Exception $e) {
        die("Lỗi thực thi sql: " . $e->getMessage());
    }
}
function hoa_don_exist_user_email($email)
{
    $sql = "SELECT COUNT(*) FROM hoa_don WHERE email = ?";
    return pdo_query_value($sql, $email) > 0;
}

function hoa_don_exist_user_email_update($ma_chi_tiet, $email)
{
    $sql = "SELECT COUNT(*) FROM hoa_don WHERE ma_chi_tiet != ? AND email = ?";
    return pdo_query_value($sql, $ma_chi_tiet, $email) > 0;
}



// Trong don_dat_mon.php, thêm hàm sau

function updateStatus($ma_chi_tiet, $trang_thai) {
    $sql = "UPDATE `chi_tiet_hoa_don` SET `trang_thai` = '$trang_thai' WHERE `ma_chi_tiet` = $ma_chi_tiet";
    execute($sql);
}