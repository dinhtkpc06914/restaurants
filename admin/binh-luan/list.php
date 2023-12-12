<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>DANH SÁCH BÌNH LUẬN</h3>
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
                        <table width="100%" class="table table-hover table-bordered text-center">
                            <thead class="" style="background: #2A3F54;">
                                <tr class="text-white">
                                    <th>Món ăn</th>
                                    <th>Số bình luận</th>
                                    <th>Cũ nhất</th>
                                    <th>Mới nhất</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                foreach ($items as $item) {
                                    extract($item);

                                    ?>
                                    <tr>
                                        <td>
                                            <?= $ten_mon_an ?>
                                        </td>
                                        <td>
                                            <?= $so_luong ?>
                                        </td>
                                        <td>
                                            <?= $cu_nhat ?>
                                        </td>
                                        <td>
                                            <?= $moi_nhat ?>
                                        </td>
                                        <td class="text-end">
                                            <a href="../binh-luan/index.php?ma_mon_an=<?= $ma_mon_an ?>"
                                                class="btn btn-outline-info btn-rounded">Chi tiết <i
                                                    class="fas fa-info-circle"></i></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }

                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>