<?php 
require_once 'pdo.php';


function nhan_vien_insert($ma_nv,$ho_ten, $mat_khau, $hinh, $email, $sdt )
{
    $sql = "INSERT INTO nhan_vien(ma_nv,ho_ten,mat_khau,hinh,email,sdt) VALUES(?,?,?,?,?,?)";
    pdo_execute($sql, $ma_nv,$ho_ten, $mat_khau, $hinh, $email, $sdt );
}
function nhan_vien_update($ma_nv,$ho_ten, $mat_khau, $hinh, $email, $sdt)
{
    $sql = "UPDATE nhan_vien SET ho_ten=?,mat_khau=?,hinh=?,email=?, sdt=? WHERE ma_nv=?";
    pdo_execute($sql, $ho_ten,$mat_khau, $hinh, $email, $sdt, $ma_nv);
}
function nhan_vien_delete($ma_nv)
{
    $sql = "DELETE FROM nhan_vien WHERE ma_nv=?";
    if (is_array($ma_nv)) {
        // xoa nhieu nv
        foreach ($ma_nv as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_nv);
    }
}
function nhan_vien_selectall()
{
    $sql = "SELECT * FROM nhan_vien";
    return pdo_query($sql);
}
function nhan_vien_select_by_id($ma_nv)
{
    $sql = "SELECT * FROM nhan_vien WHERE ma_nv=?";
    return pdo_query_one($sql, $ma_nv);
}
function nhan_vien_exist($ma_nv)
{
    $sql = "SELECT count(*) FROM nhan_vien WHERE ma_nv=?";
    return pdo_query_value($sql, $ma_nv) > 0;
}

function nhan_vien_exist_email($email)
{
    $sql = "SELECT count(*) FROM nhan_vien WHERE email=?";
    return pdo_query_value($sql, $email) > 0;
}

function nhan_vien_change_password($ma_nv, $mat_khau_moi)
{

    $sql = "UPDATE nhan_vien SET mat_nvau=? WHERE ma_nv=?";
    pdo_execute($sql, $mat_khau_moi, $ma_nv);
}
?>