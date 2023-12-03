<!-- Body -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=$CONTENT_URL?>/assets/css/liet-ke.css" rel="stylesheet">
 <style>
 body {
    background-image: url('<?=$CONTENT_URL ?>/assets/img/hero-bg.jpg');
    background-size: cover; /* Use cover for a better background image display */
    margin: 0; /* Remove default margin */
    font-family: Arial, sans-serif; /* Set a common font family */
    background-size: 100%;
}
</style>
</head>
<body>
<div class="container " id="container " data-aos="zoom-in" data-aos-delay="60">
        <div class="row" style="background-url">
            <div class="col-md-4 " style="margin-top: 12rem">
                <div class="col-md-10">
                    <!-- Danh mục -->
                    <div id="accordion " class="col-sm-12">
                        <?php require "../layout/danh_muc.php"; ?>
                        <?php require "../layout/dac-biet.php"; ?>
                    </div>
                </div>

            </div>
            <!-- Sản phẩm -->   
            <div class="col-md-8" style="margin-top: 150px;">
                <h2 class=" text-center   " style="margin-top: 2rem; background-color:  #cda45e;  ; color:white">
                    Thực đơn của SIMPLE SAVORY </h2>
                <div class="row ">
                    <?php foreach ($items as $item):
                        extract($item);
                        if ($don_gia > 0) {
                            $percent_discount = number_format($gia_giam / $don_gia * 100);
                        } else {
                            $percent_discount = 0;
                        }
                        ?>
                        <div class="col-lg-4 mt-3">
                            <div class="card text-center product-card pb-2">
                                <div class="product-badge text-danger" style="background-color: #cda45e">
                                    <?= $gia_giam == 0 ? '' : '-' . $percent_discount . '%' ?>
                                </div>
                                <a class="product-thumb"
                                    href="<?= $SITE_URL . '/mon-an/chi-tiet.php?ma_mon_an=' . $ma_mon_an ?>"
                                    data-abc="true">
                                    <img class="card-img-top product-img object-fit-contain" height="200px"
                                        src="<?= $UPLOAD_URL . '/products/' . $hinh ?>" alt="Ảnh sản phẩm">
                                </a>
                                <div class="card-body p-0 pt-3 px-2">
                                    <h5 class="product-title mh-60 ">
                                        <a style="color: #cda45e" class=""
                                            href="<?= $SITE_URL . '/mon-an/chi-tiet.php?ma_mon_an=' . $ma_mon_an ?>">
                                            <?= $ten_mon_an ?>
                                        </a>
                                    </h5>
                                    <div class="product-price">
                                        <div class="col d-flex justify-content-center align-items-center">
                                            <del class="d-block text-muted fz-14">
                                                <?= number_format($don_gia, 0, ',') ?>đ
                                            </del>
                                            <p class="text-danger font-weight-bold fz-20 d-block ml-3 mb-0">
                                                <?= number_format($don_gia - $gia_giam, 0, ',') ?>đ
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col m-2">
                                        <a href="<?= $SITE_URL . "/cart/add-cart.php?id=" . $item['ma_mon_an'] ?>"
                                            class=" btn btn-outline-dark  ">Thêm vào giỏ hàng</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="row mt-5 justify-content-center">
                 <ul class="pagination">
                     <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++) { ?>
                     <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                         <a class="page-link" id="back-home" href="?page=<?= $i ?>"><?= $i ?></a>
                     </li>
                     <?php } ?>
                 </ul>
             </div>
            </div>

        </div>
    </div>
</body>
</html>