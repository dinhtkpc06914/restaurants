<style>
    body {
        margin: 0;
        padding: 0;
        background-image: url(<?= $CONTENT_URL ?>/assets/img/gallery/gallery-1.jpg);
        background-size: cover;
        /* Ensure the background image covers the entire viewport */
        font-family: 'Arial', sans-serif;
        margin-top: 10rem;
    }

    /* Add any additional styling to make elements stand out */




    .step .icon {
        font-size: 1.5rem;

    }

    @media (max-width: 768px) {
        .track {
            flex-direction: column;
            align-items: flex-start;
        }

        .step {
            width: 100%;

        }
    }
</style>


<link href="<?= $CONTENT_URL ?>/assets/css/chi_tiet_hd.css" rel="stylesheet">

<body>
    <?php
    $currentDateTime = date('Y-m-d H:i:s'); // Include hours, minutes, and seconds
    $futureDateTime = date('Y-m-d H:i:s', strtotime($currentDateTime . ' + 1 hours'));
    ?>

    <?php
    foreach ($order2 as $item) {
        extract($item);
    }

    foreach ($order as $orders):
        // Trang thái đơn hàng
        $order_trang_thai = 'Chưa xác nhận';
        if ($orders['trang_thai'] == 1) {
            $order_trang_thai = 'Đã xác nhận';
        } elseif ($orders['trang_thai'] == 2) {
            $order_trang_thai = 'Đang giao';
        } elseif ($orders['trang_thai'] == 3) {
            $order_trang_thai = 'Giao thành công';
        }elseif($orders['trang_thai'] == 4) {
            $order_trang_thai = 'Đã hủy';
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_trang_thai_order"])) {
            $trang_thai = $_POST["trang_thai"];
            $order_id = $_POST["order_id"];
            hoa_don_update($ma_hoa_don, $trang_thai);
        }
        ?>

        <div class="container pt-4 ">
            <article class="">

                <hr>
                <div class="card">

                    <h3 class="text-center" style="background-color: #cda45e;"> Chi tiết đơn hàng</h3>

                    <div class="card-body">
                        <a name="btn_list" class="text-white btn btn-dark col-sm-1" href="hoadon.php?btn_list">
                            <i class="bi bi-chevron-double-left">Quay lại</i>
                        </a>

                        <article class="card transparent-bg">
                            <div class="card-body row">
                                <div class="col text-black">
                                    <strong>Đặt hàng:</strong>
                                    <?= $orders['ngay_dat'] ?><br>
                                </div>
                                <div class="col text-black">
                                    <strong>Dự kiến giao hàng:</strong>
                                    <?php echo $futureDateTime; ?><br>
                                </div>
                                <div class="col text-black">
                                    <strong>Trạng thái:</strong>
                                    <?= $order_trang_thai ?><br>
                                </div>
                            </div>
                        </article>
                        <input type="hidden" name="order_details" value="item">
                        
                        <div class="track">
                       
                            <div class="step active">
                                <span class="icon"><i class="fa fa-check text-black"></i></span>
                                <span class="text text-dark">Đang chờ xác nhận</span>
                            </div>
                           
                            <div class="step <?php if ($orders['trang_thai'] == 1 || $orders['trang_thai'] == 2 || $orders['trang_thai'] == 3)
                                echo 'active' ?>">
                                    <span class="icon"><i class="fa fa-user text-black"></i></span>
                                    <span class="text text-dark">Đã xác nhận</span>
                                </div>
                                <div class="step <?php if ($orders['trang_thai'] == 2 || $orders['trang_thai'] == 3)
                                echo 'active' ?>">
                                    <span class="icon"><i class="fa fa-truck text-black"></i></span>
                                    <span class="text text-dark">Đang giao</span>
                                </div>
                                <div class="step <?php if ($orders['trang_thai'] == 3)
                                echo 'active' ?>">
                                    <span class="icon"><i class="fa fa-check text-dark"></i></span>
                                    <span class="text text-dark">Đã giao hàng</span>
                                </div>
                              
                            </div>

                            <hr>

                            <table class="table table-bordered transparent-bg card">
                                <tbody>
                                    <tr>
                                        <td class="col-md-2 text-dark">
                                            <figure class="itemside d-flex">
                                                <div class="aside">
                                                    <img src="<?= $UPLOAD_URL . '/products/' . $item['hinh'] ?>"
                                                    class="img-sm border">
                                            </div>
                                        </figure>
                                    </td>
                                    <td class="container col-sm-4 text-dark">
                                        <div class="item-details">
                                            <div class="item-property">
                                                <strong>Tên món ăn:</strong>
                                                <?= $item['ten_mon_an'] ?>
                                            </div>
                                            <div class="item-property mt-2">

                                            </div>
                                            <div class="item-property mt-2">
                                                <strong>Đơn giá:</strong>
                                                <del>
                                                    <?= number_format($item['don_gia'], 0, ".", ".") ?>đ
                                                </del>
                                                <span>
                                                    <?= number_format((($item['don_gia'] - $item['gia_giam'])), 0, ".", ".") ?>đ

                                                </span>
                                            </div>
                                            <div class="item-property mt-2">
                                                <strong>Số lượng:</strong>
                                                <?= $item['so_luong'] ?>

                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-lg-12 ">
                                            <div class=" mb-4">
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
                                                            <p class="mb-0 text-right">Miễn phí </p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <p class="mb-0 text-right">Tổng cộng:</p>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <p style="font-size: 1.5rem;"
                                                                class="mb-0 text-right text-danger fw-500">
                                                                <?= $orders['tong_tien'] ?>đ
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </article>
        </div>
    <?php endforeach; ?>
</body>