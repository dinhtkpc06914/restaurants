<div class="card mt-3">
    <div class="card-header text-white text-uppercase" role="tab" id="headingThree" style="background-color: #cda45e">
        <h6 class="mb-0">
            <a class="text-white d-block collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false"
                aria-controls="collapseThree">
                <i class="fab fa-slack"></i> Sản phẩm đặc biệt
            </a>
        </h6>
    </div>
    <div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingThree">
        <ul class="list-group category_block">
            <?php foreach ($hh_db as $hh_db) : ?>
            <li class="list-group-item px-2 py-3">
                <a class="d-flex align-items-center"
                    href="<?= $SITE_URL . '/mon-an/chi-tiet.php?ma_mon_an=' . $hh_db['ma_mon_an'] ?>">
                    <div class="">
                        <img class="img-fluid img-list" src="<?= $UPLOAD_URL . '/products/' . $hh_db['hinh'] ?>" alt=""  height="50px" width="40px">
                    </div>
                    <span class="ml-2 d-blocke"><?= $hh_db['ten_mon_an'] ?></span>
                </a>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>