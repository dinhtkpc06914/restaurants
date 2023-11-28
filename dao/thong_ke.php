<?php

require_once 'pdo.php';
function thong_ke_mon_an()
{
    $sql = "SELECT lo.ma_loai_mon, lo.ten_loai_mon,"
        . " COUNT(*) so_luong,"
        . " MIN(hh.don_gia) gia_min,"
        . " MAX(hh.don_gia) gia_max,"
        . " AVG(hh.don_gia) gia_avg"
        . " FROM mon_an hh "
        . " JOIN loai_mon lo ON lo.ma_loai_mon=hh.ma_loai_mon "
        . " GROUP BY lo.ma_loai_mon, lo.ten_loai_mon";
    return pdo_query($sql);
}
function thong_ke_binh_luan()
{
    $sql = "SELECT hh.ma_mon_an, hh.ten_mon_an,"
        . " COUNT(*) so_luong,"
        . " MIN(bl.ngay_binh_luan) cu_nhat,"
        . " MAX(bl.ngay_binh_luan) moi_nhat"
        . " FROM binh_luan bl "
        . " JOIN mon_an hh ON hh.ma_mon_an=bl.ma_mon_an "
        . " GROUP BY hh.ma_mon_an, hh.ten_mon_an"
        . " HAVING so_luong > 0";
    return pdo_query($sql);
}