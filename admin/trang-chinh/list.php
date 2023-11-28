
<div class="page-title">
    <div class="title_left">
        <h3>THỐNG KÊ MÓN ĂN</h3>
    </div>

</div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <table width="100%" class="table table-hover table-bordered text-center">
                <thead class="bg-info">
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
            <a href="index.php?chart" class="btn btn-info text-white float-right">Xem biểu đồ<i class="fas fa-eye ml-2"></i></a>
            </div>
        </div>
    </div>
</div>
<div id="thongke" class="mx-auto">
    <div class="card-single col d-flex justify-content-around bg-success text-white py-5 ml-3">
            <div>
                <h5 class="font-weight-bold"><?= $loai ?></h5>
                <span>Danh mục</span>
            </div>
            <div>
                <i class="fas fa-th-list" style="font-size: 80px;"></i>
            </div>
        </div>
        <div class="card-single col d-flex justify-content-around bg-warning text-white py-5 ml-3">
            <div>
                <h5 class="font-weight-bold"><?= $mon_an ?></h5>
                <span>Sản phẩm</span>
            </div>
            <div>
                <i class="fas fa-sitemap" style="font-size: 80px;"></i>
            </div>
        </div>
        <div class="card-single col d-flex justify-content-around bg-danger text-white py-5 ml-3">
            <div>
                <h5 class="font-weight-bold"><?= $khach_hang ?></h5>
                <span>Khách hàng</span>
            </div>
            <div>
                <i class="fas fa-users" style="font-size: 80px;"></i>
            </div>
        </div>
        <div class="card-single col d-flex justify-content-around bg-primary text-white py-5 ml-3">
            <div>
                <h5 class="font-weight-bold"><?= $binh_luan ?></h5>
                <span>Bình luận</span>
            </div>
            <div>
                <i class="fas fa-comments" style="font-size: 80px;"></i>
            </div>
        </div>
    </div>
   

<style>
    #thongke {
        display: flex;
        margin-left: 60%;
        padding: 0 0  20px;
    }
</style>
</div>
</div>
</div>
</div>
