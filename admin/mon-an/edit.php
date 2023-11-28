<?php

$img_path = $UPLOAD_URL . '/products/' . $hinh;
if (is_file($img_path)) {
    $img = "<img src='$img_path' height='80'>";
} else {
    $img = "no photo";
}

?>
<div class="page-title">
    <div class="title_left">
        <h3>Sửa thông tin món ăn</h3>
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
                <form action="index.php?btn_update" method="POST" enctype="multipart/form-data" id="update_hang_hoa" onsubmit="return validateForm()">
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="ma_loai" class="form-label">Loại hàng</label>
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
                       
                        <div class="form-group col-sm-12">
                            <label for="ma_hh" class="form-label">Mã món ăn</label>
                            <input type="hidden" name="ma_mon_an" id="ma_mon_an" readonly class="form-control"
                                value="<?= $ma_mon_an ?>">
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-12">
                            <label for="ten_mon_an" class="form-label">Tên món ăn</label>
                            <input type="text" name="ten_mon_an" id="ten_mon_an" class="form-control" 
                                value="<?= $ten_mon_an ?>">
                                <p id="ten_mon_an_error" style="color: red;"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                        <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <label for="up_hinh" class="form-label">Ảnh sản phẩm</label>
                                    <input type="hidden" name="hinh" id="hinh" class="form-control"
                                        value="<?= $hinh ?>">
                                    <input type="file" name="up_hinh" id="up_hinh" class="form-control">
                                </div>
                                <div class="col-sm-4 ">
                                    <!-- Ảnh sp -->
                                    <?= $img ?>
                                </div>
                            </div>     
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="don_gia" class="form-label">Đơn giá (vnđ)</label>
                            <input type="text" name="don_gia" id="don_gia" class="form-control" value="<?= $don_gia ?>">
                            <p id="don_gia_error" style="color: red;"></p>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="giam_gia" class="form-label">Giảm giá (vnđ)</label>
                            <input type="text" name="giam_gia" id="giam_gia" class="form-control" 
                                value="<?= $gia_giam ?>">
                                <p id="giam_gia_error" style="color: red;"></p>
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-12">
                            <label for="mo_ta_mon" class="form-label">Mô tả món ăn</label>
                            <textarea id="txtarea" spellcheck="false" name="mo_ta_mon"
                                class="form-control form-control-lg mb-3" id="textareaExample" rows="3"><?=$mo_ta_mon?></textarea>
                            <p id="mo_ta_mon_error" style="color: red;"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label>Hàng đặc biệt?</label>
                            <div class="form-control">
                                <label class="radio-inline  mr-3">
                                    <input type="radio" value="1" name="dac_biet" <?= $dac_biet ? 'checked' : '' ?>>Đặc
                                    biệt
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="0" name="dac_biet"
                                        <?= !$dac_biet ? 'checked' : '' ?>>Bình thường
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="ngay_nhap" class="form-label">Ngày nhập</label>
                            <input type="date" name="ngay_nhap" id="ngay_nhap" class="form-control" required
                                value="<?= $ngay_nhap ?>">
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="so_luot_xem" class="form-label"></label>
                            <input type="hidden" name="so_luot_xem" id="so_luot_xem" readonly class="form-control"
                                required value="<?= $luot_xem ?>">
                        </div>
                    </div>
                  

                    <div class="mb-3 text-center">
                        <input style="background-color: #2A3F54;" type="submit" name="btn_update" value="Cập nhật" class="btn btn-info mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn btn-success" value="Danh sách" style="background-color: #2A3F54;"></a>
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
<script>
    function validateForm() {
        var valid = true;

        // Reset error messages
        document.getElementById("ten_mon_an_error").innerText = "";
        document.getElementById("don_gia_error").innerText = "";
        document.getElementById("giam_gia_error").innerText = "";
        document.getElementById("mo_ta_mon_error").innerText = "";

        // Validate Tên món ăn
        var ten_mon_an = document.getElementById("ten_mon_an").value;
        if (ten_mon_an.trim() === "") {
            document.getElementById("ten_mon_an_error").innerText = "Vui lòng nhập tên món ăn!";
            valid = false;
        }

        // Validate Đơn giá
        var don_gia = document.getElementById("don_gia").value;
        if (don_gia.trim() === "") {
            document.getElementById("don_gia_error").innerText = "Vui lòng nhập đơn giá!";
            valid = false;
        } else if (isNaN(don_gia)) {
            document.getElementById("don_gia_error").innerText = "Đơn giá phải là một số!";
            valid = false;
        }

        // Validate Giảm giá
        var giam_gia = document.getElementById("giam_gia").value;
        if (giam_gia.trim() !== "" && isNaN(giam_gia)) {
            document.getElementById("giam_gia_error").innerText = "Giảm giá phải là một số!";
            valid = false;
        }else if (parseFloat(giam_gia) > parseFloat(don_gia)) {
                document.getElementById("giam_gia_error").innerText = "Giảm giá không thể lớn hơn đơn giá!";
                valid = false;
            }

        // Validate Mô tả món ăn
        var mo_ta_mon = document.getElementById("txtarea").value;
        if (mo_ta_mon.trim() === "") {
            document.getElementById("mo_ta_mon_error").innerText = "Vui lòng nhập mô tả món ăn!";
            valid = false;
        }

        return valid;
    }
</script>

