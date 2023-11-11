
<div>
    <div class="page-title">
    <div class="title_left">
        <h3>Danh sách khách hàng</h3>
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
                
                <form action="?btn_delete_all" method="post" class="table-responsive">
              
              <table width="100%" class="table table-hover table-bordered text-center ">
                  <div >
                      <tr class="bg-info text-white" >
                          <th><input type="checkbox" id="select-all"></th>
                          <th>Mã KH</th>
                          <th>Họ và tên</th>
                          <th>Địa chỉ email</th>
                          <th>Số điện thoại</th>
                          <th>Ảnh</th>
                         
                          <th><a href="index.php" class="btn btn-outline-success text-white">Thêm mới
                                  <i class="fas fa-plus-circle"></i></a></th>
                      </tr>
                  </div>
                  
                  <tbody>
                      <?php

                      foreach ($items as $item) {
                          extract($item);
                          $suakh = "index.php?btn_edit&ma_kh=" . $ma_kh;
                          $xoakh = "index.php?btn_delete&ma_kh=" . $ma_kh;
                          $img_path = $UPLOAD_URL . '/users/' . $hinh;
                          if (is_file($img_path)) {
                              $img = "<img src='$img_path' height='50' width='50' class='rounded-circle object-fit-cover'>";
                          } else {
                              $img = "no photo";
                          }
                       
                      ?>
                      <tr >
                          <td><input type="checkbox" name="ma_kh[]" value="<?= $ma_kh ?>"></td>
                          <td><?= $ma_kh ?></td>
                          <td><?= $ho_ten ?></td>
                          <td><?= $email ?></td>
                          <td><?= $sdt ?></td>
                          <td>
                              <img src="<?=$UPLOAD_URL . '/users/' . $hinh?>" alt="" width="40px" height="30px">
                          </td>
                         
                          <td class="text-end">
                              <a href="<?= $suakh ?>" class="btn btn-outline-info btn-rounded"><i
                                      class="fas fa-pen"></i></a>
                              <a href="<?= $xoakh ?>" class="btn btn-outline-danger btn-rounded"
                                  onclick="return checkDelete()"><i class="fas fa-trash"></i></a>
                          </td>
                      </tr>
                      <?php
                      }

                      ?>
                  </tbody>

              </table>
              <button type="submit" class="btn btn-primary mb-1 text-white" id="deleteAll" onclick="return checkDelete()">
                  Xóa mục đã chọn</button>
          </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>



