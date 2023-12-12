<style>
    body {
        background-image: url('<?= $CONTENT_URL ?>/assets/img/hero-bg.jpg');
        background-size: cover;
        /* Use cover for a better background image display */
        margin: 0;
        /* Remove default margin */
        font-family: Arial, sans-serif;
        /* Set a common font family */
        background-size: 100%;
        margin-top: 12rem;
    }

    .img-fluid {
        width: 28   rem;
        border-radius: 2rem;
    }
    
</style>

<body>
    <!-- Product-detail -->
    <div class="container">
        <div class="row">
            <!-- Image -->
            <div class=" col-lg-5">
                <div class="card mb-3">
                    <div class="card-body text-center ">
                        <a href="#" data-toggle="modal" data-target="#productModal">
                            <!-- Ảnh sản phẩm -->
                            <img class="img-fluid" src="<?= $UPLOAD_URL . "/products/" . $hinh ?>" />
                            <p class="text-center">Xem ảnh</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Add to cart -->
            <div class="col-12 col-lg-7 add_to_cart_block">
                <div class="card mb-3 text-center">
                <h4 style="background-color: #cda45e"  class="card-header text-white">
                            <?= $ten_mon_an ?>
                        </h4>
                    <div class="card-body text-center text-dark">
                       
                        <!-- Giá sản phẩm -->
                        <?php
                        if (!empty($items) && is_array($items)) {
                            foreach ($items as $item):
                                extract($item);
                                if ($don_gia > 0) {
                                    $percent_discount = number_format($gia_giam / $don_gia * 100);
                                } else {
                                    $percent_discount = 0;
                                }
                                // Rest of the code
                            endforeach;
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

                        <!-- <p class="price_discounted">149.90 $</p> -->
                        <form method="get" action="liet-ke.php">
                            <div class="form-group">
                                <div class="input-group mb-3 justify-content-center">
                                </div>
                            </div>
                        </form>

                        <div class=" mt-2">
                            <a href="<?= $SITE_URL . "/cart/add-cart.php?id=" . $ma_mon_an ?>"
                                class=" btn btn-outline-dark  ">Thêm vào giỏ hàng</a>

                        </div>
                        <div class="product_rassurance mt-3">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br />Giao hàng nhanh</li>
                                <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br />Bảo mật
                                </li>
                                <li class="list-inline-item"><i class="fa fa-phone fa-2x"></i><br />0101010101101
                                </li>
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
                        <div class="row ">
                            <!-- Description -->
                            <div class="col-lg-12 mt-4 ">
                                <div class="card mb-3" >
                                    <h5  style="background-color: #cda45e"  class="card-header text-white"><i class="fa fa-align-justify float-left"></i>
                                        Mô tả sản phẩm
                                    </h5>
                                    <div class="card-body text-dark">
                                        <p class="card-text ">
                                            <?= $mo_ta_mon ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Reviews -->
            <?php require "binh-luan.php"; ?>
         
        </div>
        <section id="sanpham-ui"  class="same-product col-sm-12">
      
        <?php require "hang-cung-loai.php"; ?>
    </section>
    </div>
    <!-- Same product -->
   

    <!-- Modal image -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
        aria-hidden="true">
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
</body>