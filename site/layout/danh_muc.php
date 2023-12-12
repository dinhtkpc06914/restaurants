<style>
    .card {
        margin-bottom: 20px;
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #cda45e;
        color: #fff;
        padding: 15px;
        border: none;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .card-header:hover {
        background-color: #b2874e;
    }

    .card-header a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
    }

    .card-header i {
        margin-right: 10px;
        font-size: 18px;
    }

    .collapse.show {
        padding: 15px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .list-group {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .list-group-item {
        padding: 15px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .list-group-item:last-child {
        border-bottom: none;
    }

    .list-group-item a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    .list-group-item:hover {
        background-color: #f5f5f5;
    }
</style>

<div class="card">
    <div class="card-header text-white text-uppercase" role="tab" id="headingOne" style="background-color: #cda45e" >
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