<style>
    body {
        background-image: url(<?= $CONTENT_URL ?>/assets/img/hero-bg.jpg);
        background-size: cover;
        background-position: center;
        color: #fff;
        margin-top: 160px;
        font-family: 'Arial', sans-serif;
    }

    .contents {
        padding: 40px;
        background-color: rgba(0, 0, 0, 0.7);
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .mb-4 h3 {
        font-size: 28px;
        margin-bottom: 10px;
    }

    .form-group input {
        border-radius: 5px;
        margin-bottom: 20px;
        padding: 10px;
    }

    .alert {
        color: #d9534f; /* Màu đỏ cho thông báo lỗi */
        font-size: 14px;
        margin-top: 5px;
        display: block;
    }

    .control {
        position: relative;
        padding-left: 30px;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
    }

    .control input {
        position: absolute;
        z-index: -1;
        opacity: 0;
    }

    .control__indicator {
        position: absolute;
        top: 2px;
        left: 0;
        height: 20px;
        width: 20px;
        background: #fff;
        border-radius: 3px;
    }

    .control input:checked ~ .control__indicator {
        background: #cda45e;
    }

    .control .caption {
        margin-left: 10px;
    }

    .btn-custom {
        color: #cda45e;
        text-decoration: none;
        font-weight: bold;
    }

    .btn-custom:hover {
        text-decoration: underline;
    }

    .btn {
        background-color: #cda45e;
        color: #fff;
    }
    .ml-auto{
        margin-top: 1.2rem;
    }
</style>

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
                            <h3><strong>Nhập Mật Khẩu Mới</strong></h3>

                        </div>

                        <form action="#" method="post">
                            <div class="form-group first">
                                <label for="username"></label>
                                <input type="hidden" class="form-control" id="username"
                                       value="<?= isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" name="email">

                            </div>
                            <div class="form-group last mb-4">
                                <label for="text">Mật Khẩu Mới</label>
                                <input name="mat_khau1" type="text" class="form-control" id="mat_khau1">

                            </div>
                            <div class="form-group last mb-4">
                                <label for="text">Xác Nhận Mật Khẩu</label>
                                <input name="mat_khau2" type="text" class="form-control" id="mat_khau2">

                            </div>
                            <i class="alert"><?= (isset($thongbao) && (strlen($thongbao) > 0)) ? $thongbao : "" ?></i>
                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Chấp nhận điều
                                                khoản
                                        </span>
                                    <input type="checkbox" checked="checked"/>
                                    <div class="control__indicator"></div>
                                </label>
                             
                            </div>

                            <input  style=" background-color:#cda45e;" name="btn_forgot_pass" type="submit" value="Gửi"
                                   class="btn text-white btn-block ">

                         <div class="d-flex">
                         <span class="d-block text-left my-4 text-muted"> <a
                                        href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php"
                                        style="text-decoration: none;" class="btn-custom">Đăng ký</a></span>
                                        <span class="ml-auto "><a href="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php"
                                                          class="forgot-pass btn-custom" style="text-decoration: none;">Đăng Nhập</a></span>
                         </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

</body>









