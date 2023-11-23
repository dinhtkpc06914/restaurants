<div class="page-title">
    <div class="title_left">
        <h3>Thêm bàn mới</h3>
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
                <form action="index.php" method="POST" enctype="multipart/form-data" id="add_hang_hoa">
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="ma_loai_ban" class="form-label">Loại bàn</label>
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
                            <label for="ten_ban" class="form-label">Tên bàn</label>
                            <input type="text" name="ten_ban" id="ten_ban" class="form-control">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="suc_chua" class="form-label">Sức chứa</label>
                            <input type="text" name="suc_chua" id="suc_chua" class="form-control">
                        </div>
                   
                   
                        <div class="form-group col-sm-4">
                            <label for="trang_thai" class="form-label">Trạng thái</label>
                            <input type="text" name="trang_thai" id="trang_thai" class="form-control">
                        </div>
                    </div>
            </div>
            <div class="mb-3 text-center">
                <input type="submit" name="btn_insert" value="Thêm mới" class="btn btn-info mr-3">
                <a href="index.php?btn_list"><input type="button" class="btn btn-success" value="Danh sách" style="background: #2A3F54;"></a>
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