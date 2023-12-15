
<style>
    body{
        background-image: url("<?= $CONTENT_URL ?>/assets/img/about-bg.jpg");
       
    }
</style>
<link href="<?=$CONTENT_URL?>/assets/css/nhap-email.css" rel="stylesheet">
<body >

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <!-- Bạn có thể thêm nội dung cho phần này nếu cần -->
                </div>

                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3><strong>Nhập Email Của Bạn</strong></h3>
                            </div>
                            <form action="" method="post">

                                <input type="hidden" name="ma_kh">
                                <div class="form-group last mb-4">
                                    <label for="email">Email</label>
                                    <input name="email" type="email" class="form-control" id="email">
                                </div>
                                <i class=" text-danger">
                                    <?= (isset($thongbao) && (strlen($thongbao) > 0)) ? $thongbao : "" ?>
                                </i>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Chấp nhận điều
                                            khoản
                                        </span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                </div>

                                <input  style=" background-color:#cda45e" name="btn_forgot_Email" type="submit" value="Gửi"
                                    class="btn text-white btn-block ">

                                <div class="d-flex">
                                    <span class="d-block text-left my-4 text-muted"> <a
                                            href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php" class="btn-custom">Đăng
                                            ký</a></span>
                                    <span class="ml-auto "><a href="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php"
                                            class="forgot-pass btn-custom ">Đăng Nhập</a></span>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
