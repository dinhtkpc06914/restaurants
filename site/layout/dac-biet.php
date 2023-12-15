<style>
    .card {
        border: 1px solid #ddd; 
        border-radius: 10px; 
        overflow: hidden; 
    }

    .card-header {
        border-bottom: 1px solid #cda45e; 
    }

    .card-header a {
        text-decoration: none; 
    }

    .list-group-item {
        border: none; 
        border-bottom: 1px solid #ddd;
    }

    .list-group-item:hover {
        background-color: #f8f9fa; 
    }

    .thumbnail {
        overflow: hidden;
        border-radius: 5px; 
    }

    .img-fluid {
       width: 3rem;
        height:3rem;
        border-radius: 5px; 
    }
</style>
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
            <?php foreach ($hh_db as $hh_item) : ?>
            <li class="list-group-item px-2 py-3">
                <a class="d-flex align-items-center" href="<?= $SITE_URL . '/mon-an/chi-tiet.php?ma_mon_an=' . $hh_item['ma_mon_an'] ?>">
                    <div class="thumbnail">
                        <img class="img-fluid" src="<?= $UPLOAD_URL . '/products/' . $hh_item['hinh'] ?>" alt="<?= $hh_item['ten_mon_an'] ?>" >
                    </div>
                    <span class="ml-2 d-block"><?= $hh_item['ten_mon_an'] ?></span>
                </a>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>
