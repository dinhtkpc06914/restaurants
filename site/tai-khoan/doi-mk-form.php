<style>
    body {
        background-image: url(<?= $CONTENT_URL ?>/assets/img/hero-bg.jpg);
        background-size: 100%;
        /* Có thể điều chỉnh kích thước ảnh nếu cần */
        /* Thêm các thuộc tính CSS khác tùy theo nhu cầu của bạn */
        color: #fff;
        margin-top: 160px;
    }
    </style>
<body>
    
<!-- ============================ COMPONENT LOGIN   ================================= -->
<div class="card mx-auto" style="max-width: 60rem; margin-top:5rem;">
    <div class="card-body">
        <h2 class="card-title mb-4"  style="margin-top: 2rem;color:  #cda45e;  ">Đổi mật khẩu</h2>
        <form action="<?= $SITE_URL ?>/tai-khoan/doi-mk.php" method="POST" id="form_doi_mk">

            <div class="form-group">
                <label for="email" class="form-label">Tài khoản(tên đăng nhập)</label>
                <input name="ma_kh" class="form-control" placeholder="Tai khoan" readonly type="text"
                    value="<?= $_SESSION['user']['ma_kh'] ?>">
            </div> <!-- form-group// -->

            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu cũ</label>
                <input name="mat_khau" class="form-control" placeholder="Mat khau" type="password">
            </div> <!-- form-group// -->

            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu mới</label>
                <input name="mat_khau2" class="form-control" placeholder="Mat khau moi" type="password" id="mat_khau2">
            </div> <!-- form-group// -->

            <div class="form-group">
                <label for="password" class="form-label">Xác nhân mật khẩu mới</label>
                <input name="mat_khau3" class="form-control" placeholder="Xác nhan mat khau" type="password">
            </div> <!-- form-group// -->

            <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>

            <div class="form-group">
                <button type="submit" name="btn_change" class="btn  btn-block" style="background-color:  #cda45e;  color:white"> Đổi mật khẩu </button>
            </div> <!-- form-group// -->
        </form>

    </div> <!-- card-body.// -->
</div> <!-- card .// -->

<p class="text-center mt-4">Bạn chưa có tài khoản? <a href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php">Đăng ký</a></p>
<br><br>
<!-- ============================ COMPONENT LOGIN  END.// ================================= -->
</body>