<style>
    /* Màu cho các option chờ xác nhận */
    .select-wrapper[data-value="0"] {
        background-color: #FFD700;
        /* Màu vàng */
        color: #000;
        /* Màu chữ đen */
    }

    /* Màu cho các option đã xác nhận */
    .select-wrapper[data-value="1"] {
        background-color: #15a362;
        /* Màu xanh lá cây */
        color: #000;
        /* Màu chữ đen */
    }

    /* Màu cho các option đã hủy */
    .select-wrapper[data-value="2"] {
        background-color: #0dcaf0;
        /* Màu đỏ */
        color: #FFF;
        /* Màu chữ trắng */
    }

    .select-wrapper[data-value="3"] {
        background-color: #0d6efd;
        /* Màu đỏ */
        color: #FFF;
        /* Màu chữ trắng */
    }

    .select-wrapper[data-value="4"] {
        background-color: #FF0000;
        /* Màu đỏ */
        color: #FFF;
        /* Màu chữ trắng */
    }

    .select-wrapper {
        position: relative;
        width: 120px;
        text-align: center;
        border-radius: 5px;
        display: inline-block;
    }

    .select-wrapper select {
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .select-value {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        cursor: pointer;
    }
</style>


    <div class="page-title">
        <div class="title_left">
            <h3>DANH SÁCH ĐƠN HÀNG</h3>
        </div>
    </div>
    <div class="row">
        <div class=" col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form action="index.php" method="post">
                        <table class="table">
                            <thead class="alert-success table-success">
                                <tr>
                                    <th>Mã hóa đơn</th>
                                    <th>Họ và Tên</th>
                                    <th>Giảm Giá</th>
                                    <th>Tổng Tiền</th>
                                    <th>Thời Gian Đặt</th>
                                    <th>Phương Thức</th>
                                    <th>Trang Thái</th>
                                    <th>Thao tác</th>
                                    <th>Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($items['items'])) {
                                    foreach ($items['items'] as $item) {
                                        extract($item);
                                        ?>
                                        <tr>
                                            <input type="hidden" name="ma_mon_an" value="<?= $ma_mon_an ?>">
                                            <td>
                                                <?= $ma_hoa_don ?>
                                            </td>
                                            <td>
                                                <?= $ho_ten ?>
                                            </td>

                                            <td>
                                                <?= $gia_giam ?> đ
                                            </td>
                                            <td>
                                                <?= $tong_tien ?> đ
                                            </td>
                                            <td>
                                                <?= $ngay_dat ?>
                                            </td>
                                            <td>
                                                <?= ($phuong_thuc == 0) ? "Tiền mặt" : "VNpay"; ?>
                                            </td>

                                            <td>
                                                <form action="index.php" method="post">
                                                    <div class="select-wrapper" data-value="<?= $trang_thai ?>">
                                                        <div class="select-value">
                                                            <?php
                                                            switch ($trang_thai) {
                                                                case 0:
                                                                    echo "Chờ xác nhận";
                                                                    break;
                                                                case 1:
                                                                    echo "Đã xác nhận";
                                                                    break;

                                                                case 2:
                                                                    echo "Đang giao";
                                                                    break;
                                                                case 3:
                                                                    echo "Đã giao";
                                                                    break;

                                                                default:
                                                                    echo "";
                                                            }
                                                            ?>
                                                        </div>
                                                        <input type="hidden" name="ma_hoa_don" value="<?= $ma_hoa_don ?>">
                                                        <select name="trang_thai" class="custom-select p-1"
                                                            class="<?= $color ?>">
                                                            <option value="0" <?= ($trang_thai == 0) ? 'selected' : ''; ?>>Chờ xác
                                                                nhận
                                                            </option>
                                                            <option value="1" <?= ($trang_thai == 1) ? 'selected' : ''; ?>>Đã xác
                                                                nhận
                                                            </option>
                                                            <option value="2" <?= ($trang_thai == 2) ? 'selected' : ''; ?>>Đang
                                                                giao</option>
                                                            <option value="3" <?= ($trang_thai == 3) ? 'selected' : ''; ?>>Đã giao
                                                            </option>

                                                        </select>

                                                    </div>
                                                    <button type="submit" style="background: #2A3F54; height:1.8rem"
                                                        class='btn text-white ' name="btn_xacnhan">
                                                        <i class="fas fa-check"></i> <!-- Thêm icon cho nút cập nhật -->
                                                    </button>
                                                </form>

                                            </td>
                                            <td>
                                                <form action="index.php" method="post">
                                                    <!-- Các input và button cần thiết cho chức năng xóa -->
                                                    <input type="hidden" name="ma_hoa_don" value="<?= $ma_hoa_don ?>">
                                                    <button type="submit" style=" width: 2rem;" class='btn p-1 text-danger p-2'
                                                        name="btn_xoa" onclick="return checkDelete()">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                           
                                            <td>
                                                <a href="index.php?btn_details=<?= $item['ma_hoa_don'] ?>"
                                                    class="  text-success" id="btn-details">
                                                    Chi tiết 
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo "Không có thông tin";
                                }
                                ?>
                            </tbody>
                        </table>
                    </form>
                    <div class="mt-3" width="100%">
                        <ul class="pagination justify-content-center">
                            <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++) { ?>
                                <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                                    <a class="page-link" href="?btn_list&page=<?= $i ?>">
                                        <?= $i ?>
                                    </a>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script>
    function checkDelete() {
        var x = confirm("Bạn muốn xóa không ?")
        if (x) {
            return true;
        } else {
            return false;
        }

    }
</script>





