<style>
    body {

        background-image: url(<?= $CONTENT_URL ?>/assets/img/gallery/gallery-1.jpg);
        background-size: cover;
        margin-top: 12rem;
        font-family: 'Arial', sans-serif;
        color: #333;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: bold;
        color: white;
    }


    input[type="radio"] {
        margin-right: 0.5rem;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 1.5rem;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        background-color: #dc3545;
        border-radius: 0.25rem;
    }

    th,
    td {
        padding: 1rem;
        text-align: center;
        border: 1px solid #e0e0e0;
    }

    th {
        background-color: #f8f9fa;
    }

    tfoot th {
        font-weight: bold;
        background-color: #f8f9fa;
    }

    .btn-success {
        background-color: #28a745;
        color: #fff;
        padding: 0.75rem;
        border: none;
        border-radius: 0.25rem;
        cursor: pointer;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    .error {
        color: #dc3545;
    }

    #phuong_thuc {
        color: black;
    }

   
</style>

<body>

    <body>

        <?php

        $totalAll = 0;

        if(isset($_SESSION['cart'])) {
            foreach($_SESSION['cart'] as $item) {
                $totalAll += (($item['don_gia'] - $item['gia_giam']) * $item['sl']);
            }
        }
        ?>
        <div class="container mb-5 bg-light">
            <div class="row">
              <div class="card">
                <div class="card-body">
                <div class="row m-1 pb-5">
                    <form action="<?= $SITE_URL.'/cart/invoice.php' ?>" method="POST" class="m-auto" id="invoice"
                        enctype="multipart/form-data" onsubmit="return validateForm(event)">

                        <div class="row">
                            <div class="col-sm-4">
                                <h5 class=" mb-3 pt-3 pb-3 pl-sm-4 shadow-sm text-center text-dark"
                                    style="margin-top: 5rem; background-color: #cda45e; border-radius:10rem;">Thông tin
                                    nhận hàng </h5>
                                <div class="form-group form">

                                    <label for="ho_ten" class="text-dark">Họ và tên</label>
                                    <input type="text" name="ho_ten" id="ho_ten" class="form-control rounded-pill"
                                        value="<?= $ho_ten ?>">
                                    <span id="full-name-error-message" class="error text-dark"></span>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="text-dark">Địa chỉ email</label>
                                    <input type="text" name="email" id="email" class="form-control rounded-pill"
                                        value="<?= $email ?>">
                                    <span id="email-error-message" class="error text-dark"></span>
                                </div>
                                <div class="form-group">
                                    <label for="sdt" class="text-dark">Số điện thoại</label>
                                    <input type="text" name="sdt" id="sdt" class="form-control rounded-pill"
                                        value="0<?= $sdt ?>">
                                    <span id="phone-error-message" class="error text-dark"></span>
                                </div>
                                <div class="form-group">
                                    <label for="dia_chi" class="text-dark">Địa chỉ nhận hàng</label>
                                    <input type="text" name="dia_chi" id="dia_chi" class="form-control rounded-pill"
                                        value="<?= $dia_chi ?>" placeholder="">
                                    <span id="dia_chi-error-message" class="error text-dark"></span>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="ma_kh" value="<?= $ma_kh ?>">
                                    <input type="hidden" name="ma_hd">
                                    <input type="hidden" name="tg_dat">
                                    <input type="hidden" name="trangthai">
                                    <label class="text-dark">Phương thức thanh toán </label>
                                    <br>
                                    <input type="radio" name="phuong_thuc" value="0" checked placeholder=""> <span class="text-dark"
                                        id="phuong_thuc">Thanh toán khi nhận
                                        hàng</span>
                                    <br>
                                    <input type="radio" name="phuong_thuc" value="1" placeholder=""> <span class="text-dark"
                                        id="phuong_thuc">Thanh toán VNPAY</span>
                                </div>

                                <div class="form-group">
                                    <label for="ghi_chu " class="text-dark">Ghi chú</label>
                                    <textarea name="ghi_chu" class="form-control" id="ghi_chu"></textarea>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <h5 class=" mb-3 pt-3 pb-3 pl-sm-4 shadow-sm text-center text-dark"
                                    style="margin-top: 5rem; background-color: #cda45e; border-radius:10rem;">
                                    CHI TIẾT
                                    ĐƠN ĐẶT MÓN</h5>
                                <div class="container">
                                    <div class="row m-1 pb-5">
                                        <table class="table table-responsive-md ">
                                            <thead class="thead text-center text-dark">
                                                <tr>
                                                    <th>Tên Món</th>
                                                    <th>Hình</th>
                                                    <th>Đơn giá</th>
                                                    <th>Giảm giá</th>
                                                    <th>Số lượng</th>
                                                    <th>Thành tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center" id="giohang">
                                                <?php foreach($_SESSION['cart'] as $item): ?>
                                                    <tr>
                                                        <td class="text-dark font-weight-bold">
                                                            <?= $item['ten_mon_an'] ?>
                                                            <input type="hidden" name="ten_mon_an"
                                                                value="    <?= $item['ten_mon_an'] ?>">

                                                            <input type="hidden" name="ma_mon_an"
                                                                value="<?= $item['ma_mon_an'] ?>">

                                                        </td>
                                                        <td class="text-dark font-weight-bold">
                                                            <img width="50rem"
                                                                src="<?= $UPLOAD_URL.'/products/'.$item['hinh'] ?>"
                                                                alt="">
                                                            <input type="hidden" name="hinh" value="<?= $item['hinh'] ?>">
                                                        </td>
                                                        <td>
                                                            <span class="text-danger font-weight-bold">
                                                                <?= number_format($item['don_gia'], 0, ".") ?>đ
                                                            </span>
                                                            <input type="hidden" class="don_gia_an" name="don_gia"
                                                                value="<?= $item['don_gia'] ?>">
                                                        </td>
                                                        <td>
                                                            <span class="text-danger font-weight-bold">
                                                                <?= number_format($item['gia_giam'], 0, ".") ?>đ
                                                            </span>
                                                            <input type="hidden" class="gia_giam_an" name="gia_giam"
                                                                value="<?= $item['gia_giam'] ?>">
                                                        </td>
                                                        <td class="pt-1 m-auto">
                                                            <input class="text-center" style="width: 3rem;" type="number"
                                                                class=" sl" name="so_luong" value="<?= $item['sl'] ?>"
                                                                readonly>
                                                        </td>
                                                        <td>
                                                            <span class="text-danger font-weight-bold">
                                                                <?= number_format((($item['don_gia']) - ($item['gia_giam'])) * ($item['sl']), 0, ".") ?>
                                                                <input type="hidden" name="gia"
                                                                    value=" <?= number_format((($item['don_gia']) - ($item['gia_giam'])) * ($item['sl']), 0, ".") ?>">đ
                                                            </span> 
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <tfoot id="tongdonhang" class="text-dark">
                                                <th colspan="4">Tổng thành tiền:</th>
                                                <td></td>
                                                <td class="text-danger font-weight-bold">
                                                    <span>
                                                        <?= number_format($totalAll, 0, ".", ".") ?>đ
                                                    </span>
                                                    <input type="hidden" name="tong_tien"
                                                        style="border: none; background: none;"
                                                        value="<?= $gia = number_format($totalAll, 0, ".", ".") ?>đ">
                                                    <input type="hidden" name="gia_phai_tra"
                                                        style="border: none; background: none;"
                                                        value="<?= $gia = number_format($totalAll, 0, ".", ".") ?>đ">
                                                </td>
                                            </tfoot>

                                        </table>
                                        <div class="text-end">
                                            <button type="submit" name="btn_thanh_toan"
                                                class="btn btn-success col-sm-6 btn-block pt-2 pb-2 rounded-pill"
                                                style="background-color: #cda45e;">
                                               THANH TOÁN 
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
                </div>
              </div>
            </div>
        </div>

        <script>
            document.getElementById('invoice').onsubmit = function (event) {
                var email = document.getElementById('email').value;
                var phoneNumber = document.getElementById('sdt').value;
                var fullName = document.getElementById('ho_ten').value;

                var dia_chi = document.getElementById('dia_chi').value;

                var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                if (!email.match(emailRegex)) {
                    document.getElementById('email-error-message').innerHTML = 'Email không hợp lệ';
                    event.preventDefault();
                } else {
                    document.getElementById('email-error-message').innerHTML = '';
                }

                var phoneRegex = /^\d{10,}$/;
                if (!phoneNumber.match(phoneRegex)) {
                    document.getElementById('phone-error-message').innerHTML = 'Số điện thoại không hợp lệ';
                    event.preventDefault();
                } else {
                    document.getElementById('phone-error-message').innerHTML = '';
                }

                if (fullName.trim() === '') {
                    document.getElementById('full-name-error-message').innerHTML = 'Họ tên không được để trống';
                    event.preventDefault();
                } else {
                    document.getElementById('full-name-error-message').innerHTML = '';
                }

                if (dia_chi.trim() === '') {
                    document.getElementById('dia_chi-error-message').innerHTML = ' Vui lòng nhập địa chỉ.';
                    event.preventDefault();
                } else {
                    document.getElementById('dia_chi-error-message').innerHTML = '';
                }
            }
        </script>
    </body>