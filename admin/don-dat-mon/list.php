




<div>
    <div class="page-title">
        <div class="title_left">
            <h3>DANH SÁCH ĐƠN HANG</h3>
        </div>
    </div>
    <div class="row">
        <div class=" col-sm-10 col-md-10">
            <div class="x_panel">
                <div class="x_title">
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form action="" method="POST">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr style="font-weight: 500;text-align: center;">
                                    <td width="50px">STT</td>
                                    <td width="200px">Tên User</td>
                                    <td width="200px"  >Tên Sản Phẩm/<br>Số lượng</td>
                                    <td>Tổng tiền</td>
                                    <td width="250px">Địa chỉ</td>
                                    <td width="250px">Ngày đặt</td>
                                    <td>Số điện thoại</td>
                                   
                                    <td>Trạng thái</td>
                                    <td width="100px">Thao tác</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total = 0;
                                $count = 0;

                                foreach ($items as $item) {
                                    echo '
                                    <tr style="text-align: center;">
                                        <td width="50px">' . (++$count) . '</td>
                                        <td style="text-align:center">' . $item['ma_kh'] . '</td>
                                        <td>' . $item['ten_mon_an'] . '<br>(<strong>' . $item['so_luong'] . '</strong>)</td>
                                        <td class="b-500 red">' . number_format($item['don_gia'], 0, ',', '.') . '<span> VNĐ</span></td>
                                        <td width="100px">' . $item['dia_chi'] . '</td>
                                        <td width="100px">' . $item['ngay_tao'] . '</td>
                                        <td width="100px">' . $item['sdt'] . '</td>
                                        <td width="100px" class="green b-500">' . $item['trang_thai'] . '</td>
                                        <td width="100px">
                                            <a href="edit.php?ma_chi_tiet=' . $item['ma_chi_tiet'] . '" class="btn btn-success">Edit</a>
                                        </td>
                                    </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </form>
                    

                    <div class="mt-3" width="100%">
                    <ul class="pagination">
                        <?php
                        echo '<ul class="pagination">';
                        for ($i = 1; $i <= $currentPage; $i++) {
                            // Nếu là trang hiện tại thì hiển thị thẻ span
                            // ngược lại hiển thị thẻ a
                            if ($i == $page) {
                                echo '<li class="page-item"><span class="page-link">' . $i . '</span></li>';
                            } else {
                                echo '<li class="page-item"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                            }
                        }
                        echo '</ul>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
