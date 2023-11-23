<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="en">
<head>
<title>Glassy Login Form A Responsive Widget Template :: w3layouts</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glassy Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="<?= $CONTENT_ADMIN ?>/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="<?= $CONTENT_ADMIN ?>/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<!-- //css files -->
<!-- web-fonts -->
<link href="<?= $CONTENT_ADMIN ?>/fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
<link href="<?= $CONTENT_ADMIN ?>/fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
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
							<form action="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php" method="post" id="form_login">
								<div class="form-sub-w3">
									<input type="text" name="ma_kh" placeholder="Tên đăng nhập" required=""  value="<?= $ma_kh ?>"/>
								<div class="icon-w3">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								</div>
								<div class="form-sub-w3">
									<input type="password" name="mat_khau" placeholder="Mật khẩu" required="" value="<?= $mat_khau ?>" /><br>
                                    <i class="text-danger text-center"><?= $MESSAGE ?></i> 
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
							</form>

						</div>
				<!--//form-ends-here-->

		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p>Bạn chưa có tài khoản ? <a style="font-weight: bold;" href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php">Đăng Ký</a></p>
		</div>
		<!--//footer-->
</body>
</html>