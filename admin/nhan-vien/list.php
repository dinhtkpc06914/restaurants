<div>
    <div class="page-title">
        <div class="title_left">
            <h3>DANH SÁCH NHÂN VIÊN</h3>
        </div>
    </div>
    <div class="row">
        <div class=" col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form action="?btn_delete_all" method="post">
                        <table width="100%" class="table table-hover table-bordered text-center ">
                            <div>
                                <tr style="background-color: #0c0b09;" class=" text-white">
                                    <th><input type="checkbox" id="select-all"></th>
                                    <th>Tên đăng nhập</th>
                                    <th>Họ và tên</th>
                                    <th>Địa chỉ email</th>
                                    <th>SĐT</th>
                                    <th>Ảnh</th>
                                    <th>Vai trò</th>
                                    <th>Kích hoạt</th>
                                    <th>Địa Chỉ</th>
                                    <th></th>
                                </tr>
                            </div>
                            <tbody>
                                <?php
                                foreach ($items as $item) {
                                    extract($item);
                                    $suakh = "index.php?btn_edit&ma_kh=" . $ma_kh;
                                    $xoakh = "index.php?btn_delete&ma_kh=" . $ma_kh;
                                    $img_path = $UPLOAD_URL . '/users/' . $hinh;
                                    if (is_file($img_path)) {
                                        $img = "<img src='$img_path' height='50' width='50' class='rounded-circle object-fit-cover'>";
                                    } else {
                                        $img = "no photo";
                                    }

                                    ?>
                                    <tr>
                                        <td><input type="checkbox" name="ma_kh[]" value="<?= $ma_kh ?>"></td>
                                        <td>
                                            <?= $ma_kh ?>
                                        </td>
                                        <td>
                                            <?= $ho_ten ?>
                                        </td>
                                        <td>
                                            <?= $email ?>
                                        </td>
                                        <td>
                                            <?= $sdt ?>
                                        </td>
                                        <td>
                                            <img src="<?= $UPLOAD_URL . '/users/' . $hinh ?>" alt="" width="40px"
                                                height="30px">
                                        </td>
                                        <td>
                                            <?= ($vai_tro == 1) ? "Nhân viên" : "Khách hàng"; ?>
                                        </td>
                                        <td>
                                            <?= ($kich_hoat == 1) ? "Rồi" : "Chưa"; ?>
                                        </td>
                                        <td>
                                        <?= $dia_chi?>
                                        </td>
                                        <td class="text-end">
                                            <a href="<?= $suakh ?>" class="btn btn-outline-info btn-rounded"><i
                                                    class="fas fa-pen"></i></a>
                                            <a href="<?= $xoakh ?>" class="btn btn-outline-danger btn-rounded"
                                                onclick="return checkDelete()"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }

                                ?>
                            </tbody>

                        </table>
                        <button style="background-color: #2A3F54;" type="submit" class="btn btn-primary mb-1 text-white"
                            id="deleteAll" onclick="return checkDelete()">
                            Xóa mục đã chọn</button>
                        <a href="index.php" class="btn text-white" style="background-color: #2A3F54;">Thêm mới
                            <i class="fas fa-plus-circle"></i></a>
                    </form>
                    <div class="mt-3" width="100%">
                        <ul class="pagination justify-content-center">
                            <?php
                            if (isset($_SESSION['total_page'])) {
                                for ($i = 1; $i <= $_SESSION['total_page']; $i++) {
                                    ?>
                                    <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                                        <a class="page-link" href="?btn_list&page=<?= $i ?>">
                                            <?= $i ?>
                                        </a>
                                    </li>
                                    <?php
                                }
                            } else {
                                // Xử lý trường hợp khi $_SESSION['total_page'] không được đặt giá trị
                                echo "Total pages not set!";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>