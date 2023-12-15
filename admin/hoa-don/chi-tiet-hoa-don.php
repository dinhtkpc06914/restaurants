<div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>CHI TIẾT ĐƠN HÀNG</h3>
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
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                                <article class="card">
        <?php foreach ($order2 as $item) {
            extract($item);
        }
        foreach ($order as $orders):
            ?>
           <table class="table table-bordered">
    <tbody>
        <tr>
            <td class="col-md-4 text-dark">
                <figure class="itemside d-flex">
                    <div class="aside">
                        <img width="200rem" src="<?= $UPLOAD_URL . '/products/' . $item['hinh'] ?>" class="img-sm border">
                    </div>
                    <td class="container  col-sm-8">
                        <div class="item-details">
                            <div class="item-property">
                                <strong>Tên món ăn:</strong>
                                <?= $item['ten_mon_an'] ?>
                            </div>
                            <div class="item-property mt-2">
                                <strong>Giá giảm:</strong>
                                <?=number_format($item['gia_giam'],0,".",".") ?>
                            </div>
                            <div class="item-property mt-2">
                                <strong>Đơn giá:</strong>
                                <?=number_format($item['don_gia'],0,".",".") ?>
                            </div>
                            <div class="item-property mt-2">
                                <strong>Số lượng:</strong>
                                <?= $item['so_luong'] ?>
                            </div>
                        </div>
                    </td>
                    <figcaption class="info align-self-center">
                        <p class="title"></p>
                        <strong class="text-primary"></strong>
                    </figcaption>
                </figure>
            </td>
            <td>
           
                <div class="col-lg-12 ">
                    <div class="card mb-4">
                        <div class="card-body text-dark">
                            <div class="row ">
                                <div class="col-sm-4">
                                    <p class="mb-0 text-right">Họ và tên:</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="mb-0 text-right">
                                        <?= $orders['ho_ten'] ?>
                                    </p>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0 text-right">Địa chỉ giao hàng:</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="mb-0 text-right">
                                        <?= $item['dia_chi'] ?>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0 text-right">Phí vận chuyển:</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="mb-0 text-right">Miễn phí</p>
                                </div>
                            </div>

                            <hr>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0 text-right">Tổng cộng:</p>
                                </div>
                                <div class="col-sm-8">
                                    <p style="font-size: 1.5rem;" class="mb-0 text-right text-danger fw-500">
                                        <?= $orders['tong_tien'] ?>đ
                                    </p>
                                </div>
                            </div>
                            </div>
                            </div>
                         
                        
            </td>
        </tr>
    </tbody>
</table>
           
        </article>
    </div>
<?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<style>
    #thong-tin{
        margin-bottom: 20rem;
    }
</style>

   