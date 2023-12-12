<div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>SỬA THÔNG TIN LOẠI BÀN</h3>
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
                                <form action="index.php?btn_update" method="POST" id="edit_loai" onsubmit="return validateForm()" >
                       
                        <div class="mb-3">
                            <label for="ten_loai_ban" class="form-label">Tên loại</label>
                            <input type="text" name="ten_loai_ban" id="ten_loai_ban" placeholder="Nhập tên loại" class="form-control"
                                value="<?= $ten_loai_ban ?>">
                                <p id="ten_loai_ban_error" style="color: red;"></p>
                        </div>
                        <div class="mb-3">
                            <label for="mo_ta" class="form-label">Mô tả</label>
                            <textarea id="editor" class="form-control" name="mo_ta"  placeholder="Nội dung mô tả..."
                                rows="4"> <?= $mo_ta ?></textarea>
                                <p id="mo_ta_error" style="color: red;"></p>
                        </div>
                      
                        <div class="mb-3 text-center">
                            <input  type="hidden" name="ma_loai_ban" value="<?= $ma_loai_ban ?>">
                            <input  style="background: #2A3F54;" type="submit" name="btn_update" value="Cập nhật" class="btn btn-info mr-3">
                            <a href="index.php?btn_list"><input  style="background: #2A3F54;" type="button" class="btn btn-success"
                                    value="Danh sách"></a>
                        </div>
                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<script>
    function validateForm() {
        var valid = true;

        // Reset error messages
        document.getElementsByName("ten_loai_ban").innerText = "";
        document.getElementsByName("trang_thai").innerText = "";
        document.getElementsByName("mo_ta").innerText = "";

        // Validate Tên món ăn
        var ten_loai_ban = document.getElementsByName("ten_loai_ban")[0].value;
        if (ten_loai_ban.trim() === "") {
            document.getElementById("ten_loai_ban_error").innerText = "Vui lòng nhập tên loại bàn!";
            valid = false;
        }
        var trang_thai = document.getElementsByName("trang_thai")[0].value;
        if (trang_thai.trim() === "") {
            document.getElementById("trang_thai_error").innerText = "Vui lòng chọn trạng thái !";
            valid = false;
        }
        // Validate Mô tả món ăn
        var mo_ta = document.getElementsByName("mo_ta")[0].value;
        if (mo_ta.trim() === "") {
            document.getElementById("mo_ta_error").innerText = "Vui lòng nhập mô tả !";
            valid = false;
        }

        return valid;
    }
</script>
