<style>
    #back-home {
        color: white;
        background-color: #cda45e;
        margin-left: 2rem;
    }

    #back-home:hover {
        color: #cda45e;
        background-color: white;
    }

    .product-img {
        width: 100%;
        height: auto;
        max-width: 25rem;
        max-height: 15rem;
    }

    .container {
        margin-top: 2rem;
    }

    .product-card {

        position: relative;
        overflow: hidden;
        border: none;
        border-radius: 10px;
        transition: transform 0.3s ease-in-out;
    }

    .product-badge {

        position: absolute;
        top: 10px;
        left: 10px;
        padding: 5px 10px;
        color: white;
        font-size: 14px;
        border-radius: 5px;
    }

    .product-title {

        margin-top: 10px;
        font-size: 16px;
    }

    .product-price {

        margin-top: 10px;
    }

    .btn-add-to-cart {

        margin-top: 10px;
    }
    
</style>

<body>
    <div class="container" id="container" data-aos="zoom-in" data-aos-delay="60">
        <!-- Sản phẩm -->
        <div class="row">

            <?php foreach ($mon_an_cung_loai as $mon_an_cl):
                // Calculate discount percentage
                $p_d_mon_an_cl = ($don_gia > 0) ? number_format($mon_an_cl['gia_giam'] / $mon_an_cl['don_gia'] * 100) : 0;
                ?>
                <div class="col-md-4 mt-3">
                    <div class="card text-center  text-secondary">
                        <div class="product-badge" style="background-color: #cda45e">
                            <?= ($mon_an_cl['gia_giam'] == 0) ? '' : '-' . $p_d_mon_an_cl . '%' ?>
                        </div>
                        <a class="product-thumb"
                            href="<?= $SITE_URL . '/mon-an/chi-tiet.php?ma_mon_an=' . $mon_an_cl['ma_mon_an'] ?>"
                            data-abc="true">
                            <img class="product-img" src="<?= $UPLOAD_URL . "/products/" . $mon_an_cl['hinh'] ?>"
                                alt="<?= $mon_an_cl['ten_mon_an'] ?>">
                        </a>
                        <div class="card-body p-0 pt-3 px-2">
                            <h4 class="product-title mh-60">
                                <a href="<?= $SITE_URL . '/mon-an/chi-tiet.php?ma_mon_an=' . $mon_an_cl['ma_mon_an'] ?>"
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
                                    class="btn btn-outline-dark btn-add-to-cart">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>