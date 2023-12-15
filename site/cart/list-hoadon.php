<style>
.track {
    position: relative;
    background-color: #ddd;
    height: 7px;
    display: flex;
    margin-bottom: 60px;
    margin-top: 50px;
}

.track .step {
    flex-grow: 1;
    width: 25%;
    margin-top: -18px;
    text-align: center;
    position: relative;
}

.track .step.active:before {
    background: #009CFF;
}

.track .step::before {
    height: 7px;
    position: absolute;
    content: "";
    width: 100%;
    left: 0;
    top: 18px;
}

.track .step.active .icon {
    background: #009CFF;
    color: #fff;
}

.track .icon {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    position: relative;
    border-radius: 100%;
    background: #ddd;
}

.track .step.active .text {
    font-weight: 400;
    color: #000;
}

.track .text {
    display: block;
    margin-top: 7px;
}

/* Header and Breadcrumbs */
.card-header {
    background-color: #FFF8DC;
    color: #fff;
}

.breadcrumb-item a {
    color: #343a40; 
}

.breadcrumb-item.active {
    color: #007bff;
}

/* Common Text Colors */
.text-black {
    color: #000;
}

.text-danger {
    color: #dc3545;
}

.text-primary {
    color: #007bff;
}

.text-dark {
    color: #343a40;
}

/* Background Colors */
.bg-light {
    background-color: #f8f9fa;
}

/* Card Styles */
.card {
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    margin-bottom: 30px;
}

.card-body {
    padding: 1.25rem;
}

/* Margin Bottom Reset */
.mb-0 {
    margin-bottom: 0;
}

/* Item Side Styles */
.itemside {
    position: relative;
    display: flex;
    width: 100%;
}

.itemside .aside {
    position: relative;
    flex-shrink: 0;
}

/* Product Image Styles */
.img-sm {
    width: 170px;
    height: 150px;
    padding: 7px;
}

/* Item Price and Name Styles */
.item-price {
    color: red;
}

.item-name {
    font-weight: bold;
    font-size: 18px;
    color: #333;
}

/* Table Styles */

/* Responsive Media Queries */
@media (max-width: 992px) {
    .track .step {
        width: 33.33%;
    }
}

@media (max-width: 768px) {
    .track .step {
        width: 50%;
    }
}

@media (max-width: 576px) {
    .track {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .track .step {
        width: 100%;
    }
}

/* Highlight Invoice Section */
#hd {
    padding: 40px;
    background-color: #FFF8DC	; /* Updated background color */
    color: #fff; /* Updated text color */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    margin-bottom: 2rem;
}
body{
    background-image: url(<?= $CONTENT_URL ?>/assets/img/nguvl.jpeg);
    margin-top: 10rem;
}
</style>

<?php

if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user']['ma_kh'];
    $items = hoa_don_select_with_khach_hang($ma_kh);

    foreach($items as $item) {
        extract($item);
        // Trang thái đơn hàng
        $order_trang_thai = 'Chưa xác nhận';
        if($trang_thai == 1) {
            $order_trang_thai = 'Đã xác nhận';
        } elseif($trang_thai == 2) {
            $order_trang_thai = 'Đang giao';
        } elseif($trang_thai == 3) {
            $order_trang_thai = 'Giao thành công';
        }
        elseif($trang_thai == 4) {
            $order_trang_thai = 'Đã hủy';
        }
        ?>
        
     <body>
        
     <div class="container">
   
            <article class="mb-3" id="hd">
          
                <div class="card-header">
                    <span class="fw-500 text-black">
                        Trạng thái:
                        <span class="text-danger fw-bold">
                            <?= $order_trang_thai ?>
                        </span>
                    </span>
                    <span class="float-right text-black">
                        Thời gian:
                        <span class="text-danger fw-bold">
                            <?= $ngay_dat ?>
                        </span>
                    </span>
                </div>

                <div class="card-body">
              
                    <ul class="row">
                        <li class="col-md-4">
                            <figure class="itemside mb-3">
                                <div class="aside">
                                    <img src="<?= $UPLOAD_URL.'/products/'.$item['hinh'] ?>" class="img-sm border">
                                </div>
                                <figcaption class="info ml-3 col-sm-10">
                                    <h5 class="text-dark mt-2">
                                        <?= $item['ten_mon_an'] ?>
                                    </h5>
                                    <span class="text-danger fw-bold">Đơn giá: <?= number_format($don_gia,0,".",".") ?>₫</span>
                                    <span style="font-size: 16px;" class="text-dark ml-3">
                                        Số lượng: <?= $so_luong ?>
                                    </span>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>

                    <hr class="text-dark fw-bold">

                    <div class="float-right">
                        <span class="text-dark fw-bold">Thành tiền: </span>
                        <span class="text-danger mr-3"><?= $tong_tien ?>₫</span>
                        <a href="invoice.php?btn_details=<?= $item['ma_hoa_don'] ?>" class="btn btn-custom text-dark"
                            id="btn-details" style="background-color: #cda45e;">
                            Chi tiết đơn hàng
                        </a>
                    </div>
                </div>
            </article>
        </div>
     </body>
<?php
    }
}
?>
