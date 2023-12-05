<?php // check_exist.php
require '../../global.php';
require '../../dao/khach_hang.php';

$field = isset($_GET['field']) ? $_GET['field'] : "";
$value = isset($_GET['value']) ? $_GET['value'] : "";

$response = ["exists" => false, "message" => ""];

if ($field && $value) {
  if ($field === "ma_kh" && khach_hang_exist($value)) {
    $response["exists"] = true;
    $response["message"] = "Tên đăng nhập đã tồn tại";
  } elseif ($field === "email" && khach_hang_exist_email($value)) {
    $response["exists"] = true;
    $response["message"] = "Email đã tồn tại";
  }
}

echo json_encode($response);
?>