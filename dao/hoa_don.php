<?php
require_once 'pdo.php';
function hoa_don_insert($ma_hoa_don, $ma_mon_an, $don_gia, $tong_tien, $gia_giam, $so_luong, $ngay_dat, $phuong_thuc, $sdt, $dia_chi, $ho_ten, $ma_kh) {
    $sql = "INSERT INTO hoa_don(ma_hoa_don,ma_mon_an,don_gia,tong_tien, gia_giam,so_luong, ngay_dat, phuong_thuc,sdt, dia_chi,ho_ten, ma_kh) VALUES (?, ?, ?, ?, ?, ?,?,?,?,?,?,?)";
    pdo_execute($sql, $ma_hoa_don, $ma_mon_an, $don_gia, $tong_tien, $gia_giam, $so_luong, $ngay_dat, $phuong_thuc, $sdt, $dia_chi, $ho_ten, $ma_kh);
    return $sql;
}

function hoa_don_update($ma_hoa_don, $trang_thai) {
    $sql = "UPDATE hoa_don SET trang_thai=? WHERE ma_hoa_don=?";
    pdo_execute($sql, $trang_thai, $ma_hoa_don);
}


function hoa_don_delete($maDatBan) {
    $sql = "DELETE FROM hoa_don WHERE ma_hoa_don = ?";
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute([$maDatBan]);
    } catch (PDOException $e) {
        echo "Lỗi: ".$e->getMessage();
    } finally {
        unset($conn);
    }
}
function hoa_don_selectall() {
    $sql = "SELECT * FROM hoa_don WHERE ma_kh order by ma_hoa_don DESC";
    return pdo_query($sql);
}

function hoa_don_selectall_with_khach_hang() {
    $sql = "SELECT hoa_don.*, khach_hang.ho_ten 
            FROM hoa_don
            INNER JOIN khach_hang ON hoa_don.ma_kh = khach_hang.ma_kh
            ORDER BY ma_hoa_don DESC";

    return pdo_query($sql);
}

function hoa_don_select_with_khach_hang($ma_kh) {
    $sql = "SELECT hoa_don.*, khach_hang.ho_ten, mon_an.ten_mon_an,mon_an.hinh
            FROM hoa_don
            INNER JOIN khach_hang ON hoa_don.ma_kh = khach_hang.ma_kh
            LEFT JOIN mon_an ON hoa_don.ma_mon_an = mon_an.ma_mon_an
            WHERE hoa_don.ma_kh = ?
            ORDER BY ma_hoa_don DESC"; // Đã sửa sắp xếp theo mã hóa đơn

    return pdo_query($sql, $ma_kh);
}

function hoa_don_exist($ma_hoa_don) {
    $sql = "SELECT count(*) FROM hoa_don WHERE ma_hoa_don=?";
    return pdo_query_value($sql, $ma_hoa_don) > 0;
}
// Trong file hoa-don.php hoặc nơi bạn đang lưu trữ các hàm tương tác với bảng hoa_don
function hoa_don_moi_nhat($ma_hoa_don) {
    $sql = "SELECT ma_hoa_don FROM hoa_don ORDER BY ma_hoa_don DESC LIMIT 1";
    $result = pdo_query_one($sql, $ma_hoa_don);
    return $result['ma_hoa_don'];
}

function hoa_don_select_by_id($ma_hoa_don) {
    $sql = "SELECT * FROM hoa_don WHERE ma_hoa_don=?";
    return pdo_query($sql, $ma_hoa_don);
}
function hoa_don_select_by_order_details($ma_hoa_don) {
    $sql = "SELECT * FROM hoa_don WHERE ma_hoa_don=?";
    return pdo_query($sql, $ma_hoa_don);
}
function hoa_don_select_page($order, $limit) {
    if(!isset($_SESSION['page'])) {
        $_SESSION['page'] = 1;
    }
    if(!isset($_SESSION['total_page'])) {
        $_SESSION['total_page'] = 1;
    }
    $_SESSION['total_pro'] = pdo_query_value("SELECT COUNT(*) FROM hoa_don");

    if(isset($_REQUEST['page'])) {
        $_SESSION['page'] = $_REQUEST['page'];
    }
    $begin = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_page'] = ceil($_SESSION['total_pro'] / $limit);

    $sql = "SELECT hd.*, khach_hang.ho_ten 
            FROM hoa_don hd
            INNER JOIN khach_hang ON hd.ma_kh = khach_hang.ma_kh
            ORDER BY $order DESC LIMIT $begin, $limit";

    $result = pdo_query($sql);
    return array('items' => $result, 'total_page' => $_SESSION['total_page']);
}

function getFullOrderInformation($ma_hoa_don) {
    $sql = "
            SELECT
           hoa_don.ma_hoa_don,
           hoa_don.ma_kh,
           hoa_don.ngay_dat AS ngay_dat,
           hoa_don.tong_tien,
           hoa_don.dia_chi AS dia_chi,
           hoa_don.sdt AS order_sdt,
           hoa_don.gia_giam,
           hoa_don.trang_thai,
           khach_hang.ho_ten,
           khach_hang.email,
           khach_hang.sdt AS user_sdt,
           hoa_don.ma_mon_an,
           hoa_don.so_luong,
           hoa_don.don_gia,
            mon_an.ten_mon_an AS ten_mon_an,
            mon_an.hinh AS hinh
        FROM
           hoa_don
       
      JOIN
           khach_hang ON hoa_don.ma_kh =khach_hang.ma_kh
        JOIN
            mon_an ON hoa_don.ma_mon_an = mon_an.ma_mon_an
        WHERE hoa_don.ma_hoa_don = ?
        
    ";
    return pdo_query($sql, $ma_hoa_don);
}
function select_hoa_don_and_mon_an($ma_hoa_don) {
    $sql = "
            SELECT
            mon_an.ma_mon_an,
            mon_an.ten_mon_an AS ten_mon_an,
            mon_an.hinh,
           hoa_don.so_luong,
           hoa_don.don_gia AS don_gia
        FROM
            mon_an
        JOIN
           hoa_don ON mon_an.ma_mon_an =hoa_don.ma_mon_an
        WHERE ma_hoa_don = ?;
    ";
    return pdo_query($sql, $ma_hoa_don);
}
function invoice__vnpay_insert(
    $vnp_TxnRef,
    $vnp_Amount,
    $vnp_OrderInfo,
    $vnp_ResponseCode,
    $vnp_TransactionNo,
    $vnp_BankCode,
    $vnp_PayDate
) {
    $sql = "INSERT INTO vnpay (
        vnp_TxnRef,
        vnp_Amount,
        vnp_OrderInfo,
        vnp_ResponseCode,
        vnp_TransactionNo,
        vnp_BankCode,
        vnp_PayDate
    ) VALUES (?, ?, ?, ?, ?, ?, ?)";

    pdo_execute(
        $sql,
        $vnp_TxnRef,
        $vnp_Amount,
        $vnp_OrderInfo,
        $vnp_ResponseCode,
        $vnp_TransactionNo,
        $vnp_BankCode,
        $vnp_PayDate
    );
}

