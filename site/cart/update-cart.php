<?php
session_start();

// Hàm cập nhật số lượng sản phẩm trong giỏ hàng
function updateCartItemQuantity($productId, $quantity) {
    // Lấy giỏ hàng từ session
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

    // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
    if (isset($cart[$productId])) {
        // Cập nhật số lượng sản phẩm
        $cart[$productId]['sl'] = $quantity;

        // Lưu giỏ hàng mới vào session
        $_SESSION['cart'] = $cart;

        return true; // Cập nhật thành công
    }

    return false; // Sản phẩm không tồn tại trong giỏ hàng
}

// Kiểm tra xem có yêu cầu POST từ Ajax không
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ yêu cầu Ajax
    $productId = isset($_POST['productId']) ? $_POST['productId'] : '';
    $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';

    // Kiểm tra xem productId và quantity có tồn tại không
    if ($productId !== '' && $quantity !== '') {
        // Cập nhật số lượng sản phẩm trong giỏ hàng
        $result = updateCartItemQuantity($productId, $quantity);

        // Phản hồi về trình duyệt (nếu cần)
        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Cập nhật giỏ hàng thành công']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Sản phẩm không tồn tại trong giỏ hàng']);
        }

        exit; // Dừng việc thực hiện mã PHP
    }
}

// Nếu không phải là yêu cầu POST, có thể xử lý các yêu cầu khác tại đây (nếu cần)