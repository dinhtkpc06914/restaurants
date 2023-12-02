
<div class="page-title">
    <div class="title_left">
        <h3>CHI TIẾT BÌNH LUẬN</h3>
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
                <div class="box-body mx-auto col-sm-12">
                <form action="?btn_delete_all" method="post" >


 <table width="100%" class="table table-hover table-bordered text-center">
     <thead class=""  style="background: #2A3F54;">
         <tr class="text-white">
             <th><input type="checkbox" id="select-all"></th>  
             <th>Món ăn </th>              
             <th>Nội dung</th>
             <th>Ngày bình luận</th>
             <th>Người bình luận </th>
             <th></th>
         </tr>
     </thead>
     <tbody>
         <?php
         foreach ($items as $item) {
             extract($item);
         ?>
         <tr>
             <td><input type="checkbox" name="ma_binh_luan[]" value="<?= $ma_binh_luan ?>"></td>
             <td><?= $items[0]['ten_mon_an'] ?></td>
             <td><?= $noi_dung ?></td>
             <td><?= $ngay_binh_luan ?></td>
             <td><?= $ma_kh ?></td>
             <td class="text-end">
                 <a href="index.php?btn_delete&ma_binh_luan=<?= $ma_binh_luan ?>&ma_mon_an=<?= $ma_mon_an ?>"
                     class="btn btn-outline-danger btn-rounded" onclick="return checkDelete()"><i
                         class="fas fa-trash"></i></a>
             </td>   
         </tr>
         <?php
         }

         ?>
     </tbody>

 </table>
 <button  style="background: #2A3F54;" type="submit" class="btn text-white" id="deleteAll" onclick="return checkDelete()">
     Xóa mục đã chọn</button>
     <a  style="background: #2A3F54;" class="btn text-white" href="index.php">Quay lại</a>
 <input type="hidden" name="ma_mon_an" value="<?= $ma_mon_an ?>">
 <div class="mt-3" width="100%">
     <ul class="pagination justify-content-center">
         <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++) { ?>

         <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
             <a  style="background: #2A3F54;" class="page-link" href="?ma_mon_an=<?= $ma_mon_an ?>&page=<?= $i ?>"><?= $i ?></a>
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
</div>
</div>
