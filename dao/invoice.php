<?php
require_once 'pdo.php';
function invoice_insert( $ma_hoa_don,$ma_dat_ban,$ma_kh,$ngay_tao,$sdt,$dia_chi )
{
    $sql = "INSERT INTO hoa_don(ma_hoa_don,ma_dat_ban,ma_kh,ngay_tao,sdt,dia_chi  ) VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $ma_hoa_don,$ma_dat_ban,$ma_kh,$ngay_tao,$sdt,$dia_chi);
}
function invoice_details_insert( $ma_hoa_don,$ma_mon_an, $so_luong,$don_gia, $ngay_dat, $trang_thai, $ghi_chu)
{
    $sql = "INSERT INTO chi_tiet_hoa_don(ma_hoa_don, ma_mon_an, so_luong , don_gia,ngay_dat,trang_thai,ghi_chu) VALUES (?,?,?,?,?,?,?)";

    pdo_execute($sql,$ma_hoa_don,$ma_mon_an, $so_luong,$don_gia, $ngay_dat, $trang_thai, $ghi_chu);
}
?>

