<?php
// Lấy danh sách đặt bàn từ CSDL
$dat_ban_items = get_danh_sach_dat_ban();
?>
<div>
    <div class="page-title">
        <div class="title_left">
            <h3>DANH SÁCH ĐẶT BÀN</h3>
        </div>
        <?php
        if (isset($MESSAGE) && (strlen($MESSAGE) > 0)) {
            echo '<h5 class="alert alert-warning">' . $MESSAGE . '</h5>';
        }
        ?>
    </div>
    <div class="row">
        <div class="col-sm-10 col-md-10">
            <div class="x_panel">
                <div class="x_title">
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />

                    <!-- Danh sách đặt bàn -->
                    <h4>Danh sách đặt bàn</h4>
                    <table width="100%" class="table table-hover table-bordered text-center">
                        <!-- Thêm tiêu đề cho danh sách đặt bàn -->
                        <thead style="background-color: #2A3F54;">
                            <tr class="text-white">
                                <th><input type="checkbox" id="select-all"></th>
                                <th>Mã đặt bàn</th>
                                <th>Tên khách hàng</th>
                                <th>Số điện thoại</th>
                                <th>Ngày đặt</th>
                                <th>Giờ đặt</th>
                                <th>Số người</th>
                                <th>Ghi chú</th>
                                <th>Trạng Thái</th>
                                <th>Loại bàn</th>


                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($dat_ban_items as $dat_ban_item) {
                                extract($dat_ban_item);
                                $sua_dat_ban = "index.php?btn_edit&ma_dat_ban=" . $ma_dat_ban;
                                $xoa_dat_ban = "index.php?btn_delete&ma_dat_ban=" . $ma_dat_ban;
                                ?>
                                <tr class="mx-auto">
                                    <td></td>
                                    <td>
                                        <?= $ma_dat_ban ?>
                                    </td>
                                    <td>
                                        <?= $ten_kh ?>
                                    </td>
                                    <td>
                                        <?= $so_dien_thoai ?>
                                    </td>
                                    <td>
                                        <?= $ngay_dat ?>
                                    </td>
                                    <td>
                                        <?= $gio_dat ?>
                                    </td>
                                    <td>
                                        <?= $so_nguoi ?>
                                    </td>
                                    <td>
                                        <?= $ghi_chu ?>
                                    </td>
                                    <td>
                                        <form action="process.php" method="post">
                                            <input type="hidden" name="ma_dat_ban" value="<?= $ma_dat_ban ?>">
                                            <select name="trang_thai">
                                                <option value="Chờ xác nhận" <?= ($trang_thai == "Chờ xác nhận") ? "selected" : "" ?>>Chờ xác nhận</option>
                                                <option value="Đã xác nhận" <?= ($trang_thai == "Đã xác nhận") ? "selected" : "" ?>>Đã xác nhận</option>
                                                <!-- Thêm các trạng thái khác nếu cần -->
                                            </select>
                                            <button type="submit" name="btn_update_trang_thai" style="width: 50%;" class="mt-2">Cập nhật </button>
                                        </form>
                                    </td>
                                    <td>
                                        <?= $ten_loai_ban ?>
                                    </td> <!-- Thêm cột hiển thị tên loại bàn -->
                                    <td class="text-end">
                                        <a href="<?= $sua_dat_ban ?>" class="btn btn-outline-info btn-rounded"><i
                                                class="fas fa-pen"></i></a>
                                        <a href="<?= $xoa_dat_ban ?>" class="btn btn-outline-danger btn-rounded"
                                            onclick="return checkDelete()"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>

                        </tbody>
                    </table>

                    <!-- Nút thêm mới -->

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>