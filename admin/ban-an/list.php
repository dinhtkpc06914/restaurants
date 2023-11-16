
<div>
    <div class="page-title">
    <div class="title_left">
        <h3>Danh sách bàn</h3>
    </div>
   
</div>
<div class="row">
<?php
        if (isset($MESSAGE) && (strlen($MESSAGE) > 0)) {
            echo '<h5 class="alert alert-warning">' . $MESSAGE . '</h5>';
        }
        ?>
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">              
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                
                <form action="?btn_delete_all" method="post" class="table-responsive">

<table width="100%" class="table table-hover table-bordered text-center">
    <thead class="bg-info">
        <tr class="text-white">
            <th><input type="checkbox" id="select-all"></th>
            <th>Mã bàn</th>
            <th>Tên bàn</th>           
            <th>Trạng thái</th>     
            <th><a href="index.php" class="btn btn-outline-success text-white">Thêm mới
                    <i class="fas fa-plus-circle"></i></a></th>
        </tr>
    </thead>
    <tbody ></tbody>
        <?php

        foreach ($items as $item) {
            extract($item);
            $suahh = "index.php?btn_edit&ma_ban=" . $ma_ban;
            $xoahh = "index.php?btn_delete&ma_ban=" . $ma_ban;
           
            ?>
            <tr class="mx-auto">
                <td><input type="checkbox" name="ma_ban[]" value="<?= $ma_ban ?>"></td>
                <td >
                    <?= $ma_ban ?>
                </td>
                <td>
                    <?= $ten_ban ?>
                </td>                         
                <td>
                    <?= $trang_thai ?>
                </td>
                <td class="text-end">
                    <a href="<?= $suahh ?>" class="btn btn-outline-info btn-rounded"><i
                            class="fas fa-pen"></i></a>
                    <a href="<?= $xoahh ?>" class="btn btn-outline-danger btn-rounded"
                        onclick="return checkDelete()"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            <?php
        }

        ?>
    </tbody>

</table>
<button type="submit" class="btn btn-primary mb-1" id="deleteAll" onclick="return checkDelete()">
    Xóa mục đã chọn</button>
<div class="mt-3" width="100%">
    <ul class="pagination justify-content-center">
        <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++) { ?>

            <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                <a class="page-link" href="?btn_list&page=<?= $i ?>">
                    <?= $i ?>
                </a>
            </li>

        <?php } ?>

    </ul>
</div>
</form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>




