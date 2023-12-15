<?php

require '../../global.php';
require '../../dao/mon_an.php';
require '../../dao/hoa_don.php';
require '../../dao/khach_hang.php';
extract($_REQUEST);
if (exist_param("btn_thanh_toan")) {
    $hinh = $_POST['hinh'];
  
    // Giả sử hoa_don_insert trả về ma_hd đã được chèn
  
    $ma_hoa_don = hoa_don_insert(null,$ma_mon_an,$don_gia, $tong_tien, $gia_giam,$so_luong, date("Y-m-d H:i:s"), $phuong_thuc,$sdt,$dia_chi,$ho_ten,$ma_kh);
    unset($_SESSION['total_cart']);
    unset($_SESSION['cart']);
    // Chuyển hướng sau khi xử lý
    header("location: ../cart/hoadon.php");
    exit();
}
 else if (exist_param("btn_details")) {
    $ma_hoa_don = $_GET['btn_details'];
    $order = hoa_don_select_by_id($ma_hoa_don);
    extract($order);
    $order2 = getFullOrderInformation($ma_hoa_don);
    $VIEW_NAME = "../cart/chi-tiet-hoa-don.php";
} else if (exist_param("btn_thanh_toan_vnpay")){
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost/duan1/site/cart/vnpay_return.php";
        $vnp_TmnCode = "YTH94E2V"; //Mã website tại VNPAY 
        $vnp_HashSecret = "YJTYOYVIPDPYBWZCDCCOOCMYERBRDRGT"; //Chuỗi bí mật

        $vnp_TxnRef = rand(00, 9999); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh toan don hang';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $tong_tien * 100000;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
}

 else {
    $VIEW_NAME = "../cart/list-hoadon.php";
}

require "../layout.php";

