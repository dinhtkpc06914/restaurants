<div class="page-title">
    <div class="title_left">
        <h3>Thêm mới loại bàn</h3>
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
                <div class="card">
            <div class="card-body">
                <form action="index.php" method="POST" id="add_loai">
                    <div class="mb-3">
                        <label for="ma_loai" class="form-label">Mã loại bàn</label>
                        <input type="text" name="ma_loai_ban" class="form-control" disabled placeholder="Tự tăng...">
                    </div>
                    <div class="mb-3">
                        <label for="ten_loai_ban" class="form-label">Tên loại bàn</label>
                        <input type="text" name="ten_loai_ban" class="form-control" required placeholder="Nhập tên loại...">
                    </div>
                    <div class="mb-3">
                        <label for="mo_ta" class="form-label">Mô tả</label>
                        <textarea class="form-control" name="mo_ta" placeholder="Nội dung mô tả..." rows="4"></textarea>
                    </div>
                    <div class="mb-3 text-center">                   
                        <input style="background-color: #2A3F54;" type="submit" name="btn_insert" value="Thêm mới" class="btn btn-info mr-3">
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
</div>
</div>
