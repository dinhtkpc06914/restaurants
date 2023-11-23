
<div class="page-title">
    <div class="title_left">
        <h3>Sửa thông tin bàn </h3>
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
                <form action="index.php?btn_update" method="POST" enctype="multipart/form-data" id="update_hang_hoa">
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="ma_loai" class="form-label">Loại hàng</label>
                            <select name="ma_loai_ban" class="form-control" id="ma_loai_ban">
                                <?php
                                if (isset($loai_ban) && is_array($loai_ban)) {
                                    foreach ($loai_ban as $loai) {
                                        extract($loai);
                                        echo '<option value="' . $ma_loai_ban . '">' . $ten_loai_ban . '</option>';
                                    }
                                } else {
                                    echo '<option value="">Không có dữ liệu</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="ten_ban" class="form-label">Tên hàng hóa</label>
                            <input type="text" name="ten_ban" id="ten_ban" class="form-control" required
                                value="<?= $ten_ban ?>">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="ma_ban" class="form-label">Mã bàn</label>
                            <input type="text" name="ma_ban" id="ma_ban" readonly class="form-control"
                                value="<?= $ma_ban ?>">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="suc_chua" class="form-label">Sức chứa</label>
                            <input type="text" name="suc_chua" id="suc_chua" class="form-control"  value="<?= $suc_chua ?>">
                        </div>
                   
                   
                        <div class="form-group col-sm-4">
                            <label for="trang_thai" class="form-label">Trạng thái</label>
                            <input type="text" name="trang_thai" id="trang_thai" class="form-control"  value="<?= $trang_thai ?>">
                        </div>
                    </div>
                   
                    <div class="mb-3 text-center">
                        <input type="submit" name="btn_update" value="Cập nhật" class="btn btn-info mr-3">
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