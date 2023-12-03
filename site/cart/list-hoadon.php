

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Đơn Hàng</title>
    <style>
        body {
            background-image: url(<?= $CONTENT_URL ?>/assets/img/about-bg.jpg);
            background-size: cover;
            margin-top: 5rem;
            color: white; /* Set text color to white for better contrast */
        }

        .container {
            padding-top: 5rem;
        }

        h3.text-center {
            margin-top: 3rem;
            margin-bottom: 3rem;
        }

        table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: rgba(253, 152, 155, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        thead {
            background-color: #28a745; /* Green background color */
            color: white; /* White text color */
        }

        tbody tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.1); /* Light gray background for even rows */
        }

        td:last-child {
            width: 150px;
        }

        .status-pill {
            padding: 5px;
            border-radius: 20px;
            width: 120px;
            display: inline-block;
        }

        .pending {
            background-color: #ffc107; /* Yellow background color */
            color: black; /* Black text color for better visibility */
        }

        .confirmed {
            background-color: #28a745; /* Green background color */
        }

        .shipping {
            background-color: #17a2b8; /* Blue background color */
        }

        .delivered {
            background-color: #007bff; /* Primary blue background color */
        }

        .cancelled {
            background-color: #dc3545; /* Red background color */
        }

        .unknown {
            background-color: #6c757d; /* Secondary gray background color */
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Danh Sách Đơn Hàng</h3>
        <form action="" method="post">
            <table >
                <thead style=" background-color: #cda45e;">
                    <tr>
                        <th>Mã hóa đơn</th>                  
                        <th>Tên khách hàng</th>                     
                        <th>Giảm Giá</th>
                        <th>Tổng Tiền</th>
                        <th>Thời Gian Đặt</th>
                        <th>Phương Thức</th>
                        <th>Trang Thái</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php


if (isset($_SESSION['user'])):
    $ma_kh = $_SESSION['user']['ma_kh'];
    $items = hoa_don_select_with_khach_hang($ma_kh);
    if (!empty($items)) {
        foreach ($items as $item) {

            extract($item);
            ?>
            <tr class="text-white">
                <input type="hidden" name="ma_mon_an[]" value="<?= $ma_mon_an ?>">
                <input type="hidden" name="ma_kh[]" value="<?= $ma_kh ?>">
                <td>
                    <?= $ma_hoa_don ?>
                </td>
              
                <td>
                    <?= $ho_ten ?>
                </td>
               
                <td>
                    <?= $gia_giam ?> đ
                </td>
                <td>
                    <?= $tong_tien, ".", 0, 0, 0 ?> đ
                </td>
                <td>
                    <?= $ngay_dat ?>
                </td>
                <td>
                    <?= ($phuong_thuc == 0) ? "Tiền mặt" : "VNpay"; ?>
                </td>
                <td style="width: 150px;">
                    <?php
                    if ($trang_thai == 0) {
                        echo "<b class='p-1 text-black bg-warning border bg-maring rounded-pill' style='width: 120px;'>Chờ xác nhận</b>";
                    } elseif ($trang_thai == 1) {
                        echo "<b class='bg-success p-1 text-white border rounded-pill' style='width: 120px;'>Đã xác nhận</b>";
                    } elseif ($trang_thai == 2) {
                        echo "<b class='bg-info p-1 text-white border rounded-pill' style='width: 120px;'>Đang giao</b>";
                    } elseif ($trang_thai == 3) {
                        echo "<b class='bg-primary p-1 text-white border rounded-pill' style='width: 120px;'>Đã giao</b>";
                    } elseif ($trang_thai == 4) {
                        echo "<b class='bg-danger p-1 text-white border rounded-pill' style='width: 120px;'>Đã hủy</b>";
                    } else {
                        // Handle any other cases if needed
                        echo "<b class='bg-secondary p-1 text-white border rounded-pill' style='width: 120px;'>Không xác định</b>";
                    }
                    ?>
                </td>

            </tr>
            <?php
        }
    } else {
        echo "Không có thông tin";
    }
endif;
?>
                </tbody>
            </table>
        </form>
    </div>
</body>

</html>
