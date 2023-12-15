<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!-- 
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
<style>
	 #sanpham-ui {
    padding: 40px;
    background-color: rgba(0, 0, 0, 0.7); /* Background mờ để làm nổi bật form */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);   
    margin-bottom: 2rem;
	}
</style>
<body>
	<!--header-->
	<div class="header-w3l">
		<h1>...</h1>
	</div>
	<!--//header-->
	<!--main-->
	<div class="main-w3layouts-agileinfo">
		<!--form-stars-here-->
		<div class="wthree-form" id="sanpham-ui">
			<h2>Đăng nhập</h2>
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
					<a href="<?= $SITE_URL ?>/tai-khoan/quen-mk.php">Quên mật khẩu.</a>
				</label>
				<div class="clear"></div>
				<div class="submit-agileits">
					<input type="submit" name="btn_login" value="Gửi">
				</div>
			
				<div class="footer">
		<p>Bạn chưa có tài khoản ? <a style="font-weight: bold;" href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php">Đăng
				Ký</a></p>
	</div>
			</form>

		</div>
		<!--//form-ends-here-->
		
	</div>
	<!--//main-->
	<!--footer-->
	
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
            document.getElementById("ma_kh_error").innerText = "Vui lòng nhập tên đăng nhập!";
            valid = false;
        } else {
            document.getElementById("ma_kh_error").innerText = "";
        }

        // Kiểm tra trường 'mat_khau'
        if (mat_khau.trim() === "") {
            document.getElementById("mat_khau_error").innerText = "Vui lòng nhập mật khẩu!";
            valid = false;
        } else {
            document.getElementById("mat_khau_error").innerText = "";
        }

        return valid;
    }
</script>
