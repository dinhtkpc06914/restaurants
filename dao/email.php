<?php 
require_once 'pdo.php';

function lien_he_insert( $email) {
    $sql = "INSERT INTO lien_he(email) 
            VALUES (?)";

    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);
        return true;
    } catch (PDOException $e) {
        // Ghi log lỗi hoặc xử lý lỗi theo nhu cầu của bạn
        error_log("Lỗi PDO: " . $e->getMessage(), 0);
        return false;
    } finally {
        unset($conn);
    }
}