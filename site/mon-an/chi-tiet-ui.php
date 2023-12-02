
<link href="<?=$CONTENT_URL?>/assets/css/chitiet-ui.css" rel="stylesheet">
<body>
    <!-- Chi tiết sản phẩm -->
    <div class="container">
        <div class="row">
            <!-- Ảnh -->
            <div class="col-md-12 col-lg-6">
                <div class="card mb-3 float-right">
                    <div class="card-body text-center col-md-12">
                        <a href="#" data-toggle="modal" data-target="#productModal">
                            <img class="img-fluid" src="<?= $UPLOAD_URL . "/products/" . $hinh ?>" />
                            <p class="text-center">Xem ảnh</p>
                        </a>
                        <h4 class="card-title " style="color: #cda45e">
                            <?= $ten_mon_an ?>
                        </h4>
                        <?php
                        if (!empty($items) && is_array($items)) {
                            foreach ($items as $item) {
                                extract($item);
                                if ($don_gia > 0) {
                                    $percent_discount = number_format($gia_giam / $don_gia * 100);
                                } else {
                                    $percent_discount = 0;
                                }
                                // Rest of the code
                            }
                        }
                        ?>
                        <div class="product-price">
                            <div class="col d-flex justify-content-center align-items-center">
                                <del class="d-block">
                                    <?= number_format($don_gia, 0, ',') ?>đ
                                </del>
                                <p class="text-danger font-weight-bold d-block ml-3 mb-0">
                                    <?= number_format($don_gia - $gia_giam, 0, ',') ?>đ
                                </p>
                            </div>
                        </div>

                        <form method="get" action="liet-ke.php">
                            <div class="form-group">
                                <div class="input-group mb-3 justify-content-center">
                                </div>
                            </div>
                        </form>
                        <a href="<?= $SITE_URL . "/cart/add-cart.php?id=" . $mon_an['ma_mon_an'] ?>" class="btn btn-outline-dark mt-3">Thêm vào giỏ hàng</a>
                        <div class="product_rassurance mt-2">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br />Giao hàng nhanh</li>
                                <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br />Bảo mật</li>
                                <li class="list-inline-item"><i class="fa fa-phone fa-2x"></i><br />0101010101101</li>
                            </ul>
                        </div>
                        <div class="reviews_product p-3 mb-2 ">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            (4/5)
                            <a class="pull-right" href="#reviews">Xem tất cả đánh giá</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mô tả và Bình luận -->
            <div class="col-md-12 col-lg-6 ">
                <div class="row">
                    <!-- Mô tả -->
                    <div class="col-sm-12" id="danh_gia">
                        <div class="card mb-3">
                            <div class="card-header text-white text-uppercase" style="background-color: #cda45e"><i class="fa fa-align-justify"></i>
                                Mô tả sản phẩm
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    <?= $mo_ta_mon ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Bình luận -->
                    <div class="col-md-12">
                        <?php require "binh-luan.php"; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sản phẩm cùng loại -->
        <section class="col-md-10 mx-auto">
            <h2 class="title text-center" style="background-color: #cda45e; color:white;">Sản phẩm cùng loại</h2>
            <?php require "hang-cung-loai.php"; ?>
        </section>
        <!-- Modal ảnh -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="productModalLabel">
                            <?= $ten_mon_an ?>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <img class="img-fluid" src="<?= $UPLOAD_URL . "/products/" . $hinh ?>" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
