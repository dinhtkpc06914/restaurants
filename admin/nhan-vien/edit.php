<?php
$img_path = $UPLOAD_URL . '/users/' . $hinh;
if (is_file($img_path)) {
    $img = "<img src='$img_path' height='100'>";
} else {
    $img = "no photo";
}
?>
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
                                <div class="x_content">
                              
                                <form action="index.php?btn_update" method="POST" enctype="multipart/form-data" id="admin_update_kh" onsubmit="return validateForm()" >
                    <div class="row ">
                        <div class="form-group col-sm-12">
                            <label for="ma_kh" class="form-label">MÃ KHÁCH HÀNG </label>
                            <input type="text" name="ma_kh" id="ma_kh" class="form-control" 
                                value="<?= $ma_kh ?>" >
                                <p id="ma_kh_error" style="color: red;"></p>                            
                        </div>                      
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="ho_ten" class="form-label">Họ và tên</label>
                            <input type="text" name="ho_ten" id="ho_ten" class="form-control" 
                                value="<?= $ho_ten ?>" >
                                <p id="ho_ten_error" style="color: red;"></p>                             
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="mat_khau" class="form-label">Mật khẩu</label>
                            <input type="password" name="mat_khau" id="mat_khau" class="form-control"
                                value="<?= $mat_khau ?>" >
                                <p id="mat_khau_error" style="color: red;"></p>
                                
                        </div>
                      
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-12">
                            <label for="mat_khau" class="form-label">Xác nhận mật khẩu</label>
                            <input type="password" name="mat_khau2" class="form-control" 
                                value="<?= $mat_khau ?>" >
                                <p id="mat_khau2_error" style="color: red;"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                        <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <label for="up_hinh" class="form-label">Ảnh khách hàng</label>
                                    <input type="hidden" name="hinh" id="hinh" class="form-control"
                                        value="<?= $hinh ?>">
                                    <input type="file" name="up_hinh" id="up_hinh" class="form-control">
                                </div>
                                <div class="col-sm-4 ">
                                    <!-- Ảnh khách hàng -->
                                    <?= $img ?>
                                </div>
                            </div>             
                            </div>
                        </div>    
                        <div class="form-group col-sm-12">
                            <label for="sdt" class="form-label">Số điện thoại</label>
                            <input type="sdt" name="sdt" id="sdt" class="form-control" 
                                value="<?= $sdt ?>" >
                                <p id="sdt_error" style="color: red;"></p>
                               
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-12">
                            <label for="email" class="form-label">Địa chỉ email</label>
                            <input type="email" name="email" id="email" class="form-control" 
                                value="<?= $email ?>" >
                                <p id="email_error" style="color: red;"></p>
                                
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-12">
                            <label for="dia_chi" class="form-label">Địa chỉ</label>
                            <input type="text" name="dia_chi" id="dia_chi" class="form-control" 
                                value="<?= $dia_chi ?>" >
                                <p id="dia_chi_error" style="color: red;"></p>                             
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label>Kích hoạt?</label>
                            <div class="form-control">
                                <label class="radio-inline  mr-3">
                                    <input type="radio" value="0" name="kich_hoat"
                                        <?= !$kich_hoat ? 'checked' : '' ?>>Chưa kích
                                    hoạt
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="kich_hoat"
                                        <?= $kich_hoat ? 'checked' : '' ?>>Kích hoạt
                                </label>
                            </div>
                        </div>
                        
                    </div>              
                    <div class="mb-3 text-center mt-3">
                        <input type="hidden" name="ma_kh" value="<?= $ma_kh ?>">                  
                        <input  style="background: #2A3F54;" type="submit" name="btn_update" value="Cập nhật" class="btn btn-info mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn btn-success"  style="background: #2A3F54;" value="Danh sách"></a>
                    </div>

                </form>                          
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<script>
    function validateForm() {
        var valid = true;
        var ho_ten = document.getElementsByName("ho_ten")[0].value;
        var email = document.getElementsByName("email")[0].value;
       
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
            document.getElementById("ma_kh_error").innerText = "";
        } 

        // Kiểm tra trường 'email'
        if (email.trim() === "") {
            document.getElementById("email_error").innerText = "Vui lòng nhập email !";
            valid = false;
        } else {
            document.getElementById("email_error").innerText = "";
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