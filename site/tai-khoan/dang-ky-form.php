<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>RESTAURANT LOGIN</title>
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
<script src="check_exist.js"></script>
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
    <div class="main-w3layouts-agileinfo">
        <!--form-stars-here-->
        <div class="wthree-form" id="sanpham-ui">
            <h2>Đăng ký thành viên</h2>
            <form action="<?= $SITE_URL ?>/tai-khoan/dang-ky.php" method="post" enctype="multipart/form-data"
                id="form_dang_ki" onsubmit="return validateForm()">
                <div class="form-sub-w3">
                    <input type="text" name="ho_ten" placeholder="Họ tên" id="ho_ten">
                    <p id="ho_ten_error" style="color: red;"></p>
                    <div class="icon-w3">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="form-sub-w3">
                    <input type="text" name="ma_kh" placeholder="Tên đăng nhập" id="ma_kh" />
                    <p id="ma_kh_error" style="color: red;"></p>
                    <span id="ma_kh-message" style="color: red;"></span>
                    <div class="icon-w3">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="form-sub-w3">
                    <input type="text" id="email" name="email" placeholder="Địa chỉ email" />
                    <p id="email_error" style="color: red;"></p>
                    <span id="email-message" style="color: red;"></span>
                    <div class="icon-w3">
                        <i class="bi bi-envelope" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="form-sub-w3 mt-5">
                    <input type="file" name="up_hinh" placeholder="Ảnh đại diện " />
                    <p id="up_hinh_error" style="color: red;"></p>
                    <div class="icon-w3">
                        <i class=" bi bi-card-image" aria-hidden="true"></i>
                    </div>

                </div>
                <div class="form-sub-w3">
                    <input type="text" name="sdt" placeholder="Số điện thoại " />
                    <p id="sdt_error" style="color: red;"></p>
                    <div class="icon-w3">
                        <i class="bi bi-telephone" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="form-sub-w3">
                    <input type="password" name="mat_khau" placeholder="Mật khẩu" id="mat_khau" /><br>
                    <p id="mat_khau_error" style="color: red;"></p>
                    <div class="icon-w3">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="form-sub-w3">
                    <input type="password" name="mat_khau2" placeholder="Nhập lại mật khẩu" /><br>
                    <p id="mat_khau2_error" style="color: red;"></p>
                    <div class="icon-w3">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="form-sub-w3">
                    <input type="text" name="dia_chi" placeholder="Nhập địa chỉ " /><br>
                    <p id="dia_chi_error" style="color: red;"></p>
                    <div class="icon-w3">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    </div>
                </div>
                <label class="anim">

                    <a href="<?= $SITE_URL ?>/tai-khoan/quen-mk.php">Quên mật khẩu</a>
                </label>
                <div class="clear"></div>
                <div class="submit-agileits">
                    <input type="submit" name="btn_register" value="Đăng Ký ">
                </div>
                <input type="hidden" name="kich_hoat" value="1">
                <input type="hidden" name="vai_tro" value="0">
                <i class=" text-danger">
                    <?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?>
                </i>
            </form>

        </div>
        <!--//form-ends-here-->

    </div>
    <!--//main-->
    <!--footer-->
    <div class="footer">
        <p>Bạn đã có tài khoản ? <a style="font-weight: bold;" href="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php">Đăng
                Nhập</a></p>
    </div>
    <!--//footer-->
</body>

</html>
<script>
    function validateForm() {
        var valid = true;
        var ho_ten = document.getElementsByName("ho_ten")[0].value;
        var dia_chi = document.getElementsByName("dia_chi")[0].value;
        var ma_kh = document.getElementsByName("ma_kh")[0].value;
        var mat_khau = document.getElementsByName("mat_khau")[0].value;
        var mat_khau2 = document.getElementsByName("mat_khau2")[0].value;
        var email = document.getElementsByName("email")[0].value;
        var hinh = document.getElementsByName("up_hinh")[0].value;
        var sdt = document.getElementsByName("sdt")[0].value;
        function validatePhoneNumber(phoneNumber) {
            // Sử dụng biểu thức chính quy để kiểm tra định dạng số điện thoại
            var phoneRegex = /^[0-9]{10}$/;

            // Kiểm tra nếu số điện thoại khớp với định dạng
            return phoneRegex.test(phoneNumber);
        }
        // Kiểm tra trường 'ma_kh'
        if (ho_ten.trim() === "") {
            document.getElementById("ho_ten_error").innerText = "Vui lòng nhập họ tên !";
            valid = false;
        } else {
            document.getElementById("ho_ten_error").innerText = "";
        }
        // Kiểm tra trường 'ma_kh'
        if (ma_kh.trim() === "") {
            document.getElementById("ma_kh_error").innerText = "Vui lòng nhập tên đăng nhập !";
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
        // Kiểm tra trường 'mat_khau2'
        if (mat_khau2 === "") {
            document.getElementById("mat_khau2_error").innerText = "Vui lòng nhập lại mật khẩu!";
            valid = false;
        } else if (mat_khau !== mat_khau2) {
            document.getElementById("mat_khau2_error").innerText = "Mật khẩu xác nhận không khớp!";
            valid = false;
        } else {
            document.getElementById("mat_khau2_error").innerText = "";
        }
        // Kiểm tra trường 'email'
        if (email.trim() === "") {
            document.getElementById("email_error").innerText = "Vui lòng nhập email !";
            valid = false;
        } else {
            document.getElementById("email_error").innerText = "";
        }
        //kiểm tra địa chỉ
        if (dia_chi.trim() === "") {
            document.getElementById("dia_chi_error").innerText = "Vui lòng nhập địa chỉ !";
            valid = false;
        } else {
            document.getElementById("dia_chi_error").innerText = "";
        }
        // Kiểm tra trường 'hình '
        if (hinh.trim() === "") {
            document.getElementById("up_hinh_error").innerText = "Vui lòng chọn một ảnh  !";
            valid = false;
        } else {
            document.getElementById("up_hinh_error").innerText = "";
        }
        // Kiểm tra trường 'hình '
        if (sdt.trim() === "") {
            document.getElementById("sdt_error").innerText = "Vui lòng nhập số điện thoại  !";
            valid = false;
        } else if (!validatePhoneNumber(sdt)) {
            document.getElementById("sdt_error").innerText = "Số điện thoại không hợp lệ";
            return false;
        } else {
            document.getElementById("sdt_error").innerText = "";
        }

        return valid;
    }
</script>