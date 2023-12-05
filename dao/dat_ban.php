<?php
require_once 'pdo.php';



function layDanhSachLoaiBan() {
    $sql = "SELECT ma_loai_ban, ten_loai_ban FROM loai_ban";
    return pdo_query($sql);
}
function layDanhSachDatBan() {
    $sql = "SELECT db.*, lb.ten_loai_ban 
            FROM dat_ban db
            JOIN loai_ban lb ON db.ma_loai_ban = lb.ma_loai_ban";
    return pdo_query($sql);
}
function dat_ban_update($ma_dat_ban, $trang_thai)
{
    $sql = "UPDATE dat_ban SET trang_thai=? WHERE ma_dat_ban=?";
    pdo_execute($sql, $trang_thai, $ma_dat_ban);
}

function dat_ban_select_page($order, $limit)
{
    if (!isset($_REQUEST['page'])) {
        $_SESSION['page'] = 1;
    }
    if (!isset($_SESSION['total_page'])) {
        $_SESSION['total_page'] = 1;
    }
    $_SESSION['total_pro'] = pdo_query_value("SELECT count(*) FROM dat_ban");
    if (exist_param("page")) {
        $_SESSION['page'] = $_REQUEST['page'];
    }
    $begin = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_page'] = ceil($_SESSION['total_pro'] / $limit);
    $sql = "SELECT db.*, lb.ten_loai_ban 
            FROM dat_ban db
            JOIN loai_ban lb ON db.ma_loai_ban = lb.ma_loai_ban
            ORDER BY $order DESC LIMIT $begin, $limit";
    return pdo_query($sql);
}

function insertDatBan($tenKhachHang, $soDienThoai, $email, $ngayDat, $gioDat, $soNguoi, $maLoaiBan, $loiNhan) {
    $sql = "INSERT INTO dat_ban (ten_kh, sdt, email, ngay_dat, gio_dat, so_nguoi, ma_loai_ban, loi_nhan) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute([$tenKhachHang, $soDienThoai, $email, $ngayDat, $gioDat, $soNguoi, $maLoaiBan, $loiNhan]);
        return true;
    } catch (PDOException $e) {
        // Ghi log lỗi hoặc xử lý lỗi theo nhu cầu của bạn
        error_log("Lỗi PDO: " . $e->getMessage(), 0);
        return false;
    } finally {
        unset($conn);
    }
}
function xoaDonDatBan($maDatBan) {
    $sql = "DELETE FROM dat_ban WHERE ma_dat_ban = ?";
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute([$maDatBan]);
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    } finally {
        unset($conn);
    }
}