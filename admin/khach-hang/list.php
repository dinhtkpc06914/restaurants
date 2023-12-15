<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>DANH SÁCH KHÁCH HÀNG</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_content">
                        <form action="?btn_delete_all" method="post">
                            <table class="table table-hover table-bordered text-center">
                                <thead>
                                    <tr style="background-color: #2A3F54;" class="text-white">
                                        <th><input type="checkbox" id="select-all"></th>
                                        <th scope="col">Tên đăng nhập</th>
                                        <th scope="col">Họ và tên</th>
                                        <th scope="col">Địa chỉ email</th>
                                        <th scope="col">SĐT</th>
                                        <th scope="col">Ảnh</th>
                                        <th scope="col">Kích hoạt</th>
                                        <th scope="col">Địa chỉ</th>
                                        <th></th>
                                    </tr>
                                </thead>
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
                                            <td><?= $ma_kh ?></td>
                                            <td><?= $ho_ten ?></td>
                                            <td><?= $email ?></td>
                                            <td><?= $sdt ?></td>
                                            <td><img src="<?= $UPLOAD_URL . '/users/' . $hinh ?>" alt="" width="40px" height="30px"></td>
                                            <td><?= ($kich_hoat == 1) ? "Rồi" : "Chưa"; ?></td>
                                            <td><?= $dia_chi ?></td>
                                            <td class="text-end">
                                                <a href="<?= $suakh ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                                <a href="<?= $xoakh ?>" class="btn btn-outline-danger btn-rounded" onclick="return checkDelete()"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }

                                    ?>
                                </tbody>

                            </table>
                            <button style="background-color: #2A3F54;" type="submit" class="btn btn-primary mb-1 text-white" id="deleteAll" onclick="return checkDelete()">
                                Xóa mục đã chọn
                            </button>
                            <a href="index.php" class="btn text-white" style="background-color: #2A3F54;">Thêm mới <i class="fas fa-plus-circle"></i></a>
                        </form>
                        <div class="mt-3" width="100%">
                                <ul class="pagination justify-content-center">
                                    <!-- Mũi tên sang trái -->
                                    <li class="page-item <?= $_SESSION['page'] == 1 ? 'disabled' : '' ?>">
                                        <a class="page-link" href="?btn_list&page=<?= max(1, $_SESSION['page'] - 1) ?>"
                                            aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>

                                    <?php
                                    for ($i = 1; $i <= $_SESSION['total_page']; $i++) { ?>
                                        <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                                            <a class="page-link" href="?btn_list&page=<?= $i ?>">
                                                <?= $i ?>
                                            </a>
                                        </li>
                                    <?php } ?>

                                    <!-- Mũi tên sang phải -->
                                    <li
                                        class="page-item <?= $_SESSION['page'] == $_SESSION['total_page'] ? 'disabled' : '' ?>">
                                        <a class="page-link"
                                            href="?btn_list&page=<?= min($_SESSION['page'] + 1, $_SESSION['total_page']) ?>"
                                            aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
