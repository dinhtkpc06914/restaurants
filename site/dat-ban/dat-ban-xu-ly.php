<?php
require_once '../../dao/dat_ban.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);
// Trong tệp dat-ban-xu-ly.php
// Lấy thông tin từ form
$tenKhachHang = $_POST['name'];
$email = $_POST['email'];
$soDienThoai = $_POST['phone'];
$ngayDat = $_POST['date'];
$gioDat = $_POST['time'];
$soNguoi = $_POST['people'];
$maLoaiBan = $_POST['ma_loai_ban'];
$loiNhan = $_POST['message'];
// Thêm dòng này để lấy thông tin món ăn

// Thực hiện thêm thông tin vào cơ sở dữ liệu

$sql = "INSERT INTO dat_ban (ten_kh, sdt, email, ngay_dat, gio_dat, so_nguoi, ma_loai_ban, loi_nhan) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

try {
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);

    $stmt->execute([$tenKhachHang, $soDienThoai, $email, $ngayDat, $gioDat, $soNguoi, $maLoaiBan, $loiNhan]);


    // Chuyển hướng đến trang khác sau khi đặt bàn thành công
    $VIEW_NAME ="dat-ban-thanh-cong.php";
    exit();
    
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
} finally {
    unset($conn);
}
?>
