
<div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>THÊM MỚI LOẠI BÀN</h3>
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
                                <form action="index.php" method="POST" id="add_loai" onsubmit="return validateForm()" >
                                <div class="mb-3" >
                                    <label for="ten_loai_ban" class="form-label">Tên loại bàn</label>
                                    <input type="text" name="ten_loai_ban" class="form-control"
                                        placeholder="Nhập tên loại..." id="ten_loai_ban">
                                    <p id="ten_loai_ban_error" style="color: red;"></p>
                                </div>
                                <div class="mb-3">
                                    <label  for="mo_ta" class="form-label">Mô tả</label>
                                    <textarea id="editor" class="form-control" name="mo_ta" placeholder="Nội dung mô tả..."
                                        rows="4"></textarea>
                                    <p id="mo_ta_error" style="color: red;"></p>
                                </div>
                                <div class="mb-3">
                                    <label for="mo_ta" class="form-label">Trạng thái </label>
                                    <input type="text" name="trang_thai" class="form-control">
                                    <p id="trang_thai_error" style="color: red;"></p>
                                </div>
                                <div class="mb-3 text-center">
                                    <input style="background-color: #2A3F54;" type="submit" name="btn_insert"
                                        value="Thêm mới" class="btn btn-info mr-3">
                                    <a href="index.php?btn_list"><input type="button" class="btn btn-success"
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

        var ten_loai_ban = document.getElementsByName("ten_loai_ban")[0].value;
        var mo_ta = document.getElementsByName("mo_ta")[0].value;
        var trang_thai = document.getElementsByName("trang_thai")[0].value;

        // Kiểm tra trường 'ten_loai_ban'
        if (ten_loai_ban.trim() === "") {
            document.getElementById("ten_loai_ban_error").innerText = "Vui lòng nhập Tên loại bàn.";
            valid = false;
        } else {
            document.getElementById("ten_loai_ban_error").innerText = "";
        }

        // Kiểm tra trường 'mo_ta'
        if (mo_ta.trim() === "") {
            document.getElementById("mo_ta_error").innerText = "Vui lòng nhập Mô tả.";
            valid = false;
        } else {
            document.getElementById("mo_ta_error").innerText = "";
        }

        // Kiểm tra trường 'trang_thai'
        if (trang_thai.trim() === "") {
            document.getElementById("trang_thai_error").innerText = "Vui lòng nhập Trạng thái.";
            valid = false;
        } else {
            document.getElementById("trang_thai_error").innerText = "";
        }

        return valid;
    }
</script>
</script>