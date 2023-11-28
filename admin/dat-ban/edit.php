<div>
    <div class="page-title">
        <div class="title_left">
            <h3>SỬA THÔNG TIN ĐẶT BÀN</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-md-10">
            <div class="x_panel">
                <div class="x_content">
                    <br />

                    <!-- Form sửa thông tin đặt bàn -->
                    <form action="index.php?btn_update" method="POST" enctype="multipart/form-data"
                        id="admin_update_ban">
                        <input type="hidden" name="ma_dat_ban" value="<?= $ma_dat_ban ?>">

                        <!-- Các trường thông tin -->
                        <div class="mb-3">
                            <label for="ten_khach_hang" class="form-label">Tên khách hàng:</label>
                            <input type="text" class="form-control" name="ten_khach_hang" id="ten_khach_hang"
                                value="<?= $ten_kh ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="so_dien_thoai" class="form-label">Số điện thoại:</label>
                            <input type="text" class="form-control" name="so_dien_thoai" id="so_dien_thoai"
                                value="<?= $so_dien_thoai ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="ngay_dat" class="form-label">Ngày đặt:</label>
                            <input type="date" class="form-control" name="ngay_dat" id="ngay_dat"
                                value="<?= $ngay_dat ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="gio_dat" class="form-label">Giờ đặt:</label>
                            <input type="time" class="form-control" name="gio_dat" id="gio_dat" value="<?= $gio_dat ?>"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="so_nguoi" class="form-label">Số người:</label>
                            <input type="number" class="form-control" name="so_nguoi" id="so_nguoi"
                                value="<?= $so_nguoi ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="ghi_chu" class="form-label">Ghi chú:</label>
                            <textarea class="form-control" name="ghi_chu" id="ghi_chu"
                                rows="3"><?= $ghi_chu ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="trang_thai" class="form-label">Trạng thái:</label>
                            <select class="form-control" name="trang_thai" id="trang_thai">
                                <option value="Chờ xác nhận" <?= ($trang_thai == "Chờ xác nhận") ? "selected" : "" ?>>Chờ
                                    xác nhận</option>
                                <option value="Đã xác nhận" <?= ($trang_thai == "Đã xác nhận") ? "selected" : "" ?>>Đã xác
                                    nhận</option>
                                <!-- Thêm các trạng thái khác nếu cần -->
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="ma_loai_ban" class="form-label">Loại bàn:</label>
                            <select class="form-control" name="ma_loai_ban" id="ma_loai_ban">
                                <?php
                                $loai_ban_list = get_danh_sach_loai_ban();
                                foreach ($loai_ban_list as $loai_ban) {
                                    $selected = ($ma_loai_ban == $loai_ban['ma_loai_ban']) ? "selected" : "";
                                    echo "<option value='{$loai_ban['ma_loai_ban']}' $selected>{$loai_ban['ten_loai_ban']}</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <!-- Nút cập nhật -->
                        <button type="submit" name="btn_update_dat_ban" class="btn btn-primary">Cập nhật</button>

                        <!-- Nút quay lại danh sách -->
                        <a href="index.php?btn_list" class="btn btn-secondary">Quay lại danh sách</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>