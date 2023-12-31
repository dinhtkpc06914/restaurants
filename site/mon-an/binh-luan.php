<style>
    #page-item {
        background-color: #cda45e;

    }

    #reviews {
        margin-bottom: 5rem;
    }
</style>
<div class="container">

    <div class="" id="reviews">
        <div class="card  " id="reviews">
            <div class="card-header text-white text-uppercase" style="background-color: #cda45e"><i
                    class="fa fa-comment text-center"></i> Đánh giá
            </div>
            <div class="card-body text-dark">
                <?php foreach ($binh_luan_list as $bl): ?>
                    <div class="review">
                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                        <meta itemprop="datePublished" content="01-01-2023">
                        <?= $bl['ngay_binh_luan'] ?>

                        <?php for ($i = 1; $i <= $bl['xep_hang']; $i++) {
                            echo '<span class="review_xep_hang fa fa-star"style="color:#cda45e ;"></span>';
                        } ?>

                        bởi <b>
                            <?= $bl['ho_ten'] ?>
                        </b>
                        <img width="40" height="40" class="rounded-circle object-fit-cover"
                            src="<?= $UPLOAD_URL . "/users/" . $bl['hinh'] ?>" />
                        <p class="blockquote">
                        <p class="">
                            <?= $bl['noi_dung'] ?>
                        </p>
                        </p>
                        <hr>
                    </div>
                <?php endforeach ?>
                <nav aria-label="..." class="text-center">
                    <ul class="pagination justify-content-center">
                        <?php if ($_SESSION['page'] > 1) { ?>
                            <li class="page-item">
                                <a class="page-link mr-2"
                                    href="?ma_mon_an=<?= $ma_mon_an ?>&page=<?= $_SESSION['page'] - 1 ?>"
                                    aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        <?php } ?>
                        <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++) { ?>
                            <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                                <a id="page-item" class="page-link mr-2" href="?ma_mon_an=<?= $ma_mon_an ?>&page=<?= $i ?>">
                                    <?= $i ?>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($_SESSION['page'] < $_SESSION['total_page']) { ?>
                            <li class="page-item">
                                <a class="page-link mr-2"
                                    href="?ma_mon_an=<?= $ma_mon_an ?>&page=<?= $_SESSION['page'] + 1 ?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>

            </div>
            <?php

            if (!isset($_SESSION['user'])) {
                echo '<h5 class="text-center"><i class="text-danger">Đăng nhập để bình luận về sản phẩm này</i></h5>';
            } else {

                ?>
                <div class="text-center" id="bl">
                    <h5>Đánh giá</h5>
                    <form action="" method="POST">
                        <div class="xep_hang " style="color:#cda45e ;">
                            <input type="radio" name="xep_hang" value="5" id="5" checked>
                            <label for="5"><i class="bi bi-star-fill"></i></label>
                            <input type="radio" name="xep_hang" value="4" id="4">
                            <label for="4"><i class="bi bi-star-fill"></i></label>
                            <input type="radio" name="xep_hang" value="3" id="3">
                            <label for="3"><i class="bi bi-star-fill"></i></label>
                            <input type="radio" name="xep_hang" value="2" id="2">
                            <label for="2"><i class="bi bi-star-fill"></i></label>
                            <input type="radio" name="xep_hang" value="1" id="1">
                            <label for="1"><i class="bi bi-star-fill"></i></label>
                        </div>
                        <div class="comment-area">
                            <textarea class="form-control" name="noi_dung" placeholder="Nội dung..." rows="2"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-outline-dark btn-dark send px-5 text-white">Đăng bình luận
                                <i class="fa fa-long-arrow-right ml-1"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <?php
            } ?>
        </div>
    </div>
</div>