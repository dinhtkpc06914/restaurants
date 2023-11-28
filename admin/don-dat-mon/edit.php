<?php

require_once('../database/dbhelper.php');

?>
<!DOCTYPE html>
<html>

<head>
    <title>Thêm Sản Phẩm</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- summernote -->
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Edit</h2>
            </div>
            <div class="panel-body">
                <form action="" method="POST">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr style="font-weight: 500;text-align: center;">
                                <td width="50px">STT</td>
                                <td width="200px">Tên User</td>
                                <td>Tên Sản Phẩm/<br>Số lượng</td>
                                <td>Tổng tiền</td>
                                <td width="250px">Địa chỉ</td>
                                <td>Số điện thoại</td>
                                <td>Trạng thái</td>
                                <!-- <td width="50px">Lưu</td> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            try {
                                if (isset($_GET['ma_chi_tiet'])) {
                                    $ma_chi_tiet = $_GET['ma_chi_tiet'];
                                }
                                $count = 0;
                                $sql = "SELECT * from hoa_don, chi_tiet_hoa_don, mon_an
                                where chi_tiet_hoa_don.ma_chi_tiet=hoa_don.ma_hoa_don and mon_an.ma_mon_an=chi_tiet_hoa_don.ma_mon_an and ma_chi_tiet=$ma_chi_tiet";
                                $chi_tiet_hoa_don_List = executeResult($sql);
                                foreach ($chi_tiet_hoa_don_List as $item) {
                                    echo '
                                        <tr style="text-align: center;">
                                            <td width="50px">' . (++$count) . '</td>
                                            <td style="text-align:center">' . $item['ten_khach_hang'] . '</td>
                                            <td>' . $item['ten_mon_an'] . '<br>(<strong>' . $item['so_luong'] . '</strong>)</td>
                                            <td class="b-500 red">' . number_format($item['don_gia'], 0, ',', '.') . '<span> VNĐ</span></td>
                                            <td width="100px">' . $item['email'] . '</td>
                                            <td width="100px">' . $item['sdt'] . '</td>
                                            <td>
                                                <select name="trang_thai" id="trang_thai" onchange="trang_thai(' . $item['ma_chi_tiet'] . ')">
                                                    <option value="Đang chuẩn bị">Đang chuẩn bị</option>
                                                    <option value="Đang giao">Đang giao</option>
                                                    <option value="Đã nhận hàng">Đã nhận hàng</option>
                                                    <option value="Đã hủy">Đã hủy</option>
                                                </select>
                                            </td>
                                            <td width="100px">
                                                <button  class="btn btn-success">Lưu</button>
                                            </td>
                                        </tr>
                                    ';
                                    $ma_chi_tiet = $item['ma_chi_tiet'];
                                }
                            } catch (Exception $e) {
                                die("Lỗi thực thi sql: " . $e->getMessage());
                            }
                            ?>
                        </tbody>
                    </table>
                    <a href="index.php?btn_list" class="btn btn-warning">Back</a>
                </form>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $trang_thai = $_POST['trang_thai'];
                    $sql = "UPDATE `chi_tiet_hoa_don` SET `trang_thai` = '$trang_thai' WHERE `ma_chi_tiet` = $ma_chi_tiet";
                    execute($sql);

                    // Thêm đoạn mã JavaScript để chuyển hướng về trang list
                    echo '<script language="javascript">
                        alert("Cập nhật thành công!");
                        window.location = "index.php?btn_list";
                     </script>';
                }

                ?>
            </div>
        </div>
    </div>
</body>
<style>
    .b-500 {
        font-weight: 500;
    }

    .red {
        color: red;
    }
</style>

</html>