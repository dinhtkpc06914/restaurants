<?php 

?>
<div class="card">
    <div class="card-header  text-white text-uppercase" role="tab" id="headingOne" style="background-color: #cda45e" >
        <h6 class="mb-0" >
            <a class="text-white d-block" data-toggle="collapse" href="#collapseOne" aria-expanded="true"
                aria-controls="collapseOne" >
                <i class="fa fa-list"></i> Danh mục
            </a>
        </h6>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">

        <ul class="list-group category_block">
            <?php foreach ($ds_loai as $loai) : ?>
            <li class="list-group-item">
                <a class="d-block"
                    href="<?= $SITE_URL . "/mon-an/liet-ke.php?ma_loai=" . $loai['ma_loai_mon'] ?>"><?= $loai['ten_loai_mon'] ?></a>
            </li>
            <?php endforeach ?>

        </ul>
        
    </div>
</div>