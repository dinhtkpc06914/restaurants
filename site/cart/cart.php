<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style type="text/css">
   

    

    /* New CSS for responsiveness */
    @media screen and (max-width: 1000px) {
        .table tbody tr td,
        .table tfoot tr td {
            display: block;
            padding: .6rem;
            min-width: 120px;
        }

        .table tbody tr td:before,
        .table tfoot tr td {
            display: block;
            width: 100%;
        }

        table#cart thead {
            display: none;
        }

        .actions .btn {
            width: 100%;
            margin: 1.5em 0;
        }

        .actions .btn-info,
        .actions .btn-danger {
            float: none;
        }
    }
    body {
        margin-top: 10rem;
        background-image: url(<?= $CONTENT_URL ?>/assets/img/nguvl.jpeg);
        font: 1em sans-serif;
    }
</style>

<body>
    <?php
    $totalAll = 0;
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $totalAll += (($item['don_gia'] - $item['gia_giam']) * $item['sl']);
        }
    }
    ?>
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header text-center text-dark">
                <h3> GIỎ HÀNG CỦA TÔI</h3>
            </div>
            <div class="card-body">
                <?php if (isset($_SESSION['cart'])): ?>
                    <div class="container bg-light">
                        <table id="cart" class="table table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th style="width:50%">Món ăn</th>
                                    <th style="width:10%">Đơn giá</th>
                                    <th style="width:8%">Số lượng</th>
                                    <th style="width:22%" class="text-center">Thành tiền</th>
                                    <th style="width:10%"> </th>
                                </tr>
                            </thead>
                            <tbody id="giohang">
                                <?php foreach ($_SESSION['cart'] as $index => $item): ?>
                                    <tr class="col-sm-10">
                                        <td data-th="Món ăn">

                                            <div class="row ">
                                                <div class="col-sm-2 hidden-xs"><img
                                                        src="<?= $UPLOAD_URL . '/products/' . $item['hinh'] ?>" alt="Sản phẩm 1"
                                                        class="img-responsive" width="100">
                                                </div>
                                                <div class="col-sm-8 mt-4 ml-2">
                                                    <h6 class="nomargin">
                                                        <?= $item['ten_mon_an'] ?>
                                                    </h6>

                                                </div>
                                            </div>
                                        </td>
                                        <td data-th="Đơn giá" class="d-flex mr-2">                                
                                            <span class="mr-2">
                                               <del>
                                               <?= number_format($item['don_gia'], 0, ".", ".") ?>đ
                                               </del>
                                            </span> 

                                            <input type="hidden" class="don_gia " name="don_gia"
                                                value="<?= $item['don_gia'] ?>">
                                            <span>
                                            <?= number_format((($item['don_gia'] - $item['gia_giam'])), 0, ".", ".") ?>đ
                                            
                                            </span>
                                        </td>
                                        <td data-th="Số lượng">
                                            <form action="delete-cart.php?act=update_sl" method="post">
                                                <input type="number" class="form-control sl" name="update_sl"
                                                    onchange="this.form.submit()" value="<?= $item['sl'] ?>">
                                                <input type="hidden" class="form-control" name="ma_mon_an"
                                                    value="<?= $index ?>">
                                            </form>
                                        </td>
                                        <td data-th="Tổng tiền" class="text-center">
                                            <?= number_format((($item['don_gia'] - $item['gia_giam']) * $item['sl']), 0, ".", ".") ?>
                                            đ
                                        </td>
                                        <td class="actions col-sm-8" data-th="">

                                            <a onclick="return confirm('Bạn chắc chắn muốn xóa ?');"
                                                href="<?= $SITE_URL . "/cart/delete-cart.php?act=delete&id=" . $index ?>"
                                                class="btn btn-outline-danger "> <i class="fas fa-trash-alt"></i></a>
                                          
                                        </td>
                                    </tr>

                                <?php endforeach; ?>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td >
                                <a onclick="return confirm('Bạn chắc chắn muốn xóa tất cả ?');"
                                                href="<?= $SITE_URL . "/cart/delete-cart.php?act=deleteAll" ?>"
                                                class="btn btn-danger mt-2">Xóa tất cả</a>
                                </td>
                            </tbody>
                            <tfoot>

                                <tr>
                                    <td><a href="<?= $SITE_URL ?>/mon-an/liet-ke.php" class="btn btn-warning"
                                            previewlistener="true"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                                    </td>
                                    <td colspan="2" class="hidden-xs"> </td>
                                    <td class="text-right"> <strong id="tongdonhang">Tổng tiền:
                                            <?= number_format($totalAll, 0, ".", ".") ?> đ
                                        </strong>
                                    </td>
                                    <td> <a style="background-color: #cda45e;"
                                            href="<?= $SITE_URL . "/cart/list-cart.php?form_invoice" ?>"
                                            class="btn btn-success">Thanh toán</a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    <?php else: ?>
                        <div class="row m-1 pb-5">
                            <h6 class="col-12 text-center text-dark">Không tồn tại sản phẩm nào trong giỏ hàng </h6>
                            <a style="background-color: #cda45e" id="back-home" class="btn col-12 text-white"
                                href="<?= $ROOT_URL ?>">Về trang chủ</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Function to update the total amount  
        function updateTotalAmount() {
            var totalAmount = <?= $totalAll ?>;

            // Iterate through each row in the table
            $('#cart tbody tr').each(function () {
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