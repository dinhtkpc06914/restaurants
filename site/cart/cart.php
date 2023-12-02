
<style>
    body {
        background-image: url(<?= $CONTENT_URL ?>/assets/img/about-bg.jpg);
        background-size: 100%;
        /* Có thể điều chỉnh kích thước ảnh nếu cần */
        /* Thêm các thuộc tính CSS khác tùy theo nhu cầu của bạn */
        color: #fff;
    }

    .container {
        margin-top: 5rem;
    }

    h1 {
        margin-top: 5rem;
        margin-bottom: 0;
        color: #cda45e;
    }

    table {
        margin-top: 1rem;
    }

    th,
    td {
        text-align: center;
    }

    .btn-success,
    .btn-danger {
        margin-right: 1rem;
    }

    #back-home {
        color: white;
        background-color: #cda45e;
    }

    #back-home:hover {
        color: #cda45e;
        background-color: white;
    }
</style>
<?php
$totalAll = 0;

?>

<body>
    <div class="container " style="margin-top: 160px;">
        <h1 class="mb-3 pt-3 text-center">GIỎ HÀNG CỦA BẠN</h1>
        <?php
        if (isset($_SESSION['cart'])) {
            ?>
            <div class="row ">
                <table class="table ">
                    <thead class="thead text-center text-white  ">
                        <tr>
                            <th>Mã món ăn</th>
                            <th>Tên món ăn</th>
                            <th>Đơn giá</th>
                            <th>Giảm giá</th>
                            <th style="width:6rem">Số lượng</th>
                       
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody class="text-center text-white" id="giohang">

                        <?php foreach ($_SESSION['cart'] as $index => $item): ?>
                            <tr>
                                <td>
                                    <?= $index ?>
                                </td>
                                <td>
                                    <?= $item['ten_mon_an'] ?>
                                </td>
                                <td><span>
                                        <?= number_format($item['don_gia'], 0, ".") ?>
                                    </span> đ <input type="hidden" class="don_gia" name="don_gia"
                                        value="<?= $item['don_gia'] ?>"></td>
                                <td><span>
                                        <?= number_format($item['gia_giam'], 0, ".") ?>
                                    </span> đ <input type="hidden" class="gia_giam_an" name="gia_giam"
                                        value="<?= $item['gia_giam'] ?>"></td>
                                <td class="pt-1 m-auto">
                                    <form action="delete-cart.php?act=update_sl" method="post">
                                        <input type="number" class="form-control sl" name="update_sl"
                                            onchange="this.form.submit()" value="<?= $item['sl'] ?>">
                                        <input type="hidden" class="form-control" name="ma_mon_an" value="<?= $index ?>">
                                    </form>
                                </td>
                           
                                <td class="pt-1 m-auto">
                                    <a onclick="return confirm('Bạn chắc chắn muốn xóa ?');"
                                        href="<?= $SITE_URL . "/cart/delete-cart.php?act=delete&id=" . $index ?>"
                                        class="btn btn-outline-danger"> <i class="fas fa-trash-alt "></i></a>
                                </td>
                              
                            </tr>
                            <?php
                            $subtotal = (($item['don_gia'] - $item['gia_giam']) * $item['sl']);
                            $totalAll += $subtotal;
                            ?>
                        <?php endforeach; ?>
                        <tr class="text-center float-right">
                            <th colspan="5">Tổng thành tiền: </th>
                            <td>
                                <?= number_format($totalAll, 0, ".") ?> đ
                            </td>
                        </tr>
                    </tbody>
                    <tfoot id="tongdonhang">
                        <tr class="text-right">
                            <th colspan="6">
                                <a href="<?= $SITE_URL . "/cart/list-cart.php?form_invoice" ?>"
                                    class="btn btn-success">Thanh
                                    toán</a>
                                <a onclick="return confirm('Bạn chắc chắn muốn xóa tất cả ?');"
                                    href="<?= $SITE_URL . "/cart/delete-cart.php?act=deleteAll" ?>"
                                    class="btn btn-danger">Xóa
                                    tất
                                    cả</a>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        <?php } else { ?>
            <div class="row  m-1 pb-5">
                <h6 class="col-12 text-center">Không tồn tại sản phẩm nào trong giỏ hàng </h6>
                <a id="back-home" class="btn  col-12" href="<?= $ROOT_URL ?>">Về trang chủ</a>
            </div>
        <?php } ?>
    </div>
</body>
<script>
    $(document).ready(function () {
        // Function to update the total amount
        function updateTotalAmount() {
            var totalAmount = <?= $totalAll ?>;

            // Iterate through each row in the table
            $('#giohang tr').each(function () {
                // Get the quantity and unit price for the current row
                var quantity = parseInt($(this).find('.sl').val()) || 0;
                var unitPrice = parseFloat($(this).find('.don_gia').val().replace(',', '')) || 0;

                // Calculate subtotal for the current row
                var subtotal = quantity * unitPrice;

                // Update the displayed subtotal for the current row
                $(this).find('.thanh_tien_sp').text(subtotal.toLocaleString() + ' đ');

                // Add the subtotal to the total amount
                totalAmount += subtotal;
            });

            // Display the total amount in the footer
            $('#tongdonhang .text-right td').text(totalAmount.toLocaleString() + ' đ');
        }

        // Call the updateTotalAmount function on page load
        updateTotalAmount();

        // Attach an input event handler to update the total amount when quantity changes
        $('.sl').on('input', function () {
            updateTotalAmount();
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>