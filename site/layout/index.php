
<?php
require '../../global.php';

$email = $_POST['email'];

require_once '../../dao/pdo.php';
$sql = "INSERT INTO email( email) 
        VALUES ( ?)";
try {
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);

    // Lấy thông tin email vừa insert
    $insertedEmail = $email;

    // Gửi email
    GuiMail($insertedEmail);

} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
} finally {
    unset($conn);
}

function GuiMail($toEmail)
{
    require '../phpmailer/PHPMailer/src/Exception.php';
    require '../phpmailer/PHPMailer/src/PHPMailer.php';
    require '../phpmailer/PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->CharSet = "utf-8";
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'dinhtkpc06914@fpt.edu.vn';
        $mail->Password = 'ozqn cgzf cyzw zwzt';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        //Recipients
        $mail->setFrom('dinhtkpc06914@fpt.edu.vn', 'restaurant');
        $mail->addAddress($toEmail); // Sử dụng thông tin email vừa lấy từ cơ sở dữ liệu
        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Thư Liên Hệ Từ Khách Hàng:';
        $noidungthu = "
            <h3>SIMPLE SAVORY</h3>
            <p>Cảm ơn bạn đã quan tâm! Chúng tôi sẽ liên hệ để hỗ trợ bạn trong thời gian sớm nhất.</p>
        ";

        $mail->Body = $noidungthu;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->smtpConnect(array(
            "ssl" => array(
                "verifypeer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();

        ob_end_flush();

    } catch (Exception $e) {
        echo "không đc: {$mail->ErrorInfo}";
    }
}
?>