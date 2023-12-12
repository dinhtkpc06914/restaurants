<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>CHI TIẾT BÌNH LUẬN</h3>
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
                        <form action="?btn_delete_all" method="post">


                            <table width="100%" class="table table-hover table-bordered text-center">
                                <thead class="" style="background: #2A3F54;">
                                    <tr class="text-white">
                                        <th><input type="checkbox" id="select-all"></th>
                                        <th>Món ăn </th>
                                        <th>Nội dung</th>
                                        <th>Ngày bình luận</th>
                                        <th>Người bình luận </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($items as $item) {
                                        extract($item);
                                        ?>
                                        <tr>
                                            <td><input type="checkbox" name="ma_binh_luan[]" value="<?= $ma_binh_luan ?>">
                                            </td>
                                            <td>
                                                <?= $items[0]['ten_mon_an'] ?>
                                            </td>
                                            <td>
                                                <?= $noi_dung ?>
                                            </td>
                                            <td>
                                                <?= $ngay_binh_luan ?>
                                            </td>
                                            <td>
                                                <?= $ma_kh ?>
                                            </td>
                                            <td class="text-end">
                                                <a href="index.php?btn_delete&ma_binh_luan=<?= $ma_binh_luan ?>&ma_mon_an=<?= $ma_mon_an ?>"
                                                    class="btn btn-outline-danger btn-rounded"
                                                    onclick="return checkDelete()"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <button style="background: #2A3F54;" type="submit" class="btn text-white" id="deleteAll"
                                onclick="return checkDelete()">
                                Xóa mục đã chọn</button>
                            <a style="background: #2A3F54;" class="btn text-white" href="index.php">Quay lại</a>
                            <input type="hidden" name="ma_mon_an" value="<?= $ma_mon_an ?>">
                            <div class="mt-3" width="100%">
                                <ul class="pagination justify-content-center">
                                    <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++) { ?>

                                        <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                                            <a style="background: #2A3F54;" class="page-link"
                                                href="?ma_mon_an=<?= $ma_mon_an ?>&page=<?= $i ?>">
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
