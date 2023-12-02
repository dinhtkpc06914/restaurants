<!-- ============== COMPONENT SLIDER ITEMS SLICK  ============= -->





<!-- Body -->

<style>
    body {
        background-image: url(<?= $CONTENT_URL ?>/assets/img/hero-bg.jpg);
        background-size: 100%;
        /* Có thể điều chỉnh kích thước ảnh nếu cần */
        /* Thêm các thuộc tính CSS khác tùy theo nhu cầu của bạn */
    }

    #back-home {
        color: white;
        background-color: #cda45e;
        margin-left: 2rem;
    }

    #back-home:hover {
        color: #cda45e;
        background-color: white;
    }
    .product-img{
        width: 19rem;
        height: 15rem;
    }
</style>

<body>
    <div class="container " id="container " data-aos="zoom-in" data-aos-delay="60">
        <div class="row" style="background-url">
          
            <!-- Sản phẩm -->

            <div class="row ">

                <?php foreach ($mon_an_cung_loai as $mon_an_cl):

                    if ($don_gia > 0) {
                        $p_d_mon_an_cl = number_format($mon_an_cl['gia_giam'] / $mon_an_cl['don_gia'] * 100);
                    } else {
                        $p_d_mon_an_cl = 0;
                    }

                    ?>
                    <div class="col-md-4 mt-3">
                        <div class="card text-center product-card pb-2">
                            <div class="product-badge text-danger" style="background-color: #cda45e">
                                <?= $mon_an_cl['gia_giam'] == 0 ? '' : '-' . $p_d_mon_an_cl . '%' ?>
                            </div>
                            <a class="product-thumb"
                                href="<?= $SITE_URL . '/mon-an/chi-tiet.php?ma_mon_an=' . $mon_an_cl['ma_mon_an'] ?>"
                                data-abc="true"><img class="product-img"
                                    src="<?= $UPLOAD_URL . "/products/" . $mon_an_cl['hinh'] ?>">
                                <div class="card-body p-0 pt-3 px-2">
                                    <h4 class="product-title mh-60">
                                        <a cla href="<?= $SITE_URL . '/mon-an/chi-tiet.php?ma_mon_an=' . $mon_an_cl['ma_mon_an'] ?>"
                                            data-abc="true">
                                            <?= $mon_an_cl['ten_mon_an'] ?>
                                        </a>
                                    </h4>
                                    <div class="product-price">
                                        <div class="col d-flex justify-content-center align-items-center">
                                            <del class="d-block fz-14">
                                                <?= number_format($mon_an_cl['don_gia'], 0, ',') ?>đ
                                            </del>
                                            <p class="text-danger font-weight-bold fz-20 d-block ml-3 mb-0">
                                                <?= number_format($mon_an_cl['don_gia'] - $mon_an_cl['gia_giam'], 0, ',') ?>đ
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col m-2">
                                        <a href="<?= $SITE_URL . "/cart/add-cart.php?id=" . $mon_an_cl['ma_mon_an'] ?>"
                                            class="btn btn-outline-dark">Thêm vào giỏ hàng</a>

                                    </div>
                                </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
         

    </div>
   
</body>