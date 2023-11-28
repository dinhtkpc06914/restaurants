
<div class="page-title">
    <div class="title_left">
        <h3>THỐNG KÊ MÓN ĂN</h3>
    </div>

</div>
<div class="row">
    <div class="col-md-10 col-sm-10">
        <div class="x_panel">
            <div class="x_title">
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <table width="80%" class="table table-hover table-bordered text-center">
                <thead class=""   style="background: #2A3F54;">
                    <tr class="text-white">
                        <th>LOẠI HÀNG</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($items as $item) {
                        extract($item);

                    ?>
                    <tr>
                        <td><?= $ten_loai_mon ?></td>
                        <td><?= $so_luong ?></td>
                        <td><?= number_format($gia_min, 0) ?>đ</td>
                        <td><?= number_format($gia_max, 0) ?>đ</td>
                        <td><?= number_format($gia_avg, 0) ?>đ</td>
                    </tr>
                    <?php
                    }

                    ?>
                </tbody>
            </table>
            <a href="index.php?chart"   style="background: #2A3F54;" class="btn  text-white float-right">Xem biểu đồ<i class="fas fa-eye ml-2"></i></a>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>
