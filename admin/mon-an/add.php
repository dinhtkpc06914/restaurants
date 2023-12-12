<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Thêm mới món ăn</h3>
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
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                        <form action="index.php" method="POST" enctype="multipart/form-data" id="add_mon_an"
                            onsubmit="return validateForm()">
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="ma_loai_mon" class="form-label">Loại món ăn</label>
                                    <select name="ma_loai_mon" class="form-control" id="ma_loai_mon">
                                        <?php
                                        if (isset($loai_mon) && is_array($loai_mon)) {
                                            foreach ($loai_mon as $loai) {
                                                extract($loai);
                                                echo '<option value="' . $ma_loai_mon . '">' . $ten_loai_mon . '</option>';
                                            }
                                        } else {
                                            echo '<option value="">Không có dữ liệu</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <!-- <div class="form-group col-sm-12">
                            <label for="ma_mon_an" class="form-label">Mã món ăn</label>
                            <input type="text" name="ma_mon_an" id="ma_mon_an" readonly class="form-control"
                                value="Tự tăng">
                        </div> -->
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="ten_mon_an" class="form-label">Tên món ăn</label>
                                    <input type="text" name="ten_mon_an" id="ten_mon_an" class="form-control"
                                        placeholder="Nhập tên món ăn...">
                                    <p id="ten_mon_an_error" style="color: red;"></p>
                                </div>
                            </div>
                            <div class="row">

                                <div class="form-group col-sm-12">
                                    <label for="don_gia" class="form-label">Đơn giá (vnđ)</label>
                                    <input type="number" name="don_gia" id="don_gia" class="form-control"
                                        placeholder="Nhập đơn giá...">
                                    <p id="don_gia_error" style="color: red;"></p>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="giam_gia" class="form-label">Giảm giá (vnđ)</label>
                                    <input type="number" name="giam_gia" id="giam_gia" class="form-control"
                                        placeholder="Nhập giá giảm...">
                                    <p id="giam_gia_error" style="color: red;"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="hinh" class="form-label">Ảnh món ăn</label>
                                    <input type="file" name="hinh" id="hinh" class="form-control"
                                        placeholder="Chọn ảnh...">
                                    <p id="hinh_error" style="color: red;"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label>Hàng đặc biệt?</label>
                                    <div class="form-control">
                                        <label class="radio-inline  mr-3">
                                            <input type="radio" value="1" name="dac_biet">Đặc biệt
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" value="0" name="dac_biet" checked>Bình thường
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <?php $today = date_format(date_create(), 'Y-m-d'); ?>
                                    <label for="ngay_nhap" class="form-label">Ngày nhập</label>
                                    <input type="date" name="ngay_nhap" id="ngay_nhap" class="form-control"
                                        value="<?= $today ?>">
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="so_luot_xem" class="form-label"></label>
                                    <input type="hidden" name="so_luot_xem" id="so_luot_xem" readonly
                                        class="form-control" value="0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="mo_ta_mon" class="form-label">Mô tả món ăn</label>
                                    <textarea id="editor" spellcheck="false" name="mo_ta_mon"
                                        class="form-control form-control-lg mb-3" id="textareaExample" rows="3"
                                        placeholder="Mô tả món ăn..."></textarea>
                                    <p id="mo_ta_mon_error" style="color: red;"></p>
                                </div>
                            </div>

                            <div class="mb-3 text-center">
                                <input type="submit" name="btn_insert" value="Thêm mới" class="btn text-white"
                                    style="background-color: #2A3F54;">
                                <a href="index.php?btn_list"><input type="button" class="btn text-white"
                                        style="background-color: #2A3F54;" value="Danh sách"></a>
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
        var ten_mon_an = document.getElementById("ten_mon_an").value;
        var hinh = document.getElementById("hinh").value;
        var don_gia = parseInt(document.getElementById("don_gia").value, 10);  // chuyển sang kiểu số nguyên để so sánh
        var giam_gia = parseInt(document.getElementById("giam_gia").value, 10);
        var mo_ta_mon = document.getElementsByName("mo_ta_mon")[0].value;

        if (ten_mon_an === "") {
            document.getElementById("ten_mon_an_error").innerText = "Vui lòng nhập tên hàng hóa.";
            valid = false;
        } else {
            document.getElementById("ten_mon_an_error").innerText = "";
        }

        if (hinh === "") {
            document.getElementById("hinh_error").innerText = "Vui lòng chọn một ảnh.";
            valid = false;
        } else {
            document.getElementById("hinh_error").innerText = "";
        }

        if (isNaN(don_gia) || don_gia <= 0) {
            document.getElementById("don_gia_error").innerText = "Vui lòng nhập giá trị hợp lệ cho đơn giá.";
            valid = false;
        } else {
            document.getElementById("don_gia_error").innerText = "";
        }

        if (isNaN(giam_gia) || giam_gia < 0) {
            document.getElementById("giam_gia_error").innerText = "Vui lòng nhập giá trị hợp lệ cho giảm giá.";
            valid = false;
        } else if (giam_gia > don_gia) {
            document.getElementById("giam_gia_error").innerText = "Giảm giá không được lớn hơn đơn giá.";
            valid = false;
        } else {
            document.getElementById("giam_gia_error").innerText = "";
        }

        if (mo_ta_mon === "") {
            document.getElementById("mo_ta_mon_error").innerText = "Vui lòng nhập mô tả.";
            valid = false;
        } else {
            document.getElementById("mo_ta_mon_error").innerText = "";
        }

        return valid;
    }


</script>