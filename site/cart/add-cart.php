<?php

require '../../global.php';
require '../../dao/mon_an.php';
session_start();
extract($_REQUEST);

if (isset($id) && $id > 0) {
    $items = mon_an_select_by_id($id);
    $total = 0;
    extract($items);

    if (isset($_SESSION['user'])) {
        // Nếu người dùng đã đăng nhập
        $userID = $_SESSION['user'];

        if (isset($_SESSION['cart'])) {
            if (isset($_SESSION['cart'][$id]['sl'])) {
                $_SESSION['cart'][$id]['sl'] += 1;
            } else {
                $_SESSION['cart'][$id]['sl'] = 1;
            }
        
            $_SESSION['cart'][$id]['ten_mon_an'] = $ten_mon_an;
            $_SESSION['cart'][$id]['ma_mon_an'] = $ma_mon_an;
            $_SESSION['cart'][$id]['don_gia'] = $don_gia;
            $_SESSION['cart'][$id]['gia_giam'] = $gia_giam;
            $_SESSION['cart'][$id]['hinh'] = $hinh;
      

            foreach ($_SESSION['cart'] as $key => $value) {
                $total += $_SESSION['cart'][$key]['sl'];
            }
            $_SESSION['total_cart'] = $total;
        } else {
            $_SESSION['cart'][$id]['sl'] = 1;
          
            $_SESSION['cart'][$id]['ten_mon_an'] = $ten_mon_an;
            $_SESSION['cart'][$id]['ma_mon_an'] = $ma_mon_an;
            $_SESSION['cart'][$id]['don_gia'] = $don_gia;
            $_SESSION['cart'][$id]['gia_giam'] = $gia_giam;
            $_SESSION['cart'][$id]['hinh'] = $hinh;

            foreach ($_SESSION['cart'] as $key => $value) {
                $total += $_SESSION['cart'][$key]['sl'];
            }
            $_SESSION['total_cart'] = $total;
        } 

        // Không chuyển hướng ngay sau khi thêm vào giỏ hàng
        header("location:" . $SITE_URL . "/cart/list-cart.php");
    } else {
        header("location:" . $SITE_URL . "/tai-khoan/dang-nhap.php");
    }
    setcookie('cartTotal_' . $userID, $totalAll, time() + (30 * 24 * 60 * 60), '/');

    // Chuyển hướng về trang trước đó hoặc trang chủ, tùy thuộc vào yêu cầu của bạn
    header("location:" . $_SERVER['HTTP_REFERER']);
}
?>
