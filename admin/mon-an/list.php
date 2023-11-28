<div>
    <div class="page-title">
        <div class="title_left">
            <h3>DANH SÁCH MÓN ĂN</h3>
        </div>
        <?php
        if (isset($MESSAGE) && (strlen($MESSAGE) > 0)) {
            echo '<h5 class="alert alert-warning">' . $MESSAGE . '</h5>';
        }
        ?>
    </div>
    <div class="row">
        <div class="  col-sm-10 col-md-10 ">
            <div class="x_panel">
                <div class="x_title">
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />

                    <form action="?btn_delete_all" method="post">

                        <table width="100%" class="table table-hover table-bordered text-center">
                            <thead style="background-color: #2A3F54;">
                                <tr class="text-white">
                                    <th><input type="checkbox" id="select-all"></th>
                                    <th>Mã món ăn</th>
                                    <th>Tên món ăn</th>
                                    <th>Ảnh</th>
                                    <th>Đơn giá</th>
                                    <th>Giảm giá</th>
                                    <th>Lượt xem</th>
                                    <th>Ngày nhập</th>
                                    <th>Đặc biệt?</th>
                                    <th>Mô tả</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                            <?php

                            foreach ($items as $item) {
                                extract($item);
                                $sua_mon = "index.php?btn_edit&ma_mon_an=" . $ma_mon_an;
                                $xoa_mon = "index.php?btn_delete&ma_mon_an=" . $ma_mon_an;
                                $img_path = $UPLOAD_URL . '/products/' . $hinh;
                                if (is_file($img_path)) {
                                    $img = "<img src='$img_path' height='60' width='60' class='object-fit-contain'>";
                                } else {
                                    $img = "no photo";
                                }
                                //Tính giảm bn %
                                if ($don_gia > 0) {
                                    $percent_discount = number_format($gia_giam / $don_gia * 100);
                                }
                                ?>
                                <tr class="mx-auto">
                                    <td><input type="checkbox" name="ma_mon_an[]" value="<?= $ma_mon_an ?>"></td>
                                    <td>
                                        <?= $ma_mon_an ?>
                                    </td>
                                    <td>
                                        <?= $ten_mon_an ?>
                                    </td>
                                    <td>
                                        <?= $img ?>
                                    </td>
                                    <td>
                                        <?= number_format($don_gia, 0) ?>đ
                                    </td>
                                    <td>
                                        <?= number_format($gia_giam, 0) ?>đ<i class="text-danger">(
                                            <?= isset($percent_discount) ? $percent_discount : '' ?>%)
                                        </i>
                                    </td>
                                    <td>
                                        <?= $luot_xem ?>
                                    </td>
                                    <td>
                                        <?= $ngay_nhap ?>
                                    </td>
                                    <td>
                                        <?= ($dac_biet == 1) ? "Đặc biệt" : "Không"; ?>
                                    </td>
                                    <td>
                                        <?= $mo_ta_mon ?>
                                    </td>

                                    <td class="text-end">
                                        <a href="<?= $sua_mon ?>" class="btn btn-outline-info btn-rounded"><i
                                                class="fas fa-pen"></i></a>
                                        <a href="<?= $xoa_mon ?>" class="btn btn-outline-danger btn-rounded"
                                            onclick="return checkDelete()"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }

                            ?>
                            </tbody>

                        </table>
                        <button style="background-color: #2A3F54;"  type="submit" class="btn text-white" id="deleteAll"
                            onclick="return checkDelete()">
                            Xóa mục đã chọn</button>
                            <a href="index.php" class="btn  text-white"
                                            style="background-color: #2A3F54;">Thêm mới
                                            <i class="fas fa-plus-circle"></i></a>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>