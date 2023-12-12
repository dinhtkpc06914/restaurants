<?php
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

// Sử dụng ngày và giờ để tạo timestamp
$timestamp = strtotime($ngayDat . ' ' . $gioDat);

// Thực hiện thêm thông tin vào cơ sở dữ liệu
require_once '../../dao/pdo.php';
$sql = "INSERT INTO dat_ban (ten_kh, sdt, email, ngay_dat, gio_dat, so_nguoi, ma_loai_ban, loi_nhan) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
try {
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute([$tenKhachHang, $soDienThoai, $email, $ngayDat, $gioDat, $soNguoi, $maLoaiBan, $loiNhan]);
    echo "Đặt bàn thành công!";
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
} finally {
    unset($conn);
}
header('location: ../dat-ban/dat-ban.php');
?>
