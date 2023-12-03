<style>
   body {
  background-image: url(<?=$CONTENT_URL?>/assets/img/about-bg.jpg);
  background-size: 100% ; /* Có thể điều chỉnh kích thước ảnh nếu cần */
  /* Thêm các thuộc tính CSS khác tùy theo nhu cầu của bạn */   
  margin-top: 160px;
 
}
#price-product{
    color: red;
}
.thanh_tien_sp{
    color: red;
}
 </style>
<body class="">

<div class="">
    <form action="" method="POST" class="m-auto w-100" id="invoice" enctype="multipart/form-data">
        <p class="pt-3 pl-5 text-warning h4"><i class="fas fa-map-marker-alt p-2"></i>Địa chỉ giao hàng của bạn</p>
        <div class="container-fluid">
            <div class="row px-xl-5">
                <div class="col-12">
                    <nav class="breadcrumb bg-light mb-30">
                        <p class="breadcrumb-item text-dark font-weight-bold"><?= $ma_kh ?></p>
                        <p class="breadcrumb-item text-dark font-weight-bold">(+84)<?= $sdt ?></p>
                        <p class="breadcrumb-item text-dark"><?= $dia_chi ?></p>
                    </nav>
                </div>
            </div>
        </div>
    </form>
</div>
<div>
    <?php
    $totalAll = 0;

    // Kiểm tra nếu có session 'cart'
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $index => $item) {
            // Tính tổng tiền cho từng sản phẩm với giảm giá nếu có
            $itemTotal = $item['sl'] * ($item['don_gia'] - $item['gia_giam']);
            $totalAll += $itemTotal + 20000;
            // Cập nhật tổng tiền của sản phẩm trong session
            $_SESSION['cart'][$index]['total'] = $itemTotal;
        }
    }
    ?>
    <div class="container-fluid">
        <?php if (isset($_SESSION['cart'])) : ?>
            <div class="row px-xl-5">
                <div class="col-lg-8 table-responsive mb-5">
                    <table class="table table-light table-borderless table-hover text-center mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Món ăn</th>
                                <th>Đơn giá</th>
                                <th>Giá giảm</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            <?php foreach ($_SESSION['cart'] as $index => $item) :?>
                               
                                <tr>
                                    <td class="align-middle"> <?= $item['ten_mon_an'] ?></td>
                                    <td class="align-middle" id="price-product"><?= number_format($item['don_gia'], 0, ".") ?> đ</span><input type="hidden" class="don_gia_an" name="don_gia" value="<?= $item['don_gia'] ?>"></td>
                                    <td class="align-middle" id="price-product"><?= number_format($item['gia_giam'], 0, ".") ?></span> đ <input type="hidden" class="giam_gia_an" name="sl" value="<?= $item['sl'] ?>"></td>
                                    <td class="align-middle">
                                        <div class="input-group quantity mx-auto" style="width: 100px;" name="update_sl" oninput="updateCart(this, <?= $index ?>)" value="<?= $item['sl'] ?>" min="1" max="10">

                                            <p class="form-control sl" name="update_sl" onchange="this.form.submit()" ><?= $item['sl'] ?></p>

                                        
                                        </div>
                                    </td>
                                    <td class="align-middle"> <span class="thanh_tien_sp " id="thanh_tien_sp<?= $index ?>" data-don_gia="<?= $item['don_gia'] ?>" data-sl="<?= $item['sl'] ?>"><?= number_format($item['total'], 0, ".") ?></span> đ</td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                   
                 
                    <div class=" p-30 mb-5">
                        <form action="<?= $SITE_URL . '/cart/checkoutOnline.php' ?>" method="POST">
                        <div class="border-bottom pb-2 ">
                            <div class="d-flex justify-content-between mb-3">
                                <h6 cla>Đơn giá</h6>
                                <h6 id="price-product"><span class="thanh_tien_sp " id="thanh_tien_sp_<?= $index ?>" data-don_gia="<?= $item['don_gia'] ?>" data-sl="<?= $item['sl'] ?>"><?= number_format($item['total'], 0, ".") ?></span> đ</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Phí ship</h6>
                                <h6 class="font-weight-medium" id="price-product">20000đ</h6>
                            </div>
                        </div>
                        <div class="pt-2">
                            <div class="d-flex justify-content-between mt-2">
                                <h5>Tổng tiền</h5>
                                <h5 id="price-product"><?= number_format($totalAll, 0, ".") ?>đ</h5>
                            </div>
                            <button type="submit" name="redirect" class="btn btn-block btn-primary font-weight-bold my-3 py-3" style="background-color: #cda45e">Thanh toán Vnpay</button>
                            <a href="<?= $SITE_URL . "/cart/list-cart.php?delivery" ?>"><button type="button" class="btn btn-block btn-primary font-weight-bold my-3 py-3" style="background-color: #cda45e">Thanh toán khi nhận hàng</button></a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="row m-1 pb-5">
                <h6 class="col-12">The shopping cart currently has no products</h6>
                <a class="btn btn-outline-dark col-12" href="<?= $ROOT_URL ?>"> On the home</a>
            </div>
            <script>
                function updateCart(inputElement, index) {
                    // Get the values needed for calculation
                    var don_gia = parseFloat(document.querySelector('#thanh_tien_sp_' + index).getAttribute('data-don_gia'));
                    var sl = parseFloat(document.querySelector('#thanh_tien_sp_' + index).getAttribute('data-sl'));
                    var quantity = parseInt(inputElement.value);

                    // Calculate the new total for the item with sl
                    var newTotal = quantity * (don_gia - sl);

                    // Update the displayed total for the item
                    document.querySelector('#thanh_tien_sp_' + index).innerText = formatCurrency(newTotal);

                    // Update the total money for the entire cart
                    updateTotalMoney();
                }

                function updateTotalMoney() {
                    var totalAll = 0;
                    var totalElements = document.querySelectorAll('.thanh_tien_sp');

                    totalElements.forEach(function(element) {
                        totalAll += parseFloat(element.innerText.replace(',', '')); // Remove commas from the currency format
                    });

                    // Update the displayed total money for the entire cart
                    document.getElementById('tong_thanh_tien').innerText = formatCurrency(totalAll);
                }

                function formatCurrency(amount) {
                    // Format the currency with commas
                    return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                }
            </script>
        <?php endif; ?>
    </div>
</body>