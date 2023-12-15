<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>THÊM MỚI KHÁCH HÀNG</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">

                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form action="index.php" method="POST" enctype="multipart/form-data" id="admin_add_kh"
                            onsubmit="return validateForm()">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="ma_kh" class="form-label">Mã khách hàng</label>
                                    <input type="text" name="ma_kh" id="ma_kh" class="form-control"
                                        placeholder="Nhập mã khách hàng...">
                                    <p id="ma_kh_error" style="color: red;">
                                        <?= $MESSAGE ?>
                                    </p>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="ho_ten" class="form-label">Họ và tên</label>
                                    <input type="text" name="ho_ten" id="ho_ten" class="form-control"
                                        placeholder="Nhập họ và tên...">
                                    <p id="ho_ten_error" style="color: red;"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="mat_khau" class="form-label">Mật khẩu</label>
                                    <input type="password" name="mat_khau" id="mat_khau" class="form-control"
                                        placeholder="Nhập mật khẩu...">
                                    <p id="mat_khau_error" style="color: red;"></p>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="mat_khau2" class="form-label">Xác nhận mật khẩu</label>
                                    <input type="password" name="mat_khau2" class="form-control"
                                        placeholder="Nhập lại mật khẩu..." id="mat_khau2">
                                    <p id="mat_khau2_error" style="color: red;"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="hinh" class="form-label">Ảnh</label>
                                    <input type="file" name="up_hinh" id="hinh" class="form-control">
                                    <p id="hinh_error" class="text-danger"></p>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email" class="form-label">Địa chỉ email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Nhập địa chỉ email...">
                                    <p id="email_error" style="color: red;">
                                        <?= $MESSAGE ?>
                                    </p>

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="sdt" class="form-label">Số điện thoại</label>
                                    <input type="tel" name="sdt" id="sdt" class="form-control"
                                        placeholder="Nhập số điện thoại...">
                                    <p id="sdt_error" style="color: red;"></p>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Kích hoạt?</label>
                                    <div class="form-control">
                                        <label class="radio-inline mr-3">
                                            <input type="radio" value="0" name="kich_hoat">Chưa kích hoạt
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" value="1" name="kich_hoat" checked>Kích hoạt
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="dia_chi" class="form-label">Địa chỉ</label>
                                    <input type="text" name="dia_chi" id="dia_chi" class="form-control"
                                        placeholder="Nhập địa chỉ...">
                                    <p id="dia_chi_error" style="color: red;"></p>
                                </div>
                            </div>
                            <div class="mb-3 text-right  mt-3">
                                <input type="submit" name="btn_insert" value="Thêm mới" class="btn btn-info mr-3">
                                <a href="index.php?btn_list"><input type="button" style="background-color: #2A3F54;"
                                        class="btn text-white" value="Danh sách"></a>
                            </div>
                            <i class=" text-danger">
                                <?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?>
                            </i>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</html>

<script>
    function validateForm() {
        var valid = true;

        var ma_kh = document.getElementById("ma_kh").value;
        var hinh = document.getElementById("hinh").value;
        var ho_ten = document.getElementById("ho_ten").value;
        var mat_khau = document.getElementById("mat_khau").value
        var mat_khau2 = document.getElementById("mat_khau2").value
        var email = document.getElementById("email").value
        var sdt = document.getElementById("sdt").value
        var dia_chi = document.getElementById("dia_chi").value
        function validatePhoneNumber(phoneNumber) {
            // Sử dụng biểu thức chính quy để kiểm tra định dạng số điện thoại
            var phoneRegex = /^[0-9]{10}$/;

            // Kiểm tra nếu số điện thoại khớp với định dạng
            return phoneRegex.test(phoneNumber);
        }
        if (ma_kh === "") {
            document.getElementById("ma_kh_error").innerText = "Vui lòng nhập mã khách hàng !";
            valid = false;
        } else {
            document.getElementById("ma_kh_error").innerText = "";
        }
        if (hinh === "") {
            document.getElementById("hinh_error").innerText = "Vui lòng chọn một ảnh !";
            valid = false;
        } else {
            document.getElementById("hinh_error").innerText = "";
        }

        if (ho_ten === "") {
            document.getElementById("ho_ten_error").innerText = "Vui lòng nhập họ tên !";
            valid = false;
        } else {
            document.getElementById("ho_ten_error").innerText = "";
        }
        if (mat_khau === "") {
            document.getElementById("mat_khau_error").innerText = "Vui lòng nhập mật khẩu !";
            valid = false;
        } else {
            document.getElementById("mat_khau_error").innerText = "";
        }
        if (mat_khau2 === "") {
            document.getElementById("mat_khau2_error").innerText = "Vui lòng nhập lại mật khẩu!";
            valid = false;
        } else if (mat_khau !== mat_khau2) {
            document.getElementById("mat_khau2_error").innerText = "Mật khẩu xác nhận không khớp!";
            valid = false;
        } else {
            document.getElementById("mat_khau2_error").innerText = "";
        }
        if (email === "") {
            document.getElementById("email_error").innerText = "Vui lòng nhập email !";
            valid = false;
        } else {
            document.getElementById("email_error").innerText = "";
        }
        if (sdt === "") {
            document.getElementById("sdt_error").innerText = "Vui lòng nhập số điện thoại !";
            valid = false;
        } else if (!validatePhoneNumber(sdt)) {
            document.getElementById("sdt_error").innerText = "Số điện thoại không hợp lệ";
            return false;
        } else {
            document.getElementById("sdt_error").innerText = "";
        }
        if (dia_chi === "") {
            document.getElementById("dia_chi_error").innerText = "Vui lòng nhập địa chỉ !";
            valid = false;
        } else {
            document.getElementById("dia_chi_error").innerText = "";
        }
        return valid;
    }
</script>