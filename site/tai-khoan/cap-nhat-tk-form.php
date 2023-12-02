<style>
    body {
        background-image: url(<?= $CONTENT_URL ?>/assets/img/about-bg.jpg);
        background-size: 100%;
        /* Có thể điều chỉnh kích thước ảnh nếu cần */
        /* Thêm các thuộc tính CSS khác tùy theo nhu cầu của bạn */
        color: #fff;
        margin-top: 160px;
    }
    #title-update{
        color: #cda45e;
        font-size: 20px;
        font-weight: bold;
    }
    </style>
<body>
<div class="container">
    <h2 class="py-3 text-center " style=" color:#cda45e">Cập nhật tài khoản</h2>
    <div class="row m-1 pb-5">
        <div class="col-lg-5 col-md ">
            <img src="<?= $UPLOAD_URL . '/users/' . $hinh ?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 col-md">
            <form action="<?= $SITE_URL . '/tai-khoan/cap-nhat-tk.php' ?>" method="POST" enctype="multipart/form-data"
                id="update_tk">

                <div class="form-group ">
                    <label for="" id="title-update" >Tên đăng nhập</label>
                    <input type="text" name="ma_kh" id="" class="form-control" value="<?= $ma_kh ?>" readonly
                        aria-describedby="helpId">
                </div>
                <div class="form-group form">
                    <label for="" id="title-update">Họ và tên</label>
                    <input type="text" name="ho_ten" id="" class="form-control" value="<?= $ho_ten ?>"
                        aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="" id="title-update">Địa chỉ email</label>
                    <input type="email" name="email" id="" class="form-control" value="<?= $email ?>"
                        aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="" id="title-update">Số điện thoại</label>
                    <input type="number" name="sdt" id="" class="form-control" value="<?= $sdt ?>"
                        aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="" id="title-update">Địa chỉ</label>
                    <input type="text" name="dia_chi" id="" class="form-control" 
                        aria-describedby="helpId" value="<?= $dia_chi ?>"
                </div>
                <div class="form-group">
                    <label for="" id="title-update">Ảnh đại diện</label>
                    <input type="file" name="up_hinh" id="" class="form-control" aria-describedby="helpId">
                </div>
                <div class="form-group pl-2">
                    <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
                </div>
                <input name="vai_tro" value="<?= $vai_tro ?>" type="hidden">
                <input name="kich_hoat" value="<?= $kich_hoat ?>" type="hidden">
                <input name="mat_khau" value="<?= $mat_khau ?>" type="hidden">
                <input name="hinh" value="<?= $hinh ?>" type="hidden">
                <div class="form-group">
                    <button style="background-color:#cda45e ;" type="submit" name="btn_update" class="btn btn-block pt-2 pb-2 text-white">Cập
                        nhật</button>
                </div>
            </form>
        </div>


    </div>
</div>
</body>