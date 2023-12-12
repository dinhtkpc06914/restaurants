<style>
    #thong-tin{
        margin-bottom: 20rem;
    }
</style>
<div class="container pt-4">
    <article class="card">
        <?php foreach ($order2 as $item) {
            extract($item);
        }
        foreach ($order as $orders):
            ?>
           <table class="table table-bordered">
    <tbody>
        <tr>
            <td class="col-md-4 text-dark">
                <figure class="itemside d-flex">
                    <div class="aside">
                        <img width="200rem" src="<?= $UPLOAD_URL . '/products/' . $item['hinh'] ?>" class="img-sm border">
                    </div>
                    <td class="container  col-sm-8">
                        <div class="item-details">
                            <div class="item-property">
                                <strong>Tên món ăn:</strong>
                                <?= $item['ten_mon_an'] ?>
                            </div>
                            <div class="item-property mt-2">
                                <strong>Giá giảm:</strong>
                                <?= $item['gia_giam'] ?>
                            </div>
                            <div class="item-property mt-2">
                                <strong>Đơn giá:</strong>
                                <?= $item['don_gia'] ?>
                            </div>
                            <div class="item-property mt-2">
                                <strong>Số lượng:</strong>
                                <?= $item['so_luong'] ?>
                            </div>
                        </div>
                    </td>
                    <figcaption class="info align-self-center">
                        <p class="title"></p>
                        <strong class="text-primary"></strong>
                    </figcaption>
                </figure>
            </td>
            <td>
           
                <div class="col-lg-12 ">
                    <div class="card mb-4">
                        <div class="card-body text-dark">
                            <div class="row ">
                                <div class="col-sm-4">
                                    <p class="mb-0 text-right">Họ và tên:</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="mb-0 text-right">
                                        <?= $orders['ho_ten'] ?>
                                    </p>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0 text-right">Địa chỉ giao hàng:</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="mb-0 text-right">
                                        <?= $item['dia_chi'] ?>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0 text-right">Phí vận chuyển:</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="mb-0 text-right">20.000đ</p>
                                </div>
                            </div>

                            <hr>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0 text-right">Tổng cộng:</p>
                                </div>
                                <div class="col-sm-8">
                                    <p style="font-size: 1.5rem;" class="mb-0 text-right text-danger fw-500">
                                        <?= $orders['tong_tien'] ?>đ
                                    </p>
                                </div>
                            </div>
                            </div>
                            </div>
                         
                        
            </td>
        </tr>
    </tbody>
</table>
           
        </article>
    </div>
<?php endforeach; ?>