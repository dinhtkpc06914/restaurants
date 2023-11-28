<?php
require_once 'pdo.php';

function get_danh_sach_dat_ban()
{
    $sql = "SELECT dat_ban.*, loai_ban.ten_loai_ban
            FROM dat_ban
            JOIN loai_ban ON dat_ban.ma_loai_ban = loai_ban.ma_loai_ban";
    return pdo_query($sql);
}

// Thêm các hàm kiểm tra và xóa đặt bàn
function dat_ban_exist_user_phone($so_dien_thoai)
{
    $sql = "SELECT COUNT(*) FROM dat_ban WHERE so_dien_thoai = ?";
    return pdo_query_value($sql, $so_dien_thoai) > 0;
}

function dat_ban_exist_user_phone_update($ma_dat_ban, $so_dien_thoai)
{
    $sql = "SELECT COUNT(*) FROM dat_ban WHERE ma_dat_ban != ? AND so_dien_thoai = ?";
    return pdo_query_value($sql, $ma_dat_ban, $so_dien_thoai) > 0;
}

function delete_dat_ban($ma_dat_ban)
{
    $sql = "DELETE FROM dat_ban WHERE ma_dat_ban = ?";
    pdo_execute($sql, $ma_dat_ban);
}
function update_dat_ban_trang_thai($ma_dat_ban, $trang_thai)
{
    $sql = "UPDATE dat_ban SET trang_thai = ? WHERE ma_dat_ban = ?";
    pdo_execute($sql, $trang_thai, $ma_dat_ban);
}
function get_loai_ban_by_id($ma_loai_ban)
{
    $sql = "SELECT * FROM loai_ban WHERE ma_loai_ban = ?";
    return pdo_query_one($sql, $ma_loai_ban);
}
function dat_ban_update($ma_dat_ban, $ten_kh, $so_dien_thoai, $ngay_dat, $gio_dat, $so_nguoi, $ghi_chu, $trang_thai, $ma_loai_ban)
{
    $sql = "UPDATE dat_ban SET ten_kh=?, so_dien_thoai=?, ngay_dat=?, gio_dat=?, so_nguoi=?, ghi_chu=?, trang_thai=?, ma_loai_ban=? WHERE ma_dat_ban=?";
    pdo_execute($sql, $ten_kh, $so_dien_thoai, $ngay_dat, $gio_dat, $so_nguoi, $ghi_chu, $trang_thai, $ma_loai_ban, $ma_dat_ban);
}

function dat_ban_delete($ma_dat_ban)
{
    $sql = "DELETE FROM dat_ban WHERE ma_dat_ban=?";
    if (is_array($ma_dat_ban)) {
        // Xóa nhiều đặt bàn
        foreach ($ma_dat_ban as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_dat_ban);
    }
}
function get_dat_ban_by_id($ma_dat_ban) {
    $sql = "SELECT * FROM dat_ban WHERE ma_dat_ban = ?";
    return pdo_query_one($sql, $ma_dat_ban);
}
function get_danh_sach_loai_ban() {
    $sql = "SELECT * FROM loai_ban";
    return pdo_query($sql);
}
?>
