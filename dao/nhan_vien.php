<?php 
require_once 'pdo.php';


function khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email,$sdt, $hinh, $kich_hoat, $vai_tro,$dia_chi)
{
    $sql = "INSERT INTO khach_hang(ma_kh,mat_khau,ho_ten,email,sdt,hinh,kich_hoat,vai_tro,dia_chi) VALUES(?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $email,$sdt, $hinh, $kich_hoat == 1, $vai_tro == 1,$dia_chi);
}
function khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email,$sdt, $hinh, $kich_hoat, $vai_tro,$dia_chi)
{
    $sql = "UPDATE khach_hang SET mat_khau=?,ho_ten=?,email=?,sdt=?,hinh=?,kich_hoat=?,vai_tro=?,dia_chi=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau, $ho_ten, $email,$sdt, $hinh, $kich_hoat == 1, $vai_tro == 1,$dia_chi, $ma_kh);
}
function khach_hang_delete($ma_kh)
{
    $sql = "DELETE FROM khach_hang WHERE ma_kh=?";
    if (is_array($ma_kh)) {
        // xoa nhieu kh
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_kh);
    }
}
function khach_hang_selectall_by_role($vai_tro = 1)
{
    $sql = "SELECT * FROM khach_hang WHERE vai_tro = ?";
    return pdo_execute($sql, $vai_tro);
}
function khach_hang_select_by_id($ma_kh)
{
    $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
    return pdo_query_one($sql, $ma_kh);
}
function khach_hang_exist($ma_kh)
{
    $sql = "SELECT count(*) FROM khach_hang WHERE ma_kh=?";
    return pdo_query_value($sql, $ma_kh) > 0;
}

function khach_hang_exist_email($email)
{
    $sql = "SELECT count(*) FROM khach_hang WHERE email=?";
    return pdo_query_value($sql, $email) > 0;
}

function khach_hang_change_password($ma_kh, $mat_khau_moi)
{

    $sql = "UPDATE khach_hang SET mat_khau=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau_moi, $ma_kh);
}
function khach_hang_select_page($order, $limit)
{
    if (!isset($_REQUEST['page'])) {
        $_SESSION['page'] = 1;
    }
    if (!isset($_SESSION['total_page'])) {
        $_SESSION['total_page'] = 1;
    }
    $_SESSION['total_pro'] = pdo_query_value("SELECT count(*) FROM khach_hang WHERE vai_tro = 0"); // Thêm điều kiện vai_tro = 0
    if (exist_param("page")) {
        $_SESSION['page'] = $_REQUEST['page'];
    }
    $begin = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_page'] = ceil($_SESSION['total_pro'] / $limit);
    $sql = "SELECT * FROM khach_hang WHERE vai_tro = 1 ORDER BY $order DESC LIMIT $begin, $limit"; // Thêm điều kiện vai_tro = 0
    return pdo_query($sql);
}
?>
