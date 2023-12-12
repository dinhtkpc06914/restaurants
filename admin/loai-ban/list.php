
<div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>DANH SÁCH LOẠI BÀN</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                  
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                            </div>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                <form action="?btn_delete_all" method="post" >
               
               <table width="100%" class="table table-hover table-bordered text-center">
                   <thead >
                       <tr  style="background-color: #2A3F54;" class=" text-white">
                           
                           <th>Mã loại</th>
                           <th>Tên loại</th>
                           <th>Mô tả</th>                    
                           <th>Thao tác</th>
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
                        
                           <td><?= $ma_loai_ban ?></td>
                           <td><?= $ten_loai_ban ?></td>
                           <td><?= $mo_ta?></td   >               
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
                   <a href="index.php" class="btn  text-white" style="background-color: #2A3F54;">Thêm mới
                                   <i class="fas fa-plus-circle"></i></a>
           </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






