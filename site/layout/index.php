<?php
require '../../global.php';
require '../../dao/email.php';

$email = $_POST['email'];
require_once '../../dao/pdo.php';
$sql = "INSERT INTO lien_he( email) 
        VALUES ( ?)";
try {
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);

} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
} finally {
    unset($conn);
 
}



