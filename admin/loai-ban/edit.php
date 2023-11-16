<div class="page-title">
    <div class="title_left">
        <h3>Sửa thông tin loại bàn</h3>
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
                <div class="card-body col-sm-12">
                    <form action="index.php?btn_update" method="POST" id="edit_loai">
                        <div class="mb-3">
                            <label for="ma_loai_ban" class="form-label">Mã loại</label>               

                            <input type="text" name="ma_loai_ban" class="form-control" disabled
                                value="<?= $ma_loai_ban ?>">
                        </div>
                        <div class="mb-3">
                            <label for="ten_loai_ban" class="form-label">Tên loại</label>
                            <input type="text" name="ten_loai_ban" placeholder="Nhập tên loại" class="form-control"
                                required value="<?= $ten_loai_ban ?>">
                        </div>
                        <div class="mb-3">
                            <label for="mo_ta" class="form-label">Mô tả</label>
                            <textarea class="form-control" name="mo_ta" placeholder="Nội dung mô tả..."
                                rows="4"> <?= $mo_ta ?></textarea>
                        </div>
                        <div class="mb-3 text-center">
                            <input type="hidden" name="ma_loai_ban" value="<?= $ma_loai_ban ?>">
                            <input type="submit" name="btn_update" value="Cập nhật" class="btn btn-info mr-3">
                            <a href="index.php?btn_list"><input type="button" class="btn btn-success"
                                    value="Danh sách"></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>