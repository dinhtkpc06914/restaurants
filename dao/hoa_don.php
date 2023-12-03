<?php
require_once 'pdo.php';
function hoa_don_insert($ma_hoa_don,$ma_mon_an, $tong_tien, $gia_giam, $ngay_dat, $phuong_thuc, $ma_kh)
{
    $sql = "INSERT INTO hoa_don(ma_hoa_don,ma_mon_an, tong_tien, gia_giam, ngay_dat, phuong_thuc, ma_kh) VALUES (?, ?, ?, ?, ?, ?,?)";
    pdo_execute($sql, $ma_hoa_don,$ma_mon_an, $tong_tien, $gia_giam, $ngay_dat, $phuong_thuc, $ma_kh);
    return $sql;
}

function hoa_don_update($ma_hoa_don, $trang_thai)
{
    $sql = "UPDATE hoa_don SET trang_thai=? WHERE ma_hoa_don=?";
    pdo_execute($sql, $trang_thai, $ma_hoa_don);
}


function hoa_don_delete($ma_hoa_don)
{
    $sql = "DELETE FROM hoa_don WHERE ma_hoa_don=?";
    if (is_array($ma_hoa_don)) {
        foreach ($ma_hoa_don as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_hoa_don);
    }
}

function hoa_don_selectall()
{
    $sql = "SELECT * FROM hoa_don WHERE ma_kh order by ma_hoa_don DESC";
    return pdo_query($sql);
}

function hoa_don_selectall_with_khach_hang()
{
    $sql = "SELECT hoa_don.*, khach_hang.ho_ten 
            FROM hoa_don
            INNER JOIN khach_hang ON hoa_don.ma_kh = khach_hang.ma_kh
            ORDER BY ma_hoa_don DESC";

    return pdo_query($sql);
}

function hoa_don_select_with_khach_hang($ma_kh)
{
    $sql = "SELECT hoa_don.*, khach_hang.ho_ten, mon_an.ten_mon_an
            FROM hoa_don
            INNER JOIN khach_hang ON hoa_don.ma_kh = khach_hang.ma_kh
            LEFT JOIN mon_an ON hoa_don.ma_mon_an = mon_an.ma_mon_an
            WHERE hoa_don.ma_kh = ?
            ORDER BY ma_hoa_don DESC"; // Đã sửa sắp xếp theo mã hóa đơn

    return pdo_query($sql, $ma_kh);
}


function hoa_don_exist($ma_hoa_don)
{
    $sql = "SELECT count(*) FROM hoa_don WHERE ma_hoa_don=?";
    return pdo_query_value($sql, $ma_hoa_don) > 0;
}


// Trong file hoa-don.php hoặc nơi bạn đang lưu trữ các hàm tương tác với bảng hoa_don
function hoa_don_moi_nhat($ma_hoa_don)
{
    $sql = "SELECT ma_hoa_don FROM hoa_don ORDER BY ma_hoa_don DESC LIMIT 1";
    $result = pdo_query_one($sql, $ma_hoa_don);
    return $result['ma_hoa_don'];
}



