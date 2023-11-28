
<div>
    <div class="page-title">
    <div class="title_left">
        <h3>DANH SÁCH LOẠI BÀN</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-10 col-sm-10 ">
        <div class="x_panel">
            <div class="x_title">              
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form action="?btn_delete_all" method="post" >
               
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead >
                        <tr  style="background-color: #2A3F54;" class=" text-white">
                            <th><input type="checkbox" id="selmect-all"></th>
                            <th>Mã loại</th>
                            <th>Tên loại</th>
                            <th>Mô tả</th>
                            <th>Trạng Thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($items as $item) {
                            extract($item);
                            $suadm = "index.php?btn_edit&ma_loai_ban=" . $ma_loai_ban;
                            $xoadm = "index.php?btn_delete&ma_loai_ban=" . $ma_loai_ban;

                        ?>
                        <tr>
                            <td><input type="checkbox" name="ma_loai_ban[]" value="<?= $ma_loai_ban ?>"></td>
                            <td><?= $ma_loai_ban ?></td>
                            <td><?= $ten_loai_ban ?></td>
                            <td><?= $mo_ta?></td>
                            <td><?= $trang_thai?></td>
                            <td class="text-end">
                                <a href="<?= $suadm ?>" class="btn btn-outline-info btn-rounded"><i
                                        class="fas fa-pen"></i></a>
                                <a href="<?= $xoadm ?>" class="btn btn-outline-danger btn-rounded"
                                    onclick="return checkDelete()"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                        }

                        ?>
                    </tbody>

                </table>
                <button style="background-color: #2A3F54;" type="submit" class="btn btn-info mb-1" id="deleteAll" onclick="return checkDelete()">
                    Xóa mục đã chọn</button>

                    <a href="index.php" class="btn  text-white" style="background-color: #2A3F54;">Thêm mới
                                    <i class="fas fa-plus-circle"></i></a>
            </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>




