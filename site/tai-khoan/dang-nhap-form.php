<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php $google_client = new Google_Client();

$google_client->setClientId('940855314149-67fe9njgq76gnpra61db8al3q7f3oee6.apps.googleusercontent.com');
$google_client->setClientSecret('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');
$google_client->setRedirectUri('http://localhost/duan1/site/tai-khoan/dang-nhap.php');
$google_client->addScope('email');
$google_client->addScope('profile');

$google_client->setHttpClient(
    new \GuzzleHttp\Client([
        'verify' => false, // Tắt xác minh chứng chỉ SSL (lưu ý: không an toàn)
    ])
);


if (isset($_GET["code"])) {
    try {
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

        if (!isset($token["error"])) {  // nếu lỗi trong quá trình lấy token sẽ có một mảng lỗi
            $google_client->setAccessToken($token['access_token']);  // set token cho $google_client để sử dụng

            $google_service = new Google_Service_Oauth2($google_client);

            $data = $google_service->userinfo->get();  // lấy thông tin người dùng
            $name = $data['given_name'];
            $email = $data['email'];
            $thumbnail = $data['picture'];

            // Lưu ảnh vào thư mục source
            $imageContent = file_get_contents($thumbnail);
            $imageFileName = './uploaded/user/' . $email . '_thumbnail.jpg';
            $imageSaveData = $email . '_thumbnail.jpg';
            file_put_contents($imageFileName, $imageContent);


            // kiểm tra tài khoảng theo email người dùng đã có chưa

          $users = new users();
            $info_user = $user->checkEmail($email);

            if (isset($info_user)) {
                $_SESSION['user'] = $info_user;
                header("Location: http://localhost/duan1/site/trang-chinh/index.php");
            } else {
              $users->insert_user_google($name, $email, $imageSaveData);
                $info_user = $user->checkEmail($email);
                $_SESSION['user'] = $info_user;
                header("Location: http://localhost/duan1/site/trang-chinh/index.php");
            }
        }
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
}?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Glassy Login Form A Responsive Widget Template :: w3layouts</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords"
		content="Glassy Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="<?= $CONTENT_ADMIN ?>/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
	<link rel="stylesheet" href="<?= $CONTENT_ADMIN ?>/css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="<?= $CONTENT_ADMIN ?>/fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700"
		rel="stylesheet">
	<link href="<?= $CONTENT_ADMIN ?>/fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700"
		rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!--header-->
	<div class="header-w3l">
		<h1>...</h1>
	</div>
	<!--//header-->
	<!--main-->
	<div class="main-w3layouts-agileinfo">
		<!--form-stars-here-->
		<div class="wthree-form">
			<h2></h2>
			<form action="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php" method="post" id="form_login"
				onsubmit="return validateForm()">
				<div class="form-sub-w3">
					<input type="text" name="ma_kh" placeholder="Tên đăng nhập" id="ma_kh" value="<?= $ma_kh ?>" />
					<p id="ma_kh_error" style="color: red;"></p>
					<div class="icon-w3">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div>
				</div>
				<div class="form-sub-w3">
					<input type="password" name="mat_khau" id="mat_khau " placeholder="Mật khẩu"
						value="<?= $mat_khau ?>" /><br>

					<i id="mat_khau_error" class="text-danger text-center">
						<?= $MESSAGE ?>
					</i>
					<div class="icon-w3">
						<i class="fa fa-unlock-alt" aria-hidden="true"></i>
					</div>
				</div>
				<label class="anim">
					<input type="checkbox" class="checkbox">
					<span>Ghi nhớ tôi</span>
					<a href="<?= $SITE_URL ?>/tai-khoan/quen-mk.php">Quên mật khẩu</a>
				</label>
				<div class="clear"></div>
				<div class="submit-agileits">
					<input type="submit" name="btn_login" value="Gửi">
				</div>
				<a  href="<?= $google_client->createAuthUrl() ?>" class="btn-google m-b-20 text-white">
                    <img src="../../content/contentCilent/images/icon-google.png" >
                   Đăng nhập với google
                </a>
			</form>

		</div>
		<!--//form-ends-here-->

	</div>
	<!--//main-->
	<!--footer-->
	<div class="footer">
		<p>Bạn chưa có tài khoản ? <a style="font-weight: bold;" href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php">Đăng
				Ký</a></p>
	</div>
	<!--//footer-->
</body>

</html>

<script>
    function validateForm() {
        var valid = true;

        var ma_kh = document.getElementsByName("ma_kh")[0].value;
        var mat_khau = document.getElementsByName("mat_khau")[0].value;

        // Kiểm tra trường 'ma_kh'
        if (ma_kh.trim() === "") {
            document.getElementById("ma_kh_error").innerText = "Vui lòng nhập tên đăng nhập.";
            valid = false;
        } else {
            document.getElementById("ma_kh_error").innerText = "";
        }

        // Kiểm tra trường 'mat_khau'
        if (mat_khau.trim() === "") {
            document.getElementById("mat_khau_error").innerText = "Vui lòng nhập mật khẩu.";
            valid = false;
        } else {
            document.getElementById("mat_khau_error").innerText = "";
        }

        return valid;
    }
</script>
