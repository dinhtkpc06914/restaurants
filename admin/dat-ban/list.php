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
    @media only screen and (max-width: 767px) {
        .title_left,
        .title_right {
            text-align: center;
        }

        .form-group.pull-right.top_search {
            margin-top: 15px;
        }

        .x_content {
            padding: 10px;
        }

        .table-responsive {
            overflow-x: auto;
        }
    }

    @media only screen and (max-width: 480px) {
        .select-wrapper,
        .select-value,
        .custom-select {
            width: 100%;
        }

        .select-value {
            margin-bottom: 10px;
        }

        .page-title h3 {
            font-size: 20px;
        }
    }
</style>
<?php

$items = dat_ban_select_page('ma_dat_ban', 6);

?>





<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>DANH SÁCH ĐẶT BÀN</h3>
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
                    <div class="x_title">

                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />

                        <!-- Danh sách đặt bàn -->
                        <h4>Danh sách đặt bàn</h4>
                        <?php
                        if (isset($MESSAGE) && (strlen($MESSAGE) > 0)) {
                            echo '<h5 class="alert alert-warning">' . $MESSAGE . '</h5>';
                        }
                        ?>
                        <table width="100%" class=" col-sm-12 table table-hover table-bordered text-center">
                            <!-- Thêm tiêu đề cho danh sách đặt bàn -->
                            <thead>
                                <tr>
                                    <th>Mã Đặt Bàn</th>
                                    <th>Tên Khách Hàng</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Email</th>
                                    <th>Ngày đặt</th>
                                    <th>Giờ đặt</th>
                                    <th>Số người</th>
                                    <th>Tên bàn</th>
                                    <th>Ghi chú</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                    <!-- Thêm các cột khác tương ứng với thông tin đặt bàn -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($items as $datBan):
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $datBan['ma_dat_ban'] ?>
                                        </td>
                                        <td>
                                            <?= $datBan['ten_kh'] ?>
                                        </td>
                                        <td>
                                            <?= $datBan['sdt'] ?>
                                        </td>
                                        <td>
                                            <?= $datBan['email'] ?>
                                        </td>
                                        <td>
                                            <?= $datBan['ngay_dat'] ?>
                                        </td>
                                        <td>
                                            <?= $datBan['gio_dat'] ?>
                                        </td>
                                        <td>
                                            <?= $datBan['so_nguoi'] ?>
                                        </td>
                                        <td>
                                            <?= $datBan['ten_loai_ban'] ?>
                                        </td>
                                        <td>
                                            <?= $datBan['loi_nhan'] ?>
                                        </td>
                                        <td>
                                            <form action="index.php" method="post">
                                                <div class="select-wrapper" data-value="<?= $datBan['trang_thai'] ?>">
                                                    <div class="select-value">
                                                        <?php
                                                        switch ($datBan['trang_thai']) {
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
                                                            case 4:
                                                                echo "Đã hủy";
                                                                break;
                                                            default:
                                                                echo "";
                                                        }
                                                        ?>
                                                    </div>
                                                    <input type="hidden" name="ma_dat_ban"
                                                        value="<?= $datBan['ma_dat_ban'] ?>">
                                                    <select name="trang_thai" class="custom-select p-1"
                                                        class="<?= $color ?>">
                                                        <option w value="0" <?= ($datBan['trang_thai'] == 0) ? 'selected' : ''; ?>>
                                                            Chờ xác nhận
                                                        </option>
                                                        <option value="1" <?= ($datBan['trang_thai'] == 1) ? 'selected' : ''; ?>>
                                                            Đã xác nhận
                                                        </option>
                                                    </select>

                                                </div>
                                                <button type="submit" style="background: #2A3F54;"
                                                    class='btn p-1 text-white p-2' name="btn_xacnhan">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="index.php" method="post">
                                                <!-- Các input và button cần thiết cho chức năng xóa -->
                                                <input type="hidden" name="ma_dat_ban" value="<?= $datBan['ma_dat_ban'] ?>">
                                                <button type="submit" style="background: #FF0000;"
                                                    class='btn p-1 text-white p-2' name="btn_delete">
                                                    Xóa
                                                </button>

                                            </form>
                                        </td>
                                        <!-- Thêm các ô khác tương ứng với thông tin đặt bàn -->
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                        <!-- Nút thêm mới -->
                    </div>
                </div>
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