<div class="page-title">
    <div class="title_left">
        <h3>Sửa thông tin nhân viên </h3>
    </div>
    
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">              
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form action="index.php?btn_update" method="POST" enctype="multipart/form-data" id="admin_update_nv">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="ma_nv" class="form-label">MÃ NHÂN VIÊN </label>
                            <input type="text" name="ma_nv" id="ma_nv" class="form-control" required
                                value="<?= $ma_nv ?>">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="ho_ten" class="form-label">Họ và tên</label>
                            <input type="text" name="ho_ten" id="ho_ten" class="form-control" required
                                value="<?= $ho_ten ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="mat_khau" class="form-label">Mật khẩu</label>
                            <input type="password" name="matkhau" id="mat_khau" class="form-control" required
                                value="<?= $mat_khau ?>">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="mat_khau" class="form-label">Xác nhận mật khẩu</label>
                            <input type="password" name="mat_khau2" class="form-control" required
                                value="<?= $mat_khau ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <label for="hinh" class="form-label">Ảnh</label>
                                    <input type="hidden" name="hinh" id="hinh" class="form-control"
                                        value="<?= $hinh ?>">
                                    <input type="file" name="up_hinh" id="hinh" class="form-control">
                                </div>
                                <div class="col-sm-4">                                
                                </div>
                            </div>

                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email" class="form-label">Địa chỉ email</label>
                            <input type="email" name="email" id="email" class="form-control" required
                                value="<?= $email ?>">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email" class="form-label">Số điện thoại</label>
                            <input type="text" name="sdt" id="sdt" class="form-control" required
                                value="<?= $sdt ?>">
                        </div>
                    </div>
                  

                    <div class="mb-3 text-center mt-3">
                        <input type="hidden" name="ma_nv" value="<?= $ma_nv ?>">                  
                        <input style="background-color: #2A3F54;" type="submit" name="btn_update" value="Cập nhật" class="btn btn-info mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn btn-success" value="Danh sách"></a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
