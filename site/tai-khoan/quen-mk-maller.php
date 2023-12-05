<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Login #8</title>
</head>
<style>
    body {
        background-image: url(<?= $CONTENT_URL ?>/assets/img/about-bg.jpg);
        background-size: cover;
        background-position: center;
        color: #fff;
        margin-top: 150px; /* Điều chỉnh margin-top để cân bằng với chiều cao của thanh điều hướng */
        font-family: 'Arial', sans-serif;
        
    }
  
</style>
<link href="<?=$CONTENT_URL?>/assets/css/xac-nhan.css" rel="stylesheet">
<body>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
        
            </div>

            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3><strong>Nhập Mã Xác Nhận</strong></h3>
                            <h6 class="mt-3">Mã Xác Nhận Đã Được Gửi Vào Email Của Bạn!</h6>
                        </div>
                        <form action="#" method="post">

                            <input type="hidden" name="ma_kh"">
                            <div class="form-group last mb-4">
                                <label for="email">Mã Xác Nhận</label>
                                <input name="token" type="text" class="form-control" id="email">

                            </div>

                            <input name="btn_forgot_xac-nhan" type="submit" value="Gửi"
                                   class="btn text-white btn-block "  style=" background-color:#cda45e" >

                            <span class="d-block text-left my-4 text-muted"> <a
                                        href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php"
                                        style="text-decoration: none;" class="btn-custom">Đăng ký</a></span>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
</body>

<?php
function GuiMial()
{
    require '../phpmailer/PHPMailer/src/Exception.php';
    require '../phpmailer/PHPMailer/src/PHPMailer.php';
    require '../phpmailer/PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {

        //Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->CharSet = "utf-8";
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'dinhtkpc06914@fpt.edu.vn';                     //SMTP username
        $mail->Password = 'ozqn cgzf cyzw zwzt
        ';                               //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        //Recipients
        $mail->setFrom('dinhtkpc06914@fpt.edu.vn', 'restaurant');
        $mail->addAddress($_SESSION['email']); // Add a recipient from the session
        //Add a recipient
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Thư Liên Hệ Từ Khách Hàng:';
        $token = substr(rand(0, 999999), 0, 6);
        $_SESSION['token'] = $token;

        $noidungthu = "
            <h3>Mã Xác Nhận Của Bạn Là    <h3 class='text-danger font-weight-bold'>{$token}</h3>     Vui Lòng Không Tiết Lộ Cho Ai!</h3>
         
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
<?php
GuiMial();
?>
